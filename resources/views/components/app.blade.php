<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="navbar bg-blue-400 flex justify-between">
        <div class="flex items-center gap-2">
            <div class="drawer z-[100]">
                <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <label for="my-drawer" class="btn btn-neutral drawer-button">☰</label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu bg-base-200 text-base-content min-h-full w-70 p-4">
                        <h1 class="text-red-500">Department of Education</h1>
                        <li class="mt-5"><a>Strands</a></li>
                        <li><a>Student List</a></li>
                    </ul>
                </div>
            </div>
            <a class="btn btn-ghost text-xl">Department of Education</a>
        </div>


        <div class="flex items-center gap-x-2">
            <ul class="menu menu-horizontal px-1 gap-x-2">
                <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered h-10 w-24 md:w-auto" />
                  </div>
                <li>
                    <details>
                        <summary>Account</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    <main>
    @yield('dashboard')
    </main>
</body>

</html>
