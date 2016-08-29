<?php

namespace App\Http\Controllers;


use App\Classes\Stemm_es;
use Illuminate\Http\Request; 
use Carbon\Carbon;
use App\User;
use App\Http\Requests;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$result = Stemm_es::stemm('algoritmia');
        //return view('test', ['result' => $result]);
        $users = User::all();
        
        //var_dump($message);
        //die();
        //dd($message);

        return view('crud.index', ['usuarios' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request['nombre'];
        $email = $request['email'];
        $pass = $request['pass'];
        
        $user = new User;
        $user->name = $nombre;
        $user->email = $email;
        $user->password = $pass;

        var_dump($user->name);
        var_dump($user->email);
        var_dump($user->password);
        
        $user->save();

        return redirect()->route('test.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('crud.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
