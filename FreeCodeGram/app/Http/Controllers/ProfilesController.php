<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        // dd($user);

        $user = User::findOrFail($user);
        // dd($user);

        // error_log($user->profile
        return view('profiles.index', [
            'user'=>$user,
        ]);
    }
}
