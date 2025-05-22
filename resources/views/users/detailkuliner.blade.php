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
                        <a href="{{ route('kuliner') }}" class="hover:underline">Kuliner</a>
                    </li>
                    <li class="before:content-['-'] before:px-2">Details</li>
                </ol>
            </nav>
        </div>

        <h1 class="text-3xl font-bold mb-6">{{ $kuliner->nama_kuliner }}</h1>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main content area -->
            <div class="w-full lg:w-8/12">
                <!-- <div class="mb-8 w-full"> -->
                    <!-- Gambar Utama -->
                    <div class="w-full h-96 mb-4 rounded-lg overflow-hidden">
                        <img src="{{ $kuliner->foto_kuliner }}" alt="{{ $kuliner->nama_kuliner }}" class="w-full h-full object-cover">
                    </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full lg:w-4/12 space-y-6">
                <!-- Info -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full mb-4">Kuliner</span>

                    <div class="pb-4 mb-4">
                        <div class="flex mb-2">
                            <span class="w-28 text-gray-600">Alamat</span>
                            <span class="flex-1">{{ $kuliner->lokasi_kuliner }}</span>
                        </div>
                        <div class="flex">
                            <span class="w-28 text-gray-600">Jam Buka</span>
                            <span class="flex-1">{{ $kuliner->jam_operasional }}</span>
                        </div>
                    </div>

                    <button onclick="openReviewModal()" class="block w-full border border-gray-300 text-gray-700 text-center py-3 rounded-lg hover:bg-gray-50 transition">
                        Review
                    </button>
                </div>

                <!-- Ulasan -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    @forelse($kuliner->review as $review)
                        <h3 class="text-lg font-semibold mb-4">Ulasan Pengunjung</h3>             
                        <div class="bg-gray-50 p-4 rounded-lg mb-4">
                            <div class="flex justify-between items-start">
                                <h4 class="font-medium">{{ $review->user->nama_user ?? 'Anonim' }}</h4>
                                <div class="flex items-center">
                                    <span class="font-bold mr-1">{{ number_format($review->rating, 1) }}</span>
                                    <span class="text-yellow-400">★</span>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-2">{{ \Carbon\Carbon::parse($review->tanggal_review)->format('d/m/Y') }}</div>
                            <p class="text-gray-700">{{ $review->komentar }}</p>
                        </div>
                    @empty
                        <div class="bg-gray-50 p-4 rounded-lg text-center text-gray-500">
                            Belum ada ulasan untuk kuliner ini.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Other Culinaries -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-6">Other Culinaries</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($otherKuliner as $other)
                    <a href="{{ route('kuliner.show', $other->id_kuliner) }}" class="block relative h-80 rounded-lg overflow-hidden shadow-md group">
                        <div class="absolute inset-0 z-0 bg-cover bg-center transition-transform duration-300 group-hover:scale-105" style="background-image: url('{{ asset($other->foto_kuliner) }}');"></div>
                        <div class="absolute inset-0 z-10 bg-black/40 flex flex-col justify-end p-4">
                            <h3 class="font-semibold text-lg text-white">{{ $other->nama_kuliner }}</h3>
                            <div class="flex items-center mt-2 text-sm text-white">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9..."></path>
                                </svg>
                                {{ $other->lokasi_kuliner }}
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
                    <label class="block text-gray-700 text-sm mb-1" for="komentar">Komentar</label>
                    <textarea name="komentar" id="komentar" rows="3" class="w-full border rounded p-2"></textarea>
                </div>

                <input type="hidden" name="tanggal_review" id="tanggal_review">
                <input type="hidden" name="id_kuliner" value="{{ $kuliner->id_kuliner }}">

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
