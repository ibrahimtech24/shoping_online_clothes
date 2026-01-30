@php
    $locale = app()->getLocale();
    $isRtl = in_array($locale, ['ku', 'ar']);
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $isRtl ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $locale == 'ku' ? 'لوکس شۆپ - مۆدای پڕیمیەم' : 'LuxeShop - Premium Fashion' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Hide elements with x-cloak until Alpine.js loads */
        [x-cloak] { display: none !important; }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;400;500;600;700;800;900&display=swap');
        
        * { 
            font-family: 'Noto Sans Arabic', 'Poppins', sans-serif; 
        }

        /* 3D Card Effect */
        .card-3d {
            transform-style: preserve-3d;
            perspective: 1000px;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .card-3d:hover {
            transform: rotateY(-5deg) rotateX(5deg) translateZ(30px);
        }

        .card-3d-reverse:hover {
            transform: rotateY(5deg) rotateX(5deg) translateZ(30px);
        }

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(2deg); }
            75% { transform: translateY(-8px) rotate(-2deg); }
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-30px) translateX(10px); }
        }

        @keyframes pulse3d {
            0%, 100% { transform: scale(1) translateZ(0); }
            50% { transform: scale(1.05) translateZ(20px); }
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        @keyframes gradient-flow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes bounce-soft {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes glow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-float-slow { animation: floatSlow 6s ease-in-out infinite; }
        .animate-pulse3d { animation: pulse3d 3s ease-in-out infinite; }
        .animate-shimmer { animation: shimmer 3s linear infinite; background-size: 200% 100%; }
        .animate-gradient { animation: gradient-flow 4s ease infinite; background-size: 200% 200%; }
        .animate-bounce-soft { animation: bounce-soft 2s ease-in-out infinite; }
        .animate-glow { animation: glow 2s ease-in-out infinite; }

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

        /* Text Effects */
        .text-3d {
            text-shadow: 
                0 0 20px rgba(6, 182, 212, 0.5),
                0 0 40px rgba(6, 182, 212, 0.3),
                0 0 60px rgba(6, 182, 212, 0.2);
        }

        .text-gradient-cyan {
            background: linear-gradient(135deg, #06b6d4, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-pink {
            background: linear-gradient(135deg, #ec4899, #8b5cf6, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Button Glow */
        .btn-glow {
            position: relative;
            overflow: hidden;
        }

        .btn-glow::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #06b6d4, #8b5cf6, #ec4899, #06b6d4);
            border-radius: inherit;
            z-index: -1;
            animation: gradient-flow 3s linear infinite;
            background-size: 200% 200%;
            filter: blur(10px);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .btn-glow:hover::before {
            opacity: 1;
        }

        /* Product Card 3D */
        .product-card {
            position: relative;
            transform-style: preserve-3d;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .product-card::before {
            content: '';
            position: absolute;
            inset: 20px;
            background: linear-gradient(135deg, #06b6d4, #8b5cf6);
            border-radius: 24px;
            transform: translateZ(-20px);
            opacity: 0;
            transition: all 0.5s;
        }

        .product-card:hover::before {
            opacity: 0.3;
            filter: blur(30px);
            transform: translateZ(-40px);
        }

        .product-card:hover {
            transform: translateY(-20px) translateZ(20px);
        }

        /* Decorative Shapes */
        .blob {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }

        .blob-2 {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        /* Category card 3D tilt */
        .category-3d {
            transition: all 0.4s ease;
            transform-style: preserve-3d;
        }

        .category-3d:hover {
            transform: perspective(1000px) rotateX(10deg) translateY(-10px);
            box-shadow: 0 30px 60px rgba(6, 182, 212, 0.2);
        }

        /* Shine effect */
        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.2) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            transition: all 0.6s;
            opacity: 0;
        }

        .shine-effect:hover::after {
            animation: shimmer 0.6s forwards;
            opacity: 1;
        }

        /* Scroll indicator */
        .scroll-indicator {
            animation: bounce-soft 2s ease-in-out infinite;
        }

        /* Image hover effect */
        .img-3d-hover {
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .img-3d-hover:hover {
            transform: scale(1.1) rotateZ(-2deg);
        }

        /* Counter 3D */
        .counter-3d {
            transform-style: preserve-3d;
            perspective: 500px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-black min-h-screen overflow-x-hidden">

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🎨 FLOATING DECORATIONS
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        {{-- Cyan Blob --}}
        <div class="absolute -top-96 {{ $isRtl ? '-left-96' : '-right-96' }} w-[600px] h-[600px] bg-gradient-to-br from-cyan-500/20 to-blue-600/10 rounded-full blur-3xl animate-pulse"></div>
        
        {{-- Purple Blob --}}
        <div class="absolute top-1/3 {{ $isRtl ? '-right-96' : '-left-96' }} w-[500px] h-[500px] bg-gradient-to-br from-purple-500/20 to-pink-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        
        {{-- Pink Blob --}}
        <div class="absolute -bottom-96 {{ $isRtl ? 'left-1/4' : 'right-1/4' }} w-[400px] h-[400px] bg-gradient-to-br from-pink-500/15 to-purple-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>

        {{-- 3D Floating Shapes --}}
        <div class="absolute top-1/4 {{ $isRtl ? 'left-20' : 'right-20' }} w-16 h-16 bg-gradient-to-br from-cyan-400/30 to-blue-500/20 rounded-2xl shadow-xl animate-float border border-cyan-400/20" style="animation-delay: 1s;"></div>
        <div class="absolute top-2/3 {{ $isRtl ? 'right-32' : 'left-32' }} w-12 h-12 bg-gradient-to-br from-purple-400/30 to-pink-500/20 rounded-full shadow-xl animate-float border border-purple-400/20" style="animation-delay: 3s;"></div>
        <div class="absolute bottom-1/4 {{ $isRtl ? 'left-1/3' : 'right-1/3' }} w-20 h-20 bg-gradient-to-br from-pink-400/20 to-purple-500/10 rounded-3xl shadow-xl animate-float border border-pink-400/10" style="animation-delay: 2s;"></div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🧭 NAVBAR
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <nav class="fixed top-0 left-0 right-0 z-50 px-4 py-4" x-data="{ scrolled: false, mobileMenu: false, userMenu: false }" @scroll.window="scrolled = (window.scrollY > 50)" @click.away="userMenu = false">
        <div :class="scrolled ? 'glass-strong shadow-2xl shadow-cyan-500/10 py-3' : 'bg-transparent py-4'" 
             class="max-w-7xl mx-auto rounded-2xl transition-all duration-500 px-6">
            <div class="flex items-center justify-between">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg shadow-cyan-500/30 group-hover:shadow-cyan-500/50 transition-all transform group-hover:scale-110 group-hover:rotate-6">
                            <i class="fa-solid fa-crown text-white text-2xl"></i>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-gradient-to-br from-pink-500 to-purple-500 rounded-lg animate-bounce-soft"></div>
                    </div>
                    <div class="hidden sm:block">
                        <span class="text-2xl font-black text-white">Luxe<span class="text-gradient-cyan">Shop</span></span>
                        <p class="text-xs text-white/50 -mt-1">Premium Fashion Store</p>
                    </div>
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden lg:flex items-center gap-2">
                    @php
                        $menuItems = [
                            ['route' => 'home', 'icon' => 'fa-house', 'label' => $locale == 'ku' ? 'ماڵەوە' : 'Home', 'active' => true],
                            ['route' => 'products.index', 'icon' => 'fa-bag-shopping', 'label' => $locale == 'ku' ? 'بەرهەمەکان' : 'Shop'],
                            ['route' => 'categories.index', 'icon' => 'fa-tags', 'label' => $locale == 'ku' ? 'کەتەگۆری' : 'Categories'],
                        ];
                    @endphp
                    @foreach($menuItems as $item)
                        <a href="{{ route($item['route']) }}" 
                           class="relative px-5 py-3 rounded-xl text-sm font-semibold transition-all duration-300 group
                                  {{ ($item['active'] ?? false) ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30' : 'text-white/70 hover:text-white glass hover:shadow-lg hover:shadow-cyan-500/10' }}">
                            <span class="relative flex items-center gap-2">
                                <i class="fa-solid {{ $item['icon'] }}"></i>
                                {{ $item['label'] }}
                            </span>
                        </a>
                    @endforeach
                </div>

                {{-- Right Actions --}}
                <div class="flex items-center gap-3">
                    {{-- Notifications --}}
                    <div x-data="{ notifOpen: false }" class="relative">
                        <button @click="notifOpen = !notifOpen" class="w-12 h-12 rounded-xl glass flex items-center justify-center text-white/70 hover:text-amber-400 hover:shadow-lg hover:shadow-amber-500/10 transition-all relative">
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

                    {{-- Wishlist --}}
                    <a href="#" class="hidden sm:flex w-12 h-12 rounded-xl glass items-center justify-center text-white/70 hover:text-pink-400 hover:shadow-lg hover:shadow-pink-500/10 transition-all relative">
                        <i class="fa-solid fa-heart text-lg"></i>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full text-white text-xs font-bold flex items-center justify-center shadow-lg">3</span>
                    </a>

                    {{-- Cart --}}
                    <a href="{{ route('cart.index') }}" class="w-12 h-12 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 flex items-center justify-center text-white shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-110 transition-all relative">
                        <i class="fa-solid fa-bag-shopping text-lg"></i>
                        <span class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full text-white text-xs font-bold flex items-center justify-center shadow-lg animate-pulse">
                            {{ auth()->check() && auth()->user()->cart ? auth()->user()->cart->items->count() : 0 }}
                        </span>
                    </a>

                    {{-- Account with Dropdown --}}
                    @auth
                        <div class="relative hidden sm:block">
                            <button @click="userMenu = !userMenu" class="flex items-center gap-3 px-4 py-2 rounded-xl glass hover:shadow-lg hover:shadow-cyan-500/10 transition-all">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <span class="font-semibold text-white/80">{{ Str::limit(auth()->user()->name, 8) }}</span>
                                <i class="fa-solid fa-chevron-down text-white/50 text-xs transition-transform" :class="userMenu ? 'rotate-180' : ''"></i>
                            </button>
                            
                            {{-- Dropdown Menu --}}
                            <div x-show="userMenu" 
                                 x-cloak 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                                 class="absolute {{ $isRtl ? 'left-0' : 'right-0' }} mt-3 w-64 glass-strong rounded-2xl shadow-2xl shadow-black/50 border border-white/10 overflow-hidden z-50">
                                
                                {{-- User Info Header --}}
                                <div class="p-4 border-b border-white/10 bg-gradient-to-r from-purple-500/10 to-pink-500/10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white shadow-lg">
                                            <i class="fa-solid fa-user text-lg"></i>
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
                                    
                                    <a href="{{ route('cart.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all group">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center group-hover:from-purple-500 group-hover:to-pink-500 transition-all">
                                            <i class="fa-solid fa-cart-shopping text-purple-400 group-hover:text-white"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $locale == 'ku' ? 'سەبەتە' : ($locale == 'ar' ? 'السلة' : 'Cart') }}</p>
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
                                            <p class="font-semibold">{{ $locale == 'ku' ? 'چوونەدەرەوە' : 'Logout' }}</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="hidden sm:flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-105 transition-all">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span>{{ $locale == 'ku' ? 'چوونەژوورەوە' : 'Login' }}</span>
                        </a>
                    @endauth

                    {{-- Mobile Menu Toggle --}}
                    <button @click="mobileMenu = !mobileMenu" class="lg:hidden w-12 h-12 rounded-xl glass flex items-center justify-center text-white/70">
                        <i x-show="!mobileMenu" class="fa-solid fa-bars text-xl"></i>
                        <i x-show="mobileMenu" class="fa-solid fa-xmark text-xl" x-cloak></i>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu - Full --}}
            <div x-show="mobileMenu" x-cloak 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 class="lg:hidden mt-4 p-4 glass-strong rounded-2xl border border-white/10">
                
                {{-- User Info (if logged in) --}}
                @auth
                    <div class="flex items-center gap-3 p-4 mb-4 rounded-xl bg-gradient-to-r from-purple-500/10 to-pink-500/10 border border-white/10">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-user text-lg"></i>
                        </div>
                        <div>
                            <p class="font-bold text-white">{{ auth()->user()->name }}</p>
                            <p class="text-sm text-white/50">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                @endauth
                
                {{-- Navigation Links --}}
                <div class="space-y-2 mb-4">
                    @foreach($menuItems as $item)
                        <a href="{{ route($item['route']) }}" 
                           class="flex items-center gap-3 px-4 py-3 rounded-xl {{ ($item['active'] ?? false) ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg' : 'glass text-white/70 hover:text-white hover:bg-white/10' }} transition-all">
                            <i class="fa-solid {{ $item['icon'] }} text-lg"></i>
                            <span class="font-semibold">{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </div>
                
                {{-- Divider --}}
                <div class="border-t border-white/10 my-4"></div>
                
                @auth
                    {{-- Account Links --}}
                    <div class="space-y-2 mb-4">
                        <a href="{{ route('orders.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl glass text-white/70 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fa-solid fa-box text-cyan-400"></i>
                            <span class="font-semibold">{{ $locale == 'ku' ? 'داواکاریەکانم' : ($locale == 'ar' ? 'طلباتي' : 'My Orders') }}</span>
                        </a>
                        
                        {{-- Settings --}}
                        <a href="{{ route('settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl glass text-white/70 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fa-solid fa-gear text-purple-400"></i>
                            <span class="font-semibold">{{ $locale == 'ku' ? 'ڕێکخستنەکان' : ($locale == 'ar' ? 'الإعدادات' : 'Settings') }}</span>
                        </a>
                        
                        @admin
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl glass text-white/70 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fa-solid fa-gauge-high text-amber-400"></i>
                                <span class="font-semibold">{{ $locale == 'ku' ? 'داشبۆرد' : ($locale == 'ar' ? 'لوحة التحكم' : 'Dashboard') }}</span>
                            </a>
                        @endadmin
                    </div>
                    
                    {{-- Logout --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-center gap-3 px-4 py-3 rounded-xl bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white transition-all font-semibold">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            {{ $locale == 'ku' ? 'چوونەدەرەوە' : ($locale == 'ar' ? 'تسجيل الخروج' : 'Logout') }}
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

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🎠 PREMIUM HERO CAROUSEL
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <section class="relative pt-28 pb-8 overflow-hidden" x-data="heroCarousel()">
        
        {{-- Carousel Container --}}
        <div class="relative max-w-5xl mx-auto px-6">
            @php
                $slides = [
                    [
                        'badge' => $locale == 'ku' ? '✨ تایبەت' : '✨ Special',
                        'title' => $locale == 'ku' ? 'داشکاندنی %30' : '30% OFF',
                        'subtitle' => $locale == 'ku' ? 'لە هەموو بەرهەمەکان' : 'On All Products',
                        'color' => 'from-cyan-500 via-purple-500 to-pink-500',
                        'img' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&q=80',
                    ],
                    [
                        'badge' => $locale == 'ku' ? '🔥 نوێ' : '🔥 New',
                        'title' => $locale == 'ku' ? 'کۆڵەکشنی هاوین' : 'Summer Collection',
                        'subtitle' => $locale == 'ku' ? 'ستایلی تازە و شۆخ' : 'Fresh & Vibrant Styles',
                        'color' => 'from-pink-500 via-rose-500 to-orange-500',
                        'img' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&q=80',
                    ],
                    [
                        'badge' => $locale == 'ku' ? '👔 پیاوان' : '👔 Men',
                        'title' => $locale == 'ku' ? 'مۆدای پیاوان' : 'Men\'s Fashion',
                        'subtitle' => $locale == 'ku' ? 'ئەلگانت و کلاسیک' : 'Elegant & Classic',
                        'color' => 'from-indigo-500 via-purple-500 to-pink-500',
                        'img' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=400&q=80',
                    ],
                    [
                        'badge' => $locale == 'ku' ? '🚚 خۆڕایی' : '🚚 Free',
                        'title' => $locale == 'ku' ? 'گەیاندنی خۆڕایی' : 'Free Shipping',
                        'subtitle' => $locale == 'ku' ? 'بۆ هەموو داواکاریەکان' : 'On All Orders',
                        'color' => 'from-emerald-500 via-teal-500 to-cyan-500',
                        'img' => 'https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=400&q=80',
                    ]
                ];
            @endphp

            {{-- Slides --}}
            <div class="relative overflow-hidden">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="currentSlide === index"
                         x-transition:enter="transition ease-out duration-500 transform"
                         x-transition:enter-start="opacity-0 translate-x-full"
                         x-transition:enter-end="opacity-100 translate-x-0"
                         x-transition:leave="transition ease-in duration-300 transform absolute inset-0"
                         x-transition:leave-start="opacity-100 translate-x-0"
                         x-transition:leave-end="opacity-0 -translate-x-full">
                    
                        {{-- Card with Image Background --}}
                        <div class="relative h-[280px] md:h-[320px] rounded-[24px] overflow-hidden shadow-2xl">
                            {{-- Background Image --}}
                            <img :src="slide.img" :alt="slide.title" class="absolute inset-0 w-full h-full object-cover">
                            
                            {{-- Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20"></div>
                            <div class="absolute inset-0 bg-gradient-to-r opacity-30" :class="slide.color"></div>
                            
                            {{-- Content --}}
                            <div class="absolute inset-0 flex flex-col items-center justify-end p-6 md:p-8 text-center">
                                {{-- Badge --}}
                                <div class="inline-flex items-center gap-2 px-4 py-1.5 mb-3 rounded-full text-xs font-bold text-white bg-gradient-to-r shadow-lg"
                                     :class="slide.color">
                                    <span x-text="slide.badge"></span>
                                </div>
                                
                                {{-- Title --}}
                                <h2 class="text-2xl md:text-3xl lg:text-4xl font-black text-white mb-2 drop-shadow-2xl"
                                    x-text="slide.title"></h2>
                                
                                {{-- Subtitle --}}
                                <p class="text-sm md:text-base text-white/80 mb-5" x-text="slide.subtitle"></p>
                                
                                {{-- Button --}}
                                <a href="{{ route('products.index') }}" 
                                   class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 font-bold text-sm rounded-xl shadow-xl hover:scale-105 hover:shadow-2xl transition-all">
                                    <i class="fa-solid fa-bag-shopping text-sm"></i>
                                    {{ $locale == 'ku' ? 'ئێستا بکڕە' : 'Shop Now' }}
                                    <i class="fa-solid fa-arrow-{{ $isRtl ? 'left' : 'right' }} text-sm"></i>
                                </a>
                            </div>
                            
                            {{-- Decorative Border --}}
                            <div class="absolute inset-0 rounded-[24px] border border-white/10"></div>
                        </div>
                    </div>
                </template>
            </div>

            {{-- Navigation Dots --}}
            <div class="flex items-center justify-center gap-3 mt-8">
                <template x-for="(slide, index) in slides" :key="'dot-'+index">
                    <button @click="goToSlide(index)" 
                            class="group relative h-3 rounded-full transition-all duration-300"
                            :class="currentSlide === index ? 'w-10 bg-gradient-to-r from-cyan-400 to-blue-500' : 'w-3 bg-white/30 hover:bg-white/60'">
                    </button>
                </template>
            </div>
            
            {{-- Arrow Navigation --}}
            <button @click="prevSlide()" 
                    class="absolute {{ $isRtl ? 'right-0' : 'left-0' }} top-1/2 -translate-y-1/2 w-12 h-12 md:w-14 md:h-14 rounded-full glass-strong flex items-center justify-center text-white border border-white/20 hover:scale-110 hover:bg-white/20 transition-all z-20 group">
                <i class="fa-solid fa-chevron-{{ $isRtl ? 'right' : 'left' }} text-lg md:text-xl"></i>
            </button>
            <button @click="nextSlide()" 
                    class="absolute {{ $isRtl ? 'left-0' : 'right-0' }} top-1/2 -translate-y-1/2 w-12 h-12 md:w-14 md:h-14 rounded-full glass-strong flex items-center justify-center text-white border border-white/20 hover:scale-110 hover:bg-white/20 transition-all z-20 group">
                <i class="fa-solid fa-chevron-{{ $isRtl ? 'left' : 'right' }} text-lg md:text-xl"></i>
            </button>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         ⚡ FEATURES BAR - With Background Images
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <section class="relative py-4 z-10">
        <div class="max-w-7xl mx-auto px-6">
            {{-- Section Header --}}
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm font-semibold text-cyan-400 mb-4">
                    <i class="fa-solid fa-gem"></i>
                    {{ $locale == 'ku' ? 'بۆچی ئێمە?' : 'Why Choose Us?' }}
                </div>
                <h2 class="text-3xl lg:text-4xl font-black text-white">
                    {{ $locale == 'ku' ? 'تایبەتمەندیەکانی' : 'Our' }}
                    <span class="text-gradient-cyan">{{ $locale == 'ku' ? 'فرۆشگا' : 'Features' }}</span>
                </h2>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $features = [
                        [
                            'icon' => 'fa-truck-fast', 
                            'bg' => 'from-cyan-400 to-blue-600', 
                            'title' => $locale == 'ku' ? 'گەیاندنی خۆڕایی' : 'Free Shipping', 
                            'desc' => $locale == 'ku' ? 'بۆ داواکاری +$50' : 'Orders over $50',
                            'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&q=80'
                        ],
                        [
                            'icon' => 'fa-shield-check', 
                            'bg' => 'from-green-400 to-emerald-600', 
                            'title' => $locale == 'ku' ? 'پارەدانی پارێزراو' : 'Secure Payment', 
                            'desc' => $locale == 'ku' ? '١٠٠٪ پارێزراو' : '100% Protected',
                            'img' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&q=80'
                        ],
                        [
                            'icon' => 'fa-rotate-left', 
                            'bg' => 'from-purple-400 to-pink-600', 
                            'title' => $locale == 'ku' ? 'گەڕانەوەی ئاسان' : 'Easy Returns', 
                            'desc' => $locale == 'ku' ? '٣٠ ڕۆژ گەڕانەوە' : '30 Days Return',
                            'img' => 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=400&q=80'
                        ],
                        [
                            'icon' => 'fa-headset', 
                            'bg' => 'from-pink-400 to-rose-600', 
                            'title' => $locale == 'ku' ? 'پشتگیری ٢٤/٧' : '24/7 Support', 
                            'desc' => $locale == 'ku' ? 'هەمیشە ئامادەین' : 'Always Available',
                            'img' => 'https://images.unsplash.com/photo-1553775927-a071d5a6a39a?w=400&q=80'
                        ]
                    ];
                @endphp
                @foreach($features as $i => $feature)
                <div class="group relative rounded-3xl overflow-hidden card-3d {{ $i % 2 == 1 ? 'card-3d-reverse' : '' }} hover:shadow-2xl hover:shadow-cyan-500/20 transition-all h-72">
                    {{-- Background Image --}}
                    <img src="{{ $feature['img'] }}" alt="{{ $feature['title'] }}" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    {{-- Gradient Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t {{ $feature['bg'] }} opacity-80"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
                    
                    {{-- Content --}}
                    <div class="absolute inset-0 p-6 flex flex-col justify-between">
                        {{-- Icon --}}
                        <div class="w-16 h-16 rounded-2xl glass-strong flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all">
                            <i class="fa-solid {{ $feature['icon'] }} text-white text-2xl"></i>
                        </div>
                        
                        {{-- Text --}}
                        <div class="transform group-hover:translate-y-0 translate-y-2 transition-transform">
                            <h4 class="font-bold text-white text-xl mb-2">{{ $feature['title'] }}</h4>
                            <p class="text-sm text-white/70">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                    
                    {{-- Shine Effect --}}
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-transparent via-white/10 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         ️ PRODUCTS
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <section class="relative py-8 z-10">
        <div class="max-w-7xl mx-auto px-6">
            {{-- Section Header --}}
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm font-semibold text-pink-400 mb-4">
                        <i class="fa-solid fa-fire"></i>
                        {{ $locale == 'ku' ? 'بەرهەمە گەرمەکان' : 'Hot Products' }}
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-black text-white">
                        {{ $locale == 'ku' ? 'باشترین' : 'Best' }}
                        <span class="text-gradient-pink">{{ $locale == 'ku' ? 'هەڵبژاردەکان' : 'Sellers' }}</span>
                    </h2>
                </div>
                <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 px-6 py-3 glass rounded-xl font-semibold text-white/70 hover:text-white hover:shadow-lg hover:shadow-cyan-500/10 transition-all group">
                    {{ $locale == 'ku' ? 'هەموو بەرهەمەکان' : 'All Products' }}
                    <i class="fa-solid fa-arrow-{{ $isRtl ? 'left' : 'right' }} group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>

            {{-- Products Grid --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $products = [
                        ['name' => $locale == 'ku' ? 'چاکەتی چەرم' : 'Leather Jacket', 'price' => 189, 'old' => 259, 'img' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&q=80', 'badge' => 'HOT', 'badgeColor' => 'from-red-500 to-pink-500'],
                        ['name' => $locale == 'ku' ? 'فستانی شەو' : 'Evening Dress', 'price' => 249, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&q=80', 'badge' => 'NEW', 'badgeColor' => 'from-green-500 to-emerald-500'],
                        ['name' => $locale == 'ku' ? 'سنیکەری Nike' : 'Nike Sneakers', 'price' => 179, 'old' => 249, 'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&q=80', 'badge' => '-28%', 'badgeColor' => 'from-purple-500 to-violet-500'],
                        ['name' => $locale == 'ku' ? 'کاتژمێری Apple' : 'Apple Watch', 'price' => 399, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1434493789847-2f02dc6ca35d?w=400&q=80', 'badge' => null, 'badgeColor' => ''],
                        ['name' => $locale == 'ku' ? 'جانتای Gucci' : 'Gucci Bag', 'price' => 599, 'old' => 799, 'img' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80', 'badge' => 'SALE', 'badgeColor' => 'from-cyan-500 to-blue-500'],
                        ['name' => $locale == 'ku' ? 'کراسی کاتۆن' : 'Cotton Shirt', 'price' => 89, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?w=400&q=80', 'badge' => null, 'badgeColor' => ''],
                        ['name' => $locale == 'ku' ? 'چاوێلکەی Ray-Ban' : 'Ray-Ban Glasses', 'price' => 179, 'old' => 229, 'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&q=80', 'badge' => 'TREND', 'badgeColor' => 'from-pink-500 to-rose-500'],
                        ['name' => $locale == 'ku' ? 'جینزی Levi\'s' : 'Levi\'s Jeans', 'price' => 129, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&q=80', 'badge' => null, 'badgeColor' => '']
                    ];
                @endphp
                @foreach($products as $product)
                <div class="group product-card glass rounded-3xl overflow-hidden">
                    {{-- Image --}}
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        
                        @if($product['badge'])
                        <div class="absolute top-4 {{ $isRtl ? 'right-4' : 'left-4' }}">
                            <span class="px-3 py-1.5 bg-gradient-to-r {{ $product['badgeColor'] }} text-white text-xs font-bold rounded-lg shadow-lg">
                                {{ $product['badge'] }}
                            </span>
                        </div>
                        @endif

                        {{-- Actions --}}
                        <div class="absolute top-4 {{ $isRtl ? 'left-4' : 'right-4' }} flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="w-10 h-10 glass-strong rounded-xl flex items-center justify-center text-white/70 hover:text-pink-400 hover:bg-white/20 transition-all shadow-lg">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="w-10 h-10 glass-strong rounded-xl flex items-center justify-center text-white/70 hover:text-cyan-400 hover:bg-white/20 transition-all shadow-lg">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>

                        {{-- Quick Add --}}
                        <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all">
                            <button class="w-full py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all shine-effect">
                                <i class="fa-solid fa-bag-shopping mr-2"></i>
                                {{ $locale == 'ku' ? 'زیادکردن بۆ سەبەتە' : 'Add to Cart' }}
                            </button>
                        </div>
                    </div>

                    {{-- Info --}}
                    <div class="p-5">
                        <h3 class="font-bold text-white text-lg mb-2 truncate group-hover:text-cyan-400 transition-colors">{{ $product['name'] }}</h3>
                        <div class="flex items-center gap-1 mb-3">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star text-amber-400 text-sm"></i>
                            @endfor
                            <span class="text-white/40 text-xs ml-1">(4.9)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            @if($product['old'])
                                <span class="text-white/40 line-through">${{ $product['old'] }}</span>
                            @endif
                            <span class="text-2xl font-black text-gradient-cyan">${{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🎯 PROMO BANNER
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <section class="relative py-8 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="relative rounded-[40px] overflow-hidden glass shadow-2xl shadow-purple-500/10">
                {{-- Background --}}
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-cyan-600 animate-gradient"></div>
                <div class="absolute inset-0 opacity-20" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1600&q=80'); background-size: cover;"></div>
                
                {{-- Floating Shapes --}}
                <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-3xl animate-float border border-white/10"></div>
                <div class="absolute bottom-10 right-10 w-32 h-32 bg-white/10 rounded-full animate-float border border-white/10" style="animation-delay: 2s;"></div>
                <div class="absolute top-1/2 right-1/4 w-16 h-16 bg-white/10 blob animate-float border border-white/10" style="animation-delay: 1s;"></div>
                
                {{-- Content --}}
                <div class="relative z-10 p-12 lg:p-20 text-center">
                    <div class="inline-flex items-center gap-2 px-5 py-2 bg-white/10 rounded-full text-white font-semibold mb-6 animate-bounce-soft border border-white/20">
                        <i class="fa-solid fa-clock animate-pulse"></i>
                        {{ $locale == 'ku' ? 'کاتی سنووردار' : 'Limited Time Offer' }}
                    </div>
                    <h2 class="text-5xl lg:text-7xl font-black text-white mb-6">
                        {{ $locale == 'ku' ? 'تا ٧٠٪ داشکاندن' : 'Up to 70% OFF' }}
                    </h2>
                    <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto">
                        {{ $locale == 'ku' ? 'لە کۆڵەکشنی هاوینەدا. ئەم ئۆفەرە بێوێنەیە!' : 'On Summer Collection. This offer is incredible!' }}
                    </p>

                    {{-- Countdown --}}
                    <div class="flex items-center justify-center gap-4 lg:gap-6 mb-10">
                        @foreach([['num' => '12', 'label' => $locale == 'ku' ? 'ڕۆژ' : 'Days'], ['num' => '08', 'label' => $locale == 'ku' ? 'کاتژمێر' : 'Hours'], ['num' => '45', 'label' => $locale == 'ku' ? 'خولەک' : 'Mins'], ['num' => '30', 'label' => $locale == 'ku' ? 'چرکە' : 'Secs']] as $index => $time)
                            <div class="counter-3d">
                                <div class="w-20 h-24 lg:w-24 lg:h-28 glass-strong rounded-2xl flex flex-col items-center justify-center shadow-xl">
                                    <span class="text-3xl lg:text-4xl font-black text-white">{{ $time['num'] }}</span>
                                    <span class="text-xs text-white/70 mt-1">{{ $time['label'] }}</span>
                                </div>
                            </div>
                            @if($index < 3)
                                <span class="text-4xl font-bold text-white/40">:</span>
                            @endif
                        @endforeach
                    </div>

                    <a href="{{ route('products.index') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-purple-600 font-black text-lg rounded-2xl shadow-2xl hover:scale-105 hover:shadow-3xl transition-all shine-effect">
                        {{ $locale == 'ku' ? 'ئێستا بکڕە' : 'Shop Now' }}
                        <i class="fa-solid fa-arrow-{{ $isRtl ? 'left' : 'right' }}"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         ⭐ TESTIMONIALS
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <section class="relative py-8 z-10">
        <div class="max-w-7xl mx-auto px-6">
            {{-- Section Header --}}
            <div class="text-center mb-14">
                <div class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm font-semibold text-amber-400 mb-4">
                    <i class="fa-solid fa-quote-left"></i>
                    {{ $locale == 'ku' ? 'بۆچوونەکان' : 'Testimonials' }}
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-white">
                    {{ $locale == 'ku' ? 'کڕیاران چی' : 'What Customers' }}
                    <span class="text-gradient-cyan">{{ $locale == 'ku' ? 'دەڵێن' : 'Say' }}</span>
                </h2>
            </div>

            {{-- Testimonials Grid --}}
            <div class="grid md:grid-cols-3 gap-6">
                @php
                    $testimonials = [
                        ['name' => $locale == 'ku' ? 'سارا ئەحمەد' : 'Sara Ahmed', 'role' => $locale == 'ku' ? 'دیزاینەر' : 'Fashion Designer', 'img' => 'https://randomuser.me/api/portraits/women/44.jpg', 'text' => $locale == 'ku' ? 'کوالیتی بەرهەمەکان زۆر نایابە! هەموو کات دەگەڕێمەوە بۆ زیاتر. پێشنیاری دەکەم!' : 'The quality is absolutely amazing! I always come back for more. Highly recommended!'],
                        ['name' => $locale == 'ku' ? 'ڕێبین عومەر' : 'Rebin Omar', 'role' => $locale == 'ku' ? 'کارمەند' : 'Business Owner', 'img' => 'https://randomuser.me/api/portraits/men/32.jpg', 'text' => $locale == 'ku' ? 'باشترین فرۆشگای ئۆنلاینە کە لەگەڵی کاردەکەم. پشتگیریش نایابە.' : 'Best online store I\'ve ever shopped at. Customer support is incredible.'],
                        ['name' => $locale == 'ku' ? 'هاوژین کەریم' : 'Hawzhin Karim', 'role' => $locale == 'ku' ? 'بلۆگەر' : 'Fashion Blogger', 'img' => 'https://randomuser.me/api/portraits/women/68.jpg', 'text' => $locale == 'ku' ? 'ستایلەکان زۆر مۆدێرنن و بە نرخی گونجاو. پێشنیاری بە هەموو کەس دەکەم!' : 'Styles are modern and prices are fair. I recommend to everyone!']
                    ];
                @endphp
                @foreach($testimonials as $i => $testimonial)
                <div class="glass rounded-3xl p-8 card-3d {{ $i == 1 ? 'card-3d-reverse' : '' }} hover:shadow-2xl hover:shadow-cyan-500/10 transition-all">
                    {{-- Stars --}}
                    <div class="flex items-center gap-1 mb-6">
                        @for($j = 0; $j < 5; $j++)
                            <i class="fa-solid fa-star text-amber-400 text-xl"></i>
                        @endfor
                    </div>

                    {{-- Quote --}}
                    <p class="text-white/70 leading-relaxed mb-8 text-lg">"{{ $testimonial['text'] }}"</p>

                    {{-- Author --}}
                    <div class="flex items-center gap-4">
                        <img src="{{ $testimonial['img'] }}" alt="{{ $testimonial['name'] }}" class="w-16 h-16 rounded-2xl object-cover shadow-lg ring-2 ring-cyan-500/30">
                        <div>
                            <h4 class="font-bold text-white text-lg">{{ $testimonial['name'] }}</h4>
                            <p class="text-sm text-white/50">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         📧 NEWSLETTER
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <section class="relative py-8 z-10">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="glass rounded-[40px] p-12 lg:p-16 card-3d hover:shadow-2xl hover:shadow-cyan-500/10 transition-all">
                <div class="w-24 h-24 mx-auto mb-8 rounded-3xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-xl shadow-cyan-500/30 animate-bounce-soft">
                    <i class="fa-solid fa-envelope text-white text-4xl"></i>
                </div>
                <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">
                    {{ $locale == 'ku' ? 'بەشداری نیوزلەتەر بکە' : 'Join Our Newsletter' }}
                </h2>
                <p class="text-white/50 mb-10 max-w-lg mx-auto text-lg">
                    {{ $locale == 'ku' ? 'بەشداری بکە و ١٥٪ داشکاندن وەربگرە لە یەکەم کڕینەکەت!' : 'Subscribe and get 15% off your first order!' }}
                </p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                    <input type="email" 
                           placeholder="{{ $locale == 'ku' ? 'ئیمەیلەکەت بنووسە...' : 'Enter your email...' }}"
                           class="flex-1 px-6 py-5 bg-white/5 border border-white/10 rounded-2xl text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500/50 transition-all text-lg">
                    <button type="submit" class="px-8 py-5 bg-gradient-to-r from-cyan-500 to-blue-600 font-bold text-white text-lg rounded-2xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:scale-105 transition-all shine-effect">
                        {{ $locale == 'ku' ? 'بەشداری' : 'Subscribe' }}
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🦶 FOOTER
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    <footer class="relative pt-20 pb-8 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="glass rounded-[40px] p-10 lg:p-14 mb-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                    {{-- Brand --}}
                    <div class="col-span-2 md:col-span-1">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-crown text-white text-2xl"></i>
                            </div>
                            <span class="text-2xl font-black text-white">Luxe<span class="text-gradient-cyan">Shop</span></span>
                        </div>
                        <p class="text-white/50 mb-6 leading-relaxed">
                            {{ $locale == 'ku' ? 'باشترین جلوبەرگ و ئاکسسواری بە کوالیتی نایاب بۆ ئەوانەی کە جیاوازی دەوێن.' : 'Premium fashion and accessories for those who dare to be different.' }}
                        </p>
                        <div class="flex items-center gap-3">
                            @foreach(['facebook', 'instagram', 'twitter', 'tiktok'] as $social)
                            <a href="#" class="w-12 h-12 glass rounded-xl flex items-center justify-center text-white/50 hover:text-cyan-400 hover:shadow-lg hover:shadow-cyan-500/10 transition-all">
                                <i class="fa-brands fa-{{ $social }} text-xl"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Links --}}
                    @foreach([
                        ['title' => $locale == 'ku' ? 'لینکەکان' : 'Quick Links', 'links' => [['label' => $locale == 'ku' ? 'ماڵەوە' : 'Home', 'route' => 'home'], ['label' => $locale == 'ku' ? 'بەرهەمەکان' : 'Shop', 'route' => 'products.index'], ['label' => $locale == 'ku' ? 'کەتەگۆری' : 'Categories', 'route' => 'categories.index']]],
                        ['title' => $locale == 'ku' ? 'پشتگیری' : 'Support', 'links' => [['label' => $locale == 'ku' ? 'پەیوەندی' : 'Contact', 'route' => 'home'], ['label' => $locale == 'ku' ? 'پرسیارەکان' : 'FAQs', 'route' => 'home'], ['label' => $locale == 'ku' ? 'گەڕانەوە' : 'Returns', 'route' => 'home']]],
                        ['title' => $locale == 'ku' ? 'پەیوەندی' : 'Contact', 'isContact' => true]
                    ] as $section)
                    <div>
                        <h4 class="font-bold text-white text-lg mb-6">{{ $section['title'] }}</h4>
                        @if($section['isContact'] ?? false)
                            <ul class="space-y-4">
                                <li class="flex items-center gap-3 text-white/50">
                                    <div class="w-10 h-10 glass rounded-xl flex items-center justify-center">
                                        <i class="fa-solid fa-location-dot text-cyan-400"></i>
                                    </div>
                                    {{ $locale == 'ku' ? 'هەولێر، کوردستان' : 'Erbil, Kurdistan' }}
                                </li>
                                <li class="flex items-center gap-3 text-white/50">
                                    <div class="w-10 h-10 glass rounded-xl flex items-center justify-center">
                                        <i class="fa-solid fa-phone text-cyan-400"></i>
                                    </div>
                                    +964 750 123 4567
                                </li>
                                <li class="flex items-center gap-3 text-white/50">
                                    <div class="w-10 h-10 glass rounded-xl flex items-center justify-center">
                                        <i class="fa-solid fa-envelope text-cyan-400"></i>
                                    </div>
                                    info@luxeshop.com
                                </li>
                            </ul>
                        @else
                            <ul class="space-y-3">
                                @foreach($section['links'] as $link)
                                <li>
                                    <a href="{{ route($link['route']) }}" class="text-white/50 hover:text-cyan-400 font-medium transition-colors">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Bottom --}}
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 px-4">
                <p class="text-white/40 text-sm">
                    © 2026 LuxeShop. {{ $locale == 'ku' ? 'هەموو مافەکان پارێزراون.' : 'All rights reserved.' }}
                </p>
                <div class="flex items-center gap-3">
                    @foreach(['cc-visa', 'cc-mastercard', 'cc-paypal', 'cc-apple-pay'] as $payment)
                    <div class="w-14 h-10 glass rounded-lg flex items-center justify-center">
                        <i class="fa-brands fa-{{ $payment }} text-white/40 text-xl"></i>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>

    {{-- Alpine.js Carousel Component --}}
    <script>
        function heroCarousel() {
            return {
                currentSlide: 0,
                slides: [
                    {
                        img: 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&q=80',
                        badge: '{{ $locale == "ku" ? "✨ تایبەت" : "✨ Special" }}',
                        title: '{{ $locale == "ku" ? "داشکاندنی %30" : "30% OFF" }}',
                        subtitle: '{{ $locale == "ku" ? "لە هەموو بەرهەمەکان" : "On All Products" }}',
                        color: 'from-cyan-500 via-purple-500 to-pink-500'
                    },
                    {
                        img: 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&q=80',
                        badge: '{{ $locale == "ku" ? "🔥 نوێ" : "🔥 New" }}',
                        title: '{{ $locale == "ku" ? "کۆڵەکشنی هاوین" : "Summer Collection" }}',
                        subtitle: '{{ $locale == "ku" ? "ستایلی تازە و شۆخ" : "Fresh & Vibrant Styles" }}',
                        color: 'from-pink-500 via-rose-500 to-orange-500'
                    },
                    {
                        img: 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=400&q=80',
                        badge: '{{ $locale == "ku" ? "👔 پیاوان" : "👔 Men" }}',
                        title: '{{ $locale == "ku" ? "مۆدای پیاوان" : "Men\'s Fashion" }}',
                        subtitle: '{{ $locale == "ku" ? "ئەلگانت و کلاسیک" : "Elegant & Classic" }}',
                        color: 'from-indigo-500 via-purple-500 to-pink-500'
                    },
                    {
                        img: 'https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=400&q=80',
                        badge: '{{ $locale == "ku" ? "🚚 خۆڕایی" : "🚚 Free" }}',
                        title: '{{ $locale == "ku" ? "گەیاندنی خۆڕایی" : "Free Shipping" }}',
                        subtitle: '{{ $locale == "ku" ? "بۆ هەموو داواکاریەکان" : "On All Orders" }}',
                        color: 'from-emerald-500 via-teal-500 to-cyan-500'
                    }
                ],
                autoplayInterval: null,
                
                init() {
                    this.startAutoplay();
                },
                
                startAutoplay() {
                    this.autoplayInterval = setInterval(() => {
                        this.nextSlide();
                    }, 5000);
                },
                
                stopAutoplay() {
                    clearInterval(this.autoplayInterval);
                },
                
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                },
                
                prevSlide() {
                    this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                },
                
                goToSlide(index) {
                    this.currentSlide = index;
                    this.stopAutoplay();
                    this.startAutoplay();
                },
                
                getSlideClasses(index) {
                    if (index === this.currentSlide) {
                        return 'z-10 opacity-100';
                    }
                    return 'z-0 opacity-0';
                },
                
                getSlideStyles(index) {
                    const diff = index - this.currentSlide;
                    
                    if (index === this.currentSlide) {
                        return 'transform: perspective(1000px) rotateY(0deg) translateZ(0) scale(1);';
                    } else if (diff === 1 || (diff === -(this.slides.length - 1))) {
                        return 'transform: perspective(1000px) rotateY(45deg) translateX(50%) translateZ(-200px) scale(0.8);';
                    } else if (diff === -1 || (diff === (this.slides.length - 1))) {
                        return 'transform: perspective(1000px) rotateY(-45deg) translateX(-50%) translateZ(-200px) scale(0.8);';
                    } else {
                        return 'transform: perspective(1000px) translateZ(-400px) scale(0.6);';
                    }
                }
            }
        }
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
