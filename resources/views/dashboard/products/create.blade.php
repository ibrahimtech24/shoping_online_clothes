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
            <p class="text-xs text-gray-500 mb-2">
                @if(app()->getLocale() == 'ku') سایزەکان هەڵبژێرە @else Select sizes @endif
            </p>
            <div class="flex justify-start items-center flex-wrap gap-4">
                @foreach ($sizes as $size)
                    <x-form.checkbox name="{{ $size->name }}" field="sizes[{{ $size->name }}]"
                        value="{{ $size->id }}" />
                @endforeach
            </div>
            <x-form.error name="sizes[]" />
        </x-form.field>

        {{-- Quantities Section --}}
        <div class="bg-slate-200 p-4 rounded-xl w-full">
            <label class="font-bold text-lg text-gray-800">
                @if(app()->getLocale() == 'ku') ژمارەی هەر سایز @elseif(app()->getLocale() == 'ar') كمية كل مقاس @else Quantity per Size @endif
            </label>
            <div id="size-container" class="space-y-2 mt-3">
                {{-- Input added dynamically --}}
            </div>
            <x-form.error name='quantities' />
        </div>

        {{-- Colors Section - Separate --}}
        <div class="bg-purple-50 p-4 rounded-xl w-full border-2 border-purple-200">
            <label class="font-bold text-lg text-purple-800 flex items-center gap-2">
                <i class="fa-solid fa-palette"></i>
                @if(app()->getLocale() == 'ku') رەنگەکان @elseif(app()->getLocale() == 'ar') الألوان @else Colors @endif
            </label>
            <p class="text-sm text-purple-600 mb-3">
                @if(app()->getLocale() == 'ku') رەنگ هەڵبژێرە @else Select Color @endif
            </p>
            <div class="grid grid-cols-4 sm:grid-cols-7 gap-3">
                @foreach ($colors as $index => $color)
                    <label class="cursor-pointer group" title="{{ $color['name'] }}">
                        <input type="checkbox" name="product_colors[]" value="{{ $color['name'] }}|{{ $color['code'] }}" class="hidden peer">
                        <div class="w-12 h-12 rounded-xl border-3 border-gray-300 peer-checked:ring-4 peer-checked:ring-purple-500 peer-checked:ring-offset-2 peer-checked:border-purple-500 hover:scale-110 transition-all shadow-md flex items-center justify-center group-hover:shadow-lg" 
                             style="background-color: {{ $color['code'] }}; {{ $color['code'] == '#FFFFFF' ? 'border: 2px solid #ddd;' : '' }}">
                            <i class="fa-solid fa-check text-white opacity-0 peer-checked:opacity-100 drop-shadow-lg" style="{{ $color['code'] == '#FFFFFF' || $color['code'] == '#EAB308' ? 'color: #333;' : '' }}"></i>
                        </div>
                        <p class="text-xs text-center mt-1 text-gray-600 font-medium">{{ $color['name'] }}</p>
                    </label>
                @endforeach
            </div>
            <x-form.error name="product_colors" />
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
            const minValue = 0;
            if (isNaN(input.value) || input.value < minValue) {
                input.value = minValue;
            }
        }

        function addSizeEntry(name) {
            const existingDiv = document.getElementById(`size-entry-${name}`);

            if (existingDiv) {
                existingDiv.parentNode.removeChild(existingDiv);
                return;
            }

            const sizeContainer = document.querySelector("#size-container");
            const sizeEntryHTML = `
                <div id="size-entry-${name}" class="flex items-center gap-3 p-3 bg-white rounded-lg border border-gray-200 shadow-sm">
                    <span class="font-bold text-gray-700 bg-blue-100 px-4 py-2 rounded-lg min-w-[60px] text-center">${name}</span>
                    <label class="text-sm text-gray-600">@if(app()->getLocale() == 'ku') ژمارە: @else Qty: @endif</label>
                    <input type="number" 
                           name="quantities[${name}]" 
                           value="0" 
                           min="0" 
                           onchange="validateInput(this)"
                           class="w-24 px-3 py-2 border border-gray-300 rounded-lg text-center focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
                </div>
            `;

            sizeContainer.innerHTML += sizeEntryHTML;
        }

        // Make checkmarks visible when color is selected
        document.querySelectorAll('input[name="product_colors[]"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkIcon = this.nextElementSibling.querySelector('i');
                if (this.checked) {
                    checkIcon.classList.remove('opacity-0');
                    checkIcon.classList.add('opacity-100');
                } else {
                    checkIcon.classList.add('opacity-0');
                    checkIcon.classList.remove('opacity-100');
                }
            });
        });
    </script>
</x-layouts.dashboard>
