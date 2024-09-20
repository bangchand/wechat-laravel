<x-app-layout>

    <div class="flex h-screen">
        <x-sidebar />

        <div
            class="flex-1 flex flex-col border border-gray-300 dark:border-gray-700 rounded-lg shadow-md dark:bg-gray-800">
            <div class="bg-gray-800 text-white p-4 rounded-t-lg flex items-center dark:bg-gray-900">
                <h3 class="text-lg font-semibold">Chat with John Doe</h3>
            </div>

            <div class="flex-1 p-4 overflow-y-auto bg-white dark:bg-gray-900">
                <div class="space-y-4">
                    <div class="flex justify-end">
                        <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs">
                            <p>Hello! How are you?</p>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div
                            class="bg-gray-200 text-gray-800 p-3 rounded-lg max-w-xs dark:bg-gray-700 dark:text-gray-200">
                            <p>I'm good, thanks! How about you?</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-gray-200 p-4 rounded-b-lg dark:bg-gray-700">
                <form action="#" method="POST" class="flex items-center">
                    <input type="text" name="message" placeholder="Type a message..."
                        class="w-full p-2 border border-gray-300 rounded-l-lg dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit"
                        class="bg-blue-500 text-white p-2 rounded-r-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
