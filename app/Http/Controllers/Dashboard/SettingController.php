<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{

    public function changePassword(Request $request)
    {
        if (Hash::check($request->get('current-password'), auth()->user()->password)) {

            auth()->user()->password = Hash::make($request->get('new-password_confirmation'));
            auth()->user()->save();

            return response()->json([
                'message' => 'Twoje hasło zostało poprawnie zmienione.'
            ], 200);

        } else {

            return response()->json([
                'message' => 'Hasła podane przez Ciebie się nie zgadzają.'
            ], 400);
        }
    }

    public function settings()
    {
        $login = Auth::user()->username;

        $user_data = User::select(
            'first_name',
            'second_name',
            'pesel',
            'nip',
            'address',
            'post_code',
            'city',
            'sex'
        )
        ->where('users.username', '=', $login)
        ->getQuery()
        ->first();

        return view('panel/ustawienia')->with(['user_data' => $user_data]);
    }
}
