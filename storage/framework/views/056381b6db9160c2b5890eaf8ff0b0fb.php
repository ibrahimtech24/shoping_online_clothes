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
                
                
                <div class="text-center mb-10">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-xl rounded-full border border-white/10 mb-4">
                        <i class="fa-solid fa-bag-shopping text-cyan-400"></i>
                        <span class="text-white/80 text-sm font-medium"><?php echo e(app()->getLocale() == 'ku' ? 'سەبەتەی کڕین' : (app()->getLocale() == 'ar' ? 'سلة التسوق' : 'Shopping Cart')); ?></span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                        <?php echo e(app()->getLocale() == 'ku' ? 'سەبەتەی' : (app()->getLocale() == 'ar' ? 'سلة' : 'Your')); ?>

                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent"><?php echo e(app()->getLocale() == 'ku' ? 'کڕین' : (app()->getLocale() == 'ar' ? 'التسوق' : 'Cart')); ?></span>
                    </h1>
                    <p class="text-white/60"><?php echo e(app()->getLocale() == 'ku' ? 'بابەتەکانت پێداچووەوە و بڕۆ بۆ داواکردن' : (app()->getLocale() == 'ar' ? 'راجع العناصر وانتقل للطلب' : 'Review items and proceed to checkout')); ?></p>
                </div>

                <?php if(count($items) !== 0): ?>
                    <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                        
                        
                        <div class="flex-1">
                            <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 overflow-hidden">
                                
                                <div class="px-6 py-4 border-b border-white/10 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/30">
                                        <i class="fa-solid fa-shopping-bag text-white"></i>
                                    </div>
                                    <div>
                                        <h2 class="font-bold text-white"><?php echo e(app()->getLocale() == 'ku' ? 'بابەتەکانی سەبەتە' : (app()->getLocale() == 'ar' ? 'عناصر السلة' : 'Cart Items')); ?></h2>
                                        <p class="text-sm text-white/50"><?php echo e(count($items)); ?> <?php echo e(app()->getLocale() == 'ku' ? 'بابەت' : (app()->getLocale() == 'ar' ? 'عنصر' : 'items')); ?></p>
                                    </div>
                                </div>

                                
                                <div class="divide-y divide-white/10">
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="p-4 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 hover:bg-white/5 transition-colors">
                                            
                                            <a href="<?php echo e(route('products.show', ['product' => $item->product])); ?>" class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl overflow-hidden bg-white/5 border border-white/10 shrink-0">
                                                <img src="<?php echo e(str_starts_with($item->product->image, 'http') ? $item->product->image : asset('storage/' . $item->product->image)); ?>" 
                                                     alt="<?php echo e($item->product->name); ?>"
                                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                            </a>

                                            
                                            <div class="flex-1 min-w-0">
                                                <a href="<?php echo e(route('products.show', ['product' => $item->product])); ?>" class="font-bold text-white text-base sm:text-lg hover:text-cyan-400 transition-colors line-clamp-1">
                                                    <?php echo e($item->product->name); ?>

                                                </a>
                                                <p class="text-white/50 text-sm mt-1">
                                                    <?php echo e(app()->getLocale() == 'ku' ? 'قەبارە:' : (app()->getLocale() == 'ar' ? 'المقاس:' : 'Size:')); ?>

                                                    <span class="font-medium text-white bg-white/10 px-2 py-0.5 rounded-lg"><?php echo e($item->size->name); ?></span>
                                                </p>
                                                <p class="text-cyan-400 font-bold text-lg mt-2">$<?php echo e(number_format($item->product->price, 2)); ?></p>
                                            </div>

                                            
                                            <div class="flex items-center gap-3 sm:gap-4 w-full sm:w-auto justify-between sm:justify-end">
                                                <div class="flex items-center bg-white/5 border border-white/20 rounded-xl overflow-hidden">
                                                    <form action="<?php echo e(route('cart.update', ['cartitem' => $item])); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PATCH'); ?>
                                                        <input type="hidden" name="action" value="sub">
                                                        <button type="submit" class="w-10 h-10 flex items-center justify-center text-white/60 hover:bg-white/10 hover:text-white transition-colors">
                                                            <i class="fa-solid fa-minus text-sm"></i>
                                                        </button>
                                                    </form>
                                                    <span class="w-12 text-center font-bold text-white"><?php echo e($item->quantity); ?></span>
                                                    <form action="<?php echo e(route('cart.update', ['cartitem' => $item])); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PATCH'); ?>
                                                        <input type="hidden" name="action" value="add">
                                                        <button type="submit" class="w-10 h-10 flex items-center justify-center text-white/60 hover:bg-white/10 hover:text-white transition-colors">
                                                            <i class="fa-solid fa-plus text-sm"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                                
                                                <form action="<?php echo e(route('cart.delete', ['cartitem' => $item])); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="w-10 h-10 flex items-center justify-center text-white/40 hover:text-rose-500 hover:bg-rose-500/10 rounded-xl transition-colors">
                                                        <i class="fa-solid fa-trash text-sm"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="w-full lg:w-96 shrink-0">
                            <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-6 sticky top-24">
                                <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center shadow-lg shadow-pink-500/30">
                                        <i class="fa-solid fa-receipt text-white text-sm"></i>
                                    </div>
                                    <?php echo e(app()->getLocale() == 'ku' ? 'کورتەی داواکاری' : (app()->getLocale() == 'ar' ? 'ملخص الطلب' : 'Order Summary')); ?>

                                </h2>

                                <div class="space-y-4 mb-6">
                                    <div class="flex justify-between items-center">
                                        <span class="text-white/60"><?php echo e(app()->getLocale() == 'ku' ? 'کۆی بابەتەکان' : (app()->getLocale() == 'ar' ? 'إجمالي العناصر' : 'Subtotal')); ?></span>
                                        <span class="font-medium text-white">$<?php echo e(number_format($totalPrice, 2)); ?></span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-white/60"><?php echo e(app()->getLocale() == 'ku' ? 'گەیاندن' : (app()->getLocale() == 'ar' ? 'التوصيل' : 'Shipping')); ?></span>
                                        <span class="font-medium text-emerald-400"><?php echo e(app()->getLocale() == 'ku' ? 'خۆڕایی' : (app()->getLocale() == 'ar' ? 'مجاني' : 'Free')); ?></span>
                                    </div>
                                    <div class="h-px bg-white/10"></div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-white font-bold text-lg"><?php echo e(app()->getLocale() == 'ku' ? 'کۆی گشتی' : (app()->getLocale() == 'ar' ? 'الإجمالي' : 'Total')); ?></span>
                                        <span class="font-bold text-2xl text-white">$<?php echo e(number_format($totalPrice, 2)); ?></span>
                                    </div>
                                </div>

                                
                                <form action="<?php echo e(route('orders.store')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit"
                                       class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl hover:from-cyan-600 hover:to-blue-700 transition-all shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 flex items-center justify-center gap-3">
                                        <i class="fa-solid fa-lock"></i>
                                        <?php echo e(app()->getLocale() == 'ku' ? 'تەواوکردنی داواکاری' : (app()->getLocale() == 'ar' ? 'إتمام الطلب' : 'Complete Order')); ?>

                                    </button>
                                </form>

                                
                                <a href="<?php echo e(route('products.index')); ?>" 
                                   class="w-full py-3 mt-3 bg-white/5 text-white font-medium rounded-2xl border border-white/10 hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    <?php echo e(app()->getLocale() == 'ku' ? 'بەردەوامبە لە کڕین' : (app()->getLocale() == 'ar' ? 'متابعة التسوق' : 'Continue Shopping')); ?>

                                </a>

                                
                                <div class="mt-6 pt-6 border-t border-white/10">
                                    <div class="flex items-center justify-center gap-4 text-white/40">
                                        <div class="flex items-center gap-1 text-xs">
                                            <i class="fa-solid fa-shield-check text-emerald-400"></i>
                                            <span><?php echo e(app()->getLocale() == 'ku' ? 'پارەدانی سەلامەت' : (app()->getLocale() == 'ar' ? 'دفع آمن' : 'Secure')); ?></span>
                                        </div>
                                        <div class="flex items-center gap-1 text-xs">
                                            <i class="fa-solid fa-truck-fast text-cyan-400"></i>
                                            <span><?php echo e(app()->getLocale() == 'ku' ? 'گەیاندنی خێرا' : (app()->getLocale() == 'ar' ? 'توصيل سريع' : 'Fast')); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    
                    <div class="text-center py-20">
                        <div class="w-32 h-32 bg-white/5 backdrop-blur-xl rounded-full flex items-center justify-center mx-auto mb-8 border border-white/10">
                            <i class="fa-solid fa-cart-shopping text-5xl text-white/30"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-3">
                            <?php echo e(app()->getLocale() == 'ku' ? 'سەبەتەکەت بەتاڵە' : (app()->getLocale() == 'ar' ? 'سلتك فارغة' : 'Your cart is empty')); ?>

                        </h2>
                        <p class="text-white/60 mb-8 max-w-md mx-auto">
                            <?php echo e(app()->getLocale() == 'ku' ? 'هیچ بابەتێکت لە سەبەتە نییە. دەستپێبکە بە کڕین!' : (app()->getLocale() == 'ar' ? 'لا يوجد عناصر في سلتك. ابدأ التسوق!' : 'No items in your cart. Start shopping!')); ?>

                        </p>
                        <a href="<?php echo e(route('products.index')); ?>" 
                           class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-all hover:-translate-y-1">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <?php echo e(app()->getLocale() == 'ku' ? 'دەستپێکردنی کڕین' : (app()->getLocale() == 'ar' ? 'ابدأ التسوق' : 'Start Shopping')); ?>

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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/cart/index.blade.php ENDPATH**/ ?>