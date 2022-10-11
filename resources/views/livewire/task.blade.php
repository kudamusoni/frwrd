{{-- Nothing in the world is as soft and yielding as water. --}}
<div>
    @if ($show)
    <li class="list-none mt-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 flex justify-between items-center {{ $task->completed === 'true' ? 'line-through' : '' }}">
                <div class="flex">
                    @if ($task->priority === 'Low')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                        </svg>
                    @elseif ($task->priority === 'Medium')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>
                    @elseif ($task->priority === 'High')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
                        </svg>
                    @endif
                    <a href="{{ route('view-task', ['id' => $task->id]) }}">
                        <div class="text-xl ml-4">
                            {{ $task->name }}
                        </div>
                    </a>
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
