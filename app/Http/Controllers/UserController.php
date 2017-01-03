<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use Ajax;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $data = [
            'user' => $user
        ];

        return view('user.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'user' => $user
        ];

        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'nickname'         =>  $request->nickname,
        ]);

        return redirect()->route('user.show',$user->id)->with('status','Se pudo editar el usuario satisfactoriamente');
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

    public function checkNickname(Request $request)
    {
        if(!Auth::check())
        {
            return response()->json(['success' => false, 'message', 'No tiene permitida esta accion'], 200);
        }

        $data = $request->task_nickname;

        if(!User::where('nickname', $data)->where('id', '<>' ,Auth::id())->first()){
            return response()->json(['success' => true, 'message' => 'Este apodo esta libre para ser usado'], 200);
        }else{
            return response()->json(['success' => false, 'message' => 'Este apodo ya se encuentra en uso'], 200);
        }
    }
}
