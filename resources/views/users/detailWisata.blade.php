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
                            <span class="font-bold text-xl">4</span>
                            <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm my-4">Masjid yang bersejarah dengan arsitektur yang megah. Saya sangat terkesan dengan kombinasi gaya Mughal dan sentuhan lokal Aceh.</p>
                </div>
            </div>

            <div class="mt-6">
            <a href="#" id="openReviewModal" class="block w-full border border-gray-300 text-gray-700 text-center py-3 rounded-lg hover:bg-gray-50 transition">
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
<!-- Review Modal -->
<div id="reviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen p-4">
        <!-- Backdrop with click to close -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-all duration-300" id="modalBackdrop"></div>
        
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-xl max-w-md w-full mx-auto transform transition-transform scale-95 opacity-0 duration-300" id="modalContent">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-xl font-semibold text-gray-900">
                    Tulis Review Anda
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg p-1.5 ml-auto inline-flex items-center" id="closeModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Form -->
            <form id="reviewForm" class="p-6">
                <!-- Rating -->
                <div class="mb-6">
                    <label class="block mb-2 text-md font-medium text-gray-900">Rating</label>
                    <div class="flex items-center space-x-1 star-rating">
                        <button type="button" class="star w-8 h-8 text-gray-300 hover:text-yellow-400 focus:outline-none transition-colors" data-rating="1">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" class="star w-8 h-8 text-gray-300 hover:text-yellow-400 focus:outline-none transition-colors" data-rating="2">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" class="star w-8 h-8 text-gray-300 hover:text-yellow-400 focus:outline-none transition-colors" data-rating="3">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" class="star w-8 h-8 text-gray-300 hover:text-yellow-400 focus:outline-none transition-colors" data-rating="4">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" class="star w-8 h-8 text-gray-300 hover:text-yellow-400 focus:outline-none transition-colors" data-rating="5">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                    </div>
                    <input type="hidden" id="ratingValue" name="rating" value="0">
                    <div class="mt-2 text-sm text-gray-500" id="ratingText">Belum ada rating</div>
                </div>
                
                <!-- Comment -->
                <div class="mb-6">
                    <label for="comment" class="block mb-2 text-md font-medium text-gray-900">Review Anda</label>
                    <textarea id="comment" name="comment" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" placeholder="Bagikan pengalaman Anda..."></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2.5 bg-green-600 text-white font-medium rounded-lg text-sm shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition disabled:opacity-50 disabled:cursor-not-allowed" id="submitReview" disabled>
                        <span class="flex items-center">
                            <span id="submitText">Kirim Review</span>
                            <span id="loadingIcon" class="hidden ml-2">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('reviewModal');
        const modalContent = document.getElementById('modalContent');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const closeModalBtn = document.getElementById('closeModal');
        const reviewBtn = document.getElementById('openReviewModal');
        const stars = document.querySelectorAll('.star');
        const ratingValue = document.getElementById('ratingValue');
        const ratingText = document.getElementById('ratingText');
        const commentInput = document.getElementById('comment');
        const submitButton = document.getElementById('submitReview');
        const reviewForm = document.getElementById('reviewForm');
        
        // Rating text options
        const ratingTexts = [
            'Belum ada rating',
            'Sangat buruk',
            'Buruk',
            'Biasa saja',
            'Bagus',
            'Sangat bagus'
        ];
        
        // Open modal
        reviewBtn.addEventListener('click', function(e) {
            e.preventDefault();
            modal.classList.remove('hidden');
            // Add a small delay before showing the modal with animation
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 50);
        });
        
        // Close modal functions
        function closeModal() {
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        
        closeModalBtn.addEventListener('click', closeModal);
        modalBackdrop.addEventListener('click', closeModal);
        
        // Star rating functionality
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                ratingValue.value = rating;
                ratingText.textContent = ratingTexts[rating];
                
                // Update stars colors
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('text-gray-300');
                        s.classList.add('text-yellow-400');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
                
                // Enable submit button if rating is selected and comment is not empty
                validateForm();
            });
            
            // Hover effects for stars
            star.addEventListener('mouseenter', function() {
                const hoverRating = parseInt(this.getAttribute('data-rating'));
                
                stars.forEach((s, index) => {
                    if (index < hoverRating) {
                        s.classList.add('text-yellow-400');
                        s.classList.remove('text-gray-300');
                    }
                });
            });
            
            star.addEventListener('mouseleave', function() {
                const currentRating = parseInt(ratingValue.value);
                
                stars.forEach((s, index) => {
                    if (index < currentRating) {
                        s.classList.add('text-yellow-400');
                        s.classList.remove('text-gray-300');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });
        });
        
        // Validate form
        function validateForm() {
            const hasRating = parseInt(ratingValue.value) > 0;
            const hasComment = commentInput.value.trim() !== '';
            
            submitButton.disabled = !(hasRating && hasComment);
        }
        
        commentInput.addEventListener('input', validateForm);
        
        // Handle form submission
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitText = document.getElementById('submitText');
            const loadingIcon = document.getElementById('loadingIcon');
            
            submitButton.disabled = true;
            submitText.textContent = 'Mengirim...';
            loadingIcon.classList.remove('hidden');
            
            // Simulate submission (replace with actual AJAX call)
            setTimeout(() => {
                // Add the new review to the reviews container
                const commentsContainer = document.getElementById('comments-container');
                const newReview = createReviewElement(commentInput.value, ratingValue.value);
                
                // Insert the new review at the top
                if (commentsContainer.firstChild) {
                    commentsContainer.insertBefore(newReview, commentsContainer.firstChild);
                } else {
                    commentsContainer.appendChild(newReview);
                }
                
                // Reset form
                stars.forEach(s => {
                    s.classList.remove('text-yellow-400');
                    s.classList.add('text-gray-300');
                });
                ratingValue.value = '0';
                ratingText.textContent = ratingTexts[0];
                commentInput.value = '';
                
                // Reset button state
                submitButton.disabled = true;
                submitText.textContent = 'Kirim Review';
                loadingIcon.classList.add('hidden');
                
                // Close modal
                closeModal();
            }, 1500);
        });
        
        // Helper function to create a new review element
        function createReviewElement(comment, rating) {
            // Format current date
            const now = new Date();
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();
            const formattedDate = `${day} - ${month} - ${year}`;
            
            // Create review div
            const reviewDiv = document.createElement('div');
            reviewDiv.className = 'border-t border-gray-200 py-4';
            
            // Generate random initial for avatar
            const initials = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'r', 's', 't', 'w', 'y'];
            const randomInitial = initials[Math.floor(Math.random() * initials.length)];
            const username = `user_${Math.floor(Math.random() * 1000)}`;
            
            reviewDiv.innerHTML = `
                <div class="flex justify-between items-start">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-3">
                            <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center">
                                <span class="text-white font-bold">${randomInitial}</span>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold">${username}</h4>
                            <div class="text-sm text-gray-500">${formattedDate}</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="font-bold text-xl">${rating}</span>
                        <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-700 text-sm my-4">${comment}</p>
            `;
            
            return reviewDiv;
        }
    });
</script>

@include('components.footer')
@endsection