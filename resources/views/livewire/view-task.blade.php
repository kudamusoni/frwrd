<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <livewire:back-button href='dashboard' title='Back to task'>

    <form wire:submit.prevent="save" method="POST">
        <label for="task" class="col-sm-3 control-label underline font-bold">Task name</label>
        <input type="text" wire:model="name" class="mb-3 mt-1 sm:rounded-lg bg-gray-50 border border-gray-300 text-gray-800 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" maxlength="255">

        <label for="task" class="col-sm-3 control-label underline font-bold">Task description</label>
        <textarea wire:model="description" id="" cols="30" rows="10" class="mb-3 mt-1 sm:rounded-lg bg-gray-50 border border-gray-300 text-gray-800 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" maxlength="2055"></textarea>

        <div class="mb-4">
            <label for="task" class="col-sm-3 control-label underline font-bold">Priority</label>
            <select wire:model="priority" class="mb-2 mt-1 sm:rounded-lg bg-gray-50 border border-gray-300 text-gray-800 text-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="null" disabled>{{ __('Please select') }}</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>

        <button class="bg-black border text-white text-md p-2.5 shadow-sm sm:rounded-lg" type="submit">
            <svg wire:loading wire:target="save" class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Save Task
        </button>
    </form>
</div>
