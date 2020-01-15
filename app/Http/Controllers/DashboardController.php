<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
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
     * Show the application panel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function start()
    {
        $login = Auth::user()->username;

        $user_data = User::select(
            'first_name',
            'second_name',
            'sex'
        )
        ->where('users.username', '=', $login)
        ->getQuery()
        ->first();


        return view('panel/start')->with(['user_data' => $user_data]);
    }
}
