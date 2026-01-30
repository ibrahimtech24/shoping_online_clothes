<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    
    
    <section class="relative min-h-[50vh] md:min-h-[55vh] flex items-center overflow-hidden">
        
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900"></div>
        
        
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-1/2 -right-1/4 w-[800px] h-[800px] bg-violet-600/20 rounded-full blur-[150px]"></div>
            <div class="absolute -bottom-1/2 -left-1/4 w-[600px] h-[600px] bg-cyan-600/15 rounded-full blur-[150px]"></div>
        </div>

        
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 256 256%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noise%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.8%22 numOctaves=%224%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noise)%22/%3E%3C/svg%3E');"></div>

        
        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 py-16 md:py-20">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                
                
                <div class="text-center md:text-<?php echo e(app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'right' : 'left'); ?>">
                    
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-sm rounded-full border border-white/10 mb-6">
                        <div class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></div>
                        <span class="text-white/80 text-sm font-medium tracking-wide">
                            <?php echo e(app()->getLocale() == 'ku' ? 'کۆلێکشنی نوێ' : (app()->getLocale() == 'ar' ? 'مجموعة جديدة' : 'New Collection')); ?>

                        </span>
                    </div>

                    
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight tracking-tight">
                        <?php echo e(app()->getLocale() == 'ku' ? 'جل و بەرگی' : (app()->getLocale() == 'ar' ? 'الملابس' : 'Premium')); ?>

                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-cyan-400">
                            <?php echo e(app()->getLocale() == 'ku' ? 'پڕیمیۆم' : (app()->getLocale() == 'ar' ? 'الفاخرة' : 'Fashion')); ?>

                        </span>
                    </h1>

                    
                    <p class="text-white/60 text-base sm:text-lg max-w-md mx-auto md:mx-0 mb-8 leading-relaxed">
                        <?php echo e(app()->getLocale() == 'ku' ? 'باشترین بەرهەمەکان بە نرخی گونجاو و کوالیتیی بەرز' : (app()->getLocale() == 'ar' ? 'أفضل المنتجات بأسعار مناسبة وجودة عالية' : 'Best products at great prices with premium quality')); ?>

                    </p>

                    
                    <div class="flex flex-wrap gap-3 justify-center md:justify-<?php echo e(app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'end' : 'start'); ?>">
                        <a href="#products" class="group inline-flex items-center gap-2 px-6 py-3 bg-white text-slate-900 rounded-xl font-semibold hover:bg-white/90 transition-all hover:shadow-lg hover:shadow-white/20">
                            <span><?php echo e(app()->getLocale() == 'ku' ? 'بینینی بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'تصفح المنتجات' : 'Browse Products')); ?></span>
                            <i class="fa-solid fa-arrow-<?php echo e(app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'left' : 'right'); ?> group-hover:translate-x-<?php echo e(app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? '-1' : '1'); ?> transition-transform"></i>
                        </a>
                    </div>
                </div>

                
                <div class="flex justify-center md:justify-end">
                    <div class="relative">
                        
                        <div class="absolute -inset-4 bg-gradient-to-r from-violet-600/30 to-cyan-600/30 rounded-3xl blur-2xl opacity-60"></div>
                        
                        
                        <div class="relative bg-white/[0.03] backdrop-blur-xl rounded-2xl border border-white/10 p-8 min-w-[280px]">
                            
                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-violet-500/20 to-violet-500/5 rounded-xl flex items-center justify-center border border-violet-500/20">
                                        <i class="fa-solid fa-box text-violet-400"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-white"><?php echo e($products->total()); ?>+</div>
                                        <div class="text-sm text-white/50"><?php echo e(app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'Products')); ?></div>
                                    </div>
                                </div>
                                
                                <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
                                
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500/20 to-cyan-500/5 rounded-xl flex items-center justify-center border border-cyan-500/20">
                                        <i class="fa-solid fa-layer-group text-cyan-400"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-white"><?php echo e($categories->count()); ?></div>
                                        <div class="text-sm text-white/50"><?php echo e(app()->getLocale() == 'ku' ? 'جۆر' : (app()->getLocale() == 'ar' ? 'فئة' : 'Categories')); ?></div>
                                    </div>
                                </div>
                                
                                <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
                                
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500/20 to-emerald-500/5 rounded-xl flex items-center justify-center border border-emerald-500/20">
                                        <i class="fa-solid fa-truck-fast text-emerald-400"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-white">24h</div>
                                        <div class="text-sm text-white/50"><?php echo e(app()->getLocale() == 'ku' ? 'گەیاندن' : (app()->getLocale() == 'ar' ? 'توصيل سريع' : 'Fast Delivery')); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="relative bg-gradient-to-b from-slate-50 to-white min-h-screen py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            
            <div class="relative -mt-20 mb-12">
                <div class="bg-white rounded-[2rem] shadow-2xl shadow-purple-500/10 p-6 sm:p-8 border border-gray-100">
                    
                    <form action="<?php echo e(route('products.index')); ?>" method="GET">
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-6">
                                <i class="fa-solid fa-magnifying-glass text-xl text-purple-400"></i>
                            </div>
                            <input type="text" 
                                   name="search"
                                   value="<?php echo e(request('search')); ?>"
                                   placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'گەڕان بۆ بەرهەم...' : (app()->getLocale() == 'ar' ? 'البحث عن منتج...' : 'Search for products...')); ?>"
                                   class="w-full pl-16 pr-40 py-5 text-lg rounded-2xl bg-slate-50 border-2 border-transparent focus:border-purple-400 focus:bg-white focus:ring-4 focus:ring-purple-500/10 outline-none transition-all placeholder:text-gray-400">
                            <button type="submit" 
                                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-gradient-to-r from-purple-600 via-fuchsia-600 to-pink-600 hover:from-purple-700 hover:via-fuchsia-700 hover:to-pink-700 text-white px-8 py-3.5 rounded-xl font-bold transition-all hover:shadow-lg hover:shadow-purple-500/30 hover:scale-105">
                                <i class="fa-solid fa-search mr-2"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'گەڕان' : (app()->getLocale() == 'ar' ? 'بحث' : 'Search')); ?>

                            </button>
                        </div>
                    </form>

                    
                    <form action="<?php echo e(route('products.index')); ?>" method="GET" class="flex flex-wrap items-center gap-3 sm:gap-4">
                        <?php if(request('search')): ?>
                            <input type="hidden" name="search" value="<?php echo e(request('search')); ?>">
                        <?php endif; ?>

                        
                        <div class="relative group">
                            <select name="category" onchange="this.form.submit()" 
                                    class="appearance-none pl-12 pr-10 py-3.5 rounded-xl bg-gradient-to-r from-purple-50 to-fuchsia-50 border-2 border-purple-100 hover:border-purple-300 focus:border-purple-400 outline-none font-semibold text-gray-700 cursor-pointer transition-all min-w-[180px]">
                                <option value=""><?php echo e(app()->getLocale() == 'ku' ? 'هەموو جۆرەکان' : (app()->getLocale() == 'ar' ? 'جميع الفئات' : 'All Categories')); ?></option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>" <?php echo e(request('category') == $cat->id ? 'selected' : ''); ?>><?php echo e($cat->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <i class="fa-solid fa-layer-group absolute left-4 top-1/2 -translate-y-1/2 text-purple-500"></i>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-purple-400 text-sm"></i>
                        </div>

                        
                        <div class="relative group">
                            <select name="price_range" onchange="this.form.submit()" 
                                    class="appearance-none pl-12 pr-10 py-3.5 rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-100 hover:border-green-300 focus:border-green-400 outline-none font-semibold text-gray-700 cursor-pointer transition-all min-w-[150px]">
                                <option value=""><?php echo e(app()->getLocale() == 'ku' ? 'نرخ' : (app()->getLocale() == 'ar' ? 'السعر' : 'Price')); ?></option>
                                <option value="0-50" <?php echo e(request('price_range') == '0-50' ? 'selected' : ''); ?>>$0 - $50</option>
                                <option value="50-100" <?php echo e(request('price_range') == '50-100' ? 'selected' : ''); ?>>$50 - $100</option>
                                <option value="100-200" <?php echo e(request('price_range') == '100-200' ? 'selected' : ''); ?>>$100 - $200</option>
                                <option value="200+" <?php echo e(request('price_range') == '200+' ? 'selected' : ''); ?>>$200+</option>
                            </select>
                            <i class="fa-solid fa-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 text-green-500"></i>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-green-400 text-sm"></i>
                        </div>

                        
                        <div class="relative group">
                            <select name="sort" onchange="this.form.submit()" 
                                    class="appearance-none pl-12 pr-10 py-3.5 rounded-xl bg-gradient-to-r from-amber-50 to-orange-50 border-2 border-amber-100 hover:border-amber-300 focus:border-amber-400 outline-none font-semibold text-gray-700 cursor-pointer transition-all min-w-[150px]">
                                <option value="latest" <?php echo e(request('sort', 'latest') == 'latest' ? 'selected' : ''); ?>><?php echo e(app()->getLocale() == 'ku' ? 'نوێترین' : (app()->getLocale() == 'ar' ? 'الأحدث' : 'Latest')); ?></option>
                                <option value="price_low" <?php echo e(request('sort') == 'price_low' ? 'selected' : ''); ?>><?php echo e(app()->getLocale() == 'ku' ? 'نرخ ↑' : (app()->getLocale() == 'ar' ? 'سعر ↑' : 'Price ↑')); ?></option>
                                <option value="price_high" <?php echo e(request('sort') == 'price_high' ? 'selected' : ''); ?>><?php echo e(app()->getLocale() == 'ku' ? 'نرخ ↓' : (app()->getLocale() == 'ar' ? 'سعر ↓' : 'Price ↓')); ?></option>
                            </select>
                            <i class="fa-solid fa-arrow-up-wide-short absolute left-4 top-1/2 -translate-y-1/2 text-amber-500"></i>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-amber-400 text-sm"></i>
                        </div>

                        
                        <?php if(request()->hasAny(['category', 'price_range', 'sort', 'search'])): ?>
                            <a href="<?php echo e(route('products.index')); ?>" 
                               class="inline-flex items-center gap-2 px-5 py-3.5 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 font-bold transition-all border-2 border-red-100 hover:border-red-200 hover:scale-105">
                                <i class="fa-solid fa-xmark"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'پاککردنەوە' : (app()->getLocale() == 'ar' ? 'مسح' : 'Clear')); ?>

                            </a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>

            
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات' : 'Products')); ?>

                        <span class="text-purple-600">(<?php echo e($products->total()); ?>)</span>
                    </h2>
                </div>
            </div>

            
            <?php if(count($products)): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 lg:gap-8">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('products.partials.product-card', ['product' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="mt-16 flex justify-center">
                    <div class="bg-white rounded-2xl shadow-xl shadow-purple-500/5 p-4 border border-gray-100">
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
            <?php else: ?>
                
                <div class="text-center py-24">
                    <div class="w-40 h-40 bg-gradient-to-br from-purple-100 to-fuchsia-100 rounded-full flex items-center justify-center mx-auto mb-8 animate-pulse">
                        <i class="fa-solid fa-box-open text-6xl text-purple-300"></i>
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 mb-4">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هیچ بەرهەمێک نەدۆزرایەوە' : (app()->getLocale() == 'ar' ? 'لم يتم العثور على منتجات' : 'No products found')); ?>

                    </h3>
                    <p class="text-gray-500 mb-8 text-lg max-w-md mx-auto">
                        <?php echo e(app()->getLocale() == 'ku' ? 'تکایە فلتەرەکان بگۆڕە' : (app()->getLocale() == 'ar' ? 'يرجى تغيير الفلاتر' : 'Try changing filters')); ?>

                    </p>
                    <a href="<?php echo e(route('products.index')); ?>" 
                       class="inline-flex items-center gap-3 bg-gradient-to-r from-purple-600 to-fuchsia-600 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-xl hover:shadow-purple-500/30 transition-all hover:-translate-y-1">
                        <i class="fa-solid fa-rotate-right"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'All Products')); ?>

                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/products/index.blade.php ENDPATH**/ ?>