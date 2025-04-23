@extends('layouts.app')

@section('page-title', 'Kelola Event')

@section('content')
    <div>

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-[#2A933C]">Daftar Event</h2>

            <div class="flex items-center gap-3">
                <div class="relative">
                    <span class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-base">search</span>
                    <input
                        type="text"
                        placeholder="Cari"
                        class="pl-10 pr-4 py-2 w-full rounded-full bg-gray-100 text-sm border border-gray-300 focus:outline-none focus:ring focus:ring-[#2A933C]/50"
                    >
                </div>

                <button onclick="document.getElementById('modalForm').classList.remove('hidden')"
                        class="bg-[#2A933C] text-white px-4 py-2 rounded shadow hover:bg-[#257b34] transition-all text-sm">
                    + Event
                </button>
            </div>
        </div>

        {{-- Container Event Card --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- contoh --}}
            <div class="bg-white rounded-lg shadow p-3">
                <div class="w-full h-[160px] bg-gray-200 rounded-md flex items-center justify-center text-gray-500 text-sm mb-4">
                    Flyer Event
                </div>

                <div class="space-y-1 text-sm text-gray-700">
                    <div class="flex items-center gap-2 text-[#2A933C] font-semibold">
                        <span class="material-icons text-base">event</span> Aceh Running Festival
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-base">calendar_today</span> 9 Februari 2025
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-base">location_on</span> Taman Seni & Budaya, Aceh
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-base">payments</span> IDR 180K
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Form Tambah Event --}}
    <div id="modalForm" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6 relative">
            <button class="absolute top-4 right-4 text-green-700 text-xl" onclick="document.getElementById('modalForm').classList.add('hidden')">✕</button>
            <h3 class="text-xl font-semibold text-[#2A933C] mb-4">Buat Event Baru</h3>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Event</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama event"
                           class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                </div>

                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Event</label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi event"
                              class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal"
                               class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>

                    <div>
                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Taman Budaya"
                               class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="flyer" class="block text-sm font-medium text-gray-700">Flyer</label>
                        <input type="file" id="flyer" name="flyer"
                               class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>

                    <div>
                        <label for="harga" class="block text-sm font-medium text-gray-700">Harga Tiket</label>
                        <input type="text" id="harga" name="harga" placeholder="Contoh: IDR 180K"
                               class="w-full px-4 py-2 bg-gray-100 rounded border border-gray-300 text-sm">
                    </div>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button type="button" onclick="document.getElementById('modalForm').classList.add('hidden')"
                            class="bg-gray-400 text-white px-4 py-2 rounded text-sm">Batal</button>
                    <button type="submit" class="bg-[#2A933C] text-white px-4 py-2 rounded text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
