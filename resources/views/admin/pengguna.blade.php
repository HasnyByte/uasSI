@extends('layouts.app')

@section('page-title', 'Informasi Pengguna')

@section('content')
    <div>

        <div class="bg-white rounded-lg shadow p-6 mb-4">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-semibold text-[#2A933C]">Daftar Pengguna</h3>

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
                        <th class="px-6 py-3">ID Pengguna</th>
                        <th class="px-6 py-3">Nama Pengguna</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Tanggal Daftar</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white text-gray-700 text-sm">
                        @foreach ($pengguna as $user)
                            <tr class="border-b">
                                <td class="px-6 py-3">{{ $user->id_user }}</td>
                                <td class="px-6 py-3">{{ $user->nama_user }}</td>
                                <td class="px-6 py-3">{{ $user->email_user }}</td>
                                <td class="px-6 py-3">{{ \Carbon\Carbon::parse($user->created_at)->format('d - m - Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
