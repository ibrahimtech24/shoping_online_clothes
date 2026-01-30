{{-- 🎨 REDESIGNED Shopping Guide Section - Ultra Modern & Fully Responsive --}}
<section class="relative py-24 md:py-32 overflow-hidden bg-gradient-to-br from-slate-50 via-white to-purple-50">
    {{-- Animated Background Elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-gradient-to-br from-pink-400/20 to-orange-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-cyan-300/10 via-purple-300/10 to-pink-300/10 rounded-full blur-3xl animate-spin" style="animation-duration: 20s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- ✨ Enhanced Section Header --}}
        <div class="text-center mb-20">
            <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)" 
                 x-show="show" x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                 class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full text-white text-sm md:text-base font-bold mb-8 shadow-xl shadow-indigo-500/30 hover:shadow-2xl hover:shadow-indigo-500/50 transition-all duration-300">
                <i class="fa-solid fa-shopping-bag animate-bounce"></i>
                <span>{{ app()->getLocale() == 'ku' ? 'ڕێبەری کڕینی ئۆنلاین' : (app()->getLocale() == 'ar' ? 'دليل التسوق الإلكتروني' : 'Online Shopping Guide') }}</span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-7xl font-black text-gray-900 mb-6 leading-tight">
                <span class="inline-block" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)" 
                      x-show="show" x-transition:enter="transition ease-out duration-700"
                      x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0">
                    {{ app()->getLocale() == 'ku' ? 'چۆن' : (app()->getLocale() == 'ar' ? 'كيف' : 'How to') }}
                </span>
                <br class="sm:hidden">
                <span class="relative inline-block" x-data="{ show: false }" x-init="setTimeout(() => show = true, 500)" 
                      x-show="show" x-transition:enter="transition ease-out duration-700"
                      x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-gradient">
                        {{ app()->getLocale() == 'ku' ? 'بکڕیت؟' : (app()->getLocale() == 'ar' ? 'تتسوق؟' : 'Shop Smart?') }}
                    </span>
                    <svg class="absolute -bottom-2 left-0 w-full h-3" viewBox="0 0 300 10" preserveAspectRatio="none">
                        <path d="M0,5 Q75,0 150,5 T300,5" stroke="url(#gradient)" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#6366f1;stop-opacity:1" />
                                <stop offset="50%" style="stop-color:#a855f7;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#ec4899;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
            </h2>
            
            <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed"
               x-data="{ show: false }" x-init="setTimeout(() => show = true, 700)" 
               x-show="show" x-transition:enter="transition ease-out duration-700"
               x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                {{ app()->getLocale() == 'ku' ? 'ڕێنماییەکی تەواو و ئاسان بۆ بژاردن و کڕینی باشترین بەرهەمەکان بە شێوەیەکی زیرەکانە و پارەت پاشەکەوت بکەیت' : (app()->getLocale() == 'ar' ? 'دليل كامل وبسيط لاختيار وشراء أفضل المنتجات بطريقة ذكية وتوفير المال' : 'A complete and simple guide to choosing and buying the best products smartly and save money') }}
            </p>
        </div>

        {{-- 🎯 Shopping Steps - Modern Cards with Animations --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mb-24">
            @php
            $steps = [
                [
                    'number' => '01',
                    'icon' => 'fa-magnifying-glass',
                    'gradient' => 'from-blue-500 to-cyan-500',
                    'bg' => 'from-blue-50 to-cyan-50',
                    'title_ku' => 'گەڕان و دۆزینەوە',
                    'title_ar' => 'البحث والاكتشاف',
                    'title_en' => 'Browse & Discover',
                    'desc_ku' => 'گەڕان لە کۆمەڵەیەکی زۆر لە بەرهەمی جۆراوجۆر و دۆزینەوەی بەرهەمە نایابەکان',
                    'desc_ar' => 'تصفح مجموعة كبيرة من المنتجات المتنوعة واكتشف المنتجات الفريدة',
                    'desc_en' => 'Browse a huge collection of diverse products and find unique items',
                ],
                [
                    'number' => '02',
                    'icon' => 'fa-heart',
                    'gradient' => 'from-pink-500 to-rose-500',
                    'bg' => 'from-pink-50 to-rose-50',
                    'title_ku' => 'خۆشەویستەکان',
                    'title_ar' => 'المفضلة',
                    'title_en' => 'Add to Wishlist',
                    'desc_ku' => 'بەرهەمە دڵخوازەکانت زیاد بکە بۆ لیستی خۆشەویستەکان بۆ کڕینی دواتر',
                    'desc_ar' => 'أضف المنتجات المفضلة إلى القائمة للشراء لاحقاً',
                    'desc_en' => 'Save your favorite products to wishlist for future purchase',
                ],
                [
                    'number' => '03',
                    'icon' => 'fa-shopping-cart',
                    'gradient' => 'from-green-500 to-emerald-500',
                    'bg' => 'from-green-50 to-emerald-50',
                    'title_ku' => 'زیادکردن بۆ سەبەتە',
                    'title_ar' => 'إضافة إلى السلة',
                    'title_en' => 'Add to Cart',
                    'desc_ku' => 'بەرهەمەکان زیاد بکە بۆ سەبەتی کڕین و قەبارە و بڕی مەبەستت دیاری بکە',
                    'desc_ar' => 'أضف المنتجات إلى السلة وحدد المقاس والكمية المطلوبة',
                    'desc_en' => 'Add products to cart and select your desired size and quantity',
                ],
                [
                    'number' => '04',
                    'icon' => 'fa-credit-card',
                    'gradient' => 'from-purple-500 to-indigo-500',
                    'bg' => 'from-purple-50 to-indigo-50',
                    'title_ku' => 'پارەدان و وەرگرتن',
                    'title_ar' => 'الدفع والاستلام',
                    'title_en' => 'Checkout & Receive',
                    'desc_ku' => 'زانیارییەکانت تەواو بکە، پارە بدە و بەرهەمەکانت بە خێرایی وەربگرە',
                    'desc_ar' => 'أكمل بياناتك وادفع واستلم منتجاتك بسرعة',
                    'desc_en' => 'Complete your info, pay securely and receive products fast',
                ]
            ];
            @endphp

            @foreach($steps as $index => $step)
                <div class="relative group" 
                     x-data="{ show: false }" 
                     x-init="setTimeout(() => show = true, {{ 900 + ($index * 150) }})" 
                     x-show="show" 
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-y-10" 
                     x-transition:enter-end="opacity-100 translate-y-0">
                    
                    {{-- Connection Line (Desktop Only) --}}
                    @if($index < count($steps) - 1)
                        <div class="hidden lg:block absolute top-20 left-1/2 w-full h-1 bg-gradient-to-r {{ $step['gradient'] }}/20 z-0">
                            <div class="h-full bg-gradient-to-r {{ $step['gradient'] }} animate-pulse" style="width: 0%; animation: fillLine 2s ease-in-out forwards {{ 1.2 + ($index * 0.3) }}s;"></div>
                        </div>
                    @endif
                    
                    {{-- Step Card --}}
                    <div class="relative bg-white rounded-3xl shadow-xl border-2 border-transparent hover:border-gradient-to-r {{ $step['gradient'] }} p-8 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl z-10 h-full">
                        {{-- Step Number Badge --}}
                        <div class="absolute -top-5 -left-5 w-16 h-16 bg-gradient-to-br {{ $step['gradient'] }} rounded-2xl flex items-center justify-center text-white font-black text-xl shadow-2xl transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                            {{ $step['number'] }}
                            <div class="absolute inset-0 bg-white/20 rounded-2xl blur-sm group-hover:blur-md transition-all"></div>
                        </div>
                        
                        {{-- Icon Container --}}
                        <div class="mb-6 flex justify-center">
                            <div class="relative w-24 h-24 bg-gradient-to-br {{ $step['bg'] }} rounded-3xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                                <i class="fa-solid {{ $step['icon'] }} text-4xl bg-gradient-to-br {{ $step['gradient'] }} bg-clip-text text-transparent"></i>
                                <div class="absolute inset-0 bg-gradient-to-br {{ $step['gradient'] }} opacity-0 group-hover:opacity-10 rounded-3xl transition-opacity duration-300"></div>
                            </div>
                        </div>
                        
                        {{-- Title --}}
                        <h3 class="text-xl md:text-2xl font-black text-gray-900 mb-4 text-center group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:{{ $step['gradient'] }} group-hover:bg-clip-text transition-all duration-300">
                            @if(app()->getLocale() == 'ku')
                                {{ $step['title_ku'] }}
                            @elseif(app()->getLocale() == 'ar')
                                {{ $step['title_ar'] }}
                            @else
                                {{ $step['title_en'] }}
                            @endif
                        </h3>
                        
                        {{-- Description --}}
                        <p class="text-gray-600 text-center leading-relaxed text-sm md:text-base">
                            @if(app()->getLocale() == 'ku')
                                {{ $step['desc_ku'] }}
                            @elseif(app()->getLocale() == 'ar')
                                {{ $step['desc_ar'] }}
                            @else
                                {{ $step['desc_en'] }}
                            @endif
                        </p>

                        {{-- Decorative Corner --}}
                        <div class="absolute bottom-4 right-4 w-12 h-12 bg-gradient-to-br {{ $step['gradient'] }} opacity-5 rounded-full blur-xl group-hover:opacity-20 transition-opacity"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <style>
            @keyframes fillLine {
                from { width: 0%; }
                to { width: 100%; }
            }
            @keyframes gradient {
                0%, 100% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
            }
            .animate-gradient {
                background-size: 200% auto;
                animation: gradient 3s ease infinite;
            }
        </style>

                        {{-- Description --}}
                        <p class="text-gray-600 text-center leading-relaxed">
                            @if(app()->getLocale() == 'ku')
                                {{ $step['desc_ku'] }}
                            @elseif(app()->getLocale() == 'ar')
                                {{ $step['desc_ar'] }}
                            @else
                                {{ $step['desc_en'] }}
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
            {{-- Shopping Benefits --}}
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-star text-white"></i>
                    </div>
                    {{ app()->getLocale() == 'ku' ? 'بەهاکانی کڕین لەلامان' : (app()->getLocale() == 'ar' ? 'مزايا التسوق معنا' : 'Why Shop With Us?' }}
                </h3>
                
                <div class="space-y-6">
                    @foreach([
                        ['icon' => 'fa-truck-fast', 'title_ku' => 'گەیاندنی خێرا', 'title_ar' => 'توصيل سريع', 'title_en' => 'Fast Delivery', 'desc_ku' => 'گەیاندن لە ماوەی 24-48 کاتژمێر', 'desc_ar' => 'توصيل خلال 24-48 ساعة', 'desc_en' => 'Delivery within 24-48 hours'],
                        ['icon' => 'fa-shield-check', 'title_ku' => 'گەرەنتی کوالیتی', 'title_ar' => 'ضمان الجودة', 'title_en' => 'Quality Guarantee', 'desc_ku' => 'گەرەنتی گەڕاندنەوە لە ماوەی 30 ڕۆژ', 'desc_ar' => 'ضمان الإرجاع خلال 30 يوماً', 'desc_en' => '30-day return guarantee'],
                        ['icon' => 'fa-credit-card', 'title_ku' => 'پارەدانی ئاسان', 'title_ar' => 'دفع آمن', 'title_en' => 'Secure Payment', 'desc_ku' => 'پارەدان بە شێوەی سەلامەت و ئاسان', 'desc_ar' => 'دفع آمن وسهل', 'desc_en' => 'Safe and easy payment'],
                        ['icon' => 'fa-headset', 'title_ku' => 'پشتگیری ٢٤/٧', 'title_ar' => 'دعم 24/7', 'title_en' => '24/7 Support', 'desc_ku' => 'پشتگیری کڕیاران لە هەموو کاتێک', 'desc_ar' => 'دعم العملاء في أي وقت', 'desc_en' => 'Customer support anytime']
                    ] as $benefit)
                        <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-gray-50 transition-colors">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid {{ $benefit['icon'] }} text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">
                                    @if(app()->getLocale() == 'ku')
                                        {{ $benefit['title_ku'] }}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{ $benefit['title_ar'] }}
                                    @else
                                        {{ $benefit['title_en'] }}
                                    @endif
                                </h4>
                                <p class="text-gray-600">
                                    @if(app()->getLocale() == 'ku')
                                        {{ $benefit['desc_ku'] }}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{ $benefit['desc_ar'] }}
                                    @else
                                        {{ $benefit['desc_en'] }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Payment Methods --}}
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-credit-card text-white"></i>
                    </div>
                    {{ app()->getLocale() == 'ku' ? 'شێوازەکانی پارەدان' : (app()->getLocale() == 'ar' ? 'طرق الدفع' : 'Payment Methods') }}
                </h3>

                <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 border border-gray-200">
                    {{-- Payment Options --}}
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 mb-8">
                        @foreach([
                            ['name' => 'Visa', 'icon' => 'fab fa-cc-visa', 'color' => 'blue-600'],
                            ['name' => 'Mastercard', 'icon' => 'fab fa-cc-mastercard', 'color' => 'red-500'],
                            ['name' => 'PayPal', 'icon' => 'fab fa-paypal', 'color' => 'blue-500'],
                            ['name' => 'Apple Pay', 'icon' => 'fab fa-apple-pay', 'color' => 'gray-800'],
                            ['name' => 'Google Pay', 'icon' => 'fab fa-google-pay', 'color' => 'green-500'],
                            ['name' => 'Cash', 'icon' => 'fas fa-money-bill-wave', 'color' => 'green-600']
                        ] as $payment)
                            <div class="flex flex-col items-center p-4 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                                <div class="w-12 h-12 flex items-center justify-center mb-3">
                                    <i class="{{ $payment['icon'] }} text-3xl text-{{ $payment['color'] }}"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">{{ $payment['name'] }}</span>
                            </div>
                        @endforeach
                    </div>

                    {{-- Security Features --}}
                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-900 flex items-center gap-2">
                            <i class="fa-solid fa-lock text-green-500"></i>
                            {{ app()->getLocale() == 'ku' ? 'پاراستنی پارەدان' : (app()->getLocale() == 'ar' ? 'أمان الدفع' : 'Payment Security') }}
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach([
                                ['icon' => 'fa-shield-virus', 'text_ku' => 'SSL شفرکردن', 'text_ar' => 'تشفير SSL', 'text_en' => 'SSL Encryption'],
                                ['icon' => 'fa-user-shield', 'text_ku' => 'پاراستنی زانیاری', 'text_ar' => 'حماية البيانات', 'text_en' => 'Data Protection'],
                                ['icon' => 'fa-certificate', 'text_ku' => 'بڕوانامەی ئاسایش', 'text_ar' => 'شهادة الأمان', 'text_en' => 'Security Certificate'],
                                ['icon' => 'fa-eye-slash', 'text_ku' => 'شاردنەوەی زانیاری', 'text_ar' => 'خصوصية البيانات', 'text_en' => 'Privacy Protected']
                            ] as $security)
                                <div class="flex items-center gap-3">
                                    <i class="fa-solid {{ $security['icon'] }} text-green-500"></i>
                                    <span class="text-sm text-gray-600">
                                        @if(app()->getLocale() == 'ku')
                                            {{ $security['text_ku'] }}
                                        @elseif(app()->getLocale() == 'ar')
                                            {{ $security['text_ar'] }}
                                        @else
                                            {{ $security['text_en'] }}
                                        @endif
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Call to Action --}}
        <div class="text-center bg-gradient-to-br from-indigo-500 to-purple-600 rounded-3xl p-12 text-white">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-3xl font-bold mb-4">
                    {{ app()->getLocale() == 'ku' ? 'ئامادەیت بۆ دەستپێکردن؟' : (app()->getLocale() == 'ar' ? 'مستعد للبدء؟' : 'Ready to Start Shopping?') }}
                </h3>
                <p class="text-xl text-indigo-100 mb-8">
                    {{ app()->getLocale() == 'ku' ? 'هەزاران بەرهەمی جوان و کوالیتی بەرز چاوەڕێت دەکەن' : (app()->getLocale() == 'ar' ? 'آلاف المنتجات الجميلة وعالية الجودة في انتظارك' : 'Thousands of beautiful and high-quality products are waiting for you') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('products.index') }}" 
                       class="inline-flex items-center gap-3 bg-white text-indigo-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-colors shadow-lg">
                        <i class="fa-solid fa-shopping-bag"></i>
                        {{ app()->getLocale() == 'ku' ? 'دەست بە کڕین بکە' : (app()->getLocale() == 'ar' ? 'ابدأ التسوق' : 'Start Shopping') }}
                    </a>
                    <a href="{{ route('categories.index') }}" 
                       class="inline-flex items-center gap-3 bg-indigo-400 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-indigo-300 transition-colors">
                        <i class="fa-solid fa-layer-group"></i>
                        {{ app()->getLocale() == 'ku' ? 'گەڕان لە جۆرەکان' : (app()->getLocale() == 'ar' ? 'تصفح الفئات' : 'Browse Categories') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>