<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event', compact('events'));
    }

    public function show($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        return response()->json($event);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required|string|max:255',
            'tanggal_event' => 'required|string',
            'lokasi_event' => 'required|string',
            'harga_tiket' => 'required|string',
            'location_id' => 'required|string',
            'flyer_event' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi di sini
        ]);

        if ($request->hasFile('flyer_event')) {
            $file = $request->file('flyer_event');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('flyers'), $filename);
            $validated['flyer_event'] = 'flyers/' . $filename;
        }

        $latest = Event::orderBy('id_event', 'desc')->first();
        $newId = 'E' . str_pad(($latest ? intval(substr($latest->id_event, 1)) + 1 : 1), 5, '0', STR_PAD_LEFT);
        $validated['id_event'] = $newId;

        $validated['id_admin'] = 1; // Ganti sesuai session login

        Event::create($validated);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama_event' => 'sometimes|required|string|max:255',
            'tanggal_event' => 'sometimes|required|string',
            'lokasi_event' => 'sometimes|required|string',
            'harga_tiket' => 'sometimes|required|string',
            'location_id' => 'sometimes|required|string',
            'flyer_event' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk update
        ]);

        if ($request->hasFile('flyer_event')) {
            $file = $request->file('flyer_event');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('flyers'), $filename);
            $validated['flyer_event'] = 'flyers/' . $filename;
        }

        $event->update($validated);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event berhasil dihapus']);
    }
}
