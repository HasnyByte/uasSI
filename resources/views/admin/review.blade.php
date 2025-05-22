@extends('layouts.app')

@section('page-title', 'Kelola Review')

@section('content')
    <div>
        <!-- Alert Messages -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
        <div class="bg-white rounded-lg shadow p-6 mb-4">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-semibold text-[#2A933C]">Review dan Rating</h3>

                <div class="relative w-full max-w-xs">
                    <span class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        search
                    </span>
                    <form method="GET" action="{{ route('review') }}">
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari review atau nama user..."
                            class="pl-10 pr-4 py-2 w-full rounded-full bg-gray-100 text-sm border border-gray-300 focus:outline-none focus:ring focus:ring-[#2A933C]/50"
                            onchange="this.form.submit()"
                        >
                    </form>
                </div>
            </div>

            @if($reviews->count() > 0)
                <div class="overflow-x-auto rounded-lg shadow">
                    <table class="min-w-full text-left border border-gray-200">
                        <thead class="bg-[#777E90] text-white text-sm">
                        <tr>
                            <th class="px-6 py-3">Review</th>
                            <th class="px-6 py-3">Rating</th>
                            <th class="px-6 py-3">Item</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white text-gray-700 text-sm">
                        @foreach ($reviews as $review)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-3">
                                    <div class="font-semibold">{{ $review->user->nama_user ?? 'User tidak ditemukan' }}</div>
                                    <div class="text-xs text-gray-500">
                                        {{ \Carbon\Carbon::parse($review->tanggal_review)->format('d-m-Y') }} • 
                                        <span class="bg-gray-200 px-2 py-1 rounded-full text-[10px] text-[#2A933C]">
                                            @if($review->id_destinasi)
                                                Destinasi
                                            @elseif($review->id_kuliner)
                                                Kuliner
                                            @else
                                                Unknown
                                            @endif
                                        </span>
                                    </div>
                                    <div class="text-sm mt-1">{{ $review->komentar ?? 'Tidak ada komentar' }}</div>
                                </td>
                                <td class="px-6 py-3">
                                    {{ number_format($review->rating, 1) }} 
                                    <span class="text-yellow-400">★</span>
                                </td>
                                <td class="px-6 py-3">
                                    @if($review->id_destinasi && $review->destinasi)
                                        <div class="mb-1">
                                            <span class="bg-gray-200 text-[10px] text-[#2A933C] px-2 py-1 rounded-full font-medium">
                                                {{ str_pad($review->destinasi->id_destinasi, 3, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </div>
                                        <div class="text-sm font-semibold">{{ $review->destinasi->nama_wisata ?? 'Destinasi tidak ditemukan' }}</div>
                                    @elseif($review->id_kuliner && $review->kuliner)
                                        <div class="mb-1">
                                            <span class="bg-gray-200 text-[10px] text-[#2A933C] px-2 py-1 rounded-full font-medium">
                                                {{ str_pad($review->kuliner->id_kuliner, 3, '0', STR_PAD_LEFT) }}
                                            </span>
                                        </div>
                                        <div class="text-sm font-semibold">{{ $review->kuliner->nama_kuliner ?? 'Kuliner tidak ditemukan' }}</div>
                                    @else
                                        <div class="text-sm text-gray-500">Item tidak ditemukan</div>
                                    @endif
                                </td>
                                <td class="px-6 py-3">
                                    <form method="POST" action="{{ route('review.destroy', $review->id_review) }}" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus review ini?')" 
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 transition-colors">
                                            <span class="material-icons">delete</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($reviews->hasPages())
                    <div class="mt-4 flex justify-center">
                        {{ $reviews->appends(request()->query())->links() }}
                    </div>
                @endif
            @else
                <div class="text-center py-12">
                    <div class="text-gray-400 mb-2">
                        <span class="material-icons" style="font-size: 48px;">rate_review</span>
                    </div>
                    <p class="text-gray-500">Belum ada review yang tersedia</p>
                    @if(request('search'))
                        <p class="text-sm text-gray-400 mt-1">
                            Tidak ditemukan hasil untuk pencarian "{{ request('search') }}"
                        </p>
                        <a href="{{ route('review') }}" class="text-[#2A933C] text-sm hover:underline">
                            Tampilkan semua review
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection