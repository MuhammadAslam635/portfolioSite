<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">All Categories</h1>
                    <p class="text-gray-400">Discover amazing content from our community</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-900 dark:bg-green-600 px-4 py-2 rounded-lg border border-green-700">
                        <span class="text-sm text-gray-300">Total: <span
                                class="text-neon-green font-semibold">{{ $totalSkills }}</span>
                            Catgeories</span>
                    </div>
                    <flux:button variant="primary" :href="route('skills.create')" wire:navigate>
                        Create Skill
                    </flux:button>
                </div>
            </div>
        </div>
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5 gap-4">
                <div class="md:col-span-2 lg:col-span-2 xl:col-span-2">
                    <div class="relative">
                        <input type="text" placeholder="Search blogs..." wire:model.live="search"
                            class="w-full  border border-green-700 rounded-lg px-4 py-3 pl-10 text-gray-950 dark:text-white dark:placeholder-gray-100 placeholder-gray-900 focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-900 dark:text-gray-100"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="type"
                        class="w-full dark:bg-gray-950   border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="all">All Types</option>
                        <option value="0">Frontend</option>
                        <option value="1">Backend</option>
                        <option value="2">Databases</option>
                        <option value="3">AI Frameworks</option>
                    </select>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="status"
                        class="w-full dark:bg-gray-950   border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="all">All Status</option>
                        <option value="0">IN-Active</option>
                        <option value="1">Active</option>
                    </select>
                </div>
                <div class="lg:col-span-1">
                    <select wire:model.live="latest"
                        class="w-full dark:bg-gray-950   border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">

                        <option value="all">All</option>
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @foreach ($skills as $skill)
                <div
                    class="blog-card group relative rounded-2xl overflow-hidden bg-green-50 dark:bg-green-600 border border-green-700 hover:border-neon-green transition-all duration-500 hover:shadow-2xl hover:shadow-neon-green/20">

                    <div class="absolute top-4 left-4 z-10">
                        <div class="grid grid-cols-3 gap-3">
                            <span
                                class="bg-green-500 text-black px-2 py-1 rounded-full text-xs font-semibold animate-pulse">
                                {{ $skill->is_active ? '⭐ Active' : 'In-Active' }}
                            </span>
                            <a href="{{ route('skills.edit', ['slug' => $skill->slug]) }}" wire:navigate>
                                <span
                                    class="bg-indigo-500 text-black px-2 py-1 rounded-full text-xs font-semibold animate-pulse">

                                    {{ '⭐ Edit' }}

                                </span>
                            </a>
                            <span
                                class="bg-pink-500 text-black px-2 py-1 rounded-full text-xs font-semibold animate-pulse cursor-pointer"
                                wire:click="deleteCat({{ $skill->id }})">
                                {{ 'Delete' }}
                            </span>
                        </div>
                    </div>

                    <!-- Blog Image -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('assets/skills') }}/{{ $skill->image }}" alt="Blog Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-500/60 via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- Blog Content -->
                    <div class="p-6">
                        <!-- Title -->
                        <h3
                            class="text-lg font-bold text-black mb-3 line-clamp-2 group-hover:text-neon-green transition-colors duration-300">
                            {{ $skill->name }}
                        </h3>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Pagination -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

                <!-- Page Info -->
                <div class="text-sm text-gray-800 dark:text-green-600">
                    Showing <span class="font-semibold text-neon-green">1</span> to <span
                        class="font-semibold text-neon-green">{{ $skills->count() }}</span> of <span
                        class="font-semibold text-neon-green">{{ $totalSkills }}</span> results
                </div>

                <!-- Pagination Controls -->
                <div class="flex items-center gap-2">

                    {{ $skills->links() }}
                </div>


            </div>
        </div>
    </div>
</div>
