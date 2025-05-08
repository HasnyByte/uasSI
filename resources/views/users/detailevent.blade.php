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
                            <li>
                                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                            </li>
                            <li class="before:content-['-'] before:px-2">
                                <a href="{{ route('event') }}" class="hover:underline">Events</a>
                            </li>
                            <li class="before:content-['-'] before:px-2">Details</li>
                        </ol>
                    </nav>
                </div>

                <!-- Judul dan Info -->
                <h1 class="text-3xl font-bold text-gray-800 mt-6">Sound Of Soul</h1>
                <div class="flex flex-wrap items-center mt-4 text-sm text-[#7E8299] space-x-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 2a1 1 0 00-1 1v1H5a2 2 0 00-2 2v1h14V6a2 2 0 00-2-2h-.001V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM3 9v7a2 2 0 002 2h10a2 2 0 002-2V9H3z" />
                        </svg>
                        <span>2/05/2025 21.00 - 4/05/2025 23.00</span>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Sedang Berlangsung</span>
                </div>

                <!-- Konten Gambar dan Detail -->
                <div class="mt-8 flex flex-col lg:flex-row lg:space-x-8">
                    <!-- Gambar -->
                    <div class="w-full lg:w-2/3">
                        <!-- Gambar Utama -->
                        <img src="https://radarlampung.disway.id/upload/21bc3af6f495ca3b1ec6c30285ea9e43.jpg"
                             class="rounded-lg shadow-lg w-full h-[550px] object-cover object-center">

                        <!-- Gallery Thumbnail -->
                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div class="h-28 w-40 rounded-lg overflow-hidden">
                                <img src="https://radarlampung.disway.id/upload/21bc3af6f495ca3b1ec6c30285ea9e43.jpg" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Detail -->
                    <div class="w-full lg:w-1/3 mt-6 lg:mt-0">
                        <div class="bg-white p-6 rounded-xl shadow">
                            <span class="text-sm px-2 py-1 bg-green-100 text-green-700 rounded">Music</span>
                            <p class="text-gray-700 text-sm mt-4 leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequatur dicta dolor
                                eligendi eos, error, minima, molestiae quasi qui quisquam recusandae sunt. Dolore eaque neque odio,
                                provident sint vero voluptates!
                            </p>

                            <div class="mt-6 bg-gray-100 p-4 rounded-lg">
                                <div class="flex justify-between text-sm text-gray-600">
                                    <span class="font-medium">Alamat</span>
                                    <span class="text-right">Lapangan Blang Padang, Banda Aceh</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other Destinations -->
                <div class="mt-16">
                    <h2 class="text-2xl font-bold mb-6">Other Events</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Event 1 -->
                        <a href="/" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                            <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('https://cdn.rri.co.id/berita/92/images/1688271102209-40C0FBE2-B3B5-48F5-B8E1-08BB15EF4F81-768x768/1688271102209-40C0FBE2-B3B5-48F5-B8E1-08BB15EF4F81-768x768.jpeg');"></div>
                            <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                                <h3 class="font-semibold text-lg text-white">Aceh Culinary Festival</h3>
                                <div class="flex items-center mt-2 text-sm text-white">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                    Banda Aceh
                                </div>
                                <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                                    View Event
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Event 2 -->
                        <a href="/" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                            <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('https://www.acehnews.id/files/images/20240712-whatsapp-image-2024-07-12-at-09-37-42-144de8c8.jpg');"></div>
                            <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                                <h3 class="font-semibold text-lg text-white">Aceh Cultural Week</h3>
                                <div class="flex items-center mt-2 text-sm text-white">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                    Aceh Besar
                                </div>
                                <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                                    View Event
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Event 3 -->
                        <a href="/" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                            <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/5IWAnr8jyPlDTPJispIeoE-uoOU=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4550327/original/049143400_1692867217-steward-masweneng-QITAaHY1voY-unsplash.jpg');"></div>
                            <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                                <h3 class="font-semibold text-lg text-white">Banda Aceh International Marathon</h3>
                                <div class="flex items-center mt-2 text-sm text-white">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                    Banda Aceh
                                </div>
                                <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                                    View Event
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('components.footer')
@endsection
