<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view ("login");
    }
    public function dashboard(){
        return view ("dashboard");
    }
    public function register(){
        return view ("register");
    }
}
