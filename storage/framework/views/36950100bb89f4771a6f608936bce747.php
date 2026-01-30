<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['pd' => 'true']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['pd' => 'true']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'rtl' : 'ltr'); ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo e(app()->getLocale() == 'ku' ? 'کورد مارکەت - فرۆشگای مۆدا. جلوبەرگی تایبەت و ئاکسیسۆری بدۆزەرەوە.' : (app()->getLocale() == 'ar' ? 'كورد ماركت - متجر الأزياء. اعثر على ملابس وإكسسوارات مميزة.' : 'Kurd Market - Fashion Shop. Find special clothes and accessories.')); ?>">
    <meta name="keywords" content="<?php echo e(app()->getLocale() == 'ku' ? 'جلوبەرگ، مۆدا، کڕین، فرۆشگا، کوردستان، جلی ژنانە، جلی پیاوانە' : (app()->getLocale() == 'ar' ? 'ملابس، أزياء، تسوق، متجر، كوردستان، ملابس نسائية، ملابس رجالية' : 'clothing, fashion, shopping, store, Kurdistan, women clothing, men clothing')); ?>">
    <meta name="author" content="Kurd Market">
    <meta name="robots" content="index, follow">
    
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e(app()->getLocale() == 'ku' ? 'کورد مارکەت - فرۆشگای مۆدا' : (app()->getLocale() == 'ar' ? 'كورد ماركت - متجر الأزياء' : 'Kurd Market - Fashion Store')); ?>">
    <meta property="og:description" content="<?php echo e(app()->getLocale() == 'ku' ? 'جلوبەرگی تایبەت و ئاکسیسۆری بدۆزەرەوە بە باشترین نرخ' : (app()->getLocale() == 'ar' ? 'اعثر على ملابس وإكسسوارات مميزة بأفضل الأسعار' : 'Find special clothes and accessories at the best prices')); ?>">
    <meta property="og:image" content="<?php echo e(asset('images/og-image.jpg')); ?>">
    
    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo e(url()->current()); ?>">
    <meta property="twitter:title" content="<?php echo e(app()->getLocale() == 'ku' ? 'کورد مارکەت - فرۆشگای مۆدا' : (app()->getLocale() == 'ar' ? 'كورد ماركت - متجر الأزياء' : 'Kurd Market - Fashion Store')); ?>">
    <meta property="twitter:description" content="<?php echo e(app()->getLocale() == 'ku' ? 'جلوبەرگی تایبەت و ئاکسیسۆری بدۆزەرەوە' : (app()->getLocale() == 'ar' ? 'اعثر على ملابس وإكسسوارات مميزة' : 'Find special clothes and accessories')); ?>">
    
    
    <meta name="theme-color" content="#9333ea">
    <meta name="msapplication-TileColor" content="#9333ea">
    
    <title><?php echo $__env->yieldContent('title', app()->getLocale() == 'ku' ? 'کورد مارکەت' : (app()->getLocale() == 'ar' ? 'كورد ماركت' : 'Kurd Market')); ?></title>
    
    
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon.png')); ?>">
    
    
    <script src="https://kit.fontawesome.com/3a78b9f26f.js" crossorigin="anonymous" defer></script>
    
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
    <style>
        [x-cloak] { display: none !important; }
        body { direction: <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'rtl' : 'ltr'); ?>; }
        
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
    </style>
    
    
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

<body class="flex flex-col min-h-screen bg-dark-50 text-dark-900 antialiased">
    
    <nav x-data="{ open: false, scrolled: false, searchOpen: false }" 
         @scroll.window="scrolled = (window.pageYOffset > 20)"
         :class="scrolled ? 'bg-white/95 backdrop-blur-xl shadow-lg shadow-dark-900/10' : 'bg-white/80 backdrop-blur-md'"
         class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16 lg:h-20">
                
                <div class="flex items-center gap-2 sm:gap-4 flex-1">
                    
                    <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-2 sm:gap-3 group">
                        
                        <div class="relative">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-purple-600 via-pink-500 to-orange-400 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:shadow-purple-500/50 group-hover:scale-105 transition-all duration-300 rotate-2 group-hover:rotate-0">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-7 lg:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                            
                            <div class="absolute -top-0.5 -right-0.5 w-2 h-2 sm:w-3 sm:h-3 bg-yellow-400 rounded-full animate-pulse shadow-lg shadow-yellow-400/50"></div>
                        </div>
                        
                        
                        <div class="flex flex-col">
                            <span class="text-lg sm:text-xl lg:text-2xl font-black tracking-tight">
                                <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-orange-500 bg-clip-text text-transparent">کورد</span>
                                <span class="text-gray-800">مارکە</span>
                            </span>
                            <span class="text-[8px] sm:text-[10px] lg:text-xs text-gray-400 font-medium -mt-0.5 tracking-wide hidden sm:block">KURD MARKET</span>
                        </div>
                    </a>
                    
                    
                    <div class="flex-1 max-w-md mx-2 lg:hidden">
                        <div class="relative">
                            <input type="text" 
                                   placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'گەڕان...' : (app()->getLocale() == 'ar' ? 'بحث...' : 'Search...')); ?>"
                                   class="w-full h-8 sm:h-9 px-3 sm:px-4 <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'pr-10 pl-3' : 'pl-10 pr-3'); ?> bg-gray-100 border-0 rounded-full text-sm placeholder-gray-400 focus:ring-2 focus:ring-purple-300 focus:bg-white transition-all">
                            <div class="absolute <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'right-3' : 'left-3'); ?> top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-search text-gray-400 text-xs"></i>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="hidden lg:block h-8 w-px bg-gray-200"></div>
                    <div x-data="{ langOpen: false }" class="relative hidden lg:block">
                        <button @click="langOpen = !langOpen" 
                                class="flex items-center gap-2 px-3 lg:px-4 py-2 rounded-xl bg-gradient-to-r from-purple-50 to-pink-50 hover:from-purple-100 hover:to-pink-100 border border-purple-200/50 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-globe text-purple-500 text-sm"></i>
                            <span class="text-sm font-bold text-purple-700">
                                <?php if(app()->getLocale() == 'ku'): ?>
                                    کوردی
                                <?php elseif(app()->getLocale() == 'ar'): ?>
                                    العربية
                                <?php else: ?>
                                    English
                                <?php endif; ?>
                            </span>
                            <svg class="w-3 h-3 text-purple-500 transition-transform duration-300" :class="langOpen && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <div x-show="langOpen" 
                             @click.away="langOpen = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             x-cloak
                             class="absolute <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'right-0' : 'left-0'); ?> mt-2 w-36 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50">
                            <a href="<?php echo e(route('language.switch', 'ku')); ?>" 
                               class="flex items-center justify-between px-4 py-3 hover:bg-purple-50 transition-all <?php echo e(app()->getLocale() == 'ku' ? 'bg-purple-50 text-purple-700 font-bold' : 'text-gray-700'); ?>">
                                <span class="text-sm">کوردی</span>
                                <?php if(app()->getLocale() == 'ku'): ?>
                                    <i class="fa-solid fa-check text-purple-600 text-xs"></i>
                                <?php endif; ?>
                            </a>
                            <a href="<?php echo e(route('language.switch', 'ar')); ?>" 
                               class="flex items-center justify-between px-4 py-3 hover:bg-purple-50 transition-all <?php echo e(app()->getLocale() == 'ar' ? 'bg-purple-50 text-purple-700 font-bold' : 'text-gray-700'); ?>">
                                <span class="text-sm">العربية</span>
                                <?php if(app()->getLocale() == 'ar'): ?>
                                    <i class="fa-solid fa-check text-purple-600 text-xs"></i>
                                <?php endif; ?>
                            </a>
                            <a href="<?php echo e(route('language.switch', 'en')); ?>" 
                               class="flex items-center justify-between px-4 py-3 hover:bg-purple-50 transition-all <?php echo e(app()->getLocale() == 'en' ? 'bg-purple-50 text-purple-700 font-bold' : 'text-gray-700'); ?>">
                                <span class="text-sm">English</span>
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <i class="fa-solid fa-check text-purple-600 text-xs"></i>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                </div>

                
                <ul class="hidden lg:flex items-center gap-1">
                    <?php
                        $navItems = [
                            ['route' => 'home', 'label' => __('messages.home'), 'icon' => 'fa-home'],
                            ['route' => 'products.index', 'label' => __('messages.shop'), 'icon' => 'fa-bag-shopping'],
                            ['route' => 'cart.index', 'label' => __('messages.cart'), 'icon' => 'fa-cart-shopping'],
                            ['route' => 'orders.index', 'label' => __('messages.orders'), 'icon' => 'fa-box'],
                        ];
                    ?>
                    
                    <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route($item['route'])); ?>"
                               class="relative px-4 py-2 rounded-xl font-medium transition-all duration-300 flex items-center gap-2
                               <?php echo e(request()->routeIs($item['route']) 
                                  ? 'text-primary-600 bg-primary-50' 
                                  : 'text-dark-600 hover:text-primary-600 hover:bg-primary-50/50'); ?>">
                                <i class="fa-solid <?php echo e($item['icon']); ?> text-sm"></i>
                                <?php echo e($item['label']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(auth()->guard()->check()): ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                            <li>
                                <a href="<?php echo e(route('dashboard')); ?>"
                                   class="px-4 py-2 rounded-xl font-medium transition-all flex items-center gap-2
                                   <?php echo e(request()->routeIs('dashboard') ? 'text-primary-600 bg-primary-50' : 'text-dark-600 hover:text-primary-600 hover:bg-primary-50/50'); ?>">
                                    <i class="fa-solid fa-gauge-high text-sm"></i>
                                    <?php echo e(__('messages.dashboard')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>

                
                <div class="hidden lg:flex items-center gap-3">
                    <?php if(auth()->guard()->check()): ?>
                        <span class="text-sm text-dark-500"><?php echo e(__('messages.hello')); ?>، <?php echo e(auth()->user()->name); ?></span>
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn-primary text-white px-5 py-2.5 rounded-xl font-medium flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <?php echo e(__('messages.logout')); ?>

                            </button>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="px-5 py-2.5 rounded-xl font-medium text-dark-700 hover:text-primary-600 hover:bg-primary-50/50 transition-all text-sm">
                            <?php echo e(__('messages.login')); ?>

                        </a>
                        <a href="<?php echo e(route('register')); ?>" class="btn-primary text-white px-5 py-2.5 rounded-xl font-medium text-sm">
                            <?php echo e(__('messages.register')); ?>

                        </a>
                    <?php endif; ?>
                </div>

                
                <div class="flex items-center gap-3 lg:hidden">
                    
                    <div x-data="{ open: false }" class="relative sm:hidden">
                        
                        <button @click="open = !open" 
                                class="flex items-center gap-2 px-3 py-2 rounded-xl bg-white/90 backdrop-blur-xl border border-gray-200/80 shadow-md transition-all duration-300"
                                :class="open && 'ring-2 ring-purple-400/50'">
                            <i class="fa-solid fa-globe text-purple-500 text-xs"></i>
                            <span class="text-xs font-bold text-gray-700">
                                <?php if(app()->getLocale() == 'ku'): ?>
                                    کوردی
                                <?php elseif(app()->getLocale() == 'ar'): ?>
                                    العربية
                                <?php else: ?>
                                    English
                                <?php endif; ?>
                            </span>
                            <svg class="w-3 h-3 text-gray-400 transition-transform duration-300" :class="open && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        
                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             x-cloak
                             class="absolute <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-0' : 'right-0'); ?> mt-2 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50 min-w-[120px]">
                            
                            <a href="<?php echo e(route('language.switch', 'ku')); ?>" 
                               class="flex items-center justify-between px-4 py-3 transition-all <?php echo e(app()->getLocale() == 'ku' ? 'bg-purple-50 text-purple-700 font-bold' : 'hover:bg-gray-50 text-gray-700'); ?>">
                                <span class="text-sm">کوردی</span>
                                <?php if(app()->getLocale() == 'ku'): ?>
                                    <i class="fa-solid fa-check text-purple-600 text-xs"></i>
                                <?php endif; ?>
                            </a>
                            
                            <a href="<?php echo e(route('language.switch', 'ar')); ?>" 
                               class="flex items-center justify-between px-4 py-3 transition-all <?php echo e(app()->getLocale() == 'ar' ? 'bg-purple-50 text-purple-700 font-bold' : 'hover:bg-gray-50 text-gray-700'); ?>">
                                <span class="text-sm">العربية</span>
                                <?php if(app()->getLocale() == 'ar'): ?>
                                    <i class="fa-solid fa-check text-purple-600 text-xs"></i>
                                <?php endif; ?>
                            </a>
                            
                            <a href="<?php echo e(route('language.switch', 'en')); ?>" 
                               class="flex items-center justify-between px-4 py-3 transition-all <?php echo e(app()->getLocale() == 'en' ? 'bg-purple-50 text-purple-700 font-bold' : 'hover:bg-gray-50 text-gray-700'); ?>">
                                <span class="text-sm">English</span>
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <i class="fa-solid fa-check text-purple-600 text-xs"></i>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                    
                    
                    <button @click="open = !open" 
                            class="w-10 h-10 flex items-center justify-center rounded-2xl bg-white/90 backdrop-blur-xl border border-gray-200/80 shadow-lg shadow-gray-200/50 text-gray-600 hover:text-purple-600 transition-all duration-300">
                        <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg x-show="open" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             x-cloak
             class="lg:hidden absolute top-full left-0 right-0 bg-white/95 backdrop-blur-xl border-t border-dark-100 shadow-xl">
            <div class="max-w-7xl mx-auto px-4 py-6 space-y-2">
                <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route($item['route'])); ?>" 
                       @click="open = false"
                       class="flex items-center gap-4 p-4 rounded-2xl transition-all
                       <?php echo e(request()->routeIs($item['route']) 
                          ? 'bg-gradient-to-r from-primary-500 to-accent-500 text-white shadow-lg' 
                          : 'text-dark-600 hover:bg-dark-50'); ?>">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center
                             <?php echo e(request()->routeIs($item['route']) ? 'bg-white/20' : 'bg-primary-50'); ?>">
                            <i class="fa-solid <?php echo e($item['icon']); ?> <?php echo e(request()->routeIs($item['route']) ? 'text-white' : 'text-primary-500'); ?>"></i>
                        </div>
                        <span class="font-medium"><?php echo e($item['label']); ?></span>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(auth()->guard()->check()): ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        <a href="<?php echo e(route('dashboard')); ?>" @click="open = false"
                           class="flex items-center gap-4 p-4 rounded-2xl transition-all
                           <?php echo e(request()->routeIs('dashboard') ? 'bg-gradient-to-r from-primary-500 to-accent-500 text-white' : 'text-dark-600 hover:bg-dark-50'); ?>">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center <?php echo e(request()->routeIs('dashboard') ? 'bg-white/20' : 'bg-primary-50'); ?>">
                                <i class="fa-solid fa-gauge-high <?php echo e(request()->routeIs('dashboard') ? 'text-white' : 'text-primary-500'); ?>"></i>
                            </div>
                            <span class="font-medium"><?php echo e(__('messages.dashboard')); ?></span>
                        </a>
                    <?php endif; ?>
                <?php endif; ?> 
                 
                
                <div class="pt-4 mt-4 border-t border-dark-100">
                    <div class="flex items-center gap-2 mb-4">
                        <i class="fa-solid fa-globe text-purple-500"></i>
                        <span class="font-medium text-dark-700"><?php echo e(__('messages.language')); ?></span>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <a href="<?php echo e(route('language.switch', 'ku')); ?>" 
                           class="flex items-center justify-center p-3 rounded-xl border-2 transition-all
                           <?php echo e(app()->getLocale() == 'ku' ? 'border-purple-500 bg-purple-50 text-purple-700 font-bold' : 'border-gray-200 hover:border-purple-300 text-gray-700'); ?>">
                            <span class="text-sm">کوردی</span>
                        </a>
                        <a href="<?php echo e(route('language.switch', 'ar')); ?>" 
                           class="flex items-center justify-center p-3 rounded-xl border-2 transition-all
                           <?php echo e(app()->getLocale() == 'ar' ? 'border-purple-500 bg-purple-50 text-purple-700 font-bold' : 'border-gray-200 hover:border-purple-300 text-gray-700'); ?>">
                            <span class="text-sm">العربية</span>
                        </a>
                        <a href="<?php echo e(route('language.switch', 'en')); ?>" 
                           class="flex items-center justify-center p-3 rounded-xl border-2 transition-all
                           <?php echo e(app()->getLocale() == 'en' ? 'border-purple-500 bg-purple-50 text-purple-700 font-bold' : 'border-gray-200 hover:border-purple-300 text-gray-700'); ?>">
                            <span class="text-sm">English</span>
                        </a>
                    </div>
                </div>
                
                <div class="pt-4 mt-4 border-t border-dark-100">
                    <?php if(auth()->guard()->check()): ?>
                        <div class="flex items-center justify-between p-4 bg-dark-50 rounded-2xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary-500 to-accent-500 flex items-center justify-center text-white font-bold">
                                    <?php echo e(strtoupper(substr(auth()->user()->name, 0, 1))); ?>

                                </div>
                                <span class="font-medium text-dark-700"><?php echo e(auth()->user()->name); ?></span>
                            </div>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="w-10 h-10 rounded-xl bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </button>
                            </form>
                        </div>
                    <?php else: ?>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="<?php echo e(route('login')); ?>" class="p-4 text-center rounded-2xl border-2 border-dark-200 font-medium text-dark-700 hover:border-primary-500 hover:text-primary-600 transition-all">
                                <?php echo e(__('messages.login')); ?>

                            </a>
                            <a href="<?php echo e(route('register')); ?>" class="p-4 text-center rounded-2xl btn-primary text-white font-medium">
                                <?php echo e(__('messages.register')); ?>

                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="h-14 sm:h-16 lg:h-20"></div>

    
    <main class="<?php if($pd == 'true'): ?> max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full <?php endif; ?> grow">
        <?php echo e($slot); ?>

    </main>

    
    <?php if (isset($component)) { $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $attributes = $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $component = $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>

    
    <footer class="bg-dark-900 text-white mt-auto relative overflow-hidden">
        
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary-500/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent-500/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 relative">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
                
                <div class="col-span-2 md:col-span-1 space-y-6">
                    <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3 group">
                        
                        <div class="relative">
                            <div class="w-11 h-11 bg-gradient-to-br from-purple-500 via-pink-500 to-orange-400 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform rotate-3 group-hover:rotate-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-black">
                                <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400 bg-clip-text text-transparent">کورد</span>
                                <span class="text-white">مارکە</span>
                            </span>
                        </div>
                    </a>
                    <p class="text-dark-400 text-sm leading-relaxed">
                        مۆدای باڵا بۆ ئەوانەی جیاوازی دەخوازن. کوالیتی لەگەڵ ستایل.
                    </p>
                    <div class="flex gap-3">
                        <?php $__currentLoopData = ['facebook-f', 'instagram', 'twitter', 'tiktok']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#" class="w-10 h-10 rounded-xl bg-dark-800 flex items-center justify-center text-dark-400 hover:bg-gradient-to-br hover:from-purple-500 hover:to-pink-500 hover:text-white transition-all">
                                <i class="fa-brands fa-<?php echo e($social); ?>"></i>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                
                <div>
                    <h4 class="font-semibold mb-4 text-white"><?php echo e(__('messages.shop')); ?></h4>
                    <ul class="space-y-3">
                        <?php
                            $shopLinks = app()->getLocale() == 'ku' 
                                ? ['نوێترین ئامادەکراو', 'باشترین فرۆش', 'داشکاندن', 'کۆلێکشن']
                                : ['New Arrivals', 'Best Sellers', 'Discounts', 'Collections'];
                        ?>
                        <?php $__currentLoopData = $shopLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('products.index')); ?>" class="text-sm text-dark-400 hover:text-primary-400 transition-colors"><?php echo e($link); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                
                <div>
                    <h4 class="font-semibold mb-4 text-white"><?php echo e(app()->getLocale() == 'ku' ? 'یارمەتی' : 'Support'); ?></h4>
                    <ul class="space-y-3">
                        <?php
                            $supportLinks = app()->getLocale() == 'ku' 
                                ? ['پرسیارە دووپاتکراوەکان', 'گواستنەوە', 'گەڕاندنەوە', 'شوێنپێکەوتنی داواکاری']
                                : ['FAQs', 'Shipping', 'Returns', 'Track Order'];
                        ?>
                        <?php $__currentLoopData = $supportLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#" class="text-sm text-dark-400 hover:text-primary-400 transition-colors"><?php echo e($link); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                
                <div>
                    <h4 class="font-semibold mb-4 text-white"><?php echo e(__('messages.contact_us')); ?></h4>
                    <ul class="space-y-3 text-sm text-dark-400">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-primary-400"></i>
                            hello@snapstyle.com
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone text-primary-400"></i>
                            +964 750 123 4567
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-primary-400 mt-1"></i>
                            <span>شەقامی مۆدا ١٢٣<br>هەولێر، کوردستان</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            
            <div class="mt-12 pt-8 border-t border-dark-800 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-dark-500">© <?php echo e(date('Y')); ?> <?php echo e(app()->getLocale() == 'ku' ? 'کورد مارکەت. هەموو مافەکان پارێزراون.' : 'Kurd Market. All rights reserved.'); ?></p>
                <div class="flex items-center gap-6 text-sm text-dark-500">
                    <a href="#" class="hover:text-primary-400 transition-colors"><?php echo e(__('messages.privacy_policy')); ?></a>
                    <a href="#" class="hover:text-primary-400 transition-colors"><?php echo e(__('messages.terms')); ?></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/layouts/main.blade.php ENDPATH**/ ?>