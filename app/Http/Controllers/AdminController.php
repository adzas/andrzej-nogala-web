<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('admin.home');
    }
}
