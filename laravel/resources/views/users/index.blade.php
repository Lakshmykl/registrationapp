<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex justify-between mb-4">
            <h1 class="text-xl font-bold">Manage User</h1>
            <a href="{{ route('users.create') }}" class="px-4 py-2 bg-blue-500 text-black rounded">Add User</a>
        </div>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full bg-white shadow-md rounded border border-gray-300">
    <thead>
        <tr class="bg-gray-200 border-b border-gray-300">
            <th class="px-4 py-2 border-r border-gray-300 text-left">ID</th>
            <th class="px-4 py-2 border-r border-gray-300 text-left">Name</th>
            <th class="px-4 py-2 border-r border-gray-300 text-left">Email</th>
            <th class="px-4 py-2 border-r border-gray-300 text-left">Phone</th>
            <th class="px-4 py-2 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="border-t border-gray-300">
                <td class="px-4 py-2 border-r border-gray-300">{{ $user->id }}</td>
                <td class="px-4 py-2 border-r border-gray-300">{{ $user->name }}</td>
                <td class="px-4 py-2 border-r border-gray-300">{{ $user->email }}</td>
                <td class="px-4 py-2 border-r border-gray-300">{{ $user->phone }}</td>
                <td class="px-4 py-2 border-r border-gray-300">
                <a href="{{ route('users.edit', $user) }}" 
                           class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600">
                            ✏️ Edit
                </a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" 
                          onsubmit="return confirm('Delete this user?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600">
                            🗑️ Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
