<nav class="bg-white shadow-md py-4 fixed top-0 w-full z-50">
    <div class="container mx-auto px-8 flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{asset('images/logo.svg')}}" class="h-auto" alt="Logo">
            <div class="ml-2 text-xl font-bold">
                Jelajah<span class="text-[#2A933C]">Aceh</span>
            </div>
        </div>

        <div class="flex items-center space-x-24">
            <div class="hidden md:flex space-x-14">
                <a href="{{ route('home') }}" class="text-[#777E90] font-medium hover:text-[#2A933C]">Home</a>
                <a href="{{ route('wisata') }}" class="text-[#777E90] font-medium hover:text-[#2A933C]">Wisata</a>
                <a href="{{ route('kuliner') }}" class="text-[#777E90] font-medium hover:text-[#2A933C]">Kuliner</a>
                <a href="{{ route('event') }}" class="text-[#777E90] font-medium hover:text-[#2A933C]">Events</a>
            </div>

            <button id="loginButton" class="bg-[#2A933C] hover:bg-green-700 text-white px-6 py-2 rounded font-medium">
                Masuk
            </button>
        </div>
    </div>
</nav>


<div class="mt-20"></div>

<div id="overlay" class="fixed inset-0 bg-gradient-to-b from-black/20 via-black/30 to-black/20 hidden z-40"></div>

@include('components.auth.login-popup')
@include('components.auth.register-popup')
@include('components.auth.auth-script')
