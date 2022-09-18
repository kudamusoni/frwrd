<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-create-tasks></x-create-tasks>
            <ul class="mt-6">
                @foreach ($tasks as $task)
                    <x-task :task="$task"></x-task>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
