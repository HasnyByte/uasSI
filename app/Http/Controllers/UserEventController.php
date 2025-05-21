<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = Event::query();

        if ($search) {
            $query->where('nama_event', 'like', '%' . $search . '%');
        }

        $events = $query->paginate(12);

        return view('users.event', compact('events', 'search'));
    }

    public function show($id)
    {
        $event = Event::where('id_event', $id)->firstOrFail();
        $otherEvents = Event::where('id_event', '!=', $id)->latest()->take(3)->get();

        return view('users.detailEvent', compact('event', 'otherEvents'));
    }
}
