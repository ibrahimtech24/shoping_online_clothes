<x-layouts.main>
    <div class="py-6 sm:py-10">
        {{-- Page Header --}}
        <div class="text-center mb-8 sm:mb-12">
            <span class="inline-block px-3 py-1 text-xs font-semibold text-primary-600 bg-primary-50 rounded-full mb-4">داواکاریەکان</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-dark-900 mb-3">داواکاریەکانی <span class="gradient-text">من</span></h1>
            <p class="text-dark-400 text-sm sm:text-base">شوێنکەوتن و بەڕێوەبردنی داواکاریەکانت</p>
        </div>

        {{-- Filter --}}
        <div class="flex justify-center mb-6 sm:mb-8">
            <form id="filterForm" action="{{ route('orders.index') }}" method="GET" 
                  class="bg-white rounded-xl sm:rounded-2xl shadow-lg shadow-dark-900/5 border border-dark-100 p-1.5 sm:p-2 inline-flex items-center gap-2">
                <span class="text-primary-500 pl-3 sm:pl-4"><i class="fa-solid fa-filter"></i></span>
                <select name="state" id="filter" onchange="submitForm()"
                    class="px-3 sm:px-4 py-2 pr-8 sm:pr-10 bg-transparent border-0 focus:ring-0 outline-none font-medium text-dark-700 cursor-pointer text-sm sm:text-base">
                    <option value="" @if (request('state') == null) selected @endif>هەموو داواکاریەکان</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" @if (request('state') == $state->id) selected @endif>
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>
                <input type="hidden" name="page" value="{{ request('page') }}">
            </form>
        </div>

        @if (count($orders))
            {{-- Orders Grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                @foreach ($orders as $order)
                    <x-cards.order :order="$order" route="orders.show" />
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-8 sm:mt-12">
                {{ $orders->links() }}
            </div>
        @else
            {{-- Empty State --}}
            <div class="text-center py-16 sm:py-20">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-dark-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-box text-3xl sm:text-4xl text-dark-300"></i>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-dark-900 mb-2">هێشتا داواکاریت نیە</h3>
                <p class="text-dark-400 mb-6 text-sm sm:text-base">دەست بکە بە کڕین تا داواکاریەکانت لێرە ببینی.</p>
                <a href="{{ route('products.index') }}" 
                   class="inline-flex items-center gap-2 btn-primary text-white px-6 py-3 rounded-xl font-medium">
                    <i class="fa-solid fa-shopping-bag"></i>
                    دەست بکە بە کڕین
                </a>
            </div>
        @endif
    </div>

    <script>
        function submitForm() {
            document.getElementById('filterForm').submit();
        }
    </script>
</x-layouts.main>
