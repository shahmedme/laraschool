<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function admission() {
        return view('admission');
    }

    public function result() {
        return view('result');
    }

    public function teachers() {
        return view('teachers');
    }

    public function gallery() {
        return view('gallery');
    }

    public function contact() {
        return view('contact');
    }
}
