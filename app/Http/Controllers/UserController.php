<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return response('user spisok',200);
            return  redirect('users/create');
    }
    public function show($user){

        // return view('users.show',[
        //     'name'=>'Sherzod',
        //     'id'=>$user
        //                         ]);
        // return view('users.show')->with([
        //           'name'=>'Sherzod',
        //           'id'=>$user
        // ]);
        // dd($request->ip());
        return view('users.show')
        ->with('name','Sherzod')
        ->with('id',$user);
        // return 'Tanlangan user: '.$user;
    }
    public function create(){

        return view('users.create');
    }
    public function edit($user_id){
        return $user_id.'ni o\'zgartirish';
    }
    public function store(Request $request){
        // dd($request->input('email'));
        if($request->has('firstname')){
            echo 'yes';
        }else
        {
            echo 'no';
        }
    }
}
