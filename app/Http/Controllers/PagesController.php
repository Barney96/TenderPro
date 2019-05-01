<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
    	return view('home');
    }

    public function getTenders(){
    	return view('tenders');
    }

    public function getAbout(){
    	return view('about');
    }

    public function getContact(){
    	return view('contact');
    }

    public function getLogin(){
        return view('login');
    }

    public function getRegister(){
        return view('register');
    }
}
