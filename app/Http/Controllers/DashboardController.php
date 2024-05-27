<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard',[
            'title' => 'KONTOL'
        ]);
    }

    public function test(){
        $users = User::all();
        return view('test',[
            'users' =>$users 
        ]);
    }
}