<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;


class UserController extends Controller
{

    public function register(Request $request) {
//        console.log("here");
//        console.log($request);
//        $user = User::created($request->all());
//        console.log($user);


        $credentials = $request->only('name', 'email', 'password');
        console.log($credentials);
//        try {
//            if(! $token = JWTAuth::attempt($credentials)) {
//                return $this->response-erro(['error' => 'User credentials are not correct'], 401);
//            }
//        } catch (JWTException $ex) {
//
//        }
//
//        return $this->respose->array(compact('token'))->setStatusCode(200);

    }

    public function login(Request $request) {

        console.log('login');

    }


    public function store(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required',
//            'body' => 'required'
//        ]);
//
//        $user = User::find(1);
//        $user->task()->create($request->all());
//        return "success";
        console.log("here");
        console.log($request);
    }



}
