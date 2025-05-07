<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class EventController extends Controller
{
    // Dummy JSON data
    private function getDummyEvents()
    {
        return [
            [
                'id_event' => 'E00001',
                'nama_event' => 'Sound Of Soul',
                'flyer_event' => 'flyers/1745424849_FpmHOGAX0AE5onC.jpg',
                'tanggal_event' => '2/05/2025 21:00 - 4/05/2025 23:00',
                'lokasi_event' => 'Aceh Cultural Center',
                'harga_tiket' => 'Rp 150,000',
                'location_id' => 'L001',
                'id_admin' => 1,
            ],
            [
                'id_event' => 'E00002',
                'nama_event' => 'Aceh Art Festival',
                'flyer_event' => 'flyers/aceh_art_festival.jpg',
                'tanggal_event' => '10/05/2025 09:00 - 12/05/2025 17:00',
                'lokasi_event' => 'Banda Aceh Park',
                'harga_tiket' => 'Rp 100,000',
                'location_id' => 'L002',
                'id_admin' => 1,
            ],
            [
                'id_event' => 'E00003',
                'nama_event' => 'Traditional Music Night',
                'flyer_event' => 'flyers/traditional_music_night.jpg',
                'tanggal_event' => '15/05/2025 19:00 - 15/05/2025 22:00',
                'lokasi_event' => 'Aceh Community Hall',
                'harga_tiket' => 'Rp 80,000',
                'location_id' => 'L003',
                'id_admin' => 1,
            ],
        ];
    }

    // Tampilkan semua event untuk user
    public function index(Request $request)
    {
        // Convert arrays to objects
        $events = collect($this->getDummyEvents())->map(function ($event) {
            return (object) $event;
        });
        
        $perPage = 9;
        $currentPage = $request->query('page', 1);
        $paginatedEvents = new LengthAwarePaginator(
            $events->forPage($currentPage, $perPage),
            $events->count(),
            $perPage,
            $currentPage,
            ['path' => route('event')]
        );

        return view('users.event', ['events' => $paginatedEvents]);
    }

    // Tampilkan detail satu event untuk user
    public function show($id)
    {
        $events = $this->getDummyEvents();
        $event = collect($events)->firstWhere('id_event', $id);

        if (!$event) {
            return redirect()->route('event')->with('error', 'Event tidak ditemukan');
        }

        return view('users.detail-event', ['event' => (object) $event]);
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
        $event = \App\Models\Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        $event->update($request->all());

        return response()->json($event);
    }

    // Hapus event
    public function destroy($id)
    {
        $event = \App\Models\Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event tidak ditemukan'], 404);
        }

        $event->delete();

        return response()->json(['message' => 'Event berhasil dihapus']);
    }
}