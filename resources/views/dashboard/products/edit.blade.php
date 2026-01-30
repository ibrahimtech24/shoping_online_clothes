<x-layouts.dashboard>
    <x-form.form heading="Update Product" action="{{ route('dashboard.products.update', ['product' => $product]) }}"
        method="POST" type="PATCH" enctype="multipart/form-data">
        <x-form.input name="name" :value="$product->name" />
        <x-form.textfield name="description" :value="$product->description" />
        <div class="flex justify-between items-center space-x-2">
            <x-form.input name="image" type="file" />
            <div class="w-64">
                <img src="{{ asset('storage/' . $product->image) }}" alt="img" class="object-cover rounded">
            </div>
        </div>
        <x-form.field>
            <x-form.label name="category" />
            <select name="category" id="category"
                class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl">
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" @if ($subcategory->id === $product->subcategory_id) selected @endif>
                        {{ $subcategory->category->name . '-' . $subcategory->name }}</option>
                @endforeach
            </select>
            <x-form.error name="category" />
        </x-form.field>

        <x-form.input name="price" type="number" :value="$product->price" />

        {{-- Discount & Features Section --}}
        <div class="bg-blue-50 p-4 rounded-xl w-full border-2 border-blue-200">
            <h3 class="text-lg font-bold text-blue-900 mb-4">
                @if(app()->getLocale() == 'ku') داشکان و تایبەتمەندیەکان @elseif(app()->getLocale() == 'ar') الخصم والميزات @else Discount & Features @endif
            </h3>
            
            {{-- Discount Percentage --}}
            <x-form.field>
                <label for="discount_percentage" class="font-semibold text-gray-700">
                    @if(app()->getLocale() == 'ku') ڕێژەی داشکان (%) @elseif(app()->getLocale() == 'ar') نسبة الخصم (%) @else Discount Percentage (%) @endif
                </label>
                <input type="number" name="discount_percentage" id="discount_percentage" step="0.01" min="0" max="100"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl"
                    placeholder="0.00" value="{{ old('discount_percentage', $product->discount_percentage) }}">
                <p class="text-xs text-gray-500 mt-1">
                    @if(app()->getLocale() == 'ku') ڕێژەی داشکان دابنێ (٠-١٠٠) @else Enter discount percentage (0-100) @endif
                </p>
                <x-form.error name="discount_percentage" />
            </x-form.field>

            {{-- Discount End Date/Time --}}
            <x-form.field>
                <label for="discount_ends_at" class="font-semibold text-gray-700">
                    @if(app()->getLocale() == 'ku') کاتی کۆتایی داشکان @elseif(app()->getLocale() == 'ar') تاريخ انتهاء الخصم @else Discount End Date @endif
                </label>
                <input type="datetime-local" name="discount_ends_at" id="discount_ends_at"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl"
                    value="{{ old('discount_ends_at', $product->discount_ends_at ? $product->discount_ends_at->format('Y-m-d\TH:i') : '') }}">
                <p class="text-xs text-gray-500 mt-1">
                    @if(app()->getLocale() == 'ku') کاتی کۆتایی داشکان هەڵبژێرە (بەتاڵ بێ = داشکان هەمیشەیی) @else Select when discount ends (empty = permanent discount) @endif
                </p>
                <x-form.error name="discount_ends_at" />
            </x-form.field>

            {{-- Stock Alert Threshold --}}
            <x-form.field>
                <label for="stock_alert" class="font-semibold text-gray-700">
                    @if(app()->getLocale() == 'ku') ئاگاداری کۆگا @elseif(app()->getLocale() == 'ar') تنبيه المخزون @else Stock Alert @endif
                </label>
                <input type="number" name="stock_alert" id="stock_alert" min="0"
                    class="px-4 py-2 outline-none text-sm border border-gray-400 w-full rounded-xl"
                    placeholder="5" value="{{ old('stock_alert', $product->stock_alert) }}">
                <p class="text-xs text-gray-500 mt-1">
                    @if(app()->getLocale() == 'ku') ئاگاداری کەم بوونی کۆگا کاتێک ژمارەکە دەگاتە ئەم ڕێژەیە @else Low stock alert when quantity reaches this number @endif
                </p>
                <x-form.error name="stock_alert" />
            </x-form.field>

            {{-- Feature Toggles --}}
            <div class="flex justify-start items-center flex-wrap gap-6 mt-4">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="is_featured" id="is_featured" value="1" 
                        class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                        {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-700">⭐ @if(app()->getLocale() == 'ku') تایبەت @else Featured @endif</span>
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="is_new" id="is_new" value="1" 
                        class="w-5 h-5 rounded border-gray-300 text-green-600 focus:ring-green-500"
                        {{ old('is_new', $product->is_new) ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-700">🆕 @if(app()->getLocale() == 'ku') نوێ @else New @endif</span>
                </label>

                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="is_trending" id="is_trending" value="1" 
                        class="w-5 h-5 rounded border-gray-300 text-rose-600 focus:ring-rose-500"
                        {{ old('is_trending', $product->is_trending) ? 'checked' : '' }}>
                    <span class="text-sm font-semibold text-gray-700">🔥 @if(app()->getLocale() == 'ku') ترێند @else Trending @endif</span>
        </div>

        <x-form.button class="self-center mt-2">Update Product</x-form.button>
    </x-form.form>

    <hr class="my-4">

    <x-structure heading="productsize" model="productsizes" :param="['product' => $product]">
        <thead class="bg-gradient-to-r from-purple-600 to-purple-700 text-white">
            <tr>
                <th class="w-40 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') ناوی بەرهەم @elseif(app()->getLocale() == 'ar') اسم المنتج @else Product Name @endif
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') قەبارە @elseif(app()->getLocale() == 'ar') المقاس @else Size @endif
                </th>
                <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') رەنگ @elseif(app()->getLocale() == 'ar') اللون @else Color @endif
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') بڕ @elseif(app()->getLocale() == 'ar') الكمية @else Qty @endif
                </th>
                <th class="p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') بەروار @elseif(app()->getLocale() == 'ar') التاريخ @else Date @endif
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') کردار @elseif(app()->getLocale() == 'ar') الإجراءات @else Action @endif
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($productsizes as $productsize)
                <tr class="bg-white hover:bg-gray-50 transition-colors">
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <span class="font-medium">{{ Str::limit($productsize->product->name, 20) }}</span>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <span class="inline-flex items-center justify-center px-3 py-1.5 bg-blue-100 text-blue-700 rounded-lg font-bold">
                            {{ $productsize->size->name }}
                        </span>
                    </td>
                    <td class="p-3 text-sm text-center">
                        @if($productsize->color)
                            <div class="flex items-center justify-center gap-2">
                                <span class="w-6 h-6 rounded-full border-2 border-gray-300 shadow-sm" 
                                      style="background-color: {{ $productsize->color_code }};"
                                      title="{{ $productsize->color }}"></span>
                                <span class="text-gray-600 text-xs">{{ $productsize->color }}</span>
                            </div>
                        @else
                            <span class="text-gray-400 text-xs">—</span>
                        @endif
                    </td>
                    <td class="p-3 text-sm text-center">
                        <span class="inline-flex items-center justify-center px-3 py-1.5 rounded-lg font-bold
                            {{ $productsize->quantity == 0 ? 'bg-red-100 text-red-700' : ($productsize->quantity <= 5 ? 'bg-orange-100 text-orange-700' : 'bg-green-100 text-green-700') }}">
                            {{ $productsize->quantity }}
                        </span>
                    </td>
                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap text-center">
                        {{ $productsize->updated_at->format('Y-m-d') }}
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="flex justify-center items-center gap-2">
                            <a href="{{ route('dashboard.productsizes.edit', ['productsize' => $productsize]) }}" 
                               class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-100 transition-colors">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('dashboard.productsizes.delete', ['productsize' => $productsize]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="w-8 h-8 bg-red-50 text-red-600 rounded-lg flex items-center justify-center hover:bg-red-100 transition-colors">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-structure>
</x-layouts.dashboard>
