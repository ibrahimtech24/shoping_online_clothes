<x-layouts.main>
    <div class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50/30">
        <div class="container mx-auto px-4">
            {{-- Header --}}
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-6xl font-black mb-6">
                    <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">
                        {{ app()->getLocale() == 'ku' ? 'هەموو کەتەگۆریەکان' : 'All Categories' }}
                    </span>
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    {{ app()->getLocale() == 'ku' ? 'گەران لە کەتەگۆریەکاندا بۆ دۆزینەوەی بەرهەمی دڵخوازت' : 'Browse through categories to find your favorite products' }}
                </p>
            </div>

            {{-- Categories Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($categories as $category)
                <div class="group relative">
                    <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="text-center">
                            <div class="text-6xl mb-6">
                                @if($category->id == 1) 👔
                                @elseif($category->id == 2) 👗
                                @else 🛍️
                                @endif
                            </div>
                             
                            <h3 class="text-2xl font-bold mb-3">{{ $category->name }}</h3>
                              
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 rounded-full mb-6">
                                <span class="text-lg font-bold">{{ $category->products_count }}+</span>
                                <span class="text-gray-600">{{ app()->getLocale() == 'ku' ? 'بەرهەم' : 'Products' }}</span>
                            </div>
                            
                            <a href="{{ route('categories.show', $category) }}" 
                               class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-2xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                <span>{{ app()->getLocale() == 'ku' ? 'گەران' : 'Browse' }}</span>
                                <i class="fa-solid fa-arrow-{{ in_array(app()->getLocale(), ['ku', 'ar']) ? 'left' : 'right' }}"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.main>