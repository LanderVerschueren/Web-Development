<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelloController extends Controller
{
    public function hello() {
    	return view('index');
    }

    public function hello5() {
    	return view('5');
    }

    public function master( $test = null ) {
    	return view ('master', ['test' => $test]);
    }
}
