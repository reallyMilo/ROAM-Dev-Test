<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Email;

class PageController extends Controller
{

    //return the Laravel welcome page view
    public function welcome(){

        return view('welcome');

    }

    //return the form page view and pass it the directory data
    public function form(){

        //get all email entries
        $directory = Email::all();

        //return view and pass it the directory
        return view('form', ['directory' => $directory]);

    }

    //store form data from form view
    public function store(){

        $entry = new Email();

        $entry->name = request('name');
        $entry->surname = request('surname');
        $entry->email = request('email');

        $entry->save();

        //get all email entries
        $directory = Email::all();

        return view('form', ['directory' => $directory]);
    }
}
