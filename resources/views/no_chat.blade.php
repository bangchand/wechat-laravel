<x-app-layout>

    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white min-h-screen p-4">
            <h3 class="text-lg font-semibold mb-4">Contacts</h3>
            <ul class="space-y-2">
                <li>
                    @forelse ($users as $user)
                        <a href="#" class="block p-2 rounded hover:bg-gray-700">
                            {{ $user->name }}
                        </a>
                    @empty
                    @endforelse
                </li>
            </ul>
        </aside>

        <div
            class="flex-1 flex flex-col border border-gray-300 dark:border-gray-700 rounded-lg shadow-md dark:bg-gray-800">
        </div>
    </div>
</x-app-layout>
