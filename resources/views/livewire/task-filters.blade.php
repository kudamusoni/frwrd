<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="flex justify-between">
        <div class="flex mt-4 items-center">
            <label>Show Completed Tasks?</label>
            <input class="ml-2" type="checkbox" name="taskVisibility" id="" wire:click="toggleVisibility" wire:model="showCompleted">
        </div>

        <div class="flex flex-col">
            <label class="self-center">Order By</label>
            <select wire:model='orderBy' class="mb-2 mt-1 sm:rounded-lg bg-gray-50 border border-gray-300 text-gray-800 text-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="none">{{ __('None') }}</option>
                <option value="priority-desc" selected>Priority (High to Low)</option>
                <option value="priority-asc">Priority (Low to High)</option>
            </select>
        </div>
    </div>
</div>
