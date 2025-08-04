<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeauraPay</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @section('content')
        <div x-data="{ open: false }" x-on:open-modal.window="open = true" x-show="open" x-transition.opacity
            class="w-[500px] fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
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
</body>

</html>
