<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function sayhello(){
        $message = "Laravel User";
        return view('hello',['msg'=>$message]);
    }

    public function index()
    {
        $name="CompUser";
        return view('index',['nm'=>$name]);
    }
}
