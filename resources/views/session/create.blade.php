<x-layouts.main pd="false">
    <div class="min-h-[calc(100vh-5rem)] flex items-center justify-center py-8 sm:py-12 px-4">
        {{-- Background decorations --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-64 h-64 bg-primary-400/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 bg-accent-400/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="w-full max-w-md relative z-10">
            {{-- Login Card --}}
            <div class="glass-card rounded-3xl shadow-2xl shadow-dark-900/10 border border-white/20 p-6 sm:p-8">
                {{-- Header --}}
                <div class="text-center mb-8">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-primary-500 to-accent-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-primary-500/30">
                        <i class="fa-solid fa-user text-white text-xl sm:text-2xl"></i>
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-dark-900">بەخێربێیتەوە</h1>
                    <p class="text-dark-400 mt-2 text-sm sm:text-base">بچۆ ژوورەوە بۆ هەژمارەکەت</p>
                </div>

                {{-- Form --}}
                <form action="{{ route('login') }}" method="POST" class="space-y-5 sm:space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-dark-900 mb-2">ناونیشانی ئیمەیڵ</label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-dark-400">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="w-full pr-12 pl-4 py-3 sm:py-3.5 border-2 border-dark-200 rounded-xl focus:border-primary-500 focus:ring-0 outline-none transition-colors bg-white text-dark-900"
                                   placeholder="ئیمەیڵەکەت تێبنووسە">
                        </div>
                        <x-form.error name="email" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-dark-900 mb-2">وشەی تێپەڕ</label>
                        <div class="relative">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-dark-400">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password"
                                   class="w-full pr-12 pl-4 py-3 sm:py-3.5 border-2 border-dark-200 rounded-xl focus:border-primary-500 focus:ring-0 outline-none transition-colors bg-white text-dark-900"
                                   placeholder="وشەی تێپەڕەکەت تێبنووسە">
                        </div>
                        <x-form.error name="password" />
                    </div>

                    <button type="submit" 
                            class="w-full btn-primary text-white py-3.5 sm:py-4 rounded-xl font-semibold text-base sm:text-lg flex items-center justify-center gap-2">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        چوونە ژوورەوە
                    </button>
                </form>

                {{-- Divider --}}
                <div class="my-6 sm:my-8 flex items-center">
                    <div class="flex-1 border-t border-dark-200"></div>
                    <span class="px-4 text-sm text-dark-400">یان</span>
                    <div class="flex-1 border-t border-dark-200"></div>
                </div>

                {{-- Register Link --}}
                <p class="text-center text-dark-400 text-sm sm:text-base">
                    هەژمارەت نیە؟
                    <a href="{{ route('register') }}" class="text-primary-500 font-semibold hover:text-primary-600 transition-colors">هەژمار دروستبکە</a>
                </p>
            </div>
        </div>
    </div>
</x-layouts.main>
