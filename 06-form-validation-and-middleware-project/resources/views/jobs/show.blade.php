<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job is offered by {{ $job->company }}.
    </p>
</x-layout>