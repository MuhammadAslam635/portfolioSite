<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">All Categories</h1>
                    <p class="text-gray-600 dark:text-gray-400">Discover amazing content from our community</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-900 dark:bg-green-600 px-4 py-2 rounded-lg border border-green-700">
                        <span class="text-sm text-gray-300">
                            Total: <span class="text-green-500 dark:text-green-400 font-semibold">{{ $totalSkills }}</span>
                            Categories
                        </span>
                    </div>
                    <flux:button variant="primary" :href="route('skills.create')" wire:navigate>
                        Create Skill
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5 gap-4">
                <!-- Search Input -->
                <div class="md:col-span-2 lg:col-span-2 xl:col-span-2">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Search categories..."
                            wire:model.live="search"
                            class="w-full bg-white dark:bg-gray-950 border border-green-700 rounded-lg px-4 py-3 pl-10 text-gray-950 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all duration-300 outline-none"
                        >
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-500 dark:text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Type Filter -->
                <div class="lg:col-span-1">
                    <select
                        wire:model.live="type"
                        class="w-full bg-white dark:bg-gray-950 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all duration-300 outline-none"
                    >
                        <option value="all">All Types</option>
                        <option value="0">Frontend</option>
                        <option value="1">Backend</option>
                        <option value="2">Databases</option>
                        <option value="3">AI Frameworks</option>
                    </select>
                </div>

                <!-- Status Filter -->
                <div class="lg:col-span-1">
                    <select
                        wire:model.live="status"
                        class="w-full bg-white dark:bg-gray-950 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all duration-300 outline-none"
                    >
                        <option value="all">All Status</option>
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <!-- Sort Filter -->
                <div class="lg:col-span-1">
                    <select
                        wire:model.live="latest"
                        class="w-full bg-white dark:bg-gray-950 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all duration-300 outline-none"
                    >
                        <option value="all">All</option>
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Skills Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @forelse ($skills as $skill)
                <div class="group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-900 border border-green-700 hover:border-green-500 transition-all duration-500 hover:shadow-2xl hover:shadow-green-500/20">

                    <!-- Action Badges -->
                    <div class="absolute top-4 left-4 z-10">
                        <div class="flex flex-wrap gap-2">
                            <!-- Status Badge -->
                            <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold shadow-md">
                                {{ $skill->is_active ? '✓ Active' : '✗ Inactive' }}
                            </span>

                            <!-- Edit Button -->
                            <a href="{{ route('skills.edit', ['slug' => $skill->slug]) }}" wire:navigate
                               class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold shadow-md transition-colors duration-300">
                                ✎ Edit
                            </a>

                            <!-- Delete Button -->
                            <button
                                wire:click="deleteCat({{ $skill->id }})"
                                wire:confirm="Are you sure you want to delete this category?"
                                class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded-full text-xs font-semibold shadow-md transition-colors duration-300"
                            >
                                ✗ Delete
                            </button>
                        </div>
                    </div>

                    <!-- Skill Image -->
                    <div class="relative h-48 overflow-hidden">
                        @if($skill->image && file_exists(public_path('assets/skills/' . $skill->image)))
                            <img
                                src="{{ asset('assets/skills/' . $skill->image) }}"
                                alt="{{ $skill->name }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                loading="lazy"
                            >
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                                <span class="text-white text-4xl font-bold">{{ substr($skill->name, 0, 1) }}</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    </div>

                    <!-- Skill Content -->
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3 line-clamp-2 group-hover:text-green-500 transition-colors duration-300">
                            {{ $skill->name }}
                        </h3>

                        @if($skill->description)
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2">
                                {{ $skill->description }}
                            </p>
                        @endif
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-span-full flex flex-col items-center justify-center py-12">
                    <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No categories found</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center mb-4">
                        @if(request()->has('search') || request()->has('type') || request()->has('status'))
                            Try adjusting your filters or search terms.
                        @else
                            Get started by creating your first category.
                        @endif
                    </p>
                    <flux:button variant="primary" :href="route('skills.create')" wire:navigate>
                        Create First Category
                    </flux:button>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($skills->hasPages())
            <div class="bg-green-50 dark:bg-black rounded-2xl p-6">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <!-- Page Info -->
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        Showing
                        <span class="font-semibold text-green-500">{{ $skills->firstItem() ?? 0 }}</span>
                        to
                        <span class="font-semibold text-green-500">{{ $skills->lastItem() ?? 0 }}</span>
                        of
                        <span class="font-semibold text-green-500">{{ $totalSkills }}</span>
                        results
                    </div>

                    <!-- Pagination Controls -->
                    <div class="flex items-center gap-2">
                        {{ $skills->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
