{{-- Product Card Component --}}
@props(['product'])

<div class="group relative bg-white rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 overflow-hidden hover:shadow-2xl hover:shadow-primary-500/20 transition-all duration-500 hover:-translate-y-2">
    {{-- Product Badges --}}
    <div class="absolute top-4 left-4 z-20 flex flex-col gap-2">
        @if($product->is_new)
            <span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-pulse">
                {{ app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW') }}
            </span>
        @endif
        
        @if($product->is_featured)
            <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                {{ app()->getLocale() == 'ku' ? 'تایبەت' : (app()->getLocale() == 'ar' ? 'مميز' : 'FEATURED') }}
            </span>
        @endif
        
        @if($product->is_trending)
            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                🔥 {{ app()->getLocale() == 'ku' ? 'ترێند' : (app()->getLocale() == 'ar' ? 'رائج' : 'TRENDING') }}
            </span>
        @endif
        
        @if($product->hasActiveDiscount())
            <span class="bg-gradient-to-r from-red-600 to-red-700 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-bounce">
                -{{ $product->discount_percentage }}%
            </span>
        @endif
    </div>

    {{-- Wishlist & Quick Actions --}}
    <div class="absolute top-4 right-4 z-20 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-red-500 hover:text-white transition-colors duration-300 wishlist-btn"
                data-product-id="{{ $product->id }}">
            <i class="fa-regular fa-heart"></i>
        </button>
        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-primary-500 hover:text-white transition-colors duration-300 quick-view-btn"
                data-product-id="{{ $product->id }}">
            <i class="fa-regular fa-eye"></i>
        </button>
        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-blue-500 hover:text-white transition-colors duration-300 compare-btn"
                data-product-id="{{ $product->id }}">
            <i class="fa-solid fa-balance-scale"></i>
        </button>
    </div>

    {{-- Product Image --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 aspect-square">
        <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" 
             alt="{{ $product->name }}"
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
             loading="lazy">
        
        {{-- Overlay on hover --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        {{-- Quick Add to Cart --}}
        <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            @if(!$product->isOutOfStock())
                <a href="{{ route('products.show', $product) }}" 
                   class="block w-full bg-white text-dark-900 py-3 rounded-xl font-semibold hover:bg-primary-500 hover:text-white transition-colors duration-300 text-center">
                    <i class="fa-solid fa-eye mr-2"></i>
                    {{ app()->getLocale() == 'ku' ? 'بینینی وردەکاری' : (app()->getLocale() == 'ar' ? 'عرض التفاصيل' : 'View Details') }}
                </a>
            @else
                <div class="w-full bg-red-100 text-red-600 py-3 rounded-xl font-semibold text-center">
                    <i class="fa-solid fa-times-circle mr-2"></i>
                    {{ app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock') }}
                </div>
            @endif
        </div>

        {{-- Stock Indicator --}}
        <div class="absolute top-4 left-1/2 transform -translate-x-1/2">
            @if($product->isOutOfStock())
                <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                    {{ app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock') }}
                </span>
            @elseif($product->isLowStock())
                <span class="bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse">
                    {{ app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock') }}
                </span>
            @endif
        </div>
    </div>

    {{-- Product Info --}}
    <div class="p-6 relative z-10">
        {{-- Category --}}
        <div class="flex items-center gap-2 mb-3">
            <span class="text-xs text-primary-500 font-medium bg-primary-50 px-2 py-1 rounded-full">
                {{ $product->category->name }}
            </span>
            @if($product->subcategory)
                <span class="text-xs text-gray-500">•</span>
                <span class="text-xs text-gray-500">{{ $product->subcategory->name }}</span>
            @endif
        </div>

        {{-- Product Name --}}
        <h3 class="font-bold text-dark-900 text-lg mb-2 group-hover:text-primary-500 transition-colors duration-300 line-clamp-2">
            <a href="{{ route('products.show', $product) }}" class="hover:underline">
                {{ $product->name }}
            </a>
        </h3>

        {{-- Product Description --}}
        <p class="text-dark-400 text-sm mb-4 line-clamp-2">
            {{ Str::limit($product->description, 100) }}
        </p>

        {{-- Rating (placeholder for future implementation) --}}
        <div class="flex items-center gap-2 mb-4">
            <div class="flex text-yellow-400">
                @for($i = 1; $i <= 5; $i++)
                    <i class="fa-solid fa-star text-xs"></i>
                @endfor
            </div>
            <span class="text-xs text-gray-500">({{ rand(10, 100) }} {{ app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'reviews') }})</span>
        </div>

        {{-- Price --}}
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                @if($product->hasActiveDiscount())
                    <span class="text-2xl font-bold text-primary-500">
                        ${{ number_format($product->final_price, 2) }}
                    </span>
                    <span class="text-lg text-gray-400 line-through">
                        ${{ number_format($product->price, 2) }}
                    </span>
                @else
                    <span class="text-2xl font-bold text-dark-900">
                        ${{ number_format($product->price, 2) }}
                    </span>
                @endif
            </div>

            {{-- Stock Quantity --}}
            <div class="text-right">
                <div class="text-xs text-gray-500 mb-1">
                    {{ app()->getLocale() == 'ku' ? 'لە کۆگا' : (app()->getLocale() == 'ar' ? 'المخزون' : 'Stock') }}
                </div>
                <div class="text-sm font-semibold {{ $product->isLowStock() ? 'text-orange-500' : 'text-green-500' }}">
                    {{ $product->getTotalStock() }}
                </div>
            </div>
        </div>

        {{-- Discount Countdown Timer --}}
        @if($product->hasActiveDiscount() && $product->discount_ends_at)
            <div class="mt-4 p-3 bg-gradient-to-r from-red-50 to-orange-50 rounded-xl border border-red-200">
                <div class="text-xs text-red-600 font-semibold mb-1 text-center">
                    {{ app()->getLocale() == 'ku' ? 'داشکاندن کۆتایی پێدێت' : (app()->getLocale() == 'ar' ? 'ينتهي الخصم في' : 'Discount ends in') }}
                </div>
                <div class="flex justify-center gap-2 text-red-600 font-mono text-sm" 
                     data-countdown="{{ $product->discount_ends_at->toISOString() }}">
                    <div class="text-center">
                        <div class="countdown-days font-bold">00</div>
                        <div class="text-xs">{{ app()->getLocale() == 'ku' ? 'ڕۆژ' : (app()->getLocale() == 'ar' ? 'يوم' : 'Days') }}</div>
                    </div>
                    <span class="self-center">:</span>
                    <div class="text-center">
                        <div class="countdown-hours font-bold">00</div>
                        <div class="text-xs">{{ app()->getLocale() == 'ku' ? 'کات' : (app()->getLocale() == 'ar' ? 'ساعة' : 'Hours') }}</div>
                    </div>
                    <span class="self-center">:</span>
                    <div class="text-center">
                        <div class="countdown-minutes font-bold">00</div>
                        <div class="text-xs">{{ app()->getLocale() == 'ku' ? 'خولەک' : (app()->getLocale() == 'ar' ? 'دقيقة' : 'Min') }}</div>
                    </div>
                    <span class="self-center">:</span>
                    <div class="text-center">
                        <div class="countdown-seconds font-bold">00</div>
                        <div class="text-xs">{{ app()->getLocale() == 'ku' ? 'چرکە' : (app()->getLocale() == 'ar' ? 'ثانية' : 'Sec') }}</div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Available Sizes & Quick Add --}}
        @if($product->productsizes->count() > 0)
            @auth
            @php
                $availableSizes = $product->productsizes->filter(fn($ps) => $ps->quantity > 0);
                $hasAvailableSizes = $availableSizes->count() > 0;
            @endphp
            
            <div class="mt-4 relative z-30">
            @if($hasAvailableSizes)
            <form action="{{ route('cart.store') }}" method="POST" class="quick-add-form" style="position: relative; z-index: 100;">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="quantity" value="1">
                
                <div class="text-xs text-gray-500 mb-2">
                    {{ app()->getLocale() == 'ku' ? 'قەبارە هەڵبژێرە' : (app()->getLocale() == 'ar' ? 'اختر المقاس' : 'Select Size') }}:
                </div>
                <div class="flex flex-wrap gap-2 mb-3">
                    @foreach($availableSizes->take(7) as $index => $productSize)
                        <label class="cursor-pointer" style="position: relative; z-index: 100; cursor: pointer;">
                            <input type="radio" 
                                   name="size" 
                                   value="{{ $productSize->size->id }}"
                                   class="hidden peer"
                                   style="cursor: pointer;"
                                   {{ $index === 0 ? 'checked' : '' }}
                                   required>
                            <span class="inline-block text-xs bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full peer-checked:bg-primary-500 peer-checked:text-white transition-colors duration-200 hover:bg-primary-100" style="cursor: pointer; user-select: none;">
                                {{ $productSize->size->name }}
                            </span>
                        </label>
                    @endforeach
                </div>
                
                <button type="submit" class="w-full bg-primary-500 hover:bg-primary-600 text-white py-2.5 rounded-xl font-semibold transition-colors duration-300 text-sm" style="position: relative; z-index: 100; cursor: pointer;">
                    <i class="fa-solid fa-cart-plus mr-2"></i>
                    {{ app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف إلى السلة' : 'Add to Cart') }}
                </button>
            </form>
            @else
            <div>
                <div class="w-full bg-red-100 text-red-600 py-2.5 rounded-xl font-semibold text-center text-sm">
                    <i class="fa-solid fa-times-circle mr-2"></i>
                    {{ app()->getLocale() == 'ku' ? 'هەموو قەبارەکان تەواوبوون' : (app()->getLocale() == 'ar' ? 'جميع المقاسات غير متوفرة' : 'All sizes sold out') }}
                </div>
            </div>
            @endif
            </div>
            @else
            <div class="mt-4">
                <div class="text-xs text-gray-500 mb-2">
                    {{ app()->getLocale() == 'ku' ? 'قەبارەکان' : (app()->getLocale() == 'ar' ? 'المقاسات' : 'Sizes') }}:
                </div>
                <div class="flex flex-wrap gap-2 mb-3">
                    @foreach($product->productsizes->take(7) as $productSize)
                        <span class="inline-block text-xs bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full {{ $productSize->quantity <= 0 ? 'opacity-50 line-through' : '' }}">
                            {{ $productSize->size->name }}
                        </span>
                    @endforeach
                </div>
                <a href="{{ route('login') }}" class="block w-full bg-amber-500 hover:bg-amber-600 text-white py-2.5 rounded-xl font-semibold transition-colors duration-300 text-sm text-center">
                    <i class="fa-solid fa-sign-in-alt mr-2"></i>
                    {{ app()->getLocale() == 'ku' ? 'بچۆ ژوورەوە بۆ کڕین' : (app()->getLocale() == 'ar' ? 'سجل الدخول للشراء' : 'Login to Buy') }}
                </a>
            </div>
            @endauth
        @endif
    </div>
</div>