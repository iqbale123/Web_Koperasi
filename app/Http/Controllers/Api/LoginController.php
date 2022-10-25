<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
public function apilogin(Request $request) {
    $request->validate([
       'email'=> 'required',
       'password'=> 'required',
    ]);

    if(Auth::attempt(['email'=> $request->email,'password'=> $request->password]) ) {
        $user = User::where('email',$request->email)->first();
        return response()->json([
            "message" => 'sukses',
            "data"=> $user,
        ],200);
    }
}
}
