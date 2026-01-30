<?php if (isset($component)) { $__componentOriginal1a6cca1fb3b05e19b47840b98800a235 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a6cca1fb3b05e19b47840b98800a235 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.dashboard','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalead9f2beb6048e220f2c1c85a44bdad4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalead9f2beb6048e220f2c1c85a44bdad4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.structure','data' => ['heading' => 'product','model' => 'products']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('structure'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'product','model' => 'products']); ?>
        <thead class="bg-gradient-to-r from-primary-600 to-primary-700 text-white">
            <tr>
                <th class="w-32 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> وێنە <?php elseif(app()->getLocale() == 'ar'): ?> صورة <?php else: ?> Image <?php endif; ?>
                </th>
                <th class="w-40 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> ناو <?php elseif(app()->getLocale() == 'ar'): ?> الاسم <?php else: ?> Name <?php endif; ?>
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> پۆل <?php elseif(app()->getLocale() == 'ar'): ?> القسم <?php else: ?> Category <?php endif; ?>
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> نرخی ئەسڵی <?php elseif(app()->getLocale() == 'ar'): ?> السعر الأصلي <?php else: ?> Original Price <?php endif; ?>
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> داشکان <?php elseif(app()->getLocale() == 'ar'): ?> الخصم <?php else: ?> Discount <?php endif; ?>
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> نرخی کۆتایی <?php elseif(app()->getLocale() == 'ar'): ?> السعر النهائي <?php else: ?> Final Price <?php endif; ?>
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> کۆگا <?php elseif(app()->getLocale() == 'ar'): ?> المخزون <?php else: ?> Stock <?php endif; ?>
                </th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> بارودۆخ <?php elseif(app()->getLocale() == 'ar'): ?> الحالة <?php else: ?> Status <?php endif; ?>
                </th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">
                    <?php if(app()->getLocale() == 'ku'): ?> کردار <?php elseif(app()->getLocale() == 'ar'): ?> الإجراءات <?php else: ?> Action <?php endif; ?>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-white hover:bg-gray-50 transition-colors <?php echo e($product->isOutOfStock() ? 'opacity-60' : ''); ?>">
                    <td class="p-3 text-center">
                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" 
                             class="w-16 h-16 object-cover rounded-xl mx-auto shadow-sm border border-gray-100">
                    </td>
                    <td class="p-3 text-sm text-gray-700 text-center">
                        <div class="font-semibold text-gray-900"><?php echo e($product->name); ?></div>
                        <div class="flex flex-wrap justify-center gap-1 mt-1">
                            <?php if($product->is_featured): ?>
                                <span class="text-[10px] bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full font-medium">⭐ <?php if(app()->getLocale() == 'ku'): ?> تایبەت <?php else: ?> Featured <?php endif; ?></span>
                            <?php endif; ?>
                            <?php if($product->is_new): ?>
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-medium">🆕 <?php if(app()->getLocale() == 'ku'): ?> نوێ <?php else: ?> New <?php endif; ?></span>
                            <?php endif; ?>
                            <?php if($product->is_trending): ?>
                                <span class="text-[10px] bg-rose-100 text-rose-700 px-2 py-0.5 rounded-full font-medium">🔥 <?php if(app()->getLocale() == 'ku'): ?> ترێند <?php else: ?> Trending <?php endif; ?></span>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="font-medium"><?php echo e($product->category->name); ?></div>
                        <div class="text-xs text-gray-400"><?php echo e($product->subcategory->name); ?></div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <div class="flex flex-col items-center">
                            <span class="<?php echo e($product->hasDiscount() ? 'line-through text-gray-400 text-xs' : 'font-bold text-gray-900 text-base'); ?>">
                                $<?php echo e(number_format($product->price, 2)); ?>

                            </span>
                            <?php if($product->hasDiscount()): ?>
                                <span class="text-[10px] text-gray-400">
                                    <?php if(app()->getLocale() == 'ku'): ?> نرخی ئەسڵی <?php else: ?> Original <?php endif; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <?php if($product->hasDiscount()): ?>
                            <div class="flex flex-col items-center gap-1">
                                <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white px-3 py-1 rounded-full font-bold text-sm shadow-sm">
                                    -<?php echo e($product->discount_percentage); ?>%
                                </span>
                                <span class="text-[10px] text-green-600 font-medium">
                                    <?php if(app()->getLocale() == 'ku'): ?> داشکان <?php else: ?> Discount <?php endif; ?>
                                </span>
                            </div>
                        <?php else: ?>
                            <span class="text-gray-300 text-lg">—</span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <?php if($product->hasDiscount()): ?>
                            <div class="flex flex-col items-center">
                                <span class="font-bold text-green-600 text-lg">
                                    $<?php echo e(number_format($product->final_price, 2)); ?>

                                </span>
                                <span class="text-[10px] text-green-500">
                                    <?php if(app()->getLocale() == 'ku'): ?> نرخی فرۆشتن <?php else: ?> Sale Price <?php endif; ?>
                                </span>
                            </div>
                        <?php else: ?>
                            <span class="font-bold text-gray-900 text-lg">$<?php echo e(number_format($product->price, 2)); ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3 text-sm text-center">
                        <div class="flex flex-col items-center">
                            <span class="font-bold text-lg <?php echo e($product->isLowStock() ? 'text-orange-500' : ($product->isOutOfStock() ? 'text-red-500' : 'text-green-600')); ?>">
                                <?php echo e($product->getTotalStock()); ?>

                            </span>
                            <?php if($product->isLowStock()): ?>
                                <span class="text-[10px] bg-orange-100 text-orange-600 px-2 py-0.5 rounded-full">⚠️ <?php if(app()->getLocale() == 'ku'): ?> کەم <?php else: ?> Low <?php endif; ?></span>
                            <?php elseif($product->isOutOfStock()): ?>
                                <span class="text-[10px] bg-red-100 text-red-600 px-2 py-0.5 rounded-full">❌ <?php if(app()->getLocale() == 'ku'): ?> تەواو <?php else: ?> Out <?php endif; ?></span>
                            <?php else: ?>
                                <span class="text-[10px] bg-green-100 text-green-600 px-2 py-0.5 rounded-full">✓ <?php if(app()->getLocale() == 'ku'): ?> بەردەست <?php else: ?> Available <?php endif; ?></span>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <span class="text-xs text-gray-400"><?php echo e($product->created_at->format('Y-m-d')); ?></span>
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <div class="flex justify-center items-center gap-3">
                            <a href="<?php echo e(route('dashboard.products.edit', ['product' => $product])); ?>" 
                               class="w-9 h-9 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-100 transition-colors">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="<?php echo e(route('dashboard.products.delete', ['product' => $product])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button class="w-9 h-9 bg-red-50 text-red-600 rounded-lg flex items-center justify-center hover:bg-red-100 transition-colors">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalead9f2beb6048e220f2c1c85a44bdad4)): ?>
<?php $attributes = $__attributesOriginalead9f2beb6048e220f2c1c85a44bdad4; ?>
<?php unset($__attributesOriginalead9f2beb6048e220f2c1c85a44bdad4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalead9f2beb6048e220f2c1c85a44bdad4)): ?>
<?php $component = $__componentOriginalead9f2beb6048e220f2c1c85a44bdad4; ?>
<?php unset($__componentOriginalead9f2beb6048e220f2c1c85a44bdad4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a6cca1fb3b05e19b47840b98800a235)): ?>
<?php $attributes = $__attributesOriginal1a6cca1fb3b05e19b47840b98800a235; ?>
<?php unset($__attributesOriginal1a6cca1fb3b05e19b47840b98800a235); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a6cca1fb3b05e19b47840b98800a235)): ?>
<?php $component = $__componentOriginal1a6cca1fb3b05e19b47840b98800a235; ?>
<?php unset($__componentOriginal1a6cca1fb3b05e19b47840b98800a235); ?>
<?php endif; ?>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/dashboard/products/index.blade.php ENDPATH**/ ?>