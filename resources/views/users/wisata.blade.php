@extends('layouts.users')

@section('content')
    <div class="relative text-white bg-cover bg-center h-64" style="background-image: url('{{ asset('images/wisatae.jpg') }}');">
        <!-- Overlay gradient -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/20">
            <div class="absolute inset-0 flex flex-col items-center justify-center z-10 text-center">
                <div class="font-bold text-[30px]">
                    Wisata Aceh
                </div>
                <div class="pt-2 text-[20px]">
                    Let's Stroll around find good Place
                </div>
            </div>
        </div>
    </div>

    <section class="py-8">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-row lg:items-center gap-4 mb-6">
                <!-- Judul -->
                <div class="w-full lg:w-3/12">
                    <div class="font-bold text-lg">
                        Wisata
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="w-full lg:w-9/12">
                    <div class="flex flex-col lg:flex-row items-center justify-end gap-4">
                        <div class="w-fit max-w-sm ml-auto">
                            <div class="flex rounded-[12px] shadow-sm overflow-hidden">
                                <input type="text" placeholder="Type" class="px-4 py-2 border border-gray-300 rounded-l-[12px] focus:outline-none focus:ring-2 focus:ring-[#2A933C]"/>
                                <button type="button" class="bg-[#2A933C] text-white px-4 py-2 font-medium text-sm rounded-r-[12px] hover:bg-green-700 transition">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Sidebar Filter -->
                <div class="w-full lg:w-3/12">
                    <div class="bg-white w-full p-3 mb-3 rounded-[10px] border border-gray-200">
                        <div class="pb-1 text-gray-500 text-[12px] font-medium">
                            CATEGORY
                        </div>

                        <!-- Dropdown Wrapper -->
                        <div class="mt-2">
                            <button id="categoryDropdownBtn" type="button" class="w-full flex items-center justify-between border border-gray-200 rounded-[5px] px-4 py-2 bg-white text-gray-400 font-medium text-sm focus:outline-none">
                                All Categories
                                <svg id="dropdownArrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Dropdown List -->
                            <div id="categoryDropdown" class="mt-3 border-t border-gray-200 pt-2 space-y-1" style="display: none;">
                                <a href="#" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Budaya & Warisan</a>
                                <a href="#" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Rekreasi Keluarga</a>
                                <a href="#" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Alam & Taman</a>
                                <a href="#" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Olahraga & Aktivitas</a>
                                <a href="#" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Belanja & Hiburan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Grid -->
                <div class="w-full lg:w-9/12">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/detail-halaman" class="block relative h-48 rounded-lg overflow-hidden shadow-md group">
                            <!-- Gambar -->
                            <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{asset('images/wisatae.jpg')}}');"></div>

                            <!-- Overlay dan teks -->
                            <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                                <h3 class="font-semibold text-lg text-white">Masjid Raya Baiturrahman</h3>
                                <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                                    Visit
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-8">
                        <ul class="flex space-x-2">
                            <li>
                                <button class="px-3 py-1 bg-[#2A933C] text-white rounded font-medium" disabled>1</button>
                            </li>
                            <li>
                                <button class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:bg-gray-100">2</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
    <!-- load function js -->
    <script src="{{ asset('js/dropdown.js') }}"></script>
@endsection


