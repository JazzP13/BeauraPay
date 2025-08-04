@extends('admin-layout')
@section('content')
    <div class="bg-white min-h-[600px] mx-h-[660] border border-gray-200 rounded-md shadow-xl overflow-y-auto scroll-thin">
        {{-- HEADER --}}
        <div class="w-full bg-gray-800 rounded-t-md flex">
            <div class="w-full"><h1 class="text-white font-bold text-xl px-2 py-1">Billing</h1></div>
            <div class="w-full flex justify-end items-center"><a href="{{ route('services.create') }}" class="text-white text-sm flex gap-1 mx-1 my-2 px-4 py-1 rounded-md bg-gray-600 shadow hover:bg-white hover:text-gray-900 transition ease-in-out duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-plus-icon lucide-user-round-plus"><path d="M2 21a8 8 0 0 1 13.292-6"/><circle cx="10" cy="8" r="5"/><path d="M19 16v6"/><path d="M22 19h-6"/></svg>
            New</a></div>
        </div>
        {{-- CONTENT --}}
        <div class="w-full px-2">
            @yield('billing-content')
        </div>
    </div>
@endsection