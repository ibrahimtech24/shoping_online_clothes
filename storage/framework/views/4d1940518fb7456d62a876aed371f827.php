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
    
    
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black">
        
        
        <div class="fixed inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-br from-violet-500/10 to-indigo-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 py-12 md:py-20">
            <div class="max-w-6xl mx-auto px-4">
                
                
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-xl rounded-full border border-white/10 mb-6">
                        <i class="fa-solid fa-layer-group text-cyan-400"></i>
                        <span class="text-white/80 text-sm font-medium"><?php echo e(app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'الفئات' : 'Categories')); ?></span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەموو' : (app()->getLocale() == 'ar' ? 'جميع' : 'All')); ?>

                        <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-pink-500 bg-clip-text text-transparent">
                            <?php echo e(app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'الفئات' : 'Categories')); ?>

                        </span>
                    </h1>
                    <p class="text-white/50 text-lg max-w-2xl mx-auto">
                        <?php echo e(app()->getLocale() == 'ku' ? 'گەران لە کەتەگۆریەکاندا بۆ دۆزینەوەی بەرهەمی دڵخوازت' : (app()->getLocale() == 'ar' ? 'تصفح الفئات للعثور على منتجاتك المفضلة' : 'Browse through categories to find your favorite products')); ?>

                    </p>
                </div>

                
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('categories.show', $category)); ?>" class="group">
                        <div class="bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 p-8 text-center hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                            
                            <div class="w-24 h-24 rounded-3xl bg-gradient-to-br 
                                <?php if($loop->index % 3 == 0): ?> from-cyan-500/20 to-blue-600/20 
                                <?php elseif($loop->index % 3 == 1): ?> from-pink-500/20 to-purple-600/20
                                <?php else: ?> from-emerald-500/20 to-teal-600/20
                                <?php endif; ?>
                                flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-5xl">
                                    <?php if($category->id == 1): ?> 👔
                                    <?php elseif($category->id == 2): ?> 👗
                                    <?php elseif($category->id == 3): ?> 👟
                                    <?php elseif($category->id == 4): ?> 👜
                                    <?php elseif($category->id == 5): ?> ⌚
                                    <?php else: ?> 🛍️
                                    <?php endif; ?>
                                </span>
                            </div>
                            
                            
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors">
                                <?php echo e($category->name); ?>

                            </h3>
                            
                            
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full mb-6 border border-white/10">
                                <span class="text-lg font-bold text-cyan-400"><?php echo e($category->products_count); ?>+</span>
                                <span class="text-white/60"><?php echo e(app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'Products')); ?></span>
                            </div>
                            
                            
                            <div class="flex items-center justify-center gap-2 text-cyan-400 font-semibold group-hover:gap-4 transition-all">
                                <span><?php echo e(app()->getLocale() == 'ku' ? 'گەران' : (app()->getLocale() == 'ar' ? 'تصفح' : 'Browse')); ?></span>
                                <i class="fa-solid fa-arrow-<?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right'); ?>"></i>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </div>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/categories/index.blade.php ENDPATH**/ ?>