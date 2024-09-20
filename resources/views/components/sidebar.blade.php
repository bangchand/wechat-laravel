<aside class="w-64 bg-gray-800 text-white min-h-screen p-4 flex flex-col">
    <h3 class="text-lg font-semibold mb-4">Contacts</h3>
    <ul class="space-y-2">
        <li>
            @forelse ($chats as $chat)
                <a href="{{ route('chat', ['uuid' => $chat->uuid]) }}" class="block p-2 rounded hover:bg-gray-700">
                    {{ $chat->name }}
                </a>
            @empty
                <p class="text-gray-400">No chats available.</p>
            @endforelse
        </li>
    </ul>

    <div class="mt-auto">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full mt-4 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded">
                Logout
            </button>
        </form>
    </div>
</aside>
