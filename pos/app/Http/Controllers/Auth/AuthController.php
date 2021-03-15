<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $response = [
        'message' => null,
        'data' => null
    ];

    public function register(Request $req)
    {
        $req->validate([
            'nama_user' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = User::create([
            'nama_user' => $req->nama_user,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        $this->response['message'] = 'success';
        return response()->json($this->response, 200);
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $req->email)->first();

        if (!$user || ! Hash::check($req->password, $user->password)) {
            return response()->json([
                'message' => "failed"
            ]);
        }

        // $user->tokens()->where('name', $req->device_name)->delete();
        $token =  $user->createToken($req->device_name)->plainTextToken;
        $this->response['message'] = 'success';
        $this->response['data'] = [
            'token' => $token
        ];

        return response()->json($this->response, 200);
    }

    public function me()
    {
        $user = Auth::user();

        $this->response['message'] = 'success';
        $this->response['data'] = $user;
        
        return response()->json($this->response, 200);
    }

    public function logout()
    {
        $logout = auth()->user()->currentAccessToken()->delete();

        $this->response['message'] = 'success';

        return response()->json($this->response, 200);
    }
}