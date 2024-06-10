<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    function register(Request $request){
        $response = Http::post('http://127.0.0.1:8000/api/register', $request->all());

        $data = json_decode($response);

        if ($response->status() != 200){
            return view('auth.register', ['errors' => $data->errors]);
        } else {
            return redirect('login');
        }
    }
    public function login(Request $request){
        $response = Http::post('http://127.0.0.1:8000/api/login', $request->all());

        $data = json_decode($response);

        if ($response->status() != 200){
            return view('auth.login', ['errors' => $data->errors]);
        }
        if ($request->boolean('remember-me')){
            setcookie('remember-token', $data->token);
            session(['token' => $data->token]);
        } else {
            session(['token' => $data->token]);
        }
        return redirect('dashboard');
    }
}
