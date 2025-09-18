<x-layout>
    <x-slot:heading>
        Posts Page
    </x-slot:heading>

    <div class="flex flex-wrap grow">
        @foreach ($posts as $post)
            <div class="px-2 mb-4">
                <x-post-card
                    :title="$post['title']"
                    :subtitle="$post['subtitle']"
                    :content="$post['content']"
                    :user="$post['user']"
                    :href="url('/posts/'.$post['id'])"
                    :content="$post['content']"
                    :tags="$post['tags']"
                />
            </div>
        @endforeach
    </div>
</x-layout>