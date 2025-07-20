<!-- Navigation -->
<nav class="fixed top-0 w-full z-50 glass-effect" data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold gradient-text-animated font-mono">{'
                <MA />'}
            </div>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{route('home')}}" 
                    class="nav-link hover:text-neon-green transition-all duration-300 relative" wire:navigate>Home</a>
                <a href="{{route('about')}}" 
                    class="nav-link hover:text-neon-green transition-all duration-300 relative" wire:navigate>About</a>
                <a href="#skills"
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Skills</a>
                <a href="/projects" wire:navigate
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Projects</a>
                <a href="/team" wire:navigate
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Team</a>
                <a href="/blogs" wire:navigate
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Blog</a>
                <a href="#testimonials"
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Testimonials</a>
                <a href="#contact"
                    class="nav-link hover:text-neon-green transition-all duration-300 relative">Contact</a>

                <!-- Theme Toggle -->
                <div class="theme-toggle" id="themeToggle" title="Toggle theme">
                    <span class="theme-icon">🌙</span>
                    <div class="theme-toggle-slider">
                        <span id="sliderIcon">🌙</span>
                    </div>
                    <span class="theme-icon">☀️</span>
                </div>
            </div>
            <div class="md:hidden flex items-center space-x-4">
                <!-- Mobile Theme Toggle -->
                <div class="theme-toggle scale-75" id="mobileThemeToggle" title="Toggle theme">
                    <span class="theme-icon">🌙</span>
                    <div class="theme-toggle-slider">
                        <span id="mobileSliderIcon">🌙</span>
                    </div>
                    <span class="theme-icon">☀️</span>
                </div>
                <button class="text-neon-green magnetic-button" id="mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>