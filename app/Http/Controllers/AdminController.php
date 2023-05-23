<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
    return view('home');
    }
    function operator(){
        return view('adm');
        }
}
