<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;


class UserController extends Controller
{

    public function register(Request $request) {


        $credentials = $request->only('name', 'email', 'password');
        console.log($credentials);

    }

    public function login(Request $request) {

        console.log('login');

    }


    public function store(Request $request)
    {

    }



}
