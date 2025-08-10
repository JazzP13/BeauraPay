@extends('admin-layout')
@section('content')
    <div class="bg-white min-h-[600px] mx-h-[660] border border-gray-200 rounded-md shadow-xl overflow-y-auto scroll-thin">
        {{-- HEADER --}}
        <div class="w-full bg-gray-800 rounded-t-md">
            <div class="w-full">
                <h1 class="text-white font-bold text-xl px-2 py-1">Billing</h1>
            </div>
        </div>
        {{-- CONTENT --}}
        <div class="w-full px-1 flex gap-2 mt-6">
            {{-- LEFT SIDE --}}
            <div class="w-1/3">
                <form action="">
                    <div class="w-full p-2">
                        <p class="text-lg font-semibold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-id-card-lanyard-icon lucide-id-card-lanyard">
                                <path d="M13.5 8h-3" />
                                <path d="m15 2-1 2h3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h3" />
                                <path d="M16.899 22A5 5 0 0 0 7.1 22" />
                                <path d="m9 2 3 6" />
                                <circle cx="12" cy="15" r="3" />
                            </svg>
                            Employee:
                        </p>
                        <select name="employee" id="" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="">Select Employee</option>
                            <option value="1">John Doe</option>
                            <option value="2">Jane Smith</option>
                            <option value="3">Alice Johnson</option>
                        </select>
                    </div>
                    <div class="w-full px-2 my-4">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="w-full p-2">
                        <p class="text-lg font-semibold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-bath-icon lucide-bath">
                                <path d="M10 4 8 6" />
                                <path d="M17 19v2" />
                                <path d="M2 12h20" />
                                <path d="M7 19v2" />
                                <path d="M9 5 7.621 3.621A2.121 2.121 0 0 0 4 5v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5" />
                            </svg>
                            Service:
                        </p>
                        <select name="employee" id="" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="">Select Employee</option>
                            <option value="1">John Doe</option>
                            <option value="2">Jane Smith</option>
                            <option value="3">Alice Johnson</option>
                        </select>
                    </div>
                    <div class="w-full px-2 my-4">
                        <button type="submit"
                            class="w-full bg-gray-800 hover:bg-gray-600 text-white py-2 rounded-md transition mt-4">
                            Save
                        </button>
                    </div>
                </form>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="w-2/3 border">
                <form action="">
                    <div class="w-full p-2">
                        <p class="flex gap-1 text-xl font-semibold items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                            </svg>
                            Customer name:
                        </p>
                        <input type="text" name="customer_name" id=""
                            class="w-full p-2 border border-gray-300 rounded-md mt-2 text-sm" autocomplete="off" placeholder="Enter customer    name">

                        {{-- HERE IS THE AVAILED SERVICES OF THE CUSTOMER AND EMPLOYEE WHO DO THE SERVICE --}}
                        <div class="w-full mt-4">
                            <p class="text-lg font-semibold">Availed Services</p>
                            <table class="w-full mt-2 border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border px-2 py-1">Service</th>
                                        <th class="border px-2 py-1">Employee</th>
                                        <th class="border px-2 py-1">Employee eraning</th>
                                        </th>
                                        <th class="border px-2 py-1">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        No Data yet
                                    </tr>
                                    <!-- Repeat rows as needed -->
                                </tbody>
                            </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
