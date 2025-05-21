@extends('layouts.users')

@section('content')
    <div class="container mx-auto px-10 py-10">
        <div class="flex flex-wrap items-center text-sm text-[#777E90] space-x-3">
            <span class="font-semibold text-gray-800">Detail Kuliner</span>
            <span>|</span>
            <nav>
                <ol class="flex flex-wrap space-x-2">
                    <li>
                        <a href="{{ route('home') }}" class="hover:underline">Home</a>
                    </li>
                    <li class="before:content-['-'] before:px-2">
                        <a href="{{ route('kuliner') }}" class="hover:underline">Kuliner</a>
                    </li>
                    <li class="before:content-['-'] before:px-2">Details</li>
                </ol>
            </nav>
        </div>

        <h1 class="text-3xl font-bold mb-6">{{ $kuliner->nama_kuliner }}</h1>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main content area -->
            <div class="w-full lg:w-8/12">
                <!-- <div class="mb-8 w-full"> -->
                    <!-- Gambar Utama -->
                    <div class="w-full h-96 mb-4 rounded-lg overflow-hidden">
                        <img src="{{ $kuliner->foto_kuliner }}" alt="{{ $kuliner->nama_kuliner }}" class="w-full h-full object-cover">
                    </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full lg:w-4/12 space-y-6">
                <!-- Info -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full mb-4">Kuliner</span>

                    <div class="border-b pb-4 mb-4">
                        <div class="flex mb-2">
                            <span class="w-28 text-gray-600">Alamat</span>
                            <span class="flex-1">{{ $kuliner->lokasi_kuliner }}</span>
                        </div>
                        <div class="flex">
                            <span class="w-28 text-gray-600">Jam Buka</span>
                            <span class="flex-1">{{ $kuliner->jam_operasional }}</span>
                        </div>
                    </div>

                    <a href="tel:+6281234567890" class="flex justify-center items-center bg-[#2A933C] text-white py-3 px-4 rounded-lg mb-3 hover:bg-green-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Hubungi Via Telefon
                    </a>

                    <button class="flex justify-center items-center w-full border border-[#2A933C] text-[#2A933C] py-3 px-4 rounded-lg hover:bg-green-50 transition">
                        Review
                    </button>
                </div>

                <!-- Ulasan -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-4">Ulasan Pengunjung</h3>

                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                        <div class="flex justify-between items-start">
                            <h4 class="font-medium">Budi Santoso</h4>
                            <div class="flex items-center">
                                <span class="font-bold mr-1">5</span>
                                <span class="text-yellow-400">★</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 mb-2">03/05/2025</div>
                        <p class="text-gray-700">Rasa sate yang autentik dan kuahnya sangat kental. Highly recommended!</p>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                        <div class="flex justify-between items-start">
                            <h4 class="font-medium">Siti Rahma</h4>
                            <div class="flex items-center">
                                <span class="font-bold mr-1">4</span>
                                <span class="text-yellow-400">★</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 mb-2">30/04/2025</div>
                        <p class="text-gray-700">Tempat bersih, pelayanan cepat, tapi agak ramai saat weekend.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other Culinaries -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-6">Other Culinaries</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($otherKuliner as $other)
                    <a href="{{ route('kuliner.show', $other->id_kuliner) }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                        <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset($other->foto_kuliner) }}');"></div>
                        <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                            <h3 class="font-semibold text-lg text-white">{{ $other->nama_kuliner }}</h3>
                            <div class="flex items-center mt-2 text-sm text-white">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9..."></path>
                                </svg>
                                {{ $other->lokasi_kuliner }}
                            </div>
                            <div class="mt-2 text-sm font-medium text-white">Visit</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
