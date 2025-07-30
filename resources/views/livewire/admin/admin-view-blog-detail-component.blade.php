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
    </style>
@endpush
<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Blog Header Section -->
        <div class="bg-green-100/70 dark:bg-gray-800/70 rounded-3xl p-8 mb-8 hover-lift animate-fade-in">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                <!-- Blog Main Info -->
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-xl">
                            B
                        </div>
                        <div>
                            <h1 class="text-4xl font-bold gradient-text-animated mb-2">{{ $blog->name }}</h1>
                            <p class="text-gray-600 dark:text-gray-300">Discover amazing content from our community</p>
                        </div>
                    </div>

                    <!-- Blog Stats -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-6">
                        <div class="text-center p-3 rounded-xl bg-blue-50 dark:bg-blue-900/20">
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">{{ $blog->views }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Views</div>
                        </div>
                        <div class="text-center p-3 rounded-xl bg-red-50 dark:bg-red-900/20">
                            <div class="text-2xl font-bold text-red-600 dark:text-red-400">{{ $blog->likes }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Likes</div>
                        </div>
                        <div class="text-center p-3 rounded-xl bg-green-50 dark:bg-green-900/20">
                            <div class="text-2xl font-bold text-green-600 dark:text-green-400">
                                {{ $blog->comments_count }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Comments</div>
                        </div>
                        <div class="text-center p-3 rounded-xl bg-purple-50 dark:bg-purple-900/20">
                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                                {{ $blog->reading_time }}m</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Read Time</div>
                        </div>
                    </div>
                </div>

                <!-- Blog Meta Info -->
                <div class="lg:w-80">
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl p-6 text-white">
                        <h3 class="font-semibold mb-4">Blog Details</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="opacity-80">Published:</span>
                                <span>{{ $blog->published_at ?? 'Draft' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="opacity-80">Status:</span>
                                <span class="px-2 py-1 rounded-full text-xs bg-white/20">
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
                                <div class="flex justify-between">
                                    <span class="opacity-80">Featured:</span>
                                    <span class="px-2 py-1 rounded-full text-xs bg-yellow-400 text-yellow-900">★
                                        Featured</span>
                                </div>
                            @endif
                            <div class="flex justify-between">
                                <span class="opacity-80">Category:</span>
                                <span>{{ $blog->category->name ?? 'Uncategorized' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Gallery Section -->
        @if ($blog->blogGalleries && $blog->blogGalleries->count() > 0)
            <div class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Gallery</h2>
                    <div class="flex items-center justify-end gap-5 text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            {{ $blog->blogGalleries->count() }} images
                        </div>
                        <div>
                            <flux:button size="sm" variant="primary" color="green" icon="plus" wire:click="openDrawer">
                                Add New Tag
                            </flux:button>
                        </div>
                        <div>
                            <flux:button size="sm" variant="primary" icon="arrow-big-left" color="orange" :href="route('blogs')"
                                wire:navigate>
                                Back
                            </flux:button>
                        </div>
                    </div>
                </div>

                <div class="masonry-grid">
                    @foreach ($blog->blogGalleries->sortBy('order') as $gallery)
                        <div class="masonry-item animate-slide-up" style="animation-delay: {{ $loop->index * 0.1 }}s">
                            <div
                                class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover-lift group">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('assets/' . $gallery->image) }}" alt="{{ $gallery->caption }}"
                                        class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-110"
                                        loading="lazy">

                                    <div class="absolute top-3 right-3">
                                        <div class="flex flex-row gap-1">

                                            <flux:badge color="green" variant="solid">
                                                {{ $gallery->is_fetaured === 1 ? '★ Featured' : '★ Not Featured' }}
                                            </flux:badge>

                                            <flux:button variant="primary" icon="pencil" color="indigo"
                                                :href="route('blogs.gallery.edit',['id'=>$gallery->id])" wire:navigate>
                                                Edit
                                            </flux:button>
                                        </div>
                                    </div>
                                </div>

                                @if ($gallery->caption || $gallery->content)
                                    <div class="p-4">
                                        @if ($gallery->caption)
                                            <h3 class="font-semibold text-gray-800 dark:text-white mb-2">
                                                {{ $gallery->caption }}</h3>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Blog Tags Section -->
        @if ($blog->tags && $blog->tags->count() > 0)
            <div class="bg-green-100/70 dark:bg-gray-800/70  rounded-3xl p-8 hover-lift animate-fade-in">
                <div class="flex items-center gap-3 mb-6">
                    <div
                        class="w-8 h-8 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Tags</h2>
                    <span class="text-sm text-gray-500 dark:text-gray-400">({{ $blog->tags->count() }})</span>
                </div>

                <div class="flex flex-wrap gap-3">
                    @foreach ($blog->tags as $tag)
                        <flux:badge color="indigo" variant="solid" icon="tag">
                            {{ $tag->name }}
                            <span class="text-xs text-gray-950 dark:text-gray-400 mx-2 cursor-pointer"
                                wire:click="openModal({{ $tag->id }})">
                                <flux:icon name="square-pen" />
                            </span>
                        </flux:badge>
                    @endforeach
                    <flux:button variant="primary" color="green" icon="plus" wire:click="openDrawer">
                        Add New Tag
                    </flux:button>
                </div>
            </div>
        @endif

        <flux:modal wire:model.self="showConfirmModal" variant="flyout">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Edit Tage</flux:heading>
                </div>
                <form wire:submit.prevent="editTag" class="space-y-4">
                    <flux:select wire:model="tagId" placeholder="Pick Tag..." label="Update Tag">
                        @foreach ($tags as $tag)
                            <flux:select.option value="{{ $tag->id }}">{{ $tag->name }}</flux:select.option>
                        @endforeach
                    </flux:select>

                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary" color="green">Save changes</flux:button>
                    </div>
                </form>

            </div>
        </flux:modal>
        <flux:modal wire:model.self="showdrawer" variant="flyout" position="left">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add New Tag</flux:heading>
                </div>
                <form wire:submit.prevent="createTag" class="space-y-4">
                    <flux:select wire:model="tagId" placeholder="Pick Tag..." label="Select Tag">
                        @foreach ($tags as $tag)
                            <flux:select.option value="{{ $tag->id }}">{{ $tag->name }}</flux:select.option>
                        @endforeach
                    </flux:select>

                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary" color="green">Save changes</flux:button>
                    </div>
                </form>

            </div>
        </flux:modal>
    </div>
</div>
