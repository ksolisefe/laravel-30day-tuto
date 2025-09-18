<x-layout>
    <x-slot:heading>
        Post
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $post['title'] }}</h2>
    <p class="text-gray-400 mb-2">{{ $post['subtitle'] }}</p>
    <div class="mb-4">
        <p>{{ $post['content'] }}</p>
    </div>
    <div class="text-sm text-gray-500">
        <p>By: {{ $post['user']['first_name'] }} {{ $post['user']['last_name'] }}</p>
        <p>Email: {{ $post['user']['email'] }}</p>
    </div>
</x-layout>