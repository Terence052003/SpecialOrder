@extends("components.startup")
@section("startup")

<div class="flex items-center bg-gray-700 h-full justify-center">
    <div class="w-1/4 p-8 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Department of Education</h2>

        <form action="{{ route('login') }}">
            @csrf

            <!-- Email Input -->
            <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                    <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                </svg>
                <input type="email" name="email" class="grow" placeholder="Email" required />
            </label>

            <!-- Password Input -->
            <label class="input input-bordered flex items-center gap-2 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                </svg>
                <input type="password" name="password" class="grow" placeholder="Password" required />
            </label>

            <!-- Register Button -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mt-6 mx-auto block">
                Register
            </button>
        </form>

@endsection
