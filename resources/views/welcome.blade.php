<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Aslam - Full Stack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance

</head>

<body class="bg-gray-900 dark:bg-gray-900  text-white overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-effect dark:glass-effect light:glass-effect-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div
                        class="text-2xl font-bold bg-gradient-to-r from-green-400 to-lime-400 bg-clip-text text-transparent">
                        MA
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="hover:text-green-400 transition-colors">Home</a>
                    <a href="#about" class="hover:text-green-400 transition-colors">About</a>
                    <a href="#skills" class="hover:text-green-400 transition-colors">Skills</a>
                    <a href="#projects" class="hover:text-green-400 transition-colors">Projects</a>
                    <a href="#contact" class="hover:text-green-400 transition-colors">Contact</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home"
        class="min-h-screen flex items-center justify-center gradient-bg dark:gradient-bg light:gradient-bg-light relative overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-20 left-20 w-64 h-64 bg-green-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating-animation">
            </div>
            <div class="absolute top-40 right-20 w-64 h-64 bg-lime-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating-animation"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-64 h-64 bg-emerald-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 floating-animation"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="relative z-10 text-center max-w-5xl mx-auto px-4">
            <div class="bounce-in">
                <h1 class="text-5xl md:text-7xl font-bold mb-6">
                    <span
                        class="bg-gradient-to-r from-green-400 via-lime-400 to-emerald-400 bg-clip-text text-transparent">
                        Muhammad Aslam
                    </span>
                </h1>
                <div class="text-xl md:text-2xl mb-8 h-8">
                    <span class="typing-animation text-white">Full Stack Developer from Pakistan</span>
                </div>
                <p class="text-lg md:text-xl mb-8 text-gray-300 max-w-3xl mx-auto">
                    Crafting exceptional digital experiences since 2018. From single-vendor platforms to complex
                    multi-vendor marketplaces,
                    AI-powered chatbots to Forex trading platforms - I build solutions that drive business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                        View My Work
                    </button>
                    <button
                        class="border-2 border-lime-400 text-lime-400 hover:bg-lime-400 hover:text-gray-900 font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                        Let's Connect
                    </button>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-green-400 to-lime-400 bg-clip-text text-transparent">
                    About Me
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-lime-400 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left">
                    <div class="relative">
                        <div class="w-80 h-80 mx-auto rounded-full bg-gradient-to-r from-green-400 to-lime-400 p-1">
                            <div
                                class="w-full h-full rounded-full bg-gray-800 flex items-center justify-center">
                                <div class="text-8xl font-bold text-green-400">MA</div>
                            </div>
                        </div>
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-lime-400 rounded-full pulse-ring"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-green-400 rounded-full pulse-ring"
                            style="animation-delay: 1s;"></div>
                    </div>
                </div>

                <div class="slide-in-right">
                    <h3 class="text-2xl md:text-3xl font-bold mb-6 text-green-400">
                        6+ Years of Innovation & Excellence
                    </h3>
                    <p class="text-lg mb-6 text-gray-300">
                        Based in Pakistan, I've been transforming ideas into powerful digital solutions since 2018.
                        My expertise spans across the entire development spectrum - from crafting intuitive user
                        interfaces
                        to building robust backend architectures.
                    </p>
                    <p class="text-lg mb-6 text-gray-300">
                        I specialize in creating comprehensive solutions including e-commerce platforms,
                        AI-powered applications, real-time chat systems, voice bots, and sophisticated trading
                        platforms.
                        My passion lies in solving complex problems with elegant, scalable solutions.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-gradient-to-r from-green-500 to-lime-500 p-4 rounded-lg">
                            <div class="text-2xl font-bold text-white">50+</div>
                            <div class="text-sm text-gray-100">Projects Completed</div>
                        </div>
                        <div class="bg-gradient-to-r from-lime-500 to-emerald-500 p-4 rounded-lg">
                            <div class="text-2xl font-bold text-white">6+</div>
                            <div class="text-sm text-gray-100">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-green-400 to-lime-400 bg-clip-text text-transparent">
                    Technical Expertise
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-lime-400 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Backend -->
                <div
                    class="bg-gray-800 p-8 rounded-xl border border-gray-700 hover:border-green-500 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-green-400 to-lime-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-green-400">Backend</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-white">Laravel</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">NestJS</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">FastAPI</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">GoLang</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frontend -->
                <div
                    class="bg-gray-800 p-8 rounded-xl border border-gray-700 hover:border-green-500 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-lime-400 to-emerald-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-lime-400">Frontend</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-white">React</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">HTML5</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">Tailwind</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">JavaScript</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cloud & DevOps -->
                <div
                    class="bg-gray-800 p-8 rounded-xl border border-gray-700 hover:border-green-500 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-blue-400">Cloud & DevOps</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-white">AWS</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">Azure</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">Digital Ocean</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">GitHub</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI & Frameworks -->
                <div
                    class="bg-gray-800 p-8 rounded-xl border border-gray-700 hover:border-green-500 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-purple-400">AI & Frameworks</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-white">LangGraph</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">LangChain</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">OpenAI</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-white">Anthropic</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-900  relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-emerald-400/20 to-lime-400/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-green-400/20 to-emerald-400/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-br from-lime-400/10 to-green-400/10 rounded-full blur-3xl animate-spin-slow"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center justify-center p-2 mb-8 rounded-full bg-gradient-to-r from-emerald-100 to-lime-100 dark:from-emerald-900/50 dark:to-lime-900/50">
                    <span class="px-4 py-2 rounded-full bg-gradient-to-r from-emerald-500 to-lime-500 text-white text-sm font-medium">
                        ✨ Featured Work
                    </span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black mb-6 relative">
                    <span class="bg-gradient-to-r from-emerald-600 via-green-500 to-lime-500 bg-clip-text text-transparent drop-shadow-lg">
                        Innovative
                    </span>
                    <br>
                    <span class="bg-gradient-to-r from-lime-500 via-emerald-500 to-green-600 bg-clip-text text-transparent">
                        Projects
                    </span>
                </h2>
                <div class="flex justify-center mb-8">
                    <div class="w-32 h-1 bg-gradient-to-r from-emerald-400 via-green-400 to-lime-400 rounded-full relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-400 via-green-400 to-lime-400 rounded-full animate-pulse blur-sm"></div>
                    </div>
                </div>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Crafting digital experiences that push boundaries and deliver exceptional results through cutting-edge technology and innovative design.
                </p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                <!-- Project 1 -->
                <div class="group project-card relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-lime-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-gray-900/90 backdrop-blur-xl rounded-3xl shadow-xl border border-emerald-200/50 dark:border-emerald-700/50 overflow-hidden">
                        <div class="h-64 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-emerald-400 via-green-500 to-lime-500 opacity-90"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-3 h-3 bg-white/30 rounded-full animate-ping"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
                            <div class="flex items-center justify-center h-full">
                                <div class="text-white text-7xl font-black drop-shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    E
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-emerald-600 dark:text-emerald-400 group-hover:text-emerald-500 transition-colors">
                                Multi-Vendor E-Commerce Platform
                            </h3>
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                A comprehensive marketplace built with Laravel and React, featuring vendor management, payment processing, and real-time analytics.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-4 py-2 bg-emerald-100 dark:bg-emerald-900/50 text-emerald-700 dark:text-emerald-300 rounded-full text-sm font-medium border border-emerald-200 dark:border-emerald-800">Laravel</span>
                                <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-200 dark:border-blue-800">React</span>
                                <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium border border-purple-200 dark:border-purple-800">MySQL</span>
                                <span class="px-4 py-2 bg-orange-100 dark:bg-orange-900/50 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium border border-orange-200 dark:border-orange-800">AWS</span>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex-1 bg-gradient-to-r from-emerald-500 to-green-500 hover:from-emerald-600 hover:to-green-600 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Live Demo
                                </button>
                                <button class="flex-1 border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-500 hover:text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                    Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Project 2 -->
                <div class="group project-card relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-gray-900/90 backdrop-blur-xl rounded-3xl shadow-xl border border-purple-200/50 dark:border-purple-700/50 overflow-hidden">
                        <div class="h-64 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 via-violet-500 to-pink-500 opacity-90"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-3 h-3 bg-white/30 rounded-full animate-ping"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
                            <div class="flex items-center justify-center h-full">
                                <div class="text-white text-6xl font-black drop-shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    AI
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-purple-600 dark:text-purple-400 group-hover:text-purple-500 transition-colors">
                                AI-Powered Chatbot
                            </h3>
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Intelligent chatbot using LangChain and OpenAI, featuring natural language processing, context awareness, and multi-platform integration.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium border border-purple-200 dark:border-purple-800">LangChain</span>
                                <span class="px-4 py-2 bg-green-100 dark:bg-green-900/50 text-green-700 dark:text-green-300 rounded-full text-sm font-medium border border-green-200 dark:border-green-800">FastAPI</span>
                                <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-200 dark:border-blue-800">OpenAI</span>
                                <span class="px-4 py-2 bg-red-100 dark:bg-red-900/50 text-red-700 dark:text-red-300 rounded-full text-sm font-medium border border-red-200 dark:border-red-800">Redis</span>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex-1 bg-gradient-to-r from-purple-500 to-violet-500 hover:from-purple-600 hover:to-violet-600 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Live Demo
                                </button>
                                <button class="flex-1 border-2 border-purple-500 text-purple-600 hover:bg-purple-500 hover:text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                    Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Project 3 -->
                <div class="group project-card relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-gray-900/90 backdrop-blur-xl rounded-3xl shadow-xl border border-blue-200/50 dark:border-blue-700/50 overflow-hidden">
                        <div class="h-64 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-cyan-500 to-teal-500 opacity-90"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-3 h-3 bg-white/30 rounded-full animate-ping"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
                            <div class="flex items-center justify-center h-full">
                                <div class="text-white text-7xl font-black drop-shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    $
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-blue-600 dark:text-blue-400 group-hover:text-blue-500 transition-colors">
                                Forex Trading Platform
                            </h3>
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Real-time trading platform with live market data, technical indicators, and automated trading strategies using WebSocket connections.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-200 dark:border-blue-800">NestJS</span>
                                <span class="px-4 py-2 bg-green-100 dark:bg-green-900/50 text-green-700 dark:text-green-300 rounded-full text-sm font-medium border border-green-200 dark:border-green-800">React</span>
                                <span class="px-4 py-2 bg-yellow-100 dark:bg-yellow-900/50 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium border border-yellow-200 dark:border-yellow-800">PostgreSQL</span>
                                <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium border border-purple-200 dark:border-purple-800">WebSocket</span>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex-1 bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Live Demo
                                </button>
                                <button class="flex-1 border-2 border-blue-500 text-blue-600 hover:bg-blue-500 hover:text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                    Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Project 4 -->
                <div class="group project-card relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-gray-900/90 backdrop-blur-xl rounded-3xl shadow-xl border border-emerald-200/50 dark:border-emerald-700/50 overflow-hidden">
                        <div class="h-64 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 via-teal-500 to-green-500 opacity-90"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-3 h-3 bg-white/30 rounded-full animate-ping"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
                            <div class="flex items-center justify-center h-full">
                                <div class="text-white text-6xl drop-shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    🎙️
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-emerald-600 dark:text-emerald-400 group-hover:text-emerald-500 transition-colors">
                                Voice Bot Integration
                            </h3>
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Advanced voice bot with speech recognition, natural language understanding, and voice synthesis for customer service automation.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-4 py-2 bg-emerald-100 dark:bg-emerald-900/50 text-emerald-700 dark:text-emerald-300 rounded-full text-sm font-medium border border-emerald-200 dark:border-emerald-800">Python</span>
                                <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-200 dark:border-blue-800">Azure</span>
                                <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium border border-purple-200 dark:border-purple-800">Twilio</span>
                                <span class="px-4 py-2 bg-orange-100 dark:bg-orange-900/50 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium border border-orange-200 dark:border-orange-800">OpenAI</span>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex-1 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-600 hover:to-teal-600 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Live Demo
                                </button>
                                <button class="flex-1 border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-500 hover:text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                    Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Project 5 -->
                <div class="group project-card relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-gray-900/90 backdrop-blur-xl rounded-3xl shadow-xl border border-indigo-200/50 dark:border-indigo-700/50 overflow-hidden">
                        <div class="h-64 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 opacity-90"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-3 h-3 bg-white/30 rounded-full animate-ping"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
                            <div class="flex items-center justify-center h-full">
                                <div class="text-white text-6xl drop-shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    💬
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-indigo-600 dark:text-indigo-400 group-hover:text-indigo-500 transition-colors">
                                Real-time Chat Application
                            </h3>
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Scalable chat application with real-time messaging, file sharing, group conversations, and end-to-end encryption.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-4 py-2 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 rounded-full text-sm font-medium border border-indigo-200 dark:border-indigo-800">Socket.IO</span>
                                <span class="px-4 py-2 bg-green-100 dark:bg-green-900/50 text-green-700 dark:text-green-300 rounded-full text-sm font-medium border border-green-200 dark:border-green-800">Node.js</span>
                                <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-200 dark:border-blue-800">React</span>
                                <span class="px-4 py-2 bg-red-100 dark:bg-red-900/50 text-red-700 dark:text-red-300 rounded-full text-sm font-medium border border-red-200 dark:border-red-800">MongoDB</span>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex-1 bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Live Demo
                                </button>
                                <button class="flex-1 border-2 border-indigo-500 text-indigo-600 hover:bg-indigo-500 hover:text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                    Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Project 6 -->
                <div class="group project-card relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-rose-500/20 to-pink-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-gray-900/90 backdrop-blur-xl rounded-3xl shadow-xl border border-rose-200/50 dark:border-rose-700/50 overflow-hidden">
                        <div class="h-64 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-rose-500 via-pink-500 to-red-500 opacity-90"></div>
                            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-transparent"></div>
                            <div class="absolute top-4 right-4 w-3 h-3 bg-white/30 rounded-full animate-ping"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
                            <div class="flex items-center justify-center h-full">
                                <div class="text-white text-6xl drop-shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    🛒
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-3 text-rose-600 dark:text-rose-400 group-hover:text-rose-500 transition-colors">
                                Single Vendor E-Commerce
                            </h3>
                            <p class="text-gray-300 mb-6 leading-relaxed">
                                Modern e-commerce solution with inventory management, payment integration, order tracking, and customer analytics dashboard.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-4 py-2 bg-rose-100 dark:bg-rose-900/50 text-rose-700 dark:text-rose-300 rounded-full text-sm font-medium border border-rose-200 dark:border-rose-800">Laravel</span>
                                <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-200 dark:border-blue-800">Vue.js</span>
                                <span class="px-4 py-2 bg-green-100 dark:bg-green-900/50 text-green-700 dark:text-green-300 rounded-full text-sm font-medium border border-green-200 dark:border-green-800">Stripe</span>
                                <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium border border-purple-200 dark:border-purple-800">MySQL</span>
                            </div>
                            <div class="flex gap-4">
                                <button class="flex-1 bg-gradient-to-r from-rose-500 to-pink-500 hover:from-rose-600 hover:to-pink-600 text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Live Demo
                                </button>
                                <button class="flex-1 border-2 border-rose-500 text-rose-600 hover:bg-rose-500 hover:text-white py-3 px-6 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:-translate-y-1">
                                    Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative min-h-screen py-24 dark:morphing-bg overflow-hidden">
        <!-- Floating Orbs -->
        <div class="floating-orb"></div>
        <div class="floating-orb"></div>
        <div class="floating-orb"></div>
        
        <!-- Background Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(16, 185, 129, 0.5) 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-20">
                <div class="inline-block p-4 rounded-full glass-card mb-6 neon-glow">
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                
                <h2 class="text-5xl md:text-7xl font-black mb-6 gradient-text leading-tight">
                    Let's Build Something Amazing
                </h2>
                
                <div class="relative mb-8">
                    <div class="w-32 h-1 bg-gradient-to-r from-green-400 via-lime-400 to-cyan-400 mx-auto rounded-full"></div>
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-1 bg-gradient-to-r from-green-400 via-lime-400 to-cyan-400 rounded-full opacity-50 blur-sm"></div>
                </div>
                
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                    Ready to transform your <span class="text-green-400 font-semibold">ideas</span> into reality? Let's discuss your project and create something <span class="text-lime-400 font-semibold">extraordinary</span> together.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Form -->
                <div class="contact-form rounded-3xl p-8 md:p-12 magnetic-effect">
                    <div class="mb-8">
                        <h3 class="text-3xl font-bold dark:text-white mb-3">Get In Touch</h3>
                        <p class="text-gray-400 typing-effect">Let's start a conversation about your next project</p>
                    </div>
                    
                    <!-- Livewire Component Placeholder -->
                    <div class="space-y-6">
                        @livewire('contact-message-component')
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6">
                    <div class="contact-info-grid">
                        <!-- Email Card -->
                        <div class="contact-card glass-card rounded-2xl p-8 group">
                            <div class="flex items-center space-x-6">
                                <div class="icon-container w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-white mb-2">Email</h4>
                                    
                                </div>
                                
                            </div>
                            <p class="text-green-500 text-[12px] mt-2 font-bold">muhammadaslamkhakh395@gmail.com</p>
                        </div>

                        <!-- Location Card -->
                        <div class="contact-card glass-card rounded-2xl p-8 group">
                            <div class="flex items-center space-x-6">
                                <div class="icon-container w-16 h-16 bg-gradient-to-br from-lime-400 to-lime-600 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-white mb-2">Location</h4>
                                    <p class="text-green-500 text-lg">Pakistan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Response Time Card -->
                        <div class="contact-card glass-card rounded-2xl p-8 group md:col-span-2">
                            <div class="flex items-center space-x-6">
                                <div class="icon-container w-16 h-16 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-white mb-2">Response Time</h4>
                                    <p class="text-green-500 text-lg">Within 24 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="contact-card glass-card rounded-2xl p-8 mt-8">
                        <h4 class="text-2xl font-bold text-white mb-6">Connect With Me</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center hover:scale-110 transition-all duration-300 group">
                                <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center hover:scale-110 transition-all duration-300 group">
                                <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon w-14 h-14 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center hover:scale-110 transition-all duration-300 group">
                                <svg class="w-6 h-6 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <footer class="bg-gray-900 border-t border-gray-800 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <div
                        class="text-2xl font-bold bg-gradient-to-r from-green-400 to-lime-400 bg-clip-text text-transparent mr-4">
                        Muhammad Aslam
                    </div>
                    <div class="text-gray-400">Full Stack Developer</div>
                </div>
                <div class="text-gray-400 text-center md:text-right">
                    <p>&copy; 2024 Muhammad Aslam. All rights reserved.</p>
                    <p class="text-sm mt-1">Building the future, one line of code at a time.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-gray-900');
                nav.classList.add('bg-opacity-95');
            } else {
                nav.classList.remove('bg-gray-900');
                nav.classList.remove('bg-opacity-95');
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        

        // Dynamic typing effect
        const typingText = document.querySelector('.typing-animation');
        const texts = [
            'Full Stack Developer from Pakistan',
            'Laravel & React Expert',
            'AI & Chatbot Specialist',
            'E-commerce Solutions Builder',
            'SaaS Application Developer'
        ];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeWriter() {
            const currentText = texts[textIndex];

            if (isDeleting) {
                typingText.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingText.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === currentText.length) {
                setTimeout(() => isDeleting = true, 2000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
            }

            setTimeout(typeWriter, isDeleting ? 50 : 100);
        }

        // Start typing effect after page load
        setTimeout(typeWriter, 2000);
        
    </script>
</body>

</html>
