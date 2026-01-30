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
    
    
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black flex items-center justify-center py-12 px-4">
        
        
        <div class="fixed inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="w-full max-w-md relative z-10">
            
            <div class="bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 shadow-2xl shadow-black/20 p-8 md:p-10">
                
                
                <div class="text-center mb-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-cyan-500/30">
                        <i class="fa-solid fa-user text-white text-3xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-white mb-2">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بەخێربێیتەوە' : (app()->getLocale() == 'ar' ? 'مرحباً بعودتك' : 'Welcome Back')); ?>

                    </h1>
                    <p class="text-white/50">
                        <?php echo e(app()->getLocale() == 'ku' ? 'بچۆ ژوورەوە بۆ هەژمارەکەت' : (app()->getLocale() == 'ar' ? 'سجّل الدخول إلى حسابك' : 'Sign in to your account')); ?>

                    </p>
                </div>

                
                <form action="<?php echo e(route('login')); ?>" method="POST" class="space-y-6">
                    <?php echo csrf_field(); ?>

                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-white/80 mb-2">
                            <?php echo e(app()->getLocale() == 'ku' ? 'ئیمەیڵ' : (app()->getLocale() == 'ar' ? 'البريد الإلكتروني' : 'Email')); ?>

                        </label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-white/40">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"
                                   class="w-full pr-12 pl-4 py-4 bg-white/5 border-2 border-white/10 rounded-2xl focus:border-cyan-500/50 focus:bg-white/10 focus:ring-0 outline-none transition-all text-white placeholder-white/30"
                                   placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'ئیمەیڵەکەت تێبنووسە' : (app()->getLocale() == 'ar' ? 'أدخل بريدك الإلكتروني' : 'Enter your email')); ?>">
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
                        <label for="password" class="block text-sm font-medium text-white/80 mb-2">
                            <?php echo e(app()->getLocale() == 'ku' ? 'وشەی تێپەڕ' : (app()->getLocale() == 'ar' ? 'كلمة المرور' : 'Password')); ?>

                        </label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-white/40">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password"
                                   class="w-full pr-12 pl-4 py-4 bg-white/5 border-2 border-white/10 rounded-2xl focus:border-cyan-500/50 focus:bg-white/10 focus:ring-0 outline-none transition-all text-white placeholder-white/30"
                                   placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'وشەی تێپەڕەکەت' : (app()->getLocale() == 'ar' ? 'أدخل كلمة المرور' : 'Enter your password')); ?>">
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
                            class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:-translate-y-0.5 transition-all flex items-center justify-center gap-3">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'چوونە ژوورەوە' : (app()->getLocale() == 'ar' ? 'تسجيل الدخول' : 'Sign In')); ?>

                    </button>
                </form>

                
                <div class="my-8 flex items-center">
                    <div class="flex-1 border-t border-white/10"></div>
                    <span class="px-4 text-sm text-white/40"><?php echo e(app()->getLocale() == 'ku' ? 'یان' : (app()->getLocale() == 'ar' ? 'أو' : 'or')); ?></span>
                    <div class="flex-1 border-t border-white/10"></div>
                </div>

                
                <p class="text-center text-white/50">
                    <?php echo e(app()->getLocale() == 'ku' ? 'هەژمارت نیە؟' : (app()->getLocale() == 'ar' ? 'ليس لديك حساب؟' : "Don't have an account?")); ?>

                    <a href="<?php echo e(route('register')); ?>" class="text-cyan-400 font-semibold hover:text-cyan-300 transition-colors">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەژمار دروستبکە' : (app()->getLocale() == 'ar' ? 'أنشئ حساباً' : 'Create one')); ?>

                    </a>
                </p>
            </div>

            
            <div class="text-center mt-6">
                <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center gap-2 text-white/50 hover:text-white transition-colors">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span><?php echo e(app()->getLocale() == 'ku' ? 'گەڕانەوە بۆ ماڵەوە' : (app()->getLocale() == 'ar' ? 'العودة للرئيسية' : 'Back to Home')); ?></span>
                </a>
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