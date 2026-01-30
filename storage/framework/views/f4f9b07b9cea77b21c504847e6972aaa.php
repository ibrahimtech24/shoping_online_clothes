<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => ['pd' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pd' => 'false']); ?>
    <div class="min-h-[calc(100vh-5rem)] flex items-center justify-center py-8 sm:py-12 px-4">
        
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-64 h-64 bg-primary-400/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 bg-accent-400/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="w-full max-w-md relative z-10">
            
            <div class="glass-card rounded-3xl shadow-2xl shadow-dark-900/10 border border-white/20 p-6 sm:p-8">
                
                <div class="text-center mb-8">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-primary-500 to-accent-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-primary-500/30">
                        <i class="fa-solid fa-user text-white text-xl sm:text-2xl"></i>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-dark-900">بەخێربێیتەوە</h1>
                    <p class="text-dark-400 mt-2 text-sm sm:text-base">بچۆ ژوورەوە بۆ هەژمارەکەت</p>
                </div>

                
                <form action="<?php echo e(route('login')); ?>" method="POST" class="space-y-5 sm:space-y-6">
                    <?php echo csrf_field(); ?>

                    <div>
                        <label for="email" class="block text-sm font-medium text-dark-900 mb-2">ناونیشانی ئیمەیڵ</label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-dark-400">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"
                                   class="w-full pr-12 pl-4 py-3 sm:py-3.5 border-2 border-dark-200 rounded-xl focus:border-primary-500 focus:ring-0 outline-none transition-colors bg-white text-dark-900"
                                   placeholder="ئیمەیڵەکەت تێبنووسە">
                        </div>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email']); ?>
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

                    <div>
                        <label for="password" class="block text-sm font-medium text-dark-900 mb-2">وشەی تێپەڕ</label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-dark-400">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password"
                                   class="w-full pr-12 pl-4 py-3 sm:py-3.5 border-2 border-dark-200 rounded-xl focus:border-primary-500 focus:ring-0 outline-none transition-colors bg-white text-dark-900"
                                   placeholder="وشەی تێپەڕەکەت تێبنووسە">
                        </div>
                        <?php if (isset($component)) { $__componentOriginal8a61cf4ce6144d9e2012fbc98db0155f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a61cf4ce6144d9e2012fbc98db0155f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.error','data' => ['name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'password']); ?>
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

                    <button type="submit" 
                            class="w-full btn-primary text-white py-3.5 sm:py-4 rounded-xl font-semibold text-base sm:text-lg flex items-center justify-center gap-2">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        چوونە ژوورەوە
                    </button>
                </form>

                
                <div class="my-6 sm:my-8 flex items-center">
                    <div class="flex-1 border-t border-dark-200"></div>
                    <span class="px-4 text-sm text-dark-400">یان</span>
                    <div class="flex-1 border-t border-dark-200"></div>
                </div>

                
                <p class="text-center text-dark-400 text-sm sm:text-base">
                    هەژمارەت نیە؟
                    <a href="<?php echo e(route('register')); ?>" class="text-primary-500 font-semibold hover:text-primary-600 transition-colors">هەژمار دروستبکە</a>
                </p>
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
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/session/create.blade.php ENDPATH**/ ?>