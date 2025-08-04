@extends('admin-layout')
@section('content')

    <div class="bg-white min-h-[600px] mx-h-[660] border border-gray-200 rounded-md shadow-xl overflow-y-auto scroll-thin">
        {{-- HEADER --}}
        <div class="w-full bg-gray-800 rounded-t-md flex">
            <div class="w-full"><h1 class="text-white font-bold text-xl px-2 py-1">Employees</h1></div>
            <div class="w-full flex justify-end items-center"><a href="{{ route('employees.create') }}" class="text-white text-sm flex gap-1 mx-1 my-2 px-4 py-1 rounded-md bg-gray-600 shadow hover:bg-white hover:text-gray-900 transition ease-in-out duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-plus-icon lucide-user-round-plus"><path d="M2 21a8 8 0 0 1 13.292-6"/><circle cx="10" cy="8" r="5"/><path d="M19 16v6"/><path d="M22 19h-6"/></svg>
            New</a></div>
        </div>
        {{-- CONTENT --}}
        <div class="w-full px-2">
            <table class=" table-auto w-full text-left text-sm text-gray-900">
                <thead>
                    <tr>
                        <th class="border-b-1 border-gray-500 py-2">Name</th>
                        <th class="border-b-1 border-gray-500 py-2">Position</th>
                        <th class="border-b-1 border-gray-500 py-2">Rate</th>
                        <th class="border-b-1 border-gray-500 py-2">Date Hired</th>
                        <th class="border-b-1 border-gray-500 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr class="hover:bg-gray-100 transition ease-in-out">
                            <td class="text-gray-500 mt-10">{{ $employee->firstname. ' ' .$employee->middle_initial . '.' . ' ' . $employee->lastname}}</td>
                            <td class="text-gray-500 mt-5">{{ $employee->role }}</td>
                            <td class="text-green-400 mt-5">%{{ number_format($employee->rate) }}</td>
                            <td class="text-gray-500 mt-5">{{ $employee->date_hired->format('M d, Y') }}</td>
                            <td class="flex justify-center items-center">
                                <a href="#" class="text-blue-600 text-xs hover:text-white hover:bg-blue-500 hover:shadow-xl transition ease-in-out px-2 rounded-xl py-2 flex items-center justify-center text-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/></svg>
                                </a>
                                <a href="#" class="text-red-600 hover:text-white hover:bg-red-600 transition ease-in-out px-2 rounded-xl py-2 flex items-center justify-center text-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2-icon lucide-trash-2"><path d="M10 11v6"/><path d="M14 11v6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection