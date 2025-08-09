@extends('admin-layout')
@section('content')
    <div class="bg-white min-h-[600px] max-h-[660] border border-gray-200 rounded-md shadow-xl overflow-y-auto scroll-thin">
        {{-- HEADER --}}
        <div class="bg-gray-900 text-white rounded-t-md flex items-center justify-between px-4 py-2">
           <div class="flex gap-1 items-center">
            <h3 class="font-semibold text-xl">List of categories</h3>
            <a href="#" class="mx-3 border border-white text-sm font-light rounded-lg px-2 py-1 hover:bg-gray-100 hover:text-gray-900 transition ease-in-out duration-150">+ Add</a>
           </div>
            <a href="{{ route('services.index') }}"
                class="text-gray-100 py-1 rounded-md text-sm flex justify-end hover:text-red-600 transition ease-in-out duration-200">
                {{-- ICON --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                  </svg>

            </a>
        </div>
    </div>
@endsection