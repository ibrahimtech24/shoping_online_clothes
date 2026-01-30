
<div class="bg-white rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 p-6 sticky top-24">
    <form action="<?php echo e(route('products.index')); ?>" method="GET" id="filterForm">
        
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-dark-100">
            <h2 class="text-lg font-bold text-dark-900 flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-primary-500 to-accent-500 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-filter text-white text-xs"></i>
                </div>
                <?php echo e(app()->getLocale() == 'ku' ? 'فلتەرەکان' : (app()->getLocale() == 'ar' ? 'المرشحات' : 'Filters')); ?>

            </h2>
            <a href="<?php echo e(route('products.index')); ?>" class="text-sm text-primary-500 hover:text-primary-600 font-medium">
                <?php echo e(app()->getLocale() == 'ku' ? 'هەموو پاک بکەرەوە' : (app()->getLocale() == 'ar' ? 'مسح الكل' : 'Clear All')); ?>

            </a>
        </div>

        
        <div class="mb-6">
            <div class="relative">
                <input type="text" name="search" 
                       value="<?php echo e(request('search')); ?>"
                       placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'گەڕان لە بەرهەمەکان...' : (app()->getLocale() == 'ar' ? 'البحث في المنتجات...' : 'Search products...')); ?>"
                       class="w-full pl-10 pr-4 py-3 border border-dark-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-dark-400"></i>
            </div>
        </div>

        
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                <?php echo e(app()->getLocale() == 'ku' ? 'نرخ' : (app()->getLocale() == 'ar' ? 'السعر' : 'Price')); ?>

            </h3>
            <div class="flex gap-3">
                <div class="flex-1">
                    <input type="number" name="min_price" 
                           value="<?php echo e(request('min_price')); ?>"
                           placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'کەمترین' : (app()->getLocale() == 'ar' ? 'أدنى' : 'Min')); ?>"
                           class="w-full px-3 py-2 text-sm border border-dark-200 rounded-lg">
                </div>
                <span class="text-dark-400 self-center">-</span>
                <div class="flex-1">
                    <input type="number" name="max_price" 
                           value="<?php echo e(request('max_price')); ?>"
                           placeholder="<?php echo e(app()->getLocale() == 'ku' ? 'زۆرترین' : (app()->getLocale() == 'ar' ? 'أقصى' : 'Max')); ?>"
                           class="w-full px-3 py-2 text-sm border border-dark-200 rounded-lg">
                </div>
            </div>
        </div>
                
        
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                <?php echo e(app()->getLocale() == 'ku' ? 'دۆخی بەرهەم' : (app()->getLocale() == 'ar' ? 'حالة المنتج' : 'Product Status')); ?>

            </h3>
            <div class="space-y-2">
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="featured" 
                           <?php echo e(in_array('featured', request('status', [])) ? 'checked' : ''); ?>

                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            <?php echo e(app()->getLocale() == 'ku' ? 'تایبەت' : (app()->getLocale() == 'ar' ? 'مميز' : 'Featured')); ?>

                        </span>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="new" 
                           <?php echo e(in_array('new', request('status', [])) ? 'checked' : ''); ?>

                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            <?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'New')); ?>

                        </span>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="trending" 
                           <?php echo e(in_array('trending', request('status', [])) ? 'checked' : ''); ?>

                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            <?php echo e(app()->getLocale() == 'ku' ? 'ترێند' : (app()->getLocale() == 'ar' ? 'رائج' : 'Trending')); ?>

                        </span>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="discount" 
                           <?php echo e(in_array('discount', request('status', [])) ? 'checked' : ''); ?>

                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            <?php echo e(app()->getLocale() == 'ku' ? 'داشکاندن' : (app()->getLocale() == 'ar' ? 'خصم' : 'On Sale')); ?>

                        </span>
                    </div>
                </label>
            </div>
        </div>

        
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                <?php echo e(app()->getLocale() == 'ku' ? 'بەردەست بوون' : (app()->getLocale() == 'ar' ? 'التوفر' : 'Availability')); ?>

            </h3>
            <div class="space-y-2">
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="radio" name="availability" value="all" 
                           <?php echo e(!request('availability') || request('availability') == 'all' ? 'checked' : ''); ?>

                           class="w-4 h-4 border-dark-300 text-primary-500 focus:ring-primary-500">
                    <span class="text-sm text-dark-600">
                        <?php echo e(app()->getLocale() == 'ku' ? 'هەموو' : (app()->getLocale() == 'ar' ? 'الكل' : 'All')); ?>

                    </span>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="radio" name="availability" value="in_stock" 
                           <?php echo e(request('availability') == 'in_stock' ? 'checked' : ''); ?>

                           class="w-4 h-4 border-dark-300 text-primary-500 focus:ring-primary-500">
                    <span class="text-sm text-dark-600">
                        <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا هەیە' : (app()->getLocale() == 'ar' ? 'متوفر' : 'In Stock')); ?>

                    </span>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="radio" name="availability" value="low_stock" 
                           <?php echo e(request('availability') == 'low_stock' ? 'checked' : ''); ?>

                           class="w-4 h-4 border-dark-300 text-primary-500 focus:ring-primary-500">
                    <span class="text-sm text-dark-600">
                        <?php echo e(app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock')); ?>

                    </span>
                </label>
            </div>
        </div>

        
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                <?php echo e(app()->getLocale() == 'ku' ? 'جۆرەکان' : (app()->getLocale() == 'ar' ? 'الفئات' : 'Categories')); ?>

            </h3>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div x-data="{ open: false }" class="mb-2">
                    <button type="button" @click="open = !open"
                        class="w-full flex justify-between items-center p-3 rounded-xl bg-dark-50 hover:bg-primary-50 transition-colors">
                        <span class="font-medium text-dark-700"><?php echo e($category->name); ?></span>
                        <i class="fa-solid text-primary-500 text-xs transition-transform duration-300"
                            :class="open ? 'fa-chevron-up rotate-180' : 'fa-chevron-down'"></i>
                    </button>

                    <div x-show="open" x-collapse x-cloak class="mt-2 ml-2 space-y-1">
                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($child->category_id === $category->id): ?>
                                <label class="flex items-center gap-3 p-2.5 rounded-xl hover:bg-dark-50 cursor-pointer group transition-colors">
                                    <input type="checkbox" name="subcategories[]" 
                                           value="<?php echo e($child->id); ?>"
                                           <?php echo e(in_array($child->id, request('subcategories', [])) ? 'checked' : ''); ?>

                                           class="w-4 h-4 rounded-md border-dark-300 text-primary-500 focus:ring-primary-500 focus:ring-offset-0">
                                    <span class="text-sm text-dark-500 group-hover:text-dark-700 transition-colors flex-1">
                                        <?php echo e($child->name); ?>

                                    </span>
                                    <span class="text-xs text-dark-300 bg-dark-100 px-2 py-0.5 rounded-full">
                                        <?php echo e($child->products_count); ?>

                                    </span>
                                </label>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <button type="submit" class="w-full bg-gradient-to-r from-primary-500 to-accent-500 text-white py-3 rounded-xl font-semibold hover:from-primary-600 hover:to-accent-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
            <i class="fa-solid fa-magic-wand-sparkles"></i>
            <?php echo e(app()->getLocale() == 'ku' ? 'جێبەجێکردنی فلتەر' : (app()->getLocale() == 'ar' ? 'تطبيق المرشحات' : 'Apply Filters')); ?>

        </button>
    </form>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('filterForm');
    const inputs = form.querySelectorAll('input[type="checkbox"], input[type="radio"]');
    
    inputs.forEach(input => {
        input.addEventListener('change', function() {
            setTimeout(() => form.submit(), 300);
        });
    });
});
</script><?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/products/partials/filters.blade.php ENDPATH**/ ?>