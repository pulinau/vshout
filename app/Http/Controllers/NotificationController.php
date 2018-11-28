<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function index()
    {
        return view('send_mail');
    }

    function send(Request $request)
    {
        $this->validate($request,[
            'name'   =>  'required',
            'email'  =>  'required|email',
            'message'=>  'reqiured'
        ]);
        
    }
}
