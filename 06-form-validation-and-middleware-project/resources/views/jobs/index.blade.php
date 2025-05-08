<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div>
        @foreach ($jobs as $job)
            
                <a href="/jobs/{{ $job['id'] }}" class=" block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">{{$job->employer->name}}</div>  
                <div>
                        <strong>{{ $job['title'] }}</strong> at {{ $job['company'] }}

                    </div>
                </a>
            
        @endforeach

<div>
    {{ $jobs->links() }}
</div>

</div>
</x-layout>