@extends('layouts.users')

@section('content')
    <!-- Hero Section -->
    <div class="relative text-white bg-cover bg-center h-64" style="background-image: url('https://parksidehotels.co.id/wp-content/uploads/2025/02/494C204A-83C4-4504-920D-97F684A2D5FD.jpeg');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/20">
            <div class="absolute inset-0 flex flex-col items-center justify-center z-10 text-center">
                <div class="font-bold text-3xl">
                    Event Details
                </div>
                <div class="pt-2 text-lg max-w-2xl">
                    Discover more about this exciting event and plan your visit!
                </div>
            </div>
        </div>
    </div>

    <section class="py-8">
        <div class="container mx-auto px-8">
            <!-- Event Details -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Event Flyer -->
                    <div class="w-full lg:w-5/12">
                        <img src="{{ $event->flyer_event ? asset($event->flyer_event) : 'https://via.placeholder.com/400x300' }}" alt="{{ $event->nama_event }}" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <!-- Event Information -->
                    <div class="w-full lg:w-7/12">
                        <h2 class="font-bold text-2xl text-gray-800 mb-4">{{ $event->nama_event }}</h2>
                        <div class="space-y-4">
                            <div>
                                <span class="font-semibold text-gray-600">Date:</span>
                                <span class="text-gray-800">{{ $event->tanggal_event }}</span>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-600">Location:</span>
                                <span class="text-gray-800">{{ $event->lokasi_event }}</span>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-600">Ticket Price:</span>
                                <span class="text-gray-800">{{ $event->harga_tiket }}</span>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-600">Status:</span>
                                <span class="ml-2 px-3 py-1 text-xs bg-gray-200 text-gray-700 rounded-full">
                                    {{ \Carbon\Carbon::createFromFormat('d/m/Y H:i', explode(' - ', $event->tanggal_event)[0])->isFuture() ? 'Upcoming' : 'Sedang Berlangsung' }}
                                </span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center bg-[#2A933C] text-white px-4 py-2 rounded-lg font-medium text-sm hover:bg-green-700 transition">
                                Book Tickets
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="flex justify-start">
                <a href="{{ route('event') }}" class="inline-flex items-center text-gray-600 hover:text-[#2A933C] font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Events
                </a>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection