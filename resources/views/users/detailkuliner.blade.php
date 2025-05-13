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
                                <span class="font-bold text-xl">5</span>
                                <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm my-4">enak dan bersih juga tempatnya!!!</p>
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
                                    <h4 class="font-semibold">ikramshaldiade</h4>
                                    <div class="text-sm text-gray-500">16 - 04 - 2025</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="font-bold text-xl">4</span>
                                <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm my-4">enak parah ga alot</p>
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
                <a href="{{ url('/wisata/kuah-beulangong') }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                    <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset('images/beulangong.png') }}');"></div>
                    <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                        <h3 class="font-semibold text-lg text-white">Kuah Beulangong</h3>
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
                <a href="{{ url('/wisata/mie-razali') }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                    <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset('images/razali.png') }}');"></div>
                    <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                        <h3 class="font-semibold text-lg text-white">Mie Razali</h3>
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
                
                <!-- Destination 3 -->
                <a href="{{ url('/wisata/u-groh') }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                    <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset('images/groh.png') }}');"></div>
                    <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                        <h3 class="font-semibold text-lg text-white">Rujak U Groh</h3>
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
            </div>
        </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
