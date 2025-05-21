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
                <img src="{{ $wisata->foto_wisata }}" alt="{{ $wisata->nama_wisata }}" class="w-full h-full object-cover">
            </div>
            
            <!-- Description -->
            <div class="mb-8">
                <!-- <h2 class="text-2xl font-bold mb-4">{{ $wisata->nama_wisata }}</h2> -->
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
                    <!-- <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">
                        Heritage
                    </span> -->
                </div>

                <!-- Info List -->
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-gray-600 w-1/3">Alamat</span>
                        <span class="text-gray-900 font-medium w-2/3">{{ $wisata->lokasi_wisata }}</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-gray-600 w-1/3">Jam Buka</span>
                        <span class="text-gray-900 font-medium w-2/3">{{ $wisata->jam_operasional }}</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-gray-600 w-1/3">Tiket</span>
                        <span class="text-gray-900 font-medium w-2/3">{{ $wisata->tiket }}</span>
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
                @forelse($wisata->review as $review)
                    <div class="border-t border-gray-200 py-4">
                        <div class="flex justify-between items-start">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 mr-3">
                                    <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center">
                                        <span class="text-white font-bold">{{ substr($review->user->nama_user ?? 'Anon', 0, 1) }}</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-semibold">{{ $review->user->nama_user ?? 'Anonim' }}</h4>
                                    <div class="text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($review->tanggal_review)->format('d - m - Y') }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="font-bold text-xl">{{ number_format($review->rating, 1) }}</span>
                                <svg class="w-5 h-5 text-yellow-400 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm my-4">{{ $review->komentar }}</p>
                    </div>
                @empty
                    <div class="border-t border-gray-200 py-4 text-center text-gray-500">
                        Belum ada review untuk tempat wisata ini.
                    </div>
                @endforelse
            </div>

            <!-- Review Button -->
            <div class="mt-6">
                <button onclick="openReviewModal()" class="block w-full border border-gray-300 text-gray-700 text-center py-3 rounded-lg hover:bg-gray-50 transition">
                    Review
                </button>
            </div>
        </div>
        </div>
    </div>

    <!-- Other Destinations -->
    <div class="mt-16">
        <h2 class="text-2xl font-bold mb-6">Other Destinations</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($otherDestinations as $other)
                <a href="{{ route('wisata.show', $other->id_destinasi) }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                    <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset($other->foto_wisata) }}');"></div>
                    <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                        <h3 class="font-semibold text-lg text-white">{{ $other->nama_wisata }}</h3>
                        <div class="flex items-center mt-2 text-sm text-white">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9..."></path>
                            </svg>
                            {{ $other->lokasi_wisata }}
                        </div>
                        <div class="mt-2 text-sm font-medium text-white">Visit</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Review Modal -->
<div id="reviewModal" class="fixed inset-0 z-50 bg-gradient-to-b from-black/20 via-black/30 to-black/20 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Tulis Review</h2>
        <form id="reviewForm">
            @csrf
            <!-- Rating -->
            <div class="flex items-center mb-4" id="starRating">
                @for ($i = 1; $i <= 5; $i++)
                    <svg onclick="setRating({{ $i }})"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 cursor-pointer text-gray-300 hover:text-yellow-400 transition-colors duration-150"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        id="star-{{ $i }}">
                        <path d="M12 .587l3.668 7.568L24 9.423l-6 5.847L19.335 24 12 19.897 4.665 24 6 15.27 0 9.423l8.332-1.268z"/>
                    </svg>
                @endfor
            </div>
            <input type="hidden" name="rating" id="rating" value="0">

            <!-- Komentar -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-1" for="komentar">Komentar (opsional)</label>
                <textarea name="komentar" id="komentar" rows="3" class="w-full border rounded p-2"></textarea>
            </div>

            <input type="hidden" name="tanggal_review" id="tanggal_review">
            <input type="hidden" name="id_destinasi" value="{{ $wisata->id_destinasi }}">

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeReviewModal()" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Batal</button>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Kirim</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openReviewModal() {
        document.getElementById('reviewModal').classList.remove('hidden');
        document.getElementById('tanggal_review').value = new Date().toISOString().split('T')[0];
    }

    function closeReviewModal() {
        document.getElementById('reviewModal').classList.add('hidden');
    }

    function setRating(rating) {
        document.getElementById('rating').value = rating;
        for (let i = 1; i <= 5; i++) {
            const star = document.getElementById('star-' + i);
            star.classList.remove('text-yellow-400');
            star.classList.add(i <= rating ? 'text-yellow-400' : 'text-gray-300');
        }
    }

    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = e.target;
        const data = new FormData(form);

        fetch("{{ route('review.store') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: data
        })
        .then(async res => {
            const json = await res.json();
            if (res.ok) {
                alert("Review berhasil dikirim!");
                location.reload();
            } else {
                alert(json.message || "Gagal mengirim review");
            }
        })
        .catch(err => console.error("Error:", err));
    });
</script>

@include('components.footer')
@endsection