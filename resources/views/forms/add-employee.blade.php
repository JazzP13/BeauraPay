@extends('admin-layout')
@section('content')
    <div class="w-96 border border-gray-200 rounded-md shadow-xl scroll-thin bg-white p-4 mx-auto mt-8">
        {{-- HEADER --}}
        <div class="w-full flex justify-between items-center mb-6">
            <h1 class="text-gray-900 font-bold text-xl">New Employee</h1>
            <a href="{{ url('/employees') }}"
                class="p-2 rounded-md bg-gray-100 border border-gray-300 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x-icon lucide-x">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </a>
        </div>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            {{-- FIRSTNAME --}}
            <input type="text" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required
                class="w-full text-sm px-3 py-3 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-1 focus:ring-blue-100">
            {{-- MIDLLENAME --}}
            <input type="text" name="middle_initial" placeholder="Middle Initial" value="{{ old('middle_initial') }}" required
                class="w-full text-sm px-3 py-3 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-1 focus:ring-blue-100">
            {{-- LASTNAME --}}
            <input type="text" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required
                class="w-full text-sm px-3 py-3 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-1 focus:ring-blue-100">
            {{-- POSITION & RATE --}}
            <div class="w-full flex gap-2 mb-3">
                <select name="role" id="" required
                    class="w-full text-sm px-3 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-100">
                    <option value="" disabled selected> - Select Position -</option>
                    <option value="Manager">Manager</option>
                    <option value="Cleaner">Cleaner</option>
                    <option value="Stylist">Stylist</option>
                    <option value="Massage&Spa">Massage&Spa</option>
                </select>
                <input type="number" name="commission_rate" id="" placeholder="Rate" value="{{ old('commission_rate') }}" required
                    class="w-full text-sm px-3 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-100">
            </div>
            {{-- DATE HIRED --}}
            <input type="date" name="date_hired" id="" {{ old('date_hired') }} required
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
                class="w-full bg-gray-900 hover:bg-gray-700 text-white text-sm font-semibold py-2 px-4 rounded-md transition ease-in-out duration-200">
                Save
            </button>
        </form>
    </div>
@endsection
