<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

	public function college(){
    	return "Hello";
    }

    public function collegeFinder(){
    	return view('pages.dashboard');
    }

}
