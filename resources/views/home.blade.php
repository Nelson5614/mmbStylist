@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="relative h-screen ">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img 
                src="{{ asset('images/hero-bg.jpg') }}" 
                alt="Fashion Background" 
                class="w-full h-full object-cover"
            >
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative h-full flex items-center">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl">
                    <h1 class="text-white text-4xl md:text-6xl font-bold mb-4 leading-tight">
                        Improve Your Style<br>
                        <span class="text-2xl md:text-4xl font-light">With Bespoke Fashion Design</span>
                    </h1>
                    
                    <p class="text-gray-200 text-lg md:text-xl mb-8 leading-relaxed">
                        Creating versatile, stylish clothes that enhance your natural beauty 
                        and boost your confidence from day to night.
                    </p>

                    <div class="space-x-4">
                        <a 
                            href="{{route('our-work')}}" 
                            class="inline-block bg-white text-black px-8 py-3 text-lg font-semibold hover:bg-gray-100 transition-colors duration-300"
                        >
                            View Our Work
                        </a>
                        <a 
                            href="{{route('contact')}}" 
                            class="inline-block border-2 border-white text-white px-8 py-3 text-lg font-semibold hover:bg-white hover:text-black transition-colors duration-300"
                        >
                            Book Consultation
                        </a>
                    </div>

                    <!-- Features -->
                    <div class="mt-16 grid grid-cols-3 gap-8">
                        <div class="text-center">
                            <h3 class="text-white font-semibold mb-2">Bespoke Design</h3>
                            <p class="text-gray-300 text-sm">Custom-made to your preferences</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-white font-semibold mb-2">Expert Craftsmanship</h3>
                            <p class="text-gray-300 text-sm">Quality in every detail</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-white font-semibold mb-2">Personal Styling</h3>
                            <p class="text-gray-300 text-sm">Tailored to your lifestyle</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

     <!-- Best Sellers Section -->
     <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Best Sellers</h2>
                <div class="w-24 h-1 bg-black mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Discover our most sought-after designs that have captured hearts and defined styles
                </p>
            </div>

            <!-- Products Grid -->
            <div class="container px-4 py-8 mx-auto">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                    @foreach($bestseller as $bestseller)
                 
                        <!-- Product Card -->
                        <div class="overflow-hidden transition-shadow duration-300 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg">
                            <!-- Product Image -->
                            <div class="relative h-[400px]"> <!-- Fixed height for consistent sizing -->
                                <img 
                                    src="{{ asset('storage/' . $bestseller->image) }}"
                                    alt="{{ $bestseller->name }}"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">

                            
                            </div>

                            <!-- Product Info -->
                            <div class="p-6"> <!-- Increased padding for better spacing -->
                                <h3 class="mb-3 text-xl font-semibold">{{ $bestseller->name }}</h3>
                                <p class="mb-4 text-sm text-gray-600 line-clamp-3">{!! $bestseller->description !!}</p>
                                <div class="flex flex-col space-y-3">
                                    <span class="text-2xl font-bold">M{{ number_format($bestseller->price, 2) }}</span>
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
                    
                    @endforeach
                </div>
            </div>

     
    </div>

            <!-- View All Button -->
            <div class="text-center mt-16">
                <a 
                    href="{{route('our-work')}}" 
                    class="inline-block border-2 border-black text-black px-8 py-3 text-lg font-semibold hover:bg-black hover:text-white transition-colors duration-300"
                >
                    View Full Products
                </a>
            </div>
        </div>
    </section>


    <!-- Our Process Section -->
    <section class="py-20 bg-white text-black">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">The Art of Bespoke Fashion</h2>
                <div class="w-24 h-1 bg-black mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Experience our meticulous process of creating your perfect garment
                </p>
            </div>

            <!-- Process Steps -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="aspect-square border border-black/10 flex flex-col items-center justify-center p-8 transition-all duration-300 group-hover:border-black/30 bg-gray-50">
                        <div class="text-4xl font-light mb-4">01</div>
                        <h3 class="text-xl font-semibold mb-3">Consultation</h3>
                        <p class="text-gray-600 text-center text-sm">
                            Personal meeting to discuss your style preferences, lifestyle needs, and design aspirations
                        </p>
                    </div>
                    <div class="hidden md:block absolute -right-4 top-1/2 transform -translate-y-1/2 z-10">
                        <svg class="w-8 h-8 text-black/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative group">
                    <div class="aspect-square border border-black/10 flex flex-col items-center justify-center p-8 transition-all duration-300 group-hover:border-black/30 bg-gray-50">
                        <div class="text-4xl font-light mb-4">02</div>
                        <h3 class="text-xl font-semibold mb-3">Design</h3>
                        <p class="text-gray-600 text-center text-sm">
                            Custom design creation with detailed sketches and fabric selection
                        </p>
                    </div>
                    <div class="hidden md:block absolute -right-4 top-1/2 transform -translate-y-1/2 z-10">
                        <svg class="w-8 h-8 text-black/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative group">
                    <div class="aspect-square border border-black/10 flex flex-col items-center justify-center p-8 transition-all duration-300 group-hover:border-black/30 bg-gray-50">
                        <div class="text-4xl font-light mb-4">03</div>
                        <h3 class="text-xl font-semibold mb-3">Crafting</h3>
                        <p class="text-gray-600 text-center text-sm">
                            Expert tailoring and meticulous attention to every detail
                        </p>
                    </div>
                    <div class="hidden md:block absolute -right-4 top-1/2 transform -translate-y-1/2 z-10">
                        <svg class="w-8 h-8 text-black/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group">
                    <div class="aspect-square border border-black/10 flex flex-col items-center justify-center p-8 transition-all duration-300 group-hover:border-black/30 bg-gray-50">
                        <div class="text-4xl font-light mb-4">04</div>
                        <h3 class="text-xl font-semibold mb-3">Perfect Fit</h3>
                        <p class="text-gray-600 text-center text-sm">
                            Final fitting and adjustments for the perfect finish
                        </p>
                    </div>
                </div>
            </div>


            <!-- CTA -->
            <div class="text-center mt-16">
                <a 
                    href="{{route('contact')}}" 
                    class="inline-block border-2 border-black text-black px-8 py-3 text-lg font-semibold hover:bg-black hover:text-white transition-colors duration-300"
                >
                    Book Your Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white text-black" aria-label="Fashion Design and Tailoring Services">
        <div class="container mx-auto px-4">
            <!-- SEO-optimized heading -->
            <div class="text-center mb-20">
                <span class="text-sm uppercase tracking-wider text-gray-500">What We Do Best</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4">Our Expertise</h2>
                <div class="w-24 h-0.5 bg-black mx-auto"></div>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 max-w-6xl mx-auto">
                <!-- Designing -->
                <div class="group relative">
                    <div class="overflow-hidden">
                        <img 
                            src="{{ asset('images/service-designing.jpg') }}" 
                            alt="Fashion Design Services in Lesotho" 
                            class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <div class="relative bg-white p-8 mx-4 -mt-16 border border-gray-100 shadow-lg">
                        <div class="absolute -top-4 left-4 w-8 h-8 bg-black text-white flex items-center justify-center text-sm font-light">
                            01
                        </div>
                        <h3 class="text-2xl font-semibold mb-4">Designing</h3>
                        <ul class="space-y-2 text-gray-600 mb-6">
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Creative Concept Development
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Fashion Sketching
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Pattern Making
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Style Consultation
                            </li>
                        </ul>
                        <a 
                            href="/services/designing" 
                            class="inline-flex items-center text-sm font-semibold hover:text-gray-600 transition-colors"
                        >
                            Discover More 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Manufacturing -->
                <div class="group relative">
                    <div class="overflow-hidden">
                        <img 
                            src="{{ asset('images/service-manufacturing.jpg') }}" 
                            alt="Fashion Manufacturing Services" 
                            class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <div class="relative bg-white p-8 mx-4 -mt-16 border border-gray-100 shadow-lg">
                        <div class="absolute -top-4 left-4 w-8 h-8 bg-black text-white flex items-center justify-center text-sm font-light">
                            02
                        </div>
                        <h3 class="text-2xl font-semibold mb-4">Manufacturing</h3>
                        <ul class="space-y-2 text-gray-600 mb-6">
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Quality Production
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Fabric Sourcing
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Bulk Manufacturing
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Quality Control
                            </li>
                        </ul>
                        <a 
                            href="/services/manufacturing" 
                            class="inline-flex items-center text-sm font-semibold hover:text-gray-600 transition-colors"
                        >
                            Discover More 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Tailoring -->
                <div class="group relative">
                    <div class="overflow-hidden">
                        <img 
                            src="{{ asset('images/service-tailoring.jpg') }}" 
                            alt="Professional Tailoring Services" 
                            class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <div class="relative bg-white p-8 mx-4 -mt-16 border border-gray-100 shadow-lg">
                        <div class="absolute -top-4 left-4 w-8 h-8 bg-black text-white flex items-center justify-center text-sm font-light">
                            03
                        </div>
                        <h3 class="text-2xl font-semibold mb-4">Tailoring</h3>
                        <ul class="space-y-2 text-gray-600 mb-6">
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Perfect Fit Alterations
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Garment Reconstruction
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Size Adjustments
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Expert Finishing
                            </li>
                        </ul>
                        <a 
                            href="/services/tailoring" 
                            class="inline-flex items-center text-sm font-semibold hover:text-gray-600 transition-colors"
                        >
                            Discover More 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Custom Design -->
                <div class="group relative">
                    <div class="overflow-hidden">
                        <img 
                            src="{{ asset('images/service-custom.jpg') }}" 
                            alt="Bespoke Custom Design Services" 
                            class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <div class="relative bg-white p-8 mx-4 -mt-16 border border-gray-100 shadow-lg">
                        <div class="absolute -top-4 left-4 w-8 h-8 bg-black text-white flex items-center justify-center text-sm font-light">
                            04
                        </div>
                        <h3 class="text-2xl font-semibold mb-4">Custom Design</h3>
                        <ul class="space-y-2 text-gray-600 mb-6">
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Bespoke Creation
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Personal Styling
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Unique Designs
                            </li>
                            <li class="flex items-center">
                                <span class="w-1.5 h-1.5 bg-black rounded-full mr-2"></span>
                                Special Occasions
                            </li>
                        </ul>
                        <a 
                            href="/services/custom-design" 
                            class="inline-flex items-center text-sm font-semibold hover:text-gray-600 transition-colors"
                        >
                            Discover More 
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-20">
                <a 
                    href="/contact" 
                    class="inline-flex items-center justify-center border-2 border-black text-black px-8 py-3 text-lg font-semibold hover:bg-black hover:text-white transition-colors duration-300 group"
                >
                    Schedule a Consultation
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

   <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50" aria-label="Client Testimonials">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                    Client Stories
                </h2>
                <div class="w-24 h-1 bg-black mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Hear from our valued clients about their experience with MMB Stylist
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 shadow-sm relative">
                    <!-- Quote Icon -->
                    <div class="absolute -top-4 -left-4">
                        <svg class="w-8 h-8 text-black/10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <p class="text-gray-600 italic leading-relaxed">
                            "MMB Stylist transformed my wedding vision into reality. The attention to detail and craftsmanship in my custom wedding dress was beyond exceptional. I felt absolutely beautiful on my special day."
                        </p>
                        
                        <div class="flex items-center pt-4 border-t border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500 font-semibold text-lg">LM</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-black font-semibold">Lineo Maphobole</h4>
                                <p class="text-gray-500 text-sm">Wedding Collection</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 shadow-sm relative">
                    <div class="absolute -top-4 -left-4">
                        <svg class="w-8 h-8 text-black/10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <p class="text-gray-600 italic leading-relaxed">
                            "The business suits designed by MMB Stylist have become my signature look. The perfect fit and quality craftsmanship make me feel confident in every meeting. Truly exceptional service."
                        </p>
                        
                        <div class="flex items-center pt-4 border-t border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500 font-semibold text-lg">TM</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-black font-semibold">Thabo Mokhele</h4>
                                <p class="text-gray-500 text-sm">Business Collection</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 shadow-sm relative">
                    <div class="absolute -top-4 -left-4">
                        <svg class="w-8 h-8 text-black/10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <div class="space-y-4">
                        <p class="text-gray-600 italic leading-relaxed">
                            "I appreciate the attention to detail and personal touch in every interaction. The custom evening gown they created for me received countless compliments. Their work is truly outstanding."
                        </p>
                        
                        <div class="flex items-center pt-4 border-t border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500 font-semibold text-lg">PM</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-black font-semibold">Palesa Motaung</h4>
                                <p class="text-gray-500 text-sm">Evening Collection</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Logos -->
            <div class="mt-20">
                <p class="text-center text-gray-600 mb-8">Trusted by Leading Businesses</p>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
                    <!-- Placeholder logos with initials -->
                    <div class="h-12 w-32 bg-white shadow-sm flex items-center justify-center">
                        <span class="text-gray-400 font-semibold">LOGO 1</span>
                    </div>
                    <div class="h-12 w-32 bg-white shadow-sm flex items-center justify-center">
                        <span class="text-gray-400 font-semibold">LOGO 2</span>
                    </div>
                    <div class="h-12 w-32 bg-white shadow-sm flex items-center justify-center">
                        <span class="text-gray-400 font-semibold">LOGO 3</span>
                    </div>
                    <div class="h-12 w-32 bg-white shadow-sm flex items-center justify-center">
                        <span class="text-gray-400 font-semibold">LOGO 4</span>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-16">
                <a 
                    href="/testimonials" 
                    class="inline-block border-2 border-black text-black px-8 py-3 text-lg font-semibold hover:bg-black hover:text-white transition-colors duration-300"
                    aria-label="Read more client testimonials"
                >
                    Read More Stories
                </a>
            </div>
        </div>
    </section>
@endsection