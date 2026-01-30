{{-- Enhanced Product Header with Search, Sort, and View Toggle --}}
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
    {{-- Left Side - Title and Results Count --}}
    <div class="flex-1">
        <div class="flex items-center gap-4">
            <h1 class="text-2xl lg:text-3xl font-bold text-dark-900">
                {{ app()->getLocale() == 'ku' ? 'فرۆشگا' : (app()->getLocale() == 'ar' ? 'المتجر' : 'Shop') }}
                @if(request('search'))
                    <span class="text-primary-500">
                        - "{{ request('search') }}"
                    </span>
                @endif
            </h1>
            @if($products->total() > 0)
                <div class="bg-primary-50 text-primary-600 px-3 py-1 rounded-full text-sm font-medium">
                    {{ $products->total() }} {{ app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'products') }}
                </div>
            @endif
        </div>
        
        {{-- Active Filters --}}
        @if(request()->hasAny(['search', 'subcategories', 'status', 'min_price', 'max_price', 'availability']) && (request('search') || request('subcategories') || request('status') || request('min_price') || request('max_price') || request('availability') !== 'all'))
            <div class="mt-3 flex flex-wrap gap-2">
                <span class="text-sm text-gray-500">{{ app()->getLocale() == 'ku' ? 'فلتەرە چالاکەکان:' : (app()->getLocale() == 'ar' ? 'المرشحات النشطة:' : 'Active filters:') }}</span>
                
                {{-- Search Filter --}}
                @if(request('search'))
                    <span class="inline-flex items-center gap-1 bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">
                        <i class="fa-solid fa-search"></i>
                        {{ request('search') }}
                        <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}" class="ml-1 hover:text-blue-900">×</a>
                    </span>
                @endif

                {{-- Price Filter --}}
                @if(request('min_price') || request('max_price'))
                    <span class="inline-flex items-center gap-1 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">
                        <i class="fa-solid fa-dollar-sign"></i>
                        ${{ request('min_price', 0) }} - ${{ request('max_price', '∞') }}
                        <a href="{{ request()->fullUrlWithQuery(['min_price' => null, 'max_price' => null]) }}" class="ml-1 hover:text-green-900">×</a>
                    </span>
                @endif

                {{-- Status Filters --}}
                @foreach(request('status', []) as $status)
                    <span class="inline-flex items-center gap-1 bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">
                        <i class="fa-solid fa-tag"></i>
                        {{ ucfirst($status) }}
                        <a href="{{ request()->fullUrlWithQuery(['status' => array_diff(request('status', []), [$status])]) }}" class="ml-1 hover:text-yellow-900">×</a>
                    </span>
                @endforeach

                {{-- Clear All Filters --}}
                <a href="{{ route('products.index') }}" class="inline-flex items-center gap-1 bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs hover:bg-red-200 transition-colors">
                    <i class="fa-solid fa-times"></i>
                    {{ app()->getLocale() == 'ku' ? 'پاککردنەوەی هەموو' : (app()->getLocale() == 'ar' ? 'مسح الكل' : 'Clear all') }}
                </a>
            </div>
        @endif
    </div>

    {{-- Right Side - Controls --}}
    <div class="flex items-center gap-3 lg:gap-4">
        {{-- Sort Dropdown --}}
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" 
                    class="flex items-center gap-2 bg-white border border-dark-200 text-dark-700 px-4 py-2.5 rounded-xl font-medium hover:border-primary-300 transition-colors">
                <i class="fa-solid fa-sort"></i>
                <span class="hidden sm:inline">{{ app()->getLocale() == 'ku' ? 'ڕیزکردن' : (app()->getLocale() == 'ar' ? 'ترتيب' : 'Sort') }}</span>
                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            
            <div x-show="open" x-collapse x-cloak @click.away="open = false"
                 class="absolute right-0 mt-2 w-56 bg-white border border-dark-200 rounded-xl shadow-lg z-50">
                <div class="p-2">
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort', 'latest') == 'latest' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-clock"></i>
                        {{ app()->getLocale() == 'ku' ? 'نوێترین' : (app()->getLocale() == 'ar' ? 'الأحدث' : 'Latest') }}
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'oldest']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort') == 'oldest' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-history"></i>
                        {{ app()->getLocale() == 'ku' ? 'کۆنترین' : (app()->getLocale() == 'ar' ? 'الأقدم' : 'Oldest') }}
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_low']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort') == 'price_low' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-arrow-up-short-wide"></i>
                        {{ app()->getLocale() == 'ku' ? 'نرخ: کەم بۆ زۆر' : (app()->getLocale() == 'ar' ? 'السعر: من الأقل للأكثر' : 'Price: Low to High') }}
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_high']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort') == 'price_high' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-arrow-down-wide-short"></i>
                        {{ app()->getLocale() == 'ku' ? 'نرخ: زۆر بۆ کەم' : (app()->getLocale() == 'ar' ? 'السعر: من الأكثر للأقل' : 'Price: High to Low') }}
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_asc']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort') == 'name_asc' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-arrow-down-a-z"></i>
                        {{ app()->getLocale() == 'ku' ? 'ناو: أ-ي' : (app()->getLocale() == 'ar' ? 'الاسم: أ-ي' : 'Name: A-Z') }}
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_desc']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort') == 'name_desc' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-arrow-up-z-a"></i>
                        {{ app()->getLocale() == 'ku' ? 'ناو: ي-أ' : (app()->getLocale() == 'ar' ? 'الاسم: ي-أ' : 'Name: Z-A') }}
                    </a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'discount']) }}" 
                       class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg hover:bg-dark-50 {{ request('sort') == 'discount' ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                        <i class="fa-solid fa-percentage"></i>
                        {{ app()->getLocale() == 'ku' ? 'زۆرترین داشکاندن' : (app()->getLocale() == 'ar' ? 'أعلى خصم' : 'Highest Discount') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- View Toggle --}}
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

        {{-- Items per page --}}
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" 
                    class="flex items-center gap-2 bg-white border border-dark-200 text-dark-700 px-3 py-2.5 rounded-xl font-medium hover:border-primary-300 transition-colors">
                <span class="hidden sm:inline">{{ request('per_page', 12) }}</span>
                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
            </button>
            
            <div x-show="open" x-collapse x-cloak @click.away="open = false"
                 class="absolute right-0 mt-2 w-20 bg-white border border-dark-200 rounded-xl shadow-lg z-50">
                <div class="p-1">
                    @foreach([12, 24, 48, 96] as $count)
                        <a href="{{ request()->fullUrlWithQuery(['per_page' => $count]) }}" 
                           class="block px-3 py-2 text-sm text-center rounded-lg hover:bg-dark-50 {{ request('per_page', 12) == $count ? 'bg-primary-50 text-primary-600' : 'text-dark-700' }}">
                            {{ $count }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- View Toggle Script --}}
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
</script>