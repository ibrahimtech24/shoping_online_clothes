<x-layouts.main>
    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🛍️ PREMIUM E-COMMERCE UI - iOS Style Mobile-First Design
         Modern • Clean • Pastel Colors • Card-Based
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black">
                {{-- Magical Background Effects (like Home page) --}}
        <div class="fixed inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-br from-yellow-400/10 to-orange-500/10 rounded-full blur-3xl"></div>
        </div>
                {{-- ══════════════════════════════════════════════════════════════════════════
             📱 HEADER SECTION - Clean & Minimal
        ══════════════════════════════════════════════════════════════════════════ --}}
        <header class="sticky top-0 z-40 bg-slate-900/80 backdrop-blur-xl border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <div class="flex items-center justify-between">
                    {{-- Logo/Title --}}
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-white">
                            {{ app()->getLocale() == 'ku' ? 'دۆزینەوە' : (app()->getLocale() == 'ar' ? 'اكتشف' : 'Discover') }}
                        </h1>
                        <p class="text-xs text-white/60">{{ $products->total() }} {{ app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'items') }}</p>
                    </div>
                    
                    {{-- Actions --}}
                    <div class="flex items-center gap-3">
                        <button class="w-10 h-10 bg-white/10 rounded-2xl flex items-center justify-center hover:bg-white/20 transition-colors">
                            <i class="fa-solid fa-bell text-white"></i>
                        </button>
                        <button class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-cyan-500/30">
                            <i class="fa-solid fa-bag-shopping text-white text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 py-6">
            
            {{-- ══════════════════════════════════════════════════════════════════════════
                 🔍 SEARCH BAR - Floating Glass Style
            ══════════════════════════════════════════════════════════════════════════ --}}
            <section class="mb-6">
                <form action="{{ route('products.index') }}" method="GET">
                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-white/50"></i>
                        <input type="text" 
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="{{ app()->getLocale() == 'ku' ? 'گەڕان بۆ بەرهەم...' : (app()->getLocale() == 'ar' ? 'ابحث عن منتج...' : 'Search products...') }}"
                               class="w-full pl-14 pr-14 py-4 bg-white/10 backdrop-blur-xl rounded-3xl border border-white/20 focus:border-cyan-400/50 focus:ring-4 focus:ring-cyan-500/10 outline-none transition-all text-white placeholder:text-white/50">
                        <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-shadow">
                            <i class="fa-solid fa-sliders text-white text-sm"></i>
                        </button>
                    </div>
                </form>
            </section>

            {{-- ══════════════════════════════════════════════════════════════════════════
                 🏷️ CATEGORY PILLS - Horizontal Scroll
            ══════════════════════════════════════════════════════════════════════════ --}}
            <section class="mb-8">
                <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide -mx-4 px-4">
                    {{-- All Categories Pill --}}
                    <a href="{{ route('products.index') }}" 
                       class="flex-shrink-0 px-5 py-2.5 rounded-2xl font-medium text-sm transition-all whitespace-nowrap
                              {{ !request('category') ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30' : 'bg-white/10 text-white/80 hover:bg-white/20 border border-white/10' }}">
                        {{ app()->getLocale() == 'ku' ? 'هەموو' : (app()->getLocale() == 'ar' ? 'الكل' : 'All') }}
                    </a>
                    
                    @foreach($categories as $cat)
                        <a href="{{ route('products.index', ['category' => $cat->id]) }}" 
                           class="flex-shrink-0 px-5 py-2.5 rounded-2xl font-medium text-sm transition-all whitespace-nowrap
                                  {{ request('category') == $cat->id ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30' : 'bg-white/10 text-white/80 hover:bg-white/20 border border-white/10' }}">
                            {{ $cat->name }}
                        </a>
                    @endforeach
                </div>
            </section>

            {{-- ══════════════════════════════════════════════════════════════════════════
                 🎯 FEATURED BANNER - Promotional Card
            ══════════════════════════════════════════════════════════════════════════ --}}
            <section class="mb-8">
                <div class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 rounded-3xl p-6 md:p-8 overflow-hidden">
                    {{-- Ultra Premium Glow --}}
                    <div class="absolute -inset-2 bg-gradient-to-r from-cyan-500/30 via-purple-500/30 to-pink-500/30 rounded-3xl blur-xl"></div>
                    {{-- Decorative Elements --}}
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                    
                    <div class="relative z-10 flex items-center justify-between">
                        <div class="flex-1">
                            <span class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-xs font-medium mb-3">
                                {{ app()->getLocale() == 'ku' ? '✨ تایبەت' : (app()->getLocale() == 'ar' ? '✨ خاص' : '✨ Special') }}
                            </span>
                            <h2 class="text-xl md:text-2xl font-bold text-white mb-2">
                                {{ app()->getLocale() == 'ku' ? 'داشکاندنی %30' : (app()->getLocale() == 'ar' ? 'خصم 30%' : '30% Off') }}
                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                {{ app()->getLocale() == 'ku' ? 'لە هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'على جميع المنتجات' : 'On all products') }}
                            </p>
                            <button class="px-5 py-2.5 bg-white text-indigo-600 rounded-2xl font-semibold text-sm hover:bg-white/90 transition-colors shadow-lg">
                                {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : (app()->getLocale() == 'ar' ? 'تسوق الآن' : 'Shop Now') }}
                            </button>
                        </div>
                        <div class="hidden sm:block w-32 h-32 md:w-40 md:h-40">
                            <div class="w-full h-full bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center">
                                <i class="fa-solid fa-gift text-4xl md:text-5xl text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ══════════════════════════════════════════════════════════════════════════
                 📦 PRODUCTS GRID - Card-Based Design
            ══════════════════════════════════════════════════════════════════════════ --}}
            <section>
                {{-- Section Header --}}
                <div class="flex items-center justify-between mb-5">
                    <h2 class="text-lg font-bold text-white">
                        {{ app()->getLocale() == 'ku' ? 'بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات' : 'Products') }}
                    </h2>
                    <select name="sort" onchange="window.location.href='{{ route('products.index') }}?sort='+this.value+'&category={{ request('category') }}&search={{ request('search') }}'" 
                            class="text-sm text-white/70 bg-transparent outline-none cursor-pointer">
                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>{{ app()->getLocale() == 'ku' ? 'نوێترین' : (app()->getLocale() == 'ar' ? 'الأحدث' : 'Latest') }}</option>
                        <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>{{ app()->getLocale() == 'ku' ? 'نرخ ↑' : (app()->getLocale() == 'ar' ? 'السعر ↑' : 'Price ↑') }}</option>
                        <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>{{ app()->getLocale() == 'ku' ? 'نرخ ↓' : (app()->getLocale() == 'ar' ? 'السعر ↓' : 'Price ↓') }}</option>
                    </select>
                </div>

                {{-- Products Grid --}}
                @if(count($products))
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6">
                        @foreach($products as $product)
                            {{-- Product Card --}}
                            <article class="group">
                                <a href="{{ route('products.show', $product) }}" class="block">
                                    <div class="bg-white/10 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/10 hover:border-white/20 hover:bg-white/15 transition-all duration-300 hover:-translate-y-1">
                                        
                                        {{-- Image Container --}}
                                        <div class="relative aspect-square p-3 bg-white/5">
                                            {{-- Product Image --}}
                                            @if($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" 
                                                     alt="{{ $product->name }}"
                                                     class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"
                                                     loading="lazy">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <i class="fa-solid fa-image text-3xl text-gray-300"></i>
                                                </div>
                                            @endif
                                            
                                            {{-- Rating Badge --}}
                                            <div class="absolute top-4 left-4 flex items-center gap-1 px-2 py-1 bg-white/90 backdrop-blur-sm rounded-lg shadow-sm">
                                                <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
                                                <span class="text-[10px] font-semibold text-gray-700">4.{{ rand(5,9) }}</span>
                                            </div>
                                            
                                            {{-- Favorite Button --}}
                                            <button class="absolute top-4 right-4 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-sm hover:bg-rose-500 hover:text-white transition-all group/heart">
                                                <i class="fa-regular fa-heart text-xs text-gray-500 group-hover/heart:text-white"></i>
                                            </button>
                                            
                                            {{-- Discount Badge --}}
                                            @if($product->discount_price)
                                                <div class="absolute bottom-4 left-4 px-2 py-1 bg-rose-500 rounded-lg">
                                                    <span class="text-[10px] font-bold text-white">-{{ round((($product->price - $product->discount_price) / $product->price) * 100) }}%</span>
                                                </div>
                                            @endif
                                            
                                            {{-- New Badge --}}
                                            @if($product->created_at >= now()->subDays(7) && !$product->discount_price)
                                                <div class="absolute bottom-4 left-4 px-2 py-1 bg-emerald-500 rounded-lg">
                                                    <span class="text-[10px] font-bold text-white">{{ app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW') }}</span>
                                                </div>
                                            @endif
                                        </div>
                                        
                                        {{-- Product Info --}}
                                        <div class="p-4">
                                            {{-- Category --}}
                                            @if($product->category)
                                                <span class="text-[10px] text-cyan-400 font-medium uppercase tracking-wider">
                                                    {{ $product->category->name }}
                                                </span>
                                            @endif
                                            
                                            {{-- Name --}}
                                            <h3 class="text-sm font-semibold text-white mt-1 line-clamp-1 group-hover:text-cyan-400 transition-colors">
                                                {{ $product->name }}
                                            </h3>
                                            
                                            {{-- Price --}}
                                            <div class="flex items-center gap-2 mt-2">
                                                @if($product->discount_price)
                                                    <span class="text-base font-bold text-white">${{ number_format($product->discount_price, 0) }}</span>
                                                    <span class="text-xs text-white/50 line-through">${{ number_format($product->price, 0) }}</span>
                                                @else
                                                    <span class="text-base font-bold text-white">${{ number_format($product->price, 0) }}</span>
                                                @endif
                                            </div>
                                            
                                            {{-- Color Options Preview --}}
                                            <div class="flex items-center gap-1.5 mt-3">
                                                <span class="w-4 h-4 rounded-full bg-gray-900 ring-2 ring-white/30 shadow-sm"></span>
                                                <span class="w-4 h-4 rounded-full bg-blue-500 ring-2 ring-white/30 shadow-sm"></span>
                                                <span class="w-4 h-4 rounded-full bg-rose-400 ring-2 ring-white/30 shadow-sm"></span>
                                                <span class="text-[10px] text-white/50 ml-1">+3</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-10 flex justify-center">
                        {{ $products->links() }}
                    </div>
                @else
                    {{-- Empty State --}}
                    <div class="text-center py-20">
                        <div class="w-24 h-24 bg-white/10 backdrop-blur-xl rounded-full flex items-center justify-center mx-auto mb-6 border border-white/10">
                            <i class="fa-solid fa-box-open text-3xl text-cyan-400"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">
                            {{ app()->getLocale() == 'ku' ? 'هیچ بەرهەمێک نەدۆزرایەوە' : (app()->getLocale() == 'ar' ? 'لا توجد منتجات' : 'No products found') }}
                        </h3>
                        <p class="text-white/60 text-sm mb-6">
                            {{ app()->getLocale() == 'ku' ? 'تکایە فلتەرەکان بگۆڕە' : (app()->getLocale() == 'ar' ? 'جرب تغيير الفلاتر' : 'Try changing filters') }}
                        </p>
                        <a href="{{ route('products.index') }}" 
                           class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-2xl font-semibold text-sm shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-all">
                            <i class="fa-solid fa-rotate-right"></i>
                            {{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'View All') }}
                        </a>
                    </div>
                @endif
            </section>
        </main>

        {{-- Custom Styles --}}
    <style>
        /* Hide scrollbar but allow scrolling */
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</x-layouts.main>
