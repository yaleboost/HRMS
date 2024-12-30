<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class employeecontroller extends Controller
{
    public function index(){
        return view('admin.user');
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype=='admin') {
            return view('admin.admin');
        }else{
            return view('admin.user');
        }
    }
}
