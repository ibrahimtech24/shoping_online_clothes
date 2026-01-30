@props(['order', 'route' => 'dashboard.orders.show'])

<div class="bg-white rounded-2xl sm:rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 overflow-hidden hover:shadow-xl hover:shadow-dark-900/10 transition-all duration-300">
    {{-- Order Header --}}
    <div class="bg-gradient-to-br from-primary-500 via-primary-600 to-accent-500 p-4 sm:p-5">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 sm:w-11 sm:h-11 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-box text-white text-sm sm:text-base"></i>
                </div>
                <div>
                    <p class="text-white/80 text-[10px] sm:text-xs">ناسنامەی داواکاری</p>
                    <p class="text-white font-bold text-sm sm:text-base">#{{ $order->id }}</p>
                </div>
            </div>
            <span class="px-2.5 sm:px-3 py-1 bg-white/20 backdrop-blur text-white text-[10px] sm:text-xs font-medium rounded-full">
                {{ $order->state->name }}
            </span>
        </div>
    </div>
    
    {{-- Order Body --}}
    <div class="p-4 sm:p-6 space-y-4">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 sm:w-10 sm:h-10 bg-dark-100 rounded-xl flex items-center justify-center">
                <i class="fa-solid fa-user text-dark-400 text-sm"></i>
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-[10px] sm:text-xs text-dark-400">کڕیار</p>
                <p class="font-medium text-dark-900 text-sm sm:text-base truncate">{{ $order->user->name }}</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 sm:w-10 sm:h-10 bg-dark-100 rounded-xl flex items-center justify-center">
                <i class="fa-solid fa-clock text-dark-400 text-sm"></i>
            </div>
            <div>
                <p class="text-[10px] sm:text-xs text-dark-400">بەرواری داواکاری</p>
                <p class="font-medium text-dark-700 text-sm">{{ $order->created_at->format('M d, Y') }}</p>
            </div>
        </div>
        
        <div class="flex items-center justify-between pt-4 border-t border-dark-100">
            <div>
                <p class="text-[10px] sm:text-xs text-dark-400">کۆی گشتی</p>
                <p class="text-xl sm:text-2xl font-bold gradient-text">${{ number_format($order->total_price, 2) }}</p>
            </div>
            <a href="{{ route($route, ['order' => $order]) }}"
               class="btn-primary text-white px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl font-medium inline-flex items-center gap-2 text-sm">
                <span class="hidden sm:inline">وردەکاریەکان</span>
                <span class="sm:hidden">بینین</span>
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
    </div>
</div>
