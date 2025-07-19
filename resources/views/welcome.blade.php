<x-layouts.base.base>
     <!-- Hero Section -->
     <section id="home" class="min-h-screen flex items-center justify-center relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="hero-content">
                <h1 class="text-6xl md:text-8xl font-bold mb-6 font-mono hero-title">
                    <span class="gradient-text-animated">MUHAMMAD</span>
                    <br>
                    <span class="text-white">ASLAM</span>
                </h1>
                <div class="text-xl md:text-2xl mb-8 font-mono text-gray-300 hero-subtitle">
                    <span class="text-neon-green">{'>'}</span> <span class="typewriter-text">Backend Developer</span>
                    <span class="animate-pulse text-neon-green">|</span>
                </div>
                <p class="text-lg md:text-xl mb-12 max-w-3xl mx-auto leading-relaxed hero-description">
                    Architecting robust backend systems and scalable APIs with modern technologies.
                    Specializing in NestJS, Golang, FastAPI, and cloud infrastructure.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center hero-buttons">
                    <button
                        class="magnetic-button bg-neon-green text-black px-8 py-4 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300 animate-glow">
                        View My Work
                    </button>
                    <button
                        class="magnetic-button border-2 border-neon-green text-neon-green px-8 py-4 rounded-lg font-semibold hover:bg-neon-green hover:text-black transition-all duration-300">
                        Download CV
                    </button>
                </div>
            </div>
        </div>

        <!-- Floating Code Elements -->
        <div class="absolute top-20 left-10 floating-element">
            <div class="code-block p-4 rounded-lg font-mono text-sm">
                <span class="text-neon-green">const</span> <span class="text-white">developer</span> = <span
                    class="text-yellow-400">"passionate"</span>;
            </div>
        </div>
        <div class="absolute bottom-20 right-10 floating-element">
            <div class="code-block p-4 rounded-lg font-mono text-sm">
                <span class="text-neon-green">function</span> <span class="text-white">buildAmazing</span>() {'{
                return true; }'}
            </div>
        </div>
        <div class="absolute top-1/2 left-5 floating-element">
            <div class="code-block p-4 rounded-lg font-mono text-sm">
                <span class="text-neon-green">while</span>(<span class="text-white">coding</span>) {'{ coffee++; }'}
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="text-4xl md:text-5xl font-bold mb-8 gradient-text-animated font-mono">About Me</h2>
                    <p class="text-lg mb-6 leading-relaxed stagger-animation">
                        I'm a passionate backend developer with 5+ years of experience building
                        scalable APIs and robust server-side applications. I specialize in creating
                        high-performance systems using NestJS, Golang, FastAPI, and Laravel.
                    </p>
                    <p class="text-lg mb-8 leading-relaxed stagger-animation">
                        When I'm not architecting backend solutions, you'll find me exploring new
                        database optimization techniques, contributing to open source projects,
                        or mentoring junior developers in the art of clean code.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center stagger-animation" data-aos="zoom-in" data-aos-delay="200">
                            <div class="text-3xl font-bold text-neon-green counter" data-target="50">0</div>
                            <div class="text-gray-400">Projects Completed</div>
                        </div>
                        <div class="text-center stagger-animation" data-aos="zoom-in" data-aos-delay="400">
                            <div class="text-3xl font-bold text-neon-green counter" data-target="5">0</div>
                            <div class="text-gray-400">Years Experience</div>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left" data-aos-duration="1000">
                    <div
                        class="w-80 h-80 mx-auto bg-gradient-to-br from-neon-green to-dark-green rounded-full opacity-20 animate-pulse">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div
                            class="w-64 h-64 bg-charcoal rounded-full border-4 border-neon-green animate-glow flex items-center justify-center profile-circle">
                            <span class="text-6xl">👨‍💻</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-deep-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">Tech Stack</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Backend -->
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">Backend</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center skill-item">
                            <span>NestJS</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>Golang</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>FastAPI</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>Laravel</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI Frameworks -->
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">AI Frameworks</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center skill-item">
                            <span>OpenAI</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>LangChain</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>CrewAI</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>LangGraph</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="75"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Database & Cloud -->
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">Database & Cloud</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center skill-item">
                            <span>PostgreSQL</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="85"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>MySQL</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>AWS</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>Digital Ocean</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="75"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frontend & APIs -->
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">Frontend & APIs</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center skill-item">
                            <span>React</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>TypeScript</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="80"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>VAPI</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="75"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center skill-item">
                            <span>Twilio</span>
                            <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                                <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="75"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">Featured Projects</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <span class="text-4xl animate-bounce-slow">🚀</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-neon-green">Microservices API Gateway</h3>
                        <p class="text-gray-300 mb-4">Scalable API gateway built with NestJS handling 10M+ requests
                            daily with JWT authentication.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">NestJS</span>
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">PostgreSQL</span>
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">AWS</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-neon-green hover:underline magnetic-button">Live Demo</a>
                            <a href="#" class="text-neon-green hover:underline magnetic-button">GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="h-48 bg-gradient-to-br from-dark-green to-neon-green opacity-80 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <span class="text-4xl animate-spin-slow">⚡</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-neon-green">High-Performance Go API</h3>
                        <p class="text-gray-300 mb-4">Lightning-fast REST API built with Golang, serving real-time data
                            with sub-millisecond response times.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">Golang</span>
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">MySQL</span>
                            <span class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">Digital
                                Ocean</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-neon-green hover:underline magnetic-button">Live Demo</a>
                            <a href="#" class="text-neon-green hover:underline magnetic-button">GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="h-48 bg-gradient-to-br from-neon-green via-dark-green to-matrix-green opacity-80 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <span class="text-4xl animate-wiggle">🤖</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 text-neon-green">AI-Powered Customer Service</h3>
                        <p class="text-gray-300 mb-4">Intelligent chatbot system using OpenAI and LangChain with voice
                            integration via VAPI and Twilio.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">OpenAI</span>
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">LangChain</span>
                            <span
                                class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">VAPI</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-neon-green hover:underline magnetic-button">Live Demo</a>
                            <a href="#" class="text-neon-green hover:underline magnetic-button">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 bg-deep-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">Our Team</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        S
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Shahab</h3>
                    <p class="text-neon-green text-sm mb-3">Frontend Developer</p>
                    <p class="text-gray-400 text-sm">Specializes in React and modern UI/UX design patterns.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-dark-green to-matrix-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        S
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Shoaib</h3>
                    <p class="text-neon-green text-sm mb-3">DevOps Engineer</p>
                    <p class="text-gray-400 text-sm">Expert in CI/CD pipelines and cloud infrastructure management.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-matrix-green to-neon-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        K
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Kamran</h3>
                    <p class="text-neon-green text-sm mb-3">Backend Developer</p>
                    <p class="text-gray-400 text-sm">Focuses on API development and database optimization.</p>
                </div>

                <!-- Team Member 4 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        S
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Shahid</h3>
                    <p class="text-neon-green text-sm mb-3">Full Stack Developer</p>
                    <p class="text-gray-400 text-sm">Versatile developer with expertise in both frontend and backend.
                    </p>
                </div>

                <!-- Team Member 5 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-dark-green to-matrix-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        S
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Shagufta</h3>
                    <p class="text-neon-green text-sm mb-3">UI/UX Designer</p>
                    <p class="text-gray-400 text-sm">Creates beautiful and intuitive user experiences.</p>
                </div>

                <!-- Team Member 6 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-matrix-green to-neon-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        M
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Muqeet</h3>
                    <p class="text-neon-green text-sm mb-3">Data Scientist</p>
                    <p class="text-gray-400 text-sm">Specializes in machine learning and data analytics.</p>
                </div>

                <!-- Team Member 7 -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                    data-aos="fade-up" data-aos-delay="700">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                        H
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Hamza</h3>
                    <p class="text-neon-green text-sm mb-3">Mobile Developer</p>
                    <p class="text-gray-400 text-sm">Specializes in React Native and cross-platform development.</p>
                </div>

                <!-- Team Lead -->
                <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group border-neon-green"
                    data-aos="fade-up" data-aos-delay="800">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-glow">
                        MA
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Muhammad Aslam</h3>
                    <p class="text-neon-green text-sm mb-3">Team Lead & Backend Architect</p>
                    <p class="text-gray-400 text-sm">Leading the team with expertise in scalable backend systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blogs" class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">Latest Blog Posts</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" onclick="openBlogModal('blog1')"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-bounce-slow">🚀</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Dec 15, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">Building Scalable APIs with NestJS</h3>
                        <p class="text-gray-300 mb-4">Learn how to architect robust and scalable APIs using NestJS
                            framework with best practices and real-world examples.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">NestJS</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">API</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Backend</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" onclick="openBlogModal('blog2')"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="h-48 bg-gradient-to-br from-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-wiggle">🤖</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Dec 10, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">8 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">AI Integration with LangChain</h3>
                        <p class="text-gray-300 mb-4">Discover how to integrate AI capabilities into your applications
                            using LangChain and OpenAI APIs.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">AI</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">LangChain</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">OpenAI</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" onclick="openBlogModal('blog3')"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="h-48 bg-gradient-to-br from-matrix-green to-neon-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-spin-slow">⚡</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Dec 5, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">High-Performance Go Applications</h3>
                        <p class="text-gray-300 mb-4">Optimize your Go applications for maximum performance with
                            advanced techniques and best practices.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Golang</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Performance</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Optimization</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" onclick="openBlogModal('blog4')"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-bounce-slow">🔒</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Nov 28, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">API Security Best Practices</h3>
                        <p class="text-gray-300 mb-4">Essential security measures every developer should implement to
                            protect their APIs from common threats.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Security</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">API</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">JWT</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 5 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" onclick="openBlogModal('blog5')"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="h-48 bg-gradient-to-br from-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-wiggle">☁️</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Nov 20, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">9 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">Cloud Architecture Patterns</h3>
                        <p class="text-gray-300 mb-4">Explore modern cloud architecture patterns and how to implement
                            them effectively in your projects.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">AWS</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Architecture</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Cloud</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 6 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" onclick="openBlogModal('blog6')"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="h-48 bg-gradient-to-br from-matrix-green to-neon-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-spin-slow">🐳</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Nov 15, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">4 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">Docker Best Practices</h3>
                        <p class="text-gray-300 mb-4">Master Docker containerization with proven best practices for
                            development and production environments.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Docker</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">DevOps</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">Containers</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Blog Modal -->
    <div id="blogModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeBlogModal()">&times;</span>
            <div id="blogContent">
                <!-- Blog content will be loaded here -->
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-deep-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">Client Testimonials</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card p-8 rounded-xl hover:border-neon-green transition-all duration-300 group relative"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-4 right-4 text-neon-green opacity-50 text-6xl font-mono animate-pulse">"
                    </div>
                    <div class="flex items-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-black font-bold text-xl animate-glow">
                            SM
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Sarah Mitchell</h4>
                            <p class="text-gray-400 text-sm">CEO, TechStart Inc.</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span class="text-neon-green animate-pulse">★★★★★</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "Muhammad delivered an exceptional e-commerce platform that exceeded our expectations.
                        His attention to detail and technical expertise helped us increase our online sales by 300%."
                    </p>
                    <div class="text-sm text-neon-green font-mono">NestJS • PostgreSQL • AWS</div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card p-8 rounded-xl hover:border-neon-green transition-all duration-300 group relative"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-4 right-4 text-neon-green opacity-50 text-6xl font-mono animate-pulse">"
                    </div>
                    <div class="flex items-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-dark-green to-matrix-green rounded-full flex items-center justify-center text-black font-bold text-xl animate-glow">
                            MJ
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Marcus Johnson</h4>
                            <p class="text-gray-400 text-sm">CTO, DataFlow Solutions</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span class="text-neon-green animate-pulse">★★★★★</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "Working with Muhammad was a game-changer for our startup. He built a scalable backend
                        that handles millions of requests daily. His code quality is outstanding."
                    </p>
                    <div class="text-sm text-neon-green font-mono">Golang • MySQL • Digital Ocean</div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card p-8 rounded-xl hover:border-neon-green transition-all duration-300 group relative"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute top-4 right-4 text-neon-green opacity-50 text-6xl font-mono animate-pulse">"
                    </div>
                    <div class="flex items-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-matrix-green to-neon-green rounded-full flex items-center justify-center text-black font-bold text-xl animate-glow">
                            LR
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Lisa Rodriguez</h4>
                            <p class="text-gray-400 text-sm">Product Manager, InnovateLab</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span class="text-neon-green animate-pulse">★★★★★</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "Muhammad transformed our complex requirements into an intuitive user interface.
                        His ability to understand business needs and translate them into code is remarkable."
                    </p>
                    <div class="text-sm text-neon-green font-mono">React • TypeScript • Tailwind</div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card p-8 rounded-xl hover:border-neon-green transition-all duration-300 group relative"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute top-4 right-4 text-neon-green opacity-50 text-6xl font-mono animate-pulse">"
                    </div>
                    <div class="flex items-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-black font-bold text-xl animate-glow">
                            DK
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-2">David Kim</h4>
                            <p class="text-gray-400 text-sm">Founder, FinTech Pro</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span class="text-neon-green animate-pulse">★★★★★</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "Security and performance were critical for our financial application.
                        Muhammad delivered a robust solution that passed all compliance audits with flying colors."
                    </p>
                    <div class="text-sm text-neon-green font-mono">Laravel • MySQL • Jenkins</div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card p-8 rounded-xl hover:border-neon-green transition-all duration-300 group relative"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute top-4 right-4 text-neon-green opacity-50 text-6xl font-mono animate-pulse">"
                    </div>
                    <div class="flex items-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-dark-green to-matrix-green rounded-full flex items-center justify-center text-black font-bold text-xl animate-glow">
                            AT
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Amanda Taylor</h4>
                            <p class="text-gray-400 text-sm">AI Product Manager, TechCorp</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span class="text-neon-green animate-pulse">★★★★★</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "Muhammad's expertise in AI integration transformed our customer service. His LangChain
                        implementation reduced response time by 80% while maintaining human-like interactions."
                    </p>
                    <div class="text-sm text-neon-green font-mono">OpenAI • LangChain • CrewAI</div>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-card p-8 rounded-xl hover:border-neon-green transition-all duration-300 group relative"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="absolute top-4 right-4 text-neon-green opacity-50 text-6xl font-mono animate-pulse">"
                    </div>
                    <div class="flex items-center mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-matrix-green to-neon-green rounded-full flex items-center justify-center text-black font-bold text-xl animate-glow">
                            RB
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-2">Robert Brown</h4>
                            <p class="text-gray-400 text-sm">VP Engineering, ScaleUp</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span class="text-neon-green animate-pulse">★★★★★</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        "Muhammad's expertise in microservices architecture helped us scale from 1K to 1M users
                        seamlessly.
                        His solutions are always future-proof and maintainable."
                    </p>
                    <div class="text-sm text-neon-green font-mono">NestJS • SQLite • GitHub Actions</div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="glass-effect p-6 rounded-xl" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-3xl font-bold text-neon-green mb-2 counter" data-target="98">0</div>
                    <div class="text-gray-400">Client Satisfaction</div>
                </div>
                <div class="glass-effect p-6 rounded-xl" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-3xl font-bold text-neon-green mb-2 counter" data-target="50">0</div>
                    <div class="text-gray-400">Happy Clients</div>
                </div>
                <div class="glass-effect p-6 rounded-xl" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-3xl font-bold text-neon-green mb-2">24/7</div>
                    <div class="text-gray-400">Support</div>
                </div>
                <div class="glass-effect p-6 rounded-xl" data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-3xl font-bold text-neon-green mb-2">100%</div>
                    <div class="text-gray-400">On-Time Delivery</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-charcoal">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 gradient-text-animated font-mono"
                data-aos="fade-up">Let's Build Something Amazing</h2>
            <p class="text-xl mb-12 text-gray-300 text-center" data-aos="fade-up" data-aos-delay="200">
                Ready to bring your ideas to life? Let's discuss your next project.
            </p>

            <!-- Contact Form -->
            <div class="glass-effect p-8 rounded-xl mb-12" data-aos="fade-up" data-aos-delay="300">
                <form id="contactForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="stagger-animation">
                            <label for="name" class="block text-sm font-medium text-neon-green mb-2">Name
                                *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="Your full name">
                        </div>
                        <div class="stagger-animation">
                            <label for="email" class="block text-sm font-medium text-neon-green mb-2">Email
                                *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="your.email@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="stagger-animation">
                            <label for="phone" class="block text-sm font-medium text-neon-green mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="+1 (555) 123-4567">
                        </div>
                        <div class="stagger-animation">
                            <label for="subject" class="block text-sm font-medium text-neon-green mb-2">Subject
                                *</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="Project discussion">
                        </div>
                    </div>

                    <div class="stagger-animation">
                        <label for="message" class="block text-sm font-medium text-neon-green mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 resize-vertical transition-all duration-300"
                            placeholder="Tell me about your project requirements, timeline, and any specific technologies you'd like to use..."></textarea>
                    </div>

                    <div class="text-center stagger-animation">
                        <button type="submit"
                            class="magnetic-button bg-neon-green text-black px-12 py-4 rounded-lg font-semibold text-lg hover:bg-dark-green transition-all duration-300 animate-glow">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="glass-effect p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl mb-4 animate-bounce-slow">📧</div>
                    <h3 class="text-lg font-semibold mb-2 text-neon-green">Email</h3>
                    <p class="text-gray-300">muhammad.aslam@example.com</p>
                </div>
                <div class="glass-effect p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl mb-4 animate-wiggle">💼</div>
                    <h3 class="text-lg font-semibold mb-2 text-neon-green">LinkedIn</h3>
                    <p class="text-gray-300">linkedin.com/in/muhammadaslam</p>
                </div>
                <div class="glass-effect p-6 rounded-xl text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl mb-4 animate-spin-slow">🐙</div>
                    <h3 class="text-lg font-semibold mb-2 text-neon-green">GitHub</h3>
                    <p class="text-gray-300">github.com/muhammadaslam</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.base.base>