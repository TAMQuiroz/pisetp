<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name','task_id','url', 'extension'];

    public function task()
    {
        return $this->belongsTo('App\Models\Task','task_id');
    } 
}
