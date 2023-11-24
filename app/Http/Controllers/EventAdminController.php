<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;


class EventAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        $events = Event::all();
        // dd($events);

        if ($user->hasRole('admin')) {
            // dd("user is an admin", $user);
            return view('pages.events.admin.events', compact('events'));

        } elseif($user->hasRole('writer')) {
            // dd("user is a writer", $user);
            return view('pages.events.admin.events', compact('events'));

        }else {
            // dd("user is not an admin and not a writer", $user);
            abort(403, 'Unauthorized');
        }

        // return view('pages.events.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            // dd("user is an admin", $user);
            return view('pages.events.admin.create');

        } elseif($user->hasRole('writer')) {
            // dd("user is a writer", $user);
            return view('pages.events.admin.create');

        }else {
            // dd("user is not an admin and not a writer", $user);
            abort(403, 'Unauthorized');
        }

        return view('pages.events.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('ICI ON STORE !', $request, $request->request);
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            // dd("user is an admin", $user);

        } elseif($user->hasRole('writer')) {
            // dd("user is a writer", $user);

        }else {
            // dd("user is not an admin and not a writer", $user);
            abort(403, 'Unauthorized');
        }

        $validated = $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'string|nullable',
            'start_date' => 'required|date_format:Y-m-d\TH:i',
            'end_date' => 'required|date_format:Y-m-d\TH:i|after:start_date',
            'address' => 'required|string',
            'access' => 'required|string',
            'instagram_post_link' => 'string|nullable',
            'facebook_post_link' => 'string|nullable',
            'creator' => 'string|nullable',
            'summary' => 'string|nullable',
        ]);

        // echo("les données entrées sont valides");

        // Create a new Event instance
        $event = new Event();

        // Set the attributes
        $event->title = $validated['title'];
        $event->description = $validated['content'];
        $event->start_date = $validated['start_date'];
        $event->end_date = $validated['end_date'];
        $event->address = $validated['address'];
        $event->access = $validated['access'];
        $event->instagram_post_link = $validated['instagram_post_link'];
        $event->facebook_post_link = $validated['facebook_post_link'];
        $event->creator = $validated['creator'];
        $event->summary = $validated['summary'];

        // Save the event to the database
        $event->save();

        // Redirect the user to a specific page
        return redirect()->route('event.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            // dd("user is an admin", $user);

        } elseif($user->hasRole('writer')) {
            // dd("user is a writer", $user);

        }else {
            // dd("user is not an admin and not a writer", $user);
            abort(403, 'Unauthorized');
        }


        // Find the event by ID
        $event = Event::find($id);

        // Check if the event exists
        if (!$event) {
            return redirect()->route('event.index')->with('error', 'Event not found');
        }

        // Delete the event
        $event->delete();
        // dd($event, 'event deleted !');

        return redirect()->route('event.index')->with('success', 'Event deleted successfully');
    }
}
