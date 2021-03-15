<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
           //After successfull authentication, notice how I return json parameters
            return response()->json([
              'success' => true,
              'token' => $success,
              'user' => $user
          ]);
        } else {
       //if authentication is unsuccessfull, notice how I return json parameters
          return response()->json([
            'success' => false,
            'message' => 'Invalid Email or Password',
        ], 401);
        }
    }

    // public function login(Request $req)
    // {
    //     $req->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $user = User::where('email', $req->email)->first();

    //     if (!$user || ! Hash::check($req->password, $user->password)) {
    //         return response()->json([
    //             'message' => "failed"
    //         ]);
    //     }

    //     $token =  $user->createToken($req->device_name)->plainTextToken;
    //     $this->response['message'] = 'success';
    //     $this->response['data'] = [
    //         'token' => $token
    //     ];

    //     return response()->json($this->response, 200);
    // }

    public function me()
    {
        $user = Auth::user();

        $this->response['message'] = 'success';
        $this->response['data'] = $user;
        
        return response()->json($this->response, 200);
    }

    public function logout(Request $res)
    {
        if (Auth::user()) {
            $user = Auth::user()->token();
            $user->revoke();
    
            return response()->json([
              'success' => true,
              'message' => 'Logout successfully'
          ]);
          }else {
            return response()->json([
              'success' => false,
              'message' => 'Unable to Logout'
            ]);
          }
         }
}