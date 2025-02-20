

<div class="max-w-5xl p-4 mx-auto mb-5 rounded-md shadow-md bg-blue-50 dark:bg-white/10">
    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
        <h2 class="mb-2 text-lg font-bold uppercase dark:text-gray-300">Contact Persons</h2>
        <div class="flex space-x-4">
            <x-button type="button" icon="heroicon-o-plus" id="add-row" text-color="text-gray-100" bg-color="bg-gray-800" hover-color="hover:bg-gray-500">
                Add New
            </x-button>
        </div>
    </div>
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full divide-y text-zinc-800 divide-zinc-800/10 dark:divide-white/20 whitespace-nowrap">
            <thead>
                <tr>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">Salutation</th>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">Name</th>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">Mobile Number</th>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">Landline</th>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">Email</th>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">Department</th>
                    <th class="px-2 py-2 text-sm font-medium text-left text-gray-700 dark:text-gray-300">
                        <x-heroicon-o-x-circle class="w-4 h-4 text-gray-500" />
                    </th>
                </tr>
            </thead>
            <tbody id="contact-persons-body">
                <!-- Existing Row -->
                <tr>
                    <td class="px-2 py-2">
                        <x-select name="salution[]" id="salution[]" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Salutation
                            </option>
                            <option value="Mr" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Mr.</option>
                            <option value="Ms" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Ms.</option>
                        </x-select>
                    </td>
                    <td class="px-2 py-2">
                            <x-input name="name[]" value="{{ old('name[]') }}"
                            placeholder="Enter name" />
                    </td>
                    <td class="px-2 py-2">
                            <x-input name="mobile[]" value="{{ old('mobile[]') }}"
                            placeholder="Enter mobile" />
                    </td>
                    <td class="px-2 py-2">
                            <x-input name="landline[]" value="{{ old('landline[]') }}"
                            placeholder="Enter landline" />
                    </td>
                    <td class="px-2 py-2">
                            <x-input name="email[]" value="{{ old('email[]') }}"
                            placeholder="Enter email" />
                    </td>
                    <td class="px-2 py-2">
                        <x-select name="department[]" id="department[]" required="true">
                            <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Select Department
                            </option>
                            <option value="GM" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                GM</option>
                            <option value="HR" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                HR</option>
                                <option value="Finance" class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">
                                Finance</option>
                        </x-select>
                    </td>
                    <td class="px-2 py-2">                       
                        <x-button type="button" icon="heroicon-o-trash" padding="p-2 remove-row" bg-color="bg-red-400" hover-color="hover:bg-red-500" dark-bg-color="dark:bg-red-500" dark-hover-color="dark:hover:bg-red-400">
                        </x-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>