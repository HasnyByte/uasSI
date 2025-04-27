@vite('resources/css/app.css')

<nav class="bg-white shadow-md py-4">
    <div class="container mx-auto px-8 flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{asset('images/logo.svg')}}">
            <div class="ml-2 text-xl font-bold">
                Jelajah<span class="text-[#2A933C]">Aceh</span>
            </div>
        </div>

        <div class="flex items-center space-x-24">
            <div class="hidden md:flex space-x-14">
                <a href="#" class="text-[#777E90] font-medium hover:text-[#2A933C]">Home</a>
                <a href="#" class="text-[#777E90] font-medium hover:text-[#2A933C]">Wisata</a>
                <a href="#" class="text-[#777E90] font-medium hover:text-[#2A933C]">Kuliner</a>
                <a href="#" class="text-[#777E90] font-medium hover:text-[#2A933C]">Event</a>
            </div>

            <button id="loginButton" class="bg-[#2A933C] hover:bg-green-700 text-white px-6 py-2 rounded font-medium">
                Masuk
            </button>
        </div>
    </div>
</nav>

<!-- Overlay untuk background popup -->
<div id="overlay" class="fixed inset-0 bg-gradient-to-b from-black/20 via-black/30 to-black/20  hidden z-40"></div>

<!-- Popup Login -->
<div id="loginPopup" class="fixed inset-0 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-8 w-full max-w-md">
        <div class="flex flex-col items-center mb-6">
            <img src="{{asset('images/logo.svg')}}" alt="Login Icon" class="h-16 w-16 mb-4">
            <h2 class="text-2xl font-bold">Sign In</h2>
            <button id="closeLogin" class="absolute right-6 top-6 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <button type="submit" class="w-full bg-[#2A933C] text-white py-2 px-4 rounded-md hover:bg-green-700 transition">Masuk</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Belum punya akun?
                <button id="showRegister" class="text-[#2A933C] font-medium hover:underline">Daftar</button>
            </p>
        </div>
    </div>
</div>

<!-- Popup Register -->
<div id="registerPopup" class="fixed inset-0 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-8 w-full max-w-md">
        <div class="flex flex-col items-center mb-6">
            <!-- Gambar di atas judul Sign Up -->
            <img src="{{asset('images/logo.svg')}}" alt="Register Icon" class="h-16 w-16 mb-4">
            <h2 class="text-2xl font-bold">Sign Up</h2>
            <button id="closeRegister" class="absolute right-6 top-6 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form>
            <div class="mb-4">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-4">
                <label for="register-email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="register-email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-6">
                <label for="register-password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="register-password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <button type="submit" class="w-full bg-[#2A933C] text-white py-2 px-4 rounded-md hover:bg-green-700 transition">Daftar</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Sudah punya akun?
                <button id="showLogin" class="text-[#2A933C] font-medium hover:underline">Masuk</button>
            </p>
        </div>
    </div>
</div>

<script>
    // Ambilelemen
    const loginButton = document.getElementById('loginButton');
    const overlay = document.getElementById('overlay');
    const loginPopup = document.getElementById('loginPopup');
    const registerPopup = document.getElementById('registerPopup');
    const closeLogin = document.getElementById('closeLogin');
    const closeRegister = document.getElementById('closeRegister');
    const showRegister = document.getElementById('showRegister');
    const showLogin = document.getElementById('showLogin');

    // Tampilkan popup login ketika tombol masuk ditekan
    loginButton.addEventListener('click', () => {
        overlay.classList.remove('hidden');
        loginPopup.classList.remove('hidden');
    });

    // Sembunyikan popup login
    closeLogin.addEventListener('click', () => {
        overlay.classList.add('hidden');
        loginPopup.classList.add('hidden');
    });

    // Sembunyikan popup register
    closeRegister.addEventListener('click', () => {
        overlay.classList.add('hidden');
        registerPopup.classList.add('hidden');
    });

    // Ganti dari login ke register
    showRegister.addEventListener('click', () => {
        loginPopup.classList.add('hidden');
        registerPopup.classList.remove('hidden');
    });

    // Ganti dari register ke login
    showLogin.addEventListener('click', () => {
        registerPopup.classList.add('hidden');
        loginPopup.classList.remove('hidden');
    });

    // Juga menutup popup ketika klik di overlay
    overlay.addEventListener('click', () => {
        overlay.classList.add('hidden');
        loginPopup.classList.add('hidden');
        registerPopup.classList.add('hidden');
    });
</script>
