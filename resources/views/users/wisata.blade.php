@extends('layouts.users')

@section('content')
@php use Illuminate\Support\Str; @endphp

<div class="relative text-white bg-cover bg-center h-64" style="background-image: url('{{ asset('images/wisatae.jpg') }}');">
    <!-- Overlay gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/20">
        <div class="absolute inset-0 flex flex-col items-center justify-center z-10 text-center">
            <div class="font-bold text-[30px]">Wisata Aceh</div>
            <div class="pt-2 text-[20px]">Let's Stroll around find good Place</div>
        </div>
    </div>
</div>

<section class="py-8">
    <div class="container mx-auto px-8">
        <div class="flex flex-col lg:flex-row lg:items-center gap-4 mb-6">
            <div class="w-full lg:w-3/12">
                <div class="font-bold text-lg">Interesting Destination</div>
            </div>

            <div class="w-full lg:w-9/12">
                <div class="flex flex-col lg:flex-row items-center justify-end gap-4">
                    <div class="w-fit max-w-sm ml-auto">
                        <form action="{{ route('wisata') }}" method="GET">
                            <div class="flex rounded-[12px] shadow-sm overflow-hidden">
                                <input type="text" name="search" placeholder="Search nama wisata..." value="{{ request('search') }}" class="px-4 py-2 border border-gray-300 rounded-l-[12px] focus:outline-none focus:ring-2 focus:ring-[#2A933C]" />
                                <button type="submit" class="bg-[#2A933C] text-white px-4 py-2 font-medium text-sm rounded-r-[12px] hover:bg-green-700 transition">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-6">
            <div class="w-full lg:w-3/12">
                <div class="bg-white w-full p-3 mb-3 rounded-[10px] border border-gray-200">
                    <div class="pb-1 text-gray-500 text-[12px] font-medium">CATEGORY</div>
                    <div class="mt-2">
                        <button id="categoryDropdownBtn" type="button" class="w-full flex items-center justify-between border border-gray-200 rounded-[5px] px-4 py-2 bg-white text-gray-400 font-medium text-sm focus:outline-none">
                            All Categories
                            <svg id="dropdownArrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div id="categoryDropdown" class="mt-3 border-t border-gray-200 pt-2 space-y-1" style="display: none;">
                            <a href="{{ url('/wisata?kategori=DBW') }}" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Budaya & Warisan</a>
                            <a href="{{ url('/wisata?kategori=DRK') }}" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Rekreasi Keluarga</a>
                            <a href="{{ url('/wisata?kategori=DAT') }}" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Alam & Taman</a>
                            <a href="{{ url('/wisata?kategori=DOA') }}" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Olahraga & Aktivitas</a>
                            <a href="{{ url('/wisata?kategori=DBH') }}" class="block px-2 py-1 hover:bg-gray-100 rounded text-sm text-gray-700">Belanja & Hiburan</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid Wisata -->
            <section class="w-full lg:w-9/12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($wisata as $item)
                        @php
                            $gambarUrl = Str::startsWith($item->foto_wisata, ['http://', 'https://']) 
                                ? $item->foto_wisata 
                                : asset('storage/' . $item->foto_wisata);
                        @endphp
                        <a href="{{ route('wisata.show', ['id' => $item->id_destinasi]) }}" class="block relative h-48 rounded-lg overflow-hidden shadow-md group">
                            <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ $gambarUrl }}');"></div>
                            <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                                <h3 class="font-semibold text-lg text-white">{{ $item->nama_wisata }}</h3>
                                <div class="mt-2 inline-flex items-center text-sm font-medium text-white transition">
                                    Visit
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="text-gray-600">Tidak ada destinasi tersedia.</p>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <ul class="flex space-x-2">
                        {{-- Previous --}}
                        @if ($wisata->onFirstPage())
                            <li><span class="px-3 py-1 text-gray-400">Prev</span></li>
                        @else
                            <li>
                                <a href="{{ $wisata->previousPageUrl() }}" class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:bg-gray-100">Prev</a>
                            </li>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($wisata->getUrlRange(1, $wisata->lastPage()) as $page => $url)
                            <li>
                                @if ($page == $wisata->currentPage())
                                    <span class="px-3 py-1 bg-[#2A933C] text-white rounded font-medium">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:bg-gray-100">{{ $page }}</a>
                                @endif
                            </li>
                        @endforeach

                        {{-- Next --}}
                        @if ($wisata->hasMorePages())
                            <li>
                                <a href="{{ $wisata->nextPageUrl() }}" class="px-3 py-1 border border-gray-300 text-gray-600 rounded hover:bg-gray-100">Next</a>
                            </li>
                        @else
                            <li><span class="px-3 py-1 text-gray-400">Next</span></li>
                        @endif
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>

@include('components.footer')
<script src="{{ asset('js/dropdown.js') }}"></script>
@endsection
