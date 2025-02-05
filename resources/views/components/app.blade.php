<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body bg-gray-100>
    <div class="flex h-screen">
        <aside class="w-60 bg-gray-800 text-white p-5 fixed h-screen">
            <h1 class="text-lg font-bold mb-5">Department of Education</h1>
            <nav class="space-y-2">
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Dashboard</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Student List</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700">Attachments</a>
            </nav>
        </aside>
        <div class="flex-1 flex-col ml-60">
            <header class="bg-white shadow p-4 flex justify-between items-center fixed w-[calc(100%-15rem)] z-10">
                <h2 class="text-lg font-semibold">Special Order</h2>
                <div class="flex items-center space-x-2">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Sign In</button>
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Sign out</button>
                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Logout</button>
                </div>
            </header>

            <main class=" bg-gray-50 mt-16 h-full overflow-auto">
                @yield('dashboard')
            </main>

        </div>
    </div>
</body>
</html>
