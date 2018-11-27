<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'volunteer']);
    }
    
    public function index()
    {
        $events = \App\Event::all();
        return view('volunteer.index', compact('events'));
    }

    public function join(Request $request, Event $event)
    {
        if ($event->curr_volunteers > $event->max_volunteers) {
            return abort(422);
        }
        
        dd($event);
    }
}
