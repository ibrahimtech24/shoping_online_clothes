<x-layouts.main>
    <div class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50/30">
        <div class="container mx-auto px-4">
            {{-- Header --}}
            <div class="text-center mb-16">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <a href="{{ route('categories.index') }}" class="text-gray-500 hover:text-purple-600 transition-colors">
                        {{ app()->getLocale() == 'ku' ? 'کەتەگۆریەکان' : 'Categories' }}
                    </a>
                    <span class="text-gray-400">/</span>
                    <span class="text-purple-600 font-bold">{{ $category->name }}</span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-black mb-6">
                    <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">
                        {{ $category->name }}
                    </span>
                </h1>
                
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکانی کەتەگۆری ' . $category->name : 'All products in ' . $category->name . ' category' }}
                </p>
            </div>

            {{-- Products Grid --}}
            @if($products->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-16">
                    @foreach($products as $product)
                    <div class="group relative">
                        <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                            {{-- Product Image --}}
                            <div class="aspect-square overflow-hidden relative">
                                @if($product->image)
                                    <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                        <span class="text-6xl text-gray-400">📦</span>
                                    </div>
                                @endif
                                
                                {{-- Hover Overlay --}}
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                                    <a href="{{ route('products.show', $product) }}" 
                                       class="px-6 py-3 bg-white text-gray-900 rounded-2xl font-bold transform -translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        {{ app()->getLocale() == 'ku' ? 'بینین' : 'View Details' }}
                                    </a>
                                </div>
                            </div>
                            
                            {{-- Product Info --}}
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2 line-clamp-2">{{ $product->name }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $product->description }}</p>
                                
                                {{-- Price --}}
                                <div class="flex items-center justify-between">
                                    <div class="text-2xl font-black text-purple-600">
                                        ${{ number_format($product->price, 2) }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $product->category->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="flex justify-center">
                    {{ $products->links() }}
                </div>
            @else
                {{-- Empty State --}}
                <div class="text-center py-20">
                    <div class="text-8xl mb-6">📦</div>
                    <h3 class="text-2xl font-bold text-gray-600 mb-4">
                        {{ app()->getLocale() == 'ku' ? 'بەرهەم نەدۆزرایەوە' : 'No Products Found' }}
                    </h3>
                    <p class="text-gray-500 mb-8">
                        {{ app()->getLocale() == 'ku' ? 'لەم کەتەگۆریەدا بەرهەم نییە' : 'There are no products in this category yet' }}
                    </p>
                    <a href="{{ route('products.index') }}" 
                       class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-2xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        <span>{{ app()->getLocale() == 'ku' ? 'هەموو بەرهەمەکان' : 'All Products' }}</span>
                        <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }}"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-layouts.main>