@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-[#777E90] text-white rounded-lg p-6 shadow flex flex-col justify-between">
            <div>
                <div class="text-3xl font-bold mb-2">Total Pengguna</div>
                <div class="text-3xl font-bold">{{ $totalPengguna }}</div>
            </div>
            <div class="text-white text-right">
                <span class="material-icons text-8xl">groups</span>
            </div>
        </div>

        <div class="bg-[#777E90] text-white rounded-lg p-6 shadow flex flex-col justify-between">
            <div>
                <div class="text-3xl font-bold mb-2">Total Event Mendatang</div>
                <div class="text-3xl font-bold">{{ $totalEvent }}</div> 
            </div>
            <div class="text-[#ffffff] text-right">
                <span class="material-icons text-6xl">edit_calendar</span>
            </div>
        </div>

        <div class="bg-[#777E90] text-white rounded-lg p-6 shadow flex flex-col justify-between">
            <div>
                <div class="text-3xl font-bold mb-2">Total Rating</div>
                <div class="text-3xl font-bold">{{ $totalReview }}</div>
            </div>
            <div class="text-[#ffffff] text-right">
                <span class="material-icons text-6xl">category</span>
            </div>
        </div>
    </div>
@endsection
