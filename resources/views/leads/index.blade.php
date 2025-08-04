<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


    <div class="py-12" bis_skin_checked="1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" bis_skin_checked="1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6" bis_skin_checked="1">
                <a href="./leads/create"
                    class="mb-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Create
                    New Leads</a>
                <a href="./leads/create"
                    class="mb-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Emport
                    Leads</a>
                <table class="w-full bg-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-start">ID</th>
                            <th class="px-4 py-2 text-start">Client Name</th>
                            <th class="px-4 py-2 text-start">Email</th>
                            <th class="px-4 py-2 text-start">Phone</th>
                            <th class="px-4 py-2 text-start">Source</th>
                            <th class="px-4 py-2 text-start">Status</th>
                            <th class="px-4 py-2 text-start">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Mark</td>
                            <td class="px-4 py-2">info@pinebookpublishing.com</td>
                            <td class="px-4 py-2">123-456-789</td>
                            <td class="px-4 py-2">Social Media</td>
                            <td class="px-4 py-2" ><span style="font-weight: 600; color: #42a742; padding: 3px; border-radius: 3px;">Active</span></td>
                            <td class="px-4 py-2 flex items-center gap-2">
                                <a href="https://pineclients.com/crm/users/1/edit" class="text-white bg-gray-800 p-2 px-4 rounded hover:underline">Edit</a>

                                <form action="https://pineclients.com/crm/users/1" method="POST" class="flex items-center gap-8">
                                    <input type="hidden" name="_token" value="sjiV8DLx31R0Vk7j3JsbpR7RbrClhoOQCI8kodzv" autocomplete="off"> 
                                        <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="text-white bg-red-500 p-2 rounded hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                         <tr class="border-t">
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">Mark</td>
                            <td class="px-4 py-2">info@pinebookpublishing.com</td>
                            <td class="px-4 py-2">123-456-789</td>
                            <td class="px-4 py-2">Social Media</td>
                            <td class="px-4 py-2" ><span style="font-weight: 600; color: red; padding: 3px; border-radius: 3px;">No-Active</span></td>
                            <td class="px-4 py-2 flex items-center gap-2">
                                <a href="https://pineclients.com/crm/users/1/edit" class="text-white bg-gray-800 p-2 px-4 rounded hover:underline">Edit</a>

                                <form action="https://pineclients.com/crm/users/1" method="POST" class="flex items-center gap-8">
                                    <input type="hidden" name="_token" value="sjiV8DLx31R0Vk7j3JsbpR7RbrClhoOQCI8kodzv" autocomplete="off"> 
                                        <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="text-white bg-red-500 p-2 rounded hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                         <tr class="border-t">
                            <td class="px-4 py-2">3</td>
                            <td class="px-4 py-2">Mark</td>
                            <td class="px-4 py-2">info@pinebookpublishing.com</td>
                            <td class="px-4 py-2">123-456-789</td>
                            <td class="px-4 py-2">Social Media</td>
                            <td class="px-4 py-2" ><span style="font-weight: 600; color: red; padding: 3px; border-radius: 3px;">No-Active</span></td>
                            <td class="px-4 py-2 flex items-center gap-2">
                                <a href="https://pineclients.com/crm/users/1/edit" class="text-white bg-gray-800 p-2 px-4 rounded hover:underline">Edit</a>

                                <form action="https://pineclients.com/crm/users/1" method="POST" class="flex items-center gap-8">
                                    <input type="hidden" name="_token" value="sjiV8DLx31R0Vk7j3JsbpR7RbrClhoOQCI8kodzv" autocomplete="off"> 
                                        <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="text-white bg-red-500 p-2 rounded hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                         <tr class="border-t">
                            <td class="px-4 py-2">4</td>
                            <td class="px-4 py-2">Mark</td>
                            <td class="px-4 py-2">info@pinebookpublishing.com</td>
                            <td class="px-4 py-2">123-456-789</td>
                            <td class="px-4 py-2">Social Media</td>
                            <td class="px-4 py-2" ><span style="font-weight: 600; color: #42a742; padding: 3px; border-radius: 3px;">Active</span></td>
                            <td class="px-4 py-2 flex items-center gap-2">
                                <a href="https://pineclients.com/crm/users/1/edit" class="text-white bg-gray-800 p-2 px-4 rounded hover:underline">Edit</a>

                                <form action="https://pineclients.com/crm/users/1" method="POST" class="flex items-center gap-8">
                                    <input type="hidden" name="_token" value="sjiV8DLx31R0Vk7j3JsbpR7RbrClhoOQCI8kodzv" autocomplete="off"> 
                                        <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="text-white bg-red-500 p-2 rounded hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>

                             <tr class="border-t">
                            <td class="px-4 py-2">5</td>
                            <td class="px-4 py-2">Mark</td>
                            <td class="px-4 py-2">info@pinebookpublishing.com</td>
                            <td class="px-4 py-2">123-456-789</td>
                            <td class="px-4 py-2">Social Media</td>
                            <td class="px-4 py-2" ><span style="font-weight: 600; color: #42a742; padding: 3px; border-radius: 3px;">Active</span></td>
                            <td class="px-4 py-2 flex items-center gap-2">
                                <a href="https://pineclients.com/crm/users/1/edit" class="text-white bg-gray-800 p-2 px-4 rounded hover:underline">Edit</a>

                                <form action="https://pineclients.com/crm/users/1" method="POST" class="flex items-center gap-8">
                                    <input type="hidden" name="_token" value="sjiV8DLx31R0Vk7j3JsbpR7RbrClhoOQCI8kodzv" autocomplete="off"> 
                                        <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="text-white bg-red-500 p-2 rounded hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>