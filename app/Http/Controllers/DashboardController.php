<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    function __invoke()
    {
        $response = Http::post('http://127.0.0.1:8000/api/dashboard');

        dd($response);

        $data = json_decode($response);

        dd($data);

        return view('profile.dashboard', ['user' => $data]);
    }
}
