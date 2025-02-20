<div class="p-6 rounded-md shadow-md bg-blue-50 dark:bg-white/10">
    <h2 class="mb-4 text-lg font-bold uppercase dark:text-gray-300">Address</h2>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="building_name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Building
                Name</label>

            <x-input name="building_name" value="{{ old('building_name') }}" placeholder="Enter building name"
                required="true" />
        </div>
        <div>
            <label for="building_no"
                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Building#</label>

            <x-input name="building_no" value="{{ old('building_no') }}" placeholder="Enter building no"
                required="true" />

        </div>
        <div>
            <label for="floor" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Floor</label>

            <x-input name="floor" value="{{ old('floor') }}" placeholder="Enter floor no" required="true" />

        </div>
        <div>
            <label for="flat" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Flat</label>


            <x-input name="flat" value="{{ old('flat') }}" placeholder="Enter flat no" required="true" />

        </div>
        <div>
            <label for="office_no"
                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Office#</label>

            <x-input name="landmark" value="{{ old('landmark') }}" placeholder="Enter land mark no" required="true" />

        </div>
        <div>
            <label for="plot" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Plot#</label>
            <x-input name="plot" value="{{ old('plot') }}" placeholder="Enter plot no" required="true" />
        </div>
        <div>
            <label for="warehouse"
                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Warehouse#</label>

            <x-input name="warehouse" value="{{ old('warehouse') }}" placeholder="Enter warehouse no"
                required="false" />

        </div>
        <div>
            <label for="landmark" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nearby Land
                Mark</label>

            <x-input name="landmark" value="{{ old('landmark') }}" placeholder="Enter landmark no" required="false" />

        </div>
        <div>
            <label for="area" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Area</label>
            <x-select name="area" id="area">
                <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">Select Area
                </option>
                <option class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">Area 1</option>
            </x-select>
        </div>
        <div>
            <label for="city" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">City</label>
            <x-select name="city" id="city" required="true">
                <option selected disabled class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">Select City
                </option>
                <option class="text-gray-700 bg-white dark:bg-zinc-800 dark:text-zinc-300">Dubai</option>
            </x-select>
        </div>
        <div>
            <label for="office_location_link"
                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Office Location
                Link</label>


            <x-input name="office_location_link" value="{{ old('office_location_link') }}"
                placeholder="Enter office location link no" />

        </div>
        <div>
            <label for="office_location_link"
                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Office / Building
                Picture</label>
            <x-input type="file" name="picture" value="{{ old('picture') }}"
                placeholder="Enter office location link no"/>
        </div>
    </div>
</div>
