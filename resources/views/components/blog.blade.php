 <!-- Blog Section -->
 <section class="py-20 bg-charcoal">

     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
             Latest Blog Posts</h2>

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
             <!-- Blog Post 1 -->
             @foreach ($blogs as $blog)
                 <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-aos="fade-up"
                     data-aos-delay="100">
                     <a href="{{ route('blogDetail', $blog->slug) }}" class="block h-full" wire:navigate>
                     <div
                         class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 flex items-center justify-center relative overflow-hidden">

                         <img src="{{ asset('assets/' . $blog->image) }}" alt="{{ $blog->image }}"
                             class="absolute inset-0 w-full h-full object-cover animate-bounce-slow">
                         <div
                             class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                         </div>
                     </div>
                     <div class="p-6">
                         <div class="flex items-center mb-3">
                             <span
                                 class="text-neon-green text-sm">{{ \Carbon\Carbon::parse($blog->published_at)->isoFormat('MMM Do YYYY') }}</span>
                             <span class="mx-2 text-gray-500">•</span>
                             <span class="text-gray-400 text-sm">{{ $blog->reading_time }} min read</span>
                         </div>
                         <h3 class="text-xl font-bold mb-3 text-white">{{ $blog->name }}</h3>
                         <p class="text-gray-300 mb-4">Learn how to architect robust and scalable APIs using NestJS
                             framework with best practices and real-world examples.</p>
                         <div class="flex flex-wrap gap-2">
                             @foreach ($blog->tags as $tag)
                                 <span
                                     class="blog-tag px-3 py-1 text-xs rounded-full animate-pulse">{{ $tag->name }}</span>
                             @endforeach
                         </div>
                     </div>
                     </a>
                 </article>
             @endforeach

         </div>
     </div>
 </section>
