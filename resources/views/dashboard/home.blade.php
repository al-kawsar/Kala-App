@extends('layouts.app')

@section('title')

@section('content')

    <section class="px-6 pt-14">
        <h1 class="text-3xl font-bold py-4">Dashboard</h1>

        <div class="grid grid-cols-3 gap-6">
            <x-dashboard.card icon="reader-outline" total="10" description="Total Artikel" />
            <x-dashboard.card icon="chatbox-ellipses-outline" total="32" description="Total Komentar" />
            <x-dashboard.card icon="time-outline" total="230" description="Total Kunjungan" />
        </div>

    </section>

@endsection
