{{-- Be like water. --}}
<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form wire:submit.prevent="submit" method="POST">
                <div class="">
                    <label for="task" class="col-sm-3 control-label">Task</label>

                    <div class="">
                        <input type="text" name="name" wire:model="name" class="my-4 sm:rounded-lg bg-gray-50 border border-gray-300 text-gray-500 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="">
                    <div class="">
                        <button class="bg-black border text-white text-md p-2.5 shadow-sm sm:rounded-lg" type="submit">
                            <i class="fa fa-plus"></i> Add Task
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
