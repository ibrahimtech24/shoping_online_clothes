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

        
        <div class="relative z-10 border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <nav class="flex items-center gap-2 text-sm">
                    <a href="<?php echo e(route('home')); ?>" class="text-white/60 hover:text-cyan-400 transition-colors flex items-center gap-1">
                        <i class="fa-solid fa-home"></i>
                        <span class="hidden sm:inline"><?php echo e(app()->getLocale() == 'ku' ? 'سەرەتا' : (app()->getLocale() == 'ar' ? 'الرئيسية' : 'Home')); ?></span>
                    </a>
                    <i class="fa-solid fa-chevron-<?php echo e(app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'left' : 'right'); ?> text-xs text-white/30"></i>
                    <a href="<?php echo e(route('products.index')); ?>" class="text-white/60 hover:text-cyan-400 transition-colors">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات' : 'Products')); ?>

                    </a>
                    <i class="fa-solid fa-chevron-<?php echo e(app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'left' : 'right'); ?> text-xs text-white/30"></i>
                    <span class="text-white font-medium truncate"><?php echo e(Str::limit($product->name, 30)); ?></span>
                </nav>
            </div>
        </div>

        
        <div class="relative z-10 py-8 md:py-12">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                    
                    
                    <div class="space-y-4">
                        
                        <div class="relative group">
                            
                            <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/30 via-purple-500/30 to-pink-500/30 rounded-3xl blur-2xl opacity-60 group-hover:opacity-80 transition-opacity"></div>
                            
                            
                            <div class="relative aspect-square bg-white/5 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/10">
                                <img src="<?php echo e($product->image ? asset('storage/' . $product->image) : asset('images/placeholder.jpg')); ?>" 
                                     alt="<?php echo e($product->name); ?>"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                
                                
                                <div class="absolute top-6 left-6 flex flex-col gap-2">
                                    <?php if($product->is_new || $product->created_at >= now()->subDays(7)): ?>
                                        <span class="bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs font-bold px-3 py-1.5 rounded-xl shadow-lg shadow-emerald-500/30">
                                            <?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW')); ?>

                                        </span>
                                    <?php endif; ?>
                                    
                                    <?php if($product->hasActiveDiscount()): ?>
                                        <span class="bg-gradient-to-r from-rose-500 to-pink-500 text-white text-sm font-bold px-4 py-2 rounded-xl shadow-lg shadow-rose-500/30 animate-pulse">
                                            -<?php echo e($product->discount_percentage); ?>%
                                        </span>
                                    <?php endif; ?>
                                </div>

                                
                                <div class="absolute top-6 right-6 flex flex-col gap-3">
                                    <button class="w-12 h-12 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 flex items-center justify-center hover:bg-rose-500 hover:border-rose-500 transition-all group/btn">
                                        <i class="fa-regular fa-heart text-white group-hover/btn:scale-110 transition-transform"></i>
                                    </button>
                                    <button class="w-12 h-12 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 flex items-center justify-center hover:bg-cyan-500 hover:border-cyan-500 transition-all group/btn">
                                        <i class="fa-solid fa-share-nodes text-white group-hover/btn:scale-110 transition-transform"></i>
                                    </button>
                                </div>

                                
                                <?php if($product->isLowStock()): ?>
                                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2">
                                        <span class="bg-gradient-to-r from-amber-500 to-orange-500 text-white text-sm font-bold px-4 py-2 rounded-xl shadow-lg animate-pulse">
                                            ⚡ <?php echo e(app()->getLocale() == 'ku' ? 'تەنها ' . $product->getTotalStock() . ' دانە ماوەتەوە!' : (app()->getLocale() == 'ar' ? 'باقي ' . $product->getTotalStock() . ' قطع فقط!' : 'Only ' . $product->getTotalStock() . ' left!')); ?>

                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="grid grid-cols-4 gap-3">
                            <?php for($i = 1; $i <= 4; $i++): ?>
                                <div class="aspect-square bg-white/5 backdrop-blur-xl rounded-xl overflow-hidden border border-white/10 cursor-pointer hover:border-cyan-500/50 transition-all">
                                    <img src="<?php echo e(str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image)); ?>" 
                                         alt="Product view <?php echo e($i); ?>"
                                         class="w-full h-full object-cover opacity-60 hover:opacity-100 transition-opacity">
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    
                    <div class="space-y-6">
                        
                        <div class="flex items-center gap-2">
                            <span class="px-4 py-1.5 bg-cyan-500/20 text-cyan-400 text-sm font-medium rounded-xl border border-cyan-500/30">
                                <?php echo e($product->category->name); ?>

                            </span>
                            <?php if($product->subcategory): ?>
                                <span class="text-white/40">•</span>
                                <span class="text-white/60 text-sm"><?php echo e($product->subcategory->name); ?></span>
                            <?php endif; ?>
                        </div>

                        
                        <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight"><?php echo e($product->name); ?></h1>

                        
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="flex text-amber-400">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <i class="fa-solid fa-star text-sm"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="font-bold text-white">4.8</span>
                                <span class="text-white/50">(<?php echo e(rand(50, 200)); ?>)</span>
                            </div>
                            <span class="text-white/50 text-sm">
                                <?php echo e(rand(500, 1500)); ?> <?php echo e(app()->getLocale() == 'ku' ? 'جار فرۆشراوە' : (app()->getLocale() == 'ar' ? 'مبيعة' : 'sold')); ?>

                            </span>
                        </div>

                        
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                            <div class="flex items-center gap-4 mb-4">
                                <?php if($product->hasActiveDiscount()): ?>
                                    <div class="text-4xl font-bold text-white">
                                        $<?php echo e(number_format($product->final_price, 2)); ?>

                                    </div>
                                    <div class="text-2xl text-white/40 line-through">
                                        $<?php echo e(number_format($product->price, 2)); ?>

                                    </div>
                                    <div class="bg-rose-500/20 text-rose-400 px-3 py-1 rounded-lg text-sm font-bold border border-rose-500/30">
                                        <?php echo e(app()->getLocale() == 'ku' ? 'پاشەکەوت ' : (app()->getLocale() == 'ar' ? 'توفير ' : 'Save ')); ?>

                                        $<?php echo e(number_format($product->price - $product->final_price, 2)); ?>

                                    </div>
                                <?php else: ?>
                                    <div class="text-4xl font-bold text-white">
                                        $<?php echo e(number_format($product->price, 2)); ?>

                                    </div>
                                <?php endif; ?>
                            </div>

                            
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full <?php echo e($product->isOutOfStock() ? 'bg-red-500' : ($product->isLowStock() ? 'bg-amber-500 animate-pulse' : 'bg-emerald-500')); ?>"></div>
                                    <span class="text-sm font-medium <?php echo e($product->isOutOfStock() ? 'text-red-400' : ($product->isLowStock() ? 'text-amber-400' : 'text-emerald-400')); ?>">
                                        <?php if($product->isOutOfStock()): ?>
                                            <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock')); ?>

                                        <?php elseif($product->isLowStock()): ?>
                                            <?php echo e(app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock')); ?>

                                        <?php else: ?>
                                            <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا هەیە' : (app()->getLocale() == 'ar' ? 'متوفر' : 'In Stock')); ?>

                                        <?php endif; ?>
                                    </span>
                                </div>
                                <span class="text-white/50 text-sm"><?php echo e($product->getTotalStock()); ?> <?php echo e(app()->getLocale() == 'ku' ? 'دانە' : (app()->getLocale() == 'ar' ? 'قطعة' : 'pieces')); ?></span>
                            </div>
                        </div>

                        
                        <?php if($product->sizes && $product->sizes->count() > 0): ?>
                            <div>
                                <h3 class="text-white font-semibold mb-3">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'قەبارە هەڵبژێرە' : (app()->getLocale() == 'ar' ? 'اختر المقاس' : 'Select Size')); ?>

                                </h3>
                                <div class="flex flex-wrap gap-3" id="size-selector">
                                    <?php $__currentLoopData = $product->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <button type="button" 
                                                data-size-id="<?php echo e($size->id); ?>"
                                                data-stock="<?php echo e($size->stock); ?>"
                                                class="size-btn px-5 py-3 bg-white/5 backdrop-blur-xl border border-white/20 rounded-xl text-white font-medium hover:border-cyan-500/50 hover:bg-cyan-500/10 transition-all <?php echo e($size->stock <= 0 ? 'opacity-40 cursor-not-allowed' : ''); ?>">
                                            <?php echo e($size->size->name ?? $size->name); ?>

                                        </button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        
                        <div>
                            <h3 class="text-white font-semibold mb-3">
                                <?php echo e(app()->getLocale() == 'ku' ? 'بڕ' : (app()->getLocale() == 'ar' ? 'الكمية' : 'Quantity')); ?>

                            </h3>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center bg-white/5 backdrop-blur-xl border border-white/20 rounded-xl overflow-hidden">
                                    <button type="button" id="qty-minus" class="w-12 h-12 flex items-center justify-center text-white hover:bg-white/10 transition-colors">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <input type="number" id="quantity" value="1" min="1" class="w-16 h-12 bg-transparent text-center text-white font-bold border-x border-white/10 outline-none">
                                    <button type="button" id="qty-plus" class="w-12 h-12 flex items-center justify-center text-white hover:bg-white/10 transition-colors">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        
                        <form action="<?php echo e(route('cart.store')); ?>" method="POST" id="add-to-cart-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                            <input type="hidden" name="size_id" id="selected-size-id" value="">
                            <input type="hidden" name="quantity" id="form-quantity" value="1">
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="submit" 
                                        class="flex-1 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl hover:from-cyan-600 hover:to-blue-700 transition-all shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:-translate-y-0.5 flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed"
                                        <?php echo e($product->isOutOfStock() ? 'disabled' : ''); ?>>
                                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                                    <?php echo e(app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف للسلة' : 'Add to Cart')); ?>

                                </button>
                                <button type="button" class="py-4 px-6 bg-gradient-to-r from-pink-500 to-rose-600 text-white font-bold rounded-2xl hover:from-pink-600 hover:to-rose-700 transition-all shadow-lg shadow-pink-500/30 hover:shadow-pink-500/50">
                                    <i class="fa-solid fa-bolt"></i>
                                    <?php echo e(app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : (app()->getLocale() == 'ar' ? 'اشتري الآن' : 'Buy Now')); ?>

                                </button>
                            </div>
                        </form>

                        
                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-truck-fast text-emerald-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm"><?php echo e(app()->getLocale() == 'ku' ? 'گەیاندنی خێرا' : (app()->getLocale() == 'ar' ? 'توصيل سريع' : 'Fast Delivery')); ?></div>
                                    <div class="text-white/50 text-xs"><?php echo e(app()->getLocale() == 'ku' ? '24 کاتژمێر' : (app()->getLocale() == 'ar' ? '24 ساعة' : '24 hours')); ?></div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-cyan-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-shield-check text-cyan-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm"><?php echo e(app()->getLocale() == 'ku' ? 'گەرەنتی' : (app()->getLocale() == 'ar' ? 'ضمان' : 'Warranty')); ?></div>
                                    <div class="text-white/50 text-xs"><?php echo e(app()->getLocale() == 'ku' ? '30 ڕۆژ' : (app()->getLocale() == 'ar' ? '30 يوم' : '30 days')); ?></div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-amber-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-rotate-left text-amber-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm"><?php echo e(app()->getLocale() == 'ku' ? 'گەڕاندنەوە' : (app()->getLocale() == 'ar' ? 'إرجاع' : 'Returns')); ?></div>
                                    <div class="text-white/50 text-xs"><?php echo e(app()->getLocale() == 'ku' ? 'خۆڕایی' : (app()->getLocale() == 'ar' ? 'مجاني' : 'Free')); ?></div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-purple-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-headset text-purple-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm"><?php echo e(app()->getLocale() == 'ku' ? 'پشتگیری' : (app()->getLocale() == 'ar' ? 'دعم' : 'Support')); ?></div>
                                    <div class="text-white/50 text-xs">24/7</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <?php if($product->description): ?>
                    <div class="mt-12 bg-white/5 backdrop-blur-xl rounded-2xl p-6 md:p-8 border border-white/10">
                        <h2 class="text-xl font-bold text-white mb-4 flex items-center gap-3">
                            <i class="fa-solid fa-file-lines text-cyan-400"></i>
                            <?php echo e(app()->getLocale() == 'ku' ? 'وەسف' : (app()->getLocale() == 'ar' ? 'الوصف' : 'Description')); ?>

                        </h2>
                        <div class="text-white/70 leading-relaxed">
                            <?php echo e($product->description); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sizeBtns = document.querySelectorAll('.size-btn');
            const selectedSizeInput = document.getElementById('selected-size-id');
            const quantityInput = document.getElementById('quantity');
            const formQuantity = document.getElementById('form-quantity');
            const qtyMinus = document.getElementById('qty-minus');
            const qtyPlus = document.getElementById('qty-plus');

            // Size selection
            sizeBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (this.dataset.stock <= 0) return;
                    
                    sizeBtns.forEach(b => b.classList.remove('border-cyan-500', 'bg-cyan-500/20'));
                    this.classList.add('border-cyan-500', 'bg-cyan-500/20');
                    selectedSizeInput.value = this.dataset.sizeId;
                });
            });

            // Quantity controls
            qtyMinus.addEventListener('click', function() {
                let val = parseInt(quantityInput.value);
                if (val > 1) {
                    quantityInput.value = val - 1;
                    formQuantity.value = val - 1;
                }
            });

            qtyPlus.addEventListener('click', function() {
                let val = parseInt(quantityInput.value);
                quantityInput.value = val + 1;
                formQuantity.value = val + 1;
            });

            quantityInput.addEventListener('change', function() {
                formQuantity.value = this.value;
            });
        });
    </script>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/products/show.blade.php ENDPATH**/ ?>