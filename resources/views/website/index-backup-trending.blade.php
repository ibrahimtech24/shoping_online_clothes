<x-layouts.main pd="false">
    {{-- ✨ ULTRA PREMIUM ANNOUNCEMENT BAR --}}
    <div class="bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 py-3 overflow-hidden relative">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 animate-pulse opacity-20">
            <div class="h-full bg-gradient-to-r from-transparent via-white/10 to-transparent transform -skew-x-12"></div>
        </div>
        <div class="relative flex whitespace-nowrap animate-scroll">
            <div class="flex items-center gap-12 px-6">
                @for($i = 0; $i < 4; $i++)
                <div class="flex items-center gap-3 text-white font-bold text-sm tracking-wider">
                    <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white text-xs animate-bounce-soft">
                        🔥
                    </div>
                    <span>{{ app()->getLocale() == 'ku' ? 'داشکاندنی ٪۷۵ - تەنها ئەمڕۆ!' : (app()->getLocale() == 'ar' ? 'خصم ٧٥٪ - اليوم فقط!' : '75% OFF - TODAY ONLY!') }}</span>
                </div>
                <div class="flex items-center gap-3 text-white font-bold text-sm tracking-wider">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center text-white text-xs animate-bounce-soft" style="animation-delay: 0.3s;">
                        ⚡
                    </div>
                    <span>{{ app()->getLocale() == 'ku' ? 'گەیاندنی خۆڕایی + دیاری' : (app()->getLocale() == 'ar' ? 'شحن مجاني + هدية' : 'FREE SHIPPING + GIFT') }}</span>
                </div>
                <div class="flex items-center gap-3 text-white font-bold text-sm tracking-wider">
                    <div class="w-8 h-8 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full flex items-center justify-center text-white text-xs animate-bounce-soft" style="animation-delay: 0.6s;">
                        👑
                    </div>
                    <span>{{ app()->getLocale() == 'ku' ? 'کوالیتی لوکس + گەرەنتی' : (app()->getLocale() == 'ar' ? 'جودة فاخرة + ضمان' : 'LUXURY QUALITY + WARRANTY') }}</span>
                </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- 🌟 ULTRA PREMIUM HERO SECTION --}}
    <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900">
        {{-- Magnificent Background Effects --}}
        <div class="absolute inset-0">
            {{-- Animated Gradient Orbs --}}
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-gradient-to-br from-purple-500/40 to-pink-500/40 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-br from-cyan-500/40 to-blue-500/40 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/2 w-72 h-72 bg-gradient-to-br from-yellow-400/30 to-orange-500/30 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-gradient-to-br from-emerald-400/30 to-teal-500/30 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1.5s;"></div>
            
            {{-- Geometric Patterns --}}
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 50px 50px, rgba(255,255,255,0.4) 2px, transparent 0), radial-gradient(circle at 150px 150px, rgba(99,102,241,0.3) 1px, transparent 0); background-size: 200px 200px;"></div>
        </div>
        
        {{-- Ultra Modern Hero Content --}}
        <div class="relative flex items-center justify-center min-h-screen px-4" x-data="heroCarousel()">
            {{-- Hero Carousel --}}
            <div class="relative w-full max-w-7xl mx-auto overflow-hidden rounded-3xl">
                {{-- Carousel Container --}}
                <div class="relative h-[80vh] md:h-[90vh]">
                    @php
                        $heroSlides = [
                            [
                                'bg' => 'https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=1920&q=80',
                                'title' => app()->getLocale() == 'ku' ? 'مۆدای لوکس' : 'LUXURY FASHION',
                                'subtitle' => app()->getLocale() == 'ku' ? 'نرخی باش' : 'GREAT PRICES',
                                'desc' => app()->getLocale() == 'ku' ? 'بەرهەمی جیهانی، کوالیتی پریمیەم، نرخی نایابانە' : 'Global products, premium quality, unbelievable prices',
                                'color' => 'from-purple-900/80 to-pink-900/80'
                            ],
                            [
                                'bg' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1920&q=80',
                                'title' => app()->getLocale() == 'ku' ? 'کۆلیکشنی نوێ' : 'NEW COLLECTION',
                                'subtitle' => app()->getLocale() == 'ku' ? 'ستایلی مۆدێرن' : 'MODERN STYLE',
                                'desc' => app()->getLocale() == 'ku' ? 'تازەترین مۆدا و ستایلی جوان بۆ هەموو چەشنەکان' : 'Latest fashion and beautiful styles for all occasions',
                                'color' => 'from-blue-900/80 to-cyan-900/80'
                            ],
                            [
                                'bg' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1920&q=80',
                                'title' => app()->getLocale() == 'ku' ? 'داشکاندنی گەورە' : 'MEGA SALE',
                                'subtitle' => app()->getLocale() == 'ku' ? 'تا ٧٥٪ داشکاندن' : 'UP TO 75% OFF',
                                'desc' => app()->getLocale() == 'ku' ? 'باشترین ئۆفەرەکان لە هەموو بەرهەمەکاندا' : 'Best offers on all products',
                                'color' => 'from-orange-900/80 to-red-900/80'
                            ],
                            [
                                'bg' => 'https://images.unsplash.com/photo-1445205170230-053b83016050?w=1920&q=80',
                                'title' => app()->getLocale() == 'ku' ? 'ئاکسسواری لوکس' : 'LUXURY ACCESSORIES',
                                'subtitle' => app()->getLocale() == 'ku' ? 'کوالیتی بەرز' : 'HIGH QUALITY',
                                'desc' => app()->getLocale() == 'ku' ? 'ئاکسسواری جوان و لوکس بۆ تەواوکردنی ستایلەکەت' : 'Beautiful luxury accessories to complete your style',
                                'color' => 'from-emerald-900/80 to-teal-900/80'
                            ]
                        ];
                    @endphp
                    
                    {{-- Slides --}}
                    <div class="flex transition-transform duration-1000 ease-in-out h-full" :style="`transform: translateX(-${currentSlide * 100}%)`">
                        @foreach($heroSlides as $index => $slide)
                        <div class="w-full h-full flex-shrink-0 relative">
                            {{-- Background Image --}}
                            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $slide['bg'] }}')"></div>
                            
                            {{-- Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-r {{ $slide['color'] }}"></div>
                            
                            {{-- Animated Elements --}}
                            <div class="absolute inset-0">
                                <div class="absolute -top-40 -left-40 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-float-enhanced"></div>
                                <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
                                <div class="absolute top-1/3 left-1/2 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
                            </div>
                            
                            {{-- Content --}}
                            <div class="relative flex items-center justify-center h-full px-4">
                                <div class="text-center max-w-4xl mx-auto" :class="currentSlide === {{ $index }} ? 'animate-fade-in-up' : ''">
                                    {{-- Premium Badge --}}
                                    <div class="relative inline-block mb-8">
                                        <div class="absolute inset-0 bg-gradient-to-r from-white/30 to-white/10 rounded-full blur-xl opacity-50 animate-pulse"></div>
                                        <div class="relative px-8 py-4 bg-white/10 backdrop-blur-2xl rounded-full border border-white/20 shadow-2xl">
                                            <div class="flex items-center gap-4">
                                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-2xl animate-bounce-soft">
                                                    ✨
                                                </div>
                                                <span class="text-white font-black text-lg tracking-wider">{{ app()->getLocale() == 'ku' ? 'فرۆشگای پریمیەم' : 'PREMIUM STORE' }}</span>
                                                <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full flex items-center justify-center text-2xl animate-bounce-soft" style="animation-delay: 0.5s;">
                                                    👑
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Slide Title --}}
                                    <h1 class="text-5xl sm:text-6xl lg:text-8xl xl:text-9xl font-black mb-8 leading-none">
                                        <span class="bg-gradient-to-r from-white via-yellow-200 to-orange-200 bg-clip-text text-transparent animate-gradient">
                                            {{ $slide['title'] }}
                                        </span>
                                        <br>
                                        <span class="bg-gradient-to-r from-yellow-400 via-orange-400 to-red-400 bg-clip-text text-transparent animate-gradient" style="animation-delay: 0.5s;">
                                            {{ $slide['subtitle'] }}
                                        </span>
                                    </h1>
                                    
                                    {{-- Slide Description --}}
                                    <p class="text-xl lg:text-3xl text-white/90 mb-12 max-w-3xl mx-auto leading-relaxed">
                                        {{ $slide['desc'] }}
                                    </p>
                                    
                                    {{-- CTA Buttons --}}
                                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                                        <a href="{{ route('products.index') }}" class="group relative overflow-hidden px-12 py-6 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 text-xl shadow-2xl hover:shadow-yellow-400/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 ultra-button">
                                            <span class="relative flex items-center gap-3">
                                                <span>{{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW' }}</span>
                                                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-500">
                                                    <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }}"></i>
                                                </div>
                                            </span>
                                        </a>
                                        
                                        <a href="{{ route('products.index') }}" class="group px-12 py-6 border-3 border-white text-white rounded-full font-bold text-xl hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm">
                                            <span class="flex items-center gap-3">
                                                <i class="fa-solid fa-play group-hover:scale-125 transition-transform"></i>
                                                <span>{{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION' }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- Navigation Arrows --}}
                <button @click="prevSlide()" class="absolute left-6 top-1/2 -translate-y-1/2 w-16 h-16 bg-white/20 backdrop-blur-xl border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 hover:scale-110 transition-all duration-300 shadow-2xl z-10">
                    <i class="fa-solid fa-chevron-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'right' : 'left' }} text-2xl"></i>
                </button>
                
                <button @click="nextSlide()" class="absolute right-6 top-1/2 -translate-y-1/2 w-16 h-16 bg-white/20 backdrop-blur-xl border border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 hover:scale-110 transition-all duration-300 shadow-2xl z-10">
                    <i class="fa-solid fa-chevron-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-2xl"></i>
                </button>
                
                {{-- Dots Navigation --}}
                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-4 z-10">
                    <template x-for="(slide, index) in {{ count($heroSlides) }}" :key="index">
                        <button @click="currentSlide = index" 
                                class="w-4 h-4 rounded-full border-2 border-white/50 transition-all duration-300 hover:scale-125"
                                :class="currentSlide === index ? 'bg-white scale-125' : 'bg-white/30'">
                        </button>
                    </template>
                </div>
                
                {{-- Slide Counter --}}
                <div class="absolute top-8 right-8 px-6 py-3 bg-white/20 backdrop-blur-xl border border-white/30 rounded-full text-white font-bold z-10">
                    <span x-text="currentSlide + 1"></span> / <span>{{ count($heroSlides) }}</span>
                </div>
            </div>
            
            {{-- Stats Section Below Carousel --}}
            <div class="absolute bottom-20 left-1/2 -translate-x-1/2 w-full max-w-4xl">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 px-4">
                    @php
                        $stats = [
                            ['num' => '50K+', 'label' => app()->getLocale() == 'ku' ? 'کڕیاری دڵخۆش' : 'Happy Customers', 'icon' => '😍'],
                            ['num' => '200K+', 'label' => app()->getLocale() == 'ku' ? 'بەرهەم فرۆشراوە' : 'Products Sold', 'icon' => '🛍️'],
                            ['num' => '99.9%', 'label' => app()->getLocale() == 'ku' ? 'ڕەزامەندی' : 'Satisfaction', 'icon' => '⭐'],
                            ['num' => '24/7', 'label' => app()->getLocale() == 'ku' ? 'پشتگیری' : 'Support', 'icon' => '💬']
                        ];
                    @endphp
                    
                    @foreach($stats as $stat)
                    <div class="text-center group bg-white/10 backdrop-blur-xl rounded-2xl p-4 border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="text-3xl mb-2 group-hover:scale-125 transition-transform">{{ $stat['icon'] }}</div>
                        <div class="text-2xl lg:text-3xl font-black text-white mb-1 group-hover:scale-110 transition-transform">{{ $stat['num'] }}</div>
                        <div class="text-white/70 font-medium text-sm">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </section>

    {{-- 🎯 ULTRA MODERN TRENDING SECTION --}}
    <section class="py-32 bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M20 20c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm-15.5 5.5c0 2.485-2.015 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.015-4.5 4.5-4.5 4.5 2.015 4.5 4.5z\'/%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="container mx-auto px-4 relative">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div class="text-center lg:text-left text-white">
                    <div class="text-6xl mb-4">🔥</div>
                    <h3 class="text-4xl font-black mb-4">{{ app()->getLocale() == 'ku' ? 'ترێندینگ ئێستا' : (app()->getLocale() == 'ar' ? 'الأكثر رواجاً' : 'TRENDING NOW') }}</h3>
                    <p class="text-xl opacity-90 mb-6">{{ app()->getLocale() == 'ku' ? 'بەرهەمە گەرمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات الساخنة' : 'Hot Products') }}</p>
                    <a href="{{ route('products.index') }}" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-red-600 font-black rounded-full hover:bg-yellow-300 transition-all duration-300 shadow-2xl text-lg">
                        <span>{{ app()->getLocale() == 'ku' ? 'ببینە' : (app()->getLocale() == 'ar' ? 'شاهد' : 'VIEW ALL') }}</span>
                        <i class="fa-solid fa-fire"></i>
                    </a>
                </div>
                
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @php
                            $trendingProducts = [
                                ['img' => 'https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=300&q=80', 'badge' => '#1'],
                                ['img' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=300&q=80', 'badge' => '#2'],
                                ['img' => 'https://images.unsplash.com/photo-1529720317453-c8da503f2051?w=300&q=80', 'badge' => '#3'],
                                ['img' => 'https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?w=300&q=80', 'badge' => '#4']
                            ];
                        @endphp
                        
                        @foreach($trendingProducts as $item)
                        <div class="group relative">
                            <div class="aspect-square rounded-2xl overflow-hidden border-4 border-white/30 group-hover:border-white transition-all duration-300 transform group-hover:scale-105">
                                <img src="{{ $item['img'] }}" alt="Trending Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="absolute top-3 left-3 w-8 h-8 bg-yellow-400 text-black font-black text-sm rounded-full flex items-center justify-center">
                                {{ $item['badge'] }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 💎 ULTRA LUXURY CATEGORIES SECTION --}}
    <section class="py-32 bg-gradient-to-br from-white via-gray-50/50 to-blue-50/30 relative overflow-hidden">
        {{-- Magnificent Background --}}
        <div class="absolute inset-0">
            {{-- Floating Elements --}}
            <div class="absolute -top-60 -right-60 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-60 -left-60 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-cyan-400/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-gradient-to-br from-emerald-400/15 to-teal-400/15 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
            
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
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-white text-2xl animate-bounce-soft transform rotate-12">
                                    💎
                                </div>
                                <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full flex items-center justify-center text-xs animate-ping">✨</div>
                            </div>
                            <span class="bg-gradient-to-r from-purple-700 via-pink-600 to-purple-700 bg-clip-text text-transparent font-black text-2xl tracking-wide">
                                {{ app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'التصنيفات' : 'CATEGORIES') }}
                            </span>
                            <div class="relative">
                                <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center text-white text-2xl animate-bounce-soft transform -rotate-12" style="animation-delay: 0.3s;">
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
                    <br>
                    <span class="bg-gradient-to-r from-orange-400 via-yellow-400 to-red-400 bg-clip-text text-transparent animate-gradient" style="animation-delay: 0.5s;">
                        {{ app()->getLocale() == 'ku' ? 'بگەڕێ' : (app()->getLocale() == 'ar' ? 'تصفح' : 'BROWSE') }}
                    </span>
                </h2>
                
                {{-- Premium Subtitle --}}
                <div class="max-w-5xl mx-auto mb-16">
                    <p class="text-2xl lg:text-3xl text-gray-600 mb-8 leading-relaxed">
                        {{ app()->getLocale() == 'ku' ? 'هەزاران بەرهەمی لوکس و پریمیەم لە هەموو چەشنەکاندا' : (app()->getLocale() == 'ar' ? 'آلاف المنتجات الفاخرة والمتميزة في جميع الفئات' : 'Thousands of luxury and premium products in all categories') }}
                    </p>
                </div>
            </div>
            
            {{-- Ultra Premium Categories Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @forelse($categories ?? [] as $category)
                    <div class="group relative">
                        <a href="{{ route('products.index', ['category' => $category->id]) }}" class="block">
                            {{-- Diamond Card Container --}}
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-purple-500/40 transition-all duration-700 border border-white/60 hover:border-purple-300/60 transform hover:-translate-y-6 hover:scale-105 hover:rotate-1 ultra-card">
                                
                                {{-- Image Section --}}
                                <div class="relative h-80 overflow-hidden">
                                    @if($category->image)
                                        <img src="{{ asset('storage/' . $category->image) }}" 
                                             alt="{{ $category->name }}" 
                                             class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-1000">
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-purple-500 via-pink-500 to-orange-500 group-hover:scale-110 transition-transform duration-700"></div>
                                    @endif
                                    
                                    {{-- Ultra Gradient Overlay --}}
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent group-hover:from-black/70 transition-all duration-500"></div>
                                    
                                    {{-- Floating Elements --}}
                                    <div class="absolute inset-0">
                                        {{-- Premium Badge --}}
                                        <div class="absolute top-6 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'right-6' : 'left-6' }}">
                                            <div class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full shadow-xl">
                                                <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                                                <span class="text-sm font-black text-white">{{ $category->products_count ?? rand(50, 200) }}+</span>
                                            </div>
                                        </div>
                                        
                                        {{-- Luxury Icon --}}
                                        <div class="absolute top-6 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-6' : 'right-6' }}">
                                            <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-3xl flex items-center justify-center border border-white/30 transform group-hover:scale-125 group-hover:rotate-12 transition-all duration-700">
                                                <i class="fa-solid fa-crown text-white text-2xl"></i>
                                            </div>
                                        </div>
                                        
                                        {{-- Premium Sparkles --}}
                                        <div class="absolute top-8 right-1/3 w-3 h-3 bg-yellow-300 rounded-full ultra-sparkle opacity-80"></div>
                                        <div class="absolute bottom-24 left-1/3 w-2 h-2 bg-pink-300 rounded-full ultra-sparkle opacity-60"></div>
                                        <div class="absolute top-1/3 left-8 w-2 h-2 bg-purple-300 rounded-full ultra-sparkle opacity-70"></div>
                                    </div>
                                </div>
                                
                                {{-- Content Section --}}
                                <div class="absolute inset-0 flex flex-col justify-end p-8">
                                    <div class="text-center transform group-hover:scale-105 transition-transform duration-500">
                                        {{-- Category Title --}}
                                        <h3 class="text-3xl font-black text-white mb-3 drop-shadow-lg">
                                            {{ $category->name }}
                                        </h3>
                                        
                                        {{-- Product Count --}}
                                        <p class="text-white/90 text-base mb-6 drop-shadow">
                                            {{ $category->products_count ?? rand(50, 200) }} {{ app()->getLocale() == 'ku' ? 'بەرهەمی پریمیەم' : (app()->getLocale() == 'ar' ? 'منتج بريميوم' : 'Premium Products') }}
                                        </p>
                                        
                                        {{-- Ultra CTA Button --}}
                                        <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                            <div class="relative overflow-hidden inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 shadow-2xl hover:shadow-yellow-400/50 ultra-button">
                                                <span class="relative">{{ app()->getLocale() == 'ku' ? 'گەڕان' : (app()->getLocale() == 'ar' ? 'تصفح' : 'EXPLORE') }}</span>
                                                <div class="relative w-6 h-6 bg-white/20 rounded-full flex items-center justify-center">
                                                    <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Luxury Glow Border --}}
                                <div class="absolute inset-0 rounded-3xl ring-0 group-hover:ring-4 group-hover:ring-purple-400/40 transition-all duration-700"></div>
                            </div>
                            
                            {{-- External Glow Effect --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-700 -z-10"></div>
                        </a>
                    </div>
                @empty
                    {{-- Demo Categories --}}
                    @php
                        $luxuryCats = [
                            ['n' => app()->getLocale() == 'ku' ? 'پیاوان' : (app()->getLocale() == 'ar' ? 'رجالي' : 'Men'), 'icon' => 'fa-mars', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80', 'count' => rand(100, 300)],
                            ['n' => app()->getLocale() == 'ku' ? 'ئافرەتان' : (app()->getLocale() == 'ar' ? 'نسائي' : 'Women'), 'icon' => 'fa-venus', 'img' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=800&q=80', 'count' => rand(120, 350)],
                            ['n' => app()->getLocale() == 'ku' ? 'پێڵاو' : (app()->getLocale() == 'ar' ? 'أحذية' : 'Shoes'), 'icon' => 'fa-shoe-prints', 'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&q=80', 'count' => rand(80, 250)],
                            ['n' => app()->getLocale() == 'ku' ? 'جانتا' : (app()->getLocale() == 'ar' ? 'حقائب' : 'Bags'), 'icon' => 'fa-bag-shopping', 'img' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=800&q=80', 'count' => rand(60, 200)],
                            ['n' => app()->getLocale() == 'ku' ? 'کاتژمێر' : (app()->getLocale() == 'ar' ? 'ساعات' : 'Watches'), 'icon' => 'fa-clock', 'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&q=80', 'count' => rand(50, 180)],
                            ['n' => app()->getLocale() == 'ku' ? 'ئاکسسواری' : (app()->getLocale() == 'ar' ? 'إكسسوارات' : 'Accessories'), 'icon' => 'fa-diamond', 'img' => 'https://images.unsplash.com/photo-1611652022419-a9419f74343d?w=800&q=80', 'count' => rand(90, 280)],
                            ['n' => app()->getLocale() == 'ku' ? 'کەمەر' : (app()->getLocale() == 'ar' ? 'أحزمة' : 'Belts'), 'icon' => 'fa-belt', 'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=800&q=80', 'count' => rand(70, 220)],
                            ['n' => app()->getLocale() == 'ku' ? 'سونگلاس' : (app()->getLocale() == 'ar' ? 'نظارات' : 'Sunglasses'), 'icon' => 'fa-glasses', 'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=800&q=80', 'count' => rand(40, 160)],
                            ['n' => app()->getLocale() == 'ku' ? 'چاکەت' : (app()->getLocale() == 'ar' ? 'جاكيت' : 'Jackets'), 'icon' => 'fa-vest', 'img' => 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=800&q=80', 'count' => rand(90, 280)]
                        ];
                    @endphp
                    
                    @foreach($luxuryCats as $cat)
                    <div class="group relative">
                        <a href="{{ route('products.index') }}" class="block">
                            {{-- Diamond Card Container --}}
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-purple-500/40 transition-all duration-700 border border-white/60 hover:border-purple-300/60 transform hover:-translate-y-6 hover:scale-105 hover:rotate-1 ultra-card">
                                
                                {{-- Image Section --}}
                                <div class="relative h-80 overflow-hidden">
                                    <img src="{{ $cat['img'] }}" 
                                         alt="{{ $cat['n'] }}" 
                                         class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-1000">
                                    
                                    {{-- Ultra Gradient Overlay --}}
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent group-hover:from-black/70 transition-all duration-500"></div>
                                    
                                    {{-- Floating Elements --}}
                                    <div class="absolute inset-0">
                                        {{-- Premium Badge --}}
                                        <div class="absolute top-6 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'right-6' : 'left-6' }}">
                                            <div class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full shadow-xl">
                                                <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                                                <span class="text-sm font-black text-white">{{ $cat['count'] }}+</span>
                                            </div>
                                        </div>
                                        
                                        {{-- Luxury Icon --}}
                                        <div class="absolute top-6 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-6' : 'right-6' }}">
                                            <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-3xl flex items-center justify-center border border-white/30 transform group-hover:scale-125 group-hover:rotate-12 transition-all duration-700">
                                                <i class="fa-solid {{ $cat['icon'] }} text-white text-2xl"></i>
                                            </div>
                                        </div>
                                        
                                        {{-- Premium Sparkles --}}
                                        <div class="absolute top-8 right-1/3 w-3 h-3 bg-yellow-300 rounded-full ultra-sparkle opacity-80"></div>
                                        <div class="absolute bottom-24 left-1/3 w-2 h-2 bg-pink-300 rounded-full ultra-sparkle opacity-60"></div>
                                        <div class="absolute top-1/3 left-8 w-2 h-2 bg-purple-300 rounded-full ultra-sparkle opacity-70"></div>
                                    </div>
                                </div>
                                
                                {{-- Content Section --}}
                                <div class="absolute inset-0 flex flex-col justify-end p-8">
                                    <div class="text-center transform group-hover:scale-105 transition-transform duration-500">
                                        {{-- Category Title --}}
                                        <h3 class="text-3xl font-black text-white mb-3 drop-shadow-lg">
                                            {{ $cat['n'] }}
                                        </h3>
                                        
                                        {{-- Product Count --}}
                                        <p class="text-white/90 text-base mb-6 drop-shadow">
                                            {{ $cat['count'] }} {{ app()->getLocale() == 'ku' ? 'بەرهەمی جوان' : (app()->getLocale() == 'ar' ? 'منتج جميل' : 'Beautiful Products') }}
                                        </p>
                                        
                                        {{-- Ultra CTA Button --}}
                                        <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                            <div class="relative overflow-hidden inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 shadow-2xl hover:shadow-yellow-400/50 ultra-button">
                                                <span class="relative">{{ app()->getLocale() == 'ku' ? 'گەڕان' : (app()->getLocale() == 'ar' ? 'تصفح' : 'EXPLORE') }}</span>
                                                <div class="relative w-6 h-6 bg-white/20 rounded-full flex items-center justify-center">
                                                    <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Luxury Glow Border --}}
                                <div class="absolute inset-0 rounded-3xl ring-0 group-hover:ring-4 group-hover:ring-purple-400/40 transition-all duration-700"></div>
                            </div>
                            
                            {{-- External Glow Effect --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-700 -z-10"></div>
                        </a>
                    </div>
                    @endforeach
                @endforelse
            </div>
            
            {{-- Ultra View All Button --}}
            <div class="text-center mt-20">
                <a href="{{ route('products.index') }}" 
                   class="group relative overflow-hidden inline-flex items-center gap-4 px-16 py-6 bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 text-white font-black rounded-full shadow-2xl hover:shadow-purple-500/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-2xl ultra-button">
                    <span class="relative">{{ app()->getLocale() == 'ku' ? 'هەموو کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'جميع الفئات' : 'ALL CATEGORIES') }}</span>
                    <div class="relative w-10 h-10 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- �️ MEGA PRODUCTS SHOWCASE SECTION --}}
    <section class="py-32 bg-gradient-to-br from-gray-900 via-indigo-900 to-purple-900 relative overflow-hidden">
        {{-- Background Effects --}}
        <div class="absolute inset-0">
            <div class="absolute -top-60 -left-60 w-96 h-96 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-60 -right-60 w-80 h-80 bg-gradient-to-br from-pink-500/30 to-purple-500/30 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/3 w-72 h-72 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
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
                                {{ app()->getLocale() == 'ku' ? 'بەرهەمە باشەکان' : (app()->getLocale() == 'ar' ? 'أفضل المنتجات' : 'FEATURED PRODUCTS') }}
                            </span>
                            <div class="text-4xl animate-bounce" style="animation-delay: 0.3s;">💫</div>
                        </div>
                    </div>
                </div>
                
                <h2 class="text-6xl lg:text-8xl font-black text-white mb-8 leading-tight">
                    {{ app()->getLocale() == 'ku' ? 'کۆلیکشنی جوان' : (app()->getLocale() == 'ar' ? 'مجموعة رائعة' : 'AMAZING COLLECTION') }}
                </h2>
                
                <p class="text-2xl text-white/90 mb-16 max-w-4xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'هەڵبژاردەی ناوازە لە باشترین بەرهەمەکان بە نرخی گونجاو' : (app()->getLocale() == 'ar' ? 'مختارات مميزة من أفضل المنتجات بأسعار مناسبة' : 'Handpicked selection of premium products at amazing prices') }}
                </p>
            </div>
            
            {{-- Products Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
                @php
                    $featuredProducts = [
                        ['name' => app()->getLocale() == 'ku' ? 'کراسی پیاوان' : 'Men\'s Shirt', 'price' => '$89', 'old' => '$129', 'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600&q=80', 'hot' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'فستانی ئافرەتان' : 'Women\'s Dress', 'price' => '$149', 'old' => '$199', 'img' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&q=80', 'new' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'پێڵاوی وەرزش' : 'Sports Shoes', 'price' => '$179', 'old' => '$249', 'img' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=600&q=80', 'sale' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'جانتای دەست' : 'Luxury Bag', 'price' => '$299', 'old' => '$399', 'img' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=600&q=80', 'premium' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'کاتژمێری زیرەک' : 'Smart Watch', 'price' => '$399', 'old' => '$599', 'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&q=80', 'trending' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'چاکەتی چەرم' : 'Leather Jacket', 'price' => '$249', 'old' => '$349', 'img' => 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=600&q=80', 'hot' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'سونگلاسی مۆدێرن' : 'Modern Sunglasses', 'price' => '$79', 'old' => '$119', 'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=600&q=80', 'new' => true],
                        ['name' => app()->getLocale() == 'ku' ? 'کەمەری چەرم' : 'Leather Belt', 'price' => '$59', 'old' => '$89', 'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&q=80', 'sale' => true]
                    ];
                @endphp
                
                @foreach($featuredProducts as $product)
                <div class="group relative">
                    <div class="relative bg-white/10 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-cyan-500/40 transition-all duration-700 border border-white/20 hover:border-cyan-300/60 transform hover:-translate-y-6 hover:scale-105">
                        
                        {{-- Product Image --}}
                        <div class="relative h-80 overflow-hidden">
                            <img src="{{ $product['img'] }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-1000">
                            
                            {{-- Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent group-hover:from-black/60 transition-all duration-500"></div>
                            
                            {{-- Badge --}}
                            <div class="absolute top-4 left-4">
                                @if(isset($product['hot']))
                                <span class="px-3 py-1 bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-black rounded-full">HOT</span>
                                @elseif(isset($product['new']))
                                <span class="px-3 py-1 bg-gradient-to-r from-green-500 to-emerald-500 text-white text-sm font-black rounded-full">NEW</span>
                                @elseif(isset($product['sale']))
                                <span class="px-3 py-1 bg-gradient-to-r from-orange-500 to-yellow-500 text-white text-sm font-black rounded-full">SALE</span>
                                @elseif(isset($product['premium']))
                                <span class="px-3 py-1 bg-gradient-to-r from-purple-500 to-pink-500 text-white text-sm font-black rounded-full">PREMIUM</span>
                                @else
                                <span class="px-3 py-1 bg-gradient-to-r from-blue-500 to-cyan-500 text-white text-sm font-black rounded-full">TRENDING</span>
                                @endif
                            </div>
                            
                            {{-- Heart Icon --}}
                            <div class="absolute top-4 right-4">
                                <div class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30 hover:bg-red-500 hover:scale-110 transition-all duration-300 cursor-pointer">
                                    <i class="fa-solid fa-heart text-white"></i>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Content --}}
                        <div class="p-6">
                            <div class="absolute bottom-6 left-6 right-6">
                                <h3 class="text-xl font-black text-white mb-2">{{ $product['name'] }}</h3>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-3">
                                        <span class="text-gray-400 line-through text-lg">{{ $product['old'] }}</span>
                                        <span class="text-2xl font-black text-cyan-400">{{ $product['price'] }}</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                                        @endfor
                                    </div>
                                </div>
                                
                                {{-- Add to Cart Button --}}
                                <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                    <button class="w-full px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-black rounded-2xl shadow-xl hover:shadow-cyan-500/50 transition-all duration-300 text-sm">
                                        <i class="fa-solid fa-cart-plus mr-2"></i>
                                        {{ app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف للسلة' : 'ADD TO CART') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Glow Effect --}}
                        <div class="absolute inset-0 rounded-3xl ring-0 group-hover:ring-4 group-hover:ring-cyan-400/40 transition-all duration-700"></div>
                    </div>
                    
                    {{-- External Glow --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-700 -z-10"></div>
                </div>
                @endforeach
            </div>
            
            {{-- View All Button --}}
            <div class="text-center">
                <a href="{{ route('products.index') }}" 
                   class="group relative overflow-hidden inline-flex items-center gap-4 px-16 py-6 bg-gradient-to-r from-cyan-600 via-blue-600 to-purple-600 text-white font-black rounded-full shadow-2xl hover:shadow-cyan-500/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-2xl ultra-button">
                    <span class="relative">{{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'VIEW ALL PRODUCTS') }}</span>
                    <div class="relative w-10 h-10 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- 🎨 BRAND SHOWCASE SECTION --}}
    <section class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30" style="background-image: url('data:image/svg+xml,%3Csvg width=\'80\' height=\'80\' viewBox=\'0 0 80 80\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.3\'%3E%3Cpath d=\'m0 80l40-40-40-40v80zm40 0l40-40-40-40v80zm-40-40l40-40-40-40v80z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-16">
                <h3 class="text-4xl lg:text-5xl font-black text-white mb-6">
                    {{ app()->getLocale() == 'ku' ? 'برانده نامدارەکان' : (app()->getLocale() == 'ar' ? 'العلامات المشهورة' : 'FAMOUS BRANDS') }}
                </h3>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'لەگەڵ باشترین برانده جیهانیەکان کاردەکەین' : (app()->getLocale() == 'ar' ? 'نعمل مع أفضل العلامات التجارية العالمية' : 'We work with the world\'s best brands') }}
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                @php
                    $brands = [
                        ['name' => 'Nike', 'logo' => '🏃‍♂️'],
                        ['name' => 'Adidas', 'logo' => '⚽'],
                        ['name' => 'Puma', 'logo' => '🐆'],
                        ['name' => 'Gucci', 'logo' => '👑'],
                        ['name' => 'Zara', 'logo' => '👗'],
                        ['name' => 'H&M', 'logo' => '👔']
                    ];
                @endphp
                
                @foreach($brands as $brand)
                <div class="group relative">
                    <div class="aspect-square bg-white/20 backdrop-blur-xl rounded-3xl flex flex-col items-center justify-center border border-white/30 hover:border-white/60 hover:bg-white/30 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                        <div class="text-5xl mb-4 group-hover:scale-125 transition-transform duration-300">{{ $brand['logo'] }}</div>
                        <h4 class="text-white font-black text-lg">{{ $brand['name'] }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- �🔥 ULTRA FLASH SALE SECTION --}}
    <section class="py-32 bg-gradient-to-br from-red-600 via-orange-600 to-yellow-600 relative overflow-hidden">
        {{-- Ultra Dynamic Background --}}
        <div class="absolute inset-0">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        </div>
        
        {{-- Animated Pattern --}}
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 30px 30px, rgba(255,255,255,0.6) 2px, transparent 0); background-size: 60px 60px; animation: pattern-move 20s linear infinite;"></div>
        
        <div class="container mx-auto px-4 relative">
            {{-- Mega Flash Header --}}
            <div class="text-center mb-20">
                {{-- Fire Badge --}}
                <div class="relative inline-block mb-12">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-500 rounded-full blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-16 py-8 bg-white/20 backdrop-blur-xl rounded-full border border-white/30 shadow-2xl">
                        <div class="flex items-center gap-8">
                            <div class="text-6xl animate-bounce">🔥</div>
                            <span class="text-white font-black text-4xl tracking-wider">
                                {{ app()->getLocale() == 'ku' ? 'ئۆفەری کاتی!' : (app()->getLocale() == 'ar' ? 'عرض محدود!' : 'FLASH SALE!') }}
                            </span>
                            <div class="text-6xl animate-bounce" style="animation-delay: 0.3s;">⚡</div>
                        </div>
                    </div>
                </div>
                
                {{-- Urgent Title --}}
                <h2 class="text-6xl lg:text-8xl font-black text-white mb-8 leading-tight drop-shadow-2xl">
                    {{ app()->getLocale() == 'ku' ? 'بەخۆڕایی بکڕە!' : (app()->getLocale() == 'ar' ? 'اشترِ بسرعة!' : 'BUY FAST!') }}
                </h2>
                
                <p class="text-2xl text-white/90 mb-12 max-w-4xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'پێش تەواوبوونی کات!' : (app()->getLocale() == 'ar' ? 'قبل انتهاء الوقت!' : 'BEFORE TIME RUNS OUT!') }}
                </p>
                
                {{-- Countdown Timer --}}
                <div class="flex justify-center items-center gap-6 mb-16" x-data="flashTimer()">
                    @php $timeUnits = [
                        ['key' => 'hours', 'label' => app()->getLocale() == 'ku' ? 'کات' : (app()->getLocale() == 'ar' ? 'ساعة' : 'Hours'), 'value' => '08'],
                        ['key' => 'minutes', 'label' => app()->getLocale() == 'ku' ? 'خولەک' : (app()->getLocale() == 'ar' ? 'دقيقة' : 'Minutes'), 'value' => '45'],
                        ['key' => 'seconds', 'label' => app()->getLocale() == 'ku' ? 'چرکە' : (app()->getLocale() == 'ar' ? 'ثانية' : 'Seconds'), 'value' => '10']
                    ]; @endphp
                    
                    @foreach($timeUnits as $unit)
                    <div class="text-center">
                        <div class="w-28 h-28 lg:w-32 lg:h-32 bg-white/20 backdrop-blur-xl rounded-3xl flex items-center justify-center border border-white/30 shadow-2xl mb-4 ultra-hover-transform">
                            <span x-text="{{ $unit['key'] }}" class="text-4xl lg:text-5xl font-black text-white">{{ $unit['value'] }}</span>
                        </div>
                        <div class="text-white/90 font-bold text-lg">{{ $unit['label'] }}</div>
                    </div>
                    @if(!$loop->last)
                        <div class="text-white text-4xl lg:text-5xl font-black animate-pulse">:</div>
                    @endif
                    @endforeach
                </div>
                
                {{-- Ultra CTA --}}
                <a href="{{ route('products.index') }}" 
                   class="group relative overflow-hidden inline-flex items-center gap-6 px-20 py-8 bg-white text-red-600 font-black rounded-full shadow-2xl hover:shadow-white/50 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 text-3xl ultra-button">
                    <span class="relative">{{ app()->getLocale() == 'ku' ? 'هەموو ببینە' : (app()->getLocale() == 'ar' ? 'شاهد الكل' : 'SHOP NOW') }}</span>
                    <div class="relative w-12 h-12 bg-red-100 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-bolt text-red-600 text-xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- 📱 MOBILE APP DOWNLOAD SECTION --}}
    <section class="py-32 bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Content --}}
                <div class="text-white">
                    <div class="relative inline-block mb-8">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/30 to-white/10 rounded-3xl blur-xl"></div>
                        <div class="relative px-8 py-4 bg-white/20 backdrop-blur-xl rounded-3xl border border-white/30 shadow-2xl">
                            <div class="flex items-center gap-4">
                                <div class="text-3xl">📱</div>
                                <span class="font-black text-xl">
                                    {{ app()->getLocale() == 'ku' ? 'ئەپلیکەیشنی مۆبایل' : (app()->getLocale() == 'ar' ? 'تطبيق الموبايل' : 'MOBILE APP') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-5xl lg:text-6xl font-black mb-8 leading-tight">
                        {{ app()->getLocale() == 'ku' ? 'کڕین لە هەر شوێنێک' : (app()->getLocale() == 'ar' ? 'تسوق من أي مكان' : 'SHOP ANYWHERE') }}
                    </h2>
                    
                    <p class="text-2xl text-white/90 mb-12 leading-relaxed">
                        {{ app()->getLocale() == 'ku' ? 'ئەپلیکەیشنەکەمان داونلۆد بکە و کڕینت ئاسانتر بکە' : (app()->getLocale() == 'ar' ? 'حمل تطبيقنا واجعل التسوق أسهل' : 'Download our app and make shopping easier') }}
                    </p>
                    
                    {{-- Features --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        @php
                            $features = [
                                ['icon' => '🚀', 'title' => app()->getLocale() == 'ku' ? 'خێرای کڕین' : 'Fast Shopping'],
                                ['icon' => '🎁', 'title' => app()->getLocale() == 'ku' ? 'ئۆفەری تایبەت' : 'Special Offers'],
                                ['icon' => '📦', 'title' => app()->getLocale() == 'ku' ? 'شوێنکەوتنی بارگرتن' : 'Order Tracking'],
                                ['icon' => '💳', 'title' => app()->getLocale() == 'ku' ? 'پارەدانی ئاسان' : 'Easy Payment']
                            ];
                        @endphp
                        
                        @foreach($features as $feature)
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl">
                                {{ $feature['icon'] }}
                            </div>
                            <span class="text-lg font-bold">{{ $feature['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    
                    {{-- Download Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="group inline-flex items-center gap-4 px-8 py-4 bg-black text-white font-bold rounded-2xl hover:bg-gray-800 transition-all duration-300 shadow-2xl text-lg">
                            <div class="text-3xl">🍎</div>
                            <div>
                                <div class="text-sm opacity-80">Download on the</div>
                                <div class="text-xl font-black">App Store</div>
                            </div>
                        </a>
                        
                        <a href="#" class="group inline-flex items-center gap-4 px-8 py-4 bg-black text-white font-bold rounded-2xl hover:bg-gray-800 transition-all duration-300 shadow-2xl text-lg">
                            <div class="text-3xl">🤖</div>
                            <div>
                                <div class="text-sm opacity-80">Get it on</div>
                                <div class="text-xl font-black">Google Play</div>
                            </div>
                        </a>
                    </div>
                </div>
                
                {{-- Phone Mockup --}}
                <div class="relative">
                    <div class="relative mx-auto w-80 h-96 bg-gradient-to-br from-gray-800 to-black rounded-[3rem] p-4 shadow-2xl">
                        <div class="w-full h-full bg-gradient-to-br from-purple-600 via-pink-600 to-red-600 rounded-[2rem] overflow-hidden relative">
                            {{-- Screen Content --}}
                            <div class="p-6 text-white">
                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-black mb-2">{{ app()->getLocale() == 'ku' ? 'کورد شۆپ' : 'Kurd Shop' }}</h3>
                                    <p class="text-sm opacity-80">{{ app()->getLocale() == 'ku' ? 'فرۆشگای پریمیەم' : 'Premium Store' }}</p>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    @for($i = 1; $i <= 4; $i++)
                                    <div class="aspect-square bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                                        <div class="text-2xl">
                                            @if($i == 1) 👔
                                            @elseif($i == 2) 👗
                                            @elseif($i == 3) 👟
                                            @else 👜
                                            @endif
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Floating Elements --}}
                    <div class="absolute -top-8 -left-8 w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center text-2xl animate-bounce">
                        ⚡
                    </div>
                    <div class="absolute -bottom-8 -right-8 w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center text-2xl animate-bounce" style="animation-delay: 0.5s;">
                        🎁
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 📧 NEWSLETTER SECTION --}}
    <section class="py-32 bg-gradient-to-br from-gray-900 via-purple-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute -top-60 -left-60 w-96 h-96 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-60 -right-60 w-80 h-80 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/3 w-72 h-72 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                {{-- Newsletter Badge --}}
                <div class="relative inline-block mb-12">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-cyan-600 rounded-3xl blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-12 py-6 bg-white/10 backdrop-blur-2xl rounded-3xl border border-white/20 shadow-2xl">
                        <div class="flex items-center gap-6">
                            <div class="text-4xl animate-bounce">📧</div>
                            <span class="text-white font-black text-2xl">
                                {{ app()->getLocale() == 'ku' ? 'بەشداری بکە' : (app()->getLocale() == 'ar' ? 'انضم إلينا' : 'JOIN US') }}
                            </span>
                            <div class="text-4xl animate-bounce" style="animation-delay: 0.3s;">🎁</div>
                        </div>
                    </div>
                </div>
                
                {{-- Title --}}
                <h2 class="text-6xl lg:text-7xl font-black text-white mb-8 leading-tight">
                    {{ app()->getLocale() == 'ku' ? 'ئاگادارکردنەوە' : (app()->getLocale() == 'ar' ? 'كن مطلعاً' : 'STAY UPDATED') }}
                </h2>
                
                {{-- Subtitle --}}
                <p class="text-2xl text-white/90 mb-12 leading-relaxed">
                    {{ app()->getLocale() == 'ku' ? 'بەشداری لە نیوزلەتەرەکەمان بکە و ١٥٪ داشکاندن وەربگرە' : (app()->getLocale() == 'ar' ? 'اشترك في نشرتنا الإخبارية واحصل على خصم ١٥٪' : 'Subscribe to our newsletter and get 15% discount') }}
                </p>
                
                {{-- Newsletter Form --}}
                <div class="relative max-w-2xl mx-auto mb-16" x-data="{ email: '', subscribed: false }">
                    <form @submit.prevent="subscribed = true" class="relative">
                        <div class="relative group">
                            <input x-model="email" 
                                   type="email" 
                                   required 
                                   placeholder="{{ app()->getLocale() == 'ku' ? 'ئیمەیلەکەت بنووسە...' : (app()->getLocale() == 'ar' ? 'اكتب بريدك الإلكتروني...' : 'Enter your email address...') }}"
                                   class="w-full px-8 py-6 pr-48 bg-white/20 backdrop-blur-xl border border-white/30 rounded-full text-white text-xl placeholder-white/70 focus:outline-none focus:ring-4 focus:ring-white/40 transition-all duration-500 ultra-hover-transform">
                            
                            <button type="submit" 
                                    class="absolute {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-2' : 'right-2' }} top-2 bottom-2 px-8 bg-gradient-to-r from-yellow-400 to-orange-500 text-gray-900 font-black rounded-full hover:shadow-2xl hover:shadow-yellow-400/50 transition-all duration-300 text-lg ultra-button">
                                {{ app()->getLocale() == 'ku' ? 'ناردن' : (app()->getLocale() == 'ar' ? 'إرسال' : 'SUBSCRIBE') }}
                            </button>
                        </div>
                    </form>
                    
                    {{-- Success Message --}}
                    <div x-show="subscribed" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         class="absolute inset-0 bg-white/20 backdrop-blur-xl rounded-full flex items-center justify-center border border-white/30">
                        <div class="flex items-center gap-4 text-white">
                            <div class="text-3xl">✅</div>
                            <span class="text-xl font-bold">{{ app()->getLocale() == 'ku' ? 'سەرکەوتوو بوو!' : (app()->getLocale() == 'ar' ? 'تم بنجاح!' : 'Successfully subscribed!') }}</span>
                        </div>
                    </div>
                </div>
                
                {{-- Trust Badges --}}
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-80">
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved text-xl"></i>
                        </div>
                        <span class="font-bold">{{ app()->getLocale() == 'ku' ? 'پارێزراو' : (app()->getLocale() == 'ar' ? 'آمن' : 'Secure') }}</span>
                    </div>
                    
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-gift text-xl"></i>
                        </div>
                        <span class="font-bold">{{ app()->getLocale() == 'ku' ? 'دیاری خۆڕایی' : (app()->getLocale() == 'ar' ? 'هدايا مجانية' : 'Free Gifts') }}</span>
                    </div>
                    
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-crown text-xl"></i>
                        </div>
                        <span class="font-bold">{{ app()->getLocale() == 'ku' ? 'ئەندامی VIP' : (app()->getLocale() == 'ar' ? 'عضوية VIP' : 'VIP Access') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Hero Carousel Function
        function heroCarousel() {
            return {
                currentSlide: 0,
                totalSlides: 4,
                autoPlay: true,
                interval: null,
                
                init() {
                    if (this.autoPlay) {
                        this.startAutoPlay();
                    }
                    
                    // Pause auto-play on hover
                    this.$el.addEventListener('mouseenter', () => {
                        this.stopAutoPlay();
                    });
                    
                    this.$el.addEventListener('mouseleave', () => {
                        if (this.autoPlay) {
                            this.startAutoPlay();
                        }
                    });
                },
                
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                },
                
                prevSlide() {
                    this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
                },
                
                goToSlide(index) {
                    this.currentSlide = index;
                },
                
                startAutoPlay() {
                    this.interval = setInterval(() => {
                        this.nextSlide();
                    }, 5000);
                },
                
                stopAutoPlay() {
                    if (this.interval) {
                        clearInterval(this.interval);
                        this.interval = null;
                    }
                }
            }
        }
        
        // Flash Timer Function
        function flashTimer() {
            return {
                hours: 8,
                minutes: 45,
                seconds: 10,
                
                init() {
                    setInterval(() => {
                        if (this.seconds > 0) {
                            this.seconds--;
                        } else if (this.minutes > 0) {
                            this.minutes--;
                            this.seconds = 59;
                        } else if (this.hours > 0) {
                            this.hours--;
                            this.minutes = 59;
                            this.seconds = 59;
                        }
                    }, 1000);
                }
            }
        }
    </script>
    
</x-layouts.main>
