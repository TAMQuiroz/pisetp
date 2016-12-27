<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Task;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::getFiltered($request->all());
        $users = [0 => 'Todos'] + User::lists('name','id')->all();
        $tasks = $tasks->paginate(3);
        
        $data = [
            'tasks' =>  $tasks,
            'users' =>  $users
        ];

        return view('home', $data);
    }
}
