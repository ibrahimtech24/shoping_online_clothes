<?php if(session()->has('success') || session()->has('error')): ?>
    <div x-data="{ show: true, progress: 100 }" 
         x-init="
            let interval = setInterval(() => {
                progress -= 2;
                if(progress <= 0) {
                    show = false;
                    clearInterval(interval);
                }
            }, 100);
         " 
         x-show="show"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="fixed bottom-6 <?php echo e(in_array(app()->getLocale(), ['ku', 'ar']) ? 'left-6' : 'right-6'); ?> z-50 max-w-sm w-full overflow-hidden">
        
        
        <div class="<?php echo e(session()->has('success') ? 'bg-white border-l-4 border-emerald-500' : 'bg-white border-l-4 border-red-500'); ?> rounded-xl shadow-2xl shadow-black/10">
            <div class="p-4 flex items-start gap-4">
                
                <div class="<?php echo e(session()->has('success') ? 'bg-emerald-100 text-emerald-600' : 'bg-red-100 text-red-600'); ?> w-10 h-10 rounded-full flex items-center justify-center shrink-0">
                    <?php if(session()->has('success')): ?>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    <?php else: ?>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    <?php endif; ?>
                </div>
                
                
                <div class="flex-1 min-w-0">
                    <h4 class="font-bold text-gray-900 text-sm mb-0.5">
                        <?php if(session()->has('success')): ?>
                            <?php echo e(app()->getLocale() == 'ku' ? 'سەرکەوتوو!' : (app()->getLocale() == 'ar' ? 'نجاح!' : 'Success!')); ?>

                        <?php else: ?>
                            <?php echo e(app()->getLocale() == 'ku' ? 'هەڵە!' : (app()->getLocale() == 'ar' ? 'خطأ!' : 'Error!')); ?>

                        <?php endif; ?>
                    </h4>
                    <p class="text-gray-600 text-sm line-clamp-2"><?php echo e(session('success') ?? session('error')); ?></p>
                </div>
                
                
                <button @click="show = false" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg p-1.5 transition-all shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            
            <div class="h-1 bg-gray-100">
                <div class="<?php echo e(session()->has('success') ? 'bg-emerald-500' : 'bg-red-500'); ?> h-full transition-all duration-100 ease-linear" :style="'width: ' + progress + '%'"></div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/flash.blade.php ENDPATH**/ ?>