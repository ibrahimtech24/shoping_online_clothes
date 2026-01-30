<x-layouts.main>
    {{-- ═══════════════════════════════════════════════════════════════════════════════
         🛍️ PREMIUM PRODUCT DETAILS PAGE - Dark Theme with Glass Effects
    ═══════════════════════════════════════════════════════════════════════════════ --}}
    
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-black">
        
        {{-- Magical Background Effects --}}
        <div class="fixed inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-96 -left-96 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-96 -right-96 w-96 h-96 bg-gradient-to-br from-pink-500/20 to-purple-600/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>

        {{-- Breadcrumb --}}
        <div class="relative z-10 border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <nav class="flex items-center gap-2 text-sm">
                    <a href="{{ route('home') }}" class="text-white/60 hover:text-cyan-400 transition-colors flex items-center gap-1">
                        <i class="fa-solid fa-home"></i>
                        <span class="hidden sm:inline">{{ app()->getLocale() == 'ku' ? 'سەرەتا' : (app()->getLocale() == 'ar' ? 'الرئيسية' : 'Home') }}</span>
                    </a>
                    <i class="fa-solid fa-chevron-{{ app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs text-white/30"></i>
                    <a href="{{ route('products.index') }}" class="text-white/60 hover:text-cyan-400 transition-colors">
                        {{ app()->getLocale() == 'ku' ? 'بەرهەمەکان' : (app()->getLocale() == 'ar' ? 'المنتجات' : 'Products') }}
                    </a>
                    <i class="fa-solid fa-chevron-{{ app()->getLocale() == 'ku' || app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs text-white/30"></i>
                    <span class="text-white font-medium truncate">{{ Str::limit($product->name, 30) }}</span>
                </nav>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="relative z-10 py-8 md:py-12">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                    
                    {{-- ══════════════════════════════════════════════════════════════════════════
                         📷 PRODUCT IMAGE SECTION
                    ══════════════════════════════════════════════════════════════════════════ --}}
                    <div class="space-y-4">
                        {{-- Main Image --}}
                        <div class="relative group">
                            {{-- Glow Effect --}}
                            <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/30 via-purple-500/30 to-pink-500/30 rounded-3xl blur-2xl opacity-60 group-hover:opacity-80 transition-opacity"></div>
                            
                            {{-- Image Container --}}
                            <div class="relative aspect-square bg-white/5 backdrop-blur-xl rounded-3xl overflow-hidden border border-white/10">
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/placeholder.jpg') }}" 
                                     alt="{{ $product->name }}"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                
                                {{-- Badges --}}
                                <div class="absolute top-6 left-6 flex flex-col gap-2">
                                    @if($product->is_new || $product->created_at >= now()->subDays(7))
                                        <span class="bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs font-bold px-3 py-1.5 rounded-xl shadow-lg shadow-emerald-500/30">
                                            {{ app()->getLocale() == 'ku' ? 'نوێ' : (app()->getLocale() == 'ar' ? 'جديد' : 'NEW') }}
                                        </span>
                                    @endif
                                    
                                    @if($product->hasActiveDiscount())
                                        <span class="bg-gradient-to-r from-rose-500 to-pink-500 text-white text-sm font-bold px-4 py-2 rounded-xl shadow-lg shadow-rose-500/30 animate-pulse">
                                            -{{ $product->discount_percentage }}%
                                        </span>
                                    @endif
                                </div>

                                {{-- Action Buttons --}}
                                <div class="absolute top-6 right-6 flex flex-col gap-3">
                                    <button class="w-12 h-12 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 flex items-center justify-center hover:bg-rose-500 hover:border-rose-500 transition-all group/btn">
                                        <i class="fa-regular fa-heart text-white group-hover/btn:scale-110 transition-transform"></i>
                                    </button>
                                    <button class="w-12 h-12 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20 flex items-center justify-center hover:bg-cyan-500 hover:border-cyan-500 transition-all group/btn">
                                        <i class="fa-solid fa-share-nodes text-white group-hover/btn:scale-110 transition-transform"></i>
                                    </button>
                                </div>

                                {{-- Stock Warning --}}
                                @if($product->isLowStock())
                                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2">
                                        <span class="bg-gradient-to-r from-amber-500 to-orange-500 text-white text-sm font-bold px-4 py-2 rounded-xl shadow-lg animate-pulse">
                                            ⚡ {{ app()->getLocale() == 'ku' ? 'تەنها ' . $product->getTotalStock() . ' دانە ماوەتەوە!' : (app()->getLocale() == 'ar' ? 'باقي ' . $product->getTotalStock() . ' قطع فقط!' : 'Only ' . $product->getTotalStock() . ' left!') }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Thumbnails --}}
                        <div class="grid grid-cols-4 gap-3">
                            @for($i = 1; $i <= 4; $i++)
                                <div class="aspect-square bg-white/5 backdrop-blur-xl rounded-xl overflow-hidden border border-white/10 cursor-pointer hover:border-cyan-500/50 transition-all">
                                    <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}" 
                                         alt="Product view {{ $i }}"
                                         class="w-full h-full object-cover opacity-60 hover:opacity-100 transition-opacity">
                                </div>
                            @endfor
                        </div>
                    </div>

                    {{-- ══════════════════════════════════════════════════════════════════════════
                         📝 PRODUCT DETAILS SECTION
                    ══════════════════════════════════════════════════════════════════════════ --}}
                    <div class="space-y-6">
                        {{-- Category Badge --}}
                        <div class="flex items-center gap-2">
                            <span class="px-4 py-1.5 bg-cyan-500/20 text-cyan-400 text-sm font-medium rounded-xl border border-cyan-500/30">
                                {{ $product->category->name }}
                            </span>
                            @if($product->subcategory)
                                <span class="text-white/40">•</span>
                                <span class="text-white/60 text-sm">{{ $product->subcategory->name }}</span>
                            @endif
                        </div>

                        {{-- Product Name --}}
                        <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight">{{ $product->name }}</h1>

                        {{-- Rating --}}
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="flex text-amber-400">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fa-solid fa-star text-sm"></i>
                                    @endfor
                                </div>
                                <span class="font-bold text-white">4.8</span>
                                <span class="text-white/50">({{ rand(50, 200) }})</span>
                            </div>
                            <span class="text-white/50 text-sm">
                                {{ rand(500, 1500) }} {{ app()->getLocale() == 'ku' ? 'جار فرۆشراوە' : (app()->getLocale() == 'ar' ? 'مبيعة' : 'sold') }}
                            </span>
                        </div>

                        {{-- Price Card --}}
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                            <div class="flex items-center gap-4 mb-4">
                                @if($product->hasActiveDiscount())
                                    <div class="text-4xl font-bold text-white">
                                        ${{ number_format($product->final_price, 2) }}
                                    </div>
                                    <div class="text-2xl text-white/40 line-through">
                                        ${{ number_format($product->price, 2) }}
                                    </div>
                                    <div class="bg-rose-500/20 text-rose-400 px-3 py-1 rounded-lg text-sm font-bold border border-rose-500/30">
                                        {{ app()->getLocale() == 'ku' ? 'پاشەکەوت ' : (app()->getLocale() == 'ar' ? 'توفير ' : 'Save ') }}
                                        ${{ number_format($product->price - $product->final_price, 2) }}
                                    </div>
                                @else
                                    <div class="text-4xl font-bold text-white">
                                        ${{ number_format($product->price, 2) }}
                                    </div>
                                @endif
                            </div>

                            {{-- Stock Status --}}
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full {{ $product->isOutOfStock() ? 'bg-red-500' : ($product->isLowStock() ? 'bg-amber-500 animate-pulse' : 'bg-emerald-500') }}"></div>
                                    <span class="text-sm font-medium {{ $product->isOutOfStock() ? 'text-red-400' : ($product->isLowStock() ? 'text-amber-400' : 'text-emerald-400') }}">
                                        @if($product->isOutOfStock())
                                            {{ app()->getLocale() == 'ku' ? 'لە کۆگا نییە' : (app()->getLocale() == 'ar' ? 'غير متوفر' : 'Out of Stock') }}
                                        @elseif($product->isLowStock())
                                            {{ app()->getLocale() == 'ku' ? 'کەم لە کۆگا' : (app()->getLocale() == 'ar' ? 'مخزون منخفض' : 'Low Stock') }}
                                        @else
                                            {{ app()->getLocale() == 'ku' ? 'لە کۆگا هەیە' : (app()->getLocale() == 'ar' ? 'متوفر' : 'In Stock') }}
                                        @endif
                                    </span>
                                </div>
                                <span class="text-white/50 text-sm">{{ $product->getTotalStock() }} {{ app()->getLocale() == 'ku' ? 'دانە' : (app()->getLocale() == 'ar' ? 'قطعة' : 'pieces') }}</span>
                            </div>
                        </div>

                        {{-- Color Selector --}}
                        @php
                            $availableColors = $product->productsizes->whereNotNull('color')->where('quantity', '>', 0)->unique('color_code');
                        @endphp
                        @if($availableColors->count() > 0)
                            <div>
                                <h3 class="text-white font-semibold mb-3 flex items-center gap-2">
                                    <i class="fa-solid fa-palette text-cyan-400"></i>
                                    {{ app()->getLocale() == 'ku' ? 'رەنگ هەڵبژێرە' : (app()->getLocale() == 'ar' ? 'اختر اللون' : 'Select Color') }}
                                </h3>
                                <div class="flex flex-wrap gap-3" id="color-selector">
                                    @foreach($availableColors as $colorItem)
                                        <button type="button" 
                                                data-color="{{ $colorItem->color }}"
                                                data-color-code="{{ $colorItem->color_code }}"
                                                class="color-btn relative w-12 h-12 rounded-xl border-2 border-white/20 hover:border-cyan-500 transition-all overflow-hidden group"
                                                style="background-color: {{ $colorItem->color_code ?? '#888' }};"
                                                title="{{ $colorItem->color }}">
                                            <span class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="fa-solid fa-check text-white text-sm drop-shadow-lg"></i>
                                            </span>
                                        </button>
                                    @endforeach
                                </div>
                                <p class="text-white/50 text-sm mt-2" id="selected-color-name">
                                    {{ app()->getLocale() == 'ku' ? 'رەنگێک هەڵبژێرە' : (app()->getLocale() == 'ar' ? 'اختر لوناً' : 'Select a color') }}
                                </p>
                            </div>
                        @endif

                        {{-- Size Selector --}}
                        @if($product->productsizes && $product->productsizes->count() > 0)
                            <div>
                                <h3 class="text-white font-semibold mb-3 flex items-center gap-2">
                                    <i class="fa-solid fa-ruler text-cyan-400"></i>
                                    {{ app()->getLocale() == 'ku' ? 'قەبارە هەڵبژێرە' : (app()->getLocale() == 'ar' ? 'اختر المقاس' : 'Select Size') }}
                                </h3>
                                <div class="flex flex-wrap gap-3" id="size-selector">
                                    @foreach($product->productsizes as $productSize)
                                        <button type="button" 
                                                data-size-id="{{ $productSize->size_id }}"
                                                data-size-name="{{ $productSize->size->name ?? 'N/A' }}"
                                                data-stock="{{ $productSize->quantity }}"
                                                data-color="{{ $productSize->color }}"
                                                data-color-code="{{ $productSize->color_code }}"
                                                class="size-btn px-5 py-3 bg-white/5 backdrop-blur-xl border border-white/20 rounded-xl text-white font-medium hover:border-cyan-500/50 hover:bg-cyan-500/10 transition-all flex items-center gap-2 {{ $productSize->quantity <= 0 ? 'opacity-40 cursor-not-allowed line-through' : '' }}">
                                            @if($productSize->color_code)
                                                <span class="w-4 h-4 rounded-full border border-white/30" style="background-color: {{ $productSize->color_code }};"></span>
                                            @endif
                                            <span>{{ $productSize->size->name ?? 'N/A' }}</span>
                                            @if($productSize->quantity > 0 && $productSize->quantity <= 5)
                                                <span class="text-xs text-amber-400">({{ $productSize->quantity }})</span>
                                            @endif
                                        </button>
                                    @endforeach
                                </div>
                                <p class="text-white/50 text-sm mt-2" id="size-stock-info"></p>
                            </div>
                        @endif

                        {{-- Quantity --}}
                        <div>
                            <h3 class="text-white font-semibold mb-3">
                                {{ app()->getLocale() == 'ku' ? 'بڕ' : (app()->getLocale() == 'ar' ? 'الكمية' : 'Quantity') }}
                            </h3>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center bg-white/5 backdrop-blur-xl border border-white/20 rounded-xl overflow-hidden">
                                    <button type="button" id="qty-minus" class="w-12 h-12 flex items-center justify-center text-white hover:bg-white/10 transition-colors">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <input type="number" id="quantity" value="1" min="1" class="w-16 h-12 bg-transparent text-center text-white font-bold border-x border-white/10 outline-none">
                                    <button type="button" id="qty-plus" class="w-12 h-12 flex items-center justify-center text-white hover:bg-white/10 transition-colors">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Add to Cart Button --}}
                        <form action="{{ route('cart.store') }}" method="POST" id="add-to-cart-form">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="size" id="selected-size-id" value="">
                            <input type="hidden" name="color" id="selected-color" value="">
                            <input type="hidden" name="quantity" id="form-quantity" value="1">
                            
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="submit" 
                                        class="flex-1 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-2xl hover:from-cyan-600 hover:to-blue-700 transition-all shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 hover:-translate-y-0.5 flex items-center justify-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed"
                                        {{ $product->isOutOfStock() ? 'disabled' : '' }}>
                                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                                    {{ app()->getLocale() == 'ku' ? 'زیادکردن بۆ سەبەتە' : (app()->getLocale() == 'ar' ? 'أضف للسلة' : 'Add to Cart') }}
                                </button>
                                <button type="button" class="py-4 px-6 bg-gradient-to-r from-pink-500 to-rose-600 text-white font-bold rounded-2xl hover:from-pink-600 hover:to-rose-700 transition-all shadow-lg shadow-pink-500/30 hover:shadow-pink-500/50">
                                    <i class="fa-solid fa-bolt"></i>
                                    {{ app()->getLocale() == 'ku' ? 'ئێستا بکڕە' : (app()->getLocale() == 'ar' ? 'اشتري الآن' : 'Buy Now') }}
                                </button>
                            </div>
                        </form>

                        {{-- Features --}}
                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-truck-fast text-emerald-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">{{ app()->getLocale() == 'ku' ? 'گەیاندنی خێرا' : (app()->getLocale() == 'ar' ? 'توصيل سريع' : 'Fast Delivery') }}</div>
                                    <div class="text-white/50 text-xs">{{ app()->getLocale() == 'ku' ? '24 کاتژمێر' : (app()->getLocale() == 'ar' ? '24 ساعة' : '24 hours') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-cyan-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-shield-check text-cyan-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">{{ app()->getLocale() == 'ku' ? 'گەرەنتی' : (app()->getLocale() == 'ar' ? 'ضمان' : 'Warranty') }}</div>
                                    <div class="text-white/50 text-xs">{{ app()->getLocale() == 'ku' ? '30 ڕۆژ' : (app()->getLocale() == 'ar' ? '30 يوم' : '30 days') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-amber-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-rotate-left text-amber-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">{{ app()->getLocale() == 'ku' ? 'گەڕاندنەوە' : (app()->getLocale() == 'ar' ? 'إرجاع' : 'Returns') }}</div>
                                    <div class="text-white/50 text-xs">{{ app()->getLocale() == 'ku' ? 'خۆڕایی' : (app()->getLocale() == 'ar' ? 'مجاني' : 'Free') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                                <div class="w-10 h-10 bg-purple-500/20 rounded-xl flex items-center justify-center">
                                    <i class="fa-solid fa-headset text-purple-400"></i>
                                </div>
                                <div>
                                    <div class="text-white font-medium text-sm">{{ app()->getLocale() == 'ku' ? 'پشتگیری' : (app()->getLocale() == 'ar' ? 'دعم' : 'Support') }}</div>
                                    <div class="text-white/50 text-xs">24/7</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ══════════════════════════════════════════════════════════════════════════
                     📄 DESCRIPTION SECTION
                ══════════════════════════════════════════════════════════════════════════ --}}
                @if($product->description)
                    <div class="mt-12 bg-white/5 backdrop-blur-xl rounded-2xl p-6 md:p-8 border border-white/10">
                        <h2 class="text-xl font-bold text-white mb-4 flex items-center gap-3">
                            <i class="fa-solid fa-file-lines text-cyan-400"></i>
                            {{ app()->getLocale() == 'ku' ? 'وەسف' : (app()->getLocale() == 'ar' ? 'الوصف' : 'Description') }}
                        </h2>
                        <div class="text-white/70 leading-relaxed">
                            {{ $product->description }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- JavaScript for Color, Size & Quantity --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorBtns = document.querySelectorAll('.color-btn');
            const sizeBtns = document.querySelectorAll('.size-btn');
            const selectedSizeInput = document.getElementById('selected-size-id');
            const quantityInput = document.getElementById('quantity');
            const formQuantity = document.getElementById('form-quantity');
            const qtyMinus = document.getElementById('qty-minus');
            const qtyPlus = document.getElementById('qty-plus');
            const selectedColorName = document.getElementById('selected-color-name');
            const sizeStockInfo = document.getElementById('size-stock-info');

            let selectedColor = null;

            // Color selection
            if (colorBtns.length > 0) {
                colorBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Remove selection from all
                        colorBtns.forEach(b => {
                            b.classList.remove('border-cyan-500', 'ring-2', 'ring-cyan-500/50');
                            b.querySelector('span').classList.add('opacity-0');
                            b.querySelector('span').classList.remove('opacity-100');
                        });
                        
                        // Select this one
                        this.classList.add('border-cyan-500', 'ring-2', 'ring-cyan-500/50');
                        this.querySelector('span').classList.remove('opacity-0');
                        this.querySelector('span').classList.add('opacity-100');
                        
                        selectedColor = this.dataset.colorCode;
                        selectedColorName.innerHTML = '<i class="fa-solid fa-check text-cyan-400"></i> ' + this.dataset.color;
                        
                        // Filter sizes by color
                        filterSizesByColor(selectedColor);
                    });
                });
            }

            // Filter sizes by selected color
            function filterSizesByColor(colorCode) {
                sizeBtns.forEach(btn => {
                    const btnColorCode = btn.dataset.colorCode;
                    if (!colorCode || btnColorCode === colorCode || !btnColorCode) {
                        btn.style.display = 'flex';
                    } else {
                        btn.style.display = 'none';
                    }
                });
                
                // Clear size selection when color changes
                sizeBtns.forEach(b => b.classList.remove('border-cyan-500', 'bg-cyan-500/20'));
                selectedSizeInput.value = '';
                if (sizeStockInfo) sizeStockInfo.textContent = '';
            }

            // Size selection
            sizeBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (parseInt(this.dataset.stock) <= 0) return;
                    
                    sizeBtns.forEach(b => b.classList.remove('border-cyan-500', 'bg-cyan-500/20'));
                    this.classList.add('border-cyan-500', 'bg-cyan-500/20');
                    selectedSizeInput.value = this.dataset.sizeId;
                    
                    // Show stock info
                    const stock = parseInt(this.dataset.stock);
                    const sizeName = this.dataset.sizeName;
                    const colorName = this.dataset.color;
                    
                    let stockText = '';
                    @if(app()->getLocale() == 'ku')
                        stockText = sizeName + (colorName ? ' - ' + colorName : '') + ': ' + stock + ' دانە لە کۆگا';
                    @elseif(app()->getLocale() == 'ar')
                        stockText = sizeName + (colorName ? ' - ' + colorName : '') + ': ' + stock + ' قطعة متوفرة';
                    @else
                        stockText = sizeName + (colorName ? ' - ' + colorName : '') + ': ' + stock + ' in stock';
                    @endif
                    
                    if (sizeStockInfo) {
                        sizeStockInfo.innerHTML = '<i class="fa-solid fa-box text-emerald-400"></i> ' + stockText;
                    }
                });
            });

            // Quantity controls
            qtyMinus.addEventListener('click', function() {
                let val = parseInt(quantityInput.value);
                if (val > 1) {
                    quantityInput.value = val - 1;
                    formQuantity.value = val - 1;
                }
            });

            qtyPlus.addEventListener('click', function() {
                let val = parseInt(quantityInput.value);
                // Check max stock
                const selectedBtn = document.querySelector('.size-btn.border-cyan-500');
                const maxStock = selectedBtn ? parseInt(selectedBtn.dataset.stock) : 999;
                
                if (val < maxStock) {
                    quantityInput.value = val + 1;
                    formQuantity.value = val + 1;
                }
            });

            quantityInput.addEventListener('change', function() {
                formQuantity.value = this.value;
            });

            // Form validation
            document.getElementById('add-to-cart-form').addEventListener('submit', function(e) {
                if (!selectedSizeInput.value) {
                    e.preventDefault();
                    @if(app()->getLocale() == 'ku')
                        alert('تکایە قەبارەیەک هەڵبژێرە!');
                    @elseif(app()->getLocale() == 'ar')
                        alert('الرجاء اختيار مقاس!');
                    @else
                        alert('Please select a size!');
                    @endif
                    return false;
                }
            });
        });
    </script>
</x-layouts.main>
