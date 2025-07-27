<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">All Blogs</h1>
                    <p class="text-gray-400">Discover amazing content from our community</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-900 px-4 py-2 rounded-lg border border-green-700">
                        <span class="text-sm text-gray-300">Total: <span
                                class="text-neon-green font-semibold">{{ $totalBlogs }}</span>
                            blogs</span>
                    </div>
                    <flux:button variant="primary" :href="route('blogs.create')" wire:navigate>Create New Blog
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Search and Filters Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-neon-green mb-1">{{ $totalBlogs }}</div>
                    <div class="text-sm text-gray-400">Total Blogs</div>
                </div>
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-neon-green mb-1">{{ $publishedBlogs }}</div>
                    <div class="text-sm text-gray-400">Published</div>
                </div>
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-500 mb-1">{{ $draftedBlogs }}</div>
                    <div class="text-sm text-gray-400">Drafts</div>
                </div>
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-red-500 mb-1">{{ $pendingBlogs }}</div>
                    <div class="text-sm text-gray-400">Archived</div>
                </div>
            </div>
        </div>
        <div class="bg-green-50 dark:g=bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-4">
                <div class="md:col-span-2 lg:col-span-2 xl:col-span-2">
                    <div class="relative">
                        <input type="text" placeholder="Search blogs..." wire:model.live="search"
                            class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 pl-10 text-gray-950 dark:text-white dark:placeholder-gray-100 placeholder-gray-900 focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="category"
                        class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="all">All Categories</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="status"
                        class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="all">All Status</option>
                        <option value="0">Pending</option>
                        <option value="1">Published</option>
                        <option value="2">Drafted</option>
                        <option value="3">Archived</option>
                    </select>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="featured"
                        class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="all">All Posts</option>
                        <option value="1">Featured Only</option>
                        <option value="0">Regular Posts</option>
                    </select>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="latest"
                        class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">

                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                        <option value="popular">Most Popular</option>
                        <option value="views">Most Viewed</option>
                        <option value="likes">Most Liked</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @foreach ($blogs as $blog)
                <div
                    class="blog-card group relative rounded-2xl overflow-hidden bg-green-50 dark:bg-gray-900 border border-green-700 hover:border-neon-green transition-all duration-500 hover:shadow-2xl hover:shadow-neon-green/20">

                    <div class="absolute top-4 left-4 z-10">
                        <div class="flex flex-row gap-1">
                            <flux:badge color="amber" class="text-xs font-semibold animate-pulse">
                                {{ $blog->is_featured ? '⭐ Featured' : ' Non Featured' }}
                            </flux:badge>
                            <flux:badge color="pink" class="cursor-pointer text-xs font-semibold animate-pulse"
                                wire:click="addContentBlog({{ $blog->id }})">New Content</flux:badge>
                            <flux:badge color="lime" class="cursor-pointer text-xs font-semibold animate-pulse">New
                                Tag
                            </flux:badge>
                        </div>
                    </div>

                    <!-- Blog Image -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('assets/' . $blog->image) }}" alt="Blog Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>

                        <!-- Reading Time -->
                        <div class="absolute bottom-4 left-4">
                            <div class="flex flex-row gap-1">
                                <flux:badge color="rose"
                                    class="backdrop-blur-sm px-2 py-1 rounded-full text-xs text-white">
                                    {{ $blog->reading_time }} min read
                                </flux:badge>
                                <flux:button variant="primary" color="indigo" size="sm" icon="pencil-off"
                                    class="backdrop-blur-sm cursor-pointer" :href="route('blogs.edit',['slug'=>$blog->slug])" wire:navigate>
                                    Edit
                                </flux:button>
                                <flux:button variant="primary" color="fuchsia" size="sm" icon="eye"
                                    class="backdrop-blur-sm cursor-pointer">
                                    Detail
                                </flux:button>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Content -->
                    <div class="p-6">
                        <!-- Category & Date -->
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="blog-tag px-2 py-1 rounded-full text-xs font-medium">{{ $blog->category->name }}</span>
                            <span
                                class="text-xs text-gray-400">{{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM Do YYYY') }}</span>
                        </div>

                        <!-- Title -->
                        <h3
                            class="text-lg font-bold text-gray-950 dark:text-white mb-3 line-clamp-2 group-hover:text-neon-green transition-colors duration-300">
                            {{ $blog->name }}
                        </h3>

                        <!-- Author -->
                        <div class="flex items-center gap-3 mb-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=face"
                                alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm text-gray-500">{{ $blog->author->name }}</span>
                        </div>

                        <!-- Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-400">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                    {{ $blog->views > 1000 ? $blog->views / 1000 . 'k' : $blog->views }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                    {{ $blog->likes > 1000 ? $blog->likes . 'k' : $blog->likes }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    {{ $blog->comments_count > 1000 ? $blog->comments_count . 'k' : $blog->comments_count }}
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span>{{ $blog->is_published == 1 ? 'Published' : 'Drafted' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>



        <!-- Pagination -->
        <div class="g=bg-green-50 dark:bg-black rounded-2xl p-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

                <!-- Page Info -->
                <div class="text-sm text-gray-400">
                    Showing <span class="font-semibold text-neon-green">1</span> to <span
                        class="font-semibold text-neon-green">{{ $blogs->count() }}</span> of <span
                        class="font-semibold text-neon-green">{{ $totalBlogs }}</span> results
                </div>

                <!-- Pagination Controls -->
                <div class="flex items-center gap-2">

                    {{ $blogs->links() }}
                </div>


            </div>
        </div>
        <div>


            <flux:modal class="md:w-full" wire:model.self="showConfirmModal">
                <form wire:submit.prevent="addBlogContent" enctype="multipart/form-data">
                    <div class="space-y-6">
                        <section
                            class="border border-gray-200 dark:border-gray-700 p-4 rounded bg-zinc-50 dark:bg-gray-900 space-y-4">

                            @error('content')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror

                            {{-- Trix Editor with proper Livewire integration --}}
                            <div wire:ignore>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Content</label>
                                <input id="content" type="hidden" wire:model.live="content">
                                <trix-editor input="content"
                                    class="w-full trix-content min-h-[16rem] border rounded shadow-sm"
                                    placeholder="Enter your contact page content here..." x-data="{
                                        content: @entangle('content').live
                                    }"
                                    x-init="$el.addEventListener('trix-change', function(e) {
                                        content = e.target.value;
                                    });
                                    $el.editor.loadHTML(content);"></trix-editor>
                            </div>
                        </section>

                        <flux:input label="Caption" wire:model="caption" placeholder="Caption" />

                        <flux:input label="Image" wire:model="Blogimage" type="file" />

                        <div class="flex">
                            <flux:spacer />

                            <flux:button type="submit" variant="primary">Save Content</flux:button>
                        </div>
                    </div>
                </form>
            </flux:modal>
        </div>
    </div>
</div>
@push('css')
    <style>
        .dark trix-editor {
            background-color: #1f2937 !important;
            /* gray-800 */
            color: #f9fafb !important;
            /* zinc-100 */
            border-color: #374151 !important;
            /* gray-700 */
        }

        .dark trix-editor:focus {
            outline: none !important;
            box-shadow: 0 0 0 2px #4ade80 !important;
            /* green-400 focus ring */
        }

        .dark trix-toolbar {
            background-color: #1f2937 !important;
            /* gray-800 */
            border-color: #374151 !important;
        }

        .dark trix-toolbar .trix-button {
            color: #d1d5db !important;
            /* gray-300 */
            background: transparent !important;
        }

        .dark trix-toolbar .trix-button:hover {
            background-color: #374151 !important;
            /* gray-700 */
        }

        .dark trix-toolbar .trix-button--icon {
            filter: invert(1) brightness(1.2);
            /* invert toolbar icons */
        }

        .dark trix-editor::placeholder {
            color: #9ca3af !important;
            /* gray-400 */
        }
    </style>
@endpush
