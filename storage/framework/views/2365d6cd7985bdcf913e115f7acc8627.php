<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product', 'link' => 'true']));

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

foreach (array_filter((['product', 'link' => 'true']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="group">
    <form action="<?php echo e(route('cart.store')); ?>" method="POST"
        class="bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 border border-dark-100 h-full flex flex-col">
        <?php echo csrf_field(); ?>

        
        <a <?php if($link == 'true'): ?> href="<?php echo e(route('products.show', ['product' => $product])); ?>" <?php endif; ?> 
           class="block relative overflow-hidden aspect-square">
            <img src="<?php echo e(str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            
            
            <div class="absolute inset-0 bg-gradient-to-t from-dark-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            
            
            <?php if($link == 'true'): ?>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="bg-white/90 backdrop-blur text-dark-900 px-4 py-2 rounded-full text-sm font-medium shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <i class="fa-solid fa-eye ml-2"></i>خێرا سەیرکردن
                    </span>
                </div>
            <?php endif; ?>
            
            
            <button type="button" class="absolute top-3 right-3 sm:top-4 sm:right-4 w-8 h-8 sm:w-10 sm:h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-primary-500 hover:text-white text-dark-600">
                <i class="fa-regular fa-heart text-sm sm:text-base"></i>
            </button>
            
            
            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 flex flex-col gap-2">
                <span class="text-[10px] sm:text-xs font-semibold text-white bg-gradient-to-r from-primary-500 to-accent-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                    <?php echo e($product->category->name); ?>

                </span>
                
                
                <?php if($product->hasActiveDiscount()): ?>
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-red-500 px-2 sm:px-3 py-1 rounded-full shadow-lg animate-pulse">
                        -<?php echo e($product->discount_percentage); ?>%
                    </span>
                    
                    
                    <?php if($product->discount_ends_at): ?>
                        <div x-data="countdown(<?php echo e($product->discount_remaining_seconds); ?>)" 
                             x-init="startCountdown()"
                             class="bg-gradient-to-r from-gray-900 to-gray-800 text-white px-2 py-2 rounded-lg shadow-lg text-center">
                            <div class="grid grid-cols-4 gap-1 text-[9px] sm:text-[10px]">
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(days)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5"><?php echo e(app()->getLocale() == 'ku' ? 'ڕۆژ' : 'Day'); ?></span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(hours)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5"><?php echo e(app()->getLocale() == 'ku' ? 'کات' : 'Hr'); ?></span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(minutes)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5"><?php echo e(app()->getLocale() == 'ku' ? 'خول' : 'Min'); ?></span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(seconds)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5"><?php echo e(app()->getLocale() == 'ku' ? 'چرک' : 'Sec'); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                
                
                <?php if($product->is_new): ?>
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-green-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                        🆕 نوێ
                    </span>
                <?php endif; ?>
                <?php if($product->is_trending): ?>
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-gradient-to-r from-orange-500 to-pink-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                        🔥 ترێند
                    </span>
                <?php endif; ?>
                <?php if($product->is_featured): ?>
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-blue-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                        ⭐ تایبەت
                    </span>
                <?php endif; ?>
            </div>
            
            
            <?php if($product->isOutOfStock()): ?>
                <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4">
                    <span class="block text-center text-xs sm:text-sm font-bold text-white bg-red-600 px-3 py-2 rounded-lg shadow-lg">
                        ❌ تەواو بووە
                    </span>
                </div>
            <?php elseif($product->isLowStock()): ?>
                <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4">
                    <span class="block text-center text-xs sm:text-sm font-semibold text-white bg-orange-500 px-3 py-1.5 rounded-lg shadow-lg">
                        ⚠️ کەم ماوەتەوە
                    </span>
                </div>
            <?php endif; ?>
        </a>

        
        <div class="p-3 sm:p-5 flex flex-col flex-grow">
            
            <span class="text-[10px] sm:text-xs text-dark-400 mb-1 sm:mb-2"><?php echo e($product->subcategory->name); ?></span>
            
            
            <h3 class="font-bold text-dark-900 text-sm sm:text-lg mb-2 sm:mb-3 line-clamp-2 group-hover:text-primary-600 transition-colors leading-tight">
                <?php echo e($product->name); ?>

            </h3>
            
            
            <div class="flex items-center gap-2 mb-3 sm:mb-4">
                <?php if($product->hasActiveDiscount()): ?>
                    <div class="flex flex-col">
                        <span class="text-xs sm:text-sm text-dark-400 line-through">$<?php echo e(number_format($product->price, 2)); ?></span>
                        <span class="text-lg sm:text-2xl font-bold text-green-600">$<?php echo e(number_format($product->final_price, 2)); ?></span>
                    </div>
                    <div class="bg-red-100 text-red-700 text-[10px] sm:text-xs font-bold px-2 py-1 rounded-full">
                        داشکان
                    </div>
                <?php else: ?>
                    <span class="text-lg sm:text-2xl font-bold gradient-text">$<?php echo e(number_format($product->price, 2)); ?></span>
                <?php endif; ?>
            </div>
            
            
            <div class="mb-3 sm:mb-4 flex-grow">
                <p class="text-[10px] sm:text-xs text-dark-400 mb-2">قەبارە:</p>
                <div class="flex flex-wrap gap-1.5 sm:gap-2">
                    <?php $__currentLoopData = $product->productsizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productsize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="cursor-pointer">
                            <input type="radio" id="size_<?php echo e($product->id); ?>_<?php echo e($productsize->size->id); ?>"
                                name="size_<?php echo e($product->id); ?>" value="<?php echo e($productsize->size->id); ?>"
                                class="hidden peer"
                                <?php if(old('size_' . $product->id) === $productsize->size->id): ?> checked <?php endif; ?>>
                            <span class="inline-block px-2 sm:px-3 py-1 sm:py-1.5 text-[10px] sm:text-xs font-medium border-2 border-dark-200 rounded-lg peer-checked:border-primary-500 peer-checked:bg-primary-500 peer-checked:text-white transition-all hover:border-primary-400">
                                <?php echo e($productsize->size->name); ?>

                            </span>
                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'size_'.e($product->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'size_'.e($product->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $attributes = $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f)): ?>
<?php $component = $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f; ?>
<?php unset($__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f); ?>
<?php endif; ?>
            </div>
            
            <?php if($link == 'true'): ?>
                
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <button type="submit" 
                    class="w-full btn-primary text-white py-2.5 sm:py-3 rounded-xl font-semibold text-sm sm:text-base flex items-center justify-center gap-2 group/btn mt-auto <?php echo e($product->isOutOfStock() ? 'opacity-50 cursor-not-allowed' : ''); ?>"
                    <?php echo e($product->isOutOfStock() ? 'disabled' : ''); ?>>
                    <i class="fa-solid fa-shopping-bag transition-transform group-hover/btn:scale-110"></i>
                    <span class="hidden sm:inline"><?php echo e($product->isOutOfStock() ? 'تەواو بووە' : 'زیادکردن بۆ سەبەتە'); ?></span>
                    <span class="sm:hidden"><?php echo e($product->isOutOfStock() ? 'تەواو بووە' : 'زیادکردن'); ?></span>
                </button>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/cards/product.blade.php ENDPATH**/ ?>