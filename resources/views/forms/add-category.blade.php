@extends('admin-layout')
@section('content')
    <div class="w-full">
        <div class="w-[500px] mx-auto border border-gray-200 bg-white rounded-md shadow-lg overflow-hidden mt-10">
            {{-- HEADER --}}
            <div class="bg-gray-700 text-white rounded-t-md flex items-center justify-between px-4 py-2">
                <h3>Add category</h3>
            <a href="{{ route('categories.index') }}" class="p-2 rounded-md hover:bg-red-500 hover:text-white transition ease-in-out duration-200">
                @include('icons.x')
            </a>
            </div>
            {{-- BODY --}}
            <form action="" method="POST" class="p-2">
                @csrf
                <input type="text" name="category_name" placeholder="Category name..." value="{{ old('category_name') }}" required autocomplete="off"
                    class="w-full text-sm px-3 py-3 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-1 focus:ring-blue-100">
                @if ($errors->any())
                    <div class="mb-4 text-red-500 text-sm p-2 bg-red-100 rounded-md z-50">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- BUTTON --}}
                <button type="submit"
                    class="w-full bg-gray-700 hover:bg-gray-600 text-white text-sm font-normal py-2 px-4 rounded-md transition ease-in-out duration-200">
                    Save
            </form>
        </div>
    </div>
@endsection
