@extends('layouts.users')

@section('content')
<!-- Location and Search Bar -->
<div class="container mx-auto px-10 py-10">
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <div class="flex items-center mb-4 md:mb-0">
            <img src="{{ asset('images/maps.svg') }}" alt="Location" class="w-5 h-5 mr-2">
            <span class="font-medium">Banda Aceh, Aceh</span>
            <img src="{{ asset('images/Options.svg') }}" alt="Dropdown" class="w-4 h-4 ml-1">
        </div>
        <div class="relative w-full md:w-1/3">
            <input type="text" placeholder="Search for anything..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            <img src="{{ asset('images/Search.svg') }}" alt="Search" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4">
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-green-600 text-white p-1 rounded-md">
                <img src="{{ asset('images/Filter.svg') }}" alt="Filter" class="w-4 h-4">
            </button>
        </div>
    </div>
</div>

<!-- Hero Section -->
<div class="container mx-auto px-10 pb-6">
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="{{ asset('images/museum-tsunami.png') }}" alt="Museum Tsunami Banda Aceh" class="w-full h-[350px] object-cover">
            </div>
            <div class="md:w-1/2 p-6">
                <h1 class="text-3xl font-bold text-green-600 mb-2 py-6">Museum Tsunami Banda Aceh: Monumen Peringatan dan Edukasi</h1>
                <p class="text-gray-700 mb-4 mr-8">
                    Museum Tsunami Banda Aceh adalah monumen peringatan yang dibangun untuk mengenang tragedi tsunami dahsyat yang melanda Aceh pada 26 Desember 2004. Dirancang tidak hanya sebagai monumen peringatan yang mengharukan untuk mengenang korban, tetapi juga sebagai pusat edukasi.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Popular Destinations-->
<div class="container mx-auto px-10 py-20">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-gray-600">Tempat Wisata</h2>
        <span></span>
    </div>
    <div class="flex justify-between items-center mb-6 py-0">
        <h3 class="text-2xl font-bold text-green-600">Destinasi Populer</h3>
        <a href="{{ route('wisata') }}" class="text-green-600 flex items-center">
            Lihat semua
            <img src="{{ asset('images/right-line.svg') }}" alt="See All" class="ml-1 w-4 h-4">
        </a>
    </div>
    
    <div class="relative">
        <div class="overflow-x-scroll pb-6 -mx-8 px-15 scroll-smooth scrollbar-hide" id="destination-scroll">
            <div class="flex space-x-6 scroll-snap-x">
                <!-- Destination Card 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/lampuuk.png') }}" alt="Pantai Lampuuk" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Pantai Lampuuk</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Aceh Besar</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.5</span>
                            </div>
                            <span class="text-gray-500 text-sm">(720)</span>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/pucok-krueng.png') }}" alt="Pucok Krueng Raba" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Pucok Krueng Raba</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Aceh Besar</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.6</span>
                            </div>
                            <span class="text-gray-500 text-sm">(652)</span>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/museum-aceh.png') }}" alt="Museum Aceh" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Museum Aceh</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Banda Aceh</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.7</span>
                            </div>
                            <span class="text-gray-500 text-sm">(510)</span>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 4 (Extra) -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/peukan.png') }}" alt="Air Terjun Peukan Biluy" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Air Terjun Peukan Biluy</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Banda Aceh</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.9</span>
                            </div>
                            <span class="text-gray-500 text-sm">(825)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Dots -->
    <div class="flex justify-center mt-4">
        <button class="h-2 w-2 mx-1 rounded-full bg-green-600 destination-dot active" data-index="0"></button>
        <button class="h-2 w-2 mx-1 rounded-full bg-gray-300 destination-dot" data-index="1"></button>
        <button class="h-2 w-2 mx-1 rounded-full bg-gray-300 destination-dot" data-index="2"></button>
        <button class="h-2 w-2 mx-1 rounded-full bg-gray-300 destination-dot" data-index="3"></button>
    </div>
</div>

<!-- Culinary Recommendations -->
<div class="container mx-auto px-10 py-10">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-semibold text-gray-600">Wisata Kuliner</h2>
        <span></span>
    </div>
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-2xl font-bold text-green-600">Rekomendasi Kuliner</h3>
        <a href="{{ route('kuliner') }} class="text-green-600 flex items-center">
            Lihat semua
            <img src="{{ asset('images/right-line.svg') }}" alt="See All" class="ml-1 w-6 h-6">
        </a>
    </div>
    
    <div class="relative">
        <div class="overflow-x-scroll pb-6 -mx-8 px-15 scroll-smooth scrollbar-hide" id="culinary-scroll">
            <div class="flex space-x-6 scroll-snap-x">
                <!-- Food Card 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/razali.png') }}" alt="Mie Aceh Razali" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Mie Aceh Razali</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Banda Aceh</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.8</span>
                            </div>
                            <span class="text-gray-500 text-sm">(101)</span>
                        </div>
                    </div>
                </div>

                <!-- Food Card 2 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/groh.png') }}" alt="Rujak U Groh Bakoy" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Rujak U Groh Bakoy</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Aceh Besar</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.7</span>
                            </div>
                            <span class="text-gray-500 text-sm">(175)</span>
                        </div>
                    </div>
                </div>

                <!-- Food Card 3 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/sie.png') }}" alt="Sie Reuboh Cut Bit" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Sie Reuboh Cut Bit</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Aceh Besar</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.5</span>
                            </div>
                            <span class="text-gray-500 text-sm">(105)</span>
                        </div>
                    </div>
                </div>

                <!-- Food Card 4 (Extra) -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden w-80 flex-shrink-0 scroll-snap-center">
                    <img src="{{ asset('images/beulangong.png') }}" alt="Kuah Beulangong" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-green-600">Kuah Beulangong</h4>
                        <div class="flex items-center text-gray-500 mt-2">
                            <img src="{{ asset('images/g-maps.svg') }}" alt="Location" class="w-6 h-6 mr-2">
                            <span>Banda Aceh</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <img src="{{ asset('images/star.svg') }}" alt="Rating" class="w-6 h-6 ml-50 text-yellow-400">
                                <span class="ml-1 text-gray-600">4.6</span>
                            </div>
                            <span class="text-gray-500 text-sm">(782)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Dots -->
    <div class="flex justify-center mt-4">
        <button class="h-2 w-2 mx-1 rounded-full bg-green-600 culinary-dot active" data-index="0"></button>
        <button class="h-2 w-2 mx-1 rounded-full bg-gray-300 culinary-dot" data-index="1"></button>
        <button class="h-2 w-2 mx-1 rounded-full bg-gray-300 culinary-dot" data-index="2"></button>
        <button class="h-2 w-2 mx-1 rounded-full bg-gray-300 culinary-dot" data-index="3"></button>
    </div>
</div>

<!-- Events Section -->
<div class="container mx-auto px-4 py-8 text-center">
    <h3 class="text-2xl md:text-3xl font-bold text-green-600 mb-2">Daftar Event Aceh</h3>
    <p class="text-gray-600 mb-8">Temukan Event menarik dan catat jadwalnya!</p>

    <div class="relative flex items-center justify-center">
        <!-- Left arrow -->
        <button class="absolute left-0 z-10 bg-gray-100 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Cards Container -->
        <div class="flex gap-6 overflow-x-auto scrollbar-hide px-10">
            <!-- Event Card 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden w-120 flex-shrink-0 scroll-snap-center">
                <img src="{{ asset('images/blue-fest.png') }}" alt="Blue Fest Aceh" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h4 class="text-green-600 font-semibold text-lg mb-1">Blue Fest Aceh</h4>
                    <p class="text-red-500 font-semibold text-sm mb-2">IDR 222K</p>
                    <div class="flex items-center text-sm text-gray-600 mb-1">
                        <img src="{{ asset('images/date.svg') }}" class="w-5 h-5 mr-2">10 May 2025
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <img src="{{ asset('images/g-maps.svg') }}" class="w-5 h-5 mr-2">Taman Seni & Budaya Aceh
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden w-120 flex-shrink-0 scroll-snap-center">
                <img src="{{ asset('images/aceh-running.png') }}" alt="Aceh Running Festival" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h4 class="text-green-600 font-semibold text-lg mb-1">Aceh Running Festival</h4>
                    <p class="text-red-500 font-semibold text-sm mb-2">IDR 180K</p>
                    <div class="flex items-center text-sm text-gray-600 mb-1">
                        <img src="{{ asset('images/date.svg') }}" class="w-5 h-5 mr-2">9 Agustus 2025
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <img src="{{ asset('images/g-maps.svg') }}" class="w-5 h-5 mr-2">Taman Seni & Budaya Aceh
                    </div>
                </div>
            </div>
        </div>

        <!-- Right arrow -->
        <button class="absolute right-0 z-10 bg-gray-100 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>
</div>

<footer class="bg-green-600 text-white">
  <div class="w-full px-12 py-12 grid grid-cols-1 ml-40 md:grid-cols-3 gap-10 text-left">
        <!-- Kontak Kami -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
            <p class="text-white/80 mb-1">jelajahaceh@gmail.com</p>
            <p class="text-white/80 mb-1">+62-8234-6789-0562</p>
            <p class="text-white/80 mb-4">Aceh, Indonesia</p>
            <div class="flex items-center justify-center md:justify-start text-white/80 space-x-1">
                <img src="{{ asset('images/globe.svg') }}" alt="Language" class="w-5 h-5">
                <span>Indonesia</span>
                <img src="{{ asset('images/drop-icon.svg') }}" alt="Dropdown" class="w-4 h-4">
            </div>
        </div>

        <!-- Layanan -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Layanan</h4>
            <ul class="space-y-2 text-white/80">
                <li><a href="#" class="hover:text-white transition">Destinasi Populer</a></li>
                <li><a href="#" class="hover:text-white transition">Rekomendasi Populer</a></li>
                <li><a href="#" class="hover:text-white transition">Daftar Event</a></li>
            </ul>
        </div>

        <!-- Sosial Media -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Sosial Media</h4>
            <div class="flex justify-center md:justify-start space-x-4">
                <a href="#"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook" class="w-6 h-6"></a>
                <a href="#"><img src="{{ asset('images/linkedin.svg') }}" alt="LinkedIn" class="w-6 h-6"></a>
                <a href="#"><img src="{{ asset('images/twitter.svg') }}" alt="Twitter" class="w-6 h-6"></a>
                <a href="#"><img src="{{ asset('images/ig.svg') }}" alt="Instagram" class="w-6 h-6"></a>
            </div>
        </div>
    </div>

    <div class="bg-green-600 py-4">
        <div class="text-center text-white/80 text-sm">
            Copyright © 2025. All rights reserved.
        </div>
    </div>
</footer>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Destination section
        const destinationScroll = document.getElementById('destination-scroll');
        const destinationDots = document.querySelectorAll('.destination-dot');
        const destinationItems = destinationScroll.querySelectorAll('.scroll-snap-center');
        const destinationItemWidth = destinationItems[0].offsetWidth + 24; // width + margin
        
        // Culinary section
        const culinaryScroll = document.getElementById('culinary-scroll');
        const culinaryDots = document.querySelectorAll('.culinary-dot');
        const culinaryItems = culinaryScroll.querySelectorAll('.scroll-snap-center');
        const culinaryItemWidth = culinaryItems[0].offsetWidth + 24; // width + margin
        
        // Destination Dots Click Event
        destinationDots.forEach(dot => {
            dot.addEventListener('click', function() {
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
        
        // Scroll event for culinary
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
        if (destinationDots[0]) {
            destinationDots[0].classList.remove('bg-gray-300');
            destinationDots[0].classList.add('bg-green-600', 'active');
        }
        
        if (culinaryDots[0]) {
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
</style>
@endsection