@props(['product', 'link' => 'true'])

<div class="group">
    <form action="{{ route('cart.store') }}" method="POST"
        class="bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl hover:shadow-primary-500/10 transition-all duration-500 border border-dark-100 h-full flex flex-col">
        @csrf

        {{-- Product Image --}}
        <a @if ($link == 'true') href="{{ route('products.show', ['product' => $product]) }}" @endif 
           class="block relative overflow-hidden aspect-square">
            <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-dark-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            
            {{-- Quick View Button --}}
            @if ($link == 'true')
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="bg-white/90 backdrop-blur text-dark-900 px-4 py-2 rounded-full text-sm font-medium shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <i class="fa-solid fa-eye ml-2"></i>خێرا سەیرکردن
                    </span>
                </div>
            @endif
            
            {{-- Wishlist Button --}}
            <button type="button" class="absolute top-3 right-3 sm:top-4 sm:right-4 w-8 h-8 sm:w-10 sm:h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-primary-500 hover:text-white text-dark-600">
                <i class="fa-regular fa-heart text-sm sm:text-base"></i>
            </button>
            
            {{-- Category Badge --}}
            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 flex flex-col gap-2">
                <span class="text-[10px] sm:text-xs font-semibold text-white bg-gradient-to-r from-primary-500 to-accent-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                    {{ $product->category->name }}
                </span>
                
                {{-- Discount Badge with Countdown --}}
                @if($product->hasActiveDiscount())
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-red-500 px-2 sm:px-3 py-1 rounded-full shadow-lg animate-pulse">
                        -{{ $product->discount_percentage }}%
                    </span>
                    
                    {{-- Countdown Timer --}}
                    @if($product->discount_ends_at)
                        <div x-data="countdown({{ $product->discount_remaining_seconds }})" 
                             x-init="startCountdown()"
                             class="bg-gradient-to-r from-gray-900 to-gray-800 text-white px-2 py-2 rounded-lg shadow-lg text-center">
                            <div class="grid grid-cols-4 gap-1 text-[9px] sm:text-[10px]">
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(days)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5">{{ app()->getLocale() == 'ku' ? 'ڕۆژ' : 'Day' }}</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(hours)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5">{{ app()->getLocale() == 'ku' ? 'کات' : 'Hr' }}</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(minutes)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5">{{ app()->getLocale() == 'ku' ? 'خول' : 'Min' }}</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <span x-text="formatTime(seconds)" class="bg-red-600 px-1.5 py-0.5 rounded font-bold text-sm"></span>
                                    <span class="text-[7px] text-gray-400 mt-0.5">{{ app()->getLocale() == 'ku' ? 'چرک' : 'Sec' }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                
                {{-- Feature Badges --}}
                @if($product->is_new)
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-green-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                        🆕 نوێ
                    </span>
                @endif
                @if($product->is_trending)
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-gradient-to-r from-orange-500 to-pink-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                        🔥 ترێند
                    </span>
                @endif
                @if($product->is_featured)
                    <span class="text-[10px] sm:text-xs font-bold text-white bg-blue-500 px-2 sm:px-3 py-1 rounded-full shadow-lg">
                        ⭐ تایبەت
                    </span>
                @endif
            </div>
            
            {{-- Stock Status --}}
            @if($product->isOutOfStock())
                <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4">
                    <span class="block text-center text-xs sm:text-sm font-bold text-white bg-red-600 px-3 py-2 rounded-lg shadow-lg">
                        ❌ تەواو بووە
                    </span>
                </div>
            @elseif($product->isLowStock())
                <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-4">
                    <span class="block text-center text-xs sm:text-sm font-semibold text-white bg-orange-500 px-3 py-1.5 rounded-lg shadow-lg">
                        ⚠️ کەم ماوەتەوە
                    </span>
                </div>
            @endif
        </a>

        {{-- Product Info --}}
        <div class="p-3 sm:p-5 flex flex-col flex-grow">
            {{-- Subcategory --}}
            <span class="text-[10px] sm:text-xs text-dark-400 mb-1 sm:mb-2">{{ $product->subcategory->name }}</span>
            
            {{-- Product Name --}}
            <h3 class="font-bold text-dark-900 text-sm sm:text-lg mb-2 sm:mb-3 line-clamp-2 group-hover:text-primary-600 transition-colors leading-tight">
                {{ $product->name }}
            </h3>
            
            {{-- Price --}}
            <div class="flex items-center gap-2 mb-3 sm:mb-4">
                @if($product->hasActiveDiscount())
                    <div class="flex flex-col">
                        <span class="text-xs sm:text-sm text-dark-400 line-through">${{ number_format($product->price, 2) }}</span>
                        <span class="text-lg sm:text-2xl font-bold text-green-600">${{ number_format($product->final_price, 2) }}</span>
                    </div>
                    <div class="bg-red-100 text-red-700 text-[10px] sm:text-xs font-bold px-2 py-1 rounded-full">
                        داشکان
                    </div>
                @else
                    <span class="text-lg sm:text-2xl font-bold gradient-text">${{ number_format($product->price, 2) }}</span>
                @endif
            </div>
            
            {{-- Sizes --}}
            <div class="mb-3 sm:mb-4 flex-grow">
                <p class="text-[10px] sm:text-xs text-dark-400 mb-2">قەبارە:</p>
                <div class="flex flex-wrap gap-1.5 sm:gap-2">
                    @foreach ($product->productsizes as $productsize)
                        <label class="cursor-pointer">
                            <input type="radio" id="size_{{ $product->id }}_{{ $productsize->size->id }}"
                                name="size_{{ $product->id }}" value="{{ $productsize->size->id }}"
                                class="hidden peer"
                                @if (old('size_' . $product->id) === $productsize->size->id) checked @endif>
                            <span class="inline-block px-2 sm:px-3 py-1 sm:py-1.5 text-[10px] sm:text-xs font-medium border-2 border-dark-200 rounded-lg peer-checked:border-primary-500 peer-checked:bg-primary-500 peer-checked:text-white transition-all hover:border-primary-400">
                                {{ $productsize->size->name }}
                            </span>
                        </label>
                    @endforeach
                </div>
                <x-form.error name="size_{{ $product->id }}" />
            </div>
            
            @if ($link == 'true')
                {{-- Add to Cart Button --}}
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" 
                    class="w-full btn-primary text-white py-2.5 sm:py-3 rounded-xl font-semibold text-sm sm:text-base flex items-center justify-center gap-2 group/btn mt-auto {{ $product->isOutOfStock() ? 'opacity-50 cursor-not-allowed' : '' }}"
                    {{ $product->isOutOfStock() ? 'disabled' : '' }}>
                    <i class="fa-solid fa-shopping-bag transition-transform group-hover/btn:scale-110"></i>
                    <span class="hidden sm:inline">{{ $product->isOutOfStock() ? 'تەواو بووە' : 'زیادکردن بۆ سەبەتە' }}</span>
                    <span class="sm:hidden">{{ $product->isOutOfStock() ? 'تەواو بووە' : 'زیادکردن' }}</span>
                </button>
            @endif
        </div>
    </form>
</div>
