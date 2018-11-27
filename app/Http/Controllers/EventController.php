<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('manageEvents.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manageEvents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'max_volunteers' => 'required|integer',
        ]);

        $event = new Event([
            'event_name' => $request->get('event_name'),
            'event_date' => $request->get('event_date'),
            'description' => $request->get('description'),
            'max_volunteers' => $request->get('max_volunteers'),
            'curr_volunteers' => 0,
            'host_id' => auth()->user()->id,
        ]);
        $event->save();

        return redirect('/events')->with('success', 'Event has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $feedbacks = $event->feedbacks;

        return view('manageEvents.view')->withEvent($event)->withFeedback($feedbacks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('manageEvents.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'max_volunteers' => 'required|integer',
        ]);

        $event = Event::find($id);
        $event->event_name = $request->get('event_name');
        $event->event_date = $request->get('event_date');
        $event->description = $request->get('description');
        $event->max_volunteers = $request->get('max_volunteers');
        $event->save();

        return redirect('/events')->with(
            'success', 'Event \'' . $event->event_name . '\' has been updated'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect('/events')->with(
            'success', 'Event \'' . $event->event_name . '\' has been deleted '
        );
    }
}
