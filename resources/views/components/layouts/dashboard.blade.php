<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Dashboard') }} - kurd marka</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a78b9f26f.js" crossorigin="anonymous" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        [dir="rtl"] { font-family: 'Segoe UI', Tahoma, sans-serif; }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-50 via-white to-slate-100 min-h-screen">
    <div x-data="{ sidebarOpen: true, profileOpen: false }" class="flex min-h-screen">
        
        {{-- Sidebar --}}
        <aside x-show="sidebarOpen" 
               x-transition:enter="transition-all duration-300 ease-out"
               x-transition:enter-start="-translate-x-full opacity-0"
               x-transition:enter-end="translate-x-0 opacity-100"
               x-transition:leave="transition-all duration-200 ease-in"
               x-transition:leave-start="translate-x-0 opacity-100"
               x-transition:leave-end="-translate-x-full opacity-0"
               class="fixed inset-y-0 {{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? 'right-0' : 'left-0' }} z-50 w-72 bg-gradient-to-b from-primary-600 via-primary-700 to-primary-900 shadow-2xl lg:relative lg:translate-x-0">
            
            {{-- Logo Section --}}
            <div class="flex items-center justify-between p-6 border-b border-white/10">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                        <span class="text-white text-xl font-black">K</span>
                    </div>
                    <span class="text-white text-xl font-bold tracking-tight">kurd marka</span>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden text-white/70 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Navigation --}}
            <nav class="p-4 space-y-2">
                <p class="text-white/50 text-xs uppercase tracking-wider mb-4 px-3">
                    @if(app()->getLocale() == 'ku')
                        مێنیوی سەرەکی
                    @elseif(app()->getLocale() == 'ar')
                        القائمة الرئيسية
                    @else
                        Main Menu
                    @endif
                </p>
                
                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            داشبۆرد
                        @elseif(app()->getLocale() == 'ar')
                            لوحة التحكم
                        @else
                            Dashboard
                        @endif
                    </span>
                </a>

                {{-- Users --}}
                <a href="{{ route('dashboard.users.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard.users.*') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            بەکارهێنەرەکان
                        @elseif(app()->getLocale() == 'ar')
                            المستخدمون
                        @else
                            Users
                        @endif
                    </span>
                </a>

                {{-- Products --}}
                <a href="{{ route('dashboard.products.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard.products.*') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            بەرهەمەکان
                        @elseif(app()->getLocale() == 'ar')
                            المنتجات
                        @else
                            Products
                        @endif
                    </span>
                </a>

                {{-- Sizes --}}
                <a href="{{ route('dashboard.sizes.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard.sizes.*') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            قەبارەکان
                        @elseif(app()->getLocale() == 'ar')
                            المقاسات
                        @else
                            Sizes
                        @endif
                    </span>
                </a>

                {{-- Categories --}}
                <a href="{{ route('dashboard.categories.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard.categories.*') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            پۆلەکان
                        @elseif(app()->getLocale() == 'ar')
                            الأقسام
                        @else
                            Categories
                        @endif
                    </span>
                </a>

                {{-- Sub Categories --}}
                <a href="{{ route('dashboard.subcategories.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard.subcategories.*') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            ژێر پۆلەکان
                        @elseif(app()->getLocale() == 'ar')
                            الأقسام الفرعية
                        @else
                            Sub Categories
                        @endif
                    </span>
                </a>

                {{-- Orders --}}
                <a href="{{ route('dashboard.orders.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300
                   {{ request()->routeIs('dashboard.orders.*') ? 'bg-white text-primary-700 shadow-lg' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                    <span class="font-medium">
                        @if(app()->getLocale() == 'ku')
                            داواکاریەکان
                        @elseif(app()->getLocale() == 'ar')
                            الطلبات
                        @else
                            Orders
                        @endif
                    </span>
                </a>
            </nav>

            {{-- Bottom Section --}}
            <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-white/10">
                {{-- Language Switcher --}}
                <div class="flex items-center justify-center gap-2 mb-4">
                    <a href="{{ route('language.switch', 'en') }}" 
                       class="px-3 py-1.5 rounded-lg text-sm font-medium transition-all
                       {{ app()->getLocale() == 'en' ? 'bg-white text-primary-700' : 'text-white/70 hover:bg-white/10' }}">
                        EN
                    </a>
                    <a href="{{ route('language.switch', 'ku') }}" 
                       class="px-3 py-1.5 rounded-lg text-sm font-medium transition-all
                       {{ app()->getLocale() == 'ku' ? 'bg-white text-primary-700' : 'text-white/70 hover:bg-white/10' }}">
                        کوردی
                    </a>
                    <a href="{{ route('language.switch', 'ar') }}" 
                       class="px-3 py-1.5 rounded-lg text-sm font-medium transition-all
                       {{ app()->getLocale() == 'ar' ? 'bg-white text-primary-700' : 'text-white/70 hover:bg-white/10' }}">
                        عربي
                    </a>
                </div>

                {{-- Logout --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-red-500/20 text-red-200 rounded-xl hover:bg-red-500/30 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        <span class="font-medium">
                            @if(app()->getLocale() == 'ku')
                                چوونەدەرەوە
                            @elseif(app()->getLocale() == 'ar')
                                تسجيل الخروج
                            @else
                                Logout
                            @endif
                        </span>
                    </button>
                </form>
            </div>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col min-h-screen">
            {{-- Top Header --}}
            <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-xl border-b border-gray-200/50 px-6 py-4">
                <div class="flex items-center justify-between">
                    {{-- Mobile Menu Button --}}
                    <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 text-gray-600 hover:text-primary-600 hover:bg-gray-100 rounded-xl transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    {{-- Page Title --}}
                    <h1 class="text-xl font-bold text-gray-800">
                        @if(request()->routeIs('dashboard'))
                            @if(app()->getLocale() == 'ku')
                                داشبۆرد
                            @elseif(app()->getLocale() == 'ar')
                                لوحة التحكم
                            @else
                                Dashboard
                            @endif
                        @elseif(request()->routeIs('dashboard.users.*'))
                            @if(app()->getLocale() == 'ku')
                                بەکارهێنەرەکان
                            @elseif(app()->getLocale() == 'ar')
                                المستخدمون
                            @else
                                Users
                            @endif
                        @elseif(request()->routeIs('dashboard.products.*'))
                            @if(app()->getLocale() == 'ku')
                                بەرهەمەکان
                            @elseif(app()->getLocale() == 'ar')
                                المنتجات
                            @else
                                Products
                            @endif
                        @elseif(request()->routeIs('dashboard.sizes.*'))
                            @if(app()->getLocale() == 'ku')
                                قەبارەکان
                            @elseif(app()->getLocale() == 'ar')
                                المقاسات
                            @else
                                Sizes
                            @endif
                        @elseif(request()->routeIs('dashboard.categories.*'))
                            @if(app()->getLocale() == 'ku')
                                پۆلەکان
                            @elseif(app()->getLocale() == 'ar')
                                الأقسام
                            @else
                                Categories
                            @endif
                        @elseif(request()->routeIs('dashboard.subcategories.*'))
                            @if(app()->getLocale() == 'ku')
                                ژێر پۆلەکان
                            @elseif(app()->getLocale() == 'ar')
                                الأقسام الفرعية
                            @else
                                Sub Categories
                            @endif
                        @elseif(request()->routeIs('dashboard.orders.*'))
                            @if(app()->getLocale() == 'ku')
                                داواکاریەکان
                            @elseif(app()->getLocale() == 'ar')
                                الطلبات
                            @else
                                Orders
                            @endif
                        @else
                            Dashboard
                        @endif
                    </h1>

                    {{-- User Profile --}}
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center gap-3 p-2 rounded-xl hover:bg-gray-100 transition-all">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-accent-500 rounded-full flex items-center justify-center text-white font-bold">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                            <div class="hidden sm:block {{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? 'text-right' : 'text-left' }}">
                                <p class="text-sm font-semibold text-gray-800">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">
                                    @if(app()->getLocale() == 'ku')
                                        بەڕێوەبەر
                                    @elseif(app()->getLocale() == 'ar')
                                        مدير
                                    @else
                                        Administrator
                                    @endif
                                </p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Dropdown --}}
                        <div x-show="open" @click.away="open = false" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             class="absolute {{ app()->getLocale() == 'ar' || app()->getLocale() == 'ku' ? 'left-0' : 'right-0' }} mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50">
                            <a href="{{ route('home') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                @if(app()->getLocale() == 'ku')
                                    بینینی ماڵپەڕ
                                @elseif(app()->getLocale() == 'ar')
                                    عرض الموقع
                                @else
                                    View Site
                                @endif
                            </a>
                            <hr class="my-2 border-gray-100">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    @if(app()->getLocale() == 'ku')
                                        چوونەدەرەوە
                                    @elseif(app()->getLocale() == 'ar')
                                        تسجيل الخروج
                                    @else
                                        Logout
                                    @endif
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            {{-- Main Content Area --}}
            <main class="flex-1 p-6 lg:p-8">
                {{ $slot }}
            </main>

            {{-- Footer --}}
            <footer class="bg-white border-t border-gray-200 px-6 py-4 text-center">
                <p class="text-sm text-gray-500">
                    © {{ date('Y') }} SnapStyle. 
                    @if(app()->getLocale() == 'ku')
                        هەموو مافەکان پارێزراون.
                    @elseif(app()->getLocale() == 'ar')
                        جميع الحقوق محفوظة.
                    @else
                        All rights reserved.
                    @endif
                </p>
            </footer>
        </div>

        {{-- Overlay for mobile --}}
        <div x-show="sidebarOpen" @click="sidebarOpen = false" 
             class="fixed inset-0 bg-black/50 z-40 lg:hidden"
             x-transition:enter="transition-opacity duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"></div>

        <x-flash />
    </div>
</body>

</html>
