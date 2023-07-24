<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 ">
    <div class="bg-black/50 py-5 px-5 rounded-full">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-black/50 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
