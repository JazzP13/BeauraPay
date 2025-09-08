@extends('admin-layout')
@section('content')
    <div class="bg-gray-100 w-full overflow-y-auto scroll-thin">
        {{-- HEADER --}}
        <div class="w-full">
            <div class="w-full text-center border-b border-gray-300 rounded mb-1 p-2">
                <h1 class="text-indigo-500 font-bold text-4xl px-2 py-1">Billing</h1>
            </div>
        </div>
        {{-- CONTENT --}}
        <div class="w-full px-1 flex gap-2">
            {{-- LEFT SIDE --}}
            <div class="w-1/3 border h-[350px] border-gray-300 rounded shadow bg-white">
                <form action="{{ route('temporaryBilling.store') }}" method="POST">
                    @csrf
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
                        <select name="employee_select" id="" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="" selected disabled>Select Employee</option>
                            @foreach ($employees as $employee)
                                <option
                                    value="{{ $employee->firstname . $employee->middle_initial . $employee->lastname }}">
                                    {{ $employee->firstname . $employee->middle_initial . $employee->lastname }}
                                </option>
                            @endforeach
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
                        <select name="service_select" id="" class="w-full p-2 border border-gray-300 rounded-md">
                            <option value="" selected disabled>Select Service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->name . ' - ' . $service->amount }}">
                                    {{ $service->name . ' - ' . $service->amount }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full px-2 my-4">
                        <button type="submit"
                            class="w-full bg-gray-100 hover:bg-blue-400 text-gray-900 border border-gray-300 py-2 rounded-md transition mt-4">
                            Save
                        </button>
                    </div>
                </form>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="w-2/3">
                <form action="{{ route('billing.store') }}" method="POST">
                    @csrf
                    <div class="w-full bg-indigo-600 rounded shadow border border-gray-200 p-2 mb-4">
                        <p class="text-white flex text-xl font-semibold items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Cusromer name:
                        </p>
                        <input type="text" name="customer_name" id="" placeholder="Enter customer name"
                            class="w-full p-2 border border-white rounded-md focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent bg-white text-gray-900" />
                    </div>
                    {{-- services table --}}
                    <div class="w-full bg-white rounded shadow border-t-2 border-indigo-600 overflow-auto max-h-[350px]">
                        <table class="w-full rounded max-h-[300px]">
                            <thead class="mb-8">
                                <tr class="border text-white bg-gray-800 mb-6">
                                    <th class="py-1 mb-4">Service</th>
                                    <th class="py-1 mb-4">Price</th>
                                    <th class="py-1 mb-4">Rate</th>
                                    <th class="py-1 mb-4">Comm.</th>
                                    <th class="py-1 mb-4">Employee</th>
                                    <th class="max-w-[5px]"></th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @forelse ($temporaryBillings as $tempBill)
                                    <tr class="border border-gray-300 text-sm font-light rounded-md hover:bg-gray-100 transition">
                                        <td class="py-2 mb-2 text-center">{{ $tempBill->service }}</td>
                                        <td class="py-2 mb-2 text-center">{{ number_format($tempBill->price) }}</td>
                                        <td class="py-2 mb-2 text-center">{{ $tempBill->commission_rate * 100 }}%</td>
                                        <td class="py-2 mb-2 text-center">{{ number_format($tempBill->commission_amount) }}</td>
                                        <td class="py-2 mb-2 text-center">{{ $tempBill->employee }}</td>
                                        <td class="flex items-center justify-center">
                                            <a href="#"
                                                onclick="deleteRecord({{ $tempBill->id }})"
                                                class="flex items-center justify-center text-red-500 p-1 my-1 rounded-md border border-gray-200 bg-gray-100 text-xs">
                                                @include('icons.trash')
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-1 mb-2 text-center">No data yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- ABOUT THE OVER ALL AMOUNT --}}
                    <div class="w-full">
                        <div class="w-full bg-white rounded shadow-md border-t-2 border-indigo-600 p-2 mt-4">
                            <p class="text-lg font-semibold flex items-center gap-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-calculator-icon lucide-calculator">
                                    <rect x="3" y="4" width="18" height="16" rx="2" ry="2" />
                                    <line x1="7" y1="8" x2="17" y2="8" />
                                    <line x1="7" y1="12" x2="17" y2="12" />
                                    <line x1="7" y1="16" x2="17" y2="16" />
                                    <line x1="9" y1="20" x2="9.01" y2="20" />
                                    <line x1="15" y1="20" x2="15.01" y2="20" />
                                </svg>
                                Total Amount:
                            </p>
                            <p class="text-4xl font-bold">₱ {{ number_format($totalAmount) }}</p>
                        </div>
                    </div>
                    {{-- THIS IS THE SAVE BUTTON --}}
                    <div class="w-full flex justify-end">
                        <button type="submit" class="w-xs bg-gray-800 hover:bg-gray-600 text-white py-2 rounded-md transition mt-4">
                            Done
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



<script>
    function deleteRecord(id) {
        if(confirm("Are you sure you want to delete this record?")) {
            fetch(`/temporary-billing/${id}`,{
                method: "DELETE",
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
            }).then(response => {
                if(response.ok) location.reload();
                else alert("Failed to delete the record.");
            });
        }
    }
</script>