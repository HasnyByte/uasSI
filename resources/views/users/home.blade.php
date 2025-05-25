@extends('layouts.users')

@section('content')
<!-- Location Display Only (No Search, No Filter) -->
<div class="container mx-auto px-10 py-10">
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <div class="flex items-center mb-4 md:mb-0">
            <img src="{{ asset('images/maps.svg') }}" alt="Location" class="w-5 h-5 mr-2">
            <span class="font-medium">Banda Aceh, Aceh Besar</span>
        </div>
    </div>
</div>

<!-- Hero Section - Now Clickable -->
<div class="container mx-auto px-10 pb-6">
    <a href="{{ route('wisata.show', ['id' => $heroWisata->id_destinasi]) }}" class="block bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                @php
                    $heroImageUrl = Str::startsWith($heroWisata->foto_wisata, ['http://', 'https://']) 
                        ? $heroWisata->foto_wisata 
                        : asset('storage/' . $heroWisata->foto_wisata);
                @endphp
                <img src="{{ $heroImageUrl }}" alt="{{ $heroWisata->nama_wisata }}" class="w-full h-[350px] object-cover transition-transform duration-300 hover:scale-105">
            </div>
            <div class="md:w-1/2 p-6">
                <h1 class="text-3xl font-bold text-green-600 mb-2 py-6 hover:text-green-700 transition-colors duration-300">{{ $heroWisata->nama_wisata }}</h1>
                <p class="text-gray-700 mb-4 mr-8">
                    {{ $heroWisata->deskripsi_wisata }}
                </p>
                <div class="flex items-center text-green-600 mt-4">
                    <span class="text-sm font-medium">Klik untuk melihat detail</span>
                    <img src="{{ asset('images/right-line.svg') }}" alt="Detail" class="ml-2 w-4 h-4">
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Popular Destinations -->
<div class="container mx-auto px-10 py-20">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-gray-600">Tempat Wisata</h2>
    </div>
    <div class="flex justify-between items-center mb-6 py-0">
        <h3 class="text-2xl font-bold text-green-600">Destinasi Populer</h3>
        <a href="{{ route('wisata') }}" class="text-green-600 flex items-center">
            Lihat semua
            <img src="{{ asset('images/right-line.svg') }}" alt="See All" class="ml-1 w-4 h-4">
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($popularWisata->take(8) as $item)
            <a href="{{ route('wisata.show', ['id' => $item->id_destinasi]) }}" class="block bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                @php
                    $gambarUrl = Str::startsWith($item->foto_wisata, ['http://', 'https://']) 
                        ? $item->foto_wisata 
                        : asset('storage/' . $item->foto_wisata);
                @endphp
                <div class="h-48 overflow-hidden">
                    <img src="{{ $gambarUrl }}" alt="{{ $item->nama_wisata }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="p-4">
                    <h4 class="text-lg font-semibold text-green-600">{{ $item->nama_wisata }}</h4>
                    <div class="flex items-center text-gray-500 mt-2">
                        <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-5 h-5 mr-2">
                        <span>{{ $item->location_id }}</span>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center">
                            <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-5 h-5 text-yellow-400">
                            <span class="ml-1 text-gray-600">{{ number_format($item->review_avg_rating, 1) }}</span>
                        </div>
                        <span class="text-gray-500 text-sm">({{ $item->review->count() }})</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Culinary Recommendations -->
<div class="container mx-auto px-10 py-20">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-gray-600">Tempat Kuliner</h2>
    </div>
    <div class="flex justify-between items-center mb-6 py-0">
        <h3 class="text-2xl font-bold text-green-600">Kuliner Populer</h3>
        <a href="{{ route('kuliner') }}" class="text-green-600 flex items-center">
            Lihat semua
            <img src="{{ asset('images/right-line.svg') }}" alt="See All" class="ml-1 w-4 h-4">
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($popularKuliner->take(8) as $item)
            <a href="{{ route('kuliner.show', ['id' => $item->id_kuliner]) }}" class="block bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                @php
                    $gambarUrl = Str::startsWith($item->foto_kuliner, ['http://', 'https://']) 
                        ? $item->foto_kuliner 
                        : asset('storage/' . $item->foto_kuliner);
                @endphp
                <div class="h-48 overflow-hidden">
                    <img src="{{ $gambarUrl }}" alt="{{ $item->nama_kuliner }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="p-4">
                    <h4 class="text-lg font-semibold text-green-600">{{ $item->nama_kuliner }}</h4>
                    <div class="flex items-center text-gray-500 mt-2">
                        <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-5 h-5 mr-2">
                        <span>{{ $item->location_id }}</span>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center">
                            <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-5 h-5 text-yellow-400">
                            <span class="ml-1 text-gray-600">{{ number_format($item->review_avg_rating, 1) }}</span>
                        </div>
                        <span class="text-gray-500 text-sm">({{ $item->review->count() }})</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Events Section - Now Clickable -->
<div class="container mx-auto px-10 py-8 text-center">
    <h3 class="text-2xl md:text-3xl font-bold text-green-600 mb-2">Daftar Event Aceh</h3>
    <p class="text-gray-600 mb-8">Temukan Event menarik dan catat jadwalnya!</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
        @foreach ($randomEvents as $event)
        <a href="{{ route('event.show', ['id' => $event->id_event]) }}" class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 mr-6 snap-start hover:shadow-lg transition-shadow duration-300 cursor-pointer block">
            <div class="overflow-hidden">
                <img src="{{ asset($event->flyer_event ?? 'images/default.jpg') }}" alt="{{ $event->nama_event }}" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
            </div>
            <div class="p-4 text-left">
                <h4 class="text-green-600 font-semibold text-lg mb-1 hover:text-green-700 transition-colors duration-300">{{ $event->nama_event }}</h4>
                <p class="text-red-500 font-semibold text-sm mb-2">{{ $event->harga_tiket }}</p>
                <div class="flex items-center text-sm text-gray-600 mb-1">
                    <img src="{{ asset('images/date.svg') }}" class="w-5 h-5 mr-2">{{ \Carbon\Carbon::parse($event->tanggal_event)->format('d M Y') }}
                </div>
                <div class="flex items-center text-sm text-gray-600 mb-3">
                    <img src="{{ asset('images/g-maps.svg') }}" class="w-5 h-5 mr-2">{{ $event->location_id }}
                </div>
                <div class="flex items-center text-green-600 text-sm">
                    <span class="font-medium">Lihat detail event</span>
                    <img src="{{ asset('images/right-line.svg') }}" alt="Detail" class="ml-2 w-3 h-3">
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@include('components.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Destination section
        const destinationScroll = document.getElementById('destination-scroll');
        const destinationDots = document.querySelectorAll('.destination-dot');
        const destinationItems = destinationScroll ? destinationScroll.querySelectorAll('.scroll-snap-center') : [];
        const destinationItemWidth = destinationItems.length > 0 ? destinationItems[0].offsetWidth + 24 : 0; // width + margin

        // Culinary section
        const culinaryScroll = document.getElementById('culinary-scroll');
        const culinaryDots = document.querySelectorAll('.culinary-dot');
        const culinaryItems = culinaryScroll ? culinaryScroll.querySelectorAll('.scroll-snap-center') : [];
        const culinaryItemWidth = culinaryItems.length > 0 ? culinaryItems[0].offsetWidth + 24 : 0; // width + margin

        // Destination Dots Click Event
        destinationDots.forEach(dot => {
            dot.addEventListener('click', function() {
                if (!destinationScroll) return;
                
                const index = parseInt(this.getAttribute('data-index'));
                const scrollPos = index * destinationItemWidth;

                destinationScroll.scrollTo({
                    left: scrollPos,
                    behavior: 'smooth'
                });

                // Update active state
                destinationDots.forEach(d => d.classList.remove('bg-green-600', 'active'));
                destinationDots.forEach(d => d.classList.add('bg-gray-300'));
                this.classList.remove('bg-gray-300');
                this.classList.add('bg-green-600', 'active');
            });
        });

        // Culinary Dots Click Event
        culinaryDots.forEach(dot => {
            dot.addEventListener('click', function() {
                if (!culinaryScroll) return;
                
                const index = parseInt(this.getAttribute('data-index'));
                const scrollPos = index * culinaryItemWidth;

                culinaryScroll.scrollTo({
                    left: scrollPos,
                    behavior: 'smooth'
                });

                // Update active state
                culinaryDots.forEach(d => d.classList.remove('bg-green-600', 'active'));
                culinaryDots.forEach(d => d.classList.add('bg-gray-300'));
                this.classList.remove('bg-gray-300');
                this.classList.add('bg-green-600', 'active');
            });
        });

        // Scroll event for destination
        if (destinationScroll) {
            destinationScroll.addEventListener('scroll', function() {
                const scrollPos = this.scrollLeft;
                const index = Math.round(scrollPos / destinationItemWidth);

                // Update dots
                destinationDots.forEach(d => d.classList.remove('bg-green-600', 'active'));
                destinationDots.forEach(d => d.classList.add('bg-gray-300'));

                if (destinationDots[index]) {
                    destinationDots[index].classList.remove('bg-gray-300');
                    destinationDots[index].classList.add('bg-green-600', 'active');
                }
            });
        }

        // Scroll event for culinary
        if (culinaryScroll) {
            culinaryScroll.addEventListener('scroll', function() {
                const scrollPos = this.scrollLeft;
                const index = Math.round(scrollPos / culinaryItemWidth);

                // Update dots
                culinaryDots.forEach(d => d.classList.remove('bg-green-600', 'active'));
                culinaryDots.forEach(d => d.classList.add('bg-gray-300'));

                if (culinaryDots[index]) {
                    culinaryDots[index].classList.remove('bg-gray-300');
                    culinaryDots[index].classList.add('bg-green-600', 'active');
                }
            });
        }

        // Add CSS for scrollbar hiding and snap scrolling
        const style = document.createElement('style');
        style.textContent = `
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }

            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .scroll-snap-x {
                scroll-snap-type: x mandatory;
            }

            .scroll-snap-center {
                scroll-snap-align: center;
            }

            .scroll-snap-start {
                scroll-snap-align: start;
            }

            .scroll-snap-end {
                scroll-snap-align: end;
            }
        `;
        document.head.appendChild(style);

        // Set first dot as active for both sections
        if (destinationDots.length > 0) {
            destinationDots[0].classList.remove('bg-gray-300');
            destinationDots[0].classList.add('bg-green-600', 'active');
        }

        if (culinaryDots.length > 0) {
            culinaryDots[0].classList.remove('bg-gray-300');
            culinaryDots[0].classList.add('bg-green-600', 'active');
        }
    });

    // Testimonial Slider
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialContainer = document.getElementById('testimonial-container');
        const testimonials = document.querySelectorAll('.testimonial');
        const prevBtn = document.getElementById('prev-testimonial');
        const nextBtn = document.getElementById('next-testimonial');
        let currentIndex = 0;

        function showTestimonial(index) {
            testimonials.forEach(testimonial => {
                testimonial.classList.add('hidden');
            });

            testimonials[index].classList.remove('hidden');
        }

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', function() {
                currentIndex = (currentIndex === 0) ? testimonials.length - 1 : currentIndex - 1;
                showTestimonial(currentIndex);
            });

            nextBtn.addEventListener('click', function() {
                currentIndex = (currentIndex === testimonials.length - 1) ? 0 : currentIndex + 1;
                showTestimonial(currentIndex);
            });
        }

        // Initialize with first testimonial
        if (testimonials.length > 0) {
            showTestimonial(0);
        }
    });

    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>

<!-- Additional CSS for animations and transitions -->
<style>
    /* Fade in animation */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }

    /* Hover effects for destination and culinary cards */
    .destination-card:hover,
    .culinary-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    /* Transition for buttons */
    .btn-transition {
        transition: all 0.3s ease;
    }

    .btn-transition:hover {
        transform: translateY(-2px);
    }

    /* Smooth transition for navigation menu */
    .nav-link {
        position: relative;
        transition: color 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #047857;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    /* Dot indicator styles */
    .dot-indicator {
        transition: background-color 0.3s ease;
    }

    .dot-indicator.active {
        transform: scale(1.2);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    /* Testimonial fade transition */
    .testimonial {
        transition: opacity 0.5s ease;
    }

    /* Hero section parallax effect */
    .parallax-bg {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Custom scroll behavior for the horizontal scrolling sections */
    .custom-scroll {
        -webkit-overflow-scrolling: touch;
        scroll-behavior: smooth;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .destination-card,
        .culinary-card {
            transform: none !important;
        }

        .parallax-bg {
            background-attachment: scroll;
        }
    }

    /* Newsletter form focus effects */
    .newsletter-input:focus {
        border-color: #047857;
        box-shadow: 0 0 0 3px rgba(4, 120, 87, 0.2);
        transition: all 0.3s ease;
    }

    /* Custom scroll snap behavior */
    .custom-snap-scroll {
        scroll-padding: 1rem;
    }

    /* Hero section hover effects */
    .hero-section:hover {
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }

    /* Event card hover effects */
    .event-card:hover {
        transform: translateY(-3px);
        transition: all 0.3s ease;
    }
</style>
@endsection