
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

<div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 overflow-hidden relative border border-gray-100 hover:border-purple-200 hover:-translate-y-2">
    
    
    <button class="absolute top-4 right-4 z-20 w-11 h-11 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-red-50 hover:scale-110 transition-all duration-300 wishlist-btn border border-gray-100"
            data-product-id="<?php echo e($product->id); ?>">
        <i class="fa-regular fa-heart text-lg text-gray-600 group-hover:text-red-500 transition-colors"></i>
    </button>

    
    <div class="absolute top-4 left-4 z-20 flex flex-col gap-2">
        <?php if($product->is_new): ?>
            <span class="inline-flex items-center gap-1 bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                <i class="fa-solid fa-sparkles text-[10px]"></i>
                <?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW')); ?>

            </span>
        <?php endif; ?>
        
        <?php if($product->hasActiveDiscount()): ?>
            <span class="inline-flex items-center gap-1 bg-gradient-to-r from-red-500 to-rose-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg animate-pulse">
                <i class="fa-solid fa-fire text-[10px]"></i>
                -<?php echo e($product->discount_percentage); ?>%
            </span>
        <?php endif; ?>

        <?php if($product->is_featured): ?>
            <span class="inline-flex items-center gap-1 bg-gradient-to-r from-amber-400 to-orange-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                <i class="fa-solid fa-star text-[10px]"></i>
                <?php echo e(app()->getLocale() == 'ku' ? 'تایبەت' : (app()->getLocale() == 'ar' ? 'مميز' : 'HOT')); ?>

            </span>
        <?php endif; ?>
    </div>

    
    <div class="relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 aspect-square">
        <a href="<?php echo e(route('products.show', $product)); ?>" class="block w-full h-full">
            <img src="<?php echo e(str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image)); ?>" 
                 alt="<?php echo e($product->name); ?>"
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out"
                 loading="lazy">
        </a>
        
        
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        
        
        <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
            <a href="<?php echo e(route('products.show', $product)); ?>" 
               class="flex items-center justify-center gap-2 w-full bg-white/95 backdrop-blur-sm text-gray-900 py-3.5 rounded-xl font-bold hover:bg-white transition-colors shadow-xl">
                <i class="fa-solid fa-eye"></i>
                <span><?php echo e(app()->getLocale() == 'ku' ? 'بینینی زیاتر' : (app()->getLocale() == 'ar' ? 'عرض المزيد' : 'Quick View')); ?></span>
            </a>
        </div>
    </div>

    
    <div class="p-5 sm:p-6">
        
        <a href="<?php echo e(route('products.show', $product)); ?>" class="block">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 hover:text-purple-600 transition-colors mb-2 line-clamp-2 leading-tight">
                <?php echo e($product->name); ?>

            </h3>
        </a>

        
        <div class="flex items-center gap-2 mb-3">
            <div class="flex items-center">
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <i class="fa-solid fa-star text-sm <?php echo e($i <= 4 ? 'text-amber-400' : 'text-gray-300'); ?>"></i>
                <?php endfor; ?>
            </div>
            <span class="text-sm text-gray-500 font-medium">(<?php echo e(rand(50, 200)); ?>)</span>
        </div>

        
        <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">
            <?php echo e(Str::limit($product->description, 70)); ?>

        </p>

        
        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
            
            <div class="flex items-baseline gap-2">
                <?php if($product->hasActiveDiscount()): ?>
                    <span class="text-2xl font-black text-purple-600">$<?php echo e(number_format($product->final_price, 0)); ?></span>
                    <span class="text-base text-gray-400 line-through font-medium">$<?php echo e(number_format($product->price, 0)); ?></span>
                <?php else: ?>
                    <span class="text-2xl font-black text-gray-900">$<?php echo e(number_format($product->price, 0)); ?></span>
                <?php endif; ?>
            </div>

            
            <?php if(!$product->isOutOfStock()): ?>
                <?php
                    $availableSizes = $product->productsizes->filter(fn($ps) => $ps->quantity > 0);
                    $hasAvailableSizes = $availableSizes->count() > 0;
                ?>
                
                <?php if($hasAvailableSizes): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('products.show', $product)); ?>"
                           class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-fuchsia-600 hover:from-purple-700 hover:to-fuchsia-700 text-white px-5 py-2.5 rounded-xl font-bold text-sm transition-all hover:shadow-lg hover:shadow-purple-500/30">
                            <i class="fa-solid fa-cart-plus"></i>
                            <span class="hidden sm:inline"><?php echo e(app()->getLocale() == 'ku' ? 'زیادکردن' : (app()->getLocale() == 'ar' ? 'إضافة' : 'Add')); ?></span>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>"
                           class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white px-5 py-2.5 rounded-xl font-bold text-sm transition-all hover:shadow-lg hover:shadow-amber-500/30">
                            <i class="fa-solid fa-sign-in-alt"></i>
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <span class="inline-flex items-center gap-1.5 bg-gray-100 text-gray-500 px-4 py-2.5 rounded-xl font-semibold text-sm">
                        <i class="fa-solid fa-xmark"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'نەماوە' : (app()->getLocale() == 'ar' ? 'نفذ' : 'Sold')); ?>

                    </span>
                <?php endif; ?>
            <?php else: ?>
                <span class="inline-flex items-center gap-1.5 bg-red-50 text-red-500 px-4 py-2.5 rounded-xl font-semibold text-sm border border-red-100">
                    <i class="fa-solid fa-box-archive"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock')); ?>

                </span>
            <?php endif; ?>
        </div>

        
        <?php if($product->productsizes->count() > 0): ?>
            <?php
                $availableSizes = $product->productsizes->filter(fn($ps) => $ps->quantity > 0);
            ?>
            <?php if($availableSizes->count() > 0): ?>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="text-xs text-gray-500 font-medium mb-2">
                        <?php echo e(app()->getLocale() == 'ku' ? 'قەبارەکان:' : (app()->getLocale() == 'ar' ? 'المقاسات:' : 'Sizes:')); ?>

                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <?php $__currentLoopData = $availableSizes->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productSize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="inline-flex items-center justify-center min-w-[36px] h-8 text-xs bg-purple-50 text-purple-700 font-bold px-2 rounded-lg border border-purple-100 hover:bg-purple-100 transition-colors">
                                <?php echo e($productSize->size->name); ?>

                            </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($availableSizes->count() > 5): ?>
                            <span class="inline-flex items-center justify-center min-w-[36px] h-8 text-xs bg-gray-100 text-gray-600 font-bold px-2 rounded-lg">
                                +<?php echo e($availableSizes->count() - 5); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/products/partials/product-card.blade.php ENDPATH**/ ?>