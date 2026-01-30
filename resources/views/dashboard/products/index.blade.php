<x-layouts.dashboard>
    <x-structure heading="product" model="products">
        <thead class="bg-gradient-to-r from-primary-600 to-primary-700 text-white">
            <tr>
                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') وێنە @elseif(app()->getLocale() == 'ar') صورة @else Image @endif
                </th>
                <th class="w-40 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') ناو @elseif(app()->getLocale() == 'ar') الاسم @else Name @endif
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') پۆل @elseif(app()->getLocale() == 'ar') القسم @else Category @endif
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') نرخ @elseif(app()->getLocale() == 'ar') السعر @else Price @endif
                </th>
                <th class="w-28 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') سایز/رەنگ @elseif(app()->getLocale() == 'ar') مقاس/لون @else Size/Color @endif
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') کۆگا @elseif(app()->getLocale() == 'ar') المخزون @else Stock @endif
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') کردار @elseif(app()->getLocale() == 'ar') الإجراءات @else Action @endif
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($products as $product)
                <tr class="bg-white hover:bg-gray-50 transition-colors {{ $product->isOutOfStock() ? 'opacity-60' : '' }}">
                    <td class="p-3 text-center">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" 
                             class="w-16 h-16 object-cover rounded-xl mx-auto shadow-sm border border-gray-100">
                    </td>
                    <td class="p-3 text-sm text-gray-700 text-center">
                        <div class="font-semibold text-gray-900">{{ Str::limit($product->name, 25) }}</div>
                        <div class="flex flex-wrap justify-center gap-1 mt-1">
                            @if($product->is_featured)
                                <span class="text-[10px] bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full font-medium">⭐</span>
                            @endif
                            @if($product->is_new)
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-medium">🆕</span>
                            @endif
                            @if($product->is_trending)
                                <span class="text-[10px] bg-rose-100 text-rose-700 px-2 py-0.5 rounded-full font-medium">🔥</span>
                            @endif
                            @if($product->hasDiscount())
                                <span class="text-[10px] bg-pink-100 text-pink-700 px-2 py-0.5 rounded-full font-medium">-{{ $product->discount_percentage }}%</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="font-medium">{{ $product->category->name }}</div>
                        <div class="text-xs text-gray-400">{{ $product->subcategory->name }}</div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <div class="flex flex-col items-center">
                            @if($product->hasDiscount())
                                <span class="font-bold text-green-600">${{ number_format($product->final_price, 2) }}</span>
                                <span class="line-through text-gray-400 text-xs">${{ number_format($product->price, 2) }}</span>
                            @else
                                <span class="font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        {{-- Show sizes and colors --}}
                        <div class="flex flex-wrap justify-center gap-1">
                            @php
                                $productSizes = $product->productsizes->take(4);
                                $remainingCount = $product->productsizes->count() - 4;
                            @endphp
                            @foreach($productSizes as $ps)
                                <div class="inline-flex items-center gap-1 px-2 py-1 bg-gray-100 rounded-lg text-xs" 
                                     title="{{ $ps->size->name }} {{ $ps->color ? '- ' . $ps->color : '' }} ({{ $ps->quantity }})">
                                    @if($ps->color_code)
                                        <span class="w-3 h-3 rounded-full border border-gray-300" style="background-color: {{ $ps->color_code }};"></span>
                                    @endif
                                    <span class="font-medium">{{ $ps->size->name }}</span>
                                </div>
                            @endforeach
                            @if($remainingCount > 0)
                                <span class="text-xs text-gray-400">+{{ $remainingCount }}</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <div class="flex flex-col items-center">
                            <span class="font-bold text-lg {{ $product->isLowStock() ? 'text-orange-500' : ($product->isOutOfStock() ? 'text-red-500' : 'text-green-600') }}">
                                {{ $product->getTotalStock() }}
                            </span>
                            @if($product->isLowStock())
                                <span class="text-[10px] bg-orange-100 text-orange-600 px-2 py-0.5 rounded-full">⚠️</span>
                            @elseif($product->isOutOfStock())
                                <span class="text-[10px] bg-red-100 text-red-600 px-2 py-0.5 rounded-full">❌</span>
                            @else
                                <span class="text-[10px] bg-green-100 text-green-600 px-2 py-0.5 rounded-full">✓</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="flex justify-center items-center gap-2">
                            <a href="{{ route('dashboard.products.edit', ['product' => $product]) }}" 
                               class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-100 transition-colors"
                               title="@if(app()->getLocale() == 'ku') دەستکاری @else Edit @endif">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
  
                            <form action="{{ route('dashboard.products.delete', ['product' => $product]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="w-8 h-8 bg-red-50 text-red-600 rounded-lg flex items-center justify-center hover:bg-red-100 transition-colors"
                                        title="@if(app()->getLocale() == 'ku') سڕینەوە @else Delete @endif">
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
