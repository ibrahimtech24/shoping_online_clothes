{{-- Shop Statistics Section --}}
<section class="py-20 bg-gradient-to-br from-gray-900 via-purple-900 to-black relative overflow-hidden">
    {{-- Animated Background Elements --}}
    <div class="absolute inset-0">
        <div class="absolute -top-40 -left-40 w-80 h-80 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-yellow-400/10 to-orange-500/10 rounded-full blur-3xl animate-spin" style="animation-duration: 20s;"></div>
    </div>

    {{-- Floating particles effect --}}
    <div class="absolute inset-0">
        @for($i = 1; $i <= 20; $i++)
            <div class="absolute w-2 h-2 bg-white/20 rounded-full animate-float" 
                 style="
                    left: {{ rand(0, 100) }}%; 
                    top: {{ rand(0, 100) }}%; 
                    animation-delay: {{ rand(0, 5000) }}ms;
                    animation-duration: {{ rand(3000, 8000) }}ms;
                 "></div>
        @endfor
    </div>

    <div class="relative max-w-7xl mx-auto px-4 text-white">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-cyan-300 text-sm font-semibold mb-6 border border-white/20">
                {{ app()->getLocale() == 'ku' ? '📊 ئامارەکانی فرۆشگا' : (app()->getLocale() == 'ar' ? '📊 إحصائيات المتجر' : '📊 Shop Analytics') }}
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                {{ app()->getLocale() == 'ku' ? 'ئێمە لە' : (app()->getLocale() == 'ar' ? 'نحن في' : 'We\'re in') }}
                <span class="bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                    {{ app()->getLocale() == 'ku' ? 'پێشەوە' : (app()->getLocale() == 'ar' ? 'المقدمة' : 'Numbers') }}
                </span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ app()->getLocale() == 'ku' ? 'ئامارەکانی سەرکەوتنمان کە باسی کوالیتی خزمەتگوزاریەکانمان دەکات' : (app()->getLocale() == 'ar' ? 'إحصائيات نجاحنا التي تتحدث عن جودة خدماتنا' : 'Our success statistics that speak about the quality of our services') }}
            </p>
        </div>

        {{-- Main Statistics Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            {{-- Total Products --}}
            <div class="relative group">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-500 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-box text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold mb-2 text-white counter" data-target="{{ $totalProducts ?? 1250 }}">0</div>
                    <div class="text-cyan-300 font-semibold mb-3">
                        {{ app()->getLocale() == 'ku' ? 'بەرهەمی جیاواز' : (app()->getLocale() == 'ar' ? 'منتج متنوع' : 'Products Available') }}
                    </div>
                    <div class="text-sm text-gray-300">
                        <i class="fa-solid fa-arrow-up text-green-400"></i> +15% {{ app()->getLocale() == 'ku' ? 'لە مانگی ڕابردوو' : (app()->getLocale() == 'ar' ? 'من الشهر الماضي' : 'from last month') }}
                    </div>
                </div>
            </div>

            {{-- Happy Customers --}}
            <div class="relative group">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-500 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-users text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold mb-2 text-white counter" data-target="{{ $totalCustomers ?? 5840 }}">0</div>
                    <div class="text-emerald-300 font-semibold mb-3">
                        {{ app()->getLocale() == 'ku' ? 'کڕیاری خۆشحاڵ' : (app()->getLocale() == 'ar' ? 'عميل سعيد' : 'Happy Customers') }}
                    </div>
                    <div class="text-sm text-gray-300">
                        <i class="fa-solid fa-heart text-pink-400"></i> 98% {{ app()->getLocale() == 'ku' ? 'ڕەزامەندی' : (app()->getLocale() == 'ar' ? 'رضا' : 'satisfaction rate') }}
                    </div>
                </div>
            </div>

            {{-- Orders Completed --}}
            <div class="relative group">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-500 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-shopping-cart text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold mb-2 text-white counter" data-target="{{ $totalOrders ?? 12650 }}">0</div>
                    <div class="text-pink-300 font-semibold mb-3">
                        {{ app()->getLocale() == 'ku' ? 'داواکاری تەواوکراو' : (app()->getLocale() == 'ar' ? 'طلبية مكتملة' : 'Orders Completed') }}
                    </div>
                    <div class="text-sm text-gray-300">
                        <i class="fa-solid fa-truck-fast text-blue-400"></i> 99.5% {{ app()->getLocale() == 'ku' ? 'بە کات گەیاندراو' : (app()->getLocale() == 'ar' ? 'وصل في الوقت المحدد' : 'on time delivery') }}
                    </div>
                </div>
            </div>

            {{-- Years Experience --}}
            <div class="relative group">
                <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-500 hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-award text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold mb-2 text-white counter" data-target="8">0</div>
                    <div class="text-orange-300 font-semibold mb-3">
                        {{ app()->getLocale() == 'ku' ? 'ساڵ ئەزموون' : (app()->getLocale() == 'ar' ? 'سنوات من الخبرة' : 'Years Experience') }}
                    </div>
                    <div class="text-sm text-gray-300">
                        <i class="fa-solid fa-star text-yellow-400"></i> {{ app()->getLocale() == 'ku' ? 'لە بازاڕدا' : (app()->getLocale() == 'ar' ? 'في السوق' : 'in the market') }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Secondary Statistics --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2 counter" data-target="24">0</div>
                <div class="text-cyan-300 text-sm">{{ app()->getLocale() == 'ku' ? 'ژووری پشتگیری' : (app()->getLocale() == 'ar' ? 'ساعة دعم' : 'Hour Support') }}</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2 counter" data-target="15">0</div>
                <div class="text-green-300 text-sm">{{ app()->getLocale() == 'ku' ? 'وڵات' : (app()->getLocale() == 'ar' ? 'دولة' : 'Countries') }}</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2 counter" data-target="50">0</div>
                <div class="text-purple-300 text-sm">{{ app()->getLocale() == 'ku' ? 'کارمەند' : (app()->getLocale() == 'ar' ? 'موظف' : 'Team Members') }}</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2">4.9</div>
                <div class="text-yellow-300 text-sm">{{ app()->getLocale() == 'ku' ? 'هەڵسەنگاندن' : (app()->getLocale() == 'ar' ? 'تقييم' : 'Rating Stars') }}</div>
            </div>
        </div>

        {{-- Trust Badges --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach([
                ['icon' => 'fa-shield-check', 'title' => app()->getLocale() == 'ku' ? 'پارێزراو' : (app()->getLocale() == 'ar' ? 'آمن' : 'Secure'), 'desc' => app()->getLocale() == 'ku' ? 'پارەدان' : (app()->getLocale() == 'ar' ? 'دفع' : 'Payments')],
                ['icon' => 'fa-truck-fast', 'title' => app()->getLocale() == 'ku' ? 'خێرا' : (app()->getLocale() == 'ar' ? 'سريع' : 'Fast'), 'desc' => app()->getLocale() == 'ku' ? 'گەیاندن' : (app()->getLocale() == 'ar' ? 'توصيل' : 'Delivery')],
                ['icon' => 'fa-heart-circle-check', 'title' => app()->getLocale() == 'ku' ? 'باش' : (app()->getLocale() == 'ar' ? 'جودة' : 'Quality'), 'desc' => app()->getLocale() == 'ku' ? 'کوالیتی' : (app()->getLocale() == 'ar' ? 'مضمونة' : 'Guaranteed')],
                ['icon' => 'fa-headset', 'title' => app()->getLocale() == 'ku' ? 'پشتگیری' : (app()->getLocale() == 'ar' ? 'دعم' : 'Support'), 'desc' => app()->getLocale() == 'ku' ? '۲۴/۷' : (app()->getLocale() == 'ar' ? '۲۴/۷' : '24/7')]
            ] as $badge)
                <div class="flex items-center gap-4 bg-white/5 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                    <div class="w-12 h-12 bg-gradient-to-br from-white/20 to-white/10 rounded-xl flex items-center justify-center">
                        <i class="fa-solid {{ $badge['icon'] }} text-white"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-white">{{ $badge['title'] }}</div>
                        <div class="text-sm text-gray-300">{{ $badge['desc'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Add floating animation CSS --}}
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    25% { transform: translateY(-20px) translateX(10px); }
    50% { transform: translateY(-10px) translateX(-5px); }
    75% { transform: translateY(-15px) translateX(5px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}
</style>

{{-- Counter Animation JavaScript --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for counter animation
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all counter elements
    document.querySelectorAll('.counter').forEach(counter => {
        observer.observe(counter);
    });

    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, 16);
    }
});
</script>