<aside class="w-60 bg-[#777E90] text-white flex flex-col justify-between">
    <div>
        <div class="flex items-center gap-1 text-2xl font-bold p-6">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-10 h-10">
            JelajahAceh
        </div>
        <nav class="px-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 px-4 py-2 bg-[#777E90] bg-opacity-100 rounded-md">
                <span class="material-icons">dashboard</span> Dashboard
            </a>
            <a href="{{ route('pengguna') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-[#777E90]/70 rounded-md">
                <span class="material-icons">group</span> Pengguna
            </a>
            <a href="{{ route('admin.event.index') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-[#777E90]/70 rounded-md">
                <span class="material-icons">event</span> Event
            </a>
            <a href="{{ route('review') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-[#777E90]/70 rounded-md">
                <span class="material-icons">star_rate</span> Review
            </a>
        </nav>
    </div>
    <div class="px-4 py-4">
        <button onclick="window.location.href='http://127.0.0.1:8000/'" class="w-full bg-white py-2 rounded-md text-black mb-5 font-medium">Log Out</button>
    </div>
</aside>
