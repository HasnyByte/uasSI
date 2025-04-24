@extends('layouts.app')

@section('page-title', 'Kelola Event')

@section('content')
    <div>

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-[#2A933C]">Daftar Event</h2>

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                <div class="relative">
                    <span class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-base">search</span>
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Cari"
                        class="pl-10 pr-4 py-2 w-full sm:w-64 rounded-full bg-gray-100 text-sm border border-gray-300 focus:outline-none focus:ring focus:ring-[#2A933C]/50"
                    />
                </div>

                <button onclick="document.getElementById('modalForm').classList.remove('hidden')"
                        class="bg-[#2A933C] text-white px-4 py-2 rounded shadow hover:bg-[#257b34] transition-all text-sm">
                    + Event
                </button>
            </div>
        </div>

        {{-- Container Event Card --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @if($events->isEmpty())
            <div class="text-center text-gray-500 col-span-full">Belum ada event yang ditambahkan.</div>
        @endif
            @foreach($events as $event)
            <div class="event-card bg-white rounded-lg shadow hover:shadow-lg transition p-4" data-name="{{ strtolower($event->nama_event) }}">
            <div class="w-full h-[160px] bg-gray-200 rounded-md mb-4 overflow-hidden">
            @php
                $src = \Illuminate\Support\Str::startsWith($event->flyer_event, ['http://', 'https://'])
                    ? $event->flyer_event
                    : asset('storage/flyer_event/' . $event->flyer_event);
            @endphp
                <img src="{{ $src }}" alt="Flyer Event"
                    class="w-full h-full object-cover rounded-md">
            </div>

                <div class="space-y-1 text-sm text-gray-700">
                    <div class="flex items-center gap-2 text-[#2A933C] font-semibold">
                        <span class="material-icons text-base">event</span> {{ $event->nama_event }}
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-base">calendar_today</span> {{ $event->tanggal_event }}
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-base">location_on</span> {{ $event->lokasi_event }}
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-base">payments</span> {{$event->harga_tiket}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Modal Form Tambah Event --}}
    <div id="modalForm" class="fixed inset-0 z-50 bg-gradient-to-b from-black/20 via-black/30 to-black/20 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6 relative max-h-[90vh] overflow-y-auto">
            <!-- <button class="absolute top-4 right-4 text-green-700 text-xl" onclick="document.getElementById('modalForm').classList.add('hidden')">✕</button> -->
            <h3 class="text-xl font-semibold text-[#2A933C] mb-4">Buat Event Baru</h3>

            <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label for="nama_event" class="block text-sm font-medium text-gray-700">Nama Event</label>
                    <input type="text" id="nama_event" name="nama_event" placeholder="Masukkan nama event"
                        class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="tanggal_event" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="text" id="tanggal_event" name="tanggal_event" placeholder="Masukkan tanggal event"
                            class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>

                    <div>
                        <label for="lokasi_event" class="block text-sm font-medium text-gray-700">Lokasi</label>
                        <input type="text" id="lokasi_event" name="lokasi_event" placeholder="Contoh: Taman Budaya"
                            class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="flyer_event" class="block text-sm font-medium text-gray-700">Flyer</label>
                        <input type="file" id="flyer_event" name="flyer_event"
                            class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>

                    <div>
                        <label for="harga_tiket" class="block text-sm font-medium text-gray-700">Harga Tiket</label>
                        <input type="text" id="harga_tiket" name="harga_tiket" placeholder="Contoh: IDR 180K"
                            class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>
                </div>

                <div>
                    <label for="location_id" class="block text-sm font-medium text-gray-700">Wilayah</label>
                    <select id="location_id" name="location_id"
                            class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                        <option value="Banda Aceh">Banda Aceh</option>
                        <option value="Aceh Besar">Aceh Besar</option>
                    </select>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button type="button" onclick="document.getElementById('modalForm').classList.add('hidden')"
                            class="bg-gray-400 text-white px-4 py-2 rounded text-sm">Batal</button>
                    <button type="submit" class="bg-[#2A933C] text-white px-4 py-2 rounded text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('searchInput').addEventListener('input', function () {
            const keyword = this.value.toLowerCase();
            const cards = document.querySelectorAll('.event-card');

            cards.forEach(card => {
                const name = card.getAttribute('data-name');
                if (name.includes(keyword)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
@endsection
