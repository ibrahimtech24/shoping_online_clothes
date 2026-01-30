{{-- Featured Products Section --}}
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <div class="inline-block px-4 py-2 bg-gradient-to-r from-primary-100 to-accent-100 rounded-full text-primary-600 text-sm font-semibold mb-4">
                {{ app()->getLocale() == 'ku' ? '⭐ بەرهەمە تایبەتەکان' : (app()->getLocale() == 'ar' ? '⭐ منتجات مميزة' : '⭐ Featured Products') }}
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                {{ app()->getLocale() == 'ku' ? 'باشترین' : (app()->getLocale() == 'ar' ? 'الأفضل' : 'Best') }}
                <span class="bg-gradient-to-r from-primary-500 to-accent-500 bg-clip-text text-transparent">
                    {{ app()->getLocale() == 'ku' ? 'هەڵبژاردەکان' : (app()->getLocale() == 'ar' ? 'المختارات' : 'Selections') }}
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ app()->getLocale() == 'ku' ? 'کۆمەڵێک لە باشترین بەرهەمەکانمان کە بە تایبەتی هەڵبژێردراون بۆ تۆ' : (app()->getLocale() == 'ar' ? 'مجموعة من أفضل منتجاتنا المختارة خصيصاً لك' : 'Handpicked collection of our finest products, specially curated for you') }}
            </p>
        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($featuredProducts as $product)
                <div class="group relative">
                    {{-- Enhanced Product Card --}}
                    <div class="relative bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-primary-500/20 transition-all duration-500 hover:-translate-y-2">
                        {{-- Premium Glow Effect --}}
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary-500/20 via-accent-500/20 to-primary-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm"></div>
                        
                        {{-- Product Image --}}
                        <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
                            <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" 
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            {{-- Badges --}}
                            <div class="absolute top-4 left-4 flex flex-col gap-2">
                                <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-pulse">
                                    {{ app()->getLocale() == 'ku' ? '⭐ تایبەت' : (app()->getLocale() == 'ar' ? '⭐ مميز' : '⭐ FEATURED') }}
                                </span>
                                @if($product->hasActiveDiscount())
                                    <span class="bg-gradient-to-r from-red-500 to-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                        -{{ $product->discount_percentage }}%
                                    </span>
                                @endif
                                @if($product->is_new)
                                    <span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                        {{ app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW') }}
                                    </span>
                                @endif
                            </div>

                            {{-- Action Buttons --}}
                            <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-red-500 hover:text-white transition-colors duration-300">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-primary-500 hover:text-white transition-colors duration-300 quick-view-btn"
                                        data-product-id="{{ $product->id }}">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>

                            {{-- Quick Add Button --}}
                            <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                @if(!$product->isOutOfStock())
                                    <button class="w-full bg-white text-gray-900 py-3 rounded-xl font-semibold hover:bg-primary-500 hover:text-white transition-colors duration-300 shadow-lg">
                                        <i class="fa-solid fa-cart-plus mr-2"></i>
                                        {{ app()->getLocale() == 'ku' ? 'خێرا زیادبکە' : (app()->getLocale() == 'ar' ? 'إضافة سريعة' : 'Quick Add') }}
                                    </button>
                                @else
                                    <div class="w-full bg-red-100 text-red-600 py-3 rounded-xl font-semibold text-center">
                                        {{ app()->getLocale() == 'ku' ? 'نەماوە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Sold Out') }}
                                    </div>
                                @endif
                            </div>

                            {{-- Stock Status --}}
                            @if($product->isLowStock())
                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <span class="bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse">
                                        {{ app()->getLocale() == 'ku' ? '🔥 کەم ماوەتەوە' : (app()->getLocale() == 'ar' ? '🔥 كمية محدودة' : '🔥 Limited Stock') }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        {{-- Product Info --}}
                        <div class="p-6">
                            {{-- Category --}}
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xs text-primary-500 font-medium bg-primary-50 px-2 py-1 rounded-full">
                                    {{ $product->category->name }}
                                </span>
                                <div class="flex text-yellow-400 text-xs">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>
                                <span class="text-xs text-gray-500">({{ rand(20, 150) }})</span>
                            </div>

                            {{-- Product Name --}}
                            <h3 class="font-bold text-gray-900 text-lg mb-3 line-clamp-2 group-hover:text-primary-500 transition-colors duration-300">
                                <a href="{{ route('products.show', $product) }}" class="hover:underline">
                                    {{ $product->name }}
                                </a>
                            </h3>

                            {{-- Price --}}
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-2">
                                    @if($product->hasActiveDiscount())
                                        <span class="text-2xl font-bold text-primary-500">
                                            ${{ number_format($product->final_price, 2) }}
                                        </span>
                                        <span class="text-lg text-gray-400 line-through">
                                            ${{ number_format($product->price, 2) }}
                                        </span>
                                    @else
                                        <span class="text-2xl font-bold text-gray-900">
                                            ${{ number_format($product->price, 2) }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Features --}}
                            <div class="flex items-center gap-2 text-xs text-gray-500 mb-4">
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-truck-fast text-green-500"></i>
                                    <span>{{ app()->getLocale() == 'ku' ? 'گەیاندنی خێرا' : (app()->getLocale() == 'ar' ? 'شحن سريع' : 'Fast Ship') }}</span>
                                </div>
                                <span>•</span>
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-shield-check text-blue-500"></i>
                                    <span>{{ app()->getLocale() == 'ku' ? 'گەرەنتی' : (app()->getLocale() == 'ar' ? 'ضمان' : 'Warranty') }}</span>
                                </div>
                            </div>

                            {{-- Available Sizes Preview --}}
                            @if($product->productsizes->count() > 0)
                                <div class="flex items-center gap-2">
                                    <span class="text-xs text-gray-500">
                                        {{ app()->getLocale() == 'ku' ? 'قەبارە:' : (app()->getLocale() == 'ar' ? 'المقاسات:' : 'Sizes:') }}
                                    </span>
                                    @foreach($product->productsizes->take(3) as $size)
                                        <span class="text-xs bg-gray-100 px-2 py-1 rounded-full {{ $size->quantity <= 0 ? 'opacity-50' : '' }}">
                                            {{ $size->size->name }}
                                        </span>
                                    @endforeach
                                    @if($product->productsizes->count() > 3)
                                        <span class="text-xs text-primary-500 font-medium">+{{ $product->productsizes->count() - 3 }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>

                        {{-- Premium Border Effect --}}
                        <div class="absolute inset-0 rounded-3xl border-2 border-transparent group-hover:border-gradient-to-r group-hover:from-primary-500/50 group-hover:to-accent-500/50 transition-all duration-500 pointer-events-none"></div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- View All Button --}}
        <div class="text-center mt-12">
            <a href="{{ route('products.index', ['status' => ['featured']]) }}" 
               class="inline-flex items-center gap-3 bg-gradient-to-r from-primary-500 to-accent-500 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:from-primary-600 hover:to-accent-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <span>{{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمە تایبەتەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات المميزة' : 'View All Featured Products') }}</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

{{-- Quick View Modal (if not already included) --}}
@once
    <x-modals.quick-view />
@endonce