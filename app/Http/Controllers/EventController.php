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
        $events = Event::all(); // Ambil semua event dari database
        return view('admin.event', compact('events')); // Kirim ke blade
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
        $validated = $request->validate([
            'nama_event' => 'required|string|max:255',
            'tanggal_event' => 'required|string',
            'lokasi_event' => 'required|string',
            'harga_tiket' => 'required|string',
            'location_id' => 'required|string',
            'flyer_event' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Tangani upload flyer (jika ada)
        if ($request->hasFile('flyer_event')) {
            $file = $request->file('flyer_event');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('flyers'), $filename);
            $validated['flyer_event'] = 'flyers/' . $filename;
        }

        // Tambahkan ID Event otomatis
        $latest = \App\Models\Event::orderBy('id_event', 'desc')->first();
        $newId = 'E' . str_pad(($latest ? intval(substr($latest->id_event, 1)) + 1 : 1), 5, '0', STR_PAD_LEFT);
        $validated['id_event'] = $newId;

        // Tambahkan ID Admin dari session login atau sementara manual dulu
        $validated['id_admin'] = 1; // ganti sesuai kebutuhan

        // Simpan ke database
        \App\Models\Event::create($validated);

        return redirect()->route('admin.event.index')->with('success', 'Event berhasil ditambahkan!');
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
