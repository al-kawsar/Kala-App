@extends('layouts.app')

@section('title', $title)
@section('content')
    <div class="w-[80%] mx-auto py-5 pt-14">

        <h1 class="text-[2rem] md:text-[2.5rem] font-bold">Index Posts</h1>
        {{-- <h2 class="text-xl">Filter</h2> --}}
        <form action="{{ route('posts.index') }}" method="get" class="border border-blue-300 p-3 rounded">
            <div class="flex gap-2 items-center">
                <label for="search">Search</label>
                <input type="text" name="search" id="search" value="{{ request('search') }}"
                    class="rounded p-1 block bg-transparent border border-blue-600 w-[100%] md:w-[250px] focus:outline-none">
                @if (request()->has('search'))
                    <a class="bg-red-600 text-white p-1 px-2 rounded" href="{{ route('posts.index') }}">Clear</a>
                @endif
            </div>
            @if (request()->has('search'))
                <p class="text-sm mt-5">Sekitar {{ $total_results }} hasil ({{ $execution_time }} detik) </p>
            @endif
        </form>
        @foreach ($posts as $post)
            <div class="my-[2.5rem]">
                <h1 class="text-xl font-bold underline decoration-solid">
                    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                </h1>
                <p class="my-3">{{ str()->limit($post->body, 100) }}</p>
                <ul class="flex flex-col md:flex-row items-start md:items-center gap-5">
                    <li><span class="text-white p-[4px] rounded bg-orange-600">Author</span> {{ $post->author }}</li>
                    <li><span class="text-white p-[4px] rounded bg-black">Published</span>
                        {{ $post->published->diffForHumans() }}
                    <li>
                </ul>
            </div>
        @endforeach
        <div class="w-[80px]">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
