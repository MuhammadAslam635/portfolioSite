<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Aslam - Full Stack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance

</head>

<body class="bg-gray-900 dark:bg-gray-900 bg-white text-gray-900 dark:text-white overflow-x-hidden">
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

                    <!-- Theme Toggle -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div id="toggle" onclick="toggleDarkMode()"
                            class="theme-toggle bg-gray-600 dark:bg-green-500"></div>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </div>
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
    <section id="about" class="py-20 bg-gray-100 dark:bg-gray-800">
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
                                class="w-full h-full rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
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
                    <p class="text-lg mb-6 text-gray-600 dark:text-gray-300">
                        Based in Pakistan, I've been transforming ideas into powerful digital solutions since 2018.
                        My expertise spans across the entire development spectrum - from crafting intuitive user
                        interfaces
                        to building robust backend architectures.
                    </p>
                    <p class="text-lg mb-6 text-gray-600 dark:text-gray-300">
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
    <section id="skills" class="py-20 bg-white dark:bg-gray-900">
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
                    class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-green-500 transition-all duration-300">
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
                            <span class="text-gray-900 dark:text-white">Laravel</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">NestJS</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">FastAPI</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">GoLang</span>
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
                    class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-green-500 transition-all duration-300">
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
                            <span class="text-gray-900 dark:text-white">React</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">HTML5</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">Tailwind</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">JavaScript</span>
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
                    class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-green-500 transition-all duration-300">
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
                            <span class="text-gray-900 dark:text-white">AWS</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">Azure</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">Digital Ocean</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">GitHub</span>
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
                    class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-green-500 transition-all duration-300">
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
                            <span class="text-gray-900 dark:text-white">LangGraph</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">LangChain</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">OpenAI</span>
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                                <div class="w-2 h-2 bg-pink-400 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-900 dark:text-white">Anthropic</span>
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
    <section id="projects" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-green-400 to-lime-400 bg-clip-text text-transparent">
                    Featured Projects
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-lime-400 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Here are some of my recent projects showcasing my expertise in full-stack development, AI
                    integration, and scalable solutions.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div
                    class="project-card bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-lime-400 flex items-center justify-center">
                        <div class="text-white text-6xl font-bold">E</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-green-400">Multi-Vendor E-Commerce Platform</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            A comprehensive marketplace built with Laravel and React, featuring vendor management,
                            payment processing, and real-time analytics.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Laravel</span>
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">React</span>
                            <span
                                class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">MySQL</span>
                            <span
                                class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 rounded-full text-sm">AWS</span>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-1 bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-lg transition-colors">
                                Live Demo
                            </button>
                            <button
                                class="flex-1 border border-green-500 text-green-500 hover:bg-green-500 hover:text-white py-2 px-4 rounded-lg transition-colors">
                                Code
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div
                    class="project-card bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-400 flex items-center justify-center">
                        <div class="text-white text-6xl font-bold">AI</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-purple-400">AI-Powered Chatbot</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Intelligent chatbot using LangChain and OpenAI, featuring natural language processing,
                            context awareness, and multi-platform integration.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">LangChain</span>
                            <span
                                class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">FastAPI</span>
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">OpenAI</span>
                            <span
                                class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 rounded-full text-sm">Redis</span>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-1 bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded-lg transition-colors">
                                Live Demo
                            </button>
                            <button
                                class="flex-1 border border-purple-500 text-purple-500 hover:bg-purple-500 hover:text-white py-2 px-4 rounded-lg transition-colors">
                                Code
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div
                    class="project-card bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-cyan-400 flex items-center justify-center">
                        <div class="text-white text-6xl font-bold">$</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-blue-400">Forex Trading Platform</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Real-time trading platform with live market data, technical indicators,
                            and automated trading strategies using WebSocket connections.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">NestJS</span>
                            <span
                                class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">React</span>
                            <span
                                class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 rounded-full text-sm">PostgreSQL</span>
                            <span
                                class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">WebSocket</span>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition-colors">
                                Live Demo
                            </button>
                            <button
                                class="flex-1 border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-4 rounded-lg transition-colors">
                                Code
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div
                    class="project-card bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="h-48 bg-gradient-to-br from-emerald-400 to-teal-400 flex items-center justify-center">
                        <div class="text-white text-6xl font-bold">🎙️</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-emerald-400">Voice Bot Integration</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Advanced voice bot with speech recognition, natural language understanding,
                            and voice synthesis for customer service automation.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900 text-emerald-800 dark:text-emerald-200 rounded-full text-sm">Python</span>
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Azure</span>
                            <span
                                class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">Twilio</span>
                            <span
                                class="px-3 py-1 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 rounded-full text-sm">OpenAI</span>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-1 bg-emerald-500 hover:bg-emerald-600 text-white py-2 px-4 rounded-lg transition-colors">
                                Live Demo
                            </button>
                            <button
                                class="flex-1 border border-emerald-500 text-emerald-500 hover:bg-emerald-500 hover:text-white py-2 px-4 rounded-lg transition-colors">
                                Code
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div
                    class="project-card bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="h-48 bg-gradient-to-br from-indigo-400 to-purple-400 flex items-center justify-center">
                        <div class="text-white text-6xl font-bold">💬</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-indigo-400">Real-time Chat Application</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Scalable chat application with real-time messaging, file sharing,
                            group conversations, and end-to-end encryption.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">Socket.IO</span>
                            <span
                                class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Node.js</span>
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">React</span>
                            <span
                                class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 rounded-full text-sm">MongoDB</span>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-1 bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded-lg transition-colors">
                                Live Demo
                            </button>
                            <button
                                class="flex-1 border border-indigo-500 text-indigo-500 hover:bg-indigo-500 hover:text-white py-2 px-4 rounded-lg transition-colors">
                                Code
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div
                    class="project-card bg-white dark:bg-gray-900 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="h-48 bg-gradient-to-br from-rose-400 to-pink-400 flex items-center justify-center">
                        <div class="text-white text-6xl font-bold">🛒</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-rose-400">Single Vendor E-Commerce</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Modern e-commerce solution with inventory management, payment integration,
                            order tracking, and customer analytics dashboard.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-rose-100 dark:bg-rose-900 text-rose-800 dark:text-rose-200 rounded-full text-sm">Laravel</span>
                            <span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Vue.js</span>
                            <span
                                class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Stripe</span>
                            <span
                                class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">MySQL</span>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex-1 bg-rose-500 hover:bg-rose-600 text-white py-2 px-4 rounded-lg transition-colors">
                                Live Demo
                            </button>
                            <button
                                class="flex-1 border border-rose-500 text-rose-500 hover:bg-rose-500 hover:text-white py-2 px-4 rounded-lg transition-colors">
                                Code
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-green-400 to-lime-400 bg-clip-text text-transparent">
                    Let's Build Something Amazing
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-lime-400 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Ready to transform your ideas into reality? Let's discuss your project and create something
                    extraordinary together.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                @livewire('contact-message-component')

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div
                        class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Email</h4>
                                <p class="text-gray-600 dark:text-gray-300">aslam@example.com</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-lime-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Location</h4>
                                <p class="text-gray-600 dark:text-gray-300">Pakistan</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Response Time</h4>
                                <p class="text-gray-600 dark:text-gray-300">Within 24 hours</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div
                        class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl border border-gray-200 dark:border-gray-700">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Connect With Me</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-900 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-900 transition-colors">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.">
                                    </path>
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
        let currentTheme = "light";

        function toggleDarkMode() {
            const body = document.body;
            const html = document.documentElement;

            // Toggle between light and dark
            if (currentTheme === 'light') {
                body.classList.remove('light');
                body.classList.add('dark');
                html.classList.add('dark');
                currentTheme = 'dark';
            } else {
                body.classList.remove('dark');
                body.classList.add('light');
                html.classList.remove('dark');
                currentTheme = 'light';
            }

            // Update the theme display
            updateThemeDisplay();

            // Add a subtle animation effect
            body.style.transform = 'scale(0.99)';
            setTimeout(() => {
                body.style.transform = 'scale(1)';
            }, 150);
        }

        // Initialize theme display on page load
        updateThemeDisplay();

        // Optional: Add keyboard support (press 'd' to toggle)
        document.addEventListener('keydown', function(e) {
            if (e.key === 'd' || e.key === 'D') {
                toggleDarkMode();
            }
        });
    </script>
</body>

</html>
