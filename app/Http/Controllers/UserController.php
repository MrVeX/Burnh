<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        return view('user', ['user' => Auth::user()]);
    }

    public function updateInfo(UserRequest $req)
    {
        $user = User::find(Auth::id());
        $user->first_name = $req->input('first_name');
        $user->last_name = $req->input('last_name');
        $user->birth = $req->input('birth');
        $user->about = $req->input('about');

        $user->save();
        return redirect()->route('userPage')->with('success', 'Данные обновлены');
    }

    public function updateAvatar(UserRequest $req)
    {
        $user = User::find(Auth::id());
        if (!empty($req->file('avatar'))) {
            if ($user->avatar != 'avatars/question.png') {
                $avatarPath = Str::after($user->avatar, url('/'));
                Storage::delete($avatarPath);
            }
            $user->avatar = $req->file('avatar')->store('avatars');
        }
        if (!empty($req->input('avatar_form'))) {
            $user->avatar_form = $req->input('avatar_form');
        }
        $user->save();
        return redirect()->route('userPage')->with('success', "Аватарка обновлена");
    }
    public function portfolio(){
        return view('portfolio', ['user' => Auth::user()]);
    }
}
