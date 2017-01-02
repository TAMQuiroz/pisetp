<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Task extends Model
{
    /**
     * Restrictions
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','name','description','date','image','url'];

    /**
     * Relationships
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function files()
    {
        return $this->hasMany('App\Models\File', 'task_id');
    }    

    /**
     * Helper Methods
     */
    static public function forUser(User $user)
    {
        return $user->tasks()->orderBy('created_at', 'asc');
                    
    }

    static public function getFilteredForUser($filters){
        $query = Task::forUser(Auth::user())->orderBy('name', 'asc');

        if(array_key_exists("name", $filters) && $filters["name"] != "") {
            $query = $query->where('name', 'like', '%'.$filters['name'].'%');
        }

        if(array_key_exists("description", $filters) && $filters["description"] != "") {
            $query = $query->where('description', 'like', '%'.$filters['description'].'%');
        }

        if(array_key_exists("dateIni", $filters) && array_key_exists("dateEnd", $filters) && $filters["dateIni"] != "" && $filters["dateEnd"] != ""){            
            $query = $query->whereBetween("date", [$filters['dateIni'], $filters['dateEnd']]);
        }

        return $query;
    }

    static public function getFiltered($filters){
        $query = Task::orderBy('name', 'asc');

        if(array_key_exists("user_id", $filters) && ($filters["user_id"] != "" || $filters["user_id"] != 0)) {
            $query = $query->where('user_id', '=', $filters['user_id']);
        }        

        if(array_key_exists("name", $filters) && $filters["name"] != "") {
            $query = $query->where('name', 'like', '%'.$filters['name'].'%');
        }

        if(array_key_exists("description", $filters) && $filters["description"] != "") {
            $query = $query->where('description', 'like', '%'.$filters['description'].'%');
        }

        if(array_key_exists("dateIni", $filters) && array_key_exists("dateEnd", $filters) && $filters["dateIni"] != "" && $filters["dateEnd"] != ""){            
            $query = $query->whereBetween("date", [$filters['dateIni'], $filters['dateEnd']]);
        }

        return $query;
    }
}