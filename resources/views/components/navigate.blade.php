<!-- Navigation -->
<nav class="fixed top-0 w-full z-50 glass-effect" data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="text-2xl font-bold gradient-text-animated font-mono">
                <x-app-logo />
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('home') }}" class="nav-link hover:text-neon-green transition-all duration-300 relative"
                    wire:navigate>Home</a>
                <a href="{{ route('about') }}" class="nav-link hover:text-neon-green transition-all duration-300 relative"
                    wire:navigate>About</a>
                <a href="/projects" class="nav-link hover:text-neon-green transition-all duration-300 relative"
                    wire:navigate>Projects</a>
                <a href="/team" class="nav-link hover:text-neon-green transition-all duration-300 relative"
                    wire:navigate>Team</a>
                <a href="/blogs" class="nav-link hover:text-neon-green transition-all duration-300 relative"
                    wire:navigate>Blog</a>
                <a href="#contact"
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button"
                    class="mobile-menu-button p-2 rounded-lg hover:bg-white/10 transition-colors duration-300">
                    <svg id="menu-icon" class="w-6 h-6 text-white transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 text-white transition-transform duration-300 hidden"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

