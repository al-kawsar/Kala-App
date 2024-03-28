<nav id="navbar" class="bg-white shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] flex w-[100%] px-6 fixed mx-auto justify-between items-center">
    <a href="/" class="font-bold text-xl">
        {{-- <img class="w-12 h-12"
            src="https://cdn.logoworks.com/wp-content/uploads/2014/03/fruit-vegetable-logos-templates-logo-designs-037-1.png"
            alt="logo"> --}}
            KalaApp_
    </a>
    <ul class="flex gap-2 p-3 items-center">
        @auth
            <li class="hidden md:block">
                <a href=""
                    class="p-2 px-4 border rounded-md border-blue-600 font-normal text-blue-600 hover:bg-blue-600 hover:text-white hover:underline">
                    Create Post
                </a>
            </li>


            <img src="https://media.dev.to/cdn-cgi/image/width=50,height=50,fit=cover,gravity=auto,format=auto/https%3A%2F%2Fdev-to-uploads.s3.amazonaws.com%2Fuploads%2Fuser%2Fprofile_image%2F1261348%2Fd75354e9-5d5e-4b9c-85e2-cec0e8f07597.jpg"
                data-dropdown-toggle="dropdown" alt="Profile {{ auth()->user()->email }}"
                class="w-[2.20rem] h-[2.20rem] rounded-[50%] bg-red-600 hover:ring-4 hover:ring-primary-50 object-cover cursor-pointer">

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden p-2 bg-white border divide-y divide-gray-100 rounded-lg shadow w-full md:w-72 dark:bg-gray-700">
                <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block rounded px-4 py-2 hover:bg-gray-100 hover:text-blue-600 hover:underline dark:hover:bg-gray-600 dark:hover:text-white font-semibold">
                            <h1 class="text-[1.20rem]">{{ auth()->user()->name }}</h1>
                            <p class="font-normal">{{ '@' . auth()->user()->username }}</p>
                        </a>
                    </li>
                    <hr class="my-2 border">
                    <li>
                        <a href="{{ route('dashboard.home') }}"
                            class="rounded text-base block px-4 py-2 hover:bg-gray-100 hover:text-blue-600 hover:underline dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="rounded text-base block px-4 py-2 hover:bg-gray-100 hover:text-blue-600 hover:underline dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <hr class="my-2 border">
                    <li>
                        <a href="{{ route('logout') }}"
                            class="rounded text-base block px-4 py-2 hover:bg-gray-100 hover:text-blue-600 hover:underline dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>


        @endauth
        @guest
            <li class="hidden md:block">
                <a href="{{ route('login') }}""
                    class="p-3 px-4 rounded-md hover:bg-blue-100
                    hover:text-blue-600 hover:underline">Log
                    in</a>
            </li>
            <a href="{{ route('register') }}"
                class="p-2 px-3 border font-semibold rounded-md border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white hover:underline">
                <li>Create Account</li>
            </a>
        @endguest
    </ul>
</nav>
