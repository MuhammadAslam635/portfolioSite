<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Aslam - Backend Developer</title>
    <link rel="icon" href="{{ asset('assets/icon.png') }}" sizes="any">
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('assets/icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'neon-green': '#00ff88',
                        'dark-green': '#00cc6a',
                        'matrix-green': '#00ff41',
                        'deep-black': '#0a0a0a',
                        'charcoal': '#1a1a1a',
                        'gray-900': '#111111'
                    },
                    fontFamily: {
                        'mono': ['Monaco', 'Menlo', 'Ubuntu Mono', 'monospace'],
                    },
                    animation: {
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'float': 'float 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                        'matrix': 'matrix 20s linear infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'spin-slow': 'spin 8s linear infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                        'typewriter': 'typewriter 4s steps(40) infinite',
                        'gradient-shift': 'gradientShift 3s ease-in-out infinite',
                    },
                    keyframes: {
                        glow: {
                            '0%': {
                                boxShadow: '0 0 5px #00ff88, 0 0 10px #00ff88, 0 0 15px #00ff88'
                            },
                            '100%': {
                                boxShadow: '0 0 10px #00ff88, 0 0 20px #00ff88, 0 0 30px #00ff88'
                            }
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            }
                        },
                        slideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(30px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        },
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            }
                        },
                        matrix: {
                            '0%': {
                                transform: 'translateY(-100%)'
                            },
                            '100%': {
                                transform: 'translateY(100vh)'
                            }
                        },
                        wiggle: {
                            '0%, 100%': {
                                transform: 'rotate(-3deg)'
                            },
                            '50%': {
                                transform: 'rotate(3deg)'
                            }
                        },
                        typewriter: {
                            '0%': {
                                width: '0'
                            },
                            '50%': {
                                width: '100%'
                            },
                            '100%': {
                                width: '0'
                            }
                        },
                        gradientShift: {
                            '0%, 100%': {
                                backgroundPosition: '0% 50%'
                            },
                            '50%': {
                                backgroundPosition: '100% 50%'
                            }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            /* Dark theme (default) */
            --bg-primary: #0a0a0a;
            --bg-secondary: #1a1a1a;
            --bg-tertiary: #111111;
            --text-primary: #ffffff;
            --text-secondary: #e5e5e5;
            --text-muted: #a1a1aa;
            --accent-primary: #00ff88;
            --accent-secondary: #00cc6a;
            --accent-tertiary: #00ff41;
            --border-color: rgba(255, 255, 255, 0.1);
            --glass-bg: rgba(26, 26, 26, 0.8);
            --glass-border: rgba(0, 255, 136, 0.2);
            --shadow-color: rgba(0, 0, 0, 0.5);
            --matrix-opacity: 0.1;
            --code-bg: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
        }

        [data-theme="light"] {
            /* Light theme */
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-tertiary: #f1f5f9;
            --text-primary: #1e293b;
            --text-secondary: #334155;
            --text-muted: #64748b;
            --accent-primary: #00cc6a;
            --accent-secondary: #00b359;
            --accent-tertiary: #00ff41;
            --border-color: rgba(0, 0, 0, 0.1);
            --glass-bg: rgba(248, 250, 252, 0.8);
            --glass-border: rgba(0, 204, 106, 0.3);
            --shadow-color: rgba(0, 0, 0, 0.1);
            --matrix-opacity: 0.05;
            --code-bg: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        }

        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }

        .matrix-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .matrix-char {
            position: absolute;
            color: var(--accent-tertiary);
            font-family: monospace;
            font-size: 14px;
            opacity: var(--matrix-opacity);
            animation: matrix 20s linear infinite;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--accent-primary), var(--accent-secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-animated {
            background: linear-gradient(-45deg, var(--accent-primary), var(--accent-secondary), var(--accent-tertiary), var(--accent-primary));
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease-in-out infinite;
        }

        .glass-effect {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        .glass-effect:hover {
            background: var(--glass-bg);
            border: 1px solid var(--accent-primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px var(--shadow-color);
        }

        .code-block {
            background: var(--code-bg);
            border-left: 4px solid var(--accent-primary);
            position: relative;
            overflow: hidden;
            color: var(--text-primary);
        }

        .code-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 136, 0.1), transparent);
            transition: left 0.5s;
        }

        .code-block:hover::before {
            left: 100%;
        }

        .blog-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-origin: center;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
        }

        .blog-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 255, 136, 0.3);
            border-color: var(--accent-primary);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal.show {
            opacity: 1;
        }

        .modal-content {
            background: var(--bg-secondary);
            margin: 2% auto;
            padding: 20px;
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            transform: scale(0.7) translateY(-50px);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            color: var(--text-primary);
        }

        .modal.show .modal-content {
            transform: scale(1) translateY(0);
        }

        .close {
            color: var(--accent-primary);
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 15px;
            transition: all 0.3s ease;
        }

        .close:hover {
            color: var(--accent-secondary);
            transform: rotate(90deg);
        }

        .skill-bar {
            position: relative;
            overflow: hidden;
            background-color: var(--bg-tertiary);
        }

        .skill-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .team-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
        }

        .team-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(0, 255, 136, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            animation: rotate 4s linear infinite;
        }

        .team-card:hover::before {
            opacity: 1;
        }

        .team-card:hover {
            transform: translateY(-5px) rotateY(5deg);
            border-color: var(--accent-primary);
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .testimonial-card {
            transition: all 0.3s ease;
            position: relative;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: var(--text-primary);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 255, 136, 0.2);
            border-color: var(--accent-primary);
        }

        .testimonial-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(0, 255, 136, 0.05), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: inherit;
        }

        .testimonial-card:hover::before {
            opacity: 1;
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            animation-delay: -2s;
        }

        .floating-element:nth-child(3) {
            animation-delay: -4s;
        }

        .typewriter {
            overflow: hidden;
            border-right: 2px solid var(--accent-primary);
            white-space: nowrap;
            animation: typewriter 4s steps(40) infinite;
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .stagger-animation {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .stagger-animation.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .magnetic-button {
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .magnetic-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 255, 136, 0.4);
        }

        .project-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
        }

        .project-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 136, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .project-card:hover::after {
            left: 100%;
        }

        .project-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            border-color: var(--accent-primary);
        }

        /* Theme Toggle Styles */
        .theme-toggle {
            position: relative;
            width: 60px;
            height: 30px;
            background: var(--bg-tertiary);
            border: 2px solid var(--glass-border);
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5px;
            overflow: hidden;
        }

        .theme-toggle:hover {
            border-color: var(--accent-primary);
            box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
        }

        .theme-toggle-slider {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 24px;
            height: 24px;
            background: var(--accent-primary);
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            box-shadow: 0 2px 10px rgba(0, 255, 136, 0.4);
        }

        [data-theme="light"] .theme-toggle-slider {
            transform: translateX(30px);
            background: var(--accent-secondary);
        }

        .theme-icon {
            font-size: 12px;
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .theme-toggle:hover .theme-icon {
            opacity: 1;
        }

        /* Section backgrounds */
        .bg-charcoal {
            background-color: var(--bg-secondary) !important;
        }

        .bg-deep-black {
            background-color: var(--bg-primary) !important;
        }

        /* Text colors */
        .text-white {
            color: var(--text-primary) !important;
        }

        .text-gray-300 {
            color: var(--text-secondary) !important;
        }

        .text-gray-400 {
            color: var(--text-muted) !important;
        }

        .text-neon-green {
            color: var(--accent-primary) !important;
        }

        /* Form inputs */
        input,
        textarea {
            background-color: var(--bg-secondary) !important;
            border-color: var(--border-color) !important;
            color: var(--text-primary) !important;
        }

        input:focus,
        textarea:focus {
            border-color: var(--accent-primary) !important;
        }

        input::placeholder,
        textarea::placeholder {
            color: var(--text-muted) !important;
        }

        /* Navigation */
        nav {
            background: var(--glass-bg) !important;
            border-bottom: 1px solid var(--glass-border);
        }

        /* Footer */
        footer {
            background-color: var(--bg-primary) !important;
            border-top: 1px solid var(--border-color) !important;
        }

        /* Skill progress bars */
        .skill-progress {
            background-color: var(--accent-primary) !important;
        }

        /* Blog tags */
        .blog-tag {
            background-color: rgba(0, 255, 136, 0.2) !important;
            color: var(--accent-primary) !important;
        }

        /* Glow animation for light theme */
        [data-theme="light"] .animate-glow {
            box-shadow: 0 0 5px var(--accent-primary), 0 0 10px var(--accent-primary), 0 0 15px var(--accent-primary);
        }

        /* Theme transition overlay */
        .theme-transition {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, var(--accent-primary) 0%, transparent 70%);
            opacity: 0;
            pointer-events: none;
            z-index: 9999;
            transition: opacity 0.6s ease;
        }

        .theme-transition.active {
            opacity: 0.1;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <!-- Theme Transition Overlay -->
    <div class="theme-transition" id="themeTransition"></div>

    <!-- Matrix Background Effect -->
    <div class="matrix-bg" id="matrix-bg"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-effect" data-aos="fade-down">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold gradient-text-animated font-mono">{'
                    <MA />'}
                </div>
                <div class="hidden md:flex space-x-6 items-center">
                    <a href="#home"
                        class="nav-link hover:text-neon-green transition-all duration-300 relative">Home</a>
                    <a href="#about"
                        class="nav-link hover:text-neon-green transition-all duration-300 relative">About</a>
                    <a href="#skills"
                        class="nav-link hover:text-neon-green transition-all duration-300 relative">Skills</a>
                    <a href="#projects"
                        class="nav-link hover:text-neon-green transition-all duration-300 relative">Projects</a>
                    <a href="#team"
                        class="nav-link hover:text-neon-green transition-all duration-300 relative">Team</a>
                    <a href="#blogs"
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

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 z-40 hidden">
        <div class="glass-effect h-full pt-20 px-4">
            <div class="flex flex-col space-y-6 text-center">
                <a href="#home"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Home</a>
                <a href="#about"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">About</a>
                <a href="#skills"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Skills</a>
                <a href="#projects"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Projects</a>
                <a href="#team"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Team</a>
                <a href="#blogs"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Blog</a>
                <a href="#testimonials"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Testimonials</a>
                <a href="#contact"
                    class="text-xl hover:text-neon-green transition-colors duration-300 stagger-animation">Contact</a>
            </div>
        </div>
    </div>

    {{ $slot }}
    <!-- Footer -->
    <footer class="py-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400 font-mono" data-aos="fade-up">
                © 2024 Muhammad Aslam. Crafted with
                <span class="text-neon-green animate-pulse">{'<3'}< /span>
                        and lots of coffee.
            </p>
        </div>
    </footer>

    <script>
        // Blog content data
        const blogData = {
            blog1: {
                title: "Building Scalable APIs with NestJS",
                date: "December 15, 2024",
                readTime: "5 min read",
                content: `
                <h1 class="text-3xl font-bold mb-6 gradient-text-animated">Building Scalable APIs with NestJS</h1>
                <div class="flex items-center mb-8 text-gray-400">
                    <span>December 15, 2024</span>
                    <span class="mx-2">•</span>
                    <span>5 min read</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg mb-6">NestJS has revolutionized the way we build Node.js applications by bringing the power of TypeScript and decorators to server-side development. In this comprehensive guide, we'll explore how to architect robust and scalable APIs using NestJS framework.</p>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Why Choose NestJS?</h2>
                    <p class="mb-6">NestJS combines the best of both worlds - the flexibility of Node.js and the structure of enterprise-grade frameworks. It provides:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Built-in TypeScript support</li>
                        <li>Dependency injection system</li>
                        <li>Modular architecture</li>
                        <li>Extensive ecosystem of plugins</li>
                        <li>Built-in testing utilities</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Core Architecture Principles</h2>
                    <p class="mb-6">When building scalable APIs with NestJS, follow these key principles:</p>
                    
                    <div class="code-block p-4 rounded-lg mb-6 font-mono text-sm">
                        <span class="text-blue-400">@Controller</span>(<span class="text-yellow-400">'users'</span>)<br>
                        <span class="text-blue-400">export class</span> <span class="text-white">UserController</span> {<br>
                        &nbsp;&nbsp;<span class="text-blue-400">constructor</span>(<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">private readonly</span> <span class="text-white">userService</span>: <span class="text-neon-green">UserService</span><br>
                        &nbsp;&nbsp;) {}<br><br>
                        &nbsp;&nbsp;<span class="text-blue-400">@Get</span>()<br>
                        &nbsp;&nbsp;<span class="text-blue-400">async</span> <span class="text-white">findAll</span>() {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> <span class="text-blue-400">await</span> <span class="text-blue-400">this</span>.<span class="text-white">userService</span>.<span class="text-white">findAll</span>();<br>
                        &nbsp;&nbsp;}<br>
                        }
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Best Practices</h2>
                    <p class="mb-6">Here are some essential best practices for building production-ready NestJS applications:</p>
                    <ol class="list-decimal list-inside mb-6 space-y-2">
                        <li>Use DTOs for request/response validation</li>
                        <li>Implement proper error handling with filters</li>
                        <li>Use guards for authentication and authorization</li>
                        <li>Leverage interceptors for cross-cutting concerns</li>
                        <li>Write comprehensive unit and integration tests</li>
                    </ol>
                    
                    <p class="mb-6">By following these principles and best practices, you'll be able to build APIs that can handle millions of requests while maintaining clean, maintainable code.</p>
                </div>
            `
            },
            blog2: {
                title: "AI Integration with LangChain",
                date: "December 10, 2024",
                readTime: "8 min read",
                content: `
                <h1 class="text-3xl font-bold mb-6 gradient-text-animated">AI Integration with LangChain</h1>
                <div class="flex items-center mb-8 text-gray-400">
                    <span>December 10, 2024</span>
                    <span class="mx-2">•</span>
                    <span>8 min read</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg mb-6">LangChain has emerged as the go-to framework for building AI-powered applications. In this deep dive, we'll explore how to integrate LangChain with your existing applications to unlock the power of large language models.</p>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">What is LangChain?</h2>
                    <p class="mb-6">LangChain is a framework designed to simplify the creation of applications using large language models (LLMs). It provides:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Standardized interfaces for different LLM providers</li>
                        <li>Memory management for conversational AI</li>
                        <li>Chain composition for complex workflows</li>
                        <li>Document loading and processing utilities</li>
                        <li>Vector database integrations</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Getting Started</h2>
                    <p class="mb-6">Here's a simple example of how to create a basic LangChain application:</p>
                    
                    <div class="code-block p-4 rounded-lg mb-6 font-mono text-sm">
                        <span class="text-blue-400">import</span> { <span class="text-white">OpenAI</span> } <span class="text-blue-400">from</span> <span class="text-yellow-400">'langchain/llms/openai'</span>;<br>
                        <span class="text-blue-400">import</span> { <span class="text-white">PromptTemplate</span> } <span class="text-blue-400">from</span> <span class="text-yellow-400">'langchain/prompts'</span>;<br>
                        <span class="text-blue-400">import</span> { <span class="text-white">LLMChain</span> } <span class="text-blue-400">from</span> <span class="text-yellow-400">'langchain/chains'</span>;<br><br>
                        
                        <span class="text-blue-400">const</span> <span class="text-white">llm</span> = <span class="text-blue-400">new</span> <span class="text-white">OpenAI</span>({ <span class="text-white">temperature</span>: <span class="text-neon-green">0.7</span> });<br><br>
                        
                        <span class="text-blue-400">const</span> <span class="text-white">prompt</span> = <span class="text-blue-400">new</span> <span class="text-white">PromptTemplate</span>({<br>
                        &nbsp;&nbsp;<span class="text-white">template</span>: <span class="text-yellow-400">"Answer the question: {question}"</span>,<br>
                        &nbsp;&nbsp;<span class="text-white">inputVariables</span>: [<span class="text-yellow-400">"question"</span>]<br>
                        });<br><br>
                        
                        <span class="text-blue-400">const</span> <span class="text-white">chain</span> = <span class="text-blue-400">new</span> <span class="text-white">LLMChain</span>({ <span class="text-white">llm</span>, <span class="text-white">prompt</span> });
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Advanced Use Cases</h2>
                    <p class="mb-6">LangChain excels in several advanced scenarios:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li><strong>Retrieval Augmented Generation (RAG):</strong> Combine your data with LLM capabilities</li>
                        <li><strong>Conversational AI:</strong> Build chatbots with memory and context</li>
                        <li><strong>Document Analysis:</strong> Process and analyze large documents</li>
                        <li><strong>Code Generation:</strong> Generate and review code automatically</li>
                    </ul>
                    
                    <p class="mb-6">The possibilities are endless when you combine the power of LangChain with modern web frameworks and databases.</p>
                </div>
            `
            },
            blog3: {
                title: "High-Performance Go Applications",
                date: "December 5, 2024",
                readTime: "6 min read",
                content: `
                <h1 class="text-3xl font-bold mb-6 gradient-text-animated">High-Performance Go Applications</h1>
                <div class="flex items-center mb-8 text-gray-400">
                    <span>December 5, 2024</span>
                    <span class="mx-2">•</span>
                    <span>6 min read</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg mb-6">Go (Golang) has become the language of choice for building high-performance, concurrent applications. In this guide, we'll explore advanced techniques to optimize your Go applications for maximum performance.</p>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Why Go for Performance?</h2>
                    <p class="mb-6">Go offers several advantages for high-performance applications:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Compiled to native machine code</li>
                        <li>Efficient garbage collector</li>
                        <li>Built-in concurrency with goroutines</li>
                        <li>Low memory footprint</li>
                        <li>Fast compilation times</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Optimization Techniques</h2>
                    <p class="mb-6">Here are key optimization strategies:</p>
                    
                    <div class="code-block p-4 rounded-lg mb-6 font-mono text-sm">
                        <span class="text-gray-400">// Use sync.Pool for object reuse</span><br>
                        <span class="text-blue-400">var</span> <span class="text-white">bufferPool</span> = <span class="text-white">sync</span>.<span class="text-white">Pool</span>{<br>
                        &nbsp;&nbsp;<span class="text-white">New</span>: <span class="text-blue-400">func</span>() <span class="text-blue-400">interface</span>{} {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> <span class="text-white">make</span>([]<span class="text-blue-400">byte</span>, <span class="text-neon-green">1024</span>)<br>
                        &nbsp;&nbsp;},<br>
                        }<br><br>
                        
                        <span class="text-blue-400">func</span> <span class="text-white">processData</span>() {<br>
                        &nbsp;&nbsp;<span class="text-white">buffer</span> := <span class="text-white">bufferPool</span>.<span class="text-white">Get</span>().([]<span class="text-blue-400">byte</span>)<br>
                        &nbsp;&nbsp;<span class="text-blue-400">defer</span> <span class="text-white">bufferPool</span>.<span class="text-white">Put</span>(<span class="text-white">buffer</span>)<br>
                        &nbsp;&nbsp;<span class="text-gray-400">// Use buffer...</span><br>
                        }
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Concurrency Patterns</h2>
                    <p class="mb-6">Leverage Go's concurrency features effectively:</p>
                    <ol class="list-decimal list-inside mb-6 space-y-2">
                        <li>Use worker pools for CPU-intensive tasks</li>
                        <li>Implement proper channel patterns</li>
                        <li>Avoid goroutine leaks with context</li>
                        <li>Use sync primitives appropriately</li>
                    </ol>
                    
                    <p class="mb-6">By applying these techniques, you can build Go applications that handle millions of requests per second while maintaining low latency and efficient resource usage.</p>
                </div>
            `
            },
            blog4: {
                title: "API Security Best Practices",
                date: "November 28, 2024",
                content: `
                <h1 class="text-3xl font-bold mb-6 gradient-text-animated">API Security Best Practices</h1>
                <div class="flex items-center mb-8 text-gray-400">
                    <span>November 28, 2024</span>
                    <span class="mx-2">•</span>
                    <span>7 min read</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg mb-6">API security is crucial in today's interconnected world. This comprehensive guide covers essential security measures every developer should implement to protect their APIs from common threats and vulnerabilities.</p>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Authentication & Authorization</h2>
                    <p class="mb-6">Implement robust authentication and authorization mechanisms:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Use JWT tokens with proper expiration</li>
                        <li>Implement OAuth 2.0 for third-party access</li>
                        <li>Use API keys for service-to-service communication</li>
                        <li>Implement role-based access control (RBAC)</li>
                    </ul>
                    
                    <div class="code-block p-4 rounded-lg mb-6 font-mono text-sm">
                        <span class="text-gray-400">// JWT middleware example</span><br>
                        <span class="text-blue-400">const</span> <span class="text-white">jwt</span> = <span class="text-blue-400">require</span>(<span class="text-yellow-400">'jsonwebtoken'</span>);<br><br>
                        
                        <span class="text-blue-400">function</span> <span class="text-white">authenticateToken</span>(<span class="text-white">req</span>, <span class="text-white">res</span>, <span class="text-white">next</span>) {<br>
                        &nbsp;&nbsp;<span class="text-blue-400">const</span> <span class="text-white">token</span> = <span class="text-white">req</span>.<span class="text-white">headers</span>[<span class="text-yellow-400">'authorization'</span>];<br>
                        &nbsp;&nbsp;<span class="text-blue-400">if</span> (!<span class="text-white">token</span>) <span class="text-blue-400">return</span> <span class="text-white">res</span>.<span class="text-white">sendStatus</span>(<span class="text-neon-green">401</span>);<br><br>
                        
                        &nbsp;&nbsp;<span class="text-white">jwt</span>.<span class="text-white">verify</span>(<span class="text-white">token</span>, <span class="text-white">process</span>.<span class="text-white">env</span>.<span class="text-white">JWT_SECRET</span>, (<span class="text-white">err</span>, <span class="text-white">user</span>) => {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">if</span> (<span class="text-white">err</span>) <span class="text-blue-400">return</span> <span class="text-white">res</span>.<span class="text-white">sendStatus</span>(<span class="text-neon-green">403</span>);<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-white">req</span>.<span class="text-white">user</span> = <span class="text-white">user</span>;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-white">next</span>();<br>
                        &nbsp;&nbsp;});<br>
                        }
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Input Validation & Sanitization</h2>
                    <p class="mb-6">Always validate and sanitize user input:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Use schema validation libraries</li>
                        <li>Sanitize input to prevent injection attacks</li>
                        <li>Implement rate limiting</li>
                        <li>Use HTTPS everywhere</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Additional Security Measures</h2>
                    <p class="mb-6">Implement these additional security layers:</p>
                    <ol class="list-decimal list-inside mb-6 space-y-2">
                        <li>CORS configuration</li>
                        <li>Security headers (HSTS, CSP, etc.)</li>
                        <li>API versioning and deprecation</li>
                        <li>Logging and monitoring</li>
                        <li>Regular security audits</li>
                    </ol>
                    
                    <p class="mb-6">Remember, security is not a one-time implementation but an ongoing process that requires constant attention and updates.</p>
                </div>
            `
            },
            blog5: {
                title: "Cloud Architecture Patterns",
                date: "November 20, 2024",
                content: `
                <h1 class="text-3xl font-bold mb-6 gradient-text-animated">Cloud Architecture Patterns</h1>
                <div class="flex items-center mb-8 text-gray-400">
                    <span>November 20, 2024</span>
                    <span class="mx-2">•</span>
                    <span>9 min read</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg mb-6">Modern cloud architecture requires careful planning and implementation of proven patterns. This guide explores essential cloud architecture patterns and how to implement them effectively in your projects.</p>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Microservices Architecture</h2>
                    <p class="mb-6">Break down monolithic applications into smaller, manageable services:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Service independence and autonomy</li>
                        <li>Technology diversity</li>
                        <li>Fault isolation</li>
                        <li>Scalability per service</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Event-Driven Architecture</h2>
                    <p class="mb-6">Implement loose coupling through events:</p>
                    
                    <div class="code-block p-4 rounded-lg mb-6 font-mono text-sm">
                        <span class="text-gray-400">// Event publisher example</span><br>
                        <span class="text-blue-400">const</span> <span class="text-white">EventEmitter</span> = <span class="text-blue-400">require</span>(<span class="text-yellow-400">'events'</span>);<br><br>
                        
                        <span class="text-blue-400">class</span> <span class="text-white">OrderService</span> <span class="text-blue-400">extends</span> <span class="text-white">EventEmitter</span> {<br>
                        &nbsp;&nbsp;<span class="text-blue-400">async</span> <span class="text-white">createOrder</span>(<span class="text-white">orderData</span>) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">const</span> <span class="text-white">order</span> = <span class="text-blue-400">await</span> <span class="text-blue-400">this</span>.<span class="text-white">saveOrder</span>(<span class="text-white">orderData</span>);<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">this</span>.<span class="text-white">emit</span>(<span class="text-yellow-400">'order.created'</span>, <span class="text-white">order</span>);<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> <span class="text-white">order</span>;<br>
                        &nbsp;&nbsp;}<br>
                        }
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Serverless Patterns</h2>
                    <p class="mb-6">Leverage serverless computing for scalability:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Function as a Service (FaaS)</li>
                        <li>Event-driven execution</li>
                        <li>Auto-scaling capabilities</li>
                        <li>Pay-per-execution model</li>
                    </ul>
                    
                    <p class="mb-6">These patterns help you build resilient, scalable, and maintainable cloud applications that can handle varying loads and provide excellent user experiences.</p>
                </div>
            `
            },
            blog6: {
                title: "Docker Best Practices",
                date: "November 15, 2024",
                content: `
                <h1 class="text-3xl font-bold mb-6 gradient-text-animated">Docker Best Practices</h1>
                <div class="flex items-center mb-8 text-gray-400">
                    <span>November 15, 2024</span>
                    <span class="mx-2">•</span>
                    <span>4 min read</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg mb-6">Docker has revolutionized application deployment and development workflows. This guide covers essential best practices for containerizing your applications effectively.</p>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Dockerfile Optimization</h2>
                    <p class="mb-6">Write efficient Dockerfiles:</p>
                    
                    <div class="code-block p-4 rounded-lg mb-6 font-mono text-sm">
                        <span class="text-gray-400"># Use multi-stage builds</span><br>
                        <span class="text-blue-400">FROM</span> <span class="text-white">node:18-alpine</span> <span class="text-blue-400">AS</span> <span class="text-white">builder</span><br>
                        <span class="text-blue-400">WORKDIR</span> <span class="text-white">/app</span><br>
                        <span class="text-blue-400">COPY</span> <span class="text-white">package*.json ./</span><br>
                        <span class="text-blue-400">RUN</span> <span class="text-white">npm ci --only=production</span><br><br>
                        
                        <span class="text-blue-400">FROM</span> <span class="text-white">node:18-alpine</span><br>
                        <span class="text-blue-400">WORKDIR</span> <span class="text-white">/app</span><br>
                        <span class="text-blue-400">COPY --from=builder</span> <span class="text-white">/app/node_modules ./node_modules</span><br>
                        <span class="text-blue-400">COPY</span> <span class="text-white">. .</span><br>
                        <span class="text-blue-400">EXPOSE</span> <span class="text-neon-green">3000</span><br>
                        <span class="text-blue-400">CMD</span> [<span class="text-yellow-400">"npm", "start"</span>]
                    </div>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Security Best Practices</h2>
                    <p class="mb-6">Keep your containers secure:</p>
                    <ul class="list-disc list-inside mb-6 space-y-2">
                        <li>Use official base images</li>
                        <li>Run as non-root user</li>
                        <li>Keep images updated</li>
                        <li>Scan for vulnerabilities</li>
                        <li>Use secrets management</li>
                    </ul>
                    
                    <h2 class="text-2xl font-bold mb-4 text-neon-green">Performance Tips</h2>
                    <p class="mb-6">Optimize container performance:</p>
                    <ol class="list-decimal list-inside mb-6 space-y-2">
                        <li>Minimize layer count</li>
                        <li>Use .dockerignore files</li>
                        <li>Leverage build cache</li>
                        <li>Choose appropriate base images</li>
                    </ol>
                    
                    <p class="mb-6">Following these practices will help you create efficient, secure, and maintainable Docker containers for your applications.</p>
                </div>
            `
            }
        };

        // Theme Management
        class ThemeManager {
            constructor() {
                this.currentTheme = localStorage.getItem('theme') || 'dark';
                this.init();
            }

            init() {
                this.applyTheme(this.currentTheme);
                this.setupEventListeners();
            }

            setupEventListeners() {
                // Desktop theme toggle
                document.getElementById('themeToggle').addEventListener('click', () => {
                    this.toggleTheme();
                });

                // Mobile theme toggle
                document.getElementById('mobileThemeToggle').addEventListener('click', () => {
                    this.toggleTheme();
                });
            }

            toggleTheme() {
                const newTheme = this.currentTheme === 'dark' ? 'light' : 'dark';
                this.setTheme(newTheme);
            }

            setTheme(theme) {
                this.currentTheme = theme;
                localStorage.setItem('theme', theme);
                this.applyTheme(theme);
                this.animateThemeTransition();
            }

            applyTheme(theme) {
                document.documentElement.setAttribute('data-theme', theme);
                this.updateToggleIcons(theme);
                this.updateMatrixEffect(theme);
            }

            updateToggleIcons(theme) {
                const desktopIcon = document.getElementById('sliderIcon');
                const mobileIcon = document.getElementById('mobileSliderIcon');

                if (theme === 'light') {
                    desktopIcon.textContent = '☀️';
                    mobileIcon.textContent = '☀️';
                } else {
                    desktopIcon.textContent = '🌙';
                    mobileIcon.textContent = '🌙';
                }
            }

            updateMatrixEffect(theme) {
                const matrixChars = document.querySelectorAll('.matrix-char');
                matrixChars.forEach(char => {
                    char.style.opacity = theme === 'light' ? '0.05' : '0.1';
                });
            }

            animateThemeTransition() {
                const overlay = document.getElementById('themeTransition');

                // Show transition overlay
                gsap.to(overlay, {
                    opacity: 0.1,
                    duration: 0.3,
                    ease: "power2.out",
                    onComplete: () => {
                        // Hide overlay after transition
                        gsap.to(overlay, {
                            opacity: 0,
                            duration: 0.3,
                            delay: 0.2,
                            ease: "power2.out"
                        });
                    }
                });

                // Animate theme toggle slider
                const sliders = document.querySelectorAll('.theme-toggle-slider');
                sliders.forEach(slider => {
                    gsap.to(slider, {
                        scale: 1.2,
                        duration: 0.2,
                        yoyo: true,
                        repeat: 1,
                        ease: "power2.inOut"
                    });
                });
            }
        }

        // Initialize GSAP and AOS
        gsap.registerPlugin(ScrollTrigger, TextPlugin);

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Initialize Theme Manager
        const themeManager = new ThemeManager();

        // GSAP Animations
        document.addEventListener('DOMContentLoaded', function() {
            // Hero animations
            const heroTl = gsap.timeline();
            heroTl.from('.hero-title', {
                    duration: 1.5,
                    y: 100,
                    opacity: 0,
                    ease: "power3.out"
                })
                .from('.hero-subtitle', {
                    duration: 1,
                    y: 50,
                    opacity: 0,
                    ease: "power2.out"
                }, "-=0.8")
                .from('.hero-description', {
                    duration: 1,
                    y: 30,
                    opacity: 0,
                    ease: "power2.out"
                }, "-=0.6")
                .from('.hero-buttons', {
                    duration: 1,
                    y: 30,
                    opacity: 0,
                    ease: "power2.out"
                }, "-=0.4");

            // Typewriter effect
            gsap.to('.typewriter-text', {
                duration: 2,
                text: "Backend Developer",
                ease: "none",
                repeat: -1,
                yoyo: true,
                repeatDelay: 2
            });

            // Skill progress bars animation
            gsap.utils.toArray('.skill-progress').forEach(bar => {
                const width = bar.getAttribute('data-width');
                gsap.set(bar, {
                    width: '0%'
                });

                ScrollTrigger.create({
                    trigger: bar,
                    start: "top 80%",
                    onEnter: () => {
                        gsap.to(bar, {
                            width: width + '%',
                            duration: 1.5,
                            ease: "power2.out"
                        });
                    }
                });
            });

            // Counter animations
            gsap.utils.toArray('.counter').forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));

                ScrollTrigger.create({
                    trigger: counter,
                    start: "top 80%",
                    onEnter: () => {
                        gsap.to(counter, {
                            innerHTML: target,
                            duration: 2,
                            ease: "power2.out",
                            snap: {
                                innerHTML: 1
                            }
                        });
                    }
                });
            });

            // Stagger animations for elements
            gsap.utils.toArray('.stagger-animation').forEach((element, index) => {
                ScrollTrigger.create({
                    trigger: element,
                    start: "top 85%",
                    onEnter: () => {
                        gsap.to(element, {
                            opacity: 1,
                            y: 0,
                            duration: 0.8,
                            delay: index * 0.1,
                            ease: "power2.out"
                        });
                    }
                });
            });

            // Magnetic button effect
            gsap.utils.toArray('.magnetic-button').forEach(button => {
                button.addEventListener('mouseenter', () => {
                    gsap.to(button, {
                        scale: 1.05,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });

                button.addEventListener('mouseleave', () => {
                    gsap.to(button, {
                        scale: 1,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });
            });

            // Profile circle rotation
            gsap.to('.profile-circle', {
                rotation: 360,
                duration: 20,
                ease: "none",
                repeat: -1
            });

            // Navigation link hover effects
            gsap.utils.toArray('.nav-link').forEach(link => {
                link.addEventListener('mouseenter', () => {
                    gsap.to(link, {
                        scale: 1.1,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });

                link.addEventListener('mouseleave', () => {
                    gsap.to(link, {
                        scale: 1,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });
            });
        });

        // Matrix background effect
        function createMatrixEffect() {
            const matrixBg = document.getElementById('matrix-bg');
            const chars = '01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン';

            for (let i = 0; i < 50; i++) {
                const char = document.createElement('div');
                char.className = 'matrix-char';
                char.textContent = chars[Math.floor(Math.random() * chars.length)];
                char.style.left = Math.random() * 100 + '%';
                char.style.animationDelay = Math.random() * 20 + 's';
                char.style.animationDuration = (Math.random() * 10 + 10) + 's';
                matrixBg.appendChild(char);
            }
        }

        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');

            // Animate mobile menu items
            if (!mobileMenu.classList.contains('hidden')) {
                gsap.utils.toArray('#mobile-menu .stagger-animation').forEach((item, index) => {
                    gsap.fromTo(item, {
                        opacity: 0,
                        y: 20
                    }, {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        delay: index * 0.1,
                        ease: "power2.out"
                    });
                });
            }
        });

        // Close mobile menu when clicking on links
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Blog modal functionality
        function openBlogModal(blogId) {
            const modal = document.getElementById('blogModal');
            const content = document.getElementById('blogContent');
            const blog = blogData[blogId];

            if (blog) {
                content.innerHTML = blog.content;
                modal.style.display = 'block';

                // Animate modal
                gsap.set(modal, {
                    opacity: 0
                });
                gsap.set('.modal-content', {
                    scale: 0.7,
                    y: -50
                });

                gsap.to(modal, {
                    opacity: 1,
                    duration: 0.3
                });
                gsap.to('.modal-content', {
                    scale: 1,
                    y: 0,
                    duration: 0.4,
                    ease: "back.out(1.7)"
                });
            }
        }

        function closeBlogModal() {
            const modal = document.getElementById('blogModal');

            gsap.to('.modal-content', {
                scale: 0.7,
                y: -50,
                duration: 0.3,
                ease: "power2.in"
            });
            gsap.to(modal, {
                opacity: 0,
                duration: 0.3,
                onComplete: () => {
                    modal.style.display = 'none';
                }
            });
        }

        // Close modal when clicking outside
        document.getElementById('blogModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeBlogModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeBlogModal();
                mobileMenu.classList.add('hidden');
            }
        });

        // Contact form functionality
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Animate form submission
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.textContent;

            gsap.to(button, {
                scale: 0.95,
                duration: 0.1,
                yoyo: true,
                repeat: 1,
                ease: "power2.inOut"
            });

            button.textContent = 'Sending...';
            button.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                button.textContent = 'Message Sent!';
                button.style.backgroundColor = 'var(--accent-primary)';

                setTimeout(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                    button.style.backgroundColor = '';
                    this.reset();
                }, 2000);
            }, 1500);
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: {
                            y: target,
                            offsetY: 80
                        },
                        ease: "power2.inOut"
                    });
                }
            });
        });

        // Initialize matrix effect
        createMatrixEffect();

        // Parallax effect for floating elements
        gsap.utils.toArray('.floating-element').forEach((element, index) => {
            gsap.to(element, {
                y: -30,
                duration: 3 + index,
                ease: "power1.inOut",
                repeat: -1,
                yoyo: true,
                delay: index * 0.5
            });
        });

        // Add scroll-based animations for sections
        gsap.utils.toArray('section').forEach(section => {
            ScrollTrigger.create({
                trigger: section,
                start: "top 80%",
                onEnter: () => {
                    gsap.fromTo(section, {
                        opacity: 0,
                        y: 50
                    }, {
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        ease: "power2.out"
                    });
                }
            });
        });

        // Make functions globally available
        window.openBlogModal = openBlogModal;
        window.closeBlogModal = closeBlogModal;
    </script>
</body>

</html>
