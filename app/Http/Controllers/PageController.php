<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Email;

class PageController extends Controller
{

    public function welcome(){

        return view('welcome');

    }

    public function form(){

        //get all email entries
        $directory = Email::all();

        //return view and pass it the directory
        return view('form', ['directory' => $directory]);

    }
}
