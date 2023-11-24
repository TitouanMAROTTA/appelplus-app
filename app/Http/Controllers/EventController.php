<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('pages.events.events', ['events' => 
    //         [
    //             (object)[
    //                 'id' => '0',
    //                 'title' => 'Octobre rose',
    //                 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut gravida mattis ligula, sit amet euismod turpis vestibulum ut. Integer vel nibh eu ante rhoncus gravida nec at metus. Praesent volutpat cursus imperdiet. Curabitur vel lorem fringilla, iaculis elit nec, cursus sem. Nullam quis neque at justo venenatis aliquet. In dictum urna molestie lectus suscipit, in dignissim mauris sagittis. Mauris molestie ut justo a mollis.',
    //                 'date' => Carbon::create(2023, 10, 15, 14, 30), // Example date and time
    //             ],
    //             (object)[
    //                 'id' => '1',
    //                 'title' => 'Novembre bleu',
    //                 'content' => 'Mauris maximus ullamcorper lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque lacinia libero magna, id imperdiet enim consequat a. In finibus vel mi nec accumsan. Pellentesque mollis ultricies erat, a pulvinar turpis eleifend non. Sed eu augue ligula. Etiam eget orci egestas, aliquam augue nec, finibus magna. Aliquam eget ligula ut turpis consequat pellentesque. Nullam imperdiet erat lacus, at auctor mauris interdum vitae. Morbi sit amet dictum mi. Curabitur ullamcorper a leo quis egestas. Sed molestie enim magna, nec pretium sapien venenatis ac.',
    //                 'date' => Carbon::create(2023, 11, 20, 18, 45), // Example date and time
    //             ],
    //             (object)[
    //                 'id' => '2',
    //                 'title' => 'Mars vert',
    //                 'content' => 'Nunc tincidunt vehicula ornare. Duis feugiat turpis id erat bibendum, ut pellentesque massa mattis. Vestibulum condimentum, libero sed vulputate vehicula, ante dui hendrerit lorem, et auctor ipsum justo ac velit. Nam quis cursus lorem, vel pellentesque justo. Quisque interdum, felis sit amet rutrum venenatis, leo mauris posuere nibh, non lacinia sapien quam in velit. Sed nisi risus, efficitur blandit dui eget, pretium aliquam velit. In hac habitasse platea dictumst. Donec nunc nulla, sodales id ex in, varius sodales magna. Vestibulum ut est orci. In aliquam nibh non egestas tincidunt.',
    //                 'date' => Carbon::create(2023, 3, 25, 12, 0), // Example date and time
    //             ],
    //         ],
    //     ]);
    // }
    public function index()
    {
        $currentTime = Carbon::now();

        $events = Event::where('end_date', '>', $currentTime)
            ->orderBy('start_date', 'asc')
            ->take(3)
            ->get();

        // Convert start_date and end_date strings to Carbon instances for formatting
        $events = $events->map(function ($event) {
            $event->start_date = Carbon::parse($event->start_date);
            $event->end_date = Carbon::parse($event->end_date);
            return $event;
        });
        
        // Set the variable 'authorized' to 'true' if the user is an admin or a writer
        $user = auth()->user();
        $authorized = $user->hasRole('admin') || $user->hasRole('writer');

        return view('pages.events.events', compact('events', 'authorized'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
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
        //
    }
}
