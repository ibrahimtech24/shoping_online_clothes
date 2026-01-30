<x-layouts.main pd="false">
    {{-- ✨ PREMIUM ANNOUNCEMENT BAR --}}
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
    <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900" x-data="ultraHeroSlider()">
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
        <div class="relative flex items-center justify-center min-h-screen px-4">
            <div class="text-center max-w-7xl mx-auto">
                {{-- Premium Badge --}}
                <div class="relative inline-block mb-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full blur-xl opacity-50 animate-pulse"></div>
                    <div class="relative px-8 py-4 bg-white/10 backdrop-blur-2xl rounded-full border border-white/20 shadow-2xl">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-2xl animate-bounce-soft">
                                ✨
                            </div>
                            <span class="text-white font-black text-lg tracking-wider">{{ app()->getLocale() == 'ku' ? 'فرۆشگای پریمیەم' : (app()->getLocale() == 'ar' ? 'متجر بريميوم' : 'PREMIUM FASHION STORE') }}</span>
                            <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full flex items-center justify-center text-2xl animate-bounce-soft" style="animation-delay: 0.5s;">
                                👑
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Mega Title --}}
                <h1 class="text-5xl sm:text-6xl lg:text-8xl xl:text-9xl font-black mb-8 leading-none">
                    <span class="bg-gradient-to-r from-white via-purple-200 to-pink-200 bg-clip-text text-transparent animate-gradient">
                        {{ app()->getLocale() == 'ku' ? 'مۆدای لوکس' : (app()->getLocale() == 'ar' ? 'أزياء فاخرة' : 'LUXURY FASHION') }}
                    </span>
                    <br>
                    <span class="bg-gradient-to-r from-yellow-400 via-orange-400 to-red-400 bg-clip-text text-transparent animate-gradient" style="animation-delay: 0.5s;">
                        {{ app()->getLocale() == 'ku' ? 'نرخی باش' : (app()->getLocale() == 'ar' ? 'أسعار رائعة' : 'GREAT PRICES') }}
                    </span>
                </h1>
                
                {{-- Premium Subtitle --}}
                <p class="text-xl lg:text-3xl text-white/90 mb-12 max-w-4xl mx-auto leading-relaxed">
                    {{ app()->getLocale() == 'ku' ? 'بەرهەمی جیهانی، کوالیتی پریمیەم، نرخی نایابانە - تەنها لێرە!' : (app()->getLocale() == 'ar' ? 'منتجات عالمية، جودة بريميوم، أسعار لا تصدق - فقط هنا!' : 'Global products, premium quality, unbelievable prices - only here!') }}
                </p>
                
                {{-- Ultra CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="{{ route('products.index') }}" class="group relative overflow-hidden px-12 py-6 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 text-xl shadow-2xl hover:shadow-yellow-400/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500">
                        {{-- Button Shine Effect --}}
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-1000"></div>
                        <span class="relative flex items-center gap-3">
                            <span>{{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : (app()->getLocale() == 'ar' ? 'تسوق الآن' : 'SHOP NOW') }}</span>
                            <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-500">
                                <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }}"></i>
                            </div>
                        </span>
                    </a>
                    
                    <a href="{{ route('products.index') }}" class="group px-12 py-6 border-3 border-white text-white rounded-full font-bold text-xl hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm">
                        <span class="flex items-center gap-3">
                            <i class="fa-solid fa-play group-hover:scale-125 transition-transform"></i>
                            <span>{{ app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : (app()->getLocale() == 'ar' ? 'شاهد المجموعة' : 'VIEW COLLECTION') }}</span>
                        </span>
                    </a>
                </div>
                
                {{-- Stats Section --}}
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    @php
                        $stats = [
                            ['num' => '50K+', 'label' => app()->getLocale() == 'ku' ? 'کڕیاری دڵخۆش' : (app()->getLocale() == 'ar' ? 'عميل سعيد' : 'Happy Customers'), 'icon' => '😍'],
                            ['num' => '200K+', 'label' => app()->getLocale() == 'ku' ? 'بەرهەم فرۆشراوە' : (app()->getLocale() == 'ar' ? 'منتج مباع' : 'Products Sold'), 'icon' => '🛍️'],
                            ['num' => '99.9%', 'label' => app()->getLocale() == 'ku' ? 'ڕەزامەندی' : (app()->getLocale() == 'ar' ? 'رضا العملاء' : 'Satisfaction'), 'icon' => '⭐'],
                            ['num' => '24/7', 'label' => app()->getLocale() == 'ku' ? 'پشتگیری' : (app()->getLocale() == 'ar' ? 'الدعم' : 'Support'), 'icon' => '💬']
                        ];
                    @endphp
                    
                    @foreach($stats as $stat)
                    <div class="text-center group">
                        <div class="text-4xl mb-2 group-hover:scale-125 transition-transform">{{ $stat['icon'] }}</div>
                        <div class="text-3xl lg:text-4xl font-black text-white mb-2 group-hover:scale-110 transition-transform">{{ $stat['num'] }}</div>
                        <div class="text-white/70 font-medium">{{ $stat['label'] }}</div>
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

    <script>
        function ultraHeroSlider() {
            return {
                init() {
                    // Add any hero slider functionality if needed
                }
            }
        }
    </script>

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
                                {{ app()->getLocale() == 'ku' ? 'کەتەگۆریە لوکسەکان' : (app()->getLocale() == 'ar' ? 'الفئات الفاخرة' : 'LUXURY CATEGORIES') }}
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
                    
                    {{-- Premium Features --}}
                    <div class="flex flex-wrap justify-center items-center gap-8 text-base font-bold text-gray-500">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 text-lg">✓</div>
                            <span>{{ app()->getLocale() == 'ku' ? '100,000+ بەرهەمی پریمیەم' : (app()->getLocale() == 'ar' ? '100,000+ منتج بريميوم' : '100K+ Premium Products') }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 text-lg">⚡</div>
                            <span>{{ app()->getLocale() == 'ku' ? 'گەیاندنی لەسەر کات' : (app()->getLocale() == 'ar' ? 'توصيل في الوقت المحدد' : 'On-Time Delivery') }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 text-lg">🏆</div>
                            <span>{{ app()->getLocale() == 'ku' ? 'کوالیتی زۆر بەرز' : (app()->getLocale() == 'ar' ? 'جودة عالية جداً' : 'Ultra High Quality') }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600 text-lg">💝</div>
                            <span>{{ app()->getLocale() == 'ku' ? 'گەرەنتی تەواو' : (app()->getLocale() == 'ar' ? 'ضمان كامل' : 'Full Warranty') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Ultra Premium Categories Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @forelse($categories ?? [] as $category)
                    <div class="group relative">
                        <a href="{{ route('products.index', ['category' => $category->id]) }}" class="block">
                            {{-- Diamond Card Container --}}
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-purple-500/40 transition-all duration-700 border border-white/60 hover:border-purple-300/60 transform hover:-translate-y-6 hover:scale-105 hover:rotate-1">
                                
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
                                        <div class="absolute top-8 right-1/3 w-3 h-3 bg-yellow-300 rounded-full sparkle animate-ping opacity-80"></div>
                                        <div class="absolute bottom-24 left-1/3 w-2 h-2 bg-pink-300 rounded-full sparkle animate-ping opacity-60" style="animation-delay: 0.5s;"></div>
                                        <div class="absolute top-1/3 left-8 w-2 h-2 bg-purple-300 rounded-full sparkle animate-ping opacity-70" style="animation-delay: 1s;"></div>
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
                                            <div class="relative overflow-hidden inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 shadow-2xl hover:shadow-yellow-400/50">
                                                {{-- Button Shine --}}
                                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent transform -skew-x-12 translate-x-full group-hover:translate-x-0 transition-transform duration-1000"></div>
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
                            ['n' => app()->getLocale() == 'ku' ? 'جلی ژنانە لوکس' : (app()->getLocale() == 'ar' ? 'أزياء نسائية فاخرة' : 'Luxury Women'), 'icon' => 'fa-crown', 'img' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=800&q=80', 'count' => rand(100, 300), 'color' => 'from-pink-500 to-rose-500'],
                            ['n' => app()->getLocale() == 'ku' ? 'جلی پیاوانە پریمیەم' : (app()->getLocale() == 'ar' ? 'أزياء رجالية بريميوم' : 'Premium Men'), 'icon' => 'fa-gem', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80', 'count' => rand(120, 350), 'color' => 'from-blue-500 to-indigo-500'],
                            ['n' => app()->getLocale() == 'ku' ? 'پێڵاوی دیزاینەر' : (app()->getLocale() == 'ar' ? 'أحذية مصممة' : 'Designer Shoes'), 'icon' => 'fa-shoe-prints', 'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&q=80', 'count' => rand(80, 250), 'color' => 'from-green-500 to-emerald-500'],
                            ['n' => app()->getLocale() == 'ku' ? 'جانتای براند' : (app()->getLocale() == 'ar' ? 'حقائب ماركة' : 'Brand Bags'), 'icon' => 'fa-bag-shopping', 'img' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=800&q=80', 'count' => rand(60, 200), 'color' => 'from-purple-500 to-violet-500'],
                            ['n' => app()->getLocale() == 'ku' ? 'کاتژمێری لوکس' : (app()->getLocale() == 'ar' ? 'ساعات فاخرة' : 'Luxury Watches'), 'icon' => 'fa-clock', 'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&q=80', 'count' => rand(50, 180), 'color' => 'from-orange-500 to-amber-500'],
                            ['n' => app()->getLocale() == 'ku' ? 'ئاکسسواری پریمیەم' : (app()->getLocale() == 'ar' ? 'إكسسوارات بريميوم' : 'Premium Accessories'), 'icon' => 'fa-diamond', 'img' => 'https://images.unsplash.com/photo-1611652022419-a9419f74343d?w=800&q=80', 'count' => rand(90, 280), 'color' => 'from-cyan-500 to-teal-500'],
                        ];
                    @endphp
                    
                    @foreach($luxuryCats as $cat)
                    <div class="group relative">
                        <a href="{{ route('products.index') }}" class="block">
                            {{-- Diamond Card Container --}}
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-purple-500/40 transition-all duration-700 border border-white/60 hover:border-purple-300/60 transform hover:-translate-y-6 hover:scale-105 hover:rotate-1">
                                
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
                                        <div class="absolute top-8 right-1/3 w-3 h-3 bg-yellow-300 rounded-full sparkle animate-ping opacity-80"></div>
                                        <div class="absolute bottom-24 left-1/3 w-2 h-2 bg-pink-300 rounded-full sparkle animate-ping opacity-60" style="animation-delay: 0.5s;"></div>
                                        <div class="absolute top-1/3 left-8 w-2 h-2 bg-purple-300 rounded-full sparkle animate-ping opacity-70" style="animation-delay: 1s;"></div>
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
                                            {{ $cat['count'] }} {{ app()->getLocale() == 'ku' ? 'بەرهەمی پریمیەم' : (app()->getLocale() == 'ar' ? 'منتج بريميوم' : 'Premium Products') }}
                                        </p>
                                        
                                        {{-- Ultra CTA Button --}}
                                        <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                            <div class="relative overflow-hidden inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 shadow-2xl hover:shadow-yellow-400/50">
                                                {{-- Button Shine --}}
                                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent transform -skew-x-12 translate-x-full group-hover:translate-x-0 transition-transform duration-1000"></div>
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
                   class="group relative overflow-hidden inline-flex items-center gap-4 px-12 py-6 bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 text-white font-black rounded-full shadow-2xl hover:shadow-purple-500/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-xl">
                    {{-- Button Shine Effect --}}
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-1000"></div>
                    <span class="relative">{{ app()->getLocale() == 'ku' ? 'هەموو کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'جميع الفئات' : 'ALL CATEGORIES') }}</span>
                    <div class="relative w-10 h-10 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }} text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- 🔥 FLASH SALE SECTION --}}
    <section class="py-24 bg-gradient-to-br from-red-600 via-orange-600 to-yellow-600 relative overflow-hidden">
        {{-- Ultra Dynamic Background --}}
        <div class="absolute inset-0">
            <div class="absolute -top-32 -left-32 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-32 -right-32 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        </div>
        
        {{-- Animated Pattern --}}
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 30px 30px, rgba(255,255,255,0.6) 2px, transparent 0); background-size: 60px 60px; animation: pattern-move 20s linear infinite;"></div>
        
        <div class="container mx-auto px-4 relative">
            {{-- Mega Flash Header --}}
            <div class="text-center mb-16">
                {{-- Fire Badge --}}
                <div class="relative inline-block mb-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-500 rounded-full blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-12 py-6 bg-white/20 backdrop-blur-xl rounded-full border border-white/30 shadow-2xl">
                        <div class="flex items-center gap-6">
                            <div class="text-4xl animate-bounce">🔥</div>
                            <span class="text-white font-black text-3xl tracking-wider">
                                {{ app()->getLocale() == 'ku' ? 'ئۆفەری کاتی!' : (app()->getLocale() == 'ar' ? 'عرض محدود!' : 'FLASH SALE!') }}
                            </span>
                            <div class="text-4xl animate-bounce" style="animation-delay: 0.3s;">⚡</div>
                        </div>
                    </div>
                </div>
                
                {{-- Urgent Title --}}
                <h2 class="text-5xl lg:text-7xl font-black text-white mb-6 leading-tight drop-shadow-2xl">
                    {{ app()->getLocale() == 'ku' ? 'بەخۆڕایی بکڕە پێش تەواوبوونی کات!' : (app()->getLocale() == 'ar' ? 'اشترِ بسرعة قبل انتهاء الوقت!' : 'BUY FAST BEFORE TIME RUNS OUT!') }}
                </h2>
                
                {{-- Countdown Timer --}}
                <div class="flex justify-center items-center gap-4 lg:gap-8 mb-12" x-data="flashTimer()">
                    @php $timeUnits = [
                        ['key' => 'hours', 'label' => app()->getLocale() == 'ku' ? 'کات' : (app()->getLocale() == 'ar' ? 'ساعة' : 'Hours')],
                        ['key' => 'minutes', 'label' => app()->getLocale() == 'ku' ? 'خولەک' : (app()->getLocale() == 'ar' ? 'دقيقة' : 'Minutes')],
                        ['key' => 'seconds', 'label' => app()->getLocale() == 'ku' ? 'چرکە' : (app()->getLocale() == 'ar' ? 'ثانية' : 'Seconds')]
                    ]; @endphp
                    
                    @foreach($timeUnits as $unit)
                    <div class="text-center">
                        <div class="w-20 h-20 lg:w-28 lg:h-28 bg-white/20 backdrop-blur-xl rounded-3xl flex items-center justify-center border border-white/30 shadow-2xl mb-3">
                            <span x-text="{{ $unit['key'] }}" class="text-3xl lg:text-4xl font-black text-white">08</span>
                        </div>
                        <div class="text-white/90 font-bold text-sm lg:text-base">{{ $unit['label'] }}</div>
                    </div>
                    @if(!$loop->last)
                        <div class="text-white text-3xl lg:text-4xl font-black animate-pulse">:</div>
                    @endif
                    @endforeach
                </div>
                
                {{-- Ultra CTA --}}
                <a href="{{ route('products.index') }}" 
                   class="group relative overflow-hidden inline-flex items-center gap-4 px-16 py-6 bg-white text-red-600 font-black rounded-full shadow-2xl hover:shadow-white/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-2xl">
                    {{-- Button Animation --}}
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-red-100 to-transparent opacity-0 group-hover:opacity-100 transform -skew-x-12 group-hover:translate-x-full transition-all duration-1000"></div>
                    <span class="relative">{{ app()->getLocale() == 'ku' ? 'هەموو ببینە' : (app()->getLocale() == 'ar' ? 'شاهد الكل' : 'SHOP NOW') }}</span>
                    <div class="relative w-10 h-10 bg-red-100 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-bolt text-red-600 text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <script>
        function flashTimer() {
            return {
                hours: 8,
                minutes: 45,
                seconds: 30,
                
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

    {{-- And continue with other ultra-modern sections... --}}
    
</x-layouts.main>