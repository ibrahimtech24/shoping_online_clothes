<x-layouts.main>
    {{-- ═══════════════════════════════════════════════════════════════════════════════
         📦 PREMIUM ORDERS PAGE - Dark Theme with Glass Effects
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black">
        
        {{-- Magical Background Effects --}}
        <div class="fixed inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>

        <div class="relative z-10 py-8 md:py-12">
            <div class="max-w-7xl mx-auto px-4">
                
                {{-- Page Header --}}
                <div class="text-center mb-10">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-xl rounded-full border border-white/10 mb-4">
                        <i class="fa-solid fa-box text-cyan-400"></i>
                        <span class="text-white/80 text-sm font-medium">{{ app()->getLocale() == 'ku' ? 'داواکاریەکانم' : (app()->getLocale() == 'ar' ? 'طلباتي' : 'My Orders') }}</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                        {{ app()->getLocale() == 'ku' ? 'داواکاریەکانی' : (app()->getLocale() == 'ar' ? 'طلبات' : 'My') }}
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">{{ app()->getLocale() == 'ku' ? 'من' : (app()->getLocale() == 'ar' ? 'ي' : 'Orders') }}</span>
                    </h1>
                    <p class="text-white/60">{{ app()->getLocale() == 'ku' ? 'شوێنکەوتن و بەڕێوەبردنی داواکاریەکانت' : (app()->getLocale() == 'ar' ? 'تتبع وإدارة طلباتك' : 'Track and manage your orders') }}</p>
                </div>

                {{-- Filter --}}
                <div class="flex justify-center mb-8">
                    <form id="filterForm" action="{{ route('orders.index') }}" method="GET" 
                          class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-2 inline-flex items-center gap-2">
                        <span class="text-cyan-400 pl-4"><i class="fa-solid fa-filter"></i></span>
                        <select name="state" id="filter" onchange="submitForm()"
                            class="px-4 py-2 pr-10 bg-transparent border-0 focus:ring-0 outline-none font-medium text-white cursor-pointer">
                            <option value="" class="bg-slate-800" @if (request('state') == null) selected @endif>
                                {{ app()->getLocale() == 'ku' ? 'هەموو داواکاریەکان' : (app()->getLocale() == 'ar' ? 'جميع الطلبات' : 'All Orders') }}
                            </option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}" class="bg-slate-800" @if (request('state') == $state->id) selected @endif>
                                    {{ $state->name }}
                                </option>
                            @endforeach
                        </select>
                        <input type="hidden" name="page" value="{{ request('page') }}">
                    </form>
                </div>

                @if (count($orders))
                    {{-- Orders Grid --}}
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                        @foreach ($orders as $order)
                            <a href="{{ route('orders.show', $order) }}" class="group">
                                <div class="bg-white/5 backdrop-blur-xl rounded-2xl border border-white/10 p-5 hover:bg-white/10 hover:border-white/20 transition-all hover:-translate-y-1">
                                    {{-- Order Header --}}
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="text-white font-bold">#{{ $order->id }}</span>
                                        <span class="px-3 py-1 rounded-lg text-xs font-bold
                                            @if($order->state->id == 1) bg-amber-500/20 text-amber-400 border border-amber-500/30
                                            @elseif($order->state->id == 2) bg-blue-500/20 text-blue-400 border border-blue-500/30
                                            @elseif($order->state->id == 3) bg-emerald-500/20 text-emerald-400 border border-emerald-500/30
                                            @elseif($order->state->id == 4) bg-red-500/20 text-red-400 border border-red-500/30
                                            @else bg-white/10 text-white/70 border border-white/20
                                            @endif">
                                            {{ $order->state->name }}
                                        </span>
                                    </div>

                                    {{-- Order Details --}}
                                    <div class="space-y-3 mb-4">
                                        <div class="flex items-center gap-3 text-white/60 text-sm">
                                            <i class="fa-regular fa-calendar w-5 text-center"></i>
                                            <span>{{ $order->created_at->format('Y/m/d') }}</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-white/60 text-sm">
                                            <i class="fa-solid fa-box w-5 text-center"></i>
                                            <span>{{ $order->items->count() }} {{ app()->getLocale() == 'ku' ? 'بابەت' : (app()->getLocale() == 'ar' ? 'عنصر' : 'items') }}</span>
                                        </div>
                                        <div class="flex items-center gap-3 text-white/60 text-sm">
                                            <i class="fa-solid fa-location-dot w-5 text-center"></i>
                                            <span class="truncate">{{ $order->address ?? (app()->getLocale() == 'ku' ? 'ناونیشان' : (app()->getLocale() == 'ar' ? 'العنوان' : 'Address')) }}</span>
                                        </div>
                                    </div>

                                    {{-- Order Total --}}
                                    <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                                        <span class="text-white/60 text-sm">{{ app()->getLocale() == 'ku' ? 'کۆی گشتی' : (app()->getLocale() == 'ar' ? 'الإجمالي' : 'Total') }}</span>
                                        <span class="text-cyan-400 font-bold text-lg">${{ number_format($order->total_price, 2) }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-10 flex justify-center">
                        {{ $orders->links() }}
                    </div>
                @else
                    {{-- Empty State --}}
                    <div class="text-center py-20">
                        <div class="w-32 h-32 bg-white/5 backdrop-blur-xl rounded-full flex items-center justify-center mx-auto mb-8 border border-white/10">
                            <i class="fa-solid fa-box-open text-5xl text-white/30"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-3">
                            {{ app()->getLocale() == 'ku' ? 'هێشتا داواکاریت نییە' : (app()->getLocale() == 'ar' ? 'لا يوجد طلبات بعد' : 'No orders yet') }}
                        </h2>
                        <p class="text-white/60 mb-8 max-w-md mx-auto">
                            {{ app()->getLocale() == 'ku' ? 'دەست بکە بە کڕین تا داواکاریەکانت لێرە ببینی' : (app()->getLocale() == 'ar' ? 'ابدأ التسوق لترى طلباتك هنا' : 'Start shopping to see your orders here') }}
                        </p>
                        <a href="{{ route('products.index') }}" 
                           class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 transition-all hover:-translate-y-1">
                            <i class="fa-solid fa-bag-shopping"></i>
                            {{ app()->getLocale() == 'ku' ? 'دەستپێکردنی کڕین' : (app()->getLocale() == 'ar' ? 'ابدأ التسوق' : 'Start Shopping') }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function submitForm() {
            document.getElementById('filterForm').submit();
        }
    </script>
</x-layouts.main>
