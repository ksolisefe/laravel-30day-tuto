@props(['title', 'subtitle', 'content', 'user', 'href' => '#', 'tags' => []])

<div class="flex w-72 h-64 border-t-4 border-t-green-800 rounded-t-2xl hover:border-blue-300">
    <div class="flex flex-col justify-between rounded-xl border-2 border-transparent bg-slate-800 p-4 shadow-lg w-full h-full">
        <a href="{{ $href }}" class="block mb-2 text-sky-600 no-underline hover:underline dark:text-sky-400">
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
            <div>
                <p class="text-gray-300 text-sm truncate">{{ $user['first_name'] }} {{ $user['last_name'] }}</p>
                <p class="text-gray-300 text-sm truncate">{{ $user['email'] }}</p>
            </div>
        </div>
        <div>
            <div class="flex flex-wrap gap-1 mt-1">
                @foreach ($tags as $tag)
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-1 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                        {{ $tag['name'] }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</div>