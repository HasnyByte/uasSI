<!-- Popup Register -->
<div id="registerPopup" class="fixed inset-0 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-8 w-full max-w-md relative">
        <button id="closeRegister" class="absolute right-4 top-4 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('images/logo.svg') }}" alt="Register Icon" class="h-16 w-16 mb-4">
            <h2 class="text-2xl font-bold">Sign Up</h2>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-4">
                <label for="register-email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="register-email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan Email" required>
            </div>
            <div class="mb-6">
                <label for="register-password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="register-password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan Password" required>
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
