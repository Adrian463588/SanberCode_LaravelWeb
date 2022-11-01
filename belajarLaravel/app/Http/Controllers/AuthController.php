<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function bio()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        $first = $request['first'];
        $nama = $request['name'];

        return view('welcome',['first' => $first,'name' => $nama]);
    }
}

