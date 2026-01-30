<x-layouts.main>
    @php
        $locale = app()->getLocale();
        $isRtl = in_array($locale, ['ku', 'ar']);
    @endphp
    
    <div class="min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30">
                        <i class="fa-solid fa-gear text-white text-xl"></i>
                    </div>
                    {{ $locale == 'ku' ? 'ڕێکخستنەکان' : ($locale == 'ar' ? 'الإعدادات' : 'Settings') }}
                </h1>
                <p class="text-white/60 mt-2">
                    {{ $locale == 'ku' ? 'ڕێکخستنی هەژمار و ئامرازەکانی خۆت' : ($locale == 'ar' ? 'إدارة حسابك وتفضيلاتك' : 'Manage your account and preferences') }}
                </p>
            </div>

            <div class="grid gap-6">
                
                {{-- ═══════════════════════════════════════════════════════════════
                     👤 PROFILE SECTION
                ═══════════════════════════════════════════════════════════════ --}}
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl p-6 border border-white/10">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-user text-white"></i>
                        </div>
                        {{ $locale == 'ku' ? 'زانیاری کەسی' : ($locale == 'ar' ? 'المعلومات الشخصية' : 'Personal Information') }}
                    </h2>
                    
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        {{-- Profile Picture --}}
                        <div class="flex flex-col items-center gap-3">
                            <div class="w-24 h-24 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <button class="text-sm text-cyan-400 hover:text-cyan-300 transition-colors">
                                <i class="fa-solid fa-camera mr-1"></i>
                                {{ $locale == 'ku' ? 'گۆڕین' : ($locale == 'ar' ? 'تغيير' : 'Change') }}
                            </button>
                        </div>
                        
                        {{-- Profile Form --}}
                        <div class="flex-1 grid gap-4">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-white/60 text-sm mb-2">{{ $locale == 'ku' ? 'ناو' : ($locale == 'ar' ? 'الاسم' : 'Name') }}</label>
                                    <input type="text" value="{{ auth()->user()->name }}" 
                                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-white/60 text-sm mb-2">{{ $locale == 'ku' ? 'ئیمەیڵ' : ($locale == 'ar' ? 'البريد الإلكتروني' : 'Email') }}</label>
                                    <input type="email" value="{{ auth()->user()->email }}" 
                                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 outline-none transition-all">
                                </div>
                            </div>
                            <div>
                                <label class="block text-white/60 text-sm mb-2">{{ $locale == 'ku' ? 'ژمارەی مۆبایل' : ($locale == 'ar' ? 'رقم الهاتف' : 'Phone Number') }}</label>
                                <input type="tel" placeholder="{{ $locale == 'ku' ? 'ژمارەی مۆبایل' : '+964...' }}" 
                                       class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 outline-none transition-all">
                            </div>
                            <button class="self-start px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all">
                                <i class="fa-solid fa-save mr-2"></i>
                                {{ $locale == 'ku' ? 'پاشەکەوتکردن' : ($locale == 'ar' ? 'حفظ التغييرات' : 'Save Changes') }}
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ═══════════════════════════════════════════════════════════════
                     🎨 APPEARANCE SECTION
                ═══════════════════════════════════════════════════════════════ --}}
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl p-6 border border-white/10">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-palette text-white"></i>
                        </div>
                        {{ $locale == 'ku' ? 'ڕواڵەت' : ($locale == 'ar' ? 'المظهر' : 'Appearance') }}
                    </h2>
                    
                    <div class="space-y-4">
                        {{-- Dark Mode --}}
                        <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/10 hover:border-white/20 transition-all">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-moon text-purple-400 text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold">{{ $locale == 'ku' ? 'دۆخی تاریک' : ($locale == 'ar' ? 'الوضع الداكن' : 'Dark Mode') }}</p>
                                    <p class="text-white/50 text-sm">{{ $locale == 'ku' ? 'تەماشاکردنی لاپەڕەکان بە باکگراوندی تاریک' : ($locale == 'ar' ? 'عرض الصفحات بخلفية داكنة' : 'View pages with dark background') }}</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-14 h-7 bg-white/20 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-purple-500"></div>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- ═══════════════════════════════════════════════════════════════
                     🌍 LANGUAGE SECTION
                ═══════════════════════════════════════════════════════════════ --}}
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl p-6 border border-white/10">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-language text-white"></i>
                        </div>
                        {{ $locale == 'ku' ? 'زمان' : ($locale == 'ar' ? 'اللغة' : 'Language') }}
                    </h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <a href="{{ route('language.switch', 'ku') }}" 
                           class="flex items-center gap-4 p-4 rounded-2xl border-2 transition-all {{ $locale == 'ku' ? 'bg-cyan-500/20 border-cyan-500 shadow-lg shadow-cyan-500/20' : 'bg-white/5 border-white/10 hover:border-white/30' }}">
                            <span class="text-3xl">🇮🇶</span>
                            <div>
                                <p class="text-white font-bold">کوردی</p>
                                <p class="text-white/50 text-sm">Kurdish</p>
                            </div>
                            @if($locale == 'ku')
                                <i class="fa-solid fa-check {{ $isRtl ? 'mr-auto' : 'ml-auto' }} text-cyan-400"></i>
                            @endif
                        </a>
                        
                        <a href="{{ route('language.switch', 'ar') }}" 
                           class="flex items-center gap-4 p-4 rounded-2xl border-2 transition-all {{ $locale == 'ar' ? 'bg-cyan-500/20 border-cyan-500 shadow-lg shadow-cyan-500/20' : 'bg-white/5 border-white/10 hover:border-white/30' }}">
                            <span class="text-3xl">🇸🇦</span>
                            <div>
                                <p class="text-white font-bold">عربي</p>
                                <p class="text-white/50 text-sm">Arabic</p>
                            </div>
                            @if($locale == 'ar')
                                <i class="fa-solid fa-check {{ $isRtl ? 'mr-auto' : 'ml-auto' }} text-cyan-400"></i>
                            @endif
                        </a>
                        
                        <a href="{{ route('language.switch', 'en') }}" 
                           class="flex items-center gap-4 p-4 rounded-2xl border-2 transition-all {{ $locale == 'en' ? 'bg-cyan-500/20 border-cyan-500 shadow-lg shadow-cyan-500/20' : 'bg-white/5 border-white/10 hover:border-white/30' }}">
                            <span class="text-3xl">🇺🇸</span>
                            <div>
                                <p class="text-white font-bold">English</p>
                                <p class="text-white/50 text-sm">English</p>
                            </div>
                            @if($locale == 'en')
                                <i class="fa-solid fa-check {{ $isRtl ? 'mr-auto' : 'ml-auto' }} text-cyan-400"></i>
                            @endif
                        </a>
                    </div>
                </div>

                {{-- ═══════════════════════════════════════════════════════════════
                     🔔 NOTIFICATIONS SECTION
                ═══════════════════════════════════════════════════════════════ --}}
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl p-6 border border-white/10">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-bell text-white"></i>
                        </div>
                        {{ $locale == 'ku' ? 'ئاگادارکردنەوەکان' : ($locale == 'ar' ? 'الإشعارات' : 'Notifications') }}
                    </h2>
                    
                    <div class="space-y-4">
                        {{-- Email Notifications --}}
                        <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/10">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-envelope text-cyan-400 text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold">{{ $locale == 'ku' ? 'ئاگادارکردنەوەی ئیمەیڵ' : ($locale == 'ar' ? 'إشعارات البريد' : 'Email Notifications') }}</p>
                                    <p class="text-white/50 text-sm">{{ $locale == 'ku' ? 'وەرگرتنی هەواڵ لە ڕێگەی ئیمەیڵ' : ($locale == 'ar' ? 'تلقي التحديثات عبر البريد' : 'Receive updates via email') }}</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-14 h-7 bg-white/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-cyan-500"></div>
                            </label>
                        </div>
                        
                        {{-- Order Updates --}}
                        <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/10">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-emerald-500/20 to-green-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-box text-emerald-400 text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold">{{ $locale == 'ku' ? 'نوێکاری داواکاری' : ($locale == 'ar' ? 'تحديثات الطلب' : 'Order Updates') }}</p>
                                    <p class="text-white/50 text-sm">{{ $locale == 'ku' ? 'ئاگاداربکرێیتەوە کاتێ داواکاری گۆڕانی هەبوو' : ($locale == 'ar' ? 'إعلامك عند تغيير حالة الطلب' : 'Get notified when order status changes') }}</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-14 h-7 bg-white/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500"></div>
                            </label>
                        </div>
                        
                        {{-- Promotions --}}
                        <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/10">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-pink-500/20 to-rose-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-gift text-pink-400 text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold">{{ $locale == 'ku' ? 'ئۆفەر و داشکاندن' : ($locale == 'ar' ? 'العروض والخصومات' : 'Promotions & Discounts') }}</p>
                                    <p class="text-white/50 text-sm">{{ $locale == 'ku' ? 'ئاگاداربکرێیتەوە بۆ ئۆفەرە تایبەتەکان' : ($locale == 'ar' ? 'إعلامك بالعروض الخاصة' : 'Get notified about special offers') }}</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-14 h-7 bg-white/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-pink-500"></div>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- ═══════════════════════════════════════════════════════════════
                     🔐 SECURITY SECTION
                ═══════════════════════════════════════════════════════════════ --}}
                <div class="bg-white/5 backdrop-blur-xl rounded-3xl p-6 border border-white/10">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-rose-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved text-white"></i>
                        </div>
                        {{ $locale == 'ku' ? 'پاراستن' : ($locale == 'ar' ? 'الأمان' : 'Security') }}
                    </h2>
                    
                    <div class="space-y-4">
                        {{-- Change Password --}}
                        <div class="p-4 bg-white/5 rounded-2xl border border-white/10">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500/20 to-orange-500/20 rounded-xl flex items-center justify-center">
                                        <i class="fa-solid fa-key text-amber-400 text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold">{{ $locale == 'ku' ? 'گۆڕینی وشەی نهێنی' : ($locale == 'ar' ? 'تغيير كلمة المرور' : 'Change Password') }}</p>
                                        <p class="text-white/50 text-sm">{{ $locale == 'ku' ? 'وشەی نهێنی بەهێز دابنێ' : ($locale == 'ar' ? 'استخدم كلمة مرور قوية' : 'Use a strong password') }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid gap-4">
                                <div>
                                    <label class="block text-white/60 text-sm mb-2">{{ $locale == 'ku' ? 'وشەی نهێنی ئێستا' : ($locale == 'ar' ? 'كلمة المرور الحالية' : 'Current Password') }}</label>
                                    <input type="password" placeholder="••••••••" 
                                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-amber-500 focus:ring-1 focus:ring-amber-500 outline-none transition-all">
                                </div>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-white/60 text-sm mb-2">{{ $locale == 'ku' ? 'وشەی نهێنی نوێ' : ($locale == 'ar' ? 'كلمة المرور الجديدة' : 'New Password') }}</label>
                                        <input type="password" placeholder="••••••••" 
                                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-amber-500 focus:ring-1 focus:ring-amber-500 outline-none transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-white/60 text-sm mb-2">{{ $locale == 'ku' ? 'دووبارە کردنەوە' : ($locale == 'ar' ? 'تأكيد كلمة المرور' : 'Confirm Password') }}</label>
                                        <input type="password" placeholder="••••••••" 
                                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-amber-500 focus:ring-1 focus:ring-amber-500 outline-none transition-all">
                                    </div>
                                </div>
                                <button class="self-start px-6 py-3 bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold rounded-xl hover:shadow-lg hover:shadow-amber-500/30 transition-all">
                                    <i class="fa-solid fa-lock mr-2"></i>
                                    {{ $locale == 'ku' ? 'نوێکردنەوەی وشەی نهێنی' : ($locale == 'ar' ? 'تحديث كلمة المرور' : 'Update Password') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ═══════════════════════════════════════════════════════════════
                     ⚠️ DANGER ZONE
                ═══════════════════════════════════════════════════════════════ --}}
                <div class="bg-red-500/10 backdrop-blur-xl rounded-3xl p-6 border border-red-500/20">
                    <h2 class="text-xl font-bold text-red-400 mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 bg-red-500/20 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-triangle-exclamation text-red-400"></i>
                        </div>
                        {{ $locale == 'ku' ? 'ناوچەی مەترسی' : ($locale == 'ar' ? 'منطقة الخطر' : 'Danger Zone') }}
                    </h2>
                    
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 p-4 bg-red-500/10 rounded-2xl border border-red-500/20">
                        <div>
                            <p class="text-white font-semibold">{{ $locale == 'ku' ? 'سڕینەوەی هەژمار' : ($locale == 'ar' ? 'حذف الحساب' : 'Delete Account') }}</p>
                            <p class="text-white/50 text-sm">{{ $locale == 'ku' ? 'هەژمارەکەت و هەموو داتاکانت دەسڕێتەوە' : ($locale == 'ar' ? 'سيتم حذف حسابك وجميع بياناتك' : 'Your account and all data will be deleted') }}</p>
                        </div>
                        <button class="px-6 py-3 bg-red-500/20 text-red-400 font-bold rounded-xl border border-red-500/30 hover:bg-red-500 hover:text-white transition-all">
                            <i class="fa-solid fa-trash mr-2"></i>
                            {{ $locale == 'ku' ? 'سڕینەوەی هەژمار' : ($locale == 'ar' ? 'حذف الحساب' : 'Delete Account') }}
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.main>
