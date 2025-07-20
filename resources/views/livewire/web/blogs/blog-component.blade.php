<div>

    <!-- Blog Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative bg-deep-black pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h1 class="text-6xl md:text-8xl font-bold mb-6 font-mono">
                    <span class="gradient-text-animated">TECH</span>
                    <br>
                    <span class="text-white">BLOG</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                    Insights, tutorials, and thoughts on modern web development, AI, and technology trends
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Post Section -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">
                Featured Post
            </h2>

            <div class="glass-effect rounded-2xl overflow-hidden hover:border-neon-green transition-all duration-300 cursor-pointer"
                data-aos="zoom-in" onclick="window.location.href='blog-detail.html'">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div
                        class="h-64 lg:h-auto bg-gradient-to-br from-neon-green via-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-8xl animate-bounce-slow">🚀</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-12">
                        <div class="flex items-center mb-4">
                            <span class="text-neon-green text-sm font-semibold">FEATURED</span>
                            <span class="mx-3 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">Dec 15, 2024</span>
                            <span class="mx-3 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">8 min read</span>
                        </div>
                        <h3 class="text-3xl font-bold mb-6 text-white">Building Scalable APIs with NestJS: A Complete
                            Guide</h3>
                        <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                            Learn how to architect robust and scalable APIs using NestJS framework with best practices,
                            real-world examples, and advanced techniques for handling millions of requests.
                        </p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span
                                class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">NestJS</span>
                            <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">API
                                Design</span>
                            <span
                                class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">Backend</span>
                            <span
                                class="px-4 py-2 bg-neon-green bg-opacity-20 text-neon-green text-sm rounded-full">TypeScript</span>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-neon-green font-bold mr-4">
                                MA
                            </div>
                            <div>
                                <p class="text-white font-semibold">Muhammad Aslam</p>
                                <p class="text-gray-400 text-sm">Backend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Categories -->
    <section class="py-20 bg-deep-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">
                Browse by Category
            </h2>

            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button
                    class="category-btn active px-6 py-3 bg-neon-green text-neon-green rounded-full font-semibold hover:bg-dark-green transition-all duration-300"
                    data-category="all">
                    All Posts
                </button>
                <button
                    class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300"
                    data-category="backend">
                    Backend
                </button>
                <button
                    class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300"
                    data-category="ai">
                    AI & ML
                </button>
                <button
                    class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300"
                    data-category="devops">
                    DevOps
                </button>
                <button
                    class="category-btn px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300"
                    data-category="tutorials">
                    Tutorials
                </button>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blogGrid">
                <!-- Blog Post 1 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="backend"
                    data-aos="fade-up" data-aos-delay="100" onclick="window.location.href='blog-detail.html'">
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
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">NestJS</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">API</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Backend</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="ai"
                    data-aos="fade-up" data-aos-delay="200" onclick="window.location.href='blog-detail.html'">
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
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">AI</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">LangChain</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">OpenAI</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="backend"
                    data-aos="fade-up" data-aos-delay="300" onclick="window.location.href='blog-detail.html'">
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
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Golang</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Performance</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Optimization</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="backend"
                    data-aos="fade-up" data-aos-delay="400" onclick="window.location.href='blog-detail.html'">
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
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Security</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">API</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">JWT</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 5 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="devops"
                    data-aos="fade-up" data-aos-delay="500" onclick="window.location.href='blog-detail.html'">
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
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">AWS</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Architecture</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Cloud</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 6 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="devops"
                    data-aos="fade-up" data-aos-delay="600" onclick="window.location.href='blog-detail.html'">
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
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Docker</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">DevOps</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Containers</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 7 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="tutorials"
                    data-aos="fade-up" data-aos-delay="700" onclick="window.location.href='blog-detail.html'">
                    <div
                        class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-pulse">📚</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Nov 10, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">12 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">Complete Guide to PostgreSQL Optimization</h3>
                        <p class="text-gray-300 mb-4">Step-by-step tutorial on optimizing PostgreSQL databases for
                            better performance and scalability.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">PostgreSQL</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Database</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Tutorial</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 8 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="ai"
                    data-aos="fade-up" data-aos-delay="800" onclick="window.location.href='blog-detail.html'">
                    <div
                        class="h-48 bg-gradient-to-br from-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-wiggle">🧠</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Nov 5, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">10 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">Building Conversational AI with CrewAI</h3>
                        <p class="text-gray-300 mb-4">Learn how to create intelligent conversational agents using
                            CrewAI framework and advanced AI techniques.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">CrewAI</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Conversational AI</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Chatbots</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 9 -->
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-category="tutorials"
                    data-aos="fade-up" data-aos-delay="900" onclick="window.location.href='blog-detail.html'">
                    <div
                        class="h-48 bg-gradient-to-br from-matrix-green to-neon-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-bounce-slow">⚙️</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">Oct 30, 2024</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">15 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-white">Microservices with NestJS and Docker</h3>
                        <p class="text-gray-300 mb-4">Complete tutorial on building and deploying microservices
                            architecture using NestJS and Docker containers.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Microservices</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">NestJS</span>
                            <span class="blog-tag px-3 py-1 text-xs rounded-full">Docker</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <button
                    class="magnetic-button bg-neon-green text-neon-green px-8 py-4 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300 animate-glow">
                    Load More Posts
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-deep-black">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 gradient-text-animated font-mono" data-aos="fade-up">
                Stay Updated
            </h2>
            <p class="text-xl mb-12 text-gray-300" data-aos="fade-up" data-aos-delay="200">
                Subscribe to get the latest posts and insights delivered directly to your inbox
            </p>

            <div class="glass-effect p-8 rounded-xl max-w-md mx-auto" data-aos="fade-up" data-aos-delay="300">
                <form class="space-y-6">
                    <div>
                        <input type="email" placeholder="Enter your email address"
                            class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300">
                    </div>
                    <button type="submit"
                        class="w-full magnetic-button bg-neon-green text-neon-green px-8 py-3 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300">
                        Subscribe Now
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>
