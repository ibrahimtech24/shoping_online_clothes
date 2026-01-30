
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product']));

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

foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="group relative bg-white rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 overflow-hidden hover:shadow-2xl hover:shadow-primary-500/20 transition-all duration-500 hover:-translate-y-2">
    
    <div class="absolute top-4 left-4 z-20 flex flex-col gap-2">
        <?php if($product->is_new): ?>
            <span class="bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-pulse">
                <?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW')); ?>

            </span>
        <?php endif; ?>
        
        <?php if($product->is_featured): ?>
            <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                <?php echo e(app()->getLocale() == 'ku' ? 'تایبەت' : (app()->getLocale() == 'ar' ? 'مميز' : 'FEATURED')); ?>

            </span>
        <?php endif; ?>
        
        <?php if($product->is_trending): ?>
            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                🔥 <?php echo e(app()->getLocale() == 'ku' ? 'ترێند' : (app()->getLocale() == 'ar' ? 'رائج' : 'TRENDING')); ?>

            </span>
        <?php endif; ?>
        
        <?php if($product->hasActiveDiscount()): ?>
            <span class="bg-gradient-to-r from-red-600 to-red-700 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg animate-bounce">
                -<?php echo e($product->discount_percentage); ?>%
            </span>
        <?php endif; ?>
    </div>

    
    <div class="absolute top-4 right-4 z-20 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-red-500 hover:text-white transition-colors duration-300 wishlist-btn"
                data-product-id="<?php echo e($product->id); ?>">
            <i class="fa-regular fa-heart"></i>
        </button>
        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-primary-500 hover:text-white transition-colors duration-300 quick-view-btn"
                data-product-id="<?php echo e($product->id); ?>">
            <i class="fa-regular fa-eye"></i>
        </button>
        <button class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg hover:bg-blue-500 hover:text-white transition-colors duration-300 compare-btn"
                data-product-id="<?php echo e($product->id); ?>">
            <i class="fa-solid fa-balance-scale"></i>
        </button>
    </div>

    
    <div class="relative overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 aspect-square">
        <img src="<?php echo e(str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image)); ?>" 
             alt="<?php echo e($product->name); ?>"
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
             loading="lazy">
        
        
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        
        <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <?php if(!$product->isOutOfStock()): ?>
                <a href="<?php echo e(route('products.show', $product)); ?>" 
                   class="block w-full bg-white text-dark-900 py-3 rounded-xl font-semibold hover:bg-primary-500 hover:text-white transition-colors duration-300 text-center">
                    <i class="fa-solid fa-eye mr-2"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'بینینی وردەکاری' : (app()->getLocale() == 'ar' ? 'عرض التفاصيل' : 'View Details')); ?>

                </a>
            <?php else: ?>
                <div class="w-full bg-red-100 text-red-600 py-3 rounded-xl font-semibold text-center">
                    <i class="fa-solid fa-times-circle mr-2"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock')); ?>

                </div>
            <?php endif; ?>
        </div>

        
        <div class="absolute top-4 left-1/2 transform -translate-x-1/2">
            <?php if($product->isOutOfStock()): ?>
                <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                    <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock')); ?>

                </span>
            <?php elseif($product->isLowStock()): ?>
                <span class="bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse">
                    <?php echo e(app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock')); ?>

                </span>
            <?php endif; ?>
        </div>
    </div>

    
    <div class="p-6 relative z-10">
        
        <div class="flex items-center gap-2 mb-3">
            <span class="text-xs text-primary-500 font-medium bg-primary-50 px-2 py-1 rounded-full">
                <?php echo e($product->category->name); ?>

            </span>
            <?php if($product->subcategory): ?>
                <span class="text-xs text-gray-500">•</span>
                <span class="text-xs text-gray-500"><?php echo e($product->subcategory->name); ?></span>
            <?php endif; ?>
        </div>

        
        <h3 class="font-bold text-dark-900 text-lg mb-2 group-hover:text-primary-500 transition-colors duration-300 line-clamp-2">
            <a href="<?php echo e(route('products.show', $product)); ?>" class="hover:underline">
                <?php echo e($product->name); ?>

            </a>
        </h3>

        
        <p class="text-dark-400 text-sm mb-4 line-clamp-2">
            <?php echo e(Str::limit($product->description, 100)); ?>

        </p>

        
        <div class="flex items-center gap-2 mb-4">
            <div class="flex text-yellow-400">
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <i class="fa-solid fa-star text-xs"></i>
                <?php endfor; ?>
            </div>
            <span class="text-xs text-gray-500">(<?php echo e(rand(10, 100)); ?> <?php echo e(app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'reviews')); ?>)</span>
        </div>

        
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <?php if($product->hasActiveDiscount()): ?>
                    <span class="text-2xl font-bold text-primary-500">
                        $<?php echo e(number_format($product->final_price, 2)); ?>

                    </span>
                    <span class="text-lg text-gray-400 line-through">
                        $<?php echo e(number_format($product->price, 2)); ?>

                    </span>
                <?php else: ?>
                    <span class="text-2xl font-bold text-dark-900">
                        $<?php echo e(number_format($product->price, 2)); ?>

                    </span>
                <?php endif; ?>
            </div>

            
            <div class="text-right">
                <div class="text-xs text-gray-500 mb-1">
                    <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا' : (app()->getLocale() == 'ar' ? 'المخزون' : 'Stock')); ?>

                </div>
                <div class="text-sm font-semibold <?php echo e($product->isLowStock() ? 'text-orange-500' : 'text-green-500'); ?>">
                    <?php echo e($product->getTotalStock()); ?>

                </div>
            </div>
        </div>

        
        <?php if($product->hasActiveDiscount() && $product->discount_ends_at): ?>
            <div class="mt-4 p-3 bg-gradient-to-r from-red-50 to-orange-50 rounded-xl border border-red-200">
                <div class="text-xs text-red-600 font-semibold mb-1 text-center">
                    <?php echo e(app()->getLocale() == 'ku' ? 'داشکاندن کۆتایی پێدێت' : (app()->getLocale() == 'ar' ? 'ينتهي الخصم في' : 'Discount ends in')); ?>

                </div>
                <div class="flex justify-center gap-2 text-red-600 font-mono text-sm" 
                     data-countdown="<?php echo e($product->discount_ends_at->toISOString()); ?>">
                    <div class="text-center">
                        <div class="countdown-days font-bold">00</div>
                        <div class="text-xs"><?php echo e(app()->getLocale() == 'ku' ? 'ڕۆژ' : (app()->getLocale() == 'ar' ? 'يوم' : 'Days')); ?></div>
                    </div>
                    <span class="self-center">:</span>
                    <div class="text-center">
                        <div class="countdown-hours font-bold">00</div>
                        <div class="text-xs"><?php echo e(app()->getLocale() == 'ku' ? 'کات' : (app()->getLocale() == 'ar' ? 'ساعة' : 'Hours')); ?></div>
                    </div>
                    <span class="self-center">:</span>
                    <div class="text-center">
                        <div class="countdown-minutes font-bold">00</div>
                        <div class="text-xs"><?php echo e(app()->getLocale() == 'ku' ? 'خولەک' : (app()->getLocale() == 'ar' ? 'دقيقة' : 'Min')); ?></div>
                    </div>
                    <span class="self-center">:</span>
                    <div class="text-center">
                        <div class="countdown-seconds font-bold">00</div>
                        <div class="text-xs"><?php echo e(app()->getLocale() == 'ku' ? 'چرکە' : (app()->getLocale() == 'ar' ? 'ثانية' : 'Sec')); ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        
        <?php if($product->productsizes->count() > 0): ?>
            <?php if(auth()->guard()->check()): ?>
            <?php
                $availableSizes = $product->productsizes->filter(fn($ps) => $ps->quantity > 0);
                $hasAvailableSizes = $availableSizes->count() > 0;
            ?>
            
            <div class="mt-4 relative z-30">
            <?php if($hasAvailableSizes): ?>
            <form action="<?php echo e(route('cart.store')); ?>" method="POST" class="quick-add-form" style="position: relative; z-index: 100;">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <input type="hidden" name="quantity" value="1">
                
                <div class="text-xs text-gray-500 mb-2">
                    <?php echo e(app()->getLocale() == 'ku' ? 'قەبارە هەڵبژێرە' : (app()->getLocale() == 'ar' ? 'اختر المقاس' : 'Select Size')); ?>:
                </div>
                <div class="flex flex-wrap gap-2 mb-3">
                    <?php $__currentLoopData = $availableSizes->take(7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $productSize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="cursor-pointer" style="position: relative; z-index: 100; cursor: pointer;">
                            <input type="radio" 
                                   name="size" 
                                   value="<?php echo e($productSize->size->id); ?>"
                                   class="hidden peer"
                                   style="cursor: pointer;"
                                   <?php echo e($index === 0 ? 'checked' : ''); ?>

                                   required>
                            <span class="inline-block text-xs bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full peer-checked:bg-primary-500 peer-checked:text-white transition-colors duration-200 hover:bg-primary-100" style="cursor: pointer; user-select: none;">
                                <?php echo e($productSize->size->name); ?>

                            </span>
                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <button type="submit" class="w-full bg-primary-500 hover:bg-primary-600 text-white py-2.5 rounded-xl font-semibold transition-colors duration-300 text-sm" style="position: relative; z-index: 100; cursor: pointer;">
                    <i class="fa-solid fa-cart-plus mr-2"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف إلى السلة' : 'Add to Cart')); ?>

                </button>
            </form>
            <?php else: ?>
            <div>
                <div class="w-full bg-red-100 text-red-600 py-2.5 rounded-xl font-semibold text-center text-sm">
                    <i class="fa-solid fa-times-circle mr-2"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'هەموو قەبارەکان تەواوبوون' : (app()->getLocale() == 'ar' ? 'جميع المقاسات غير متوفرة' : 'All sizes sold out')); ?>

                </div>
            </div>
            <?php endif; ?>
            </div>
            <?php else: ?>
            <div class="mt-4">
                <div class="text-xs text-gray-500 mb-2">
                    <?php echo e(app()->getLocale() == 'ku' ? 'قەبارەکان' : (app()->getLocale() == 'ar' ? 'المقاسات' : 'Sizes')); ?>:
                </div>
                <div class="flex flex-wrap gap-2 mb-3">
                    <?php $__currentLoopData = $product->productsizes->take(7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productSize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="inline-block text-xs bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full <?php echo e($productSize->quantity <= 0 ? 'opacity-50 line-through' : ''); ?>">
                            <?php echo e($productSize->size->name); ?>

                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('login')); ?>" class="block w-full bg-amber-500 hover:bg-amber-600 text-white py-2.5 rounded-xl font-semibold transition-colors duration-300 text-sm text-center">
                    <i class="fa-solid fa-sign-in-alt mr-2"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'بچۆ ژوورەوە بۆ کڕین' : (app()->getLocale() == 'ar' ? 'سجل الدخول للشراء' : 'Login to Buy')); ?>

                </a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/products/partials/product-card.blade.php ENDPATH**/ ?>