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
    
    
    <div class="min-h-screen">

        <main class="max-w-7xl mx-auto px-4 pt-4 pb-6" x-data="{ showFilter: false }">
            
            <section class="mb-4">
                <form action="<?php echo e(route('products.index')); ?>" method="GET" id="filterForm">
                    <div class="relative flex gap-2">
                        <div class="relative flex-1">
                            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-white/50"></i>
                            <input type="text" 
                                   name="search"
                                   value="<?php echo e(request('search')); ?>"
                                   placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'گەڕان بۆ بەرهەم...' : (app()->getLocale() == 'ar' ? 'ابحث عن منتج...' : 'Search products...')); ?>"
                                   class="w-full pl-12 pr-4 py-3 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 focus:border-cyan-400/50 focus:ring-2 focus:ring-cyan-500/10 outline-none transition-all text-white placeholder:text-white/50 text-sm">
                        </div>
                        
                        <button type="button" 
                                @click="showFilter = !showFilter"
                                class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-all hover:scale-105"
                                :class="{ 'ring-2 ring-cyan-400': showFilter }">
                            <i class="fa-solid fa-sliders text-white"></i>
                        </button>
                    </div>
                    
                    
                    <?php if(request('category')): ?>
                        <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                    <?php endif; ?>
                    
                    
                    <div x-show="showFilter" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="mt-3 p-4 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20">
                        
                        
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-white font-semibold flex items-center gap-2">
                                <i class="fa-solid fa-filter text-cyan-400"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'فلتەرکردن' : (app()->getLocale() == 'ar' ? 'تصفية' : 'Filter')); ?>

                            </h3>
                            <a href="<?php echo e(route('products.index')); ?>" class="text-xs text-cyan-400 hover:text-cyan-300">
                                <?php echo e(app()->getLocale() == 'ku' ? 'پاککردنەوە' : (app()->getLocale() == 'ar' ? 'مسح الكل' : 'Clear All')); ?>

                            </a>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            
                            <div>
                                <label class="text-white/70 text-xs mb-2 block">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'نرخ' : (app()->getLocale() == 'ar' ? 'السعر' : 'Price')); ?>

                                </label>
                                <div class="flex gap-2">
                                    <input type="number" 
                                           name="min_price" 
                                           value="<?php echo e(request('min_price')); ?>"
                                           placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'لە' : (app()->getLocale() == 'ar' ? 'من' : 'Min')); ?>"
                                           class="w-full px-3 py-2 bg-white/10 rounded-xl border border-white/10 text-white text-sm placeholder:text-white/40 outline-none focus:border-cyan-400/50">
                                    <input type="number" 
                                           name="max_price" 
                                           value="<?php echo e(request('max_price')); ?>"
                                           placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'بۆ' : (app()->getLocale() == 'ar' ? 'إلى' : 'Max')); ?>"
                                           class="w-full px-3 py-2 bg-white/10 rounded-xl border border-white/10 text-white text-sm placeholder:text-white/40 outline-none focus:border-cyan-400/50">
                                </div>
                            </div>
                            
                            
                            <div>
                                <label class="text-white/70 text-xs mb-2 block">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'ڕیزکردن' : (app()->getLocale() == 'ar' ? 'ترتيب' : 'Sort By')); ?>

                                </label>
                                <select name="sort" class="w-full px-3 py-2 bg-white/10 rounded-xl border border-white/10 text-white text-sm outline-none focus:border-cyan-400/50 cursor-pointer">
                                    <option value="latest" <?php echo e(request('sort') == 'latest' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'نوێترین' : (app()->getLocale() == 'ar' ? 'الأحدث' : 'Latest')); ?></option>
                                    <option value="oldest" <?php echo e(request('sort') == 'oldest' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'کۆنترین' : (app()->getLocale() == 'ar' ? 'الأقدم' : 'Oldest')); ?></option>
                                    <option value="price_low" <?php echo e(request('sort') == 'price_low' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'نرخ: کەمەوە' : (app()->getLocale() == 'ar' ? 'السعر: الأقل' : 'Price: Low to High')); ?></option>
                                    <option value="price_high" <?php echo e(request('sort') == 'price_high' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'نرخ: زۆرەوە' : (app()->getLocale() == 'ar' ? 'السعر: الأعلى' : 'Price: High to Low')); ?></option>
                                    <option value="name_asc" <?php echo e(request('sort') == 'name_asc' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'ناو: A-Z' : (app()->getLocale() == 'ar' ? 'الاسم: أ-ي' : 'Name: A-Z')); ?></option>
                                    <option value="name_desc" <?php echo e(request('sort') == 'name_desc' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'ناو: Z-A' : (app()->getLocale() == 'ar' ? 'الاسم: ي-أ' : 'Name: Z-A')); ?></option>
                                </select>
                            </div>
                            
                            
                            <div>
                                <label class="text-white/70 text-xs mb-2 block">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'بەردەستی' : (app()->getLocale() == 'ar' ? 'التوفر' : 'Availability')); ?>

                                </label>
                                <select name="stock" class="w-full px-3 py-2 bg-white/10 rounded-xl border border-white/10 text-white text-sm outline-none focus:border-cyan-400/50 cursor-pointer">
                                    <option value="" class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'هەموو' : (app()->getLocale() == 'ar' ? 'الكل' : 'All')); ?></option>
                                    <option value="in_stock" <?php echo e(request('stock') == 'in_stock' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'بەردەستە' : (app()->getLocale() == 'ar' ? 'متوفر' : 'In Stock')); ?></option>
                                    <option value="out_of_stock" <?php echo e(request('stock') == 'out_of_stock' ? 'selected' : ''); ?> class="bg-slate-800"><?php echo e(app()->getLocale() == 'ku' ? 'نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock')); ?></option>
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="mt-4 flex justify-end">
                            <button type="submit" class="px-6 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-xl font-medium text-sm hover:shadow-lg hover:shadow-cyan-500/30 transition-all flex items-center gap-2">
                                <i class="fa-solid fa-check"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'جێبەجێکردن' : (app()->getLocale() == 'ar' ? 'تطبيق' : 'Apply')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </section>

            
            <section class="mb-4">
                <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide -mx-4 px-4">
                    
                    <a href="<?php echo e(route('products.index')); ?>" 
                       class="flex-shrink-0 px-5 py-2.5 rounded-2xl font-medium text-sm transition-all whitespace-nowrap
                              <?php echo e(!request('category') ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30' : 'bg-white/10 text-white/80 hover:bg-white/20 border border-white/10'); ?>">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەموو' : (app()->getLocale() == 'ar' ? 'الكل' : 'All')); ?>

                    </a>
                    
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('products.index', ['category' => $cat->id])); ?>" 
                           class="flex-shrink-0 px-5 py-2.5 rounded-2xl font-medium text-sm transition-all whitespace-nowrap
                                  <?php echo e(request('category') == $cat->id ? 'bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30' : 'bg-white/10 text-white/80 hover:bg-white/20 border border-white/10'); ?>">
                            <?php echo e($cat->name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>

            
            <section class="mb-8">
                <div class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 rounded-3xl p-6 md:p-8 overflow-hidden">
                    
                    <div class="absolute -inset-2 bg-gradient-to-r from-cyan-500/30 via-purple-500/30 to-pink-500/30 rounded-3xl blur-xl"></div>
                    
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                    
                    <div class="relative z-10 flex items-center justify-between">
                        <div class="flex-1">
                            <span class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-xs font-medium mb-3">
                                <?php echo e(app()->getLocale() == 'ku' ? '✨ تایبەت' : (app()->getLocale() == 'ar' ? '✨ خاص' : '✨ Special')); ?>

                            </span>
                            <h2 class="text-xl md:text-2xl font-bold text-white mb-2">
                                <?php echo e(app()->getLocale() == 'ku' ? 'داشکاندنی %30' : (app()->getLocale() == 'ar' ? 'خصم 30%' : '30% Off')); ?>

                            </h2>
                            <p class="text-white/80 text-sm mb-4">
                                <?php echo e(app()->getLocale() == 'ku' ? 'لە هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'على جميع المنتجات' : 'On all products')); ?>

                            </p>
                            <button class="px-5 py-2.5 bg-white text-indigo-600 rounded-2xl font-semibold text-sm hover:bg-white/90 transition-colors shadow-lg">
                                <?php echo e(app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : (app()->getLocale() == 'ar' ? 'تسوق الآن' : 'Shop Now')); ?>

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

            
            <section>
                
                <div class="flex items-center justify-between mb-5">
                    <h2 class="text-lg font-bold text-white">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات' : 'Products')); ?>

                    </h2>
                    <select name="sort" onchange="window.location.href='<?php echo e(route('products.index')); ?>?sort='+this.value+'&category=<?php echo e(request('category')); ?>&search=<?php echo e(request('search')); ?>'" 
                            class="text-sm text-white/70 bg-transparent outline-none cursor-pointer">
                        <option value="latest" <?php echo e(request('sort') == 'latest' ? 'selected' : ''); ?>><?php echo e(app()->getLocale() == 'ku' ? 'نوێترین' : (app()->getLocale() == 'ar' ? 'الأحدث' : 'Latest')); ?></option>
                        <option value="price_low" <?php echo e(request('sort') == 'price_low' ? 'selected' : ''); ?>><?php echo e(app()->getLocale() == 'ku' ? 'نرخ ↑' : (app()->getLocale() == 'ar' ? 'السعر ↑' : 'Price ↑')); ?></option>
                        <option value="price_high" <?php echo e(request('sort') == 'price_high' ? 'selected' : ''); ?>><?php echo e(app()->getLocale() == 'ku' ? 'نرخ ↓' : (app()->getLocale() == 'ar' ? 'السعر ↓' : 'Price ↓')); ?></option>
                    </select>
                </div>

                
                <?php if(count($products)): ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <article class="group">
                                <a href="<?php echo e(route('products.show', $product)); ?>" class="block">
                                    <div class="bg-white/10 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/10 hover:border-white/20 hover:bg-white/15 transition-all duration-300 hover:-translate-y-1">
                                        
                                        
                                        <div class="relative aspect-square p-3 bg-white/5">
                                            
                                            <?php if($product->image): ?>
                                                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" 
                                                     alt="<?php echo e($product->name); ?>"
                                                     class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"
                                                     loading="lazy">
                                            <?php else: ?>
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <i class="fa-solid fa-image text-3xl text-gray-300"></i>
                                                </div>
                                            <?php endif; ?>
                                            
                                            
                                            <div class="absolute top-4 left-4 flex items-center gap-1 px-2 py-1 bg-white/90 backdrop-blur-sm rounded-lg shadow-sm">
                                                <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
                                                <span class="text-[10px] font-semibold text-gray-700">4.<?php echo e(rand(5,9)); ?></span>
                                            </div>
                                            
                                            
                                            <button class="absolute top-4 right-4 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-sm hover:bg-rose-500 hover:text-white transition-all group/heart">
                                                <i class="fa-regular fa-heart text-xs text-gray-500 group-hover/heart:text-white"></i>
                                            </button>
                                            
                                            
                                            <?php if($product->discount_price): ?>
                                                <div class="absolute bottom-4 left-4 px-2 py-1 bg-rose-500 rounded-lg">
                                                    <span class="text-[10px] font-bold text-white">-<?php echo e(round((($product->price - $product->discount_price) / $product->price) * 100)); ?>%</span>
                                                </div>
                                            <?php endif; ?>
                                            
                                            
                                            <?php if($product->created_at >= now()->subDays(7) && !$product->discount_price): ?>
                                                <div class="absolute bottom-4 left-4 px-2 py-1 bg-emerald-500 rounded-lg">
                                                    <span class="text-[10px] font-bold text-white"><?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW')); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                        
                                        <div class="p-4">
                                            
                                            <?php if($product->category): ?>
                                                <span class="text-[10px] text-cyan-400 font-medium uppercase tracking-wider">
                                                    <?php echo e($product->category->name); ?>

                                                </span>
                                            <?php endif; ?>
                                            
                                            
                                            <h3 class="text-sm font-semibold text-white mt-1 line-clamp-1 group-hover:text-cyan-400 transition-colors">
                                                <?php echo e($product->name); ?>

                                            </h3>
                                            
                                            
                                            <div class="flex items-center gap-2 mt-2">
                                                <?php if($product->discount_price): ?>
                                                    <span class="text-base font-bold text-white">$<?php echo e(number_format($product->discount_price, 0)); ?></span>
                                                    <span class="text-xs text-white/50 line-through">$<?php echo e(number_format($product->price, 0)); ?></span>
                                                <?php else: ?>
                                                    <span class="text-base font-bold text-white">$<?php echo e(number_format($product->price, 0)); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            
                                            
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <div class="mt-10 flex justify-center">
                        <?php echo e($products->links()); ?>

                    </div>
                <?php else: ?>
                    
                    <div class="text-center py-20">
                        <div class="w-24 h-24 bg-white/10 backdrop-blur-xl rounded-full flex items-center justify-center mx-auto mb-6 border border-white/10">
                            <i class="fa-solid fa-box-open text-3xl text-cyan-400"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">
                            <?php echo e(app()->getLocale() == 'ku' ? 'هیچ بەرهەمێک نەدۆزرایەوە' : (app()->getLocale() == 'ar' ? 'لا توجد منتجات' : 'No products found')); ?>

                        </h3>
                        <p class="text-white/60 text-sm mb-6">
                            <?php echo e(app()->getLocale() == 'ku' ? 'تکایە فلتەرەکان بگۆڕە' : (app()->getLocale() == 'ar' ? 'جرب تغيير الفلاتر' : 'Try changing filters')); ?>

                        </p>
                        <a href="<?php echo e(route('products.index')); ?>" 
                           class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-2xl font-semibold text-sm shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-all">
                            <i class="fa-solid fa-rotate-right"></i>
                            <?php echo e(app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'View All')); ?>

                        </a>
                    </div>
                <?php endif; ?>
            </section>
        </main>

        
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