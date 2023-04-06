<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function index(){
        return 'Controllerdan yuborish';
    }
    public function show($user){
        return 'Tanlangan user: '.$user;
    }
    public function create(){
        return view('users.create');
    }
    public function edit($user_id){
        return $user_id.'ni o\'zgartirish';
    }
}
