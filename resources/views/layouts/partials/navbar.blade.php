<nav id="navbar" class="flex w-[80%] mx-auto justify-end">
    <ul class="flex gap-3 p-3 items-center">
        @auth
            <li class="p-3 border rounded border-blue-600 text-blue-600">
                <a href="">Create Post</a>
            </li>
        @endauth
        @guest
            <a href="">
                <li class="p-3 px-4 rounded hover:bg-blue-100 hover:text-blue-600 hover:underline">Log in</li>
            </a>
            <a href=""
                class="p-3  border font-bold rounded border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white hover:underline">
                <li>Create Account</li>
            </a>
        @endguest
    </ul>
</nav>
