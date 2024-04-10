<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        // echo "<pre>";
        // print_r($user);die;
        return view('pages.dashboard',['user'=>$user]);
    }
}
