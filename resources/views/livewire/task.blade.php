{{-- Nothing in the world is as soft and yielding as water. --}}
<div>
    @if ($show)
    <li class="list-none mt-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 flex justify-between items-center {{ $task->completed === 'true' ? 'line-through' : '' }}">
                <div class="text-xl">
                    {{ $task['name'] }}
                </div>
                <div class="flex">
                    <form wire:submit.prevent="delete" method="POST">
                        <button class="bg-red-500 border text-white text-md p-2.5 shadow-sm sm:rounded-lg">
                            Delete
                        </button>
                    </form>
                    {{-- <form method="POST" action="/task/{{ $task->id }}"> --}}
                    <form wire:submit.prevent="complete" method="POST">
                        <button class="{{ $task->completed === 'true' ? 'bg-gray-400' : 'bg-black' }} border text-white text-md p-2.5 shadow-sm sm:rounded-lg" {{ $task->completed === 'true' ? 'disabled="true"' : '' }} type="submit">
                            {{ $button }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </li>
    @endif
</div>
