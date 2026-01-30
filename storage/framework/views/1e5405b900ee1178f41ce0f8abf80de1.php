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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.structure','data' => ['heading' => 'subcategory','model' => 'subcategories']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('structure'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'subcategory','model' => 'subcategories']); ?>
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Name</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-center">Category</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-center">Created Date</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">Updated Date</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-white">
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <?php echo e($subcategory->name); ?>

                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <?php echo e($subcategory->category->name); ?>

                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <?php echo e($subcategory->created_at->format('Y-m-d H:i:s')); ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <?php echo e($subcategory->updated_at->format('Y-m-d H:i:s')); ?></td>
                    <td
                        class="flex justify-center items-center space-x-2 p-3 text-sm text-gray-700 whitespace-nowrap text-center">
                        <a href="<?php echo e(route('dashboard.subcategories.edit', ['subcategory' => $subcategory])); ?>"><i
                                class="fa-solid fa-pen-to-square fa-lg"></i></a>

                        <form action="<?php echo e(route('dashboard.subcategories.delete', ['subcategory' => $subcategory])); ?>"
                            method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button class="text-red-600"><i class="fa-solid fa-trash-can fa-lg"></i></button>
                        </form>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/dashboard/subcategories/index.blade.php ENDPATH**/ ?>