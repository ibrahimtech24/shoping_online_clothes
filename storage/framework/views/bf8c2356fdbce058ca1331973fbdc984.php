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
            <div class="max-w-5xl mx-auto px-4">
                
                
                <a href="<?php echo e(route('orders.index')); ?>" 
                   class="inline-flex items-center gap-2 text-white/60 hover:text-white transition-colors mb-6">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span><?php echo e(app()->getLocale() == 'ku' ? 'گەڕانەوە' : (app()->getLocale() == 'ar' ? 'رجوع' : 'Back')); ?></span>
                </a>

                
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 p-6 md:p-8 mb-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <h1 class="text-2xl md:text-3xl font-bold text-white">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'داواکاری' : (app()->getLocale() == 'ar' ? 'طلب' : 'Order')); ?> #<?php echo e($order->id); ?>

                                </h1>
                                <span class="px-4 py-1.5 rounded-full text-sm font-bold
                                    <?php if($order->state->id == 1): ?> bg-amber-500/20 text-amber-400 border border-amber-500/30
                                    <?php elseif($order->state->id == 2): ?> bg-blue-500/20 text-blue-400 border border-blue-500/30
                                    <?php elseif($order->state->id == 3): ?> bg-emerald-500/20 text-emerald-400 border border-emerald-500/30
                                    <?php elseif($order->state->id == 4): ?> bg-red-500/20 text-red-400 border border-red-500/30
                                    <?php else: ?> bg-white/10 text-white/70 border border-white/20
                                    <?php endif; ?>">
                                    <?php echo e($order->state->name); ?>

                                </span>
                            </div>
                            <p class="text-white/50 text-sm">
                                <i class="fa-regular fa-calendar mr-2"></i>
                                <?php echo e($order->created_at->format('Y/m/d - H:i')); ?>

                            </p>
                        </div>
                        <div class="text-right">
                            <p class="text-white/50 text-sm mb-1"><?php echo e(app()->getLocale() == 'ku' ? 'کۆی گشتی' : (app()->getLocale() == 'ar' ? 'الإجمالي' : 'Total')); ?></p>
                            <p class="text-3xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                $<?php echo e(number_format($order->total_price, 2)); ?>

                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="grid md:grid-cols-3 gap-4 mb-6">
                    
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/20 flex items-center justify-center">
                                <i class="fa-solid fa-user text-cyan-400"></i>
                            </div>
                            <h3 class="font-semibold text-white"><?php echo e(app()->getLocale() == 'ku' ? 'کڕیار' : (app()->getLocale() == 'ar' ? 'العميل' : 'Customer')); ?></h3>
                        </div>
                        <p class="text-white/80"><?php echo e($order->user->name); ?></p>
                        <p class="text-white/50 text-sm"><?php echo e($order->user->email); ?></p>
                    </div>

                    
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-pink-500/20 flex items-center justify-center">
                                <i class="fa-solid fa-location-dot text-pink-400"></i>
                            </div>
                            <h3 class="font-semibold text-white"><?php echo e(app()->getLocale() == 'ku' ? 'ناونیشان' : (app()->getLocale() == 'ar' ? 'العنوان' : 'Address')); ?></h3>
                        </div>
                        <p class="text-white/80"><?php echo e($order->address ?? (app()->getLocale() == 'ku' ? 'دیاری نەکراوە' : 'Not specified')); ?></p>
                    </div>

                    
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center">
                                <i class="fa-solid fa-phone text-emerald-400"></i>
                            </div>
                            <h3 class="font-semibold text-white"><?php echo e(app()->getLocale() == 'ku' ? 'ژمارەی تەلەفۆن' : (app()->getLocale() == 'ar' ? 'الهاتف' : 'Phone')); ?></h3>
                        </div>
                        <p class="text-white/80"><?php echo e($order->phone ?? (app()->getLocale() == 'ku' ? 'دیاری نەکراوە' : 'Not specified')); ?></p>
                    </div>
                </div>

                
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 overflow-hidden">
                    
                    <div class="px-6 py-4 border-b border-white/10">
                        <h2 class="text-xl font-bold text-white flex items-center gap-3">
                            <i class="fa-solid fa-box text-cyan-400"></i>
                            <?php echo e(app()->getLocale() == 'ku' ? 'بابەتەکان' : (app()->getLocale() == 'ar' ? 'العناصر' : 'Items')); ?>

                            <span class="text-sm font-normal text-white/50">(<?php echo e(count($orderitems)); ?>)</span>
                        </h2>
                    </div>

                    
                    <div class="divide-y divide-white/5">
                        <?php $__currentLoopData = $orderitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-5 hover:bg-white/5 transition-colors">
                                <div class="flex flex-col sm:flex-row gap-4">
                                    
                                    <div class="w-20 h-20 bg-white/10 rounded-xl overflow-hidden flex-shrink-0">
                                        <?php if($item->product->image): ?>
                                            <img src="<?php echo e(asset('storage/' . $item->product->image)); ?>" 
                                                 alt="<?php echo e($item->product->name); ?>"
                                                 class="w-full h-full object-cover">
                                        <?php else: ?>
                                            <div class="w-full h-full flex items-center justify-center text-white/30">
                                                <i class="fa-solid fa-image text-2xl"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    
                                    <div class="flex-1 min-w-0">
                                        <h3 class="font-semibold text-white mb-1"><?php echo e($item->product->name); ?></h3>
                                        <div class="flex flex-wrap gap-3 text-sm text-white/50">
                                            <span class="flex items-center gap-1.5">
                                                <i class="fa-solid fa-ruler"></i>
                                                <?php echo e(app()->getLocale() == 'ku' ? 'قەبارە:' : (app()->getLocale() == 'ar' ? 'المقاس:' : 'Size:')); ?> <?php echo e($item->size->name); ?>

                                            </span>
                                            <span class="flex items-center gap-1.5">
                                                <i class="fa-solid fa-layer-group"></i>
                                                <?php echo e(app()->getLocale() == 'ku' ? 'عەدەد:' : (app()->getLocale() == 'ar' ? 'الكمية:' : 'Qty:')); ?> <?php echo e($item->quantity); ?>

                                            </span>
                                        </div>
                                    </div>

                                    
                                    <div class="text-right">
                                        <p class="text-cyan-400 font-bold text-lg">$<?php echo e(number_format($item->price, 2)); ?></p>
                                        <p class="text-white/40 text-sm">$<?php echo e(number_format($item->price / $item->quantity, 2)); ?> <?php echo e(app()->getLocale() == 'ku' ? 'بۆ یەکە' : 'each'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <div class="px-6 py-5 bg-white/5 border-t border-white/10">
                        <div class="flex justify-between items-center">
                            <span class="text-white/60"><?php echo e(app()->getLocale() == 'ku' ? 'کۆی گشتی' : (app()->getLocale() == 'ar' ? 'المجموع الكلي' : 'Grand Total')); ?></span>
                            <span class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                                $<?php echo e(number_format($order->total_price, 2)); ?>

                            </span>
                        </div>
                    </div>
                </div>

                
                <div class="mt-6 bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-6">
                    <h3 class="font-bold text-white mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-timeline text-cyan-400"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'بارودۆخی داواکاری' : (app()->getLocale() == 'ar' ? 'حالة الطلب' : 'Order Status')); ?>

                    </h3>
                    <div class="flex items-center gap-4 overflow-x-auto pb-2">
                        <div class="flex items-center gap-2 <?php echo e($order->state->id >= 1 ? 'text-cyan-400' : 'text-white/30'); ?>">
                            <div class="w-8 h-8 rounded-full <?php echo e($order->state->id >= 1 ? 'bg-cyan-500/20 border-cyan-500/50' : 'bg-white/5 border-white/10'); ?> border flex items-center justify-center">
                                <i class="fa-solid fa-clock text-sm"></i>
                            </div>
                            <span class="text-sm whitespace-nowrap"><?php echo e(app()->getLocale() == 'ku' ? 'چاوەڕوانی' : 'Pending'); ?></span>
                        </div>
                        <div class="w-8 h-0.5 <?php echo e($order->state->id >= 2 ? 'bg-cyan-500/50' : 'bg-white/10'); ?>"></div>
                        <div class="flex items-center gap-2 <?php echo e($order->state->id >= 2 ? 'text-blue-400' : 'text-white/30'); ?>">
                            <div class="w-8 h-8 rounded-full <?php echo e($order->state->id >= 2 ? 'bg-blue-500/20 border-blue-500/50' : 'bg-white/5 border-white/10'); ?> border flex items-center justify-center">
                                <i class="fa-solid fa-truck-fast text-sm"></i>
                            </div>
                            <span class="text-sm whitespace-nowrap"><?php echo e(app()->getLocale() == 'ku' ? 'گەیاندن' : 'Shipping'); ?></span>
                        </div>
                        <div class="w-8 h-0.5 <?php echo e($order->state->id >= 3 ? 'bg-emerald-500/50' : 'bg-white/10'); ?>"></div>
                        <div class="flex items-center gap-2 <?php echo e($order->state->id >= 3 ? 'text-emerald-400' : 'text-white/30'); ?>">
                            <div class="w-8 h-8 rounded-full <?php echo e($order->state->id >= 3 ? 'bg-emerald-500/20 border-emerald-500/50' : 'bg-white/5 border-white/10'); ?> border flex items-center justify-center">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <span class="text-sm whitespace-nowrap"><?php echo e(app()->getLocale() == 'ku' ? 'گەیشت' : 'Delivered'); ?></span>
                        </div>
                    </div>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/orders/show.blade.php ENDPATH**/ ?>