@extends('layouts.app')

@section('page-title', 'Kelola Review')

@section('content')
    <div>
        <div class="bg-white rounded-lg shadow p-6 mb-4">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-semibold text-[#2A933C]">Review dan Rating</h3>

                <div class="relative w-full max-w-xs">
          <span class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
            search
          </span>
                    <input
                        type="text"
                        placeholder="Cari"
                        class="pl-10 pr-4 py-2 w-full rounded-full bg-gray-100 text-sm border border-gray-300 focus:outline-none focus:ring focus:ring-[#2A933C]/50"
                    >
                </div>
            </div>

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
                    {{-- @foreach ($ulasan as $review) --}}
                    <tr class="border-b">
                        <td class="px-6 py-3">
                            <div class="font-semibold">Khalishadz</div>
                            <div class="text-xs text-gray-500">17-04-2025 • <span class="bg-gray-200 px-2 py-1 rounded-full text-[10px] text-[#2A933C]">Kuliner</span></div>
                            <div class="text-sm mt-1">Wah makanannya enak sekali, harganya juga murah!</div>
                        </td>
                        <td class="px-6 py-3">4,9 <span class="text-yellow-400">★</span></td>
                        <td class="px-6 py-3">
                            <div class="mb-1">
                 <span class="bg-gray-200 text-[10px] text-[#2A933C] px-2 py-1 rounded-full font-medium">
                     KAL001
                 </span>
                            </div>
                            <div class="text-sm font-semibold">Rujak U Groh Bakoy</div>
                        </td>
                        <td class="px-6 py-3">
                            <button class="text-red-500 hover:text-red-700">
                                <span class="material-icons">delete</span>
                            </button>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
