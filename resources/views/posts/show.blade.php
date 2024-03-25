@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="w-[90%] mx-auto py-5">

        <h2 class="text-[4rem] font-bold">
            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
        </h2>
        <div class="flex gap-3 my-[2rem] flex-wrap">
            @forelse ($post->categories as $category)
                @php
                    $randomIndex = rand(0, 2);

                    $colors = ['bg-green-300', 'bg-pink-300', 'bg-blue-300'];

                    $selected_color = $colors[$randomIndex];
                @endphp

                <div class="p-1 rounded {{ $selected_color }}"># {{ $category->name }}</div>

            @empty
            @endforelse
        </div>


        <p class="my-3"><span class="">Author</span> {{ $post->author }}</p>
        <p class="my-3"><span class="">Published</span> {{ $post->published }}</p>

        <p class="">{!! $post->body !!}</p>
    </div>
@endsection
