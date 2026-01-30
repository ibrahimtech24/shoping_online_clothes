<x-layouts.main>
    {{-- ✨ ULTRA PREMIUM ANNOUNCEMENT BAR --}}
    <div class="bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white py-3 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="relative container mx-auto px-4">
            <div class="flex items-center justify-center gap-4 text-center">
                <span class="animate-bounce text-lg">🎉</span>
                <p class="text-sm md:text-base font-bold animate-pulse">
                    {{ app()->getLocale() == 'ku' ? 'گەیاندنی خۆڕایی بۆ کڕینی سەرووی $50' : 'Free Shipping on orders over $50' }}
                </p>
                <span class="animate-bounce text-lg" style="animation-delay: 0.5s;">⚡</span>
            </div>
        </div>
    </div>

    {{-- 🌟 MODERN STYLISH CAROUSEL --}}
    <section class="relative bg-gradient-to-br from-white via-blue-50/30 to-purple-50/30 py-20 overflow-hidden">
        {{-- Beautiful Background --}}
        <div class="absolute inset-0">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-72 h-72 bg-gradient-to-br from-pink-500/20 to-orange-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 50px 50px, rgba(147, 51, 234, 0.6) 1px, transparent 0); background-size: 100px 100px;"></div>
        </div>

        <div class="container mx-auto px-4 relative" x-data="modernCarousel()">
            {{-- Modern Card Carousel --}}
            <div class="relative max-w-7xl mx-auto">
                {{-- Title --}}
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <span class="text-4xl animate-bounce">💎</span>
                        <h1 class="text-5xl md:text-7xl font-black">
                            <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">
                                {{ app()->getLocale() == 'ku' ? 'کۆڵەکشنی نوێ' : 'NEW COLLECTION' }}
                            </span>
                        </h1>
                        <span class="text-4xl animate-bounce" style="animation-delay: 0.3s;">✨</span>
                    </div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        {{ app()->getLocale() == 'ku' ? 'باشترین بەرهەمەکان بە دیزاینی مۆدێرن و کوالیتی عاڵی' : 'Premium products with modern design and exceptional quality' }}
                    </p>
                </div>

                {{-- Card Container --}}
                <div class="relative overflow-hidden rounded-3xl">
                    
                    {{-- Slide 1 --}}
                    <div class="h-[70vh] bg-gradient-to-br from-yellow-400 via-orange-500 to-red-500 rounded-3xl relative overflow-hidden shadow-2xl group" :class="currentSlide === 0 ? '' : 'hidden'">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-pulse"></div>
                        <div class="relative h-full flex items-center justify-center text-center text-white p-8">
                            <div class="max-w-4xl">
                                <h2 class="text-6xl md:text-8xl font-black mb-6 leading-tight">
                                    {{ app()->getLocale() == 'ku' ? 'فەشنی نوێ' : 'NEW FASHION' }}
                                </h2>
                                <p class="text-2xl md:text-3xl mb-8 font-light">
                                    {{ app()->getLocale() == 'ku' ? 'کۆڵەکشنی 2026' : '2026 Collection' }}
                                </p>
                                <p class="text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
                                    {{ app()->getLocale() == 'ku' ? 'باشترین بەرهەمەکانی ئەمساڵ بە نرخی نایابانە' : 'This year\'s finest products at incredible prices' }}
                                </p>
                                <div class="bg-white text-gray-900 px-8 py-4 rounded-full inline-block font-black text-xl mb-8">
                                    {{ app()->getLocale() == 'ku' ? 'لە $99 ەوە دەستپێکردن' : 'Starting from $99' }}
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('products.index') }}" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW' }}
                                    </a>
                                    <a href="{{ route('products.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2 --}}
                    <div class="h-[70vh] bg-gradient-to-br from-pink-400 via-purple-500 to-indigo-600 rounded-3xl relative overflow-hidden shadow-2xl group" :class="currentSlide === 1 ? '' : 'hidden'">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-l from-transparent via-white/10 to-transparent animate-pulse"></div>
                        <div class="relative h-full flex items-center justify-center text-center text-white p-8">
                            <div class="max-w-4xl">
                                <h2 class="text-6xl md:text-8xl font-black mb-6 leading-tight">
                                    {{ app()->getLocale() == 'ku' ? 'ستایلی لوکس' : 'LUXURY STYLE' }}
                                </h2>
                                <p class="text-2xl md:text-3xl mb-8 font-light">
                                    {{ app()->getLocale() == 'ku' ? 'کوالیتی عاڵی' : 'Premium Quality' }}
                                </p>
                                <p class="text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
                                    {{ app()->getLocale() == 'ku' ? 'دیزاینی ئەوروپی بە مادە خامی باشترین' : 'European design with finest materials' }}
                                </p>
                                <div class="bg-white text-gray-900 px-8 py-4 rounded-full inline-block font-black text-xl mb-8">
                                    {{ app()->getLocale() == 'ku' ? 'تا 60٪ داشکاندن' : 'Up to 60% OFF' }}
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('products.index') }}" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW' }}
                                    </a>
                                    <a href="{{ route('products.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 3 --}}
                    <div class="h-[70vh] bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 rounded-3xl relative overflow-hidden shadow-2xl group" :class="currentSlide === 2 ? '' : 'hidden'">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-pulse"></div>
                        <div class="relative h-full flex items-center justify-center text-center text-white p-8">
                            <div class="max-w-4xl">
                                <h2 class="text-6xl md:text-8xl font-black mb-6 leading-tight">
                                    {{ app()->getLocale() == 'ku' ? 'ترێندی ئەمڕۆ' : 'TODAY\'S TREND' }}
                                </h2>
                                <p class="text-2xl md:text-3xl mb-8 font-light">
                                    {{ app()->getLocale() == 'ku' ? 'هیت و پۆپولار' : 'Hit & Popular' }}
                                </p>
                                <p class="text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
                                    {{ app()->getLocale() == 'ku' ? 'گەرمترین مۆدای ئەم وەرزە' : 'Hottest fashion this season' }}
                                </p>
                                <div class="bg-white text-gray-900 px-8 py-4 rounded-full inline-block font-black text-xl mb-8">
                                    {{ app()->getLocale() == 'ku' ? 'گەیاندنی خۆڕایی' : 'Free Shipping' }}
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('products.index') }}" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW' }}
                                    </a>
                                    <a href="{{ route('products.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 4 --}}
                    <div class="h-[70vh] bg-gradient-to-br from-cyan-400 via-blue-500 to-purple-600 rounded-3xl relative overflow-hidden shadow-2xl group" :class="currentSlide === 3 ? '' : 'hidden'">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-l from-transparent via-white/10 to-transparent animate-pulse"></div>
                        <div class="relative h-full flex items-center justify-center text-center text-white p-8">
                            <div class="max-w-4xl">
                                <h2 class="text-6xl md:text-8xl font-black mb-6 leading-tight">
                                    {{ app()->getLocale() == 'ku' ? 'ستایلی ئافرەتان' : 'WOMEN STYLE' }}
                                </h2>
                                <p class="text-2xl md:text-3xl mb-8 font-light">
                                    {{ app()->getLocale() == 'ku' ? 'جوانی و شێوەیی' : 'Beauty & Elegance' }}
                                </p>
                                <p class="text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
                                    {{ app()->getLocale() == 'ku' ? 'کۆڵەکشنی تایبەتی ئافرەتان بە دیزاینی جوان' : 'Special women\'s collection with beautiful design' }}
                                </p>
                                <div class="bg-white text-gray-900 px-8 py-4 rounded-full inline-block font-black text-xl mb-8">
                                    {{ app()->getLocale() == 'ku' ? 'تا 70٪ داشکاندن' : 'Up to 70% OFF' }}
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('products.index') }}" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW' }}
                                    </a>
                                    <a href="{{ route('products.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 5 --}} 
                    <div class="h-[70vh] bg-gradient-to-br from-amber-400 via-yellow-500 to-orange-600 rounded-3xl relative overflow-hidden shadow-2xl group" :class="currentSlide === 4 ? '' : 'hidden'">
                        <div class="absolute inset-0 bg-black/30"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-pulse"></div>
                        <div class="relative h-full flex items-center justify-center text-center text-white p-8">
                            <div class="max-w-4xl">
                                <h2 class="text-6xl md:text-8xl font-black mb-6 leading-tight">
                                    {{ app()->getLocale() == 'ku' ? 'ستایلی پیاوان' : 'MEN STYLE' }}
                                </h2>
                                <p class="text-2xl md:text-3xl mb-8 font-light">
                                    {{ app()->getLocale() == 'ku' ? 'پاکیزە و مۆدێرن' : 'Clean & Modern' }}
                                </p>
                                <p class="text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
                                    {{ app()->getLocale() == 'ku' ? 'کۆڵەکشنی پیاوان بە دیزاینی کلاسیک و مۆدێرن' : 'Men\'s collection with classic and modern design' }}
                                </p>
                                <div class="bg-white text-gray-900 px-8 py-4 rounded-full inline-block font-black text-xl mb-8">
                                    {{ app()->getLocale() == 'ku' ? 'تا 50٪ داشکاندن' : 'Up to 50% OFF' }}
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('products.index') }}" class="bg-white text-gray-900 px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW' }}
                                    </a>
                                    <a href="{{ route('products.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Navigation --}}
                    <button @click="prevSlide()" class="absolute left-6 top-1/2 -translate-y-1/2 w-14 h-14 bg-white/20 backdrop-blur-xl rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300">
                        <i class="fa-solid fa-chevron-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'right' : 'left' }} text-xl"></i>
                    </button>
                    <button @click="nextSlide()" class="absolute right-6 top-1/2 -translate-y-1/2 w-14 h-14 bg-white/20 backdrop-blur-xl rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-300">
                        <i class="fa-solid fa-chevron-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-xl"></i>
                    </button>

                    {{-- Dots --}}
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3">
                        @for($i = 0; $i < 5; $i++)
                        <button @click="goToSlide({{ $i }})" 
                                class="w-3 h-3 rounded-full transition-all duration-300"
                                :class="currentSlide === {{ $i }} ? 'bg-white scale-125' : 'bg-white/40 hover:bg-white/60'">
                        </button>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 🌟 Featured Collection Section --}}
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        {{-- Background Elements --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-pink-500/10 to-orange-500/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-4 mb-6">
                    <span class="text-4xl animate-bounce">⭐</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black">
                        <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                            {{ app()->getLocale() == 'ku' ? 'کۆڵەکشنی تایبەت' : 'Featured Collection' }}
                        </span>
                    </h2>
                    <span class="text-4xl animate-bounce" style="animation-delay: 0.5s;">✨</span>
                </div>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'باشترین و جوانترین بەرهەمەکانمان کە بۆ تۆ هەڵبژاردووین' : 'Our finest and most beautiful products carefully selected for you' }}
                </p>
            </div>

            {{-- Featured Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                @php
                    $featuredItems = [
                        [
                            'title' => app()->getLocale() == 'ku' ? '🌸 کۆڵەکشنی بەهار' : '🌸 Spring Collection',
                            'desc' => app()->getLocale() == 'ku' ? 'ڕەنگە جوانەکانی بەهار' : 'Beautiful spring colors',
                            'img' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=800&q=80',
                            'color' => 'from-pink-500 to-rose-500',
                            'count' => '150+'
                        ],
                        [
                            'title' => app()->getLocale() == 'ku' ? '👔 فۆرمال ستایل' : '👔 Formal Style',
                            'desc' => app()->getLocale() == 'ku' ? 'بۆ کار و مەراسیمەکان' : 'For work and ceremonies',
                            'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80',
                            'color' => 'from-blue-500 to-indigo-500',
                            'count' => '200+'
                        ],
                        [
                            'title' => app()->getLocale() == 'ku' ? '🏃‍♀️ وەرزشی مۆدێرن' : '🏃‍♀️ Modern Sports',
                            'desc' => app()->getLocale() == 'ku' ? 'ئاسودەیی و جوانی' : 'Comfort and beauty',
                            'img' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&q=80',
                            'color' => 'from-green-500 to-emerald-500',
                            'count' => '120+'
                        ]
                    ];
                @endphp

                @foreach($featuredItems as $index => $item)
                <div class="group relative">
                    {{-- Card Container --}}
                    <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        {{-- Background Gradient --}}
                        <div class="absolute inset-0 bg-gradient-to-br {{ $item['color'] }}/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        {{-- Content --}}
                        <div class="relative z-10">
                            {{-- Image --}}
                            <div class="aspect-video rounded-2xl overflow-hidden mb-6 relative">
                                <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                
                                {{-- Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                                
                                {{-- Count Badge --}}
                                <div class="absolute top-4 right-4">
                                    <div class="px-4 py-2 bg-white/90 backdrop-blur-sm rounded-full text-sm font-bold text-gray-800">
                                        {{ $item['count'] }} {{ app()->getLocale() == 'ku' ? 'بەرهەم' : 'Items' }}
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Text Content --}}
                            <h3 class="text-2xl font-bold mb-3 group-hover:bg-gradient-to-r group-hover:{{ $item['color'] }} group-hover:bg-clip-text group-hover:text-transparent transition-all duration-300">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                {{ $item['desc'] }}
                            </p>
                            
                            {{-- Action Button --}}
                            <button class="w-full py-4 bg-gradient-to-r {{ $item['color'] }} text-white font-bold rounded-2xl hover:shadow-lg hover:shadow-{{ explode('-', explode(' ', $item['color'])[1])[0] }}-500/30 transform hover:scale-105 transition-all duration-300">
                                <div class="flex items-center justify-center gap-3">
                                    <span>{{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'View Collection' }}</span>
                                    <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }}"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Stats Section --}}
            <div class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl p-8 md:p-12 text-center text-white">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    @php
                        $stats = [
                            ['icon' => '🛍️', 'number' => '500K+', 'label' => app()->getLocale() == 'ku' ? 'بەرهەم' : 'Products'],
                            ['icon' => '😍', 'number' => '100K+', 'label' => app()->getLocale() == 'ku' ? 'کڕیار' : 'Customers'], 
                            ['icon' => '⭐', 'number' => '4.9/5', 'label' => app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : 'Rating'],
                            ['icon' => '🚚', 'number' => '24h', 'label' => app()->getLocale() == 'ku' ? 'گەیاندن' : 'Delivery']
                        ];
                    @endphp

                    @foreach($stats as $stat)
                    <div class="text-center">
                        <div class="text-4xl mb-3 animate-bounce">{{ $stat['icon'] }}</div>
                        <div class="text-3xl md:text-4xl font-black mb-2">{{ $stat['number'] }}</div>
                        <div class="text-white/80 font-medium">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- 💎 ULTRA LUXURY CATEGORIES SECTION --}}
    <section class="py-32 bg-gradient-to-br from-white via-gray-50/50 to-blue-50/30 relative overflow-hidden">
        {{-- Magnificent Background --}}
        <div class="absolute inset-0">
            {{-- Floating Elements --}}
            <div class="absolute -top-60 -right-60 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-60 -left-60 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-cyan-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-gradient-to-br from-emerald-400/15 to-teal-400/15 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            
            {{-- Geometric Patterns --}}
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 25px 25px, rgba(147, 51, 234, 0.8) 2px, transparent 0), radial-gradient(circle at 75px 75px, rgba(236, 72, 153, 0.6) 1px, transparent 0); background-size: 100px 100px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            {{-- Ultra Premium Header --}}
            <div class="text-center mb-24">
                {{-- Floating Diamond Badge --}}
                <div class="relative inline-block mb-12">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 rounded-3xl blur-xl opacity-40 animate-pulse"></div>
                    <div class="relative px-10 py-6 bg-white/90 backdrop-blur-2xl rounded-3xl border border-white/50 shadow-2xl">
                        <div class="flex items-center gap-6">
                            <div class="relative">
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-white text-2xl animate-bounce transform rotate-12">
                                    💎
                                </div>
                                <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full flex items-center justify-center text-xs animate-ping">✨</div>
                            </div>
                            <span class="bg-gradient-to-r from-purple-700 via-pink-600 to-purple-700 bg-clip-text text-transparent font-black text-2xl tracking-wide">
                                {{ app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'التصنيفات' : 'CATEGORIES') }}
                            </span>
                            <div class="relative">
                                <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center text-white text-2xl animate-bounce transform -rotate-12" style="animation-delay: 0.3s;">
                                    👑
                                </div>
                                <div class="absolute -top-2 -left-2 w-6 h-6 bg-cyan-400 rounded-full flex items-center justify-center text-xs animate-ping" style="animation-delay: 0.5s;">⚡</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Mega Title --}}
                <h2 class="text-6xl lg:text-8xl xl:text-9xl font-black mb-12 leading-none">
                    <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-gradient">
                        {{ app()->getLocale() == 'ku' ? 'بەپێی چەشن' : (app()->getLocale() == 'ar' ? 'حسب الفئة' : 'BY CATEGORY') }}
                    </span>
                </h2>
                
                {{-- Premium Subtitle --}}
                <p class="text-2xl lg:text-3xl text-gray-600 mb-16 max-w-4xl mx-auto font-light leading-relaxed">
                    {{ app()->getLocale() == 'ku' ? 'هەزاران بەرهەمی لوکس و پریمیەم لە هەموو کەتەگۆریەکاندا' : (app()->getLocale() == 'ar' ? 'آلاف المنتجات الفاخرة والمميزة في جميع الفئات' : 'Thousands of luxury and premium products in all categories') }}
                </p>
            </div>

            {{-- Premium Categories Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                @php
                    $categories = [
                        [
                            'name' => app()->getLocale() == 'ku' ? 'پیاوان' : 'Men',
                            'count' => 7,
                            'icon' => '👔',
                            'color' => 'from-blue-600 via-indigo-600 to-purple-600',
                            'shadowColor' => 'blue',
                            'borderColor' => 'border-blue-200',
                            'route' => route('categories.show', 1)
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'ئافرەتان' : 'Women', 
                            'count' => 3,
                            'icon' => '👗',
                            'color' => 'from-pink-600 via-rose-600 to-red-600',
                            'shadowColor' => 'pink',
                            'borderColor' => 'border-pink-200',
                            'route' => route('categories.show', 2)
                        ]
                    ];
                @endphp
                
                @foreach($categories as $category)
                <div class="group relative">
                    {{-- Premium Glow Effect --}}
                    <div class="absolute -inset-4 bg-gradient-to-r {{ $category['color'] }}/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-70 transition-all duration-700"></div>
                    
                    {{-- Main Card --}}
                    <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl p-12 shadow-2xl hover:shadow-{{ $category['shadowColor'] }}-500/25 transition-all duration-700 transform hover:-translate-y-4 hover:scale-105 border-2 {{ $category['borderColor'] }}/50 hover:border-{{ $category['shadowColor'] }}-300 overflow-hidden">
                        
                        {{-- Background Pattern --}}
                        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 30px 30px, rgba(147, 51, 234, 0.4) 1px, transparent 0); background-size: 60px 60px;"></div>
                        
                        {{-- Floating Icon Background --}}
                        <div class="absolute -top-6 -right-6 text-8xl opacity-10 group-hover:opacity-20 transition-all duration-700 transform group-hover:rotate-12">
                            {{ $category['icon'] }}
                        </div>
                        
                        <div class="relative text-center">
                            {{-- Icon --}}
                            <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br {{ $category['color'] }} rounded-3xl mb-8 shadow-2xl transform group-hover:rotate-6 group-hover:scale-110 transition-all duration-500">
                                <span class="text-4xl">{{ $category['icon'] }}</span>
                            </div>
                            
                            {{-- Category Name --}}
                            <h3 class="text-4xl lg:text-5xl font-black mb-4">
                                <span class="bg-gradient-to-r {{ $category['color'] }} bg-clip-text text-transparent group-hover:animate-pulse">
                                    {{ $category['name'] }}
                                </span>
                            </h3>
                            
                            {{-- Product Count --}}
                            <div class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r {{ $category['color'] }}/10 rounded-2xl mb-8 border border-{{ $category['shadowColor'] }}-200/50">
                                <span class="text-3xl font-black bg-gradient-to-r {{ $category['color'] }} bg-clip-text text-transparent">{{ $category['count'] }}+</span>
                                <span class="text-lg text-gray-600 font-bold">{{ app()->getLocale() == 'ku' ? 'بەرهەمی پریمیەم' : 'Premium Products' }}</span>
                            </div>
                            
                            {{-- CTA Button --}}
                            <a href="{{ $category['route'] }}" 
                               class="inline-flex items-center gap-4 px-10 py-5 bg-gradient-to-r {{ $category['color'] }} text-white font-black rounded-2xl shadow-2xl hover:shadow-{{ $category['shadowColor'] }}-500/40 transform hover:-translate-y-1 hover:scale-105 transition-all duration-500 text-xl group-hover:animate-bounce">
                                <span>{{ app()->getLocale() == 'ku' ? 'گەران' : 'EXPLORE' }}</span>
                                <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Bottom CTA --}}
            <div class="text-center mt-20">
                <a href="{{ route('categories.index') }}" 
                   class="inline-flex items-center gap-6 px-12 py-6 bg-gradient-to-r from-gray-900 via-purple-900 to-indigo-900 text-white font-black rounded-full shadow-2xl hover:shadow-purple-500/30 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-2xl">
                    <span class="text-3xl animate-bounce">🔥</span>
                    <span>{{ app()->getLocale() == 'ku' ? 'هەموو کەتەگۆریەکان' : 'ALL CATEGORIES' }}</span>
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- 🛍️ FEATURED PRODUCTS SECTION --}}
    <section class="py-32 bg-gradient-to-br from-gray-900 via-indigo-900 to-purple-900 relative overflow-hidden">
        {{-- Background Effects --}}
        <div class="absolute inset-0">
            <div class="absolute -top-60 -left-60 w-96 h-96 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-60 -right-60 w-80 h-80 bg-gradient-to-br from-pink-500/30 to-purple-500/30 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/3 w-72 h-72 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            {{-- Header --}}
            <div class="text-center mb-20">
                <div class="relative inline-block mb-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500 rounded-full blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-12 py-6 bg-white/10 backdrop-blur-2xl rounded-full border border-white/20 shadow-2xl">
                        <div class="flex items-center gap-6">
                            <div class="text-4xl animate-bounce">🛍️</div>
                            <span class="text-white font-black text-3xl tracking-wider">
                                {{ app()->getLocale() == 'ku' ? 'بەرهەمە باشەکان' : 'FEATURED PRODUCTS' }}
                            </span>
                            <div class="text-4xl animate-bounce" style="animation-delay: 0.3s;">💫</div>
                        </div>
                    </div>
                </div>
                
                <h2 class="text-6xl lg:text-8xl font-black text-white mb-8 leading-tight">
                    {{ app()->getLocale() == 'ku' ? 'کۆلیکشنی جوان' : 'AMAZING COLLECTION' }}
                </h2>
                
                <p class="text-2xl text-white/90 mb-16 max-w-4xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'هەڵبژاردەی ناوازە لە باشترین بەرهەمەکان بە نرخی گونجاو' : 'Handpicked selection of premium products at amazing prices' }}
                </p>
            </div>
            
            {{-- Products Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
                @php
                    $featuredProducts = [
                        [
                            'name' => app()->getLocale() == 'ku' ? 'کراسی پیاوان' : 'Men\'s Shirt', 
                            'price' => '$89', 
                            'old' => '$129', 
                            'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600&q=80', 
                            'badge' => 'HOT',
                            'color' => 'from-red-500 to-pink-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'فستانی ئافرەتان' : 'Women\'s Dress', 
                            'price' => '$149', 
                            'old' => '$199', 
                            'img' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&q=80', 
                            'badge' => 'NEW',
                            'color' => 'from-green-500 to-emerald-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'پێڵاوی وەرزش' : 'Sports Shoes', 
                            'price' => '$179', 
                            'old' => '$249', 
                            'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&q=80', 
                            'badge' => 'SALE',
                            'color' => 'from-blue-500 to-cyan-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'جانتای لوکس' : 'Luxury Bag', 
                            'price' => '$299', 
                            'old' => '$399', 
                            'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&q=80', 
                            'badge' => 'PREMIUM',
                            'color' => 'from-purple-500 to-pink-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'کاتژمێری زیرەک' : 'Smart Watch', 
                            'price' => '$399', 
                            'old' => '$599', 
                            'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&q=80', 
                            'badge' => 'TRENDING',
                            'color' => 'from-orange-500 to-red-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'جاکێتی چەرم' : 'Leather Jacket', 
                            'price' => '$249', 
                            'old' => '$349', 
                            'img' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=600&q=80', 
                            'badge' => 'HOT',
                            'color' => 'from-gray-700 to-gray-900'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'عەینەکی مۆدێرن' : 'Modern Sunglasses', 
                            'price' => '$79', 
                            'old' => '$119', 
                            'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=600&q=80', 
                            'badge' => 'NEW',
                            'color' => 'from-yellow-500 to-orange-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'پشتبەستی چەرم' : 'Leather Belt', 
                            'price' => '$59', 
                            'old' => '$89', 
                            'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&q=80', 
                            'badge' => 'SALE',
                            'color' => 'from-amber-500 to-orange-600'
                        ]
                    ];
                @endphp

                @foreach($featuredProducts as $product)
                <div class="group relative">
                    {{-- Product Card --}}
                    <div class="bg-white/10 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/20 hover:border-white/40 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                        
                        {{-- Image Container --}}
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            {{-- Badge --}}
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-gradient-to-r {{ $product['color'] }} text-white text-xs font-black rounded-full">{{ $product['badge'] }}</span>
                            </div>
                            
                            {{-- Price Tag --}}
                            <div class="absolute top-4 right-4">
                                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-3 text-center min-w-[80px]">
                                    <div class="text-lg font-black text-gray-900">{{ $product['price'] }}</div>
                                    <div class="text-xs text-gray-500 line-through">{{ $product['old'] }}</div>
                                </div>
                            </div>
                            
                            {{-- Hover Overlay --}}
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                                <button class="px-6 py-3 bg-white text-gray-900 rounded-2xl font-bold transform -translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                    <i class="fa-solid fa-shopping-cart mr-2"></i>
                                    {{ app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : 'ADD TO CART' }}
                                </button>
                            </div>
                        </div>
                        
                        {{-- Product Info --}}
                        <div class="p-6 text-center">
                            <h4 class="text-xl font-bold text-white mb-2 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:{{ $product['color'] }} group-hover:bg-clip-text transition-all duration-300">
                                {{ $product['name'] }}
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- View All Button --}}
            <div class="text-center">
                <a href="{{ route('products.index') }}" class="inline-flex items-center gap-4 px-12 py-6 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500 text-white font-black rounded-full shadow-2xl hover:shadow-blue-500/40 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-xl">
                    <span>{{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان ببینە' : 'VIEW ALL PRODUCTS' }}</span>
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }}"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <script>
        // Enhanced Carousel Function
        function modernCarousel() {
            return {
                currentSlide: 0,
                totalSlides: 5,
                autoPlay: true,
                interval: null,

                init() {
                    this.startAutoPlay();
                },

                startAutoPlay() {
                    if (this.autoPlay) {
                        this.interval = setInterval(() => {
                            this.nextSlide();
                        }, 4000);
                    }
                },

                stopAutoPlay() {
                    if (this.interval) {
                        clearInterval(this.interval);
                    }
                },

                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                },

                prevSlide() {
                    this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
                },

                goToSlide(index) {
                    this.currentSlide = index;
                }
            }
        }
    </script>

</x-layouts.main>