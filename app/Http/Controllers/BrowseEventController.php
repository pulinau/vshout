<?php

namespace App\Http\Controllers;

use App\Event;
use App\VolunteerEvent;

class BrowseEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('volunteer.events.browse', compact('events'));
    }

    public function register($id)
    {
        if (!$this->isRegistered($id)) {
            $eventVolunteer = new VolunteerEvent([
                'volunteer_id' => auth()->user()->id,
                'event_id' => $id,
            ]);

            $eventVolunteer->save();

            return redirect('/browse')->with('success', 'Succesfully registered!');
        } else {
            return redirect('/browse')->with('warning', 'Already registered!');
        }

        {}
    }

    public function isRegistered($id)
    {
        return VolunteerEvent::where('volunteer_id', auth()->user()->id)
            ->where('event_id', $id)->exists();

    }
}
