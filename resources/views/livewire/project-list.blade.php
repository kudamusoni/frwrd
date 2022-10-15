<div>
    {{-- Stop trying to control. --}}
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Created at
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Last Modified
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($projects as $project)
                                <tr class="whitespace-nowrap hover:bg-gray-100" onclick="window.location.href='{{ route('project-tasks', ['project' => $project->id]) }}'"">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $project->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($project->created_at)->diffForHumans(now()) }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($project->updated_at)->diffForHumans(now()) }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <form wire:submit.prevent="delete" method="POST">
                                            <button class="bg-red-500 border text-white text-md p-2.5 shadow-sm sm:rounded-lg">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
