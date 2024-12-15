@extends('layouts.app')

@section('title', 'About')

@section('content')

    <div class="bg-white">
        <!-- Hero Section -->
        <div class="bg-black text-white py-16 text-center">
            <h1 class="text-4xl font-bold mb-4">About Us</h1>
        </div>

        <!-- Vision & Mission Section -->
        <div class="container mx-auto px-4 py-16">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Vision -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Vision</h2>
                    <p class="mb-4">To be the recognised stylist designing clothes that boosts confidence and enhance natural beauty</p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Provide outstanding designs</li>
                        <li>Providing enduring and reliable fashion wear</li>
                        <li>Providing bespoke and custom made designs</li>
                    </ul>
                </div>

                <!-- Mission -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Mission</h2>
                    <p class="mb-4">To create versatile, stylish clothes that take you from day to night with ease. We aim to break the fashion mold, creating clothes that are as unique and individual as you are to enhance natural beauty of all types.</p>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="bg-gray-50 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-12 text-center">Our Values</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Value Cards -->
                    <div class="border border-black p-6">
                        <h3 class="text-xl font-bold mb-4">Creativity and Innovation</h3>
                        <p>We're always up to date on the latest developments across the industry, so that we can provide our clients with the best possible solutions and updates.</p>
                    </div>

                    <div class="border border-black p-6">
                        <h3 class="text-xl font-bold mb-4">Commitment</h3>
                        <p>We take responsibility for the success of every project that comes our way, whether that's with a small client or a major company.</p>
                    </div>

                    <div class="border border-black p-6">
                        <h3 class="text-xl font-bold mb-4">Excellence</h3>
                        <p>We believe in maintaining excellence in everything we do. Whether implementing solutions or providing quality service.</p>
                    </div>

                    <div class="border border-black p-6">
                        <h3 class="text-xl font-bold mb-4">Social Responsibility</h3>
                        <p>As part of a broader society, everything we do carries an ongoing commitment to working towards a more positive, greener, and better world.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection