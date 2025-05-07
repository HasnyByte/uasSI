@extends('layouts.users')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="breadcrumb text-sm text-gray-600 mb-4">
        <a href="/" class="hover:text-[#2A933C]">Home</a> > 
        <a href="/kuliner" class="hover:text-[#2A933C]">Kuliner</a> > 
        <span class="text-gray-500">Detail Makanan dan Minuman</span> >
        <span class="text-gray-500">{{ $kuliner['nama_kuliner'] }}</span>
    </div>

    <h1 class="text-3xl font-bold mb-6">{{ $kuliner['nama_kuliner'] }}</h1>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Main content area -->
        <div class="w-full lg:w-8/12">
            <div class="mb-8">
                <img src="{{ $kuliner['foto_kuliner'] }}" alt="{{ $kuliner['nama_kuliner'] }}" class="w-full h-[400px] object-cover rounded-lg">
                
                <div class="flex overflow-x-auto gap-3 mt-4 pb-2">
                    @foreach ($kuliner['thumbnails'] as $thumbnail)
                        <img src="{{ $thumbnail }}" alt="Thumbnail" class="w-24 h-24 object-cover rounded-md cursor-pointer">
                    @endforeach
                </div>
            </div>

            <!-- Overall Rating (hanya bagian ini di bawah gambar) -->
            <div class="bg-white p-6 rounded-lg shadow-sm mt-6">
                <h3 class="font-semibold mb-4">Overall rating</h3>
                
                <div class="mb-6">
                    @foreach ([5, 4, 3, 2, 1] as $star)
                        <div class="flex items-center mb-1">
                            <span class="w-4 text-xs mr-2">{{ $star }}</span>
                            <div class="flex-1 h-2 bg-gray-200 rounded overflow-hidden">
                                <div class="bg-[#2A933C] h-full" style="width: {{ $kuliner['rating_distribution'][$star] ?? 0 }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-3 bg-gray-50 rounded">
                        <div class="text-xl mb-1">🧹</div>
                        <div class="font-bold text-lg">{{ $kuliner['metrics']['cleanliness'] }}</div>
                        <div class="text-sm text-gray-500">Cleanliness</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded">
                        <div class="text-xl mb-1">✓</div>
                        <div class="font-bold text-lg">{{ $kuliner['metrics']['accuracy'] }}</div>
                        <div class="text-sm text-gray-500">Accuracy</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded">
                        <div class="text-xl mb-1">💬</div>
                        <div class="font-bold text-lg">{{ $kuliner['metrics']['communication'] }}</div>
                        <div class="text-sm text-gray-500">Communication</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded">
                        <div class="text-xl mb-1">📍</div>
                        <div class="font-bold text-lg">{{ $kuliner['metrics']['location'] }}</div>
                        <div class="text-sm text-gray-500">Location</div>
                    </div>
                    <div class="text-center p-3 bg-gray-50 rounded">
                        <div class="text-xl mb-1">💰</div>
                        <div class="font-bold text-lg">{{ $kuliner['metrics']['value'] }}</div>
                        <div class="text-sm text-gray-500">Value</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar: info, tombol, ulasan -->
        <div class="w-full lg:w-4/12 space-y-6">
            <!-- Label Makanan & Info -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full mb-4">Makanan</span>
                
                <div class="border-b pb-4 mb-4">
                    <div class="flex mb-2">
                        <span class="w-28 text-gray-600">Alamat</span>
                        <span class="flex-1">{{ $kuliner['lokasi_kuliner'] }}</span>
                    </div>
                    <div class="flex">
                        <span class="w-28 text-gray-600">Jam Buka</span>
                        <span class="flex-1">{{ $kuliner['jam_operasional'] }}</span>
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

            <!-- Ulasan Pengunjung -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold mb-4">Ulasan Pengunjung</h3>
                
                @foreach ($kuliner['reviews'] as $review)
                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                        <div class="flex justify-between items-start">
                            <h4 class="font-medium">{{ $review['user'] }}</h4>
                            <div class="flex items-center">
                                <span class="font-bold mr-1">{{ $review['rating'] }}</span>
                                <span class="text-yellow-400">★</span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-500 mb-2">{{ $review['tanggal_review'] }}</div>
                        <p class="text-gray-700">{{ $review['komentar'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Kuliner Lainnya -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-semibold mb-4">Kuliner Lainnya</h3>
                
                <div class="space-y-4">
                    @foreach ($other_kuliners as $other)
                        <a href="{{ route('kuliner.show', $other['id_kuliner']) }}" class="flex items-center gap-3 p-2 hover:bg-gray-50 rounded transition">
                            <img src="{{ $other['foto_kuliner'] }}" alt="{{ $other['nama_kuliner'] }}" class="w-16 h-16 object-cover rounded">
                           
                            <div>
                                <h4 class="font-medium">{{ $other['nama_kuliner'] }}</h4>
                                <div class="flex items-center text-sm text-gray-600">
                                    <span>{{ $other['lokasi_kuliner'] }}</span>
                                    <span class="mx-1">•</span>
                                    <span class="flex items-center">
                                        <span class="font-medium mr-1">{{ $other['rating'] }}</span>
                                        <span class="text-yellow-400">★</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection
