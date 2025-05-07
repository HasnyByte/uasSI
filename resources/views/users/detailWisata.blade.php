@extends('layouts.users')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumbs -->
    <div class="flex items-center text-sm text-gray-600 mb-6">
        <a href="{{ url('/') }}" class="hover:text-green-600">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ url('/wisata') }}" class="hover:text-green-600">Wisata</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Masjid Raya Baiturrahman</span>
    </div>

    <!-- Destination Title -->
    <h1 class="text-3xl font-bold mb-6">Masjid Raya Baiturrahman</h1>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Left Content - Main Image and Gallery -->
        <div class="w-full lg:w-8/12">
            <!-- Main Image -->
            <div class="w-full h-96 mb-4 rounded-lg overflow-hidden">
                <img src="{{ asset('images/masjid-raya-1.png') }}" alt="Masjid Raya Baiturrahman" class="w-full h-full object-cover">
            </div>
            
            <!-- Gallery Thumbnails -->
            <div class="grid grid-cols-4 gap-4 mb-6">
                <div class="h-24 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/masjid-raya-1.png') }}" alt="Masjid Raya Baiturrahman" class="w-full h-full object-cover">
                </div>
                <div class="h-24 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/masjid-raya-2.png') }}" alt="Interior Masjid" class="w-full h-full object-cover">
                </div>
                <div class="h-24 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/masjid-raya-3.png') }}" alt="Halaman Masjid" class="w-full h-full object-cover">
                </div>
                <div class="h-24 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/masjid-raya-4.png') }}" alt="Masjid Malam Hari" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Description -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Masjid Raya Baiturrahman</h2>
                <div class="prose max-w-none space-y-4 text-gray-700">
                    <p>Masjid Raya Baiturrahman adalah salah satu ikon paling terkenal di Provinsi Aceh sekaligus simbol kebanggaan masyarakat Aceh. Terletak di pusat Kota Banda Aceh, masjid ini memiliki nilai sejarah, budaya, dan religius yang sangat kuat. Dibangun pertama kali pada tahun 1612 oleh Sultan Iskandar Muda, masjid ini telah mengalami beberapa kali renovasi dan perbaikan, terutama setelah sempat hancur akibat agresi militer Belanda pada tahun 1873.</p>

                    <p>Arsitektur Masjid Raya Baiturrahman memadukan gaya Mughal India dengan sentuhan lokal khas Aceh. Gaya khas tersebut terlihat dalam nuansa megah dengan ukiran-ukiran artistik pada bagian dinding dan pilar. Halaman masjid yang luas dilengkapi dengan kolam besar yang memantulkan bayangan bangunan utama, menciptakan pemandangan yang indah dan menenangkan. Dalam perkembangannya, masjid ini juga dilengkapi dengan payung elektrik raksasa di pelatarannnya, seperti yang ada di Masjid Nabawi di Madinah.</p>

                    <p>Selain menjadi tempat ibadah utama, Masjid Raya Baiturrahman juga menjadi pusat kegiatan keagamaan, pendidikan Islam, dan destinasi wisata religi. Keberadaannya yang tetap kokoh setelah diterjang tsunami dahsyat pada tahun 2004 juga dipandang sebagai tanda kekuatan, harapan, dan keteguhan masyarakat Aceh dalam menghadapi bencana.</p>
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
                <h2 class="text-xl font-bold mb-4">Comment</h2>
                
                <!-- Comments will be loaded here -->
                <div id="comments-container" class="space-y-4">
                    <div class="border-b border-gray-200 pb-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-500 font-bold">A</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Ahmad</h4>
                                <div class="text-sm text-gray-500 mb-2">2 hari yang lalu</div>
                                <p class="text-gray-700 text-sm">Tempat yang sangat indah dan tenang. Arsitekturnya luar biasa dan area sekitar masjid juga sangat bersih. Wajib dikunjungi jika ke Banda Aceh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 pb-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                    <span class="text-gray-500 font-bold">S</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold">Sarah</h4>
                                <div class="text-sm text-gray-500 mb-2">1 minggu yang lalu</div>
                                <p class="text-gray-700 text-sm">Masjid yang bersejarah dengan arsitektur yang megah. Saya sangat terkesan dengan kombinasi gaya Mughal dan sentuhan lokal Aceh.</p>
                            </div>
                        </div>
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
                        <span class="inline-flex items-center text-sm text-white">
                            <svg class="w-4 h-4 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            4.5 (120)
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
                        <span class="inline-flex items-center text-sm text-white">
                            <svg class="w-4 h-4 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            4.8 (60)
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
                        <span class="inline-flex items-center text-sm text-white">
                            <svg class="w-4 h-4 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            4.7 (130)
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
@endsection