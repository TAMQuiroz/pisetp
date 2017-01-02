<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    static public function getNotSelected($user)
    {
        $idsToDelete = [];
        $indexOfIds = [];

        foreach ($user->roles as $role) {
            array_push($idsToDelete,$role->id);
        }

    	$roles = Role::all();
        foreach ($roles as $key => $role) {
            if(in_array($role->id, $idsToDelete)){
                array_push($indexOfIds,$key);
            }
        }

        $roles->forget($indexOfIds);

        return $roles;
                    
    }
}
