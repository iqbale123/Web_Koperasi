<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
public function apilogin(Request $request) {
    $request->validate([
       'email'=> 'required',
       'password'=> 'required',
    ]);

    // if auth succes
    if(Auth::attempt(['email'=> $request->email,'password'=> $request->password]) ) {
        $user = User::where('email',$request->email)->first();
        return response()->json([
            "message" => 'sukses',
            "data"=> $user,
        ],200);
    }

    else {
        return response()->json([
            "succes" => false,
            "message" => 'Email atau password anda salah',
        ], 401);
    }
}
}
