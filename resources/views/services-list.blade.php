@extends('admin-layout')
@section('content')
    <div class="bg-white min-h-[600px] max-h-[660] border border-gray-200 rounded-md shadow-xl overflow-y-auto scroll-thin">
        {{-- HEADER --}}
        <div class="w-full bg-gray-800 rounded-t-md flex">
            <div class="w-full">
                <h1 class="text-white font-bold text-xl px-2 py-1">Employees</h1>
            </div>
            <div class="w-full flex justify-end items-center"
                @click="open = true"
                x-data="{ open: false }"
                x-on:click="$dispatch('open-modal')">
                <a href="#"
                    class="text-white text-sm flex gap-1 mx-1 my-2 px-4 py-1 rounded-md bg-gray-600 shadow hover:bg-white hover:text-gray-900 transition ease-in-out duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-user-round-plus-icon lucide-user-round-plus">
                        <path d="M2 21a8 8 0 0 1 13.292-6" />
                        <circle cx="10" cy="8" r="5" />
                        <path d="M19 16v6" />
                        <path d="M22 19h-6" />
                    </svg>
                    New</a>

            </div>
        </div>
        {{-- TABLE --}}
        <div class="mx-2 my-1 border-b rounden-md py-3">
            <div class="w-full flex">
                <div class="w-[300px]">
                    <h3 class="font-semibold">Service name</h3>
                </div>
                <div class="w-[300px]">
                    <h3 class="font-semibold">Category</h3>
                </div>
                <div class="w-[300px]">
                    <h3 class="font-semibold">Price</h3>
                </div>
                <div class="w-[130px] text-center">
                    <h3 class="font-semibold">Action</h3>
                </div>
            </div>
        </div>
        @foreach ($services as $service)
            <div class="mx-2 my-1 py-2 rounden-md hover:bg-gray-200 transition ease-in-out">
                <div class="w-full flex">
                    <div class="w-[300px]">
                        <h3 class="text-gray-500 text-sm">{{ $service->name }}</h3>
                    </div>
                    <div class="w-[300px]">
                        <h3 class="text-gray-500 text-sm">{{ $service->category }}</h3>
                    </div>
                    <div class="w-[300px]">
                        <h3 class="text-sm text-green-600">{{ '₱ ' . number_format($service->amount) }}</h3>
                    </div>
                    <div class="w-[130px] text-center flex justify-center items-center gap-1">
                        {{-- ACTION BUTTON --}}
                        <a href="#"
                            class="text-blue-600 hover:text-blue-300 bg-gray-50 border border-gray-200 p-1 rounded-md shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path
                                    d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                <path
                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="text-sm text-red-500 bg-gray-50 border border-gray-200 rounded-md shadow hover:text-red-400 p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Trigger Button -->
    <button @click="open = true" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" x-data="{ open: false }"
        x-on:click="$dispatch('open-modal')">
        Open Modal
    </button>

    <!-- Modal -->
    <div x-data="{ open: false }" x-on:open-modal.window="open = true" x-show="open" x-transition.opacity
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">

        <!-- Modal Box -->
        <div @click.away="open = false" class="bg-white p-6 rounded-lg shadow-lg w-96" x-transition.scale>
            <h2 class="text-xl font-semibold mb-4">Interactive Modal</h2>

            <!-- Modal Content -->
            <form @submit.prevent="alert('Form submitted!'); open = false;">
                <label class="block mb-2">
                    Name:
                    <input type="text" class="w-full border rounded px-2 py-1 mt-1" required>
                </label>

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" @click="open = false" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- FORM --}}
    <div class="w-[500px]">
        <form action="">
            <input type="text" name="service_name" placeholder="Service name..."
                class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-1 focus:ring-blue-500">
            <input type="text" name="category" placeholder="Service categotgy..."
                class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-1 focus:ring-blue-500">
            <input type="text" name="ammount" placeholder="Pice..."
                class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 focus:outline-none focus:ring-1 focus:ring-blue-500">
            <button type="submit"
                class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition ease-in-out duration-200">
                Add Service
            </button>
        </form>
    </div>
@endsection
