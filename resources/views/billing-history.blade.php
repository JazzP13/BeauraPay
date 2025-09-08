@php
$details = '   '
@endphp
@extends('admin-layout')
@section('content')
    <div class="w-full">
        {{-- Search Inpits --}}
        <div class="w-[900px] mx-auto mb-5 flex justify-between">
            <div class="w-sm bg-white rounded shadow border-t-2 border-indigo-600">
                <form action="" class="px-2 py-3 flex gap-1">
                    <input type="text" name="search" id="search"
                        class="w-full border text-sm border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Search by customer name...">
                    <button class="bg-blue-500 text-white text-sm font-medium px-3 py-2 rounded">
                        Search
                    </button>
                </form>
            </div>
        </div>
        {{-- HISTORY TABLE --}}
        <div class="w-[900px] mx-auto rounded pb-2 overflow-auto">
            {{-- Table Header --}}
            <div class="flex px-2 bg-indigo-600 text-white rounded-t mb-3">
                <div class="font-semibold text-md w-[270px]  py-2">Date&Time</div>
                <div class="font-semibold text-md w-[270px] text-center  py-2">Customer</div>
                <div class="font-semibold text-md w-[180px] text-center  py-2">Num. of Services</div>
                <div class="font-semibold text-md w-[180px] text-center  py-2">Total Due</div>
                <div class="font-semibold text-md w-[130px] text-center  py-2">{{ $details }}</div>
            </div>
            {{-- Table row --}}
            @forelse ($billingHistories as $billing)
            <div class="flex bg-white px-2 py-2 border border-gray-100 rounded shadow mb-2 text-sm">
                <div class="text-md w-[270px] font-light">
                    <p>{{ \Carbon\Carbon::parse($billing->created_at)->format('F j, Y - h:i A') }}</p>
                </div>
                <div class="text-md w-[270px] font-light text-center">
                    <p>{{ $billing->customer_name }}</p>
                </div>
                <div class="w-[180px] font-light text-center">
                    <p>{{ $billing->number_of_services }}</p>
                </div>
                <div class="w-[180px] font-light text-center">
                    <p class=" italic text-green-400">{{ '₱ ' . number_format($billing->total_amount) }}</p>
                </div>
                <div class="w-[130px] font-light flex justify-center items-center">
                    <a href="#"
                    class="text-blue-500 py-1 px-3 border rounded hover:text-white hover:bg-gray-800 transition ease-in-out duration-200 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                            <path
                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </a>
                </div>
            </div>
            @empty
                <p class="text-center text-gray-500">No billing history found.</p>
            @endforelse
        </div>
    </div>
@endsection
