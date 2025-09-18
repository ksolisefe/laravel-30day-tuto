<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border rounded-lg border-gray-200">
                <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }}
                </div>
            </a>
        @endforeach
    </div>

</x-layout>