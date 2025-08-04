<div class="min-h-screen p-4 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">All Projects</h1>
                    <p class="text-gray-600 dark:text-gray-400">Discover amazing content from our community</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-100 dark:bg-gray-700 px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-600">
                        <span class="text-sm text-gray-700 dark:text-gray-300">
                            Total: <span class="text-blue-600 dark:text-blue-400 font-semibold">{{ $totalProjects }}</span> Projects
                        </span>
                    </div>
                    <flux:button variant="primary" :href="route('projects.create')" wire:navigate>
                        Create New Project
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl p-4 text-center border border-blue-200 dark:border-blue-800">
                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-1">{{ $totalProjects }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Total Projects</div>
                </div>
                <div class="bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-xl p-4 text-center border border-green-200 dark:border-green-800">
                    <div class="text-2xl font-bold text-green-600 dark:text-green-400 mb-1">{{ $publishedProjects }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Published</div>
                </div>
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 dark:from-yellow-900/20 dark:to-yellow-800/20 rounded-xl p-4 text-center border border-yellow-200 dark:border-yellow-800">
                    <div class="text-2xl font-bold text-yellow-600 dark:text-yellow-400 mb-1">{{ $draftedProjects }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Drafts</div>
                </div>
                <div class="bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/20 rounded-xl p-4 text-center border border-red-200 dark:border-red-800">
                    <div class="text-2xl font-bold text-red-600 dark:text-red-400 mb-1">{{ $pendingProjects }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Archived</div>
                </div>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4">
                <!-- Search Input -->
                <div class="md:col-span-2 lg:col-span-2">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Search projects..."
                            wire:model.live="search"
                            class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 pl-10 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                        >
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Skills Filter -->
                <div>
                    <select
                        wire:model.live="category"
                        class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                    >
                        <option value="all">All Skills</option>
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Status Filter -->
                <div>
                    <select
                        wire:model.live="status"
                        class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                    >
                        <option value="all">All Status</option>
                        <option value="0">Pending</option>
                        <option value="1">Published</option>
                        <option value="2">Drafted</option>
                        <option value="3">Archived</option>
                    </select>
                </div>

                <!-- Featured Filter -->
                <div>
                    <select
                        wire:model.live="featured"
                        class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                    >
                        <option value="all">All Posts</option>
                        <option value="1">Featured Only</option>
                        <option value="0">Regular Posts</option>
                    </select>
                </div>

                <!-- Sort Filter -->
                <div>
                    <select
                        wire:model.live="latest"
                        class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-200"
                    >
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                        <option value="popular">Most Popular</option>
                        <option value="views">Most Viewed</option>
                        <option value="likes">Most Liked</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @foreach ($projects as $project)
                <div class="group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:border-blue-300 dark:hover:border-blue-500 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/10">

                    <!-- Top Action Badges -->
                    <div class="absolute top-4 left-4 right-4 z-10">
                        <div class="flex flex-wrap items-start justify-between gap-2">
                            <!-- Featured Badge -->
                            <div class="flex flex-wrap gap-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium {{ $project->is_featured ? 'bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400' : 'bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400' }}">
                                    {{ $project->is_featured ? '⭐ Featured' : 'Non Featured' }}
                                </span>

                                <!-- Action Buttons -->
                                <button
                                    wire:click="openProjectModal({{ $project->id }})"
                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-pink-100 hover:bg-pink-200 text-pink-800 dark:bg-pink-900/30 dark:text-pink-400 transition-colors duration-200"
                                    title="Add Gallery"
                                >
                                    Add Gallery
                                </button>

                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-lime-100 text-lime-800 dark:bg-lime-900/30 dark:text-lime-400">
                                    New Tag
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Image -->
                    <div class="relative h-48 overflow-hidden bg-gray-100 dark:bg-gray-700">
                        @if($project->image)
                            <img
                                src="{{ asset('assets/projects/' . $project->image) }}"
                                alt="{{ $project->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            >
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                        <!-- Bottom Action Buttons -->
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex flex-wrap items-center gap-2">
                                <!-- Reading Time -->
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-rose-500/80 backdrop-blur-sm text-white">
                                    {{ $project->reading_time }} min read
                                </span>

                                <!-- Edit Button -->
                                <a
                                    href="{{ route('projects.edit', ['slug' => $project->slug]) }}"
                                    wire:navigate
                                    class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-medium bg-indigo-500/80 hover:bg-indigo-600/80 backdrop-blur-sm text-white transition-colors duration-200"
                                >
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </a>

                                <!-- View Button -->
                                <a
                                    href="{{ route('projects.detail', ['slug' => $project->slug]) }}"
                                    class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-medium bg-fuchsia-500/80 hover:bg-fuchsia-600/80 backdrop-blur-sm text-white transition-colors duration-200"
                                >
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <!-- Category & Date -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                                {{ $project->category->name }}
                            </span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">
                                {{ \Carbon\Carbon::parse($project->created_at)->isoFormat('MMM Do YYYY') }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 line-clamp-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
                            {{ $project->name }}
                        </h3>

                        <!-- Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    {{ $project->views > 1000 ? number_format($project->views / 1000, 1) . 'k' : $project->views }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    {{ $project->likes > 1000 ? number_format($project->likes / 1000, 1) . 'k' : $project->likes }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    {{ $project->comments_count > 1000 ? number_format($project->comments_count / 1000, 1) . 'k' : $project->comments_count }}
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <div class="w-2 h-2 {{ $project->is_published == 1 ? 'bg-green-500' : 'bg-yellow-500' }} rounded-full"></div>
                                <span>{{ $project->is_published == 1 ? 'Published' : 'Drafted' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if($projects->isEmpty())
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No projects found</h3>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Get started by creating your first project.</p>
                <flux:button variant="primary" :href="route('projects.create')" wire:navigate>
                    Create New Project
                </flux:button>
            </div>
        @endif

        <!-- Pagination -->
        @if($projects->hasPages())
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <!-- Page Info -->
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        Showing
                        <span class="font-medium text-gray-900 dark:text-white">{{ $projects->firstItem() ?? 0 }}</span>
                        to
                        <span class="font-medium text-gray-900 dark:text-white">{{ $projects->lastItem() ?? 0 }}</span>
                        of
                        <span class="font-medium text-gray-900 dark:text-white">{{ $totalProjects }}</span>
                        results
                    </div>

                    <!-- Pagination Controls -->
                    <div class="flex items-center gap-2">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        @endif

        <!-- Gallery Modal -->
        <flux:modal class="md:w-full" wire:model.self="showConfirmModal">
            <form wire:submit.prevent="addProjectContent" enctype="multipart/form-data">
                <div class="space-y-6">
                    <!-- Content Editor Section -->
                    <section class="border border-gray-200 dark:border-gray-700 p-4 rounded-lg bg-gray-50 dark:bg-gray-900 space-y-4">
                        @error('content')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        <!-- Trix Editor -->
                        <div wire:ignore>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Content</label>
                            <input id="content" type="hidden" wire:model.live="content">
                            <trix-editor
                                input="content"
                                class="w-full trix-content min-h-[16rem] border rounded-lg shadow-sm"
                                placeholder="Enter your project content here..."
                                x-data="{ content: @entangle('content').live }"
                                x-init="$el.addEventListener('trix-change', function(e) { content = e.target.value; }); $el.editor.loadHTML(content);"
                            ></trix-editor>
                        </div>
                    </section>

                    <!-- Caption Input -->
                    <flux:input label="Caption" wire:model="caption" placeholder="Enter image caption" />

                    <!-- Image Upload -->
                    <flux:input label="Image" wire:model.live="projectImage" type="file" accept="image/*" />

                    <!-- Image Preview -->
                    @if($projectImage)
                        <div class="w-full rounded-lg p-1">
                            <img
                                src="{{ $projectImage->temporaryUrl() }}"
                                class="object-cover w-full max-w-md h-48 border-2 border-blue-500 rounded-lg shadow-lg"
                                alt="Project preview"
                            />
                        </div>
                    @endif

                    <!-- Modal Actions -->
                    <div class="flex justify-end gap-3">
                        <flux:button type="button" variant="ghost" wire:click="$set('showConfirmModal', false)">
                            Cancel
                        </flux:button>
                        <flux:button type="submit" variant="primary">
                            Save Gallery
                        </flux:button>
                    </div>
                </div>
            </form>
        </flux:modal>
    </div>
</div>

@push('css')
<style>
    .dark trix-editor {
        background-color: #1f2937 !important;
        color: #f9fafb !important;
        border-color: #374151 !important;
    }

    .dark trix-editor:focus {
        outline: none !important;
        box-shadow: 0 0 0 2px #3b82f6 !important;
    }

    .dark trix-toolbar {
        background-color: #1f2937 !important;
        border-color: #374151 !important;
    }

    .dark trix-toolbar .trix-button {
        color: #d1d5db !important;
        background: transparent !important;
    }

    .dark trix-toolbar .trix-button:hover {
        background-color: #374151 !important;
    }

    .dark trix-toolbar .trix-button--icon {
        filter: invert(1) brightness(1.2);
    }

    .dark trix-editor::placeholder {
        color: #9ca3af !important;
    }

    /* Line clamp utility */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
