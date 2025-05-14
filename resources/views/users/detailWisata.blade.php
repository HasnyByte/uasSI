@extends('layouts.users')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
                <div class="flex flex-wrap items-center text-sm text-[#777E90] space-x-3">
                    <span class="font-semibold text-gray-800">Detail Wisata</span>
                    <span>|</span>
                    <nav>
                        <ol class="flex flex-wrap space-x-2">
                            <li>
                                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                            </li>
                            <li class="before:content-['-'] before:px-2">
                                <a href="{{ route('wisata') }}" class="hover:underline">Wisata</a>
                            </li>
                            <li class="before:content-['-'] before:px-2">Details</li>
                        </ol>
                    </nav>
                </div>

    <!-- Destination Title -->
    <h1 class="text-3xl font-bold mb-6">{{ $wisata->nama_wisata }}</h1>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Left Content - Main Image and Gallery -->
        <div class="w-full lg:w-8/12">
            <!-- Main Image -->
            <div class="w-full h-96 mb-4 rounded-lg overflow-hidden">
                <img src="{{ asset('images/masjid-raya-1.png') }}" alt="Masjid Raya Baiturrahman" class="w-full h-full object-cover">
            </div>
            
            <!-- Gallery Thumbnails -->
            <div class="mb-6 rounded-lg overflow-hidden">
                <img src="{{ $destinasi->foto_wisata }}" alt="{{ $destinasi->nama }}" class="w-full h-64 object-cover rounded-lg shadow">
            </div>

            <!-- Description -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-4">{{ $wisata->nama_wisata }}</h2>
                <div class="prose max-w-none space-y-4 text-gray-700">
                    {!! nl2br(e($wisata->deskripsi_wisata)) !!}
                </div>
            </div>
        </div>

        <!-- Right Sidebar - Info -->
        <div class="w-full lg:w-4/12">
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <!-- Category Badge -->
                <div class="mb-4">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">
                        Heritage
                    </span>
                </div>

                <!-- Info List -->
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-gray-600 w-1/3">Alamat</span>
                        <span class="text-gray-900 font-medium w-2/3">Batoh, Lueng Bata, Banda Aceh City, Aceh 23122</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-gray-600 w-1/3">Jam Buka</span>
                        <span class="text-gray-900 font-medium w-2/3">Setiap Hari 07:00:00 - 21:00:00</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-gray-600 w-1/3">Tiket</span>
                        <span class="text-gray-900 font-medium w-2/3">Gratis</span>
                    </div>
                </div>

                <!-- Information Desk Button -->
                <div class="mt-6">
                    <a href="#" class="block w-full bg-green-600 text-white text-center py-3 rounded-lg hover:bg-green-700 transition mb-3">
                        Information Desk
                    </a>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold mb-4">Review</h2>
            
            <!-- Comments container -->
            <div id="comments-container" class="space-y-0">
                <!-- Comment 1 -->
                <div class="border-t border-gray-200 py-4">
                    <div class="flex justify-between items-start">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center">
                                    <span class="text-white font-bold">k</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Khalishadz</h4>
                                <div class="text-sm text-gray-500">17 - 04 - 2025</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="font-bold text-xl">4,9</span>
                            <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm my-4">Tempat yang sangat indah dan tenang. Arsitekturnya luar biasa dan area sekitar masjid juga sangat bersih. Wajib dikunjungi jika ke Banda Aceh.</p>
                </div>
                
                <!-- Comment 2 -->
                <div class="border-t border-gray-200 py-4">
                    <div class="flex justify-between items-start">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-500 font-bold">r</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold">ronaldowati</h4>
                                <div class="text-sm text-gray-500">16 - 04 - 2025</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="font-bold text-xl">4,9</span>
                            <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm my-4">Masjid yang bersejarah dengan arsitektur yang megah. Saya sangat terkesan dengan kombinasi gaya Mughal dan sentuhan lokal Aceh.</p>
                </div>
            </div>

            <!-- Review Button -->
            <div class="mt-6">
                <a href="#" class="block w-full border border-gray-300 text-gray-700 text-center py-3 rounded-lg hover:bg-gray-50 transition">
                    Review
                </a>
            </div>
        </div>
        </div>
    </div>

    <!-- Other Destinations -->
    <div class="mt-16">
        <h2 class="text-2xl font-bold mb-6">Other Destinations</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Destination 1 -->
            <a href="{{ url('/wisata/pantai-lampuuk') }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset('images/lampuuk.png') }}');"></div>
                <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                    <h3 class="font-semibold text-lg text-white">Pantai Lampuuk</h3>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center text-sm text-white mr-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                            Aceh Besar
                        </span>
                    </div>
                    <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                        Visit
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
            
            <!-- Destination 2 -->
            <a href="{{ url('/wisata/pucok-krueng-raba') }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset('images/pucok-krueng.png') }}');"></div>
                <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                    <h3 class="font-semibold text-lg text-white">Pucok Krueng Raba</h3>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center text-sm text-white mr-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                            Aceh Besar
                        </span>
                    </div>
                    <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                        Visit
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
            
            <!-- Destination 3 -->
            <a href="{{ url('/wisata/museum-aceh') }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset('images/museum-aceh.png') }}');"></div>
                <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                    <h3 class="font-semibold text-lg text-white">Museum Aceh</h3>
                    <div class="flex items-center mt-2">
                        <span class="inline-flex items-center text-sm text-white mr-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                            Banda Aceh
                        </span>
                    </div>
                    <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                        Visit
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@include('components.footer')
@endsection