<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','host']);
    }
    
    public function index()
    {
        return view('host.index');
    }
}
