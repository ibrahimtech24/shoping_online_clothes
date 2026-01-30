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
        </div>

        <div class="relative z-10 py-8 md:py-12">
            <div class="max-w-7xl mx-auto px-4">
                
                
                <div class="flex items-center gap-3 text-sm mb-8">
                    <a href="<?php echo e(route('categories.index')); ?>" class="text-white/50 hover:text-white transition-colors">
                        <?php echo e(app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : (app()->getLocale() == 'ar' ? 'الفئات' : 'Categories')); ?>

                    </a>
                    <span class="text-white/30">/</span>
                    <span class="text-cyan-400 font-medium"><?php echo e($category->name); ?></span>
                </div>

                
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-xl rounded-full border border-white/10 mb-6">
                        <span class="text-2xl">
                            <?php if($category->id == 1): ?> 👔
                            <?php elseif($category->id == 2): ?> 👗
                            <?php elseif($category->id == 3): ?> 👟
                            <?php elseif($category->id == 4): ?> 👜
                            <?php elseif($category->id == 5): ?> ⌚
                            <?php else: ?> 🛍️
                            <?php endif; ?>
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                            <?php echo e($category->name); ?>

                        </span>
                    </h1>
                    <p class="text-white/50 max-w-2xl mx-auto">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکانی کەتەگۆری ' . $category->name : (app()->getLocale() == 'ar' ? 'جميع منتجات فئة ' . $category->name : 'All products in ' . $category->name . ' category')); ?>

                    </p>
                </div>

                <?php if($products->count() > 0): ?>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('products.show', $product)); ?>" class="group">
                            <div class="bg-white/5 backdrop-blur-xl rounded-2xl overflow-hidden border border-white/10 hover:border-white/20 hover:bg-white/10 transition-all duration-300 hover:-translate-y-1">
                                
                                <div class="aspect-square overflow-hidden relative">
                                    <?php if($product->image): ?>
                                        <img src="<?php echo e(str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image)); ?>" 
                                             alt="<?php echo e($product->name); ?>" 
                                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <?php else: ?>
                                        <div class="w-full h-full bg-white/5 flex items-center justify-center">
                                            <i class="fa-solid fa-image text-4xl text-white/20"></i>
                                        </div>
                                    <?php endif; ?>
                                    
                                    
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end justify-center pb-4">
                                        <span class="px-4 py-2 bg-white text-slate-900 rounded-xl font-semibold text-sm transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                            <?php echo e(app()->getLocale() == 'ku' ? 'بینین' : (app()->getLocale() == 'ar' ? 'عرض' : 'View')); ?>

                                        </span>
                                    </div>

                                    
                                    <?php if($product->created_at->diffInDays(now()) < 7): ?>
                                        <div class="absolute top-3 right-3">
                                            <span class="px-2 py-1 bg-cyan-500 text-white text-xs font-bold rounded-lg">
                                                <?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW')); ?>

                                            </span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                
                                <div class="p-4">
                                    <h3 class="text-white font-semibold mb-2 line-clamp-2 group-hover:text-cyan-400 transition-colors">
                                        <?php echo e($product->name); ?>

                                    </h3>
                                    
                                    
                                    <div class="flex items-center justify-between">
                                        <span class="text-lg font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                            $<?php echo e(number_format($product->price, 2)); ?>

                                        </span>
                                        
                                        
                                        <div class="flex items-center gap-1">
                                            <i class="fa-solid fa-star text-amber-400 text-xs"></i>
                                            <span class="text-white/50 text-sm"><?php echo e(number_format(rand(40, 50) / 10, 1)); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <div class="mt-12 flex justify-center">
                        <?php echo e($products->links()); ?>

                    </div>
                <?php else: ?>
                    
                    <div class="text-center py-20">
                        <div class="w-32 h-32 bg-white/5 backdrop-blur-xl rounded-full flex items-center justify-center mx-auto mb-8 border border-white/10">
                            <i class="fa-solid fa-box-open text-5xl text-white/30"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-3">
                            <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەم نەدۆزرایەوە' : (app()->getLocale() == 'ar' ? 'لم يتم العثور على منتجات' : 'No Products Found')); ?>

                        </h2>
                        <p class="text-white/60 mb-8 max-w-md mx-auto">
                            <?php echo e(app()->getLocale() == 'ku' ? 'لەم کەتەگۆریەدا بەرهەم نییە' : (app()->getLocale() == 'ar' ? 'لا توجد منتجات في هذه الفئة بعد' : 'There are no products in this category yet')); ?>

                        </p>
                        <a href="<?php echo e(route('products.index')); ?>" 
                           class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-all hover:-translate-y-1">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <?php echo e(app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'All Products')); ?>

                        </a>
                    </div>
                <?php endif; ?>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/categories/show.blade.php ENDPATH**/ ?>