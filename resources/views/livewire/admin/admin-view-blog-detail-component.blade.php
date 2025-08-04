@push('css')
    <style>
        .gradient-text-animated {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 4s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .masonry-grid {
            column-count: 1;
            column-gap: 1.5rem;
        }

        @media (min-width: 640px) {
            .masonry-grid {
                column-count: 2;
            }
        }

        @media (min-width: 1024px) {
            .masonry-grid {
                column-count: 3;
            }
        }

        @media (min-width: 1280px) {
            .masonry-grid {
                column-count: 4;
            }
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.6s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }
    </style>
@endpush

<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Blog Header Section -->
        <div
            class="bg-gradient-to-br from-emerald-50 to-cyan-50 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-8 mb-8 hover-lift animate-fade-in">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                <!-- Blog Main Info -->
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-r from-emerald-500 to-cyan-500 flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            {{ strtoupper(substr($blog->name, 0, 1)) }}
                        </div>
                        <div>
                            <h1 class="text-4xl font-bold gradient-text-animated mb-2">{{ $blog->name }}</h1>
                            <p class="text-gray-600 dark:text-gray-300">{{ $blog->category->name ?? 'Uncategorized' }}
                                Article</p>
                        </div>
                    </div>

                    <!-- Blog Stats -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-6">
                        <div
                            class="text-center p-4 rounded-xl bg-white/70 dark:bg-gray-700/50 backdrop-blur-sm border border-white/20">
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">{{ $blog->views ?? 0 }}
                            </div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Views</div>
                        </div>
                        <div
                            class="text-center p-4 rounded-xl bg-white/70 dark:bg-gray-700/50 backdrop-blur-sm border border-white/20">
                            <div class="text-2xl font-bold text-red-600 dark:text-red-400">{{ $blog->likes ?? 0 }}
                            </div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Likes</div>
                        </div>
                        <div
                            class="text-center p-4 rounded-xl bg-white/70 dark:bg-gray-700/50 backdrop-blur-sm border border-white/20">
                            <div class="text-2xl font-bold text-green-600 dark:text-green-400">
                                {{ $blog->comments_count ?? 0 }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Comments</div>
                        </div>
                        <div
                            class="text-center p-4 rounded-xl bg-white/70 dark:bg-gray-700/50 backdrop-blur-sm border border-white/20">
                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                                {{ $blog->reading_time ?? 0 }}m</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Read Time</div>
                        </div>
                    </div>
                </div>

                <!-- Blog Meta Info -->
                <div class="lg:w-80">
                    <div class="bg-gradient-to-br from-emerald-500 to-cyan-600 rounded-2xl p-6 text-white shadow-xl">
                        <h3 class="font-semibold mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Blog Details
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="opacity-80">Published:</span>
                                <span
                                    class="font-medium">{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') : 'Draft' }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="opacity-80">Status:</span>
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-white/20 backdrop-blur-sm">
                                    @if ($blog->is_published == 1)
                                        Published
                                    @elseif($blog->is_published == 2)
                                        Scheduled
                                    @else
                                        Draft
                                    @endif
                                </span>
                            </div>
                            @if ($blog->is_featured)
                                <div class="flex justify-between items-center">
                                    <span class="opacity-80">Featured:</span>
                                    <span
                                        class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-400 text-yellow-900">
                                        ⭐ Featured
                                    </span>
                                </div>
                            @endif
                            <div class="flex justify-between items-center">
                                <span class="opacity-80">Category:</span>
                                <span class="font-medium">{{ $blog->category->name ?? 'Uncategorized' }}</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-6 flex gap-2">
                            <flux:button size="sm" variant="primary" color="orange" icon="arrow-left"
                                :href="route('blogs')" wire:navigate class="flex-1">
                                Back
                            </flux:button>

                            <flux:button size="sm" variant="primary" color="green" icon="external-link"
                                :href="route('blogDetail', ['slug'=>$blog->slug])" target="_blank"
                                class="flex-1">
                                View Live
                            </flux:button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Gallery Section -->
        @if ($blog->blogGalleries && $blog->blogGalleries->count() > 0)
            <div class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-8 h-8 rounded-lg bg-gradient-to-r from-emerald-500 to-cyan-500 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Gallery</h2>
                        <flux:badge color="emerald" variant="soft">{{ $blog->blogGalleries->count() }} images
                        </flux:badge>
                    </div>
                </div>

                <div class="masonry-grid">
                    @foreach ($blog->blogGalleries->sortBy('order') as $gallery)
                        <div class="masonry-item animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover-lift group">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('assets/' . $gallery->image) }}"
                                        alt="{{ $gallery->caption }}"
                                        class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-110"
                                        loading="lazy">

                                    <div class="absolute top-3 right-3 flex gap-2">
                                        <flux:badge color="{{ $gallery->is_featured === 1 ? 'yellow' : 'gray' }}"
                                            variant="solid" size="sm">
                                            {{ $gallery->is_featured === 1 ? '⭐ Featured' : 'Regular' }}
                                        </flux:badge>
                                        <flux:button variant="primary" icon="pencil" color="indigo" size="sm"
                                            :href="route('blogs.gallery.edit', ['id' => $gallery->id])"
                                            wire:navigate>
                                            Edit
                                        </flux:button>
                                    </div>
                                </div>

                                @if ($gallery->caption)
                                    <div class="p-4">
                                        <h3 class="font-semibold text-gray-800 dark:text-white">{{ $gallery->caption }}
                                        </h3>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Blog Tags Section -->
        <div
            class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-6 hover-lift animate-fade-in">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <div
                        class="w-8 h-8 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Tags</h2>
                    <flux:badge color="blue" variant="soft">{{ $blog->tags->count() }}</flux:badge>
                </div>
                <flux:button variant="primary" color="green" icon="plus" wire:click="openDrawer"
                    size="sm">
                    Add Tag
                </flux:button>
            </div>

            <div class="flex flex-wrap gap-3">
                @forelse ($blog->tags as $blogTag)
                    <div
                        class="flex items-center gap-2 bg-white/70 dark:bg-gray-700/50 backdrop-blur-sm rounded-lg px-3 py-2 border border-white/20">
                        <flux:badge color="indigo" variant="solid" icon="tag" size="sm">
                            {{ $blogTag->tag->name }}
                        </flux:badge>
                        <div class="flex gap-1">
                            <button wire:click="openModal({{ $blogTag->id }})"
                                class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                            </button>
                            <button wire:click="deleteTag({{ $blogTag->id }})"
                                class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 transition-colors"
                                onclick="return confirm('Are you sure you want to remove this tag?')">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 dark:text-gray-400 italic">No tags assigned yet.</p>
                @endforelse
            </div>
        </div>

        <!-- Edit Tag Modal -->
        <flux:modal wire:model.self="showConfirmModal" variant="flyout">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg" class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                        Edit Tag
                    </flux:heading>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Update the tag for this blog</p>
                </div>
                <form wire:submit.prevent="editTag" class="space-y-4">
                    <flux:select wire:model="tagId" placeholder="Select a tag..." label="Tag" required>
                        @foreach ($tags as $tag)
                            <flux:select.option value="{{ $tag->id }}">{{ $tag->name }}
                            </flux:select.option>
                        @endforeach
                    </flux:select>

                    <div class="flex gap-3 pt-4">
                        <flux:button type="button" variant="ghost" wire:click="$set('showConfirmModal', false)"
                            class="flex-1">
                            Cancel
                        </flux:button>
                        <flux:button type="submit" variant="primary" color="green" class="flex-1">
                            Update Tag
                        </flux:button>
                    </div>
                </form>
            </div>
        </flux:modal>

        <!-- Add Tag Modal -->
        <flux:modal wire:model.self="showdrawer" variant="flyout" position="left">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg" class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                        Add New Tag
                    </flux:heading>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Assign a new tag to this blog</p>
                </div>
                <form wire:submit.prevent="createTag" class="space-y-4">
                    <flux:select wire:model="tagId" placeholder="Select a tag..." label="Tag" required>
                        @foreach ($tags as $tag)
                            <flux:select.option value="{{ $tag->id }}">{{ $tag->name }}
                            </flux:select.option>
                        @endforeach
                    </flux:select>

                    <flux:button type="submit" variant="primary" color="green" class="w-full">
                        Add Tag
                    </flux:button>
                </form>
            </div>
        </flux:modal>
    </div>
</div>
