<?php
    $locale = app()->getLocale();
    $isRtl = in_array($locale, ['ku', 'ar']);
?>
<!DOCTYPE html>
<html lang="<?php echo e($locale); ?>" dir="<?php echo e($isRtl ? 'rtl' : 'ltr'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($locale == 'ku' ? 'نیۆ ستایل - فاشنی مۆدێرن' : 'NeoStyle - Modern Fashion'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * { font-family: 'Inter', sans-serif; }
        
        /* Custom Animations */
        @keyframes float { 0%, 100% { transform: translateY(0px) rotate(0deg); } 50% { transform: translateY(-20px) rotate(5deg); } }
        @keyframes glow { 0%, 100% { opacity: 0.4; } 50% { opacity: 0.8; } }
        @keyframes slideUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes slideIn { from { opacity: 0; transform: translateX(-40px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes pulse-slow { 0%, 100% { transform: scale(1); opacity: 0.3; } 50% { transform: scale(1.1); opacity: 0.5; } }
        @keyframes gradient { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        @keyframes shimmer { 0% { background-position: -200% 0; } 100% { background-position: 200% 0; } }
        
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-glow { animation: glow 3s ease-in-out infinite; }
        .animate-slideUp { animation: slideUp 0.8s ease-out forwards; }
        .animate-slideIn { animation: slideIn 0.8s ease-out forwards; }
        .animate-pulse-slow { animation: pulse-slow 8s ease-in-out infinite; }
        .animate-gradient { animation: gradient 8s ease infinite; background-size: 200% 200%; }
        .animate-shimmer { animation: shimmer 3s linear infinite; background-size: 200% 100%; }
        
        .glass { background: rgba(255,255,255,0.03); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.08); }
        .glass-strong { background: rgba(255,255,255,0.08); backdrop-filter: blur(30px); border: 1px solid rgba(255,255,255,0.15); }
        
        .text-gradient { background: linear-gradient(135deg, #06b6d4, #8b5cf6, #ec4899); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .text-gradient-gold { background: linear-gradient(135deg, #fbbf24, #f59e0b, #d97706); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        
        .btn-glow { box-shadow: 0 0 30px rgba(139, 92, 246, 0.4), 0 0 60px rgba(139, 92, 246, 0.2); }
        .btn-glow:hover { box-shadow: 0 0 40px rgba(139, 92, 246, 0.6), 0 0 80px rgba(139, 92, 246, 0.3); }
        
        .card-hover { transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 30px 60px rgba(0,0,0,0.4); }
        
        /* Hide scrollbar */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Gradient Borders */
        .gradient-border { position: relative; }
        .gradient-border::before { content: ''; position: absolute; inset: 0; border-radius: inherit; padding: 1px; background: linear-gradient(135deg, #06b6d4, #8b5cf6, #ec4899); -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude; }
    </style>
</head>
<body class="bg-[#0a0a0f] text-white overflow-x-hidden">

    
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-0 <?php echo e($isRtl ? 'right-0' : 'left-0'); ?> w-[800px] h-[800px] bg-gradient-to-br from-violet-600/20 via-purple-600/10 to-transparent rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-0 <?php echo e($isRtl ? 'left-0' : 'right-0'); ?> w-[600px] h-[600px] bg-gradient-to-br from-cyan-500/15 via-blue-600/10 to-transparent rounded-full blur-[100px] animate-pulse-slow" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gradient-to-br from-pink-500/10 via-rose-600/5 to-transparent rounded-full blur-[80px] animate-pulse-slow" style="animation-delay: 4s;"></div>
    </div>

    
    <nav class="fixed top-0 left-0 right-0 z-50" x-data="{ scrolled: false, mobileMenu: false }" @scroll.window="scrolled = (window.scrollY > 50)">
        <div :class="scrolled ? 'glass-strong py-3' : 'py-5'" class="transition-all duration-500">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center justify-between">
                    
                    <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3 group">
                        <div class="relative">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-600 to-purple-700 flex items-center justify-center shadow-lg shadow-violet-600/30 group-hover:shadow-violet-600/50 transition-shadow">
                                <i class="fa-solid fa-gem text-white text-xl"></i>
                            </div>
                            <div class="absolute -inset-1 bg-gradient-to-br from-violet-600 to-purple-700 rounded-xl blur opacity-40 group-hover:opacity-60 transition-opacity"></div>
                        </div>
                        <div class="hidden sm:block">
                            <span class="text-2xl font-black tracking-tight">Neo<span class="text-gradient">Style</span></span>
                            <p class="text-[10px] text-white/40 tracking-[0.3em] uppercase">Premium Fashion</p>
                        </div>
                    </a>

                    
                    <div class="hidden lg:flex items-center gap-1">
                        <?php
                            $menuItems = [
                                ['route' => 'home', 'icon' => 'fa-house', 'label' => $locale == 'ku' ? 'ماڵەوە' : 'Home', 'active' => true],
                                ['route' => 'products.index', 'icon' => 'fa-bag-shopping', 'label' => $locale == 'ku' ? 'بەرهەمەکان' : 'Shop'],
                                ['route' => 'categories.index', 'icon' => 'fa-layer-group', 'label' => $locale == 'ku' ? 'کەتەگۆری' : 'Categories'],
                            ];
                        ?>
                        <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route($item['route'])); ?>" 
                               class="relative px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-300 group
                                      <?php echo e($item['active'] ?? false ? 'text-white' : 'text-white/60 hover:text-white'); ?>">
                                <?php if($item['active'] ?? false): ?>
                                    <div class="absolute inset-0 bg-white/10 rounded-xl"></div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-violet-600/20 to-purple-600/20 rounded-xl"></div>
                                <?php endif; ?>
                                <span class="relative flex items-center gap-2">
                                    <i class="fa-solid <?php echo e($item['icon']); ?> text-xs opacity-60"></i>
                                    <?php echo e($item['label']); ?>

                                </span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <div class="flex items-center gap-2">
                        
                        <button class="w-11 h-11 rounded-xl glass flex items-center justify-center text-white/60 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                        
                        <a href="#" class="hidden sm:flex w-11 h-11 rounded-xl glass items-center justify-center text-white/60 hover:text-white hover:bg-white/10 transition-all relative">
                            <i class="fa-regular fa-heart"></i>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full text-[10px] font-bold flex items-center justify-center shadow-lg">3</span>
                        </a>

                        
                        <a href="<?php echo e(route('cart.index')); ?>" class="w-11 h-11 rounded-xl glass flex items-center justify-center text-white/60 hover:text-white hover:bg-white/10 transition-all relative">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-r from-violet-500 to-purple-500 rounded-full text-[10px] font-bold flex items-center justify-center shadow-lg">
                                <?php echo e(auth()->check() && auth()->user()->cart ? auth()->user()->cart->items->count() : 0); ?>

                            </span>
                        </a>

                        
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('orders.index')); ?>" class="hidden sm:flex items-center gap-3 px-4 py-2.5 rounded-xl glass hover:bg-white/10 transition-all">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center">
                                    <i class="fa-solid fa-user text-sm"></i>
                                </div>
                                <span class="text-sm font-medium"><?php echo e(Str::limit(auth()->user()->name, 10)); ?></span>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="hidden sm:flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-violet-600 to-purple-600 text-white font-semibold text-sm hover:shadow-lg hover:shadow-violet-600/30 transition-all">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span><?php echo e($locale == 'ku' ? 'چوونەژوورەوە' : 'Login'); ?></span>
                            </a>
                        <?php endif; ?>

                        
                        <button @click="mobileMenu = !mobileMenu" class="lg:hidden w-11 h-11 rounded-xl glass flex items-center justify-center text-white/60 hover:text-white transition-all">
                            <i x-show="!mobileMenu" class="fa-solid fa-bars"></i>
                            <i x-show="mobileMenu" class="fa-solid fa-xmark" x-cloak></i>
                        </button>
                    </div>
                </div>

                
                <div x-show="mobileMenu" x-cloak x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                     class="lg:hidden mt-4 p-4 glass rounded-2xl">
                    <div class="space-y-2">
                        <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route($item['route'])); ?>" 
                               class="flex items-center gap-3 px-4 py-3 rounded-xl <?php echo e($item['active'] ?? false ? 'bg-white/10' : 'hover:bg-white/5'); ?> transition-colors">
                                <i class="fa-solid <?php echo e($item['icon']); ?> text-violet-400"></i>
                                <span class="font-medium"><?php echo e($item['label']); ?></span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="border-t border-white/10 pt-4 mt-4">
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('login')); ?>" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-violet-600 to-purple-600 font-semibold">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <?php echo e($locale == 'ku' ? 'چوونەژوورەوە' : 'Login'); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    
    <section class="relative min-h-screen flex items-center pt-24 pb-12 overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute top-20 <?php echo e($isRtl ? 'left-20' : 'right-20'); ?> w-72 h-72 bg-violet-600/30 rounded-full blur-[100px] animate-glow"></div>
            <div class="absolute bottom-20 <?php echo e($isRtl ? 'right-20' : 'left-20'); ?> w-96 h-96 bg-cyan-500/20 rounded-full blur-[120px] animate-glow" style="animation-delay: 1.5s;"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                
                
                <div class="text-center lg:text-<?php echo e($isRtl ? 'right' : 'left'); ?> space-y-8 animate-slideUp">
                    
                    <div class="inline-flex items-center gap-3 px-5 py-2.5 glass rounded-full">
                        <span class="flex h-2 w-2 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="text-sm font-medium text-white/80"><?php echo e($locale == 'ku' ? 'کۆڵەکشنی نوێ ٢٠٢٦ ئامادەیە' : 'New Collection 2026 Available'); ?></span>
                    </div>

                    
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black leading-[0.9] tracking-tight">
                        <span class="block text-white"><?php echo e($locale == 'ku' ? 'مۆدای' : 'Future of'); ?></span>
                        <span class="block text-gradient mt-2"><?php echo e($locale == 'ku' ? 'داهاتوو' : 'Fashion'); ?></span>
                        <span class="block text-white/60 text-4xl sm:text-5xl lg:text-6xl mt-4"><?php echo e($locale == 'ku' ? 'بدۆزەوە' : 'Discover'); ?></span>
                    </h1>

                    
                    <p class="text-lg text-white/50 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                        <?php echo e($locale == 'ku' ? 'کۆڵەکشنی تایبەتی ٢٠٢٦ بدۆزەوە. دیزاینی مۆدێرن و کوالیتی نایاب بۆ ئەوانەی کە جیاوازی دەوێن.' : 'Explore our exclusive 2026 collection. Modern design and exceptional quality for those who want to stand out.'); ?>

                    </p>

                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-<?php echo e($isRtl ? 'end' : 'start'); ?>">
                        <a href="<?php echo e(route('products.index')); ?>" 
                           class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-violet-600 to-purple-600 rounded-2xl font-bold text-lg overflow-hidden btn-glow transition-all duration-500">
                            <span class="relative z-10 flex items-center gap-3">
                                <?php echo e($locale == 'ku' ? 'کڕینی ئێستا' : 'Shop Now'); ?>

                                <i class="fa-solid fa-arrow-<?php echo e($isRtl ? 'left' : 'right'); ?> group-hover:translate-x-1 transition-transform"></i>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </a>
                        <a href="<?php echo e(route('categories.index')); ?>" 
                           class="inline-flex items-center justify-center gap-3 px-8 py-4 glass rounded-2xl font-semibold text-lg hover:bg-white/10 transition-all gradient-border">
                            <i class="fa-solid fa-play text-violet-400"></i>
                            <?php echo e($locale == 'ku' ? 'کۆڵەکشنەکان' : 'Collections'); ?>

                        </a>
                    </div>

                    
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                        <?php $__currentLoopData = [
                            ['num' => '50K+', 'label' => $locale == 'ku' ? 'کڕیار' : 'Customers'],
                            ['num' => '10K+', 'label' => $locale == 'ku' ? 'بەرهەم' : 'Products'],
                            ['num' => '4.9', 'label' => $locale == 'ku' ? 'هەڵسەنگاندن' : 'Rating']
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center">
                            <p class="text-2xl sm:text-3xl font-black text-gradient"><?php echo e($stat['num']); ?></p>
                            <p class="text-sm text-white/40 mt-1"><?php echo e($stat['label']); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                
                <div class="relative animate-slideIn" style="animation-delay: 0.3s;">
                    
                    <div class="relative">
                        
                        <div class="absolute -inset-10 bg-gradient-to-r from-violet-600/30 via-purple-600/20 to-pink-600/30 rounded-[60px] blur-3xl animate-glow"></div>
                        
                        
                        <div class="relative glass-strong rounded-[40px] p-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=800&q=85" 
                                 alt="Fashion Model" 
                                 class="w-full aspect-[3/4] object-cover rounded-[32px]">
                            
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0f]/80 via-transparent to-transparent rounded-[32px]"></div>
                            
                            
                            <div class="absolute top-8 <?php echo e($isRtl ? 'right-8' : 'left-8'); ?> glass-strong rounded-2xl p-4 animate-float">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center">
                                        <i class="fa-solid fa-check text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold"><?php echo e($locale == 'ku' ? 'کوالیتی' : 'Premium'); ?></p>
                                        <p class="text-xs text-white/50"><?php echo e($locale == 'ku' ? 'بەڕاستی نایاب' : 'Quality Guaranteed'); ?></p>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="absolute bottom-24 <?php echo e($isRtl ? 'left-8' : 'right-8'); ?> glass-strong rounded-2xl p-4 animate-float" style="animation-delay: 2s;">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center">
                                        <span class="text-white font-black">50%</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold"><?php echo e($locale == 'ku' ? 'داشکاندن' : 'Discount'); ?></p>
                                        <p class="text-xs text-white/50"><?php echo e($locale == 'ku' ? 'کۆڵەکشنی نوێ' : 'New Arrivals'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-xs text-white/40 tracking-widest uppercase"><?php echo e($locale == 'ku' ? 'سکرۆڵ بکە' : 'Scroll'); ?></span>
            <div class="w-6 h-10 rounded-full border-2 border-white/20 flex items-start justify-center p-1">
                <div class="w-1.5 h-3 bg-gradient-to-b from-violet-500 to-purple-500 rounded-full animate-pulse"></div>
            </div>
        </div>
    </section>

    
    <section class="relative py-12 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                    $features = [
                        ['icon' => 'fa-truck-fast', 'gradient' => 'from-cyan-500 to-blue-600', 'title' => $locale == 'ku' ? 'گەیاندنی خۆڕایی' : 'Free Shipping', 'desc' => $locale == 'ku' ? 'بۆ داواکاری +$50' : 'Orders over $50'],
                        ['icon' => 'fa-shield-halved', 'gradient' => 'from-emerald-500 to-teal-600', 'title' => $locale == 'ku' ? 'پارەدانی پارێزراو' : 'Secure Payment', 'desc' => $locale == 'ku' ? '١٠٠٪ پارێزراو' : '100% Protected'],
                        ['icon' => 'fa-rotate-left', 'gradient' => 'from-violet-500 to-purple-600', 'title' => $locale == 'ku' ? 'گەڕانەوەی ئاسان' : 'Easy Returns', 'desc' => $locale == 'ku' ? '٣٠ ڕۆژ گەڕانەوە' : '30 Days Return'],
                        ['icon' => 'fa-headset', 'gradient' => 'from-pink-500 to-rose-600', 'title' => $locale == 'ku' ? 'پشتگیری ٢٤/٧' : '24/7 Support', 'desc' => $locale == 'ku' ? 'هەمیشە ئامادەین' : 'Always Available']
                    ];
                ?>
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group flex items-center gap-4 p-4 glass rounded-2xl hover:bg-white/5 transition-all cursor-default">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br <?php echo e($feature['gradient']); ?> flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fa-solid <?php echo e($feature['icon']); ?> text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white"><?php echo e($feature['title']); ?></h4>
                        <p class="text-sm text-white/40"><?php echo e($feature['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm text-violet-400 mb-4">
                        <i class="fa-solid fa-layer-group"></i>
                        <?php echo e($locale == 'ku' ? 'کەتەگۆریەکان' : 'Categories'); ?>

                    </span>
                    <h2 class="text-4xl lg:text-5xl font-black">
                        <?php echo e($locale == 'ku' ? 'گەڕان بەپێی' : 'Browse by'); ?>

                        <span class="text-gradient"><?php echo e($locale == 'ku' ? 'ستایل' : 'Style'); ?></span>
                    </h2>
                </div>
                <a href="<?php echo e(route('categories.index')); ?>" class="inline-flex items-center gap-2 text-white/60 hover:text-white font-semibold transition-colors group">
                    <?php echo e($locale == 'ku' ? 'هەموو ببینە' : 'View All'); ?>

                    <i class="fa-solid fa-arrow-<?php echo e($isRtl ? 'left' : 'right'); ?> group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                    $categories = [
                        ['name' => $locale == 'ku' ? 'پیاوان' : 'Men', 'img' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=500&q=80', 'count' => '250+', 'gradient' => 'from-blue-600/80 to-cyan-600/80'],
                        ['name' => $locale == 'ku' ? 'ئافرەتان' : 'Women', 'img' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&q=80', 'count' => '340+', 'gradient' => 'from-pink-600/80 to-rose-600/80'],
                        ['name' => $locale == 'ku' ? 'ئاکسسواری' : 'Accessories', 'img' => 'https://images.unsplash.com/photo-1611652022419-a9419f74343d?w=500&q=80', 'count' => '180+', 'gradient' => 'from-violet-600/80 to-purple-600/80'],
                        ['name' => $locale == 'ku' ? 'پێڵاو' : 'Shoes', 'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80', 'count' => '120+', 'gradient' => 'from-amber-600/80 to-orange-600/80']
                    ];
                ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('products.index')); ?>" class="group relative aspect-[3/4] rounded-3xl overflow-hidden card-hover">
                    <img src="<?php echo e($cat['img']); ?>" alt="<?php echo e($cat['name']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t <?php echo e($cat['gradient']); ?> opacity-60"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0f] via-[#0a0a0f]/20 to-transparent"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end">
                        <div class="glass rounded-2xl p-4">
                            <h3 class="text-xl font-bold mb-1"><?php echo e($cat['name']); ?></h3>
                            <p class="text-sm text-white/60"><?php echo e($cat['count']); ?> <?php echo e($locale == 'ku' ? 'بەرهەم' : 'Products'); ?></p>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm text-pink-400 mb-4">
                        <i class="fa-solid fa-fire"></i>
                        <?php echo e($locale == 'ku' ? 'بەرهەمە تایبەتەکان' : 'Featured Products'); ?>

                    </span>
                    <h2 class="text-4xl lg:text-5xl font-black">
                        <?php echo e($locale == 'ku' ? 'باشترین' : 'Best'); ?>

                        <span class="text-gradient"><?php echo e($locale == 'ku' ? 'هەڵبژاردەکان' : 'Sellers'); ?></span>
                    </h2>
                </div>
                <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center gap-2 text-white/60 hover:text-white font-semibold transition-colors group">
                    <?php echo e($locale == 'ku' ? 'هەموو بەرهەمەکان' : 'All Products'); ?>

                    <i class="fa-solid fa-arrow-<?php echo e($isRtl ? 'left' : 'right'); ?> group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                    $products = [
                        ['name' => $locale == 'ku' ? 'چاکەتی پڕیمیەم' : 'Premium Jacket', 'price' => 189, 'old' => 259, 'img' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&q=80', 'badge' => 'HOT', 'badgeColor' => 'from-red-500 to-pink-500'],
                        ['name' => $locale == 'ku' ? 'فستانی ئێواران' : 'Evening Dress', 'price' => 249, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&q=80', 'badge' => 'NEW', 'badgeColor' => 'from-emerald-500 to-teal-500'],
                        ['name' => $locale == 'ku' ? 'سنیکەر' : 'Sneakers', 'price' => 179, 'old' => 249, 'img' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&q=80', 'badge' => '-28%', 'badgeColor' => 'from-amber-500 to-orange-500'],
                        ['name' => $locale == 'ku' ? 'کاتژمێری زیرەک' : 'Smart Watch', 'price' => 399, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&q=80', 'badge' => null, 'badgeColor' => ''],
                        ['name' => $locale == 'ku' ? 'جانتای چەرم' : 'Leather Bag', 'price' => 299, 'old' => 399, 'img' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80', 'badge' => 'SALE', 'badgeColor' => 'from-violet-500 to-purple-500'],
                        ['name' => $locale == 'ku' ? 'کراسی فۆرماڵ' : 'Formal Shirt', 'price' => 89, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1621072156002-e2fccdc0b176?w=400&q=80', 'badge' => null, 'badgeColor' => ''],
                        ['name' => $locale == 'ku' ? 'سونگلاس' : 'Sunglasses', 'price' => 129, 'old' => 179, 'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&q=80', 'badge' => 'TREND', 'badgeColor' => 'from-cyan-500 to-blue-500'],
                        ['name' => $locale == 'ku' ? 'پانتۆڵی جینز' : 'Denim Jeans', 'price' => 119, 'old' => null, 'img' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&q=80', 'badge' => null, 'badgeColor' => '']
                    ];
                ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group glass rounded-3xl overflow-hidden card-hover">
                    
                    <div class="relative aspect-square overflow-hidden">
                        <img src="<?php echo e($product['img']); ?>" alt="<?php echo e($product['name']); ?>" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        
                        <?php if($product['badge']): ?>
                        <div class="absolute top-4 <?php echo e($isRtl ? 'right-4' : 'left-4'); ?>">
                            <span class="px-3 py-1.5 bg-gradient-to-r <?php echo e($product['badgeColor']); ?> text-white text-xs font-bold rounded-lg shadow-lg">
                                <?php echo e($product['badge']); ?>

                            </span>
                        </div>
                        <?php endif; ?>

                        
                        <div class="absolute top-4 <?php echo e($isRtl ? 'left-4' : 'right-4'); ?> flex flex-col gap-2 opacity-0 group-hover:opacity-100 translate-x-4 group-hover:translate-x-0 transition-all">
                            <button class="w-10 h-10 glass-strong rounded-xl flex items-center justify-center text-white/60 hover:text-pink-500 transition-colors">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button class="w-10 h-10 glass-strong rounded-xl flex items-center justify-center text-white/60 hover:text-white transition-colors">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>

                        
                        <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all">
                            <button class="w-full py-3 bg-gradient-to-r from-violet-600 to-purple-600 text-white font-bold rounded-xl hover:shadow-lg hover:shadow-violet-600/30 transition-all">
                                <i class="fa-solid fa-bag-shopping mr-2"></i>
                                <?php echo e($locale == 'ku' ? 'زیادکردن' : 'Add to Cart'); ?>

                            </button>
                        </div>
                    </div>

                    
                    <div class="p-5">
                        <h3 class="font-bold text-white mb-2 truncate group-hover:text-violet-400 transition-colors"><?php echo e($product['name']); ?></h3>
                        <div class="flex items-center gap-1 mb-3">
                            <?php for($i = 0; $i < 5; $i++): ?>
                                <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                            <?php endfor; ?>
                            <span class="text-white/40 text-xs ml-1">(4.9)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <?php if($product['old']): ?>
                                <span class="text-white/40 line-through text-sm">$<?php echo e($product['old']); ?></span>
                            <?php endif; ?>
                            <span class="text-xl font-black text-gradient">$<?php echo e($product['price']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="relative rounded-[40px] overflow-hidden">
                
                <div class="absolute inset-0 bg-gradient-to-r from-violet-600 via-purple-600 to-pink-600 animate-gradient"></div>
                <div class="absolute inset-0 opacity-20" style="background-image: url('https://images.unsplash.com/photo-1558171813-4c088753af8f?w=1600&q=80'); background-size: cover; background-position: center;"></div>
                
                
                <div class="relative z-10 p-12 lg:p-20 text-center">
                    <span class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 rounded-full text-sm font-medium mb-6">
                        <i class="fa-solid fa-clock animate-pulse"></i>
                        <?php echo e($locale == 'ku' ? 'کاتی سنووردار' : 'Limited Time Offer'); ?>

                    </span>
                    <h2 class="text-4xl lg:text-6xl font-black mb-6">
                        <?php echo e($locale == 'ku' ? 'تا ٧٠٪ داشکاندن' : 'Up to 70% OFF'); ?>

                    </h2>
                    <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto">
                        <?php echo e($locale == 'ku' ? 'لە کۆڵەکشنی هاوینەدا. ئەم ئۆفەرە لەدەست مەدە!' : 'On Summer Collection. Don\'t miss this incredible offer!'); ?>

                    </p>

                    
                    <div class="flex items-center justify-center gap-4 mb-10">
                        <?php $__currentLoopData = [['num' => '12', 'label' => $locale == 'ku' ? 'ڕۆژ' : 'Days'], ['num' => '08', 'label' => $locale == 'ku' ? 'کات' : 'Hours'], ['num' => '45', 'label' => $locale == 'ku' ? 'خولەک' : 'Mins'], ['num' => '30', 'label' => $locale == 'ku' ? 'چرکە' : 'Secs']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="text-center">
                                <div class="w-20 h-20 glass-strong rounded-2xl flex items-center justify-center mb-2">
                                    <span class="text-3xl font-black"><?php echo e($time['num']); ?></span>
                                </div>
                                <span class="text-sm text-white/60"><?php echo e($time['label']); ?></span>
                            </div>
                            <?php if($index < 3): ?>
                                <span class="text-3xl font-bold text-white/40 mb-8">:</span>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-bold text-lg rounded-2xl hover:bg-white/90 hover:scale-105 transition-all shadow-2xl">
                        <?php echo e($locale == 'ku' ? 'ئێستا بکڕە' : 'Shop Now'); ?>

                        <i class="fa-solid fa-arrow-<?php echo e($isRtl ? 'left' : 'right'); ?>"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="relative py-24">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="text-center mb-14">
                <span class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm text-amber-400 mb-4">
                    <i class="fa-solid fa-star"></i>
                    <?php echo e($locale == 'ku' ? 'بۆچوونەکان' : 'Testimonials'); ?>

                </span>
                <h2 class="text-4xl lg:text-5xl font-black">
                    <?php echo e($locale == 'ku' ? 'کڕیاران چی' : 'What Customers'); ?>

                    <span class="text-gradient"><?php echo e($locale == 'ku' ? 'دەڵێن' : 'Say'); ?></span>
                </h2>
            </div>

            
            <div class="grid md:grid-cols-3 gap-6">
                <?php
                    $testimonials = [
                        ['name' => $locale == 'ku' ? 'سارا ئەحمەد' : 'Sara Ahmed', 'role' => $locale == 'ku' ? 'دیزاینەر' : 'Designer', 'img' => 'https://randomuser.me/api/portraits/women/1.jpg', 'text' => $locale == 'ku' ? 'کوالیتی بەرهەمەکان زۆر نایابە! هەموو کات دەگەڕێمەوە بۆ زیاتر.' : 'The quality is absolutely amazing! I always come back for more.'],
                        ['name' => $locale == 'ku' ? 'ڕێبین عومەر' : 'Rebin Omar', 'role' => $locale == 'ku' ? 'کارمەند' : 'Employee', 'img' => 'https://randomuser.me/api/portraits/men/2.jpg', 'text' => $locale == 'ku' ? 'باشترین فرۆشگای ئۆنلاینە کە لەگەڵی کاردەکەم. پشتگیریش نایابە.' : 'Best online store I\'ve ever shopped at. Support is incredible.'],
                        ['name' => $locale == 'ku' ? 'هاوژین کەریم' : 'Hawzhin Karim', 'role' => $locale == 'ku' ? 'بلۆگەر' : 'Blogger', 'img' => 'https://randomuser.me/api/portraits/women/3.jpg', 'text' => $locale == 'ku' ? 'ستایلەکان زۆر مۆدێرنن و بە نرخی گونجاو. پێشنیاری دەکەم!' : 'Styles are modern and prices are fair. Highly recommend!']
                    ];
                ?>
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass rounded-3xl p-8 card-hover">
                    <div class="flex items-center gap-1 mb-6">
                        <?php for($i = 0; $i < 5; $i++): ?>
                            <i class="fa-solid fa-star text-amber-400"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="text-white/70 leading-relaxed mb-8">"<?php echo e($testimonial['text']); ?>"</p>
                    <div class="flex items-center gap-4">
                        <img src="<?php echo e($testimonial['img']); ?>" alt="<?php echo e($testimonial['name']); ?>" class="w-14 h-14 rounded-2xl object-cover">
                        <div>
                            <h4 class="font-bold text-white"><?php echo e($testimonial['name']); ?></h4>
                            <p class="text-sm text-white/40"><?php echo e($testimonial['role']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="relative py-24">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="glass rounded-[40px] p-12 lg:p-16">
                <div class="w-20 h-20 mx-auto mb-8 rounded-2xl bg-gradient-to-br from-violet-600 to-purple-600 flex items-center justify-center shadow-lg shadow-violet-600/30">
                    <i class="fa-solid fa-envelope text-white text-3xl"></i>
                </div>
                <h2 class="text-3xl lg:text-4xl font-black mb-4">
                    <?php echo e($locale == 'ku' ? 'بەشداری نیوزلەتەر' : 'Join Newsletter'); ?>

                </h2>
                <p class="text-white/50 mb-10 max-w-lg mx-auto">
                    <?php echo e($locale == 'ku' ? 'بەشداری بکە و ١٥٪ داشکاندن وەربگرە لە یەکەم کڕینەکەت' : 'Subscribe and get 15% off your first order'); ?>

                </p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                    <input type="email" 
                           placeholder="<?php echo e($locale == 'ku' ? 'ئیمەیلەکەت...' : 'Enter your email...'); ?>"
                           class="flex-1 px-6 py-4 glass rounded-2xl text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-violet-500/50 transition-all">
                    <button type="submit" class="px-8 py-4 bg-gradient-to-r from-violet-600 to-purple-600 font-bold rounded-2xl hover:shadow-lg hover:shadow-violet-600/30 transition-all">
                        <?php echo e($locale == 'ku' ? 'بەشداری' : 'Subscribe'); ?>

                    </button>
                </form>
            </div>
        </div>
    </section>

    
    <footer class="relative border-t border-white/5 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 mb-16">
                
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-600 to-purple-700 flex items-center justify-center">
                            <i class="fa-solid fa-gem text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-black">Neo<span class="text-gradient">Style</span></span>
                    </div>
                    <p class="text-white/40 text-sm mb-6 leading-relaxed">
                        <?php echo e($locale == 'ku' ? 'باشترین جلوبەرگ و ئاکسسواری بە کوالیتی نایاب بۆ ئەوانەی کە جیاوازی دەوێن.' : 'Premium fashion and accessories for those who want to stand out.'); ?>

                    </p>
                    <div class="flex items-center gap-3">
                        <?php $__currentLoopData = ['facebook', 'instagram', 'twitter', 'tiktok']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="#" class="w-10 h-10 glass rounded-xl flex items-center justify-center text-white/40 hover:text-white hover:bg-white/10 transition-all">
                            <i class="fa-brands fa-<?php echo e($social); ?>"></i>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                
                <?php $__currentLoopData = [
                    ['title' => $locale == 'ku' ? 'لینکەکان' : 'Quick Links', 'links' => [
                        ['label' => $locale == 'ku' ? 'ماڵەوە' : 'Home', 'route' => 'home'],
                        ['label' => $locale == 'ku' ? 'بەرهەمەکان' : 'Products', 'route' => 'products.index'],
                        ['label' => $locale == 'ku' ? 'کەتەگۆری' : 'Categories', 'route' => 'categories.index']
                    ]],
                    ['title' => $locale == 'ku' ? 'پشتگیری' : 'Support', 'links' => [
                        ['label' => $locale == 'ku' ? 'پەیوەندی' : 'Contact', 'route' => 'home'],
                        ['label' => $locale == 'ku' ? 'پرسیارەکان' : 'FAQs', 'route' => 'home'],
                        ['label' => $locale == 'ku' ? 'گەڕانەوە' : 'Returns', 'route' => 'home']
                    ]],
                    ['title' => $locale == 'ku' ? 'پەیوەندی' : 'Contact', 'isContact' => true]
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <h4 class="font-bold text-white mb-6"><?php echo e($section['title']); ?></h4>
                    <?php if($section['isContact'] ?? false): ?>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-white/40 text-sm">
                                <i class="fa-solid fa-location-dot text-violet-400"></i>
                                <?php echo e($locale == 'ku' ? 'هەولێر، کوردستان' : 'Erbil, Kurdistan'); ?>

                            </li>
                            <li class="flex items-center gap-3 text-white/40 text-sm">
                                <i class="fa-solid fa-phone text-violet-400"></i>
                                +964 750 123 4567
                            </li>
                            <li class="flex items-center gap-3 text-white/40 text-sm">
                                <i class="fa-solid fa-envelope text-violet-400"></i>
                                info@neostyle.com
                            </li>
                        </ul>
                    <?php else: ?>
                        <ul class="space-y-3">
                            <?php $__currentLoopData = $section['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route($link['route'])); ?>" class="text-white/40 hover:text-white text-sm transition-colors">
                                    <?php echo e($link['label']); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-white/30 text-sm">
                    © 2026 NeoStyle. <?php echo e($locale == 'ku' ? 'هەموو مافەکان پارێزراون.' : 'All rights reserved.'); ?>

                </p>
                <div class="flex items-center gap-3">
                    <?php $__currentLoopData = ['cc-visa', 'cc-mastercard', 'cc-paypal', 'cc-apple-pay']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-12 h-8 glass rounded-lg flex items-center justify-center">
                        <i class="fa-brands fa-<?php echo e($payment); ?> text-white/30"></i>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/website/index.blade.php ENDPATH**/ ?>