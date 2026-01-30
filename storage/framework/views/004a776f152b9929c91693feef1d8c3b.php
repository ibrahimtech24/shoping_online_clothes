<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => ['pd' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pd' => 'false']); ?>
    
    <div class="bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 py-3 overflow-hidden relative">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 animate-pulse opacity-20">
            <div class="h-full bg-gradient-to-r from-transparent via-white/10 to-transparent transform -skew-x-12"></div>
        </div>
        <div class="relative flex whitespace-nowrap animate-scroll">
            <div class="flex items-center gap-12 px-6">
                <?php for($i = 0; $i < 4; $i++): ?>
                <div class="flex items-center gap-3 text-white font-bold text-sm tracking-wider">
                    <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white text-xs animate-bounce-soft">
                        🔥
                    </div>
                    <span><?php echo e(app()->getLocale() == 'ku' ? 'داشکاندنی ٪۷۵ - تەنها ئەمڕۆ!' : (app()->getLocale() == 'ar' ? 'خصم ٧٥٪ - اليوم فقط!' : '75% OFF - TODAY ONLY!')); ?></span>
                </div>
                <div class="flex items-center gap-3 text-white font-bold text-sm tracking-wider">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center text-white text-xs animate-bounce-soft" style="animation-delay: 0.3s;">
                        ⚡
                    </div>
                    <span><?php echo e(app()->getLocale() == 'ku' ? 'گەیاندنی خۆڕایی + دیاری' : (app()->getLocale() == 'ar' ? 'شحن مجاني + هدية' : 'FREE SHIPPING + GIFT')); ?></span>
                </div>
                <div class="flex items-center gap-3 text-white font-bold text-sm tracking-wider">
                    <div class="w-8 h-8 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full flex items-center justify-center text-white text-xs animate-bounce-soft" style="animation-delay: 0.6s;">
                        👑
                    </div>
                    <span><?php echo e(app()->getLocale() == 'ku' ? 'کوالیتی لوکس + گەرەنتی' : (app()->getLocale() == 'ar' ? 'جودة فاخرة + ضمان' : 'LUXURY QUALITY + WARRANTY')); ?></span>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    
    <section class="relative min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/30 to-blue-600/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/30 to-purple-600/30 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/3 w-64 h-64 bg-gradient-to-br from-yellow-400/20 to-orange-500/20 rounded-full blur-3xl animate-bounce" style="animation-duration: 3s;"></div>
        </div>
        
        <div class="relative h-screen flex items-center justify-center">
            
            <div class="relative w-full max-w-7xl mx-auto px-4">
                <div class="relative h-[90vh] rounded-3xl overflow-hidden shadow-2xl" id="carousel-container">
                    
                    <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/40 via-purple-500/40 to-pink-500/40 rounded-3xl blur-2xl animate-pulse"></div>
                    
                    
                    <div class="carousel-slide active absolute inset-0 transition-all duration-1000">
                        <div class="absolute inset-0 bg-cover bg-center transform hover:scale-105 transition-transform duration-1000" 
                             style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1600&q=90')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="relative h-full flex items-center justify-center text-center px-8">
                            <div class="max-w-4xl">
                                <div class="inline-flex items-center gap-3 px-6 py-3 bg-white/10 backdrop-blur-xl rounded-full border border-white/20 mb-8">
                                    <div class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full animate-pulse"></div>
                                    <span class="text-white font-bold text-sm uppercase tracking-wider"><?php echo e(app()->getLocale() == 'ku' ? 'فرۆشگای لوکس' : 'PREMIUM STORE'); ?></span>
                                    <div class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full animate-pulse"></div>
                                </div>
                                
                                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-6 leading-none">
                                    <span class="block bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
                                        <?php echo e(app()->getLocale() == 'ku' ? 'کۆڵەکشنی نوێ' : 'NEW COLLECTION'); ?>

                                    </span>
                                    <span class="block bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mt-2">
                                        <?php echo e(app()->getLocale() == 'ku' ? '2026 فەشن' : '2026 FASHION'); ?>

                                    </span>
                                </h1>
                                
                                <p class="text-2xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'جوانترین و باشترین ستایلەکان بە نرخی نایاب' : 'Most beautiful and best styles at incredible prices'); ?>

                                </p>
                                
                                <div class="inline-block bg-gradient-to-r from-cyan-400 to-blue-500 text-white font-black px-8 py-4 rounded-full text-2xl mb-10 shadow-lg animate-bounce">
                                    50% OFF
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                                    <button class="group px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-gray-900 font-bold rounded-2xl text-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
                                        <span class="flex items-center justify-center gap-3">
                                            🛍️ <?php echo e(app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW'); ?> ✨
                                        </span>
                                    </button>
                                    <button class="group px-10 py-5 border-2 border-white/40 text-white rounded-2xl font-bold text-xl hover:bg-white/10 transition-all duration-300">
                                        <span class="flex items-center justify-center gap-3">
                                            👀 <?php echo e(app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION'); ?>

                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="carousel-slide absolute inset-0 transition-all duration-1000 opacity-0">
                        <div class="absolute inset-0 bg-cover bg-center transform hover:scale-105 transition-transform duration-1000" 
                             style="background-image: url('https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=1600&q=90')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="relative h-full flex items-center justify-center text-center px-8">
                            <div class="max-w-4xl">
                                <div class="inline-flex items-center gap-3 px-6 py-3 bg-white/10 backdrop-blur-xl rounded-full border border-white/20 mb-8">
                                    <div class="w-3 h-3 bg-gradient-to-r from-pink-400 to-purple-500 rounded-full animate-pulse"></div>
                                    <span class="text-white font-bold text-sm uppercase tracking-wider"><?php echo e(app()->getLocale() == 'ku' ? 'فرۆشگای لوکس' : 'PREMIUM STORE'); ?></span>
                                    <div class="w-3 h-3 bg-gradient-to-r from-pink-400 to-purple-500 rounded-full animate-pulse"></div>
                                </div>
                                
                                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-6 leading-none">
                                    <span class="block bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
                                        <?php echo e(app()->getLocale() == 'ku' ? 'لوکس ستایل' : 'LUXURY STYLE'); ?>

                                    </span>
                                    <span class="block bg-gradient-to-r from-pink-400 to-purple-500 bg-clip-text text-transparent mt-2">
                                        <?php echo e(app()->getLocale() == 'ku' ? 'کوالیتی بەرز' : 'PREMIUM QUALITY'); ?>

                                    </span>
                                </h1>
                                
                                <p class="text-2xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'دیزاینی جیهانی بە مادەی باشترین' : 'World-class design with finest materials'); ?>

                                </p>
                                
                                <div class="inline-block bg-gradient-to-r from-pink-400 to-purple-500 text-white font-black px-8 py-4 rounded-full text-2xl mb-10 shadow-lg animate-bounce">
                                    60% OFF
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                                    <button class="group px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-gray-900 font-bold rounded-2xl text-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
                                        <span class="flex items-center justify-center gap-3">
                                            🛍️ <?php echo e(app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW'); ?> ✨
                                        </span>
                                    </button>
                                    <button class="group px-10 py-5 border-2 border-white/40 text-white rounded-2xl font-bold text-xl hover:bg-white/10 transition-all duration-300">
                                        <span class="flex items-center justify-center gap-3">
                                            👀 <?php echo e(app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION'); ?>

                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="carousel-slide absolute inset-0 transition-all duration-1000 opacity-0">
                        <div class="absolute inset-0 bg-cover bg-center transform hover:scale-105 transition-transform duration-1000" 
                             style="background-image: url('https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1600&q=90')"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="relative h-full flex items-center justify-center text-center px-8">
                            <div class="max-w-4xl">
                                <div class="inline-flex items-center gap-3 px-6 py-3 bg-white/10 backdrop-blur-xl rounded-full border border-white/20 mb-8">
                                    <div class="w-3 h-3 bg-gradient-to-r from-orange-400 to-red-500 rounded-full animate-pulse"></div>
                                    <span class="text-white font-bold text-sm uppercase tracking-wider"><?php echo e(app()->getLocale() == 'ku' ? 'فرۆشگای لوکس' : 'PREMIUM STORE'); ?></span>
                                    <div class="w-3 h-3 bg-gradient-to-r from-orange-400 to-red-500 rounded-full animate-pulse"></div>
                                </div>
                                
                                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-6 leading-none">
                                    <span class="block bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
                                        <?php echo e(app()->getLocale() == 'ku' ? 'ترێندی ئەمڕۆ' : 'TODAY\'S TREND'); ?>

                                    </span>
                                    <span class="block bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent mt-2">
                                        <?php echo e(app()->getLocale() == 'ku' ? 'گەرم و پۆپولار' : 'HOT & POPULAR'); ?>

                                    </span>
                                </h1>
                                
                                <p class="text-2xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'هەرەباشترین مۆدای ئەم وەختە' : 'The hottest fashion trends right now'); ?>

                                </p>
                                
                                <div class="inline-block bg-gradient-to-r from-orange-400 to-red-500 text-white font-black px-8 py-4 rounded-full text-2xl mb-10 shadow-lg animate-bounce">
                                    70% OFF
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                                    <button class="group px-10 py-5 bg-gradient-to-r from-white to-gray-100 text-gray-900 font-bold rounded-2xl text-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
                                        <span class="flex items-center justify-center gap-3">
                                            🛍️ <?php echo e(app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : 'SHOP NOW'); ?> ✨
                                        </span>
                                    </button>
                                    <button class="group px-10 py-5 border-2 border-white/40 text-white rounded-2xl font-bold text-xl hover:bg-white/10 transition-all duration-300">
                                        <span class="flex items-center justify-center gap-3">
                                            👀 <?php echo e(app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'VIEW COLLECTION'); ?>

                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <button onclick="changeSlide(-1)" class="absolute left-8 top-1/2 -translate-y-1/2 group z-20">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-2xl border-2 border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 hover:scale-110 transition-all duration-300 shadow-xl">
                            <i class="fa-solid fa-chevron-left text-xl group-hover:scale-125 transition-transform"></i>
                        </div>
                    </button>
                    
                    <button onclick="changeSlide(1)" class="absolute right-8 top-1/2 -translate-y-1/2 group z-20">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-2xl border-2 border-white/30 rounded-full flex items-center justify-center text-white hover:bg-white/30 hover:scale-110 transition-all duration-300 shadow-xl">
                            <i class="fa-solid fa-chevron-right text-xl group-hover:scale-125 transition-transform"></i>
                        </div>
                    </button>
                    
                    
                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-20">
                        <button onclick="goToSlide(0)" class="w-4 h-4 rounded-full transition-all duration-300 bg-white scale-125 shadow-lg carousel-dot" data-slide="0"></button>
                        <button onclick="goToSlide(1)" class="w-4 h-4 rounded-full transition-all duration-300 bg-white/40 hover:bg-white/60 carousel-dot" data-slide="1"></button>
                        <button onclick="goToSlide(2)" class="w-4 h-4 rounded-full transition-all duration-300 bg-white/40 hover:bg-white/60 carousel-dot" data-slide="2"></button>
                    </div>
                    
                    
                    <div class="absolute top-8 right-8 z-20">
                        <div class="px-4 py-2 bg-black/40 backdrop-blur-2xl rounded-full text-white font-bold border border-white/20 shadow-lg">
                            <span class="text-lg" id="slide-counter">1</span>
                            <span class="text-white/60 mx-1">/</span>
                            <span class="text-white/80">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            let currentSlideIndex = 0;
            const totalSlides = 3;
            let autoSlideInterval;

            function showSlide(index) {
                const slides = document.querySelectorAll('.carousel-slide');
                const dots = document.querySelectorAll('.carousel-dot');
                const counter = document.getElementById('slide-counter');
                
                // Hide all slides
                slides.forEach(slide => {
                    slide.classList.remove('active');
                    slide.style.opacity = '0';
                });
                
                // Show current slide
                slides[index].classList.add('active');
                slides[index].style.opacity = '1';
                
                // Update dots
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.className = 'w-4 h-4 rounded-full transition-all duration-300 bg-white scale-125 shadow-lg carousel-dot';
                    } else {
                        dot.className = 'w-4 h-4 rounded-full transition-all duration-300 bg-white/40 hover:bg-white/60 carousel-dot';
                    }
                });
                
                // Update counter
                counter.textContent = index + 1;
            }

            function changeSlide(direction) {
                currentSlideIndex += direction;
                if (currentSlideIndex >= totalSlides) currentSlideIndex = 0;
                if (currentSlideIndex < 0) currentSlideIndex = totalSlides - 1;
                showSlide(currentSlideIndex);
            }

            function goToSlide(index) {
                currentSlideIndex = index;
                showSlide(currentSlideIndex);
            }

            function nextSlide() {
                changeSlide(1);
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 4000);
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Initialize carousel
            document.addEventListener('DOMContentLoaded', function() {
                showSlide(0);
                startAutoSlide();
                
                // Pause on hover
                const carousel = document.getElementById('carousel-container');
                carousel.addEventListener('mouseenter', stopAutoSlide);
                carousel.addEventListener('mouseleave', startAutoSlide);
            });
        </script>
    </section>

    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }
        
        .animate-bounce-soft {
            animation: bounce 2s infinite;
        }
        
        .animate-scroll {
            animation: scroll 20s linear infinite;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>

    
    <section class="py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 relative overflow-hidden">
        
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-pink-500/10 to-orange-500/10 rounded-full blur-3xl"></div>
        </div>
         
        <div class="container mx-auto px-4 relative z-10">
            
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-4 mb-6">
                    <span class="text-4xl animate-bounce">⭐</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black">
                        <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                            <?php echo e(app()->getLocale() == 'ku' ? 'کۆڵەکشنی تایبەت' : 'Featured Collection'); ?>

                        </span>
                    </h2>
                    <span class="text-4xl animate-bounce" style="animation-delay: 0.5s;">✨</span>
                </div>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    <?php echo e(app()->getLocale() == 'ku' ? 'باشترین و جوانترین بەرهەمەکانمان کە بۆ تۆ هەڵبژاردووین' : 'Our finest and most beautiful products carefully selected for you'); ?>

                </p>
            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <?php
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
                ?>

                <?php $__currentLoopData = $featuredItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative">
                    
                    <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        
                        <div class="absolute inset-0 bg-gradient-to-br <?php echo e($item['color']); ?>/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        
                        <div class="relative z-10">
                            
                            <div class="aspect-video rounded-2xl overflow-hidden mb-6 relative">
                                <img src="<?php echo e($item['img']); ?>" alt="<?php echo e($item['title']); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                                
                                
                                <div class="absolute top-4 right-4">
                                    <div class="px-4 py-2 bg-white/90 backdrop-blur-sm rounded-full text-sm font-bold text-gray-800">
                                        <?php echo e($item['count']); ?> <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەم' : 'Items'); ?>

                                    </div>
                                </div>
                            </div>
                            
                            
                            <h3 class="text-2xl font-bold mb-3 group-hover:bg-gradient-to-r group-hover:<?php echo e($item['color']); ?> group-hover:bg-clip-text group-hover:text-transparent transition-all duration-300">
                                <?php echo e($item['title']); ?>

                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                <?php echo e($item['desc']); ?>

                            </p>
                            
                            
                            <button class="w-full py-4 bg-gradient-to-r <?php echo e($item['color']); ?> text-white font-bold rounded-2xl hover:shadow-lg hover:shadow-<?php echo e(explode('-', explode(' ', $item['color'])[1])[0]); ?>-500/30 transform hover:scale-105 transition-all duration-300">
                                <div class="flex items-center justify-center gap-3">
                                    <span><?php echo e(app()->getLocale() == 'ku' ? 'کۆڵەکشن ببینە' : 'View Collection'); ?></span>
                                    <i class="fa-solid fa-arrow-<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right'); ?>"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl p-8 md:p-12 text-center text-white">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <?php
                        $stats = [
                            ['icon' => '🛍️', 'number' => '500K+', 'label' => app()->getLocale() == 'ku' ? 'بەرهەم' : 'Products'],
                            ['icon' => '😍', 'number' => '100K+', 'label' => app()->getLocale() == 'ku' ? 'کڕیار' : 'Customers'], 
                            ['icon' => '⭐', 'number' => '4.9/5', 'label' => app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : 'Rating'],
                            ['icon' => '🚚', 'number' => '24h', 'label' => app()->getLocale() == 'ku' ? 'گەیاندن' : 'Delivery']
                        ];
                    ?>

                    <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center">
                        <div class="text-4xl mb-3 animate-bounce"><?php echo e($stat['icon']); ?></div>
                        <div class="text-3xl md:text-4xl font-black mb-2"><?php echo e($stat['number']); ?></div>
                        <div class="text-white/80 font-medium"><?php echo e($stat['label']); ?></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-32 bg-gradient-to-br from-white via-gray-50/50 to-blue-50/30 relative overflow-hidden">
        
        <div class="absolute inset-0">
            
            <div class="absolute -top-60 -right-60 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-60 -left-60 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-cyan-400/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-gradient-to-br from-emerald-400/15 to-teal-400/15 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
            
            
            <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 25px 25px, rgba(147, 51, 234, 0.8) 2px, transparent 0), radial-gradient(circle at 75px 75px, rgba(236, 72, 153, 0.6) 1px, transparent 0); background-size: 100px 100px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            
            <div class="text-center mb-24">
                
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
                                <?php echo e(app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'التصنيفات' : 'CATEGORIES')); ?>

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
                
                
                <h2 class="text-6xl lg:text-8xl xl:text-9xl font-black mb-12 leading-none">
                    <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-gradient">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بەپێی چەشن' : (app()->getLocale() == 'ar' ? 'حسب الفئة' : 'BY CATEGORY')); ?>

                    </span>
                    <br>
                    <span class="bg-gradient-to-r from-orange-400 via-yellow-400 to-red-400 bg-clip-text text-transparent animate-gradient" style="animation-delay: 0.5s;">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بگەڕێ' : (app()->getLocale() == 'ar' ? 'تصفح' : 'BROWSE')); ?>

                    </span>
                </h2>
                
                
                <div class="max-w-5xl mx-auto mb-16">
                    <p class="text-2xl lg:text-3xl text-gray-600 mb-8 leading-relaxed">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەزاران بەرهەمی لوکس و پریمیەم لە هەموو چەشنەکاندا' : (app()->getLocale() == 'ar' ? 'آلاف المنتجات الفاخرة والمتميزة في جميع الفئات' : 'Thousands of luxury and premium products in all categories')); ?>

                    </p>
                </div>
            </div>
            
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <?php $__empty_1 = true; $__currentLoopData = $categories ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="group relative">
                        <a href="<?php echo e(route('products.index', ['category' => $category->id])); ?>" class="block">
                            
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-purple-500/40 transition-all duration-700 border border-white/60 hover:border-purple-300/60 transform hover:-translate-y-6 hover:scale-105 hover:rotate-1 ultra-card">
                                
                                
                                <div class="relative h-80 overflow-hidden">
                                    <?php if($category->image): ?>
                                        <img src="<?php echo e(str_starts_with($category->image, 'http') ? $category->image : asset('storage/' . $category->image)); ?>" 
                                             alt="<?php echo e($category->name); ?>" 
                                             class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-1000">
                                    <?php else: ?>
                                        <div class="w-full h-full bg-gradient-to-br from-purple-500 via-pink-500 to-orange-500 group-hover:scale-110 transition-transform duration-700"></div>
                                    <?php endif; ?>
                                    
                                    
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent group-hover:from-black/70 transition-all duration-500"></div>
                                    
                                    
                                    <div class="absolute inset-0">
                                        
                                        <div class="absolute top-6 <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'right-6' : 'left-6'); ?>">
                                            <div class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full shadow-xl">
                                                <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                                                <span class="text-sm font-black text-white"><?php echo e($category->products_count ?? rand(50, 200)); ?>+</span>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="absolute top-6 <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-6' : 'right-6'); ?>">
                                            <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-3xl flex items-center justify-center border border-white/30 transform group-hover:scale-125 group-hover:rotate-12 transition-all duration-700">
                                                <i class="fa-solid fa-crown text-white text-2xl"></i>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="absolute top-8 right-1/3 w-3 h-3 bg-yellow-300 rounded-full ultra-sparkle opacity-80"></div>
                                        <div class="absolute bottom-24 left-1/3 w-2 h-2 bg-pink-300 rounded-full ultra-sparkle opacity-60"></div>
                                        <div class="absolute top-1/3 left-8 w-2 h-2 bg-purple-300 rounded-full ultra-sparkle opacity-70"></div>
                                    </div>
                                </div>
                                
                                
                                <div class="absolute inset-0 flex flex-col justify-end p-8">
                                    <div class="text-center transform group-hover:scale-105 transition-transform duration-500">
                                        
                                        <h3 class="text-3xl font-black text-white mb-3 drop-shadow-lg">
                                            <?php echo e($category->name); ?>

                                        </h3>
                                        
                                        
                                        <p class="text-white/90 text-base mb-6 drop-shadow">
                                            <?php echo e($category->products_count ?? rand(50, 200)); ?> <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەمی پریمیەم' : (app()->getLocale() == 'ar' ? 'منتج بريميوم' : 'Premium Products')); ?>

                                        </p>
                                        
                                        
                                        <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                            <div class="relative overflow-hidden inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 shadow-2xl hover:shadow-yellow-400/50 ultra-button">
                                                <span class="relative"><?php echo e(app()->getLocale() == 'ku' ? 'گەڕان' : (app()->getLocale() == 'ar' ? 'تصفح' : 'EXPLORE')); ?></span>
                                                <div class="relative w-6 h-6 bg-white/20 rounded-full flex items-center justify-center">
                                                    <i class="fa-solid fa-arrow-<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right'); ?> text-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="absolute inset-0 rounded-3xl ring-0 group-hover:ring-4 group-hover:ring-purple-400/40 transition-all duration-700"></div>
                            </div>
                            
                            
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-700 -z-10"></div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    <?php
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
                    ?>
                    
                    <?php $__currentLoopData = $luxuryCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group relative">
                        <a href="<?php echo e(route('products.index')); ?>" class="block">
                            
                            <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl overflow-hidden shadow-2xl hover:shadow-purple-500/40 transition-all duration-700 border border-white/60 hover:border-purple-300/60 transform hover:-translate-y-6 hover:scale-105 hover:rotate-1 ultra-card">
                                
                                
                                <div class="relative h-80 overflow-hidden">
                                    <img src="<?php echo e($cat['img']); ?>" 
                                         alt="<?php echo e($cat['n']); ?>" 
                                         class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-1000">
                                    
                                    
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent group-hover:from-black/70 transition-all duration-500"></div>
                                    
                                    
                                    <div class="absolute inset-0">
                                        
                                        <div class="absolute top-6 <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'right-6' : 'left-6'); ?>">
                                            <div class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full shadow-xl">
                                                <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                                                <span class="text-sm font-black text-white"><?php echo e($cat['count']); ?>+</span>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="absolute top-6 <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-6' : 'right-6'); ?>">
                                            <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-3xl flex items-center justify-center border border-white/30 transform group-hover:scale-125 group-hover:rotate-12 transition-all duration-700">
                                                <i class="fa-solid <?php echo e($cat['icon']); ?> text-white text-2xl"></i>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="absolute top-8 right-1/3 w-3 h-3 bg-yellow-300 rounded-full ultra-sparkle opacity-80"></div>
                                        <div class="absolute bottom-24 left-1/3 w-2 h-2 bg-pink-300 rounded-full ultra-sparkle opacity-60"></div>
                                        <div class="absolute top-1/3 left-8 w-2 h-2 bg-purple-300 rounded-full ultra-sparkle opacity-70"></div>
                                    </div>
                                </div>
                                
                                
                                <div class="absolute inset-0 flex flex-col justify-end p-8">
                                    <div class="text-center transform group-hover:scale-105 transition-transform duration-500">
                                        
                                        <h3 class="text-3xl font-black text-white mb-3 drop-shadow-lg">
                                            <?php echo e($cat['n']); ?>

                                        </h3>
                                        
                                        
                                        <p class="text-white/90 text-base mb-6 drop-shadow">
                                            <?php echo e($cat['count']); ?> <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەمی جوان' : (app()->getLocale() == 'ar' ? 'منتج جميل' : 'Beautiful Products')); ?>

                                        </p>
                                        
                                        
                                        <div class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                            <div class="relative overflow-hidden inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full font-black text-gray-900 shadow-2xl hover:shadow-yellow-400/50 ultra-button">
                                                <span class="relative"><?php echo e(app()->getLocale() == 'ku' ? 'گەڕان' : (app()->getLocale() == 'ar' ? 'تصفح' : 'EXPLORE')); ?></span>
                                                <div class="relative w-6 h-6 bg-white/20 rounded-full flex items-center justify-center">
                                                    <i class="fa-solid fa-arrow-<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right'); ?> text-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="absolute inset-0 rounded-3xl ring-0 group-hover:ring-4 group-hover:ring-purple-400/40 transition-all duration-700"></div>
                            </div>
                            
                            
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-700 -z-10"></div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            
            
            <div class="text-center mt-20">
                <a href="<?php echo e(route('products.index')); ?>" 
                   class="group relative overflow-hidden inline-flex items-center gap-4 px-16 py-6 bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 text-white font-black rounded-full shadow-2xl hover:shadow-purple-500/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-2xl ultra-button">
                    <span class="relative"><?php echo e(app()->getLocale() == 'ku' ? 'هەموو کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'جميع الفئات' : 'ALL CATEGORIES')); ?></span>
                    <div class="relative w-10 h-10 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right'); ?> text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-32 bg-gradient-to-br from-gray-900 via-indigo-900 to-purple-900 relative overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute -top-60 -left-60 w-96 h-96 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-60 -right-60 w-80 h-80 bg-gradient-to-br from-pink-500/30 to-purple-500/30 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/3 w-72 h-72 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            
            <div class="text-center mb-20">
                <div class="relative inline-block mb-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-500 rounded-full blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-12 py-6 bg-white/10 backdrop-blur-2xl rounded-full border border-white/20 shadow-2xl">
                        <div class="flex items-center gap-6">
                            <div class="text-4xl animate-bounce">🛍️</div>
                            <span class="text-white font-black text-3xl tracking-wider">
                                <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەمە باشەکان' : (app()->getLocale() == 'ar' ? 'أفضل المنتجات' : 'FEATURED PRODUCTS')); ?>

                            </span>
                            <div class="text-4xl animate-bounce" style="animation-delay: 0.3s;">💫</div>
                        </div>
                    </div>
                </div>
                
                <h2 class="text-6xl lg:text-8xl font-black text-white mb-8 leading-tight">
                    <?php echo e(app()->getLocale() == 'ku' ? 'کۆلیکشنی جوان' : (app()->getLocale() == 'ar' ? 'مجموعة رائعة' : 'AMAZING COLLECTION')); ?>

                </h2>
                
                <p class="text-2xl text-white/90 mb-16 max-w-4xl mx-auto">
                    <?php echo e(app()->getLocale() == 'ku' ? 'هەڵبژاردەی ناوازە لە باشترین بەرهەمەکان بە نرخی گونجاو' : (app()->getLocale() == 'ar' ? 'مختارات مميزة من أفضل المنتجات بأسعار مناسبة' : 'Handpicked selection of premium products at amazing prices')); ?>

                </p>
            </div>
            
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
                <?php
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
                            'img' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=600&q=80', 
                            'badge' => 'SALE',
                            'color' => 'from-orange-500 to-yellow-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'جانتای دەست' : 'Luxury Bag', 
                            'price' => '$299', 
                            'old' => '$399', 
                            'img' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=600&q=80', 
                            'badge' => 'PREMIUM',
                            'color' => 'from-purple-500 to-pink-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'کاتژمێری زیرەک' : 'Smart Watch', 
                            'price' => '$399', 
                            'old' => '$599', 
                            'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&q=80', 
                            'badge' => 'TRENDING',
                            'color' => 'from-blue-500 to-cyan-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'چاکەتی چەرم' : 'Leather Jacket', 
                            'price' => '$249', 
                            'old' => '$349', 
                            'img' => 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=600&q=80', 
                            'badge' => 'HOT',
                            'color' => 'from-red-500 to-pink-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'سونگلاسی مۆدێرن' : 'Modern Sunglasses', 
                            'price' => '$79', 
                            'old' => '$119', 
                            'img' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=600&q=80', 
                            'badge' => 'NEW',
                            'color' => 'from-green-500 to-emerald-500'
                        ],
                        [
                            'name' => app()->getLocale() == 'ku' ? 'کەمەری چەرم' : 'Leather Belt', 
                            'price' => '$59', 
                            'old' => '$89', 
                            'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&q=80', 
                            'badge' => 'SALE',
                            'color' => 'from-orange-500 to-yellow-500'
                        ]
                    ];
                ?>
                
                <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative">
                    
                    <div class="relative bg-gradient-to-br from-white/15 via-white/10 to-white/5 backdrop-blur-2xl rounded-2xl overflow-hidden shadow-2xl hover:shadow-purple-500/30 transition-all duration-500 border border-white/20 hover:border-purple-300/50 transform hover:-translate-y-4 hover:scale-105">
                        
                        
                        <div class="relative h-72 overflow-hidden">
                            <img src="<?php echo e($product['img']); ?>" 
                                 alt="<?php echo e($product['name']); ?>" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                            
                            
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-2 bg-gradient-to-r <?php echo e($product['color']); ?> text-white text-xs font-black rounded-full shadow-lg animate-bounce">
                                    <?php echo e($product['badge']); ?>

                                </span>
                            </div>
                            
                            
                            <div class="absolute top-4 right-4">
                                <div class="w-10 h-10 bg-black/40 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 hover:bg-red-500/80 hover:scale-110 transition-all duration-300 cursor-pointer group">
                                    <i class="fa-solid fa-heart text-white text-sm group-hover:animate-pulse"></i>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="p-6">
                            <h3 class="text-xl font-black text-white mb-3 group-hover:text-purple-300 transition-colors"><?php echo e($product['name']); ?></h3>
                            
                            
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-gray-400 line-through text-sm"><?php echo e($product['old']); ?></span>
                                    <span class="text-2xl font-black text-transparent bg-gradient-to-r <?php echo e($product['color']); ?> bg-clip-text"><?php echo e($product['price']); ?></span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            
                            
                            <button class="w-full px-6 py-3 bg-gradient-to-r <?php echo e($product['color']); ?> text-white font-bold rounded-xl shadow-lg hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 text-sm group-hover:scale-105">
                                <i class="fa-solid fa-cart-plus mr-2"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف للسلة' : 'ADD TO CART')); ?>

                            </button>
                        </div>
                        
                        
                        <div class="absolute inset-0 rounded-2xl ring-0 group-hover:ring-2 group-hover:ring-purple-400/40 transition-all duration-500"></div>
                    </div>
                    
                    
                    <div class="absolute inset-0 bg-gradient-to-br <?php echo e($product['color']); ?>/20 rounded-2xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500 -z-10"></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <div class="text-center">
                <a href="<?php echo e(route('products.index')); ?>" 
                   class="group relative overflow-hidden inline-flex items-center gap-4 px-16 py-6 bg-gradient-to-r from-cyan-600 via-blue-600 to-purple-600 text-white font-black rounded-full shadow-2xl hover:shadow-cyan-500/50 transform hover:-translate-y-2 hover:scale-105 transition-all duration-500 text-2xl ultra-button">
                    <span class="relative"><?php echo e(app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'VIEW ALL PRODUCTS')); ?></span>
                    <div class="relative w-10 h-10 bg-white/20 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right'); ?> text-lg"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30" style="background-image: url('data:image/svg+xml,%3Csvg width=\'80\' height=\'80\' viewBox=\'0 0 80 80\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.3\'%3E%3Cpath d=\'m0 80l40-40-40-40v80zm40 0l40-40-40-40v80zm-40-40l40-40-40-40v80z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-16">
                <h3 class="text-4xl lg:text-5xl font-black text-white mb-6">
                    <?php echo e(app()->getLocale() == 'ku' ? 'برانده نامدارەکان' : (app()->getLocale() == 'ar' ? 'العلامات المشهورة' : 'FAMOUS BRANDS')); ?>

                </h3>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    <?php echo e(app()->getLocale() == 'ku' ? 'لەگەڵ باشترین برانده جیهانیەکان کاردەکەین' : (app()->getLocale() == 'ar' ? 'نعمل مع أفضل العلامات التجارية العالمية' : 'We work with the world\'s best brands')); ?>

                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <?php
                    $brands = [
                        ['name' => 'Nike', 'logo' => '🏃‍♂️'],
                        ['name' => 'Adidas', 'logo' => '⚽'],
                        ['name' => 'Puma', 'logo' => '🐆'],
                        ['name' => 'Gucci', 'logo' => '👑'],
                        ['name' => 'Zara', 'logo' => '👗'],
                        ['name' => 'H&M', 'logo' => '👔']
                    ];
                ?>
                
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative">
                    <div class="aspect-square bg-white/20 backdrop-blur-xl rounded-3xl flex flex-col items-center justify-center border border-white/30 hover:border-white/60 hover:bg-white/30 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                        <div class="text-5xl mb-4 group-hover:scale-125 transition-transform duration-300"><?php echo e($brand['logo']); ?></div>
                        <h4 class="text-white font-black text-lg"><?php echo e($brand['name']); ?></h4>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-32 bg-gradient-to-br from-red-600 via-orange-600 to-yellow-600 relative overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        </div>
        
        
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 30px 30px, rgba(255,255,255,0.6) 2px, transparent 0); background-size: 60px 60px; animation: pattern-move 20s linear infinite;"></div>
        
        <div class="container mx-auto px-4 relative">
            
            <div class="text-center mb-20">
                
                <div class="relative inline-block mb-12">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-500 rounded-full blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-16 py-8 bg-white/20 backdrop-blur-xl rounded-full border border-white/30 shadow-2xl">
                        <div class="flex items-center gap-8">
                            <div class="text-6xl animate-bounce">🔥</div>
                            <span class="text-white font-black text-4xl tracking-wider">
                                <?php echo e(app()->getLocale() == 'ku' ? 'ئۆفەری کاتی!' : (app()->getLocale() == 'ar' ? 'عرض محدود!' : 'FLASH SALE!')); ?>

                            </span>
                            <div class="text-6xl animate-bounce" style="animation-delay: 0.3s;">⚡</div>
                        </div>
                    </div>
                </div>
                
                
                <h2 class="text-6xl lg:text-8xl font-black text-white mb-8 leading-tight drop-shadow-2xl">
                    <?php echo e(app()->getLocale() == 'ku' ? 'بەخۆڕایی بکڕە!' : (app()->getLocale() == 'ar' ? 'اشترِ بسرعة!' : 'BUY FAST!')); ?>

                </h2>
                
                <p class="text-2xl text-white/90 mb-12 max-w-4xl mx-auto">
                    <?php echo e(app()->getLocale() == 'ku' ? 'پێش تەواوبوونی کات!' : (app()->getLocale() == 'ar' ? 'قبل انتهاء الوقت!' : 'BEFORE TIME RUNS OUT!')); ?>

                </p>
                
                
                <div class="flex justify-center items-center gap-6 mb-16" x-data="flashTimer()">
                    <?php $timeUnits = [
                        ['key' => 'hours', 'label' => app()->getLocale() == 'ku' ? 'کات' : (app()->getLocale() == 'ar' ? 'ساعة' : 'Hours'), 'value' => '08'],
                        ['key' => 'minutes', 'label' => app()->getLocale() == 'ku' ? 'خولەک' : (app()->getLocale() == 'ar' ? 'دقيقة' : 'Minutes'), 'value' => '45'],
                        ['key' => 'seconds', 'label' => app()->getLocale() == 'ku' ? 'چرکە' : (app()->getLocale() == 'ar' ? 'ثانية' : 'Seconds'), 'value' => '10']
                    ]; ?>
                    
                    <?php $__currentLoopData = $timeUnits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center">
                        <div class="w-28 h-28 lg:w-32 lg:h-32 bg-white/20 backdrop-blur-xl rounded-3xl flex items-center justify-center border border-white/30 shadow-2xl mb-4 ultra-hover-transform">
                            <span x-text="<?php echo e($unit['key']); ?>" class="text-4xl lg:text-5xl font-black text-white"><?php echo e($unit['value']); ?></span>
                        </div>
                        <div class="text-white/90 font-bold text-lg"><?php echo e($unit['label']); ?></div>
                    </div>
                    <?php if(!$loop->last): ?>
                        <div class="text-white text-4xl lg:text-5xl font-black animate-pulse">:</div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                
                <a href="<?php echo e(route('products.index')); ?>" 
                   class="group relative overflow-hidden inline-flex items-center gap-6 px-20 py-8 bg-white text-red-600 font-black rounded-full shadow-2xl hover:shadow-white/50 transform hover:-translate-y-3 hover:scale-105 transition-all duration-500 text-3xl ultra-button">
                    <span class="relative"><?php echo e(app()->getLocale() == 'ku' ? 'هەموو ببینە' : (app()->getLocale() == 'ar' ? 'شاهد الكل' : 'SHOP NOW')); ?></span>
                    <div class="relative w-12 h-12 bg-red-100 rounded-full flex items-center justify-center group-hover:rotate-90 transition-transform duration-300">
                        <i class="fa-solid fa-bolt text-red-600 text-xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    
    <section class="py-32 bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div class="text-white">
                    <div class="relative inline-block mb-8">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/30 to-white/10 rounded-3xl blur-xl"></div>
                        <div class="relative px-8 py-4 bg-white/20 backdrop-blur-xl rounded-3xl border border-white/30 shadow-2xl">
                            <div class="flex items-center gap-4">
                                <div class="text-3xl">📱</div>
                                <span class="font-black text-xl">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'ئەپلیکەیشنی مۆبایل' : (app()->getLocale() == 'ar' ? 'تطبيق الموبايل' : 'MOBILE APP')); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="text-5xl lg:text-6xl font-black mb-8 leading-tight">
                        <?php echo e(app()->getLocale() == 'ku' ? 'کڕین لە هەر شوێنێک' : (app()->getLocale() == 'ar' ? 'تسوق من أي مكان' : 'SHOP ANYWHERE')); ?>

                    </h2>
                    
                    <p class="text-2xl text-white/90 mb-12 leading-relaxed">
                        <?php echo e(app()->getLocale() == 'ku' ? 'ئەپلیکەیشنەکەمان داونلۆد بکە و کڕینت ئاسانتر بکە' : (app()->getLocale() == 'ar' ? 'حمل تطبيقنا واجعل التسوق أسهل' : 'Download our app and make shopping easier')); ?>

                    </p>
                    
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        <?php
                            $features = [
                                ['icon' => '🚀', 'title' => app()->getLocale() == 'ku' ? 'خێرای کڕین' : 'Fast Shopping'],
                                ['icon' => '🎁', 'title' => app()->getLocale() == 'ku' ? 'ئۆفەری تایبەت' : 'Special Offers'],
                                ['icon' => '📦', 'title' => app()->getLocale() == 'ku' ? 'شوێنکەوتنی بارگرتن' : 'Order Tracking'],
                                ['icon' => '💳', 'title' => app()->getLocale() == 'ku' ? 'پارەدانی ئاسان' : 'Easy Payment']
                            ];
                        ?>
                        
                        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl">
                                <?php echo e($feature['icon']); ?>

                            </div>
                            <span class="text-lg font-bold"><?php echo e($feature['title']); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                    
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
                
                
                <div class="relative">
                    <div class="relative mx-auto w-80 h-96 bg-gradient-to-br from-gray-800 to-black rounded-[3rem] p-4 shadow-2xl">
                        <div class="w-full h-full bg-gradient-to-br from-purple-600 via-pink-600 to-red-600 rounded-[2rem] overflow-hidden relative">
                            
                            <div class="p-6 text-white">
                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-black mb-2"><?php echo e(app()->getLocale() == 'ku' ? 'کورد شۆپ' : 'Kurd Shop'); ?></h3>
                                    <p class="text-sm opacity-80"><?php echo e(app()->getLocale() == 'ku' ? 'فرۆشگای پریمیەم' : 'Premium Store'); ?></p>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <?php for($i = 1; $i <= 4; $i++): ?>
                                    <div class="aspect-square bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                                        <div class="text-2xl">
                                            <?php if($i == 1): ?> 👔
                                            <?php elseif($i == 2): ?> 👗
                                            <?php elseif($i == 3): ?> 👟
                                            <?php else: ?> 👜
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
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

    
    <section class="py-32 bg-gradient-to-br from-gray-900 via-purple-900 to-indigo-900 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute -top-60 -left-60 w-96 h-96 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-full blur-3xl animate-float-enhanced"></div>
            <div class="absolute -bottom-60 -right-60 w-80 h-80 bg-gradient-to-br from-cyan-500/30 to-blue-500/30 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 left-1/3 w-72 h-72 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                
                <div class="relative inline-block mb-12">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-cyan-600 rounded-3xl blur-xl opacity-60 animate-pulse"></div>
                    <div class="relative px-12 py-6 bg-white/10 backdrop-blur-2xl rounded-3xl border border-white/20 shadow-2xl">
                        <div class="flex items-center gap-6">
                            <div class="text-4xl animate-bounce">📧</div>
                            <span class="text-white font-black text-2xl">
                                <?php echo e(app()->getLocale() == 'ku' ? 'بەشداری بکە' : (app()->getLocale() == 'ar' ? 'انضم إلينا' : 'JOIN US')); ?>

                            </span>
                            <div class="text-4xl animate-bounce" style="animation-delay: 0.3s;">🎁</div>
                        </div>
                    </div>
                </div>
                
                
                <h2 class="text-6xl lg:text-7xl font-black text-white mb-8 leading-tight">
                    <?php echo e(app()->getLocale() == 'ku' ? 'ئاگادارکردنەوە' : (app()->getLocale() == 'ar' ? 'كن مطلعاً' : 'STAY UPDATED')); ?>

                </h2>
                
                
                <p class="text-2xl text-white/90 mb-12 leading-relaxed">
                    <?php echo e(app()->getLocale() == 'ku' ? 'بەشداری لە نیوزلەتەرەکەمان بکە و ١٥٪ داشکاندن وەربگرە' : (app()->getLocale() == 'ar' ? 'اشترك في نشرتنا الإخبارية واحصل على خصم ١٥٪' : 'Subscribe to our newsletter and get 15% discount')); ?>

                </p>
                
                
                <div class="relative max-w-2xl mx-auto mb-16" x-data="{ email: '', subscribed: false }">
                    <form @submit.prevent="subscribed = true" class="relative">
                        <div class="relative group">
                            <input x-model="email" 
                                   type="email" 
                                   required 
                                   placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'ئیمەیلەکەت بنووسە...' : (app()->getLocale() == 'ar' ? 'اكتب بريدك الإلكتروني...' : 'Enter your email address...')); ?>"
                                   class="w-full px-8 py-6 pr-48 bg-white/20 backdrop-blur-xl border border-white/30 rounded-full text-white text-xl placeholder-white/70 focus:outline-none focus:ring-4 focus:ring-white/40 transition-all duration-500 ultra-hover-transform">
                            
                            <button type="submit" 
                                    class="absolute <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-2' : 'right-2'); ?> top-2 bottom-2 px-8 bg-gradient-to-r from-yellow-400 to-orange-500 text-gray-900 font-black rounded-full hover:shadow-2xl hover:shadow-yellow-400/50 transition-all duration-300 text-lg ultra-button">
                                <?php echo e(app()->getLocale() == 'ku' ? 'ناردن' : (app()->getLocale() == 'ar' ? 'إرسال' : 'SUBSCRIBE')); ?>

                            </button>
                        </div>
                    </form>
                    
                    
                    <div x-show="subscribed" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         class="absolute inset-0 bg-white/20 backdrop-blur-xl rounded-full flex items-center justify-center border border-white/30">
                        <div class="flex items-center gap-4 text-white">
                            <div class="text-3xl">✅</div>
                            <span class="text-xl font-bold"><?php echo e(app()->getLocale() == 'ku' ? 'سەرکەوتوو بوو!' : (app()->getLocale() == 'ar' ? 'تم بنجاح!' : 'Successfully subscribed!')); ?></span>
                        </div>
                    </div>
                </div>
                
                
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-80">
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved text-xl"></i>
                        </div>
                        <span class="font-bold"><?php echo e(app()->getLocale() == 'ku' ? 'پارێزراو' : (app()->getLocale() == 'ar' ? 'آمن' : 'Secure')); ?></span>
                    </div>
                    
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-gift text-xl"></i>
                        </div>
                        <span class="font-bold"><?php echo e(app()->getLocale() == 'ku' ? 'دیاری خۆڕایی' : (app()->getLocale() == 'ar' ? 'هدايا مجانية' : 'Free Gifts')); ?></span>
                    </div>
                    
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-crown text-xl"></i>
                        </div>
                        <span class="font-bold"><?php echo e(app()->getLocale() == 'ku' ? 'ئەندامی VIP' : (app()->getLocale() == 'ar' ? 'عضوية VIP' : 'VIP Access')); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Enhanced Hero Carousel Function
        function heroCarousel() {
            return {
                currentSlide: 0,
                totalSlides: 5,
                autoPlay: true,
                interval: null,
                
                init() {
                    console.log('Carousel initialized');
                    this.startAutoPlay();
                    
                    // Watch for slide changes
                    this.$watch('currentSlide', (value) => {
                        console.log('Current slide:', value);
                    });
                },
                
                nextSlide() {
                    console.log('Next slide clicked, current:', this.currentSlide);
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                },
                
                prevSlide() {
                    console.log('Prev slide clicked, current:', this.currentSlide);
                    this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
                },
                
                goToSlide(index) {
                    console.log('Go to slide:', index);
                    this.currentSlide = index;
                },
                
                startAutoPlay() {
                    console.log('Starting autoplay');
                    this.interval = setInterval(() => {
                        this.nextSlide();
                    }, 5000);
                },
                
                stopAutoPlay() {
                    console.log('Stopping autoplay');
                    if (this.interval) {
                        clearInterval(this.interval);
                        this.interval = null;
                    }
                }
            }
        }
        
        // Enhanced Flash Timer Function
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
                        
                        // Add urgency effect when time is low
                        if (this.hours === 0 && this.minutes < 10) {
                            this.addUrgencyEffect();
                        }
                    }, 1000);
                },
                
                addUrgencyEffect() {
                    const timerElements = document.querySelectorAll('.flash-timer');
                    timerElements.forEach(el => {
                        el.style.animation = 'cosmic-glow 1s ease-in-out infinite';
                    });
                }
            }
        }
        
        // Add smooth scrolling for better navigation
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced smooth scrolling
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Add intersection observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                    }
                });
            }, observerOptions);
            
            // Observe elements for animations
            const animatedElements = document.querySelectorAll('.group, .card, .product-item');
            animatedElements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/website/index.blade.php ENDPATH**/ ?>