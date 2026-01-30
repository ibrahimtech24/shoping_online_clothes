{{-- 🎨 Modern Product Card - Redesigned matching template --}}
@props(['product'])

<div class="bg-white rounded-3xl shadow hover:shadow-2xl transition-all duration-500 group overflow-hidden relative">
    
    {{-- Wishlist Button --}}
    <button class="absolute top-4 right-4 z-20 bg-white p-2.5 rounded-full shadow-lg hover:bg-red-50 hover:scale-110 transition-all duration-300 wishlist-btn"
            data-product-id="{{ $product->id }}">
        <i class="fa-regular fa-heart text-xl text-gray-600 hover:text-red-500 transition-colors"></i>
    </button>

    {{-- Product Badges --}}
    <div class="absolute top-4 left-4 z-20 flex flex-col gap-2">
        @if($product->is_new)
            <span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                {{ app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW') }}
            </span>
        @endif
        
        @if($product->hasActiveDiscount())
            <span class="bg-gradient-to-r from-red-600 to-red-700 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                -{{ $product->discount_percentage }}%
            </span>
        @endif
    </div>

    {{-- Product Image --}}
    <div class="overflow-hidden bg-gray-100">
        <a href="{{ route('products.show', $product) }}">
            <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" 
                 alt="{{ $product->name }}"
                 class="h-64 w-full object-cover group-hover:scale-110 transition-transform duration-700"
                 loading="lazy">
        </a>
    </div>

    {{-- Product Content --}}
    <div class="p-5">
        {{-- Product Name --}}
        <a href="{{ route('products.show', $product) }}">
            <h3 class="text-lg font-bold text-gray-800 hover:text-indigo-600 transition-colors mb-3 line-clamp-2">
                {{ $product->name }}
            </h3>
        </a>

        {{-- Rating --}}
        <div class="flex items-center text-yellow-400 text-sm my-2">
            @for($i = 1; $i <= 5; $i++)
                <i class="fa-solid fa-star"></i>
            @endfor
            <span class="text-gray-500 ml-2">({{ rand(50, 200) }})</span>
        </div>

        {{-- Description --}}
        <p class="text-sm text-gray-500 mb-4 line-clamp-2">
            {{ Str::limit($product->description, 60) }}
        </p>

        {{-- Price & Add to Cart --}}
        <div class="flex items-center justify-between">
            <div>
                @if($product->hasActiveDiscount())
                    <span class="text-xl font-bold text-indigo-600">${{ number_format($product->final_price, 0) }}</span>
                    <span class="line-through text-sm text-gray-400 ml-2">${{ number_format($product->price, 0) }}</span>
                @else
                    <span class="text-xl font-bold text-indigo-600">${{ number_format($product->price, 0) }}</span>
                @endif
            </div>

            {{-- Add to Cart Button --}}
            @if(!$product->isOutOfStock())
                @auth
                    @php
                        $availableSizes = $product->productsizes->filter(fn($ps) => $ps->quantity > 0);
                        $hasAvailableSizes = $availableSizes->count() > 0;
                    @endphp
                    
                    @if($hasAvailableSizes)
                        <a href="{{ route('products.show', $product) }}"
                           class="bg-indigo-600 text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-indigo-700 transition-colors inline-flex items-center gap-1.5">
                            <i class="fa-solid fa-cart-plus"></i>
                            <span class="hidden sm:inline">{{ app()->getLocale() == 'ku' ? 'زیادکردن' : (app()->getLocale() == 'ar' ? 'إضافة' : 'Add') }}</span>
                        </a>
                    @else
                        <span class="bg-red-100 text-red-600 px-4 py-2 rounded-xl text-xs font-semibold">
                            {{ app()->getLocale() == 'ku' ? 'نەماوە' : (app()->getLocale() == 'ar' ? 'نفذ' : 'Sold Out') }}
                        </span>
                    @endif
                @else
                    <a href="{{ route('login') }}"
                       class="bg-amber-500 text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-amber-600 transition-colors inline-flex items-center gap-1.5">
                        <i class="fa-solid fa-sign-in-alt"></i>
                        <span class="hidden sm:inline">{{ app()->getLocale() == 'ku' ? 'چوونەژوورەوە' : (app()->getLocale() == 'ar' ? 'تسجيل' : 'Login') }}</span>
                    </a>
                @endauth
            @else
                <span class="bg-gray-100 text-gray-600 px-4 py-2 rounded-xl text-sm font-semibold cursor-not-allowed">
                    {{ app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock') }}
                </span>
            @endif
        </div>

        {{-- Available Sizes Preview --}}
        @if($product->productsizes->count() > 0)
            <div class="mt-4 pt-4 border-t border-gray-100">
                <div class="text-xs text-gray-500 mb-2">
                    {{ app()->getLocale() == 'ku' ? 'قەبارەکان:' : (app()->getLocale() == 'ar' ? 'المقاسات:' : 'Sizes:') }}
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($product->productsizes->take(5) as $productSize)
                        <span class="inline-block text-xs {{ $productSize->quantity > 0 ? 'bg-indigo-50 text-indigo-600' : 'bg-gray-100 text-gray-400 line-through' }} px-2 py-1 rounded-md">
                            {{ $productSize->size->name }}
                        </span>
                    @endforeach
                    @if($product->productsizes->count() > 5)
                        <span class="inline-block text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-md">
                            +{{ $product->productsizes->count() - 5 }}
                        </span>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
