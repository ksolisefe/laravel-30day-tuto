@props(['title', 'subtitle', 'content', 'userId', 'href' => '#'])

<div class="flex w-72 h-48">
    <div class="flex flex-col justify-between rounded-xl bg-slate-800 p-4 shadow-lg w-full h-full">
        <a href="{{ $href }}" class="block mb-2">
            <h2 class="text-white text-lg font-semibold leading-tight truncate">{{ $title }}</h2>
            <p class="text-gray-300 text-sm leading-snug truncate">{{ $subtitle }}</p>
        </a>
        <div class="flex-1 overflow-hidden">
            <p class="text-gray-200 text-sm leading-snug line-clamp-4 overflow-hidden">
                {{ $content }}
            </p>
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>