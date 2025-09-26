@extends('admin-layout')
@section('content')
    <div class="w-[600px] bg-white border-t-2 border-blue-800 rounded-md shadow p-2 mx-auto">
        {{-- HEADER --}}
        <div class="w-full bg-blue-800 text-white rounded-t-md px-3 py-2 mb-3 flex justify-between">
            <h2 class="font-semibold text-lg">Billing Details</h2>
            <a href=""
                class="font-bold text-blue-700 bg-white rounded p-1 flex justify-center items-center">@include('icons.x')</a>
        </div>
        {{-- DETAILS --}}
        <div class="w-full">
            {{-- CUSTOMER NAME --}}
            <div class="w-full flex">
                <div class="bg-gray-100">
                    <p class="font-light text-sm px-3 py-2 border-b w-[200px]">Customer Name:</p>
                </div>
                <div class="w-full bg-white">
                    <p class="text-sm px-4 py-2 border-b font-semibold">{{ $billingHistory->customer_name }}</p>
                </div>
            </div>

            {{-- SERVICES AVAILED --}}
            <div class="w-full flex">
                <div class="bg-gray-100">
                    <p class="font-light text-sm px-3 py-2 w-[200px]">Service/s:</p>
                </div>
                <div class="w-full bg-white">
                    @forelse($billingHistory->details as $detail)
                        <p class="text-sm px-4 py-2 border-b">{{ $detail->service }} - <span class="text-blue-500 italic underline">₱{{ $detail->service_price }}</span></p>
                    @empty
                        <p class="text-sm px-4 py-2 border-b text-gray-500">No services found</p>
                    @endforelse
                </div>
            </div>

            {{-- EMPLOYEE --}}
            <div class="w-full flex">
                <div class="bg-gray-100">
                    <p class="font-light text-sm px-3 py-2 w-[200px]">Employee:</p>
                </div>
                <div class="w-full bg-white">
                    @forelse($billingHistory->details as $detail)
                        <p class="text-sm px-4 py-2 border-b">{{ $detail->employee }}</p>
                    @empty
                        <p class="text-sm px-4 py-2 border-b text-gray-500">No services found</p>
                    @endforelse
                </div>
            </div>

            {{-- EMPLOYEE COMMISSION --}}
            <div class="w-full flex">
                <div class="bg-gray-100">
                    <p class="font-light text-sm px-3 py-2 w-[200px]">Emp. Commission:</p>
                </div>
                <div class="w-full bg-white">
                    @forelse($billingHistory->details as $detail)
                        <p class="text-sm px-4 py-2 border-b">{{ number_format($detail->comission) }}% - ₱ {{ $detail->comission_amount }}</p>
                    @empty
                        <p class="text-sm px-4 py-2 border-b text-gray-500">No services found</p>
                    @endforelse
                </div>
            </div>
        </div>
    @endsection
