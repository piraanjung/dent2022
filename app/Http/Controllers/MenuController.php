<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        //dd("Test");
        if(Auth::user()->hasRole('employee')) {
            return view('/menu');
        }elseif(Auth::user()->hasRole('user')) {
            return view('/menu');
        }
    }

    public function routeTreatment() {
        dd("Test");
        return view('/treatment');
    }

}
