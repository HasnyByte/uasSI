<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Tampilkan semua event
    public function index()
    {
        return Event::all();
    }

    // Tampilkan detail satu event
    public function show($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        return response()->json($event);
    }

    // Buat event baru (oleh admin)
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'deskripsi_event' => 'required|string',
            'flyer_event' => 'required|string',
            'lokasi_event' => 'required|string',
            'harga_tiket' => 'required|numeric',
            'id_admin' => 'required|exists:admins,id_admin',
        ]);

        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    // Update event
    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        $event->update($request->all());

        return response()->json($event);
    }

    // Hapus event
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
