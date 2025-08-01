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
                data-aos="zoom-in" >
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div
                        class="h-64 lg:h-auto bg-gradient-to-br from-neon-green via-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <a href="{{ route('blogDetail',['slug'=>$featuredBlog->slug]) }}" wire:navigates>
                        <img class="w-full object-center animate-bounce-slow" src="{{ asset('assets/'.$featuredBlog->image) }}" />
                        </a>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-12">
                        <div class="flex items-center mb-4">
                            <span class="text-neon-green text-sm font-semibold">{{ $featuredBlog->featured() ? 'FEATURED' : 'Non Featured' }}</span>
                            <span class="mx-3 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">{{ \Carbon\Carbon::parse($featuredBlog->created_at)->format('F j Y') }}</span>
                            <span class="mx-3 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">{{ $featuredBlog->reading_time }} min read</span>
                        </div>
                        <a href="{{ route('blogDetail',['slug'=>$featuredBlog->slug]) }}" wire:navigate>
                        <h3 class="text-3xl font-bold mb-6 text-white">{{ $featuredBlog->name }}</h3>
                        </a>
                        <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                        </p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            @foreach($featuredBlog->tags as $tag)
                            <span
                                class="px-4 py-2 bg-neon-green bg-opacity-20 text-black text-sm rounded-full">{{ $tag->name }}</span>
                                @endforeach
                        </div>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-black font-bold mr-4">
                                {{ $featuredBlog->author->initials() }}
                            </div>
                            <div>
                                <p class="text-white font-semibold">{{ $featuredBlog->author->name }}</p>
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
                    class="category-btn {{ $category == 'all' ? 'active' : '' }}  px-6 py-3 bg-neon-green text-black rounded-full font-semibold hover:bg-dark-green transition-all duration-300"
                    wire:model.live="category" wire:click="$set('category', 'all')">
                    All Posts
                </button>
                @foreach($categories as $cat)
                <button
                    class="category-btn {{ $category == $cat->id ? 'active' : ''}} px-6 py-3 glass-effect text-neon-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300 cursor-pointer"
                    wire:model.live="category" wire:click="$set('category', '{{ $cat->id }}')"
                    >
                    {{ $cat->name }}
                </button>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                @foreach($blogs as $blog)
                <article class="blog-card rounded-xl overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100" >
                    <div
                        class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <img class="w-full object-center animate-bounce-slow" src="{{ asset('assets/'.$blog->image) }}" />
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-neon-green text-sm">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j Y') }}</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-gray-400 text-sm">{{ $blog->reading_time }} min read</span>
                        </div>
                        <a href="{{ route('blogDetail',['slug'=>$blog->slug]) }}" wire:navigate>
                        <h3 class="text-xl font-bold mb-3 text-white">{{ $blog->name }}</h3>
                        </a>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($blog->tags as $tag)
                            <flux:badge color="green" variant="solid">{{ $tag->name }}</flux:badge>
                            @endforeach
                        </div>
                    </div>
                </article>
                @endforeach

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                {{ $blogs->links() }}
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
                <form class="space-y-6" wire:submit.prevent="subscribe">
                    <div>
                        <input type="email" placeholder="Enter your email address" wire:model="email"
                            class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300">
                            @error('email')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                                
                            @enderror
                    </div>
                    <button type="submit"
                        class="w-full magnetic-button bg-neon-green text-black px-8 py-3 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300">
                        Subscribe Now
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>
