<x-layouts.dashboard>
    @if (count($sizes) || $productsize)
        <x-form.form heading="Update Product Size & Color"
            action="{{ route('dashboard.productsizes.update', ['productsize' => $productsize]) }}" method="POST"
            type="PATCH">

            <x-form.field>
                <x-form.label name="size" />
                <select name="size" id="size"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl">
                    {{-- Current size --}}
                    <option value="{{ $productsize->size_id }}" selected>
                        {{ $productsize->size->name }} (Current)
                    </option>
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
                        <input type="radio" name="color_selection" value="" class="hidden peer" {{ !$productsize->color ? 'checked' : '' }}>
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 flex items-center justify-center bg-white hover:border-gray-400 transition-all">
                            <span class="text-gray-400 text-xs">None</span>
                        </div>
                    </label>
                    @foreach ($colors as $color)
                        <label class="cursor-pointer" title="{{ $color['name'] }}">
                            <input type="radio" name="color_selection" value="{{ $color['name'] }}|{{ $color['code'] }}" class="hidden peer" 
                                   {{ $productsize->color_code == $color['code'] ? 'checked' : '' }}>
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 hover:scale-110 transition-all shadow-sm" 
                                 style="background-color: {{ $color['code'] }};">
                            </div>
                            <p class="text-xs text-center mt-1 text-gray-600 truncate">{{ $color['name'] }}</p>
                        </label>
                    @endforeach
                </div>
                @if($productsize->color)
                    <p class="text-sm text-gray-500 mt-2">
                        Current color: <span class="inline-flex items-center gap-1">
                            <span class="w-4 h-4 rounded-full inline-block border" style="background-color: {{ $productsize->color_code }};"></span>
                            {{ $productsize->color }}
                        </span>
                    </p>
                @endif
                <x-form.error name="color" />
            </x-form.field>

            {{-- Hidden fields for color --}}
            <input type="hidden" name="color" id="color_name" value="{{ $productsize->color }}">
            <input type="hidden" name="color_code" id="color_code" value="{{ $productsize->color_code }}">

            <x-form.input name="quantity" type="number" :value="$productsize->quantity" />

            <x-form.button class="self-center mt-2">Update Product Size</x-form.button>
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
        <p class="text-center">You can't update this size because you have all sizes for
            ({{ $productsize->product->name }}) product!
        </p>
    @endif
</x-layouts.dashboard>
