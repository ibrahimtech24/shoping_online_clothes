{{-- � SPECTACULAR TRENDING UNIVERSE --}}
<section class="relative min-h-screen bg-gradient-to-br from-black via-purple-900 to-indigo-900 overflow-hidden">
    {{-- Cosmic Background Animation --}}
    <div class="absolute inset-0">
        {{-- Animated Stars --}}
        <div class="absolute inset-0">
            <div class="absolute w-1 h-1 bg-white rounded-full opacity-70 animate-pulse" style="top: 10%; left: 15%;"></div>
            <div class="absolute w-1 h-1 bg-white rounded-full opacity-50 animate-pulse" style="top: 20%; left: 80%; animation-delay: 1s;"></div>
            <div class="absolute w-2 h-2 bg-yellow-300 rounded-full opacity-80 animate-pulse" style="top: 30%; left: 60%; animation-delay: 2s;"></div>
            <div class="absolute w-1 h-1 bg-white rounded-full opacity-60 animate-pulse" style="top: 50%; left: 20%; animation-delay: 3s;"></div>
            <div class="absolute w-1 h-1 bg-cyan-300 rounded-full opacity-70 animate-pulse" style="top: 70%; left: 90%; animation-delay: 4s;"></div>
            <div class="absolute w-2 h-2 bg-pink-300 rounded-full opacity-60 animate-pulse" style="top: 80%; left: 40%; animation-delay: 5s;"></div>
        </div>
        
        {{-- Moving Cosmic Elements --}}
        <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-blue-500/20 rounded-full blur-3xl animate-float-enhanced"></div>
        <div class="absolute -bottom-96 -right-96 w-80 h-80 bg-gradient-to-br from-orange-500/20 via-red-500/20 to-pink-500/20 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/3 left-1/4 w-64 h-64 bg-gradient-to-br from-cyan-500/15 via-blue-500/15 to-purple-500/15 rounded-full blur-3xl animate-float-enhanced" style="animation-delay: 3s;"></div>
    </div>
    
    {{-- Main Content --}}
    <div class="container mx-auto px-4 py-20 relative z-10">
        
        {{-- Epic Header --}}
        <div class="text-center mb-32">
            {{-- Floating Cosmic Badge --}}
            <div class="relative inline-block mb-16">
                <div class="absolute inset-0 bg-gradient-to-r from-pink-600 via-purple-600 to-cyan-600 rounded-full blur-2xl opacity-60 animate-pulse scale-110"></div>
                <div class="relative px-16 py-8 bg-white/5 backdrop-blur-3xl border border-white/10 rounded-full shadow-2xl">
                    <div class="flex items-center gap-8">
                        <div class="relative">
                            <div class="w-20 h-20 bg-gradient-to-br from-pink-500 via-purple-500 to-cyan-500 rounded-full flex items-center justify-center text-4xl animate-spin" style="animation-duration: 20s;">
                                ⭐
                            </div>
                            <div class="absolute -top-3 -right-3 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-sm animate-bounce">✨</div>
                        </div>
                        
                        <div class="text-center">
                            <span class="block text-4xl lg:text-5xl font-black bg-gradient-to-r from-pink-300 via-purple-300 to-cyan-300 bg-clip-text text-transparent tracking-wider">
                                {{ app()->getLocale() == 'ku' ? 'ترێندینگ یونیڤێرس' : (app()->getLocale() == 'ar' ? 'عالم الصيحات' : 'TRENDING UNIVERSE') }}
                            </span>
                            <span class="block text-lg text-white/70 mt-2 font-medium">
                                {{ app()->getLocale() == 'ku' ? 'جیهانی بەرهەمە تایبەتەکان' : (app()->getLocale() == 'ar' ? 'عالم المنتجات المميزة' : 'World of Special Products') }}
                            </span>
                        </div>
                        
                        <div class="relative">
                            <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 via-blue-500 to-purple-500 rounded-full flex items-center justify-center text-4xl animate-spin" style="animation-direction: reverse; animation-delay: 1s; animation-duration: 25s;">
                                🚀
                            </div>
                            <div class="absolute -top-3 -left-3 w-8 h-8 bg-cyan-400 rounded-full flex items-center justify-center text-sm animate-ping">⚡</div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Cosmic Title --}}
            <h2 class="text-7xl lg:text-9xl xl:text-[12rem] font-black mb-12 leading-none">
                <span class="block bg-gradient-to-r from-pink-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent animate-gradient">
                    {{ app()->getLocale() == 'ku' ? 'ئەستێرەکان' : (app()->getLocale() == 'ar' ? 'النجوم' : 'STARS') }}
                </span>
                <span class="block bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent animate-gradient" style="animation-delay: 0.7s;">
                    {{ app()->getLocale() == 'ku' ? 'ناسراوەکان' : (app()->getLocale() == 'ar' ? 'المشهورة' : 'FAMOUS') }}
                </span>
            </h2>
            
            {{-- Epic Subtitle --}}
            <p class="text-3xl lg:text-4xl text-white/80 mb-20 max-w-6xl mx-auto leading-relaxed font-light">
                {{ app()->getLocale() == 'ku' ? 'بەرهەمەکان کە وەک ئەستێرە دەدرەوشێنەوە لە ئاسمانی مۆدەدا' : (app()->getLocale() == 'ar' ? 'منتجات تتألق كالنجوم في سماء الموضة' : 'Products that shine like stars in the fashion sky') }}
            </p>
        </div>
        
        {{-- Spectacular Product Gallery --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-12">
            @php
                $cosmicProducts = [
                    [
                        'img' => 'https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=800&q=80', 
                        'badge' => '⭐', 
                        'rank' => '#1',
                        'name' => app()->getLocale() == 'ku' ? 'ستێرەی شێوازی' : 'Style Star', 
                        'desc' => app()->getLocale() == 'ku' ? 'فستانی ئەستێرەیی' : 'Stellar Dress',
                        'price' => '$299',
                        'glow' => 'from-pink-500 to-purple-500'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=800&q=80', 
                        'badge' => '🌟', 
                        'rank' => '#2',
                        'name' => app()->getLocale() == 'ku' ? 'کۆمەتی مۆدێرن' : 'Modern Comet', 
                        'desc' => app()->getLocale() == 'ku' ? 'کراسی کۆمەتی' : 'Comet Shirt',
                        'price' => '$199',
                        'glow' => 'from-cyan-500 to-blue-500'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1529720317453-c8da503f2051?w=800&q=80', 
                        'badge' => '✨', 
                        'rank' => '#3',
                        'name' => app()->getLocale() == 'ku' ? 'کهکەشانی شان' : 'Galaxy Pants', 
                        'desc' => app()->getLocale() == 'ku' ? 'پانتۆڵی کهکەشانی' : 'Galactic Jeans',
                        'price' => '$249',
                        'glow' => 'from-purple-500 to-pink-500'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?w=800&q=80', 
                        'badge' => '🚀', 
                        'rank' => '#4',
                        'name' => app()->getLocale() == 'ku' ? 'فڕۆکەی جل' : 'Space Jacket', 
                        'desc' => app()->getLocale() == 'ku' ? 'چاکەتی فەزایی' : 'Cosmic Jacket',
                        'price' => '$399',
                        'glow' => 'from-orange-500 to-red-500'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=800&q=80', 
                        'badge' => '🌙', 
                        'rank' => '#5',
                        'name' => app()->getLocale() == 'ku' ? 'مانگی جوان' : 'Moon Beauty', 
                        'desc' => app()->getLocale() == 'ku' ? 'بلوزی مانگی' : 'Lunar Blouse',
                        'price' => '$179',
                        'glow' => 'from-yellow-500 to-orange-500'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=800&q=80', 
                        'badge' => '🌌', 
                        'rank' => '#6',
                        'name' => app()->getLocale() == 'ku' ? 'نەبولای شان' : 'Nebula Style', 
                        'desc' => app()->getLocale() == 'ku' ? 'تیشەرتی نەبولا' : 'Nebula Tee',
                        'price' => '$129',
                        'glow' => 'from-teal-500 to-cyan-500'
                    ]
                ];
            @endphp
            
            @foreach($cosmicProducts as $index => $product)
            <div class="group relative">
                {{-- Cosmic Glow Effect --}}
                <div class="absolute -inset-4 bg-gradient-to-r {{ $product['glow'] }} rounded-3xl opacity-0 group-hover:opacity-30 blur-2xl transition-all duration-1000"></div>
                
                {{-- Main Card --}}
                <div class="relative bg-white/5 backdrop-blur-3xl rounded-3xl border border-white/10 overflow-hidden shadow-2xl hover:shadow-purple-500/20 transform hover:-translate-y-8 hover:scale-105 transition-all duration-1000">
                    
                    {{-- Product Image with Overlay --}}
                    <div class="relative h-96 overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-1500">
                        
                        {{-- Cosmic Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                        
                        {{-- Floating Rank Badge --}}
                        <div class="absolute top-6 left-6">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r {{ $product['glow'] }} rounded-2xl blur-lg opacity-80 animate-pulse"></div>
                                <div class="relative w-20 h-20 bg-white/10 backdrop-blur-2xl rounded-2xl border border-white/20 flex items-center justify-center shadow-2xl">
                                    <span class="text-2xl font-black text-white">{{ $product['rank'] }}</span>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Cosmic Badge --}}
                        <div class="absolute top-6 right-6">
                            <div class="w-16 h-16 bg-gradient-to-r {{ $product['glow'] }} rounded-full flex items-center justify-center text-3xl animate-bounce shadow-2xl">
                                {{ $product['badge'] }}
                            </div>
                        </div>
                        
                        {{-- Floating Particles --}}
                        <div class="absolute top-20 right-1/3 w-4 h-4 bg-white rounded-full animate-ping opacity-60"></div>
                        <div class="absolute bottom-24 left-1/4 w-3 h-3 bg-yellow-300 rounded-full animate-pulse opacity-80"></div>
                        <div class="absolute top-1/2 left-12 w-2 h-2 bg-cyan-300 rounded-full animate-bounce opacity-70"></div>
                    </div>
                    
                    {{-- Cosmic Content --}}
                    <div class="p-8">
                        <div class="text-center">
                            {{-- Product Name --}}
                            <h3 class="text-3xl font-black text-white mb-3 group-hover:bg-gradient-to-r group-hover:{{ $product['glow'] }} group-hover:bg-clip-text group-hover:text-transparent transition-all duration-500">
                                {{ $product['name'] }}
                            </h3>
                            
                            {{-- Description --}}
                            <p class="text-lg text-white/70 mb-6">{{ $product['desc'] }}</p>
                            
                            {{-- Price with Glow --}}
                            <div class="flex items-center justify-center mb-8">
                                <span class="text-4xl font-black bg-gradient-to-r {{ $product['glow'] }} bg-clip-text text-transparent">
                                    {{ $product['price'] }}
                                </span>
                            </div>
                            
                            {{-- Cosmic Rating --}}
                            <div class="flex items-center justify-center gap-2 mb-8">
                                @for($i = 1; $i <= 5; $i++)
                                    <div class="text-yellow-400 text-xl animate-pulse" style="animation-delay: {{ $i * 0.2 }}s;">
                                        ⭐
                                    </div>
                                @endfor
                            </div>
                            
                            {{-- Launch Button --}}
                            <div class="opacity-0 group-hover:opacity-100 transform translate-y-8 group-hover:translate-y-0 transition-all duration-700">
                                <button class="relative overflow-hidden px-8 py-4 bg-gradient-to-r {{ $product['glow'] }} text-white font-black rounded-full shadow-2xl hover:shadow-lg transform hover:scale-110 transition-all duration-300 text-lg">
                                    <span class="relative flex items-center gap-3">
                                        <span>{{ app()->getLocale() == 'ku' ? 'فڕین بکە' : (app()->getLocale() == 'ar' ? 'انطلق' : 'LAUNCH') }}</span>
                                        <span class="text-xl">🚀</span>
                                    </span>
                                    
                                    {{-- Shimmer Effect --}}
                                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -skew-x-12 translate-x-[-200%] group-hover:translate-x-[200%] transition-transform duration-1000"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Border Glow --}}
                    <div class="absolute inset-0 rounded-3xl ring-0 group-hover:ring-2 ring-white/20 transition-all duration-1000"></div>
                </div>
            </div>
            @endforeach
        </div>
        
        {{-- Cosmic CTA --}}
        <div class="text-center mt-32">
            <a href="{{ route('products.index') }}" 
               class="group relative inline-flex items-center gap-6 px-20 py-8 bg-gradient-to-r from-pink-600 via-purple-600 to-cyan-600 text-white font-black rounded-full shadow-2xl hover:shadow-purple-500/50 transform hover:-translate-y-4 hover:scale-110 transition-all duration-700 text-3xl">
                
                {{-- Button Content --}}
                <span class="relative flex items-center gap-4">
                    <span class="text-4xl animate-spin" style="animation-duration: 20s;">🌌</span>
                    <span>{{ app()->getLocale() == 'ku' ? 'بچۆرە ناو کهکەشان' : (app()->getLocale() == 'ar' ? 'ادخل إلى المجرة' : 'ENTER GALAXY') }}</span>
                    <span class="text-4xl animate-bounce">🚀</span>
                </span>
                
                {{-- Cosmic Ripple Effect --}}
                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-pink-400/20 via-purple-400/20 to-cyan-400/20 opacity-0 group-hover:opacity-100 animate-ping"></div>
                
                {{-- Shimmer Animation --}}
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -skew-x-12 translate-x-[-300%] group-hover:translate-x-[300%] transition-transform duration-1500 rounded-full"></div>
            </a>
        </div>
    </div>
</section>