<div>
    {{-- Do your work, then step back. --}}
    <form wire:submit.prevent="submit" method="POST">
        <div class="flex w-full items-center justify-center">
            <div class="">
                {{-- <label for="task" class="col-sm-3 control-label">Create Project</label> --}}

                <div class="">
                    <input type="text" name="name" wire:model="name" class="my-4 sm:rounded-lg bg-gray-50 border border-gray-300 text-gray-800 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Create projects here..." maxlength="255">
                </div>
            </div>
            <!-- Add Project Button -->
            <div>

                <button class="bg-black border text-white text-md p-2.5 shadow-sm sm:rounded-lg" type="submit">
                    <svg wire:loading wire:target="submit" class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Add Task
                </button>
            </div>
        </div>
    </form>
</div>
