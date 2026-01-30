{{-- Categories Showcase Section --}}
<section class="py-20 bg-white relative overflow-hidden">
    {{-- Background Decorative Elements --}}
    <div class="absolute inset-0">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-primary-500/10 to-accent-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-accent-500/10 to-primary-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-gradient-to-r from-accent-100 to-primary-100 rounded-full text-accent-600 text-sm font-semibold mb-4">
                {{ app()->getLocale() == 'ku' ? '🏪 جۆرەکانی بەرهەم' : (app()->getLocale() == 'ar' ? '🏪 فئات المنتجات' : '🏪 Product Categories') }}
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                {{ app()->getLocale() == 'ku' ? 'گەڕان لە' : (app()->getLocale() == 'ar' ? 'تصفح' : 'Browse by') }}
                <span class="bg-gradient-to-r from-accent-500 to-primary-500 bg-clip-text text-transparent">
                    {{ app()->getLocale() == 'ku' ? 'جۆرەکان' : (app()->getLocale() == 'ar' ? 'الفئات' : 'Categories') }}
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ app()->getLocale() == 'ku' ? 'هەموو جۆرەکانی جیاواز لە بەرهەمەکانمان بدۆزەرەوە' : (app()->getLocale() == 'ar' ? 'اكتشف جميع فئات منتجاتنا المتنوعة' : 'Discover all our diverse product categories') }}
            </p>
        </div>

        {{-- Categories Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($categories as $category)
                <div class="group relative">
                    {{-- Category Card --}}
                    <a href="{{ route('products.index', ['categories' => [$category->id]]) }}" 
                       class="block relative bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-accent-500/20 transition-all duration-500 hover:-translate-y-2">
                        
                        {{-- Premium Glow Effect --}}
                        <div class="absolute -inset-1 bg-gradient-to-r from-accent-500/20 via-primary-500/20 to-accent-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm"></div>
                        
                        {{-- Category Image/Icon --}}
                        <div class="relative aspect-square bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center">
                            @if($category->image)
                                <img src="{{ str_starts_with($category->image, 'http') ? $category->image : asset('storage/' . $category->image) }}" 
                                     alt="{{ $category->name }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                {{-- Default Icon Based on Category --}}
                                <div class="w-24 h-24 bg-gradient-to-br from-accent-500 to-primary-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                    @switch(strtolower($category->name))
                                        @case('clothing')
                                        @case('پۆشاک')
                                        @case('ملابس')
                                            <i class="fa-solid fa-shirt text-white text-3xl"></i>
                                            @break
                                        @case('shoes')
                                        @case('پێڵاو')
                                        @case('أحذية')
                                            <i class="fa-solid fa-shoe-prints text-white text-3xl"></i>
                                            @break
                                        @case('accessories')
                                        @case('ئەکسسوار')
                                        @case('إكسسوارات')
                                            <i class="fa-solid fa-gem text-white text-3xl"></i>
                                            @break
                                        @case('electronics')
                                        @case('ئەلیکترۆنی')
                                        @case('إلكترونيات')
                                            <i class="fa-solid fa-laptop text-white text-3xl"></i>
                                            @break
                                        @case('home')
                                        @case('ماڵەوە')
                                        @case('منزل')
                                            <i class="fa-solid fa-house text-white text-3xl"></i>
                                            @break
                                        @case('beauty')
                                        @case('جوانی')
                                        @case('جمال')
                                            <i class="fa-solid fa-sparkles text-white text-3xl"></i>
                                            @break
                                        @case('sports')
                                        @case('وەرزش')
                                        @case('رياضة')
                                            <i class="fa-solid fa-dumbbell text-white text-3xl"></i>
                                            @break
                                        @case('books')
                                        @case('کتێب')
                                        @case('كتب')
                                            <i class="fa-solid fa-book text-white text-3xl"></i>
                                            @break
                                        @default
                                            <i class="fa-solid fa-tag text-white text-3xl"></i>
                                    @endswitch
                                </div>
                            @endif

                            {{-- Product Count Badge --}}
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/90 backdrop-blur-sm text-gray-700 text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    {{ $category->products_count ?? rand(10, 99) }} {{ app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'items') }}
                                </span>
                            </div>

                            {{-- Hover Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            {{-- Hover Text --}}
                            <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="text-white text-center">
                                    <p class="text-sm font-medium">
                                        {{ app()->getLocale() == 'ku' ? 'کلیک بکە بۆ بینین' : (app()->getLocale() == 'ar' ? 'انقر للعرض' : 'Click to explore') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Category Info --}}
                        <div class="p-6">
                            {{-- Category Name --}}
                            <h3 class="font-bold text-xl text-gray-900 mb-2 group-hover:text-accent-500 transition-colors duration-300">
                                {{ $category->name }}
                            </h3>

                            {{-- Category Description --}}
                            @if($category->description)
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                    {{ $category->description }}
                                </p>
                            @endif

                            {{-- Subcategories Preview --}}
                            @if($category->subcategories && $category->subcategories->count() > 0)
                                <div class="mb-4">
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($category->subcategories->take(3) as $subcategory)
                                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full">
                                                {{ $subcategory->name }}
                                            </span>
                                        @endforeach
                                        @if($category->subcategories->count() > 3)
                                            <span class="text-xs text-accent-500 font-medium">
                                                +{{ $category->subcategories->count() - 3 }} {{ app()->getLocale() == 'ku' ? 'زیاتر' : (app()->getLocale() == 'ar' ? 'المزيد' : 'more') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            {{-- Action Row --}}
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-500">
                                    {{ app()->getLocale() == 'ku' ? 'گەڕان بکە' : (app()->getLocale() == 'ar' ? 'تصفح الآن' : 'Browse now') }}
                                </span>
                                <i class="fa-solid fa-arrow-right text-accent-500 group-hover:translate-x-2 transition-transform duration-300"></i>
                            </div>
                        </div>

                        {{-- Premium Border Effect --}}
                        <div class="absolute inset-0 rounded-3xl border-2 border-transparent group-hover:border-gradient-to-r group-hover:from-accent-500/50 group-hover:to-primary-500/50 transition-all duration-500 pointer-events-none"></div>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- View All Categories Button --}}
        <div class="text-center mt-16">
            <a href="{{ route('categories.index') }}" 
               class="inline-flex items-center gap-3 bg-gradient-to-r from-accent-500 to-primary-500 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:from-accent-600 hover:to-primary-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <span>{{ app()->getLocale() == 'ku' ? 'هەموو جۆرەکان' : (app()->getLocale() == 'ar' ? 'جميع الفئات' : 'All Categories') }}</span>
                <i class="fa-solid fa-grid-2"></i>
            </a>
        </div>

        {{-- Stats Row --}}
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-3xl font-bold text-gray-900 mb-2">{{ $categories->count() }}+</div>
                <div class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'جۆری جیاواز' : (app()->getLocale() == 'ar' ? 'فئة متنوعة' : 'Categories') }}</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-gray-900 mb-2">{{ $categories->sum('products_count') ?? '1000' }}+</div>
                <div class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'بەرهەم' : (app()->getLocale() == 'ar' ? 'منتج' : 'Products') }}</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-gray-900 mb-2">24/7</div>
                <div class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'پشتگیری' : (app()->getLocale() == 'ar' ? 'دعم' : 'Support') }}</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-gray-900 mb-2">⭐ 4.9</div>
                <div class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'Rating') }}</div>
            </div>
        </div>
    </div>
</section>