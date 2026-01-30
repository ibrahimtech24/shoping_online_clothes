<x-layouts.main pd="false">
    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🔐 PREMIUM LOGIN PAGE - Dark Theme with Glass Effects
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black flex items-center justify-center py-12 px-4">
        
        {{-- Magical Background Effects --}}
        <div class="fixed inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="w-full max-w-md relative z-10">
            {{-- Login Card --}}
            <div class="bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 shadow-2xl shadow-black/20 p-8 md:p-10">
                
                {{-- Header --}}
                <div class="text-center mb-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-cyan-500/30">
                        <i class="fa-solid fa-user text-white text-3xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-white mb-2">
                        {{ app()->getLocale() == 'ku' ? 'بەخێربێیتەوە' : (app()->getLocale() == 'ar' ? 'مرحباً بعودتك' : 'Welcome Back') }}
                    </h1>
                    <p class="text-white/50">
                        {{ app()->getLocale() == 'ku' ? 'بچۆ ژوورەوە بۆ هەژمارەکەت' : (app()->getLocale() == 'ar' ? 'سجّل الدخول إلى حسابك' : 'Sign in to your account') }}
                    </p>
                </div>

                {{-- Form --}}
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- Email Field --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-white/80 mb-2">
                            {{ app()->getLocale() == 'ku' ? 'ئیمەیڵ' : (app()->getLocale() == 'ar' ? 'البريد الإلكتروني' : 'Email') }}
                        </label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-white/40">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="w-full pr-12 pl-4 py-4 bg-white/5 border-2 border-white/10 rounded-2xl focus:border-cyan-500/50 focus:bg-white/10 focus:ring-0 outline-none transition-all text-white placeholder-white/30"
                                   placeholder="{{ app()->getLocale() == 'ku' ? 'ئیمەیڵەکەت تێبنووسە' : (app()->getLocale() == 'ar' ? 'أدخل بريدك الإلكتروني' : 'Enter your email') }}">
                        </div>
                        <x-form.error name="email" />
                    </div>

                    {{-- Password Field --}}
                    <div>
                        <label for="password" class="block text-sm font-medium text-white/80 mb-2">
                            {{ app()->getLocale() == 'ku' ? 'وشەی تێپەڕ' : (app()->getLocale() == 'ar' ? 'كلمة المرور' : 'Password') }}
                        </label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-white/40">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password"
                                   class="w-full pr-12 pl-4 py-4 bg-white/5 border-2 border-white/10 rounded-2xl focus:border-cyan-500/50 focus:bg-white/10 focus:ring-0 outline-none transition-all text-white placeholder-white/30"
                                   placeholder="{{ app()->getLocale() == 'ku' ? 'وشەی تێپەڕەکەت' : (app()->getLocale() == 'ar' ? 'أدخل كلمة المرور' : 'Enter your password') }}">
                        </div>
                        <x-form.error name="password" />
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" 
                            class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:-translate-y-0.5 transition-all flex items-center justify-center gap-3">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        {{ app()->getLocale() == 'ku' ? 'چوونە ژوورەوە' : (app()->getLocale() == 'ar' ? 'تسجيل الدخول' : 'Sign In') }}
                    </button>
                </form>

                {{-- Divider --}}
                <div class="my-8 flex items-center">
                    <div class="flex-1 border-t border-white/10"></div>
                    <span class="px-4 text-sm text-white/40">{{ app()->getLocale() == 'ku' ? 'یان' : (app()->getLocale() == 'ar' ? 'أو' : 'or') }}</span>
                    <div class="flex-1 border-t border-white/10"></div>
                </div>

                {{-- Register Link --}}
                <p class="text-center text-white/50">
                    {{ app()->getLocale() == 'ku' ? 'هەژمارت نیە؟' : (app()->getLocale() == 'ar' ? 'ليس لديك حساب؟' : "Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-cyan-400 font-semibold hover:text-cyan-300 transition-colors">
                        {{ app()->getLocale() == 'ku' ? 'هەژمار دروستبکە' : (app()->getLocale() == 'ar' ? 'أنشئ حساباً' : 'Create one') }}
                    </a>
                </p>
            </div>

            {{-- Back to Home --}}
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-white/50 hover:text-white transition-colors">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>{{ app()->getLocale() == 'ku' ? 'گەڕانەوە بۆ ماڵەوە' : (app()->getLocale() == 'ar' ? 'العودة للرئيسية' : 'Back to Home') }}</span>
                </a>
            </div>
        </div>
    </div>
</x-layouts.main>
