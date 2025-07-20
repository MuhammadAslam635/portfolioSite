 <!-- Blog Section -->
 <section id="blogs" class="py-20 bg-charcoal">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
             Latest Blog Posts</h2>

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
