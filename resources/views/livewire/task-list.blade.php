<div>
    {{-- Be like water. --}}
    <ul>
        @foreach ($tasks as $task)
            <livewire:task :task="$task" :wire:key="$task->id"/>
        @endforeach
    </ul>
</div>
