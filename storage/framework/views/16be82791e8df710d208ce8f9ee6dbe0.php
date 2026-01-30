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
    <div class="py-6 sm:py-10">
        
        <div class="text-center mb-8 sm:mb-12">
            <span class="inline-block px-3 py-1 text-xs font-semibold text-primary-600 bg-primary-50 rounded-full mb-4">داواکاریەکان</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-dark-900 mb-3">داواکاریەکانی <span class="gradient-text">من</span></h1>
            <p class="text-dark-400 text-sm sm:text-base">شوێنکەوتن و بەڕێوەبردنی داواکاریەکانت</p>
        </div>

        
        <div class="flex justify-center mb-6 sm:mb-8">
            <form id="filterForm" action="<?php echo e(route('orders.index')); ?>" method="GET" 
                  class="bg-white rounded-xl sm:rounded-2xl shadow-lg shadow-dark-900/5 border border-dark-100 p-1.5 sm:p-2 inline-flex items-center gap-2">
                <span class="text-primary-500 pl-3 sm:pl-4"><i class="fa-solid fa-filter"></i></span>
                <select name="state" id="filter" onchange="submitForm()"
                    class="px-3 sm:px-4 py-2 pr-8 sm:pr-10 bg-transparent border-0 focus:ring-0 outline-none font-medium text-dark-700 cursor-pointer text-sm sm:text-base">
                    <option value="" <?php if(request('state') == null): ?> selected <?php endif; ?>>هەموو داواکاریەکان</option>
                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($state->id); ?>" <?php if(request('state') == $state->id): ?> selected <?php endif; ?>>
                            <?php echo e($state->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <input type="hidden" name="page" value="<?php echo e(request('page')); ?>">
            </form>
        </div>

        <?php if(count($orders)): ?>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal32c9ab69ebb529a9d5a331a8f723a258 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32c9ab69ebb529a9d5a331a8f723a258 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.order','data' => ['order' => $order,'route' => 'orders.show']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.order'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['order' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order),'route' => 'orders.show']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32c9ab69ebb529a9d5a331a8f723a258)): ?>
<?php $attributes = $__attributesOriginal32c9ab69ebb529a9d5a331a8f723a258; ?>
<?php unset($__attributesOriginal32c9ab69ebb529a9d5a331a8f723a258); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32c9ab69ebb529a9d5a331a8f723a258)): ?>
<?php $component = $__componentOriginal32c9ab69ebb529a9d5a331a8f723a258; ?>
<?php unset($__componentOriginal32c9ab69ebb529a9d5a331a8f723a258); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="mt-8 sm:mt-12">
                <?php echo e($orders->links()); ?>

            </div>
        <?php else: ?>
            
            <div class="text-center py-16 sm:py-20">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-dark-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-box text-3xl sm:text-4xl text-dark-300"></i>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-dark-900 mb-2">هێشتا داواکاریت نیە</h3>
                <p class="text-dark-400 mb-6 text-sm sm:text-base">دەست بکە بە کڕین تا داواکاریەکانت لێرە ببینی.</p>
                <a href="<?php echo e(route('products.index')); ?>" 
                   class="inline-flex items-center gap-2 btn-primary text-white px-6 py-3 rounded-xl font-medium">
                    <i class="fa-solid fa-shopping-bag"></i>
                    دەست بکە بە کڕین
                </a>
            </div>
        <?php endif; ?>
    </div>

    <script>
        function submitForm() {
            document.getElementById('filterForm').submit();
        }
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/orders/index.blade.php ENDPATH**/ ?>