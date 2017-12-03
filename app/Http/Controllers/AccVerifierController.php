<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccVerifierController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
    	return view('acc_verifier.index');
    }
}
