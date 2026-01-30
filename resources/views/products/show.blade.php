<x-layouts.main>
    <style>
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
        .animate-shake {
            animation: shake 0.3s ease-in-out;
            border: 2px solid #ef4444 !important;
            border-radius: 0.75rem;
            padding: 1rem;
        }
    </style>

    {{-- Enhanced Breadcrumb --}}
    <div class="bg-gradient-to-r from-gray-50 to-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <nav class="flex items-center gap-2 text-sm">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-primary-500 transition-colors flex items-center gap-1">
                    <i class="fa-solid fa-home"></i>
                    <span class="hidden sm:inline">{{ app()->getLocale() == 'ku' ? 'سەرەتا' : (app()->getLocale() == 'ar' ? 'الرئيسية' : 'Home') }}</span>
                </a>
                <i class="fa-solid fa-chevron-left text-xs text-gray-300"></i>
                <a href="{{ route('products.index') }}" class="text-gray-500 hover:text-primary-500 transition-colors">
                    {{ app()->getLocale() == 'ku' ? 'بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات' : 'Products') }}
                </a>
                <i class="fa-solid fa-chevron-left text-xs text-gray-300"></i>
                <a href="{{ route('products.index', ['subcategories' => [$product->category_id]]) }}" class="text-gray-500 hover:text-primary-500 transition-colors">
                    {{ $product->category->name }}
                </a>
                <i class="fa-solid fa-chevron-left text-xs text-gray-300"></i>
                <span class="text-gray-900 font-medium truncate">{{ Str::limit($product->name, 30) }}</span>
            </nav>
        </div>
    </div>

    <div class="py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                {{-- Enhanced Product Image Section --}}
                <div class="space-y-4">
                    {{-- Main Image --}}
                    <div class="relative group">
                        <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl overflow-hidden shadow-2xl">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/placeholder.jpg') }}" 
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>
                        
                        {{-- Product Badges --}}
                        <div class="absolute top-6 left-6 flex flex-col gap-2">
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
                                <span class="bg-gradient-to-r from-red-600 to-red-700 text-white text-sm font-bold px-4 py-2 rounded-full shadow-lg animate-bounce">
                                    -{{ $product->discount_percentage }}%
                                </span>
                            @endif
                        </div>

                        {{-- Action Buttons --}}
                        <div class="absolute top-6 right-6 flex flex-col gap-3">
                            {{-- Wishlist --}}
                            <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-red-500 hover:text-white transition-colors duration-300 wishlist-btn">
                                <i class="fa-regular fa-heart text-lg"></i>
                            </button>
                            {{-- Share --}}
                            <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-blue-500 hover:text-white transition-colors duration-300 share-btn">
                                <i class="fa-solid fa-share-alt text-lg"></i>
                            </button>
                            {{-- Compare --}}
                            <button class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-green-500 hover:text-white transition-colors duration-300 compare-btn">
                                <i class="fa-solid fa-balance-scale text-lg"></i>
                            </button>
                        </div>

                        {{-- Stock Status --}}
                        @if($product->isOutOfStock())
                            <div class="absolute inset-0 bg-black/50 rounded-3xl flex items-center justify-center">
                                <div class="bg-red-500 text-white px-6 py-3 rounded-2xl font-bold text-xl shadow-2xl">
                                    {{ app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock') }}
                                </div>
                            </div>
                        @elseif($product->isLowStock())
                            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2">
                                <span class="bg-orange-500 text-white text-sm font-bold px-4 py-2 rounded-full animate-pulse shadow-lg">
                                    ⚡ {{ app()->getLocale() == 'ku' ? 'تەنها ' . $product->getTotalStock() . ' دانە ماوەتەوە!' : (app()->getLocale() == 'ar' ? 'باقي ' . $product->getTotalStock() . ' قطع فقط!' : 'Only ' . $product->getTotalStock() . ' left!') }}
                                </span>
                            </div>
                        @endif
                    </div>

                    {{-- Image Gallery (Placeholder for future implementation) --}}
                    <div class="grid grid-cols-4 gap-3">
                        @for($i = 1; $i <= 4; $i++)
                            <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden cursor-pointer hover:ring-2 hover:ring-primary-500 transition-all">
                                <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" 
                                     alt="Product view {{ $i }}"
                                     class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity">
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- Enhanced Product Details --}}
                <div class="space-y-8">
                    {{-- Product Header --}}
                    <div>
                        {{-- Category Path --}}
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                            <span class="bg-primary-50 text-primary-600 px-3 py-1 rounded-full font-medium">{{ $product->category->name }}</span>
                            @if($product->subcategory)
                                <span>•</span>
                                <span>{{ $product->subcategory->name }}</span>
                            @endif
                        </div>

                        {{-- Product Name --}}
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight mb-4">{{ $product->name }}</h1>

                        {{-- Rating & Reviews --}}
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="flex text-yellow-400">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>
                                <span class="font-bold text-gray-900">4.8</span>
                                <span class="text-gray-500">({{ rand(50, 200) }} {{ app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'reviews') }})</span>
                            </div>
                            <div class="h-4 w-px bg-gray-300"></div>
                            <span class="text-sm text-gray-600">
                                {{ rand(500, 1500) }} {{ app()->getLocale() == 'ku' ? 'جار فرۆشراوە' : (app()->getLocale() == 'ar' ? 'مبيعة' : 'sold') }}
                            </span>
                        </div>
                    </div>

                    {{-- Price & Discount --}}
                    <div class="bg-gradient-to-r from-gray-50 to-white p-6 rounded-2xl border border-gray-200">
                        <div class="flex items-center gap-4 mb-4">
                            @if($product->hasActiveDiscount())
                                <div class="text-4xl font-bold text-primary-500">
                                    ${{ number_format($product->final_price, 2) }}
                                </div>
                                <div class="text-2xl text-gray-400 line-through">
                                    ${{ number_format($product->price, 2) }}
                                </div>
                                <div class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-bold">
                                    {{ app()->getLocale() == 'ku' ? 'پاشەکەوت ' : (app()->getLocale() == 'ar' ? 'توفير ' : 'Save ') }}
                                    ${{ number_format($product->price - $product->final_price, 2) }}
                                </div>
                            @else
                                <div class="text-4xl font-bold text-gray-900">
                                    ${{ number_format($product->price, 2) }}
                                </div>
                            @endif
                        </div>

                        {{-- Stock & Availability --}}
                        <div class="flex items-center gap-6">
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-gray-700">
                                    {{ app()->getLocale() == 'ku' ? 'لە کۆگا:' : (app()->getLocale() == 'ar' ? 'المخزون:' : 'Stock:') }}
                                </span>
                                <span class="font-bold text-lg {{ $product->isLowStock() ? 'text-orange-500' : 'text-green-500' }}">
                                    {{ $product->getTotalStock() }}
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full {{ $product->isOutOfStock() ? 'bg-red-500' : ($product->isLowStock() ? 'bg-orange-500' : 'bg-green-500') }}"></div>
                                <span class="text-sm font-medium {{ $product->isOutOfStock() ? 'text-red-600' : ($product->isLowStock() ? 'text-orange-600' : 'text-green-600') }}">
                                    @if($product->isOutOfStock())
                                        {{ app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock') }}
                                    @elseif($product->isLowStock())
                                        {{ app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock') }}
                                    @else
                                        {{ app()->getLocale() == 'ku' ? 'لە کۆگا هەیە' : (app()->getLocale() == 'ar' ? 'متوفر' : 'In Stock') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Discount Countdown --}}
                    @if($product->hasActiveDiscount() && $product->discount_ends_at)
                        <div class="bg-gradient-to-r from-red-50 to-orange-50 p-6 rounded-2xl border border-red-200">
                            <div class="text-center">
                                <h3 class="text-lg font-bold text-red-600 mb-3">
                                    🔥 {{ app()->getLocale() == 'ku' ? 'داشکاندن کۆتایی پێدێت!' : (app()->getLocale() == 'ar' ? 'ينتهي العرض قريباً!' : 'Limited Time Offer!') }}
                                </h3>
                                <div class="flex justify-center gap-4 text-red-600 font-mono text-lg" 
                                     data-countdown="{{ $product->discount_ends_at->toISOString() }}">
                                    <div class="text-center">
                                        <div class="countdown-days font-bold text-2xl">00</div>
                                        <div class="text-sm">{{ app()->getLocale() == 'ku' ? 'ڕۆژ' : (app()->getLocale() == 'ar' ? 'يوم' : 'Days') }}</div>
                                    </div>
                                    <span class="self-center text-2xl">:</span>
                                    <div class="text-center">
                                        <div class="countdown-hours font-bold text-2xl">00</div>
                                        <div class="text-sm">{{ app()->getLocale() == 'ku' ? 'کات' : (app()->getLocale() == 'ar' ? 'ساعة' : 'Hours') }}</div>
                                    </div>
                                    <span class="self-center text-2xl">:</span>
                                    <div class="text-center">
                                        <div class="countdown-minutes font-bold text-2xl">00</div>
                                        <div class="text-sm">{{ app()->getLocale() == 'ku' ? 'خولەک' : (app()->getLocale() == 'ar' ? 'دقيقة' : 'Min') }}</div>
                                    </div>
                                    <span class="self-center text-2xl">:</span>
                                    <div class="text-center">
                                        <div class="countdown-seconds font-bold text-2xl">00</div>
                                        <div class="text-sm">{{ app()->getLocale() == 'ku' ? 'چرکە' : (app()->getLocale() == 'ar' ? 'ثانية' : 'Sec') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Product Sizes --}}
                    @if($product->productsizes->count() > 0)
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-4 text-lg">
                                {{ app()->getLocale() == 'ku' ? 'قەبارەکان' : (app()->getLocale() == 'ar' ? 'المقاسات المتوفرة' : 'Available Sizes') }}
                            </h3>
                            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-3">
                                @foreach($product->productsizes as $productSize)
                                    <label class="relative cursor-pointer group">
                                        <input type="radio" name="size" value="{{ $productSize->size->id }}" 
                                               class="peer sr-only" {{ $productSize->quantity <= 0 ? 'disabled' : '' }}>
                                        <div class="border-2 border-gray-200 rounded-xl p-4 text-center transition-all peer-checked:border-primary-500 peer-checked:bg-primary-50 hover:border-primary-300 {{ $productSize->quantity <= 0 ? 'opacity-50 cursor-not-allowed' : '' }}">
                                            <div class="font-semibold text-gray-900 peer-checked:text-primary-600">{{ $productSize->size->name }}</div>
                                            <div class="text-xs text-gray-500 mt-1">
                                                @if($productSize->quantity <= 0)
                                                    {{ app()->getLocale() == 'ku' ? 'نەماوە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out') }}
                                                @else
                                                    {{ $productSize->quantity }} {{ app()->getLocale() == 'ku' ? 'دانە' : (app()->getLocale() == 'ar' ? 'قطعة' : 'left') }}
                                                @endif
                                            </div>
                                        </div>
                                        @if($productSize->quantity <= 0)
                                            <div class="absolute inset-0 flex items-center justify-center">
                                                <div class="w-full h-px bg-red-400 transform rotate-12"></div>
                                            </div>
                                        @endif
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Quantity Selector & Add to Cart --}}
                    @if(!$product->isOutOfStock())
                        <div class="space-y-4">
                            {{-- Quantity --}}
                            <div class="flex items-center gap-4">
                                <label class="font-semibold text-gray-900">
                                    {{ app()->getLocale() == 'ku' ? 'بڕ:' : (app()->getLocale() == 'ar' ? 'الكمية:' : 'Quantity:') }}
                                </label>
                                <div class="flex items-center border border-gray-300 rounded-lg">
                                    <button type="button" class="p-3 hover:bg-gray-100 transition-colors" onclick="decreaseQuantity()">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <input type="number" id="quantity" value="1" min="1" max="{{ $product->getTotalStock() }}" 
                                           class="w-16 text-center border-0 focus:ring-0">
                                    <button type="button" class="p-3 hover:bg-gray-100 transition-colors" onclick="increaseQuantity()">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- Action Buttons --}}
                            <div class="space-y-3">
                                {{-- Add to Cart --}}
                                <button class="w-full bg-gradient-to-r from-primary-500 to-accent-500 text-white py-4 px-8 rounded-xl font-bold text-lg hover:from-primary-600 hover:to-accent-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center gap-3">
                                    <i class="fa-solid fa-cart-plus text-xl"></i>
                                    {{ app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف إلى السلة' : 'Add to Cart') }}
                                </button>

                                {{-- Buy Now --}}
                                <button class="w-full bg-gray-900 text-white py-4 px-8 rounded-xl font-bold text-lg hover:bg-gray-800 transition-colors flex items-center justify-center gap-3">
                                    <i class="fa-solid fa-bolt text-xl"></i>
                                    {{ app()->getLocale() == 'ku' ? 'ئێستا بیکڕە' : (app()->getLocale() == 'ar' ? 'اشتر الآن' : 'Buy Now') }}
                                </button>
                            </div>
                        </div>
                    @endif

                {{-- Description --}}
                <p class="text-dark-500 text-base sm:text-lg leading-relaxed">
                    {{ $product->description }}
                </p>

                {{-- Add to Cart Form --}}
                @auth
                <form action="{{ route('cart.store') }}" method="POST" class="space-y-5 sm:space-y-6 pt-4">
                    @csrf

                    {{-- Size Selection --}}
                    <div>
                        <label class="block text-dark-900 font-semibold mb-3">هەڵبژاردنی قەبارە</label>
                        <div class="flex flex-wrap gap-2 sm:gap-3">
                            @foreach ($product->productsizes as $productsize)
                                <label class="cursor-pointer">
                                    <input type="radio" 
                                           id="size_{{ $product->id }}_{{ $productsize->size->id }}"
                                           name="size" 
                                           value="{{ $productsize->size->id }}"
                                           class="hidden peer"
                                           @if (old('size') === $productsize->size->id) checked @endif>
                                    <span class="inline-flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 border-2 border-dark-200 rounded-xl font-medium peer-checked:border-primary-500 peer-checked:bg-primary-500 peer-checked:text-white transition-all hover:border-primary-400 text-dark-700">
                                        {{ $productsize->size->name }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                        <x-form.error name="size" />
                    </div>

                    {{-- Quantity --}}
                    <div>
                        <label class="block text-dark-900 font-semibold mb-3">ژمارە</label>
                        <div class="flex items-center border-2 border-dark-200 rounded-xl w-fit overflow-hidden bg-white">
                            <button type="button" onclick="decrementQty()" class="w-11 h-11 sm:w-12 sm:h-12 flex items-center justify-center text-dark-400 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input type="number" name="quantity" id="quantity" value="1" min="1"
                                   class="w-14 sm:w-16 h-11 sm:h-12 text-center font-bold text-dark-900 border-0 focus:ring-0 outline-none bg-transparent">
                            <button type="button" onclick="incrementQty()" class="w-11 h-11 sm:w-12 sm:h-12 flex items-center justify-center text-dark-400 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    {{-- Action Buttons --}}
                    <div class="flex gap-3 sm:gap-4 pt-2">
                        <button type="submit" class="flex-1 btn-primary text-white py-3.5 sm:py-4 rounded-xl font-semibold text-base sm:text-lg flex items-center justify-center gap-3">
                            <i class="fa-solid fa-shopping-bag"></i>
                            زیادکردن بۆ سەبەتە
                        </button>
                        <button type="button" class="w-12 h-12 sm:w-14 sm:h-14 border-2 border-dark-200 rounded-xl flex items-center justify-center hover:border-primary-500 hover:text-primary-500 text-dark-400 transition-colors">
                            <i class="fa-regular fa-heart text-lg sm:text-xl"></i>
                        </button>
                    </div>
                </form>
                @else
                <div class="space-y-5 sm:space-y-6 pt-4">
                    <div class="bg-amber-50 border-2 border-amber-200 rounded-xl p-6 text-center">
                        <i class="fa-solid fa-user-lock text-4xl text-amber-500 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            {{ app()->getLocale() == 'ku' ? 'پێویستە بچیتە ژوورەوە' : (app()->getLocale() == 'ar' ? 'يجب تسجيل الدخول' : 'Please Login') }}
                        </h3>
                        <p class="text-gray-600 mb-4">
                            {{ app()->getLocale() == 'ku' ? 'بۆ خستنە سەبەتە و کڕین، پێویستە بچیتە ژوورەوە یان هەژمارێک دروست بکەیت' : (app()->getLocale() == 'ar' ? 'لإضافة المنتجات إلى السلة والشراء، يجب تسجيل الدخول أو إنشاء حساب' : 'To add products to cart and purchase, you need to login or create an account') }}
                        </p>
                        <div class="flex gap-3 justify-center">
                            <a href="{{ route('login') }}" class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                                <i class="fa-solid fa-sign-in-alt mr-2"></i>
                                {{ app()->getLocale() == 'ku' ? 'چوونە ژوورەوە' : (app()->getLocale() == 'ar' ? 'تسجيل الدخول' : 'Login') }}
                            </a>
                            <a href="{{ route('register') }}" class="bg-white hover:bg-gray-50 text-gray-700 border-2 border-gray-300 px-6 py-3 rounded-lg font-semibold transition-colors">
                                <i class="fa-solid fa-user-plus mr-2"></i>
                                {{ app()->getLocale() == 'ku' ? 'هەژمار دروستکردن' : (app()->getLocale() == 'ar' ? 'إنشاء حساب' : 'Register') }}
                            </a>
                        </div>
                    </div>
                </div>
                @endauth

                    {{-- Product Features & Benefits --}}
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200">
                        <h3 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-certificate text-blue-500"></i>
                            {{ app()->getLocale() == 'ku' ? 'تایبەتمەندیەکان' : (app()->getLocale() == 'ar' ? 'المميزات' : 'Product Benefits') }}
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-truck-fast text-green-600 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-700">{{ app()->getLocale() == 'ku' ? 'گەیاندنی خێرا و خۆڕایی' : (app()->getLocale() == 'ar' ? 'شحن سريع ومجاني' : 'Free Fast Shipping') }}</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-shield-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-700">{{ app()->getLocale() == 'ku' ? 'گەرەنتی یەک ساڵ' : (app()->getLocale() == 'ar' ? 'ضمان سنة واحدة' : '1 Year Warranty') }}</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-rotate-left text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-700">{{ app()->getLocale() == 'ku' ? 'گەڕاندنەوەی ٣٠ ڕۆژە' : (app()->getLocale() == 'ar' ? 'إرجاع خلال 30 يوم' : '30-Day Returns') }}</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-headset text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-sm text-gray-700">{{ app()->getLocale() == 'ku' ? 'پشتگیری ٢٤/٧' : (app()->getLocale() == 'ar' ? 'دعم 24/7' : '24/7 Support') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product Information Tabs --}}
            <div class="mt-16" x-data="{ activeTab: 'description' }">
                {{-- Tab Headers --}}
                <div class="flex flex-wrap border-b border-gray-200 mb-8">
                    <button @click="activeTab = 'description'" 
                            class="px-6 py-3 font-semibold text-sm transition-colors border-b-2 mb-[-2px]"
                            :class="activeTab === 'description' ? 'text-primary-500 border-primary-500' : 'text-gray-500 border-transparent hover:text-gray-700'">
                        {{ app()->getLocale() == 'ku' ? 'وەسف' : (app()->getLocale() == 'ar' ? 'الوصف' : 'Description') }}
                    </button>
                    <button @click="activeTab = 'specifications'" 
                            class="px-6 py-3 font-semibold text-sm transition-colors border-b-2 mb-[-2px]"
                            :class="activeTab === 'specifications' ? 'text-primary-500 border-primary-500' : 'text-gray-500 border-transparent hover:text-gray-700'">
                        {{ app()->getLocale() == 'ku' ? 'تایبەتمەندیەکان' : (app()->getLocale() == 'ar' ? 'المواصفات' : 'Specifications') }}
                    </button>
                    <button @click="activeTab = 'reviews'" 
                            class="px-6 py-3 font-semibold text-sm transition-colors border-b-2 mb-[-2px]"
                            :class="activeTab === 'reviews' ? 'text-primary-500 border-primary-500' : 'text-gray-500 border-transparent hover:text-gray-700'">
                        {{ app()->getLocale() == 'ku' ? 'هەڵسەنگاندنەکان' : (app()->getLocale() == 'ar' ? 'التقييمات' : 'Reviews') }} ({{ rand(20, 150) }})
                    </button>
                    <button @click="activeTab = 'shipping'" 
                            class="px-6 py-3 font-semibold text-sm transition-colors border-b-2 mb-[-2px]"
                            :class="activeTab === 'shipping' ? 'text-primary-500 border-primary-500' : 'text-gray-500 border-transparent hover:text-gray-700'">
                        {{ app()->getLocale() == 'ku' ? 'گەیاندن' : (app()->getLocale() == 'ar' ? 'الشحن' : 'Shipping') }}
                    </button>
                </div>

                {{-- Tab Content --}}
                <div class="bg-white rounded-2xl border border-gray-200 p-8">
                    {{-- Description Tab --}}
                    <div x-show="activeTab === 'description'" x-transition>
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-600 leading-relaxed text-lg">{{ $product->description }}</p>
                            
                            {{-- Additional description content --}}
                            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-4">{{ app()->getLocale() == 'ku' ? 'تایبەتمەندیە سەرەکیەکان' : (app()->getLocale() == 'ar' ? 'المميزات الرئيسية' : 'Key Features') }}</h4>
                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-3">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'کوالیتی بەرز و درێژخایەن' : (app()->getLocale() == 'ar' ? 'جودة عالية ومتانة' : 'High quality and durability') }}</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'دیزاینی مۆدێرن و جوان' : (app()->getLocale() == 'ar' ? 'تصميم عصري وجميل' : 'Modern and elegant design') }}</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'گونجاو لەگەڵ هەموو ستایلێک' : (app()->getLocale() == 'ar' ? 'مناسب لجميع الأنماط' : 'Suitable for all styles') }}</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'ئاسان لە بەکارهێنان' : (app()->getLocale() == 'ar' ? 'سهل الاستخدام' : 'Easy to use') }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-4">{{ app()->getLocale() == 'ku' ? 'زانیاری زیاتر' : (app()->getLocale() == 'ar' ? 'معلومات إضافية' : 'Additional Info') }}</h4>
                                    <div class="space-y-3">
                                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                            <span class="text-gray-500">{{ app()->getLocale() == 'ku' ? 'برێند' : (app()->getLocale() == 'ar' ? 'العلامة التجارية' : 'Brand') }}:</span>
                                            <span class="font-medium">Premium Brand</span>
                                        </div>
                                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                            <span class="text-gray-500">{{ app()->getLocale() == 'ku' ? 'ناوەڕۆک' : (app()->getLocale() == 'ar' ? 'المواد' : 'Material') }}:</span>
                                            <span class="font-medium">High Quality</span>
                                        </div>
                                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                            <span class="text-gray-500">{{ app()->getLocale() == 'ku' ? 'وڵاتی درووستکراو' : (app()->getLocale() == 'ar' ? 'بلد الصنع' : 'Origin') }}:</span>
                                            <span class="font-medium">Premium Manufacturing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Reviews Tab --}}
                    <div x-show="activeTab === 'reviews'" x-transition>
                        <div class="space-y-8">
                            {{-- Reviews Summary --}}
                            <div class="flex flex-col sm:flex-row gap-8">
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-gray-900 mb-2">4.8</div>
                                    <div class="flex text-yellow-400 justify-center mb-2">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                    </div>
                                    <div class="text-gray-500">{{ rand(50, 200) }} {{ app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'reviews') }}</div>
                                </div>
                            </div>

                            {{-- Sample Reviews --}}
                            <div class="space-y-6">
                                @for($i = 1; $i <= 3; $i++)
                                    <div class="border border-gray-200 rounded-xl p-6">
                                        <div class="flex items-center gap-4 mb-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-accent-500 rounded-full flex items-center justify-center text-white font-bold">
                                                {{ chr(64 + $i) }}
                                            </div>
                                            <div>
                                                <div class="font-semibold text-gray-900">{{ app()->getLocale() == 'ku' ? 'کڕیار ' . $i : (app()->getLocale() == 'ar' ? 'المشتري ' . $i : 'Customer ' . $i) }}</div>
                                                <div class="flex text-yellow-400 text-sm">
                                                    @for($j = 1; $j <= 5; $j++)
                                                        <i class="fa-solid fa-star"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 leading-relaxed">
                                            {{ app()->getLocale() == 'ku' ? 'بەرهەمێکی زۆر باشە، کوالیتی نایابی هەیە و زۆر ڕازی بووم لە کڕینەکەم. پێشنیاری دەکەم.' : (app()->getLocale() == 'ar' ? 'منتج ممتاز، جودة رائعة وأنا راضي جداً عن الشراء. أنصح به.' : 'Excellent product! Amazing quality and I\'m very satisfied with my purchase. Highly recommended.') }}
                                        </p>
                                        <div class="mt-4 text-sm text-gray-500">
                                            {{ rand(1, 30) }} {{ app()->getLocale() == 'ku' ? 'ڕۆژ لەمەوبەر' : (app()->getLocale() == 'ar' ? 'يوم مضى' : 'days ago') }}
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Related Products Section --}}
            @if(isset($relatedProducts) && $relatedProducts->count() > 0)
                <div class="mt-20">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">
                            {{ app()->getLocale() == 'ku' ? 'بەرهەمە هاوشێوەکان' : (app()->getLocale() == 'ar' ? 'منتجات مشابهة' : 'Related Products') }}
                        </h2>
                        <p class="text-gray-600">
                            {{ app()->getLocale() == 'ku' ? 'بەرهەمە تری لەم جۆرەدا' : (app()->getLocale() == 'ar' ? 'منتجات أخرى في هذه الفئة' : 'Other products you might like') }}
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($relatedProducts as $relatedProduct)
                            @include('products.partials.product-card', ['product' => $relatedProduct])
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- JavaScript for Enhanced Features --}}
    <script>
    // Quantity controls
    function increaseQuantity() {
        const input = document.getElementById('quantity');
        const max = parseInt(input.getAttribute('max'));
        const current = parseInt(input.value);
        if (current < max) {
            input.value = current + 1;
        }
    }

    function decreaseQuantity() {
        const input = document.getElementById('quantity');
        const current = parseInt(input.value);
        if (current > 1) {
            input.value = current - 1;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Add to cart form validation
        const cartForm = document.querySelector('form[action="{{ route('cart.store') }}"]');
        if (cartForm) {
            cartForm.addEventListener('submit', function(e) {
                const sizeInputs = this.querySelectorAll('input[name="size"]:checked');
                if (sizeInputs.length === 0) {
                    e.preventDefault();
                    alert('تکایە یەکێک لە قەبارەکان هەڵبژێرە!');
                    const sizeSection = this.querySelector('input[name="size"]').closest('div').closest('div');
                    sizeSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    sizeSection.classList.add('animate-shake');
                    setTimeout(() => sizeSection.classList.remove('animate-shake'), 500);
                }
            });
        }

        // Countdown timer
        const countdownElement = document.querySelector('[data-countdown]');
        if (countdownElement) {
            const countdownDate = new Date(countdownElement.getAttribute('data-countdown')).getTime();
            
            const timer = setInterval(function() {
                const now = new Date().getTime();
                const distance = countdownDate - now;
                
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                if (distance > 0) {
                    countdownElement.querySelector('.countdown-days').textContent = days.toString().padStart(2, '0');
                    countdownElement.querySelector('.countdown-hours').textContent = hours.toString().padStart(2, '0');
                    countdownElement.querySelector('.countdown-minutes').textContent = minutes.toString().padStart(2, '0');
                    countdownElement.querySelector('.countdown-seconds').textContent = seconds.toString().padStart(2, '0');
                } else {
                    clearInterval(timer);
                    countdownElement.innerHTML = '<div class="text-red-600 font-bold text-center">{{ app()->getLocale() == 'ku' ? 'داشکاندن کۆتایی هات' : (app()->getLocale() == 'ar' ? 'انتهى العرض' : 'Offer Expired') }}</div>';
                }
            }, 1000);
        }

        // Action buttons
        document.querySelector('.wishlist-btn')?.addEventListener('click', function() {
            this.querySelector('i').classList.toggle('fa-regular');
            this.querySelector('i').classList.toggle('fa-solid');
            this.classList.toggle('bg-red-500');
            this.classList.toggle('text-white');
        });

        document.querySelector('.share-btn')?.addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $product->name }}',
                    text: '{{ app()->getLocale() == 'ku' ? 'ئەم بەرهەمە جوانە بڕوانە' : (app()->getLocale() == 'ar' ? 'انظر إلى هذا المنتج الرائع' : 'Check out this amazing product') }}',
                    url: window.location.href
                });
            }
        });
    });
    </script>
</x-layouts.main>
