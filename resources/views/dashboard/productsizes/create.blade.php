<x-layouts.dashboard>
    @if (count($sizes))
        <x-form.form heading="Add Product Size & Color" action="{{ route('dashboard.productsizes.store') }}" method="POST">
            <x-form.input name="product name" value="{{ $product->name }}" disable="true" />

            <x-form.field>
                <x-form.label name="size" />
                <select name="size" id="size"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl">
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="size" />
            </x-form.field>

            {{-- Color Selection --}}
            <x-form.field>
                <x-form.label name="color" />
                <div class="grid grid-cols-7 gap-2 p-3 border border-gray-300 rounded-xl bg-gray-50">
                    {{-- No Color Option --}}
                    <label class="cursor-pointer">
                        <input type="radio" name="color_selection" value="" class="hidden peer" checked>
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 flex items-center justify-center bg-white hover:border-gray-400 transition-all">
                            <span class="text-gray-400 text-xs">None</span>
                        </div>
                    </label>
                    @foreach ($colors as $color)
                        <label class="cursor-pointer" title="{{ $color['name'] }}">
                            <input type="radio" name="color_selection" value="{{ $color['name'] }}|{{ $color['code'] }}" class="hidden peer">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 hover:scale-110 transition-all shadow-sm" 
                                 style="background-color: {{ $color['code'] }};">
                            </div>
                            <p class="text-xs text-center mt-1 text-gray-600 truncate">{{ $color['name'] }}</p>
                        </label>
                    @endforeach
                </div>
                <x-form.error name="color" />
            </x-form.field>

            {{-- Hidden fields for color --}}
            <input type="hidden" name="color" id="color_name" value="">
            <input type="hidden" name="color_code" id="color_code" value="">

            <x-form.input name="quantity" type="number" value="0" />

            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <x-form.button class="self-center mt-2">Add Product Size</x-form.button>
        </x-form.form>

        <script>
            document.querySelectorAll('input[name="color_selection"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const value = this.value;
                    if (value) {
                        const [name, code] = value.split('|');
                        document.getElementById('color_name').value = name;
                        document.getElementById('color_code').value = code;
                    } else {
                        document.getElementById('color_name').value = '';
                        document.getElementById('color_code').value = '';
                    }
                });
            });
        </script>
    @else
        <p class="text-center">You can't add more size because you added all sizes for ({{ $product->name }}) product!
        </p>
    @endif
</x-layouts.dashboard>
