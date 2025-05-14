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
                        <a href="{{ route('event') }}" class="hover:underline">Kuliner</a>
                    </li>
                    <li class="before:content-['-'] before:px-2">Details</li>
                </ol>
            </nav>
        </div>

        <h1 class="text-3xl font-bold mb-6">Sate Matang Apaleh Geurugok</h1>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main content area -->
            <div class="w-full lg:w-8/12">
                <div class="mb-8 w-full">
                    <!-- Gambar Utama -->
                    <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg"
                         class="rounded-lg shadow-lg w-full h-[550px] object-cover object-center">

                    <!-- Gallery Thumbnail -->
                    <div class="grid grid-cols-1 gap-4 mt-4">
                        <div class="h-28 w-40 rounded-lg overflow-hidden">
                            <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Overall Rating -->
                <div class="bg-white p-6 rounded-lg shadow-sm mt-6">
                    <h3 class="font-semibold mb-4">Overall rating</h3>

                    <div class="mb-6">
                        @foreach ([5, 4, 3, 2, 1] as $star)
                            <div class="flex items-center mb-1">
                                <span class="w-4 text-xs mr-2">{{ $star }}</span>
                                <div class="flex-1 h-2 bg-gray-200 rounded overflow-hidden">
                                    <div class="bg-[#2A933C] h-full" style="width: {{ [5 => 60, 4 => 20, 3 => 10, 2 => 5, 1 => 5][$star] }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-gray-50 rounded">
                            <div class="text-xl mb-1">🧹</div>
                            <div class="font-bold text-lg">4.8</div>
                            <div class="text-sm text-gray-500">Cleanliness</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded">
                            <div class="text-xl mb-1">✓</div>
                            <div class="font-bold text-lg">4.7</div>
                            <div class="text-sm text-gray-500">Accuracy</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded">
                            <div class="text-xl mb-1">💬</div>
                            <div class="font-bold text-lg">4.5</div>
                            <div class="text-sm text-gray-500">Communication</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded">
                            <div class="text-xl mb-1">📍</div>
                            <div class="font-bold text-lg">4.6</div>
                            <div class="text-sm text-gray-500">Location</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded">
                            <div class="text-xl mb-1">💰</div>
                            <div class="font-bold text-lg">4.9</div>
                            <div class="text-sm text-gray-500">Value</div>
                        </div>
                    </div>
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
                            <span class="flex-1">Batoh, Lueng Bata, Banda Aceh City, Aceh 23122</span>
                        </div>
                        <div class="flex">
                            <span class="w-28 text-gray-600">Jam Buka</span>
                            <span class="flex-1">09:00 - 00:00</span>
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
    </div>

    @include('components.footer')
@endsection
