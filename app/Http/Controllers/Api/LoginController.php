<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->
            json($validator->errors(), 422);
        }

        // $user = new User();

        // $cek = User::where($request->email,$user->email)

        //get credentials from request
        $credentials = request(["email","password"]);


        // dd($credentials);

        // dd(Auth::attempt(['email' => "d",'password' => "1"]));


        //if auth failed
        if(!Auth::attempt($credentials)){

            dd($credentials);

            // dd(auth()->guard('api')->user());
            return response()->json([
                'success' => false,
                'message' => "fail"
            ], 401);
        }

        //if auth success
        return response()->json([
            'success' => true,
            'user'    => Auth::user()->email,
            // 'token'   => $token
        ], 200);
    }
}
