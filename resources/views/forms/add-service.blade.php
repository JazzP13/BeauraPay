@extends('admin-layout')
@section('content')
        <div
            class="w-[500px] mx-auto bg-white border border-gray-200 rounded-md shadow-xl p-4 overflow-y-auto scroll-thin my-8">
            {{-- HEADER --}}
            <div class="w-full flex justify-between items-center mb-4">
                <h1 class="text-gray-800 font-bold text-xl mb-4">Add New Service</h1>
                <a href="{{ route('services.index') }}" class="text-gray-800 hover:text-gray-500 transition ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                      </svg>
                </a>
            </div>
            <form action="">
                <input type="text" name="service_name" placeholder="Service name..."
                    class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-1 focus:ring-blue-500">
                <input type="text" name="category" placeholder="Service categotgy..."
                    class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-1 focus:ring-blue-500">
                <input type="number" name="ammount" placeholder="Pice..."
                    class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-1 focus:ring-blue-500">
                <button type="submit"
                    class="w-full bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 transition ease-in-out duration-200 flex justify-center items-center">
                    Save
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path
                            d="M10.75 2.75a.75.75 0 0 0-1.5 0v8.614L6.295 8.235a.75.75 0 1 0-1.09 1.03l4.25 4.5a.75.75 0 0 0 1.09 0l4.25-4.5a.75.75 0 0 0-1.09-1.03l-2.955 3.129V2.75Z" />
                        <path
                            d="M3.5 12.75a.75.75 0 0 0-1.5 0v2.5A2.75 2.75 0 0 0 4.75 18h10.5A2.75 2.75 0 0 0 18 15.25v-2.5a.75.75 0 0 0-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5Z" />
                    </svg>
                </button>
            </form>
        </div>
@endsection
