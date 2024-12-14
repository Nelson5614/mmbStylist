@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- About Page -->
    <div class="bg-white">
        <!-- Hero Section -->
        <section class="relative h-[80vh] flex items-center">
            <div class="absolute inset-0">
                <!-- Use a high-end fashion atelier/studio image -->
                <img 
                    src="https://images.unsplash.com/photo-1581375074612-d1fd0e661aeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                    alt="MMB Stylist Workshop" 
                    class="w-full h-full object-cover"
                >
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <div class="container mx-auto px-4 relative">
                <div class="max-w-3xl">
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        Where Fashion Meets Artistry
                    </h1>
                    <p class="text-xl text-gray-200 leading-relaxed max-w-2xl">
                        Creating bespoke fashion that celebrates individuality and enhances natural beauty.
                    </p>
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left: Vision -->
                    <div>
                        <span class="text-sm uppercase tracking-wider text-gray-500">Our Vision</span>
                        <h2 class="text-4xl font-bold mt-2 mb-8">Recognized Excellence in Fashion Design</h2>
                        <div class="prose prose-lg text-gray-600">
                            <p class="mb-6">
                                To be the recognised stylist designing clothes that boosts confidence and enhance natural beauty.
                            </p>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-black mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Provide outstanding designs</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-black mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Providing enduring and reliable fashion wear</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-black mt-1 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Providing bespoke and custom made designs</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right: Image -->
                    <div class="relative">
                        <!-- Use a fashion design/sketching image -->
                        <img 
                            src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" 
                            alt="Fashion Design Process" 
                            class="w-full h-[600px] object-cover rounded-lg shadow-xl"
                        >
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="py-20 bg-black text-white">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <span class="text-sm uppercase tracking-wider text-gray-400">Our Mission</span>
                    <h2 class="text-4xl font-bold mt-2 mb-8">Creating Unique Fashion Statements</h2>
                    <p class="text-xl leading-relaxed text-gray-300">
                        To create versatile, stylish clothes that take you from day to night with ease. We aim to break the fashion mold, creating clothes that are as unique and individual as you are to enhance natural beauty of all types.
                    </p>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <span class="text-sm uppercase tracking-wider text-gray-500">Our Values</span>
                    <h2 class="text-4xl font-bold mt-2">What Drives Us</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Values cards here (same as before but with refined styling) -->
                    <!-- Each value in a card with hover effects -->
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                        <!-- Left: Map or Image -->
                        <div class="relative h-[400px] rounded-lg overflow-hidden">
                            <!-- Use a studio/workspace image -->
                            <img 
                                src="https://images.unsplash.com/photo-1519340241574-2cec6aef0c01?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" 
                                alt="MMB Stylist Studio" 
                                class="w-full h-full object-cover"
                            >
                        </div>

                        <!-- Right: Contact Info -->
                        <div class="flex flex-col justify-center">
                            <h2 class="text-3xl font-bold mb-8">Visit Our Studio</h2>
                            <div class="space-y-6">
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Location</h3>
                                    <p class="text-gray-600">
                                        Ha Abia Opp Villa Hospital<br>
                                        Maseru, Lesotho
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Contact</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>
                                            <a href="tel:+26659392748" class="hover:text-black transition-colors">
                                                +266 59392748
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+26662400182" class="hover:text-black transition-colors">
                                                +266 62400182
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:info@mmbstylist.co.ls" class="hover:text-black transition-colors">
                                                info@mmbstylist.co.ls
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection