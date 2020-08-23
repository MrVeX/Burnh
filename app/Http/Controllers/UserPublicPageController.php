<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserPublicPageController extends Controller
{
    public function index($name)
    {
        $user = DB::table('users')->where('name', $name)->first();
        if (collect($user)->isNotEmpty())
            return view('userPublicPage', ['user' => User::find($user->id)]);
        else
            abort(404);
    }
}
