{{-- Advanced Product Filters --}}
<div class="bg-white rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 p-6 sticky top-24">
    <form action="{{ route('products.index') }}" method="GET" id="filterForm">
        {{-- Filter Header --}}
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-dark-100">
            <h2 class="text-lg font-bold text-dark-900 flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-primary-500 to-accent-500 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-filter text-white text-xs"></i>
                </div>
                {{ app()->getLocale() == 'ku' ? 'فلتەرەکان' : (app()->getLocale() == 'ar' ? 'المرشحات' : 'Filters') }}
            </h2>
            <a href="{{ route('products.index') }}" class="text-sm text-primary-500 hover:text-primary-600 font-medium">
                {{ app()->getLocale() == 'ku' ? 'هەموو پاک بکەرەوە' : (app()->getLocale() == 'ar' ? 'مسح الكل' : 'Clear All') }}
            </a>
        </div>

        {{-- Search Bar --}}
        <div class="mb-6">
            <div class="relative">
                <input type="text" name="search" 
                       value="{{ request('search') }}"
                       placeholder="{{ app()->getLocale() == 'ku' ? 'گەڕان لە بەرهەمەکان...' : (app()->getLocale() == 'ar' ? 'البحث في المنتجات...' : 'Search products...') }}"
                       class="w-full pl-10 pr-4 py-3 border border-dark-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-dark-400"></i>
            </div>
        </div>

        {{-- Price Range --}}
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                {{ app()->getLocale() == 'ku' ? 'نرخ' : (app()->getLocale() == 'ar' ? 'السعر' : 'Price') }}
            </h3>
            <div class="flex gap-3">
                <div class="flex-1">
                    <input type="number" name="min_price" 
                           value="{{ request('min_price') }}"
                           placeholder="{{ app()->getLocale() == 'ku' ? 'کەمترین' : (app()->getLocale() == 'ar' ? 'أدنى' : 'Min') }}"
                           class="w-full px-3 py-2 text-sm border border-dark-200 rounded-lg">
                </div>
                <span class="text-dark-400 self-center">-</span>
                <div class="flex-1">
                    <input type="number" name="max_price" 
                           value="{{ request('max_price') }}"
                           placeholder="{{ app()->getLocale() == 'ku' ? 'زۆرترین' : (app()->getLocale() == 'ar' ? 'أقصى' : 'Max') }}"
                           class="w-full px-3 py-2 text-sm border border-dark-200 rounded-lg">
                </div>
            </div>
        </div>
                
        {{-- Product Status --}}
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                {{ app()->getLocale() == 'ku' ? 'دۆخی بەرهەم' : (app()->getLocale() == 'ar' ? 'حالة المنتج' : 'Product Status') }}
            </h3>
            <div class="space-y-2">
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="featured" 
                           {{ in_array('featured', request('status', [])) ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            {{ app()->getLocale() == 'ku' ? 'تایبەت' : (app()->getLocale() == 'ar' ? 'مميز' : 'Featured') }}
                        </span>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="new" 
                           {{ in_array('new', request('status', [])) ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            {{ app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'New') }}
                        </span>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="trending" 
                           {{ in_array('trending', request('status', [])) ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            {{ app()->getLocale() == 'ku' ? 'ترێند' : (app()->getLocale() == 'ar' ? 'رائج' : 'Trending') }}
                        </span>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="checkbox" name="status[]" value="discount" 
                           {{ in_array('discount', request('status', [])) ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-dark-300 text-primary-500 focus:ring-primary-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                        <span class="text-sm text-dark-600">
                            {{ app()->getLocale() == 'ku' ? 'داشکاندن' : (app()->getLocale() == 'ar' ? 'خصم' : 'On Sale') }}
                        </span>
                    </div>
                </label>
            </div>
        </div>

        {{-- Availability --}}
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                {{ app()->getLocale() == 'ku' ? 'بەردەست بوون' : (app()->getLocale() == 'ar' ? 'التوفر' : 'Availability') }}
            </h3>
            <div class="space-y-2">
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="radio" name="availability" value="all" 
                           {{ !request('availability') || request('availability') == 'all' ? 'checked' : '' }}
                           class="w-4 h-4 border-dark-300 text-primary-500 focus:ring-primary-500">
                    <span class="text-sm text-dark-600">
                        {{ app()->getLocale() == 'ku' ? 'هەموو' : (app()->getLocale() == 'ar' ? 'الكل' : 'All') }}
                    </span>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="radio" name="availability" value="in_stock" 
                           {{ request('availability') == 'in_stock' ? 'checked' : '' }}
                           class="w-4 h-4 border-dark-300 text-primary-500 focus:ring-primary-500">
                    <span class="text-sm text-dark-600">
                        {{ app()->getLocale() == 'ku' ? 'لە کۆگا هەیە' : (app()->getLocale() == 'ar' ? 'متوفر' : 'In Stock') }}
                    </span>
                </label>
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-dark-50 cursor-pointer">
                    <input type="radio" name="availability" value="low_stock" 
                           {{ request('availability') == 'low_stock' ? 'checked' : '' }}
                           class="w-4 h-4 border-dark-300 text-primary-500 focus:ring-primary-500">
                    <span class="text-sm text-dark-600">
                        {{ app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock') }}
                    </span>
                </label>
            </div>
        </div>

        {{-- Categories --}}
        <div class="mb-6">
            <h3 class="font-semibold text-dark-700 mb-4 text-sm uppercase tracking-wide">
                {{ app()->getLocale() == 'ku' ? 'جۆرەکان' : (app()->getLocale() == 'ar' ? 'الفئات' : 'Categories') }}
            </h3>
            @foreach ($categories as $category)
                <div x-data="{ open: false }" class="mb-2">
                    <button type="button" @click="open = !open"
                        class="w-full flex justify-between items-center p-3 rounded-xl bg-dark-50 hover:bg-primary-50 transition-colors">
                        <span class="font-medium text-dark-700">{{ $category->name }}</span>
                        <i class="fa-solid text-primary-500 text-xs transition-transform duration-300"
                            :class="open ? 'fa-chevron-up rotate-180' : 'fa-chevron-down'"></i>
                    </button>

                    <div x-show="open" x-collapse x-cloak class="mt-2 ml-2 space-y-1">
                        @foreach ($subcategories as $child)
                            @if ($child->category_id === $category->id)
                                <label class="flex items-center gap-3 p-2.5 rounded-xl hover:bg-dark-50 cursor-pointer group transition-colors">
                                    <input type="checkbox" name="subcategories[]" 
                                           value="{{ $child->id }}"
                                           {{ in_array($child->id, request('subcategories', [])) ? 'checked' : '' }}
                                           class="w-4 h-4 rounded-md border-dark-300 text-primary-500 focus:ring-primary-500 focus:ring-offset-0">
                                    <span class="text-sm text-dark-500 group-hover:text-dark-700 transition-colors flex-1">
                                        {{ $child->name }}
                                    </span>
                                    <span class="text-xs text-dark-300 bg-dark-100 px-2 py-0.5 rounded-full">
                                        {{ $child->products_count }}
                                    </span>
                                </label>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Apply Filters Button --}}
        <button type="submit" class="w-full bg-gradient-to-r from-primary-500 to-accent-500 text-white py-3 rounded-xl font-semibold hover:from-primary-600 hover:to-accent-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
            <i class="fa-solid fa-magic-wand-sparkles"></i>
            {{ app()->getLocale() == 'ku' ? 'جێبەجێکردنی فلتەر' : (app()->getLocale() == 'ar' ? 'تطبيق المرشحات' : 'Apply Filters') }}
        </button>
    </form>
</div>

{{-- Auto-submit form on filter change --}}
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
</script>