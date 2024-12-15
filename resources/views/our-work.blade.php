@extends('layouts.app')

@section('title', 'Our Work')

@section('content')
<!-- resources/views/our-work.blade.php -->

<div class="bg-white">
    <!-- Hero Section -->
    <div class="bg-black text-white py-16 text-center">
        <h1 class="text-4xl font-bold mb-4">Our Work</h1>
        <p class="text-lg">Discover our latest collections and custom designs</p>
    </div>

    <!-- Categories Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex overflow-x-auto space-x-4 pb-4">
            <!-- All Category Button -->
            <button class="px-6 py-2 border-2 border-black hover:bg-black hover:text-white transition-colors whitespace-nowrap
                {{ !request('category') ? 'bg-black text-white' : 'bg-white text-black' }}">
                All Products
            </button>
            
            <!-- Dynamic Categories -->
            @foreach($categories as $category)
                <button class="px-6 py-2 border-2 border-black hover:bg-black hover:text-white transition-colors whitespace-nowrap
                    {{ request('category') == $category->slug ? 'bg-black text-white' : 'bg-white text-black' }}">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- Products Grid -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($products as $product)
            <div class="group">
                <!-- Product Card -->
                <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <!-- Product Image -->
                    <div class="relative aspect-w-1 aspect-h-1">
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             alt="{{ $product->name }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        
                        <!-- Category Tag -->
                        <div class="absolute top-4 left-4">
                            <span class="bg-black text-white px-3 py-1 text-sm">
                                {{ $product->category->name }}
                            </span>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-600 text-sm mb-3">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold">M{{ number_format($product->price, 2) }}</span>
                            <a href="{{ route('products.show', $product) }}" 
                               class="px-4 py-2 bg-black text-white hover:bg-gray-800 transition-colors">
                                View Details
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
@endsection