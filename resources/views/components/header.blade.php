<!-- Header Component (header.blade.php) -->
<header class="bg-white border-b fixed top-0 left-0 right-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img 
                        src="{{ asset('images/logo.jpg') }}" 
                        alt="MMB Stylist Logo" 
                        class="h-20 w-auto"
                    >
                    <span class="text-2xl font-bold">MMB Stylist</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <button 
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden text-black focus:outline-none"
                aria-label="Toggle menu"
            >
                <svg 
                    class="h-6 w-6" 
                    x-show="!mobileMenuOpen" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg 
                    class="h-6 w-6" 
                    x-show="mobileMenuOpen" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                    style="display: none;"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-black hover:text-gray-600 transition-colors duration-200">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-black hover:text-gray-600 transition-colors duration-200">
                    About
                </a>
                <a href="{{ route('our-work') }}" class="text-black hover:text-gray-600 transition-colors duration-200">
                    Our Work
                </a>
                <a href="{{ route('contact') }}" class="text-black hover:text-gray-600 transition-colors duration-200">
                    Contact
                </a>
            </div>
        </nav>

        <!-- Mobile Navigation -->
        <div 
            class="md:hidden"
            x-show="mobileMenuOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            style="display: none;"
        >
            <div class="py-4 space-y-4">
                <a 
                    href="{{ route('home') }}" 
                    class="block text-black hover:text-gray-600 transition-colors duration-200"
                >
                    Home
                </a>
                <a 
                    href="{{ route('about') }}" 
                    class="block text-black hover:text-gray-600 transition-colors duration-200"
                >
                    About
                </a>
                <a 
                    href="{{ route('our-work') }}" 
                    class="block text-black hover:text-gray-600 transition-colors duration-200"
                >
                    Our Work
                </a>
                <a 
                    href="{{ route('contact') }}" 
                    class="block text-black hover:text-gray-600 transition-colors duration-200"
                >
                    Contact
                </a>
            </div>
        </div>
    </div>
</header>