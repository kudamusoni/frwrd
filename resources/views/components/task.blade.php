@props(['task'])

@php
    $completed = boolval($task['completed']);
    $btnText = $completed ? 'Completed' : 'Complete';
@endphp

<li class="">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 flex justify-between items-center {{ $completed ? 'line-through' : '' }}">
            <div class="text-xl">
                {{ $task['name'] }}
            </div>
            <div class="flex">
                <form action="/task/{{ $task->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 border text-white text-md p-2.5 shadow-sm sm:rounded-lg">
                        Delete
                    </button>
                </form>
                <form method="POST" action="/task/{{ $task->id }}">
                    @csrf
                    @method('PATCH')
                    <button class="{{ $completed ? 'bg-gray-400' : 'bg-black' }} border text-white text-md p-2.5 shadow-sm sm:rounded-lg" {{ $completed ? 'disabled="true"' : '' }} type="submit">
                        {{ $btnText }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</li>
