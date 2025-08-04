<!-- Mobile Menu Overlay -->
<div id="mobile-menu"
    class="fixed inset-0 z-40 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <!-- Background Overlay -->
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"></div>

    <!-- Menu Content -->
    <div class="relative bg-neo-green h-full pt-20 px-6 flex flex-col">
        <div class="flex flex-col space-y-8 text-left">
            <a href="{{ route('home') }}"
                class="mobile-nav-link text-2xl font-semibold text-white hover:text-neon-green transition-all duration-300 transform hover:translate-x-2 opacity-0"
                wire:navigate style="animation-delay: 0.1s">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Home
                </span>
            </a>

            <a href="{{ route('about') }}"
                class="mobile-nav-link text-2xl font-semibold text-white hover:text-neon-green transition-all duration-300 transform hover:translate-x-2 opacity-0"
                wire:navigate style="animation-delay: 0.2s">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    About
                </span>
            </a>

            <a href="/projects"
                class="mobile-nav-link text-2xl font-semibold text-white hover:text-neon-green transition-all duration-300 transform hover:translate-x-2 opacity-0"
                wire:navigate style="animation-delay: 0.3s">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    Projects
                </span>
            </a>

            <a href="/team"
                class="mobile-nav-link text-2xl font-semibold text-white hover:text-neon-green transition-all duration-300 transform hover:translate-x-2 opacity-0"
                wire:navigate style="animation-delay: 0.4s">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    Team
                </span>
            </a>

            <a href="/blogs"
                class="mobile-nav-link text-2xl font-semibold text-white hover:text-neon-green transition-all duration-300 transform hover:translate-x-2 opacity-0"
                wire:navigate style="animation-delay: 0.5s">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                        </path>
                    </svg>
                    Blog
                </span>
            </a>

            <a href="#contact"
                class="mobile-nav-link text-2xl font-semibold text-white hover:text-neon-green transition-all duration-300 transform hover:translate-x-2 opacity-0"
                style="animation-delay: 0.6s">
                <span class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Contact
                </span>
            </a>
        </div>

        <!-- Mobile Menu Footer -->
        <div class="mt-auto pb-8">
            <div class="border-t border-white/20 pt-6">
                <p class="text-gray-400 text-sm text-center">
                    © 2024 Muhammad Aslam
                </p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-neon-green transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-neon-green transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-neon-green transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('css')
    <style>
        /* Mobile Navigation Styles */
        .mobile-menu-button {
            position: relative;
            z-index: 60;
        }

        .mobile-menu-button:hover {
            transform: scale(1.05);
        }

        #mobile-menu {
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(20px);
        }

        .mobile-nav-link {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 1rem;
            animation: slideInLeft 0.5s ease-out forwards;
        }

        .mobile-nav-link:last-child {
            border-bottom: none;
        }

        .mobile-nav-link svg {
            transition: transform 0.3s ease;
        }

        .mobile-nav-link:hover svg {
            transform: scale(1.1);
        }

        /* Glass effect for mobile menu */
        .glass-effect {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Animation for mobile menu items */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Navigation link hover effects */
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #00ff88, #00cc6a);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Mobile menu open state */
        .mobile-menu-open {
            overflow: hidden;
        }

        .mobile-menu-open #mobile-menu {
            transform: translateX(0);
        }

        .mobile-menu-open #menu-icon {
            display: none;
        }

        .mobile-menu-open #close-icon {
            display: block;
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .mobile-nav-link {
                font-size: 1.5rem;
                padding: 1rem 0;
            }

            #mobile-menu {
                padding-top: 80px;
            }
        }

        @media (max-width: 480px) {
            .mobile-nav-link {
                font-size: 1.25rem;
            }
        }
    </style>
@endpush
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const body = document.body;

            // Toggle mobile menu
            mobileMenuButton.addEventListener('click', function() {
                const isOpen = body.classList.contains('mobile-menu-open');

                if (isOpen) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            });

            function openMobileMenu() {
                body.classList.add('mobile-menu-open');
                mobileMenu.style.transform = 'translateX(0)';
                menuIcon.style.display = 'none';
                closeIcon.style.display = 'block';

                // Animate menu items
                const menuItems = document.querySelectorAll('.mobile-nav-link');
                menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateX(0)';
                    }, index * 100);
                });
            }

            function closeMobileMenu() {
                body.classList.remove('mobile-menu-open');
                mobileMenu.style.transform = 'translateX(100%)';
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';

                // Reset menu items
                const menuItems = document.querySelectorAll('.mobile-nav-link');
                menuItems.forEach(item => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateX(-30px)';
                });
            }

            // Close menu when clicking on a link
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    setTimeout(() => {
                        closeMobileMenu();
                    }, 200);
                });
            });

            // Close menu when clicking outside
            mobileMenu.addEventListener('click', function(e) {
                if (e.target === mobileMenu) {
                    closeMobileMenu();
                }
            });

            // Close menu on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && body.classList.contains('mobile-menu-open')) {
                    closeMobileMenu();
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && body.classList.contains('mobile-menu-open')) {
                    closeMobileMenu();
                }
            });
        });
    </script>
@endpush
