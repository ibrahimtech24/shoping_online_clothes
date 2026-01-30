<x-layouts.dashboard>
    <x-form.form heading="Add Product" action="{{ route('dashboard.products.store') }}" method="POST"
        enctype="multipart/form-data">
        <x-form.input name="name" />
        <x-form.textfield name="description" />
        <x-form.input name="image" type="file" />
        <x-form.field>
            <x-form.label name="category" />
            <select name="category" id="category"
                class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl">
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">
                        {{ $subcategory->category->name . '-' . $subcategory->name }}</option>
                @endforeach
            </select>
            <x-form.error name="category" />
        </x-form.field>

        <x-form.field>
            <x-form.label name="sizes" />
            <div class="flex justify-start items-center flex-wrap gap-4">
                @foreach ($sizes as $size)
                    <x-form.checkbox name="{{ $size->name }}" field="sizes[{{ $size->name }}]"
                        value="{{ $size->id }}" />
                @endforeach
            </div>
            <x-form.error name="sizes[]" />
        </x-form.field>

        <div class="bg-slate-300 p-2 rounded w-full">
            <x-form.label name="quantities" class="font-bold" />
            <div id="size-container">
                {{-- Input added dynamicly --}}
            </div>
            <x-form.error name='quantities' />
        </div>

        <x-form.input name="price" type="number" />

        {{-- Discount & Features Section --}}
        <div class="bg-blue-50 p-4 rounded-xl w-full border-2 border-blue-200">
            <h3 class="text-lg font-bold text-blue-900 mb-4">{{ __('Discount & Features') }}</h3>
            
            {{-- Discount Percentage --}}
            <x-form.field>
                <x-form.label name="discount_percentage" />
                <input type="number" name="discount_percentage" id="discount_percentage" step="0.01" min="0" max="100"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl"
                    placeholder="0.00" value="{{ old('discount_percentage') }}">
                <p class="text-xs text-gray-500 mt-1">{{ __('Enter discount percentage (0-100)') }}</p>
                <x-form.error name="discount_percentage" />
            </x-form.field>

            {{-- Stock Alert Threshold --}}
            <x-form.field>
                <x-form.label name="stock_alert" />
                <input type="number" name="stock_alert" id="stock_alert" min="0"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl"
                    placeholder="5" value="{{ old('stock_alert', 5) }}">
                <p class="text-xs text-gray-500 mt-1">{{ __('Low stock alert when quantity reaches this number') }}</p>
                <x-form.error name="stock_alert" />
            </x-form.field>

            {{-- Feature Toggles --}}
            <div class="flex justify-start items-center flex-wrap gap-6 mt-4">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="is_featured" id="is_featured" value="1" 
                        class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                        {{ old('is_featured') ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-700">⭐ {{ __('Featured Product') }}</span>
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="is_new" id="is_new" value="1" 
                        class="w-5 h-5 rounded border-gray-300 text-green-600 focus:ring-green-500"
                        {{ old('is_new') ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-700">🆕 {{ __('New Arrival') }}</span>
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="is_trending" id="is_trending" value="1" 
                        class="w-5 h-5 rounded border-gray-300 text-rose-600 focus:ring-rose-500"
                        {{ old('is_trending') ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-700">🔥 {{ __('Trending') }}</span>
                </label>
            </div>
        </div>


        <x-form.button class="self-center mt-2">Add Product</x-form.button>
    </x-form.form>
    <script>
        function validateInput(input) {
            const minValue = 1;

            // Check if the input value is not a number or is less than the minimum value
            if (isNaN(input.value) || input.value < minValue) {
                // Set the input value to the minimum value
                input.value = minValue;
            }
        }

        function addSizeEntry(name) {
            // Check if an input with the specified name already exists
            const existingDiv = document.getElementById(`number${name}`);

            console.log(existingDiv);

            // If it exists, remove it
            if (existingDiv) {
                existingDiv.parentNode.removeChild(existingDiv);

                return;
            }

            // Add the new input
            const sizeContainer = document.querySelector("#size-container");
            const sizeEntryHTML = `
    <x-form.special-input name="${name}" field="quantities" />
`;

            sizeContainer.innerHTML += sizeEntryHTML;
        }
    </script>
</x-layouts.dashboard>
