@extends('layouts.users')

@section('content')
<div class="bg-content-custom pb-10">
    <section class="pt-10">
        <div class="container mx-auto px-4">

            <!-- Breadcrumb -->
            <div class="flex flex-wrap items-center text-sm text-[#777E90] space-x-3">
                <span class="font-semibold text-gray-800">Detail Event</span>
                <span>|</span>
                <nav>
                    <ol class="flex flex-wrap space-x-2">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li class="before:content-['-'] before:px-2">
                            <a href="{{ route('event') }}" class="hover:underline">Events</a>
                        </li>
                        <li class="before:content-['-'] before:px-2">Details</li>
                    </ol>
                </nav>
            </div>

            <!-- Judul dan Info -->
            <h1 class="text-3xl font-bold text-gray-800 mt-6">{{ $event->judul_event }}</h1>
            <div class="flex flex-wrap items-center mt-4 text-sm text-[#7E8299] space-x-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 2a1 1 0 00-1 1v1H5a2 2 0 00-2 2v1h14V6a2 2 0 00-2-2h-.001V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM3 9v7a2 2 0 002 2h10a2 2 0 002-2V9H3z" />
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($event->tanggal_event)->translatedFormat('d F Y') }}</span>
                </div>
            </div>

            <!-- Konten Gambar dan Detail -->
            <div class="mt-8 flex flex-col lg:flex-row lg:space-x-8">
                <!-- Gambar -->
                <div class="w-full lg:w-2/3">
                    <img src="{{ asset('storage/flyers/' . $event->flyer_event) }}"
                         class="rounded-lg shadow-lg w-full h-[550px] object-cover object-center">
                </div>

                <!-- Detail -->
                <div class="w-full lg:w-1/3 mt-6 lg:mt-0">
                    <div class="bg-white p-6 rounded-xl shadow">
                        <span class="text-sm px-2 py-1 bg-green-100 text-green-700 rounded">{{ $event->kategori ?? 'Event' }}</span>

                        <div class="mt-6 bg-gray-100 p-4 rounded-lg space-y-2">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span class="font-medium">Nama Event</span>
                                <span class="text-right">{{ $event->nama_event }}</span>
                            </div>
                            <div class="flex justify-between text-sm text-gray-600">
                                <span class="font-medium">Lokasi</span>
                                <span class="text-right">{{ $event->lokasi_event }}</span>
                            </div>
                            <div class="flex justify-between text-sm text-gray-600">
                                <span class="font-medium">Harga Tiket</span>
                                <span class="text-right">{{ $event->harga_tiket }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Events -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold mb-6">Other Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($otherEvents as $other)
                        <a href="{{ route('event.show', $other->id_event) }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                            <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105"
                                 style="background-image: url('{{ asset($event->flyer_event ?? 'images/default.jpg') }}');"></div>
                            <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                                <h3 class="font-semibold text-lg text-white">{{ $other->judul_event }}</h3>
                                <div class="flex items-center mt-2 text-sm text-white">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path>
                                    </svg>
                                    {{ $other->lokasi_event }}
                                </div>
                                <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                                    View Event
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@include('components.footer')
@endsection
