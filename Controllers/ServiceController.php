<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function booking(){
        return view('user.booking');
    }
 
    public function service(){
        return view('user.service');
    }
}
