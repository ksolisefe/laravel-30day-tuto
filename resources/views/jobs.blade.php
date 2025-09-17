<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-800 hover:underline">
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>