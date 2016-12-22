<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model
{
    /**
     * Restrictions
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Relationships
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Helper functions
     */
    static public function forUser(User $user)
    {
        return $user->tasks()->orderBy('created_at', 'asc');
                    
    }
}