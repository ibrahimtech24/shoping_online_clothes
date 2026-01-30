
<div x-data="{ quickViewOpen: false, productData: null }" 
     @open-quick-view.window="quickViewOpen = true; productData = $event.detail"
     class="fixed inset-0 z-50 overflow-y-auto"
     x-show="quickViewOpen"
     x-cloak>
    
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-opacity"
         @click="quickViewOpen = false"
         x-show="quickViewOpen"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"></div>

    
    <div class="flex min-h-screen items-center justify-center p-4">
        <div class="relative bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden"
             @click.away="quickViewOpen = false"
             x-show="quickViewOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95">

            
            <button @click="quickViewOpen = false" 
                    class="absolute top-4 right-4 z-20 w-10 h-10 bg-black/10 hover:bg-black/20 backdrop-blur-sm rounded-full flex items-center justify-center transition-colors">
                <i class="fa-solid fa-times text-white"></i>
            </button>

            
            <div class="overflow-y-auto max-h-[90vh]">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    
                    <div class="relative bg-gradient-to-br from-gray-100 to-gray-200 aspect-square lg:aspect-auto">
                        <img x-bind:src="productData?.image || '/images/placeholder.jpg'" 
                             x-bind:alt="productData?.name"
                             class="w-full h-full object-cover">
                        
                        
                        <div class="absolute top-4 left-4 flex flex-col gap-2" x-show="productData">
                            <span x-show="productData?.is_new" class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <?php echo e(app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW')); ?>

                            </span>
                            <span x-show="productData?.is_featured" class="bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <?php echo e(app()->getLocale() == 'ku' ? 'تایبەت' : (app()->getLocale() == 'ar' ? 'مميز' : 'FEATURED')); ?>

                            </span>
                            <span x-show="productData?.discount_percentage > 0" class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                -<span x-text="productData?.discount_percentage"></span>%
                            </span>
                        </div>
                    </div>

                    
                    <div class="p-8 flex flex-col">
                        
                        <div class="flex items-center gap-2 mb-4" x-show="productData?.category">
                            <span class="text-sm text-primary-500 font-medium bg-primary-50 px-3 py-1 rounded-full" 
                                  x-text="productData?.category?.name"></span>
                            <span x-show="productData?.subcategory" class="text-sm text-gray-500">•</span>
                            <span x-show="productData?.subcategory" class="text-sm text-gray-500" 
                                  x-text="productData?.subcategory?.name"></span>
                        </div>

                        
                        <h2 class="text-3xl font-bold text-gray-900 mb-4" x-text="productData?.name"></h2>

                        
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex text-yellow-400">
                                <template x-for="i in 5">
                                    <i class="fa-solid fa-star text-sm"></i>
                                </template>
                            </div>
                            <span class="text-sm text-gray-500">(45 <?php echo e(app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'reviews')); ?>)</span>
                        </div>

                        
                        <div class="flex items-center gap-3 mb-6">
                            <span class="text-3xl font-bold text-primary-500" x-text="'$' + (productData?.final_price || productData?.price)"></span>
                            <span x-show="productData?.discount_percentage > 0" 
                                  class="text-xl text-gray-400 line-through" 
                                  x-text="'$' + productData?.price"></span>
                        </div>

                        
                        <div class="mb-6">
                            <h3 class="font-semibold text-gray-900 mb-2">
                                <?php echo e(app()->getLocale() == 'ku' ? 'وەسف' : (app()->getLocale() == 'ar' ? 'الوصف' : 'Description')); ?>

                            </h3>
                            <p class="text-gray-600 leading-relaxed" x-text="productData?.description"></p>
                        </div>

                        
                        <div class="mb-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="font-semibold text-gray-900">
                                    <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا:' : (app()->getLocale() == 'ar' ? 'المخزون:' : 'Stock:')); ?>

                                </span>
                                <span x-text="productData?.total_stock" class="font-bold"
                                      :class="productData?.total_stock <= 5 ? 'text-red-500' : 'text-green-500'"></span>
                                <span x-show="productData?.total_stock <= 5 && productData?.total_stock > 0" 
                                      class="text-orange-500 text-sm">
                                    (<?php echo e(app()->getLocale() == 'ku' ? 'کەم' : (app()->getLocale() == 'ar' ? 'منخفض' : 'Low')); ?>)
                                </span>
                            </div>
                        </div>

                        
                        <div class="mb-8" x-show="productData?.sizes?.length > 0">
                            <h3 class="font-semibold text-gray-900 mb-3">
                                <?php echo e(app()->getLocale() == 'ku' ? 'قەبارەکان' : (app()->getLocale() == 'ar' ? 'المقاسات' : 'Available Sizes')); ?>

                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="size in productData?.sizes || []">
                                    <button class="px-4 py-2 border-2 border-gray-200 rounded-lg font-medium hover:border-primary-500 transition-colors"
                                            :class="size.quantity <= 0 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-primary-50'"
                                            :disabled="size.quantity <= 0">
                                        <span x-text="size.name"></span>
                                        <span x-show="size.quantity <= 0" class="block text-xs text-red-500">
                                            <?php echo e(app()->getLocale() == 'ku' ? 'نەماوە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out' )); ?>

                                        </span>
                                    </button>
                                </template>
                            </div>
                        </div>

                        
                        <div class="mt-auto space-y-4">
                            
                            <button x-show="productData?.total_stock > 0"
                                    class="w-full bg-primary-500 text-white py-4 px-6 rounded-xl font-semibold hover:bg-primary-600 transition-colors flex items-center justify-center gap-2">
                                <i class="fa-solid fa-cart-plus"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف إلى السلة' : 'Add to Cart')); ?>

                            </button>

                            
                            <div x-show="productData?.total_stock <= 0"
                                 class="w-full bg-gray-100 text-gray-500 py-4 px-6 rounded-xl font-semibold text-center flex items-center justify-center gap-2">
                                <i class="fa-solid fa-times-circle"></i>
                                <?php echo e(app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock')); ?>

                            </div>

                            
                            <div class="flex gap-3">
                                <button class="flex-1 bg-white border-2 border-gray-200 text-gray-700 py-3 px-4 rounded-xl font-medium hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center gap-2">
                                    <i class="fa-regular fa-heart"></i>
                                    <?php echo e(app()->getLocale() == 'ku' ? 'خۆشەویست' : (app()->getLocale() == 'ar' ? 'المفضلة' : 'Wishlist')); ?>

                                </button>
                                <button class="flex-1 bg-white border-2 border-gray-200 text-gray-700 py-3 px-4 rounded-xl font-medium hover:border-blue-300 hover:text-blue-600 transition-colors flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-balance-scale"></i>
                                    <?php echo e(app()->getLocale() == 'ku' ? 'بەراوردکردن' : (app()->getLocale() == 'ar' ? 'مقارنة' : 'Compare')); ?>

                                </button>
                            </div>

                            
                            <a x-bind:href="'/products/' + productData?.id" 
                               class="block w-full text-center bg-gray-50 text-gray-700 py-3 px-6 rounded-xl font-medium hover:bg-gray-100 transition-colors">
                                <?php echo e(app()->getLocale() == 'ku' ? 'بینینی تەواوی وردەکاریەکان' : (app()->getLocale() == 'ar' ? 'عرض التفاصيل الكاملة' : 'View Full Details')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Enhanced quick view functionality
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.quick-view-btn').forEach(function(button) {
        button.addEventListener('click', async function() {
            const productId = this.dataset.productId;
            
            try {
                // In a real app, you'd fetch this data from an API
                // For now, we'll simulate the data structure
                const productData = {
                    id: productId,
                    name: 'Sample Product Name',
                    description: 'This is a sample product description that would normally be fetched from your API.',
                    price: 99.99,
                    final_price: 79.99,
                    discount_percentage: 20,
                    total_stock: 15,
                    is_new: true,
                    is_featured: false,
                    is_trending: true,
                    image: '/images/placeholder.jpg',
                    category: {
                        name: 'Sample Category'
                    },
                    subcategory: {
                        name: 'Sample Subcategory'
                    },
                    sizes: [
                        { name: 'S', quantity: 5 },
                        { name: 'M', quantity: 10 },
                        { name: 'L', quantity: 0 },
                        { name: 'XL', quantity: 3 }
                    ]
                };
                
                // Dispatch custom event to open modal
                window.dispatchEvent(new CustomEvent('open-quick-view', {
                    detail: productData
                }));
            } catch (error) {
                console.error('Error loading product data:', error);
            }
        });
    });
});
</script><?php /**PATH C:\Users\ibrahim dev\Desktop\shoping_online\resources\views/components/modals/quick-view.blade.php ENDPATH**/ ?>