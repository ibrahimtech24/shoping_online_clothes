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
    <h1 class="text-2xl font-bold text-primaryColor mb-2">Dashboard</h1>
    <div class="flex-col sm:flex-row flex justify-center sm:justify-start items-center flex-wrap space-x-2 space-y-2">
        <div
            class="flex flex-col justify-center items-start p-4 bg-whiteColor border border-greyColor rounded-lg shadow">
            <div class="flex justify-start items-center space-x-2 mb-2">
                <h5 class="text-sm font-bold text-blackColor">Product Number: </h5>
                <h1 class="text-xs font-bold text-darkgreyColor"><?php echo e($product); ?></h1>
            </div>
            <div class="flex justify-start items-center space-x-2 mb-2">
                <h5 class="text-sm font-bold text-blackColor">User Number: </h5>
                <h1 class="text-xs font-bold text-darkgreyColor"><?php echo e($user); ?></h1>
            </div>
            <div class="flex justify-start items-center space-x-2 mb-2">
                <h5 class="text-sm font-bold text-blackColor">Order Number: </h5>
                <h1 class="text-xs font-bold text-darkgreyColor"><?php echo e($order); ?></h1>
            </div>
        </div>
        <div
            class="flex flex-col justify-center items-start p-4 bg-whiteColor border border-greyColor rounded-lg shadow">
            <div class="flex justify-start items-center space-x-2 mb-2">
                <h5 class="text-sm font-bold text-blackColor">Pending Order Number: </h5>
                <h1 class="text-xs font-bold text-darkgreyColor"><?php echo e($orderpending); ?></h1>
            </div>
            <div class="flex justify-start items-center space-x-2 mb-2">
                <h5 class="text-sm font-bold text-blackColor">Accepted Order Number: </h5>
                <h1 class="text-xs font-bold text-darkgreyColor"><?php echo e($orderaccepted); ?></h1>
            </div>
            <div class="flex justify-start items-center space-x-2 mb-2">
                <h5 class="text-sm font-bold text-blackColor">Finished Number: </h5>
                <h1 class="text-xs font-bold text-darkgreyColor"><?php echo e($orderfinished); ?></h1>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h1 class="text-xl font-bold text-primaryColor mb-2">Newest Product</h1>
        <div class="flex justify-start items-start flex-wrap gap-2">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal100a1ed198de2714b22d81ed6cf92367 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal100a1ed198de2714b22d81ed6cf92367 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.product','data' => ['product' => $product,'link' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'link' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal100a1ed198de2714b22d81ed6cf92367)): ?>
<?php $attributes = $__attributesOriginal100a1ed198de2714b22d81ed6cf92367; ?>
<?php unset($__attributesOriginal100a1ed198de2714b22d81ed6cf92367); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal100a1ed198de2714b22d81ed6cf92367)): ?>
<?php $component = $__componentOriginal100a1ed198de2714b22d81ed6cf92367; ?>
<?php unset($__componentOriginal100a1ed198de2714b22d81ed6cf92367); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/dashboard/index.blade.php ENDPATH**/ ?>