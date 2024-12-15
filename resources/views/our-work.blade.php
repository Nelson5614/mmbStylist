@extends('layouts.app')

@section('title', 'Our Work')

@section('content')
<div class="bg-white" x-data="{ activeCategory: '{{ request('category') ?? 'all' }}' }">
    <!-- Hero Section -->
    <div class="py-16 text-center text-white bg-black">
        <h1 class="mb-4 text-4xl font-bold">Our Work</h1>
        <p class="text-lg">Discover our latest collections and custom designs</p>
    </div>

    <!-- Categories Section -->
    <div class="container px-4 py-8 mx-auto">
        <div class="flex pb-4 space-x-4 overflow-x-auto">
            <!-- All Category Button -->
            <button 
                @click="activeCategory = 'all'" 
                :class="{'bg-black text-white': activeCategory === 'all', 'bg-white text-black': activeCategory !== 'all'}"
                class="px-6 py-2 border-2 border-black hover:bg-black hover:text-white transition-colors whitespace-nowrap">
                All Products
            </button>

            <!-- Dynamic Categories -->
            @foreach($categories as $category)
                <button 
                    @click="activeCategory = '{{ $category->slug }}'"
                    :class="{'bg-black text-white': activeCategory === '{{ $category->slug }}', 'bg-white text-black': activeCategory !== '{{ $category->slug }}'}"
                    class="px-6 py-2 border-2 border-black hover:bg-black hover:text-white transition-colors whitespace-nowrap">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- Products Grid -->
    <div class="container px-4 py-8 mx-auto">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
            @foreach($products as $product)
            <div 
                x-show="activeCategory === 'all' || activeCategory === '{{ $product->category->slug }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                class="group">
                <!-- Product Card -->
                <div class="overflow-hidden transition-shadow duration-300 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg">
                    <!-- Product Image -->
                    <div class="relative h-[400px]"> <!-- Fixed height for consistent sizing -->
                        <img 
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">

                        <!-- Category Tag -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 text-sm text-white bg-black">
                                {{ $product->category->name }}
                            </span>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-6"> <!-- Increased padding for better spacing -->
                        <h3 class="mb-3 text-xl font-semibold">{{ $product->name }}</h3>
                        <p class="mb-4 text-sm text-gray-600 line-clamp-3">{!! $product->description !!}</p>
                        <div class="flex flex-col space-y-3">
                            <span class="text-2xl font-bold">M{{ number_format($product->price, 2) }}</span>
                            <a 
                                href="{{ route('contact') }}" 
                                class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-white transition-colors bg-black hover:bg-gray-800">
                                Contact us to buy
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>
</div>

@push('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    // Optional: Scroll to top when changing categories
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
@endpush
@endsection