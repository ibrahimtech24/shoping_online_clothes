<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['order', 'route' => 'dashboard.orders.show']));

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

foreach (array_filter((['order', 'route' => 'dashboard.orders.show']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="bg-white rounded-2xl sm:rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 overflow-hidden hover:shadow-xl hover:shadow-dark-900/10 transition-all duration-300">
    
    <div class="bg-gradient-to-br from-primary-500 via-primary-600 to-accent-500 p-4 sm:p-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 sm:w-11 sm:h-11 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-box text-white text-sm sm:text-base"></i>
                </div>
                <div>
                    <p class="text-white/80 text-[10px] sm:text-xs">ناسنامەی داواکاری</p>
                    <p class="text-white font-bold text-sm sm:text-base">#<?php echo e($order->id); ?></p>
                </div>
            </div>
            <span class="px-2.5 sm:px-3 py-1 bg-white/20 backdrop-blur text-white text-[10px] sm:text-xs font-medium rounded-full">
                <?php echo e($order->state->name); ?>

            </span>
        </div>
    </div>
    
    
    <div class="p-4 sm:p-6 space-y-4">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 sm:w-10 sm:h-10 bg-dark-100 rounded-xl flex items-center justify-center">
                <i class="fa-solid fa-user text-dark-400 text-sm"></i>
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-[10px] sm:text-xs text-dark-400">کڕیار</p>
                <p class="font-medium text-dark-900 text-sm sm:text-base truncate"><?php echo e($order->user->name); ?></p>
            </div>
        </div>
        
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 sm:w-10 sm:h-10 bg-dark-100 rounded-xl flex items-center justify-center">
                <i class="fa-solid fa-clock text-dark-400 text-sm"></i>
            </div>
            <div>
                <p class="text-[10px] sm:text-xs text-dark-400">بەرواری داواکاری</p>
                <p class="font-medium text-dark-700 text-sm"><?php echo e($order->created_at->format('M d, Y')); ?></p>
            </div>
        </div>
        
        <div class="flex items-center justify-between pt-4 border-t border-dark-100">
            <div>
                <p class="text-[10px] sm:text-xs text-dark-400">کۆی گشتی</p>
                <p class="text-xl sm:text-2xl font-bold gradient-text">$<?php echo e(number_format($order->total_price, 2)); ?></p>
            </div>
            <a href="<?php echo e(route($route, ['order' => $order])); ?>"
               class="btn-primary text-white px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl font-medium inline-flex items-center gap-2 text-sm">
                <span class="hidden sm:inline">وردەکاریەکان</span>
                <span class="sm:hidden">بینین</span>
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/cards/order.blade.php ENDPATH**/ ?>