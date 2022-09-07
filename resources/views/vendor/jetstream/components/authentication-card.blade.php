<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 bg-primary-200">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-lg shadow-slate-900 sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
