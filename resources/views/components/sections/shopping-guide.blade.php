{{-- Shopping Guide Section --}}
<section class="py-20 bg-gradient-to-br from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-gradient-to-r from-indigo-100 to-purple-100 rounded-full text-indigo-600 text-sm font-semibold mb-6">
                {{ app()->getLocale() == 'ku' ? '🛍️ ڕێبەری کڕین' : (app()->getLocale() == 'ar' ? '🛍️ دليل التسوق' : '🛍️ Shopping Guide') }}
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                {{ app()->getLocale() == 'ku' ? 'چۆن' : (app()->getLocale() == 'ar' ? 'كيف' : 'How to') }}
                <span class="bg-gradient-to-r from-indigo-500 to-purple-500 bg-clip-text text-transparent">
                    {{ app()->getLocale() == 'ku' ? 'بکڕیت؟' : (app()->getLocale() == 'ar' ? 'تتسوق؟' : 'Shop?') }}
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ app()->getLocale() == 'ku' ? 'ڕێبەرێکی ئاسان بۆ ئەوەی چۆن بە باشترین شێوە لە فرۆشگاکەمان بکڕیت' : (app()->getLocale() == 'ar' ? 'دليل بسيط لكيفية التسوق بأفضل طريقة من متجرنا' : 'A simple guide on how to shop from our store in the best way possible') }}
            </p>
        </div>

        {{-- Shopping Steps --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
            @php
            $steps = [
                [
                    'number' => '01',
                    'icon' => 'fa-magnifying-glass',
                    'title_ku' => 'گەڕان و دۆزینەوە',
                    'title_ar' => 'البحث والاكتشاف',
                    'title_en' => 'Browse & Discover',
                    'desc_ku' => 'لە نێو هەزاران بەرهەمی جیاواز بگەڕێیت و ئەوەی کە دەتەوێت بدۆزەرەوە',
                    'desc_ar' => 'تصفح من بين آلاف المنتجات المتنوعة واعثر على ما تريده',
                    'desc_en' => 'Browse through thousands of diverse products and find what you need',
                    'color' => 'blue'
                ],
                [
                    'number' => '02',
                    'icon' => 'fa-heart',
                    'title_ku' => 'زیادکردن بۆ خۆشەویستەکان',
                    'title_ar' => 'إضافة للمفضلة',
                    'title_en' => 'Add to Wishlist',
                    'desc_ku' => 'بەرهەمەکانی بەدڵت زیاد بکە بۆ لیستی خۆشەویستەکانت بۆ کڕینی دواتر',
                    'desc_ar' => 'أضف المنتجات التي تعجبك إلى قائمة المفضلة للشراء لاحقاً',
                    'desc_en' => 'Add your favorite products to wishlist for later purchase',
                    'color' => 'red'
                ],
                [
                    'number' => '03',
                    'icon' => 'fa-shopping-cart',
                    'title_ku' => 'زیادکردن بۆ سەبەتە',
                    'title_ar' => 'إضافة إلى السلة',
                    'title_en' => 'Add to Cart',
                    'desc_ku' => 'بەرهەمەکانت زیاد بکە بۆ سەبەتی کڕین و قەبارە و بڕەکە دیاری بکە',
                    'desc_ar' => 'أضف المنتجات إلى سلة التسوق وحدد المقاس والكمية',
                    'desc_en' => 'Add products to your cart and select size and quantity',
                    'color' => 'green'
                ],
                [
                    'number' => '04',
                    'icon' => 'fa-credit-card',
                    'title_ku' => 'پارەدان و داواکردن',
                    'title_ar' => 'الدفع والطلب',
                    'title_en' => 'Checkout & Pay',
                    'desc_ku' => 'زانیاری گەیاندنەکەت پڕ بکەرەوە و بە ئاسانی پارەکەت بدە',
                    'desc_ar' => 'اكمل معلومات التوصيل وادفع بسهولة',
                    'desc_en' => 'Complete delivery info and pay easily',
                    'color' => 'purple'
                ]
            ];
            @endphp

            @foreach($steps as $index => $step)
                <div class="relative group">
                    {{-- Connection Line (except for last item) --}}
                    @if($index < count($steps) - 1)
                        <div class="hidden lg:block absolute top-16 left-1/2 w-full h-0.5 bg-gradient-to-r from-{{ $step['color'] }}-300 to-transparent transform translate-x-8 z-0"></div>
                    @endif
                    
                    {{-- Step Card --}}
                    <div class="relative bg-white rounded-3xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl hover:shadow-{{ $step['color'] }}-500/20 transition-all duration-500 hover:-translate-y-2 z-10">
                        {{-- Step Number --}}
                        <div class="absolute -top-4 -left-4 w-12 h-12 bg-gradient-to-br from-{{ $step['color'] }}-500 to-{{ $step['color'] }}-600 rounded-2xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            {{ $step['number'] }}
                        </div>
                        
                        {{-- Icon --}}
                        <div class="w-20 h-20 bg-gradient-to-br from-{{ $step['color'] }}-100 to-{{ $step['color'] }}-200 rounded-3xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid {{ $step['icon'] }} text-3xl text-{{ $step['color'] }}-600"></i>
                        </div>
                        
                        {{-- Title --}}
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">
                            @if(app()->getLocale() == 'ku')
                                {{ $step['title_ku'] }}
                            @elseif(app()->getLocale() == 'ar')
                                {{ $step['title_ar'] }}
                            @else
                                {{ $step['title_en'] }}
                            @endif
                        </h3>
                        
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