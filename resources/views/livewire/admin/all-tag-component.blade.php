<div class="min-h-screen p-4 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">All Tags</h1>
                    <p class="text-gray-600 dark:text-gray-400">Discover amazing content from our community</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-100 dark:bg-gray-700 px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-600">
                        <span class="text-sm text-gray-700 dark:text-gray-300">
                            Total: <span class="text-blue-600 dark:text-blue-400 font-semibold">{{ $totalTags }}</span> Tags
                        </span>
                    </div>
                    <flux:button variant="primary" :href="route('tags.create')" wire:navigate>
                        Create Tag
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Search Input -->
                <div class="md:col-span-2 lg:col-span-2">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Search tags..."
                            wire:model.live="search"
                            class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 pl-10 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                        >
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Status Filter -->
                <div>
                    <select
                        wire:model.live="status"
                        class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                    >
                        <option value="all">All Status</option>
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <!-- Sort Filter -->
                <div>
                    <select
                        wire:model.live="latest"
                        class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                    >
                        <option value="all">All</option>
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Tags Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @foreach ($tags as $tag)
                <div class="group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:border-blue-300 dark:hover:border-blue-500 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">

                    <!-- Action Buttons -->
                    <div class="absolute top-4 left-4 right-4 z-10">
                        <div class="flex items-center justify-between">
                            <!-- Status Badge -->
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ $tag->is_active ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400' : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300' }}">
                                {{ $tag->is_active ? 'Active' : 'Inactive' }}
                            </span>

                            <!-- Action Buttons -->
                            <div class="flex items-center gap-2">
                                <a
                                    href="{{ route('tags.edit', ['slug' => $tag->slug]) }}"
                                    wire:navigate
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 hover:bg-blue-200 dark:bg-blue-900/30 dark:hover:bg-blue-900/50 text-blue-600 dark:text-blue-400 transition-colors duration-200"
                                    title="Edit Tag"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <button
                                    wire:click="deleteTag({{ $tag->id }})"
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-100 hover:bg-red-200 dark:bg-red-900/30 dark:hover:bg-red-900/50 text-red-600 dark:text-red-400 transition-colors duration-200"
                                    title="Delete Tag"
                                    onclick="return confirm('Are you sure you want to delete this tag?')"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Tag Image -->
                    <div class="relative h-48 overflow-hidden bg-gray-100 dark:bg-gray-700">
                        @if($tag->image)
                            <img
                                src="{{ asset($tag->image) }}"
                                alt="{{ $tag->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            >
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                    </div>

                    <!-- Tag Content -->
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2 line-clamp-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
                            {{ $tag->name }}
                        </h3>

                        <!-- Additional tag info could go here -->
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Created {{ $tag->created_at?->diffForHumans() ?? 'recently' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if($tags->isEmpty())
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No tags found</h3>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Get started by creating your first tag.</p>
                <flux:button variant="primary" :href="route('tags.create')" wire:navigate>
                    Create Tag
                </flux:button>
            </div>
        @endif

        <!-- Pagination -->
        @if($tags->hasPages())
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <!-- Page Info -->
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        Showing
                        <span class="font-medium text-gray-900 dark:text-white">{{ $tags->firstItem() ?? 0 }}</span>
                        to
                        <span class="font-medium text-gray-900 dark:text-white">{{ $tags->lastItem() ?? 0 }}</span>
                        of
                        <span class="font-medium text-gray-900 dark:text-white">{{ $totalTags }}</span>
                        results
                    </div>

                    <!-- Pagination Controls -->
                    <div class="flex items-center gap-2">
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
