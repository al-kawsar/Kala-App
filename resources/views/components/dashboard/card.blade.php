<div class="flex flex-col gap-6 justify-center items-start bg-white rounded-md p-6 shadow-sm border">
    <div class="flex justify-between items-center w-full">
        <h1 class="font-bold text-3xl">{{ $total }}</h1>
        <div class="bg-[#e5e5e6] w-10 h-9 rounded-lg place-content-center grid">
            <ion-icon name="{{ $icon }}" class="w-5 h-5 !z-0"></ion-icon>
        </div>
    </div>
    <p class="text-xs text-gray-500 font-semibold">{{ $description }}</p>
</div>
