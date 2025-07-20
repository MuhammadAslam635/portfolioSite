<div>
<!-- Projects Hero Section -->
<section class="min-h-screen flex items-center justify-center relative bg-deep-black pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl font-bold mb-6 font-mono">
                <span class="gradient-text-animated">MY</span>
                <br>
                <span class="text-white">PROJECTS</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                A showcase of innovative solutions, scalable architectures, and cutting-edge technologies
            </p>
        </div>
    </div>
</section>

<!-- Featured Project -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Featured Project
        </h2>
        
        <div class="glass-effect rounded-2xl overflow-hidden hover:border-neon-green transition-all duration-300" data-aos="zoom-in">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto bg-gradient-to-br from-neon-green via-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                    <span class="text-8xl animate-bounce-slow">🚀</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700"></div>
                </div>
                <div class="p-12">
                    <div class="flex items-center mb-4">
                        <span class="px-4 py-2 bg-neon-green text-neon-green text-sm rounded-full font-semibold">FEATURED</span>
                        <span class="ml-4 text-gray-400 text-sm">Enterprise Scale</span>
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-white">Enterprise Microservices Platform</h3>
                    <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                        A comprehensive microservices platform built with NestJS, handling 10M+ requests daily. 
                        Features include real-time analytics, automated scaling, and advanced monitoring capabilities.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">NestJS</span>
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">PostgreSQL</span>
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">Redis</span>
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">AWS</span>
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">Docker</span>
                    </div>
                    <div class="flex space-x-4">
                        <button class="magnetic-button bg-neon-green text-neon-green px-6 py-3 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300">
                            View Live Demo
                        </button>
                        <button class="magnetic-button border-2 border-neon-green text-neon-green px-6 py-3 rounded-lg font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300">
                            View Code
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Categories -->
<section class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Project Categories
        </h2>
        
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button class="category-btn active px-6 py-3 bg-neon-green text-neon-green rounded-full font-semibold hover:bg-dark-green transition-all duration-300" data-category="all">
                All Projects
            </button>
            <button class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300" data-category="backend">
                Backend APIs
            </button>
            <button class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300" data-category="ai">
                AI Solutions
            </button>
            <button class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300" data-category="fullstack">
                Full Stack
            </button>
            <button class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300" data-category="devops">
                DevOps
            </button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">
            <!-- Project 1 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="backend" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-bounce-slow">🚀</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">Backend</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">Microservices API Gateway</h3>
                    <p class="text-gray-300 mb-4">Scalable API gateway built with NestJS handling 10M+ requests daily with JWT authentication and rate limiting.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">NestJS</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">PostgreSQL</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">AWS</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2024</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="backend" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gradient-to-br from-dark-green to-neon-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-spin-slow">⚡</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">Backend</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">High-Performance Go API</h3>
                    <p class="text-gray-300 mb-4">Lightning-fast REST API built with Golang, serving real-time data with sub-millisecond response times.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Golang</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">MySQL</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Digital Ocean</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2024</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="ai" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gradient-to-br from-neon-green via-dark-green to-matrix-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-wiggle">🤖</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">AI</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">AI-Powered Customer Service</h3>
                    <p class="text-gray-300 mb-4">Intelligent chatbot system using OpenAI and LangChain with voice integration via VAPI and Twilio.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">OpenAI</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">LangChain</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">VAPI</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2024</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="fullstack" data-aos="fade-up" data-aos-delay="400">
                <div class="h-48 bg-gradient-to-br from-dark-green to-matrix-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-pulse">💼</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">Full Stack</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">E-Commerce Platform</h3>
                    <p class="text-gray-300 mb-4">Complete e-commerce solution with React frontend, NestJS backend, and integrated payment processing.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">React</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">NestJS</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Stripe</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2023</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="devops" data-aos="fade-up" data-aos-delay="500">
                <div class="h-48 bg-gradient-to-br from-matrix-green to-neon-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-spin-slow">🐳</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">DevOps</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">CI/CD Pipeline Automation</h3>
                    <p class="text-gray-300 mb-4">Automated deployment pipeline with Docker, Jenkins, and AWS for seamless application delivery.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Docker</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Jenkins</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">AWS</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2023</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="ai" data-aos="fade-up" data-aos-delay="600">
                <div class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-wiggle">🧠</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">AI</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">Document Analysis AI</h3>
                    <p class="text-gray-300 mb-4">AI-powered document processing system using CrewAI for intelligent content extraction and analysis.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">CrewAI</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Python</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">FastAPI</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2023</span>
                    </div>
                </div>
            </div>

            <!-- Project 7 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="fullstack" data-aos="fade-up" data-aos-delay="700">
                <div class="h-48 bg-gradient-to-br from-dark-green to-matrix-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-bounce-slow">📊</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">Full Stack</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">Analytics Dashboard</h3>
                    <p class="text-gray-300 mb-4">Real-time analytics dashboard with interactive charts, data visualization, and automated reporting.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Chart.js</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.30.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2022</span>
                    </div>
                </div>
            </div>

            <!-- Project 8 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="backend" data-aos="fade-up" data-aos-delay="800">
                <div class="h-48 bg-gradient-to-br from-matrix-green to-neon-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-pulse">🔐</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">Backend</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">Authentication Service</h3>
                    <p class="text-gray-300 mb-4">Secure authentication microservice with JWT, OAuth2, and multi-factor authentication support.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">NestJS</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">JWT</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">OAuth2</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2022</span>
                    </div>
                </div>
            </div>

            <!-- Project 9 -->
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="devops" data-aos="fade-up" data-aos-delay="900">
                <div class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <span class="text-4xl animate-spin-slow">☁️</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">DevOps</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">Cloud Infrastructure</h3>
                    <p class="text-gray-300 mb-4">Scalable cloud infrastructure setup with auto-scaling, load balancing, and monitoring on AWS.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">AWS</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">Terraform</span>
                        <span class="px-3 py-1 bg-neon-green text-neon-green text-sm rounded-full">CloudWatch</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                            <button class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-gray-400 text-sm">2022</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            <button class="magnetic-button bg-neon-green text-neon-green px-8 py-4 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300 animate-glow">
                Load More Projects
            </button>
        </div>
    </div>
</section>

<!-- Project Stats -->
<section class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Project Statistics
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-4xl font-bold text-neon-green mb-2 counter" data-target="50">0</div>
                <div class="text-gray-400">Projects Completed</div>
            </div>
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-4xl font-bold text-neon-green mb-2 counter" data-target="25">0</div>
                <div class="text-gray-400">Happy Clients</div>
            </div>
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-4xl font-bold text-neon-green mb-2">10M+</div>
                <div class="text-gray-400">API Requests Handled</div>
            </div>
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="400">
                <div class="text-4xl font-bold text-neon-green mb-2">99.9%</div>
                <div class="text-gray-400">Uptime Achieved</div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Used -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Technologies & Tools
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Technology Icons -->
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl mb-3 animate-bounce-slow">🚀</div>
                <p class="text-sm text-gray-300">NestJS</p>
            </div>
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl mb-3 animate-spin-slow">⚡</div>
                <p class="text-sm text-gray-300">Golang</p>
            </div>
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl mb-3 animate-pulse">🐍</div>
                <p class="text-sm text-gray-300">FastAPI</p>
            </div>
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl mb-3 animate-wiggle">⚛️</div>
                <p class="text-sm text-gray-300">React</p>
            </div>
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="text-4xl mb-3 animate-bounce-slow">🐳</div>
                <p class="text-sm text-gray-300">Docker</p>
            </div>
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="text-4xl mb-3 animate-spin-slow">☁️</div>
                <p class="text-sm text-gray-300">AWS</p>
            </div>
        </div>
    </div>
</section>
</div>
@push('js')
<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Initialize GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Project card hover animations
    gsap.utils.toArray('.project-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -10,
                rotateX: 5,
                duration: 0.4,
                ease: "power2.out"
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                rotateX: 0,
                duration: 0.4,
                ease: "power2.out"
            });
        });
    });

    // Category filtering
    const categoryBtns = document.querySelectorAll('.category-btn');
    const projectCards = document.querySelectorAll('.project-card');

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');
            
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active', 'bg-neon-green', 'text-neon-green'));
            categoryBtns.forEach(b => b.classList.add('glass-effect', 'text-neon-green'));
            btn.classList.add('active', 'bg-neon-green', 'text-neon-green');
            btn.classList.remove('glass-effect', 'text-neon-green');
            
            // Filter project cards
            projectCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    gsap.to(card, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.5,
                        ease: "power2.out"
                    });
                    card.style.display = 'block';
                } else {
                    gsap.to(card, {
                        opacity: 0,
                        scale: 0.8,
                        duration: 0.3,
                        ease: "power2.in",
                        onComplete: () => {
                            card.style.display = 'none';
                        }
                    });
                }
            });
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
                    snap: { innerHTML: 1 }
                });
            }
        });
    });

    // Magnetic button effects
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
</script>
@endpush
