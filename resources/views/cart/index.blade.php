<x-layouts.main>
    <div class="py-6 sm:py-10">
        {{-- Page Header --}}
        <div class="text-center mb-8 sm:mb-12">
            <span class="inline-block px-3 py-1 text-xs font-semibold text-primary-600 bg-primary-50 rounded-full mb-4">سەبەتە</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-dark-900 mb-3">سەبەتەی <span class="gradient-text">کڕین</span></h1>
            <p class="text-dark-400 text-sm sm:text-base">بابەتەکانت پێداچووەوە و چووە بۆ داواکردن</p>
        </div>

        @if (count($items) !== 0)
            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                {{-- Cart Items --}}
                <div class="flex-1">
                    <div class="bg-white rounded-2xl sm:rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 overflow-hidden">
                        {{-- Cart Header --}}
                        <div class="bg-gradient-to-r from-dark-50 to-white px-4 sm:px-6 py-4 border-b border-dark-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-accent-500 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-shopping-bag text-white"></i>
                                </div>
                                <div>
                                    <h2 class="font-bold text-dark-900">بابەتەکانی سەبەتە</h2>
                                    <p class="text-sm text-dark-400">{{ count($items) }} {{ count($items) === 1 ? 'بابەت' : 'بابەت' }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Cart Items List --}}
                        <div class="divide-y divide-dark-100">
                            @foreach ($items as $item)
                                <div class="p-4 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 hover:bg-dark-50/50 transition-colors">
                                    {{-- Product Image --}}
                                    <a href="{{ route('products.show', ['product' => $item->product]) }}" class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl sm:rounded-2xl overflow-hidden bg-dark-100 shrink-0 shadow-md">
                                        <img src="{{ str_starts_with($item->product->image, 'http') ? $item->product->image : asset('storage/' . $item->product->image) }}" 
                                             alt="{{ $item->product->name }}"
                                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                    </a>

                                    {{-- Product Info --}}
                                    <div class="flex-1 min-w-0">
                                        <a href="{{ route('products.show', ['product' => $item->product]) }}" class="font-bold text-dark-900 text-base sm:text-lg hover:text-primary-600 transition-colors line-clamp-1">
                                            {{ $item->product->name }}
                                        </a>
                                        <p class="text-dark-400 text-sm mt-1">
                                            قەبارە: <span class="font-medium text-dark-700 bg-dark-100 px-2 py-0.5 rounded">{{ $item->size->name }}</span>
                                        </p>
                                        <p class="gradient-text font-bold text-lg sm:text-xl mt-2">${{ number_format($item->product->price, 2) }}</p>
                                    </div>

                                    {{-- Quantity Controls & Delete --}}
                                    <div class="flex items-center gap-3 sm:gap-4 w-full sm:w-auto justify-between sm:justify-end">
                                        <div class="flex items-center border-2 border-dark-200 rounded-xl overflow-hidden bg-white">
                                            <form action="{{ route('cart.update', ['cartitem' => $item]) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="action" value="sub">
                                                <button type="submit" class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center text-dark-400 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                                    <i class="fa-solid fa-minus text-xs sm:text-sm"></i>
                                                </button>
                                            </form>
                                            <span class="w-10 sm:w-12 text-center font-bold text-dark-900">{{ $item->quantity }}</span>
                                            <form action="{{ route('cart.update', ['cartitem' => $item]) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="action" value="add">
                                                <button type="submit" class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center text-dark-400 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                                    <i class="fa-solid fa-plus text-xs sm:text-sm"></i>
                                                </button>
                                            </form>
                                        </div>

                                        {{-- Delete Button --}}
                                        <form action="{{ route('cart.delete', ['cartitem' => $item]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center text-dark-300 hover:text-red-500 hover:bg-red-50 rounded-xl transition-colors">
                                                <i class="fa-solid fa-trash text-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Order Summary --}}
                <div class="w-full lg:w-96 shrink-0">
                    <div class="bg-white rounded-2xl sm:rounded-3xl shadow-lg shadow-dark-900/5 border border-dark-100 p-5 sm:p-6 sticky top-24">
                        <h2 class="text-xl font-bold text-dark-900 mb-6 flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-accent-500 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-receipt text-white text-sm"></i>
                            </div>
                            کورتەی داواکاری
                        </h2>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-dark-400">کۆی بابەتەکان</span>
                                <span class="font-medium text-dark-700">${{ number_format($totalPrice, 2) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-dark-400">گواستنەوە</span>
                                <span class="font-medium text-dark-700">${{ number_format($shippingPrice, 2) }}</span>
                            </div>
                            <hr class="border-dark-100">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-dark-900">کۆی گشتی</span>
                                <span class="text-2xl font-bold gradient-text">${{ number_format($totalPrice + $shippingPrice, 2) }}</span>
                            </div>
                        </div>

                        <form action="{{ route('orders.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="items" value="{{ $items }}">
                            <input type="hidden" name="total_price" value="{{ $totalPrice + $shippingPrice }}">
                            <button type="submit" class="w-full btn-primary text-white py-3.5 sm:py-4 rounded-xl font-semibold flex items-center justify-center gap-2 text-base sm:text-lg">
                                <i class="fa-solid fa-check-circle"></i>
                                داواکاری بکە
                            </button>
                        </form>

                        <a href="{{ route('products.index') }}" class="flex items-center justify-center gap-2 mt-4 text-dark-400 hover:text-primary-500 transition-colors text-sm">
                            <i class="fa-solid fa-arrow-right"></i>
                            بەردەوامی لە کڕین
                        </a>
                    </div>
                </div>
            </div>
        @else
            {{-- Empty Cart --}}
            <div class="text-center py-16 sm:py-20">
                <div class="w-24 h-24 sm:w-32 sm:h-32 bg-dark-100 rounded-full flex items-center justify-center mx-auto mb-6 sm:mb-8">
                    <i class="fa-solid fa-cart-shopping text-4xl sm:text-5xl text-dark-300"></i>
                </div>
                <h2 class="text-xl sm:text-2xl font-bold text-dark-900 mb-3">سەبەتەت بەتاڵە</h2>
                <p class="text-dark-400 mb-6 sm:mb-8 max-w-md mx-auto text-sm sm:text-base px-4">
                    وا دیارە هێشتا هیچت زیاد نەکردووە. دەست بکە بە گەڕان لە بەرهەمە ناوازەکانمان!
                </p>
                <a href="{{ route('products.index') }}" 
                   class="inline-flex items-center gap-2 btn-primary text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-semibold text-base sm:text-lg">
                    <i class="fa-solid fa-shopping-bag"></i>
                    دەست بکە بە کڕین
                </a>
            </div>
        @endif
    </div>
</x-layouts.main>
