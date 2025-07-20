<!-- Navigation -->
<nav class="fixed top-0 w-full z-50 glass-effect" data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold gradient-text-animated font-mono">{'
                <MA />'}
            </div>
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
                <flux:radio.group x-data x-model="$flux.appearance" class="theme-toggle scale-75">
                    <flux:radio value="light">Light</flux:radio>
                    <flux:radio value="dark">Dark</flux:radio>
                    <flux:radio value="system">System</flux:radio>
                </flux:radio.group>
            </div>
        </div>
    </div>
</nav>
