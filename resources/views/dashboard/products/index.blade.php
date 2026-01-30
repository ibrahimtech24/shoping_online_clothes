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
                    @if(app()->getLocale() == 'ku') نرخی ئەسڵی @elseif(app()->getLocale() == 'ar') السعر الأصلي @else Original Price @endif
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') داشکان @elseif(app()->getLocale() == 'ar') الخصم @else Discount @endif
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') نرخی کۆتایی @elseif(app()->getLocale() == 'ar') السعر النهائي @else Final Price @endif
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') کۆگا @elseif(app()->getLocale() == 'ar') المخزون @else Stock @endif
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    @if(app()->getLocale() == 'ku') بارودۆخ @elseif(app()->getLocale() == 'ar') الحالة @else Status @endif
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
                        <div class="font-semibold text-gray-900">{{ $product->name }}</div>
                        <div class="flex flex-wrap justify-center gap-1 mt-1">
                            @if($product->is_featured)
                                <span class="text-[10px] bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full font-medium">⭐ @if(app()->getLocale() == 'ku') تایبەت @else Featured @endif</span>
                            @endif
                            @if($product->is_new)
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-medium">🆕 @if(app()->getLocale() == 'ku') نوێ @else New @endif</span>
                            @endif
                            @if($product->is_trending)
                                <span class="text-[10px] bg-rose-100 text-rose-700 px-2 py-0.5 rounded-full font-medium">🔥 @if(app()->getLocale() == 'ku') ترێند @else Trending @endif</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="font-medium">{{ $product->category->name }}</div>
                        <div class="text-xs text-gray-400">{{ $product->subcategory->name }}</div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <div class="flex flex-col items-center">
                            <span class="{{ $product->hasDiscount() ? 'line-through text-gray-400 text-xs' : 'font-bold text-gray-900 text-base' }}">
                                ${{ number_format($product->price, 2) }}
                            </span>
                            @if($product->hasDiscount())
                                <span class="text-[10px] text-gray-400">
                                    @if(app()->getLocale() == 'ku') نرخی ئەسڵی @else Original @endif
                                </span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        @if($product->hasDiscount())
                            <div class="flex flex-col items-center gap-1">
                                <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full font-bold text-sm shadow-sm">
                                    -{{ $product->discount_percentage }}%
                                </span>
                                <span class="text-[10px] text-green-600 font-medium">
                                    @if(app()->getLocale() == 'ku') داشکان @else Discount @endif
                                </span>
                            </div>
                        @else
                            <span class="text-gray-300 text-lg">—</span>
                        @endif
                    </td>
                    <td class="p-3 text-sm text-center">
                        @if($product->hasDiscount())
                            <div class="flex flex-col items-center">
                                <span class="font-bold text-green-600 text-lg">
                                    ${{ number_format($product->final_price, 2) }}
                                </span>
                                <span class="text-[10px] text-green-500">
                                    @if(app()->getLocale() == 'ku') نرخی فرۆشتن @else Sale Price @endif
                                </span>
                            </div>
                        @else
                            <span class="font-bold text-gray-900 text-lg">${{ number_format($product->price, 2) }}</span>
                        @endif
                    </td>
                    <td class="p-3 text-sm text-center">
                        <div class="flex flex-col items-center">
                            <span class="font-bold text-lg {{ $product->isLowStock() ? 'text-orange-500' : ($product->isOutOfStock() ? 'text-red-500' : 'text-green-600') }}">
                                {{ $product->getTotalStock() }}
                            </span>
                            @if($product->isLowStock())
                                <span class="text-[10px] bg-orange-100 text-orange-600 px-2 py-0.5 rounded-full">⚠️ @if(app()->getLocale() == 'ku') کەم @else Low @endif</span>
                            @elseif($product->isOutOfStock())
                                <span class="text-[10px] bg-red-100 text-red-600 px-2 py-0.5 rounded-full">❌ @if(app()->getLocale() == 'ku') تەواو @else Out @endif</span>
                            @else
                                <span class="text-[10px] bg-green-100 text-green-600 px-2 py-0.5 rounded-full">✓ @if(app()->getLocale() == 'ku') بەردەست @else Available @endif</span>
                            @endif
                        </div>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <span class="text-xs text-gray-400">{{ $product->created_at->format('Y-m-d') }}</span>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="flex justify-center items-center gap-3">
                            <a href="{{ route('dashboard.products.edit', ['product' => $product]) }}" 
                               class="w-9 h-9 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-100 transition-colors">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('dashboard.products.delete', ['product' => $product]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="w-9 h-9 bg-red-50 text-red-600 rounded-lg flex items-center justify-center hover:bg-red-100 transition-colors">
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
