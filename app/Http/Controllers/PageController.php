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
        $directory = Email::all()->sortByDesc('created_at');

        //return view and pass it the directory
        return view('form', ['directory' => $directory]);

    }

    //store form data from form view
    public function store(){

        $validated = request()->validate([
            'name' => ['required', 'alpha', 'max:64'],
            'surname' => ['nullable', 'alpha', 'max:64'],
            'email' => ['required', 'email', 'unique:email_directory,email', 'max:256']
        ]);

        Email::create($validated);

        //get all email entries
        $directory = Email::all()->sortByDesc('created_at');

        return view('form', ['directory' => $directory]);
    }

    //delete email directory entry
    public function destroy(){

        //id to be deleted
        $id = request('entry_id');

        //find the id
        $found = Email::find($id);

        //if the id exists delete it
        if($found){
            $found->delete();
        }

        //get all email entries
        $directory = Email::all()->sortByDesc('created_at');
        return view('form', ['directory' => $directory]);
    }
}
