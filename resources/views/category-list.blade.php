@extends('admin-layout')
@section('content')
    <div
        class="bg-white max-h-[600] border border-gray-200 rounded-md shadow-xl overflow-auto scroll-thin">
        {{-- HEADER --}}
        <div class="bg-gray-900 text-white rounded-t-md flex items-center justify-between px-4 py-2">
            <div class="flex gap-1 items-center">
                <h3 class="font-semibold text-xl">List of categories</h3>
                <a href="{{ route('categories.create') }}"
                    class="mx-3 border border-white text-sm font-light rounded-lg px-2 py-1 hover:bg-gray-100 hover:text-gray-900 transition ease-in-out duration-150">+
                    Add</a>
            </div>
            <a href="{{ route('services.index') }}"
                class="text-gray-100 py-1 rounded-md text-sm flex justify-end hover:text-red-600 transition ease-in-out duration-200">
                {{-- ICON --}}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                        clip-rule="evenodd" />
                </svg>

            </a>
        </div>

        {{-- TABLE --}}
        <div class="mx-auto w-full max-w-2xl rounded-md overflow-x-auto scroll-thin my-4 py-3">
            {{-- TABLE HEADER --}}
            <div class="mx-2 my-1 border-b rounded-md py-3">
                <div class="w-full flex">
                    <div class="w-[500px]">
                        <h3 class="font-semibold pl-2">Category name</h3>
                    </div>
                    <div class="w-[130px] text-center">
                        <h3 class="font-semibold pl-2">Action</h3>
                    </div>
                </div>
            </div>
            {{-- TABLE CONTENT --}}
            @foreach ($categories as $category)
                <div class="py-2 bg-gray-50 border border-gray-200 shadow my-2 rounded-md hover:bg-gray-200 transition ease-in-out text-sm">
                    <div class="w-full flex mx-2">
                        <div class="w-[500px]">
                            <h3 class="pl-2 text-gray-500 flex items-center">{{ $category->category_name }}</h3>
                        </div>
                        <div class="w-[130px] items-center flex gap-1 justify-center">
                            {{-- ACTION BUTTONS --}}
                            <a href="#" class="p-2 rounded bg-gray-50 shadow-sm border border-gray-200 text-blue-500 hover:text-blue-300 transition ease-in-out duration-200">
                                @include('icons.pen')
                            </a>
                            <a href="#" class="p-2 rounded bg-gray-50 shadow-sm border border-gray-200 text-red-500 hover:text-red-300 transition ease-in-out duration-200">
                                @include('icons.trash')
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
