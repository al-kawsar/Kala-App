@extends('layouts.app')

@section('title')

@section('content')

    <section class="bg-gray-50 dark:bg-gray-900 p-8">
        <div class="flex flex-col items-center justify-center mx-auto lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-12 h-12 mr-2"
                    src="https://cdn.logoworks.com/wp-content/uploads/2014/03/fruit-vegetable-logos-templates-logo-designs-037-1.png"
                    alt="logo">
                KALA App
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('do-register') }}" method="post">
                        @csrf
                        <div>
                            <label for="name"
                                class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                name</label>
                            <input type="name" name="name" id="name" value="{{ old('name') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('name')
                                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="username"
                                class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                username</label>
                            <input type="username" name="username" id="username" value="{{ old('username') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('username')
                                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('email')
                                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                value="{{ old('password', request('password')) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="confirm-password"
                                class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                password</label>
                            <input type="password" name="password_confirmation" id="confirm-password"
                                value="{{ old('password', request('password_confirmation')) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('login') }}"
                                class="bg-transparent hover:border-amber-300 border border-transparent focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sudah
                                daftar?</a>
                            <button type="submit"
                                class="text-white bg-amber-500 hover:bg-amber-400 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
