@props(['title', 'subtitle', 'content', 'userId', 'href' => '#'])

<div class="flex w-72 h-48">
    <div class="flex flex-col justify-between rounded-xl border-2 border-transparent bg-slate-800 p-4 shadow-lg w-full h-full hover:cursor-pointer hover:border-2 hover:border-blue-600">
        <a href="{{ $href }}" class="block mb-2">
            <h2 class="text-white text-lg font-semibold leading-tight truncate">{{ $title }}</h2>
            <p class="text-gray-300 text-sm truncate">{{ $subtitle }}</p>
        </a>
        <div class="flex-1 overflow-hidden">
            <p class="text-gray-200 text-sm line-clamp-4 overflow-hidden">
                {{ $content }}
            </p>
        </div>
        <div>
            {{ $slot }}
        </div>
        <div>
            {{-- <p class="text-gray-300 text-sm truncate">{{ $userId }} - {{ $userId->name }}</p> --}}
        </div>
    </div>
</div>