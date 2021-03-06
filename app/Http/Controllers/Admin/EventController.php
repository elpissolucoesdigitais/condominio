<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function loadEvents(){
        $events = Event::all();

        return response()->json($events);
    }

    public function store(Request $request){
        Event::create($request->all());

        return response()->json(true);
    }

    public function update(Request $request){
        $event = Event::where('id', $request->id)->first();

        $event->fill($request->all());

        $event->save();

        return response()->json(true);
    }

    public function destroy(Request $request){
        Event::where('id', $request->id)->delete();

        return response()->json(true);
    }
}
