<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class DonationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $event = Event::find($id);

        return view('manageEvents.donation', compact('event'));
    }
}
