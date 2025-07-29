<div>

    <!-- Blog Header -->
    <section class="pt-32 pb-10 bg-deep-black">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="flex items-center justify-center mb-6">
                    <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-black text-sm rounded-full">{{$blog->category->name}}</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 gradient-text-animated font-mono">
                    {{ $blog->name }}
                </h1>
                <div class="flex items-center justify-center space-x-6 text-gray-400 mb-8">
                    <span>{{ \Carbon\Carbon::parse($blog->is_published_at)->isoFormat('MMM Do YYYY') }}</span>
                    <span>•</span>
                    <span>{{ $blog->reading_time }} min read</span>
                    <span>•</span>
                    <span>{{ $blog->views }} views</span>
                </div>
                <div class="flex items-center justify-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-black font-bold text-xl mr-4 animate-glow">
                        {{ $blog->author->initials() }}
                    </div>
                    <div class="text-left">
                        <p class="text-white font-semibold text-lg">{{ $blog->author->name }}</p>
                        <p class="text-gray-400">Backend Developer & Team Lead</p>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-6 ">
                    @foreach($blog->tags as $tag)
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-black text-sm rounded-full mr-2">
                            {{ $tag->name }}
                        </span>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-effect p-12 rounded-2xl" data-aos="fade-up">
                <div class="prose prose-invert max-w-none">


                    <div
                        class="h-64 bg-gradient-to-br from-neon-green to-dark-green opacity-80 rounded-xl mb-12 flex items-center justify-center">

                        <img src="{{ asset('assets/' . $blog->image) }}" alt="{{ $blog->image }}"
                            class="w-full h-full object-cover rounded-xl animate-bounce-slow">
                    </div>
                    @foreach ($blog->blogGalleries as $gallery)
                        <h2 class="text-3xl font-bold mb-6 text-neon-green">{{ $gallery->caption }}</h2>
                        <div
                            class="h-64 bg-gradient-to-br from-neon-green to-dark-green opacity-80 rounded-xl mb-12 flex items-center justify-center">

                            <img src="{{ asset('assets/' . $gallery->image) }}" alt="{{ $blog->image }}"
                                class="w-full h-full object-cover rounded-xl ">
                        </div>
                        {!! $gallery->rendered_content !!}
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    <section class="py-20 bg-deep-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
                data-aos="fade-up">
                Related Posts
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Post 1 -->
                @foreach($relatedBlogs as $relatedBlog)
                <article class="blog-card rounded-xl overflow-hidden cursor-pointer" data-aos="fade-up"
                    data-aos-delay="100" onclick="window.location.href='blog-detail.html'">
                    <div
                        class="h-48 bg-gradient-to-br from-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl animate-wiggle">🤖</span>
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
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Comments Section -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-12 gradient-text-animated font-mono" data-aos="fade-up">
                Comments & Discussion
            </h2>

            <x-blog-comment-form />

            <!-- Sample Comments -->
            <x-blog-comments :comments="$blog->blogComments" />
        </div>
    </section>
</div>
