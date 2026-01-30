@props(['pd' => 'true'])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ app()->getLocale() == 'ku' ? 'کورد مارکەت - فرۆشگای مۆدا. جلوبەرگی تایبەت و ئاکسیسۆری بدۆزەرەوە.' : (app()->getLocale() == 'ar' ? 'كورد ماركت - متجر الأزياء. اعثر على ملابس وإكسسوارات مميزة.' : 'Kurd Market - Fashion Shop. Find special clothes and accessories.') }}">
    <meta name="keywords" content="{{ app()->getLocale() == 'ku' ? 'جلوبەرگ، مۆدا، کڕین، فرۆشگا، کوردستان، جلی ژنانە، جلی پیاوانە' : (app()->getLocale() == 'ar' ? 'ملابس، أزياء، تسوق، متجر، كوردستان، ملابس نسائية، ملابس رجالية' : 'clothing, fashion, shopping, store, Kurdistan, women clothing, men clothing') }}">
    <meta name="author" content="Kurd Market">
    <meta name="robots" content="index, follow">
    
    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ app()->getLocale() == 'ku' ? 'کورد مارکەت - فرۆشگای مۆدا' : (app()->getLocale() == 'ar' ? 'كورد ماركت - متجر الأزياء' : 'Kurd Market - Fashion Store') }}">
    <meta property="og:description" content="{{ app()->getLocale() == 'ku' ? 'جلوبەرگی تایبەت و ئاکسیسۆری بدۆزەرەوە بە باشترین نرخ' : (app()->getLocale() == 'ar' ? 'اعثر على ملابس وإكسسوارات مميزة بأفضل الأسعار' : 'Find special clothes and accessories at the best prices') }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    
    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ app()->getLocale() == 'ku' ? 'کورد مارکەت - فرۆشگای مۆدا' : (app()->getLocale() == 'ar' ? 'كورد ماركت - متجر الأزياء' : 'Kurd Market - Fashion Store') }}">
    <meta property="twitter:description" content="{{ app()->getLocale() == 'ku' ? 'جلوبەرگی تایبەت و ئاکسیسۆری بدۆزەرەوە' : (app()->getLocale() == 'ar' ? 'اعثر على ملابس وإكسسوارات مميزة' : 'Find special clothes and accessories') }}">
    
    {{-- Theme Color --}}
    <meta name="theme-color" content="#9333ea">
    <meta name="msapplication-TileColor" content="#9333ea">
    
    <title>@yield('title', app()->getLocale() == 'ku' ? 'کورد مارکەت' : (app()->getLocale() == 'ar' ? 'كورد ماركت' : 'Kurd Market'))</title>
    
    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    
    {{-- Icons --}}
    <script src="https://kit.fontawesome.com/3a78b9f26f.js" crossorigin="anonymous" defer></script>
    
    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    @vite('resources/css/app.css')
    
    <style>
        [x-cloak] { display: none !important; }
        body { 
            direction: {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'rtl' : 'ltr' }};
            font-family: 'Noto Sans Arabic', 'Poppins', sans-serif;
        }
        
        * {
            font-family: 'Noto Sans Arabic', 'Poppins', sans-serif;
        }
        
        /* Smooth animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
        
        /* Scroll animation */
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-scroll { animation: scroll 25s linear infinite; }
        
        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        
        /* Glow pulse */
        @keyframes glow-pulse {
            0%, 100% { box-shadow: 0 0 20px rgba(139, 92, 246, 0.5); }
            50% { box-shadow: 0 0 40px rgba(139, 92, 246, 0.8), 0 0 60px rgba(236, 72, 153, 0.4); }
        }
        .animate-glow { animation: glow-pulse 3s ease-in-out infinite; }
        
        /* Scale in animation */
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-scale-in { animation: scaleIn 0.5s ease-out forwards; }
        
        /* Slide in from left */
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .animate-slide-left { animation: slideInLeft 0.6s ease-out forwards; }
        
        /* Slide in from right */
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .animate-slide-right { animation: slideInRight 0.6s ease-out forwards; }
        
        /* Gradient text animation */
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gradient-text {
            background-size: 200% auto;
            animation: gradient-shift 4s ease infinite;
        }
        
        /* Shimmer effect */
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        .animate-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
        
        /* Bounce soft */
        @keyframes bounce-soft {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-bounce-soft { animation: bounce-soft 2s ease-in-out infinite; }
        
        /* Rotate animation */
        @keyframes rotate-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-rotate-slow { animation: rotate-slow 20s linear infinite; }
        
        /* RTL scroll animation */
        @keyframes scroll-rtl {
            0% { transform: translateX(0); }
            100% { transform: translateX(50%); }
        }
        [dir="rtl"] .animate-scroll { animation: scroll-rtl 25s linear infinite; }
        
        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-strong {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Text Gradient */
        .text-gradient-cyan {
            background: linear-gradient(135deg, #06b6d4, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
    
    {{-- Countdown Timer Function --}}
    <script>
        function countdown(totalSeconds) {
            return {
                totalSeconds: totalSeconds,
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0,
                interval: null,
                
                startCountdown() {
                    this.updateDisplay();
                    this.interval = setInterval(() => {
                        if (this.totalSeconds > 0) {
                            this.totalSeconds--;
                            this.updateDisplay();
                        } else {
                            clearInterval(this.interval);
                        }
                    }, 1000);
                },
                
                updateDisplay() {
                    this.days = Math.floor(this.totalSeconds / 86400);
                    this.hours = Math.floor((this.totalSeconds % 86400) / 3600);
                    this.minutes = Math.floor((this.totalSeconds % 3600) / 60);
                    this.seconds = this.totalSeconds % 60;
                },
                
                formatTime(value) {
                    return value.toString().padStart(2, '0');
                }
            }
        }
    </script>
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black text-white antialiased">
    {{-- Floating Decorations --}}
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute -top-96 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? '-left-96' : '-right-96' }} w-[600px] h-[600px] bg-gradient-to-br from-cyan-500/20 to-blue-600/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-1/3 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? '-right-96' : '-left-96' }} w-[500px] h-[500px] bg-gradient-to-br from-purple-500/20 to-pink-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute -bottom-96 {{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-1/4' : 'right-1/4' }} w-[400px] h-[400px] bg-gradient-to-br from-pink-500/15 to-purple-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    @php
        $locale = app()->getLocale();
        $isRtl = in_array($locale, ['ku', 'ar']);
    @endphp

    {{-- Navigation --}}
    <nav class="fixed top-0 left-0 right-0 z-50 px-4 py-4" x-data="{ open: false, scrolled: false, userMenu: false }" @scroll.window="scrolled = (window.scrollY > 50)" @click.away="userMenu = false">
        <div :class="scrolled ? 'glass-strong shadow-2xl shadow-cyan-500/10 py-3' : 'bg-transparent py-4'" 
             class="max-w-7xl mx-auto rounded-2xl transition-all duration-500 px-6">
            <div class="flex items-center justify-between">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg shadow-cyan-500/30 group-hover:shadow-cyan-500/50 transition-all transform group-hover:scale-110 group-hover:rotate-6">
                            <i class="fa-solid fa-crown text-white text-xl sm:text-2xl"></i>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 sm:w-5 sm:h-5 bg-gradient-to-br from-pink-500 to-purple-500 rounded-lg animate-bounce-soft"></div>
                    </div>
                    <div class="hidden sm:block">
                        <span class="text-xl sm:text-2xl font-black text-white">Luxe<span class="text-gradient-cyan">Shop</span></span>
                        <p class="text-xs text-white/50 -mt-1">Premium Fashion Store</p>
                    </div>
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden lg:flex items-center gap-2">
                    @php
                        $menuItems = [
                            ['route' => 'home', 'icon' => 'fa-house', 'label' => $locale == 'ku' ? 'ماڵەوە' : ($locale == 'ar' ? 'الرئيسية' : 'Home')],
                            ['route' => 'products.index', 'icon' => 'fa-bag-shopping', 'label' => $locale == 'ku' ? 'بەرهەمەکان' : ($locale == 'ar' ? 'المنتجات' : 'Shop')],
                            ['route' => 'categories.index', 'icon' => 'fa-tags', 'label' => $locale == 'ku' ? 'کەتەگۆری' : ($locale == 'ar' ? 'الفئات' : 'Categories')],
                            ['route' => 'cart.index', 'icon' => 'fa-cart-shopping', 'label' => $locale == 'ku' ? 'سەبەتە' : ($locale == 'ar' ? 'السلة' : 'Cart')],
                            ['route' => 'orders.index', 'icon' => 'fa-box', 'label' => $locale == 'ku' ? 'داواکاریەکان' : ($locale == 'ar' ? 'الطلبات' : 'Orders')],
                        ];
                    @endphp
                    @foreach($menuItems as $item)
                        <a href="{{ route($item['route']) }}" 
                           class="relative px-4 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 group
                                  {{ request()->routeIs($item['route']) ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30' : 'text-white/70 hover:text-white glass hover:shadow-lg hover:shadow-cyan-500/10' }}">
                            <span class="relative flex items-center gap-2">
                                <i class="fa-solid {{ $item['icon'] }}"></i>
                                {{ $item['label'] }}
                            </span>
                        </a>
                    @endforeach
                    
                    @auth
                        @admin
                            <a href="{{ route('dashboard') }}" 
                               class="relative px-4 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300
                                      {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-purple-500 to-pink-600 text-white shadow-lg shadow-purple-500/30' : 'text-white/70 hover:text-white glass hover:shadow-lg hover:shadow-purple-500/10' }}">
                                <span class="flex items-center gap-2">
                                    <i class="fa-solid fa-gauge-high"></i>
                                    {{ $locale == 'ku' ? 'داشبۆرد' : ($locale == 'ar' ? 'لوحة التحكم' : 'Dashboard') }}
                                </span>
                            </a>
                        @endadmin
                    @endauth
                </div>

                {{-- Right Actions --}}
                <div class="flex items-center gap-3">
                    {{-- Notifications --}}
                    @auth
                    <div x-data="{ notifOpen: false }" class="relative hidden sm:block">
                        <button @click="notifOpen = !notifOpen" class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl glass flex items-center justify-center text-white/70 hover:text-amber-400 hover:shadow-lg hover:shadow-amber-500/10 transition-all relative">
                            <i class="fa-solid fa-bell text-lg"></i>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-r from-red-500 to-orange-500 rounded-full text-white text-xs font-bold flex items-center justify-center shadow-lg animate-pulse">4</span>
                        </button>
                        
                        {{-- Notifications Dropdown --}}
                        <div x-show="notifOpen" 
                             @click.away="notifOpen = false"
                             x-cloak 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             class="absolute {{ $isRtl ? 'left-0' : 'right-0' }} mt-3 w-80 rounded-2xl shadow-2xl shadow-black/50 border border-white/20 overflow-hidden z-50"
                             style="background: rgba(15, 23, 42, 0.95); backdrop-filter: blur(40px); -webkit-backdrop-filter: blur(40px);">
                            
                            {{-- Header --}}
                            <div class="p-4 border-b border-white/10" style="background: linear-gradient(135deg, rgba(251, 191, 36, 0.15), rgba(249, 115, 22, 0.15));">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-bold text-white flex items-center gap-2">
                                        <i class="fa-solid fa-bell text-amber-400"></i>
                                        {{ $locale == 'ku' ? 'ئاگادارکردنەوەکان' : ($locale == 'ar' ? 'الإشعارات' : 'Notifications') }}
                                    </h3>
                                    <span class="px-2 py-1 bg-amber-500/20 text-amber-400 text-xs font-bold rounded-lg">4 {{ $locale == 'ku' ? 'نوێ' : ($locale == 'ar' ? 'جديد' : 'New') }}</span>
                                </div>
                            </div>
                            
                            {{-- Notifications List --}}
                            <div class="max-h-80 overflow-y-auto">
                                {{-- Order Delivered --}}
                                <a href="{{ route('orders.index') }}" class="flex items-start gap-3 p-4 hover:bg-white/5 transition-all border-b border-white/5">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fa-solid fa-box-check"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-white font-semibold text-sm">{{ $locale == 'ku' ? 'داواکاریەکەت گەیشت!' : ($locale == 'ar' ? 'وصل طلبك!' : 'Order Delivered!') }}</p>
                                        <p class="text-white/50 text-xs mt-1">{{ $locale == 'ku' ? 'داواکاری #1234 گەیشتە دەستت' : ($locale == 'ar' ? 'الطلب #1234 وصل إليك' : 'Order #1234 has been delivered') }}</p>
                                        <span class="text-amber-400 text-xs mt-2 inline-block">{{ $locale == 'ku' ? '٢ کاتژمێر لەمەوپێش' : ($locale == 'ar' ? 'منذ ساعتين' : '2 hours ago') }}</span>
                                    </div>
                                </a>
                                
                                {{-- New Product --}}
                                <a href="{{ route('products.index') }}" class="flex items-start gap-3 p-4 hover:bg-white/5 transition-all border-b border-white/5">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fa-solid fa-sparkles"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-white font-semibold text-sm">{{ $locale == 'ku' ? 'بەرهەمی نوێ!' : ($locale == 'ar' ? 'منتج جديد!' : 'New Product!') }}</p>
                                        <p class="text-white/50 text-xs mt-1">{{ $locale == 'ku' ? 'کۆڵەکشنی نوێی هاوینە ئامادەیە' : ($locale == 'ar' ? 'مجموعة الصيف الجديدة متوفرة' : 'New summer collection is available') }}</p>
                                        <span class="text-amber-400 text-xs mt-2 inline-block">{{ $locale == 'ku' ? '٥ کاتژمێر لەمەوپێش' : ($locale == 'ar' ? 'منذ 5 ساعات' : '5 hours ago') }}</span>
                                    </div>
                                </a>
                                
                                {{-- Discount --}}
                                <a href="{{ route('products.index') }}" class="flex items-start gap-3 p-4 hover:bg-white/5 transition-all border-b border-white/5">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fa-solid fa-percent"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-white font-semibold text-sm">{{ $locale == 'ku' ? 'داشکاندنی تایبەت!' : ($locale == 'ar' ? 'خصم خاص!' : 'Special Discount!') }}</p>
                                        <p class="text-white/50 text-xs mt-1">{{ $locale == 'ku' ? 'تا ٥٠٪ داشکان لە هەموو جلەکان' : ($locale == 'ar' ? 'خصم حتى 50% على جميع الملابس' : 'Up to 50% off on all clothes') }}</p>
                                        <span class="text-amber-400 text-xs mt-2 inline-block">{{ $locale == 'ku' ? 'دوێنێ' : ($locale == 'ar' ? 'أمس' : 'Yesterday') }}</span>
                                    </div>
                                </a>
                                
                                {{-- Order Shipped --}}
                                <a href="{{ route('orders.index') }}" class="flex items-start gap-3 p-4 hover:bg-white/5 transition-all">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white flex-shrink-0">
                                        <i class="fa-solid fa-truck-fast"></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-white font-semibold text-sm">{{ $locale == 'ku' ? 'داواکاریەکەت نێردرا!' : ($locale == 'ar' ? 'تم شحن طلبك!' : 'Order Shipped!') }}</p>
                                        <p class="text-white/50 text-xs mt-1">{{ $locale == 'ku' ? 'داواکاری #1235 لە ڕێگادایە' : ($locale == 'ar' ? 'الطلب #1235 في الطريق' : 'Order #1235 is on its way') }}</p>
                                        <span class="text-amber-400 text-xs mt-2 inline-block">{{ $locale == 'ku' ? '٢ ڕۆژ لەمەوپێش' : ($locale == 'ar' ? 'منذ يومين' : '2 days ago') }}</span>
                                    </div>
                                </a>
                            </div>
                            
                            {{-- View All --}}
                            <a href="#" class="block p-4 text-center text-cyan-400 hover:bg-white/5 transition-all font-semibold border-t border-white/10">
                                {{ $locale == 'ku' ? 'هەموو ئاگادارکردنەوەکان ببینە' : ($locale == 'ar' ? 'عرض جميع الإشعارات' : 'View All Notifications') }}
                                <i class="fa-solid fa-arrow-{{ $isRtl ? 'left' : 'right' }} ms-2"></i>
                            </a>
                        </div>
                    </div>
                    @endauth
                    
                    {{-- Cart --}}
                    @php
                        $cartItemCount = 0;
                        if (auth()->check()) {
                            $userCart = \App\Models\Cart::where('user_id', auth()->id())->first();
                            if ($userCart) {
                                $cartItemCount = \App\Models\CartItem::where('cart_id', $userCart->id)->count();
                            }
                        }
                    @endphp
                    <a href="{{ route('cart.index') }}" class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 flex items-center justify-center text-white shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-110 transition-all relative">
                        <i class="fa-solid fa-bag-shopping text-lg"></i>
                        @if($cartItemCount > 0)
                        <span class="absolute -top-2 -right-2 w-5 h-5 sm:w-6 sm:h-6 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full text-white text-xs font-bold flex items-center justify-center shadow-lg">
                            {{ $cartItemCount }}
                        </span>
                        @endif
                    </a>

                    {{-- Account with Dropdown --}}
                    @auth
                        <div class="relative hidden sm:block">
                            <button @click="userMenu = !userMenu" class="flex items-center gap-3 px-3 py-2 rounded-xl glass hover:bg-white/10 transition-all">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                </div>
                                <span class="font-semibold text-white/80 hidden md:block">{{ Str::limit(auth()->user()->name, 8) }}</span>
                                <i class="fa-solid fa-chevron-down text-white/50 text-xs transition-transform hidden md:block" :class="userMenu && 'rotate-180'"></i>
                            </button>
                            
                            {{-- Dropdown --}}
                            <div x-show="userMenu" x-cloak
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                 class="absolute {{ $isRtl ? 'left-0' : 'right-0' }} mt-3 w-64 glass-strong rounded-2xl shadow-2xl shadow-black/50 border border-white/10 overflow-hidden z-50">
                                
                                {{-- User Info --}}
                                <div class="p-4 border-b border-white/10 bg-gradient-to-r from-purple-500/10 to-pink-500/10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-white">{{ auth()->user()->name }}</p>
                                            <p class="text-sm text-white/50">{{ auth()->user()->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Menu Items --}}
                                <div class="p-2">
                                    <a href="{{ route('orders.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all group">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center group-hover:from-cyan-500 group-hover:to-blue-500 transition-all">
                                            <i class="fa-solid fa-box text-cyan-400 group-hover:text-white"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $locale == 'ku' ? 'داواکاریەکانم' : ($locale == 'ar' ? 'طلباتي' : 'My Orders') }}</p>
                                        </div>
                                    </a>
                                    
                                    {{-- Language with submenu --}}
                                    <div x-data="{ langOpen: false }" class="relative">
                                        <button @click="langOpen = !langOpen" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all group">
                                            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-500/20 to-teal-500/20 flex items-center justify-center group-hover:from-emerald-500 group-hover:to-teal-500 transition-all">
                                                <i class="fa-solid fa-language text-emerald-400 group-hover:text-white"></i>
                                            </div>
                                            <div class="flex-1 flex items-center justify-between">
                                                <p class="font-semibold">{{ $locale == 'ku' ? 'زمان' : ($locale == 'ar' ? 'اللغة' : 'Language') }}</p>
                                                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="langOpen && 'rotate-180'"></i>
                                            </div>
                                        </button>
                                        <div x-show="langOpen" x-cloak x-transition class="mt-1 mx-2 p-2 bg-white/5 rounded-xl border border-white/10">
                                            <a href="{{ route('language.switch', 'ku') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $locale == 'ku' ? 'bg-cyan-500/20 text-cyan-400' : 'text-white/60 hover:bg-white/10 hover:text-white' }} transition-all">
                                                <span>🇮🇶</span><span class="text-sm">کوردی</span>
                                                @if($locale == 'ku')<i class="fa-solid fa-check {{ $isRtl ? 'mr-auto' : 'ml-auto' }} text-cyan-400 text-xs"></i>@endif
                                            </a>
                                            <a href="{{ route('language.switch', 'ar') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $locale == 'ar' ? 'bg-cyan-500/20 text-cyan-400' : 'text-white/60 hover:bg-white/10 hover:text-white' }} transition-all">
                                                <span>🇸🇦</span><span class="text-sm">عربي</span>
                                                @if($locale == 'ar')<i class="fa-solid fa-check {{ $isRtl ? 'mr-auto' : 'ml-auto' }} text-cyan-400 text-xs"></i>@endif
                                            </a>
                                            <a href="{{ route('language.switch', 'en') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $locale == 'en' ? 'bg-cyan-500/20 text-cyan-400' : 'text-white/60 hover:bg-white/10 hover:text-white' }} transition-all">
                                                <span>🇺🇸</span><span class="text-sm">English</span>
                                                @if($locale == 'en')<i class="fa-solid fa-check {{ $isRtl ? 'mr-auto' : 'ml-auto' }} text-cyan-400 text-xs"></i>@endif
                                            </a>
                                        </div>
                                    </div>
                                    
                                    {{-- Settings --}}
                                    <a href="{{ route('settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all group">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center group-hover:from-purple-500 group-hover:to-pink-500 transition-all">
                                            <i class="fa-solid fa-gear text-purple-400 group-hover:text-white"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $locale == 'ku' ? 'ڕێکخستنەکان' : ($locale == 'ar' ? 'الإعدادات' : 'Settings') }}</p>
                                        </div>
                                    </a>
                                    
                                    @admin
                                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all group">
                                            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center group-hover:from-amber-500 group-hover:to-orange-500 transition-all">
                                                <i class="fa-solid fa-gauge-high text-amber-400 group-hover:text-white"></i>
                                            </div>
                                            <div>
                                                <p class="font-semibold">{{ $locale == 'ku' ? 'داشبۆرد' : ($locale == 'ar' ? 'لوحة التحكم' : 'Dashboard') }}</p>
                                            </div>
                                        </a>
                                    @endadmin
                                </div>
                                
                                {{-- Logout --}}
                                <div class="p-2 border-t border-white/10">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-400 hover:text-white hover:bg-red-500/20 transition-all group">
                                            <div class="w-10 h-10 rounded-lg bg-red-500/20 flex items-center justify-center group-hover:bg-red-500 transition-all">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                            </div>
                                            <p class="font-semibold">{{ $locale == 'ku' ? 'چوونەدەرەوە' : ($locale == 'ar' ? 'تسجيل الخروج' : 'Logout') }}</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="hidden sm:flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-105 transition-all text-sm">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span>{{ $locale == 'ku' ? 'چوونەژوورەوە' : ($locale == 'ar' ? 'تسجيل الدخول' : 'Login') }}</span>
                        </a>
                    @endauth

                    {{-- Mobile Menu Toggle --}}
                    <button @click="open = !open" class="lg:hidden w-11 h-11 rounded-xl glass flex items-center justify-center text-white/70 hover:text-white transition-all">
                        <i x-show="!open" class="fa-solid fa-bars text-xl"></i>
                        <i x-show="open" class="fa-solid fa-xmark text-xl" x-cloak></i>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div x-show="open" x-cloak 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="lg:hidden mt-4 p-4 glass-strong rounded-2xl border border-white/10">
                
                @auth
                    {{-- User Info --}}
                    <div class="flex items-center gap-3 p-4 mb-4 rounded-xl bg-gradient-to-r from-purple-500/10 to-pink-500/10 border border-white/10">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="font-bold text-white">{{ auth()->user()->name }}</p>
                            <p class="text-sm text-white/50">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                @endauth
                
                {{-- Nav Links --}}
                <div class="space-y-2 mb-4">
                    @foreach($menuItems as $item)
                        <a href="{{ route($item['route']) }}" @click="open = false"
                           class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs($item['route']) ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg' : 'glass text-white/70 hover:text-white hover:bg-white/10' }} transition-all">
                            <i class="fa-solid {{ $item['icon'] }} text-lg"></i>
                            <span class="font-semibold">{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                    
                    @auth
                        @admin
                            <a href="{{ route('dashboard') }}" @click="open = false"
                               class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-purple-500 to-pink-600 text-white shadow-lg' : 'glass text-white/70 hover:text-white hover:bg-white/10' }} transition-all">
                                <i class="fa-solid fa-gauge-high text-lg"></i>
                                <span class="font-semibold">{{ $locale == 'ku' ? 'داشبۆرد' : 'Dashboard' }}</span>
                            </a>
                        @endadmin
                    @endauth
                </div>
                
@auth
                    {{-- Logout --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-center gap-3 px-4 py-3 rounded-xl bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white transition-all font-semibold">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            {{ $locale == 'ku' ? 'چوونەدەرەوە' : 'Logout' }}
                        </button>
                    </form>
                @else
                    {{-- Login/Register --}}
                    <div class="grid grid-cols-2 gap-3">
                        <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            {{ $locale == 'ku' ? 'چوونەژوورەوە' : 'Login' }}
                        </a>
                        <a href="{{ route('register') }}" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl glass text-white/70 hover:text-white font-bold border border-white/10">
                            <i class="fa-solid fa-user-plus"></i>
                            {{ $locale == 'ku' ? 'تۆمارکردن' : 'Register' }}
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Spacer --}}
    <div class="h-20 sm:h-24"></div>

    {{-- Main Content --}}
    <main class="@if ($pd == 'true') max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full @endif grow relative z-10">
        {{ $slot }}
    </main>

    {{-- Flash Messages --}}
    <x-flash />

    {{-- Footer - Dark Glass Theme --}}
    <footer class="relative mt-auto overflow-hidden border-t border-white/10 bg-black/40 backdrop-blur-xl">
        {{-- Background Decorations --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
                {{-- Brand --}}
                <div class="col-span-2 md:col-span-1 space-y-6">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <div class="relative">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-cyan-500/30 group-hover:shadow-cyan-500/50 transition-all group-hover:scale-105">
                                <i class="fa-solid fa-crown text-white text-xl"></i>
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-gradient-to-br from-pink-500 to-purple-500 rounded-lg"></div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-black text-white">Luxe<span class="text-gradient-cyan">Shop</span></span>
                            <span class="text-xs text-white/50">Premium Fashion</span>
                        </div>
                    </a>
                    <p class="text-white/50 text-sm leading-relaxed">
                        {{ $locale == 'ku' ? 'مۆدای باڵا بۆ ئەوانەی جیاوازی دەخوازن. کوالیتی لەگەڵ ستایل.' : 'Premium fashion for those who want to stand out. Quality meets style.' }}
                    </p>
                    <div class="flex gap-3">
                        @foreach(['facebook-f', 'instagram', 'twitter', 'tiktok'] as $social)
                            <a href="#" class="w-10 h-10 rounded-xl glass flex items-center justify-center text-white/50 hover:bg-gradient-to-br hover:from-cyan-500 hover:to-blue-600 hover:text-white hover:shadow-lg hover:shadow-cyan-500/30 transition-all">
                                <i class="fa-brands fa-{{ $social }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="font-bold mb-4 text-white">{{ $locale == 'ku' ? 'فرۆشگا' : 'Shop' }}</h4>
                    <ul class="space-y-3">
                        @php
                            $shopLinks = $locale == 'ku' 
                                ? ['نوێترین ئامادەکراو', 'باشترین فرۆش', 'داشکاندن', 'کۆلێکشن']
                                : ['New Arrivals', 'Best Sellers', 'Discounts', 'Collections'];
                        @endphp
                        @foreach($shopLinks as $link)
                            <li><a href="{{ route('products.index') }}" class="text-sm text-white/50 hover:text-cyan-400 transition-colors">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- Support --}}
                <div>
                    <h4 class="font-bold mb-4 text-white">{{ $locale == 'ku' ? 'یارمەتی' : 'Support' }}</h4>
                    <ul class="space-y-3">
                        @php
                            $supportLinks = $locale == 'ku' 
                                ? ['پرسیارە دووپاتکراوەکان', 'گواستنەوە', 'گەڕاندنەوە', 'شوێنپێکەوتنی داواکاری']
                                : ['FAQs', 'Shipping', 'Returns', 'Track Order'];
                        @endphp
                        @foreach($supportLinks as $link)
                            <li><a href="#" class="text-sm text-white/50 hover:text-cyan-400 transition-colors">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="font-bold mb-4 text-white">{{ $locale == 'ku' ? 'پەیوەندی' : 'Contact' }}</h4>
                    <ul class="space-y-3 text-sm text-white/50">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-cyan-400"></i>
                            hello@luxeshop.com
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone text-cyan-400"></i>
                            +964 750 123 4567
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-cyan-400 mt-1"></i>
                            <span>{{ $locale == 'ku' ? 'شەقامی مۆدا ١٢٣' : '123 Fashion Street' }}<br>{{ $locale == 'ku' ? 'هەولێر، کوردستان' : 'Erbil, Kurdistan' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            {{-- Bottom Bar --}}
            <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-white/40">© {{ date('Y') }} LuxeShop. {{ $locale == 'ku' ? 'هەموو مافەکان پارێزراون.' : 'All rights reserved.' }}</p>
                <div class="flex items-center gap-6 text-sm text-white/40">
                    <a href="#" class="hover:text-cyan-400 transition-colors">{{ $locale == 'ku' ? 'سیاسەتی تایبەتمەندی' : 'Privacy Policy' }}</a>
                    <a href="#" class="hover:text-cyan-400 transition-colors">{{ $locale == 'ku' ? 'مەرجەکان' : 'Terms' }}</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
