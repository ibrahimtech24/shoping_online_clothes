
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
    
    <div class="flex-1">
        <div class="flex items-center gap-4">
            <h1 class="text-2xl lg:text-3xl font-bold text-dark-900">
                <?php echo e(app()->getLocale() == 'ku' ? 'فرۆشگا' : (app()->getLocale() == 'ar' ? 'المتجر' : 'Shop')); ?>

                <?php if(request('search')): ?>
                    <span class="text-primary-500">
                        - "<?php echo e(request('search')); ?>"
                    </span>
                <?php endif; ?>
            </h1>
            <?php if($products->total() > 0): ?>
                <div class="bg-primary-50 text-primary-600 px-3 py-1 rounded-full text-sm font-medium">
                    <?php echo e($products->total()); ?> <?php echo e(app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'products')); ?>

                </div>
            <?php endif; ?>
        </div>
        
        
        <?php if(request()->hasAny(['search', 'subcategories', 'status', 'min_price', 'max_price', 'availability']) && (request('search') || request('subcategories') || request('status') || request('min_price') || request('max_price') || request('availability') !== 'all')): ?>
            <div class="mt-3 flex flex-wrap gap-2">
                <span class="text-sm text-gray-500"><?php echo e(app()->getLocale() == 'ku' ? 'فلتەرە چالاکەکان:' : (app()->getLocale() == 'ar' ? 'المرشحات النشطة:' : 'Active filters:')); ?></span>
                
                
                <?php if(request('search')): ?>
                    <span class="inline-flex items-center gap-1 bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">
                        <i class="fa-solid fa-search"></i>
                        <?php echo e(request('search')); ?>

                        <a href="<?php echo e(request()->fullUrlWithQuery(['search' => null])); ?>" class="ml-1 hover:text-blue-900">×</a>
                    </span>
                <?php endif; ?>

                
                <?php if(request('min_price') || request('max_price')): ?>
                    <span class="inline-flex items-center gap-1 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">
                        <i class="fa-solid fa-dollar-sign"></i>
                        $<?php echo e(request('min_price', 0)); ?> - $<?php echo e(request('max_price', '∞')); ?>

                        <a href="<?php echo e(request()->fullUrlWithQuery(['min_price' => null, 'max_price' => null])); ?>" class="ml-1 hover:text-green-900">×</a>
                    </span>
                <?php endif; ?>

                
                <?php $__currentLoopData = request('status', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="inline-flex items-center gap-1 bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">
                        <i class="fa-solid fa-tag"></i>
                        <?php echo e(ucfirst($status)); ?>

                        <a href="<?php echo e(request()->fullUrlWithQuery(['status' => array_diff(request('status', []), [$status])])); ?>" class="ml-1 hover:text-yellow-900">×</a>
                    </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center gap-1 bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs hover:bg-red-200 transition-colors">
                    <i class="fa-solid fa-times"></i>
                    <?php echo e(app()->getLocale() == 'ku' ? 'پاککردنەوەی هەموو' : (app()->getLocale() == 'ar' ? 'مسح الكل' : 'Clear all')); ?>

                </a>
            </div>
        <?php endif; ?>
    </div>

    
    <div class="flex items-center gap-3 lg:gap-4">
        
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" 
                    class="flex items-center gap-2 bg-white border border-dark-200 text-dark-700 px-4 py-2.5 rounded-xl font-medium hover:border-primary-300 transition-colors">
                <i class="fa-solid fa-sort"></i>
                <span class="hidden sm:inline"><?php echo e(app()->getLocale() == 'ku' ? 'ڕیزکردن' : (app()->getLocale() == 'ar' ? 'ترتيب' : 'Sort')); ?></span>
                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            
            <div x-show="open" x-collapse x-cloak @click.away="open = false"
                 class="absolute right-0 mt-2 w-56 bg-white border border-dark-200 rounded-xl shadow-lg z-50">
                <div class="p-2">
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'latest'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort', 'latest') == 'latest' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-clock"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'نوێترین' : (app()->getLocale() == 'ar' ? 'الأحدث' : 'Latest')); ?>

                    </a>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'oldest'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort') == 'oldest' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-history"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'کۆنترین' : (app()->getLocale() == 'ar' ? 'الأقدم' : 'Oldest')); ?>

                    </a>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'price_low'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort') == 'price_low' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-arrow-up-short-wide"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'نرخ: کەم بۆ زۆر' : (app()->getLocale() == 'ar' ? 'السعر: من الأقل للأكثر' : 'Price: Low to High')); ?>

                    </a>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'price_high'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort') == 'price_high' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-arrow-down-wide-short"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'نرخ: زۆر بۆ کەم' : (app()->getLocale() == 'ar' ? 'السعر: من الأكثر للأقل' : 'Price: High to Low')); ?>

                    </a>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'name_asc'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort') == 'name_asc' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-arrow-down-a-z"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'ناو: أ-ي' : (app()->getLocale() == 'ar' ? 'الاسم: أ-ي' : 'Name: A-Z')); ?>

                    </a>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'name_desc'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort') == 'name_desc' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-arrow-up-z-a"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'ناو: ي-أ' : (app()->getLocale() == 'ar' ? 'الاسم: ي-أ' : 'Name: Z-A')); ?>

                    </a>
                    <a href="<?php echo e(request()->fullUrlWithQuery(['sort' => 'discount'])); ?>" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 <?php echo e(request('sort') == 'discount' ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                        <i class="fa-solid fa-percentage"></i>
                        <?php echo e(app()->getLocale() == 'ku' ? 'زۆرترین داشکاندن' : (app()->getLocale() == 'ar' ? 'أعلى خصم' : 'Highest Discount')); ?>

                    </a>
                </div>
            </div>
        </div>

        
        <div class="flex items-center bg-white border border-dark-200 rounded-xl p-1">
            <button onclick="setView('grid')" 
                    class="p-2 rounded-lg transition-colors view-toggle-btn" 
                    data-view="grid">
                <i class="fa-solid fa-grid-2 text-sm"></i>
            </button>
            <button onclick="setView('list')" 
                    class="p-2 rounded-lg transition-colors view-toggle-btn" 
                    data-view="list">
                <i class="fa-solid fa-list text-sm"></i>
            </button>
        </div>

        
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" 
                    class="flex items-center gap-2 bg-white border border-dark-200 text-dark-700 px-3 py-2.5 rounded-xl font-medium hover:border-primary-300 transition-colors">
                <span class="hidden sm:inline"><?php echo e(request('per_page', 12)); ?></span>
                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            
            <div x-show="open" x-collapse x-cloak @click.away="open = false"
                 class="absolute right-0 mt-2 w-20 bg-white border border-dark-200 rounded-xl shadow-lg z-50">
                <div class="p-1">
                    <?php $__currentLoopData = [12, 24, 48, 96]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(request()->fullUrlWithQuery(['per_page' => $count])); ?>" 
                           class="block px-3 py-2 text-sm text-center rounded-lg hover:bg-dark-50 <?php echo e(request('per_page', 12) == $count ? 'bg-primary-50 text-primary-600' : 'text-dark-700'); ?>">
                            <?php echo e($count); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
function setView(view) {
    const gridContainer = document.getElementById('products-grid');
    const viewButtons = document.querySelectorAll('.view-toggle-btn');
    
    // Update button states
    viewButtons.forEach(btn => {
        if (btn.dataset.view === view) {
            btn.classList.add('bg-primary-500', 'text-white');
            btn.classList.remove('text-dark-500', 'hover:bg-dark-100');
        } else {
            btn.classList.remove('bg-primary-500', 'text-white');
            btn.classList.add('text-dark-500', 'hover:bg-dark-100');
        }
    });
    
    // Update grid classes
    if (view === 'list') {
        gridContainer.className = 'space-y-4';
        // Add list view classes to product cards
        const cards = gridContainer.querySelectorAll('.product-card');
        cards.forEach(card => {
            card.classList.add('flex', 'flex-row', 'h-48');
            card.classList.remove('flex-col');
            // Adjust image container
            const imgContainer = card.querySelector('.aspect-square');
            if (imgContainer) {
                imgContainer.classList.remove('aspect-square');
                imgContainer.classList.add('w-48', 'h-full', 'shrink-0');
            }
        });
    } else {
        gridContainer.className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6';
        // Remove list view classes from product cards
        const cards = gridContainer.querySelectorAll('.product-card');
        cards.forEach(card => {
            card.classList.remove('flex', 'flex-row', 'h-48');
            card.classList.add('flex-col');
            // Reset image container
            const imgContainer = card.querySelector('w-48');
            if (imgContainer) {
                imgContainer.classList.add('aspect-square');
                imgContainer.classList.remove('w-48', 'h-full', 'shrink-0');
            }
        });
    }
    
    // Save preference
    localStorage.setItem('preferredView', view);
}

// Load saved view preference
document.addEventListener('DOMContentLoaded', function() {
    const savedView = localStorage.getItem('preferredView') || 'grid';
    setView(savedView);
});
</script><?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/products/partials/header.blade.php ENDPATH**/ ?>