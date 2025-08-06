<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="flex justify-between items-center mb-4">
                    <div>
                        <a href="{{ route('leads.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Create New Lead
                        </a>
                    </div>
                    <div>
                        <button onclick="document.getElementById('importModal').classList.remove('hidden')" class="inline-flex items-center px-4 py-2 bg-gray-800 text-white rounded hover:bg-green-700 text-xs font-semibold">
                            Import Leads
                        </button>
                    </div>
                </div>

                {{-- Leads Table --}}
                <table class="w-full bg-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-start">ID</th>
                            <th class="px-4 py-2 text-start">Name</th>
                            <th class="px-4 py-2 text-start">Email</th>
                            <th class="px-4 py-2 text-start">Phone</th>
                            <th class="px-4 py-2 text-start">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leads as $lead)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $lead->id }}</td>
                            <td class="px-4 py-2">{{ $lead->name }}</td>
                            <td class="px-4 py-2">{{ $lead->email }}</td>
                            <td class="px-4 py-2">{{ $lead->phone }}</td>
                            <td class="px-4 py-2 flex items-center gap-2">
                                <a href="{{ route('leads.edit', $lead->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Import Modal --}}
                <div id="importModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
                    <div class="bg-white p-6 rounded-lg w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <h3 class="text-lg font-bold mb-4">Import Leads</h3>
                        <form action="{{ route('leads.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block mb-1 font-medium">Choose File (CSV or Excel)</label>
                                <input type="file" name="file" accept=".csv,.xlsx,.xls" class="block w-full border border-gray-300 rounded p-2" required>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="document.getElementById('importModal').classList.add('hidden')" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded">Cancel</button>
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Import</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
