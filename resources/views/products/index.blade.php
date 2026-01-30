<x-layouts.main>
    {{-- 🎨 ENHANCED HERO SECTION --}}
    <section class="relative bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900 py-20 overflow-hidden">
        {{-- Animated Background --}}
        <div class="absolute inset-0">
            <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-br from-cyan-500/30 to-blue-600/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-br from-pink-500/30 to-purple-600/30 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-20 left-1/2 w-60 h-60 bg-gradient-to-br from-yellow-400/20 to-orange-500/20 rounded-full blur-3xl animate-bounce" style="animation-duration: 4s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 text-center text-white">
            <div class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-6 border border-white/20">
                {{ app()->getLocale() == 'ku' ? '🛍️ فرۆشگای ئۆنلاین' : (app()->getLocale() == 'ar' ? '🛍️ متجر إلكتروني' : '🛍️ Online Store') }}
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6">
                {{ app()->getLocale() == 'ku' ? 'بەرهەمەکانی' : (app()->getLocale() == 'ar' ? 'منتجاتنا' : 'Our Products') }}
                <span class="bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent animate-pulse">
                    {{ app()->getLocale() == 'ku' ? 'نایاب' : (app()->getLocale() == 'ar' ? 'المميزة' : 'Premium') }}
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                {{ app()->getLocale() == 'ku' ? 'کۆمەڵێک بەرهەمی جوان و باش کە بە وردی هەڵبژێردراون بۆ دەربڕینی ستایلی تایبەتی خۆت' : (app()->getLocale() == 'ar' ? 'مجموعة من المنتجات الجميلة والجودة المختارة بعناية للتعبير عن أسلوبك الخاص' : 'Discover premium products carefully selected to express your unique style and personality') }}
            </p>

            {{-- Stats --}}
            <div class="flex justify-center items-center gap-8 mt-12">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">{{ $products->total() }}+</div>
                    <div class="text-sm text-gray-300">{{ app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'Products') }}</div>
                </div>
                <div class="w-px h-8 bg-white/20"></div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">{{ $categories->count() }}+</div>
                    <div class="text-sm text-gray-300">{{ app()->getLocale() == 'ku' ? 'جۆر' : (app()->getLocale() == 'ar' ? 'فئة' : 'Categories') }}</div>
                </div>
                <div class="w-px h-8 bg-white/20"></div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">24/7</div>
                    <div class="text-sm text-gray-300">{{ app()->getLocale() == 'ku' ? 'پشتگیری' : (app()->getLocale() == 'ar' ? 'دعم' : 'Support') }}</div>
                </div>
            </div>
        </div>
    </section>

    <div class="py-6 sm:py-10 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4">
            {{-- Enhanced Header with Search & Controls --}}
            @include('products.partials.header')

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                {{-- Mobile Filter Toggle --}}
                <div x-data="{ showFilters: false }" class="lg:hidden">
                    <button @click="showFilters = !showFilters" 
                            class="w-full flex items-center justify-center gap-2 bg-white border border-dark-200 text-dark-700 py-3 px-6 rounded-xl font-medium mb-4 hover:bg-gray-50 transition-colors">
                        <i class="fa-solid fa-filter"></i>
                        <span x-text="showFilters ? '{{ app()->getLocale() == 'ku' ? 'شاردنەوەی فلتەر' : (app()->getLocale() == 'ar' ? 'إخفاء المرشحات' : 'Hide Filters') }}' : '{{ app()->getLocale() == 'ku' ? 'نیشاندانی فلتەر' : (app()->getLocale() == 'ar' ? 'إظهار المرشحات' : 'Show Filters') }}'"></span>
                    </button>
                    
                    {{-- Mobile Filter Panel --}}
                    <div x-show="showFilters" x-collapse class="mb-6">
                        @include('products.partials.filters')
                    </div>
                </div>

                {{-- Desktop Sidebar Filter --}}
                <div class="hidden lg:block w-80 shrink-0">
                    @include('products.partials.filters')
                </div>

                {{-- Products Grid --}}
                <div class="flex-1">
                    @if (count($products))
                        {{-- Products Container --}}
                        <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            @foreach ($products as $product)
                                <div class="product-card">
                                    @include('products.partials.product-card', ['product' => $product])
                                </div>
                            @endforeach
                        </div>
                        
                        {{-- Enhanced Pagination --}}
                        <div class="mt-12">
                            <div class="bg-white rounded-2xl border border-gray-200 p-6">
                                {{ $products->links() }}
                                
                                {{-- Pagination Info --}}
                                <div class="text-center text-sm text-gray-500 mt-4">
                                    {{ app()->getLocale() == 'ku' ? 'نیشاندانی' : (app()->getLocale() == 'ar' ? 'عرض' : 'Showing') }}
                                    {{ $products->firstItem() }} {{ app()->getLocale() == 'ku' ? 'بۆ' : (app()->getLocale() == 'ar' ? 'إلى' : 'to') }}
                                    {{ $products->lastItem() }} {{ app()->getLocale() == 'ku' ? 'لە' : (app()->getLocale() == 'ar' ? 'من' : 'of') }}
                                    {{ $products->total() }} {{ app()->getLocale() == 'ku' ? 'ئەنجام' : (app()->getLocale() == 'ar' ? 'نتيجة' : 'results') }}
                                </div>
                            </div>
                        </div>
                    @else
                        {{-- Enhanced Empty State --}}
                        <div class="text-center py-20">
                            <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto mb-8">
                                <i class="fa-solid fa-search text-5xl text-gray-400"></i>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">
                                {{ app()->getLocale() == 'ku' ? 'هیچ بەرهەمێک نەدۆزرایەوە' : (app()->getLocale() == 'ar' ? 'لم يتم العثور على منتجات' : 'No products found') }}
                            </h3>
                            <p class="text-gray-600 mb-8 text-lg max-w-md mx-auto">
                                {{ app()->getLocale() == 'ku' ? 'تکایە فلتەرەکانت بگۆڕە یان زاراوەی گەڕانت تاقی بکەرەوە' : (app()->getLocale() == 'ar' ? 'يرجى تغيير المرشحات أو المحاولة مرة أخرى' : 'Try adjusting your filters or search terms') }}
                            </p>
                            
                            {{-- Quick Actions --}}
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="{{ route('products.index') }}" 
                                   class="inline-flex items-center gap-2 bg-primary-500 text-white px-8 py-4 rounded-xl font-semibold hover:bg-primary-600 transition-colors">
                                    <i class="fa-solid fa-refresh"></i>
                                    {{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'جميع المنتجات' : 'View All Products') }}
                                </a>
                                <button onclick="document.querySelector('input[name=search]').focus()" 
                                        class="inline-flex items-center gap-2 bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-xl font-semibold hover:border-primary-300 transition-colors">
                                    <i class="fa-solid fa-search"></i>
                                    {{ app()->getLocale() == 'ku' ? 'گەڕانی نوێ' : (app()->getLocale() == 'ar' ? 'بحث جديد' : 'New Search') }}
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Quick View Modal --}}
    <x-modals.quick-view />

    {{-- JavaScript for Enhanced Features --}}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Countdown timers
        document.querySelectorAll('[data-countdown]').forEach(function(element) {
            const countdownDate = new Date(element.getAttribute('data-countdown')).getTime();
            
            const timer = setInterval(function() {
                const now = new Date().getTime();
                const distance = countdownDate - now;
                
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                if (distance > 0) {
                    element.querySelector('.countdown-days').textContent = days.toString().padStart(2, '0');
                    element.querySelector('.countdown-hours').textContent = hours.toString().padStart(2, '0');
                    element.querySelector('.countdown-minutes').textContent = minutes.toString().padStart(2, '0');
                    element.querySelector('.countdown-seconds').textContent = seconds.toString().padStart(2, '0');
                } else {
                    clearInterval(timer);
                    element.innerHTML = '<div class="text-red-600 font-bold">{{ app()->getLocale() == 'ku' ? 'داشکاندن کۆتایی هات' : (app()->getLocale() == 'ar' ? 'انتهى الخصم' : 'Offer Expired') }}</div>';
                }
            }, 1000);
        });

        // Wishlist functionality
        document.querySelectorAll('.wishlist-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const productId = this.dataset.productId;
                // Add wishlist logic here
                this.querySelector('i').classList.toggle('fa-regular');
                this.querySelector('i').classList.toggle('fa-solid');
                this.classList.toggle('text-red-500');
            });
        });

        // Quick view functionality
        document.querySelectorAll('.quick-view-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const productId = this.dataset.productId;
                // Add quick view modal logic here
                console.log('Quick view product:', productId);
            });
        });

        // Compare functionality
        document.querySelectorAll('.compare-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const productId = this.dataset.productId;
                // Add compare logic here
                console.log('Compare product:', productId);
            });
        });
    });
    </script>
</x-layouts.main>
