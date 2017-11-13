<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function register(Request $request) {
        console.log("here");
        //console.log($request);
        $user = User::created($request->all());
        console.log($user);

    }

    public function login(Request $request) {



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
