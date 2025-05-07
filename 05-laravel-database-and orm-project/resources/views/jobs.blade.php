<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong> at {{ $job['company'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>