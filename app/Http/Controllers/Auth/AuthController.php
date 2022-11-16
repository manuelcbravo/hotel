<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;
use Session;

class AuthController extends Controller
{
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();

            return response()->json([
                'login' => true],
                200);
        }

         return response()->json([
            'login' => false,
             'mensaje' => 'Credenciales invalidas.'],
             200);
    }

    public function LogOut(Request $request) {

        $request->user()->tokens($request->tokenID)->delete();


        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}
