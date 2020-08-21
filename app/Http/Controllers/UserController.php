<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( Request $req){
        return view('user', ['user' => User::find(Auth::id())]);
    }

    public function update (UserRequest $req){
        $user = User::find(Auth::id());
        $user->first_name = $req->input('first_name');
        $user->last_name = $req->input('last_name');
        $user->birth = $req->input('birth');
        $user->about = $req->input('about');

        $user->save();
        return redirect()->route('user')->with('success', 'Данные обновлены');
    }
}
