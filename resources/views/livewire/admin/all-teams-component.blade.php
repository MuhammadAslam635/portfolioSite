<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">All Team Members</h1>
                    <p class="text-gray-400">Manage your talented team members and their information</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-900 px-4 py-2 rounded-lg border border-green-700">
                        <span class="text-sm text-gray-300">Total: <span
                                class="text-neon-green font-semibold">{{ $totalTeams }}</span>
                            members</span>
                    </div>
                    <flux:button variant="primary" :href="route('team.create')" wire:navigate>Add New Member
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-neon-green mb-1">{{ $totalTeams }}</div>
                    <div class="text-sm text-gray-400">Total Members</div>
                </div>
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-500 mb-1">{{ $activeTeams }}</div>
                    <div class="text-sm text-gray-400">Active</div>
                </div>
                <div class="bg-green-50 dark:bg-black rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-red-500 mb-1">{{ $inactiveTeams }}</div>
                    <div class="text-sm text-gray-400">Inactive</div>
                </div>
            </div>
        </div>

        <!-- Search and Filters Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <div class="relative">
                        <input type="text" placeholder="Search team members..." wire:model.live="search"
                            class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 pl-10 text-gray-950 dark:text-white dark:placeholder-gray-100 placeholder-gray-900 focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <select wire:model.live="status"
                        class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="all">All Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div>
                    <select wire:model.live="latest"
                        class="w-full bg-green-50 dark:bg-gray-900 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-neon-green focus:ring-1 focus:ring-neon-green transition-all duration-300">
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                        <option value="name">Name A-Z</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Team Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @foreach ($teams as $team)
                <div
                    class="team-card group relative rounded-2xl overflow-hidden bg-green-50 dark:bg-gray-900 border border-green-700 hover:border-neon-green transition-all duration-500 hover:shadow-2xl hover:shadow-neon-green/20">

                    {{-- <div class="absolute top-4 left-4 z-10">
                        <div class="flex flex-row gap-1">
                            <flux:badge color="{{ $team->is_active ? 'lime' : 'red' }}" class="text-xs font-semibold animate-pulse">
                                {{ $team->is_active ? '✓ Active' : '✗ Inactive' }}
                            </flux:badge>
                            <flux:badge color="pink" class="cursor-pointer text-xs font-semibold animate-pulse"
                                wire:click="assignProject({{ $team->id }})">Assign Project</flux:badge>
                        </div>
                    </div> --}}

                    <!-- Team Member Image -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $team->image_url }}" alt="{{ $team->name }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>

                        <!-- Action Buttons -->
                        <div class="absolute bottom-4 left-4">
                            <div class="flex flex-row gap-1">
                                <flux:button variant="primary" color="indigo" size="sm" icon="pencil"
                                    class="backdrop-blur-sm cursor-pointer" :href="route('team.edit',['slug'=>$team->slug])" wire:navigate>
                                    Edit
                                </flux:button>
                                {{-- <flux:button variant="primary" color="fuchsia" size="sm" icon="eye"
                                    class="backdrop-blur-sm cursor-pointer">
                                    View
                                </flux:button>
                                <flux:button variant="{{ $team->is_active ? 'danger' : 'primary' }}" color="{{ $team->is_active ? 'red' : 'green' }}" size="sm" 
                                    icon="{{ $team->is_active ? 'x-mark' : 'check' }}"
                                    class="backdrop-blur-sm cursor-pointer"
                                    wire:click="toggleStatus({{ $team->id }})">
                                    {{ $team->is_active ? 'Deactivate' : 'Activate' }}
                                </flux:button> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Content -->
                    <div class="p-6">
                        <!-- Designation & Join Date -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-blue-500/20 text-blue-400 px-2 py-1 rounded-full text-xs font-medium">
                                {{ $team->designation ?? 'Team Member' }}
                            </span>
                            {{-- <span class="text-xs text-gray-400">
                                {{ \Carbon\Carbon::parse($team->created_at)->isoFormat('MMM YYYY') }}
                            </span> --}}
                        </div>

                        <!-- Name -->
                        <h3 class="text-lg font-bold text-gray-950 dark:text-white mb-3 line-clamp-2 group-hover:text-neon-green transition-colors duration-300">
                            {{ $team->name }}
                        </h3>

                        <!-- Contact Info -->
                        <div class="space-y-2 mb-4">
                            @if($team->email)
                                <div class="flex items-center gap-2 text-sm text-gray-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                    </svg>
                                    <span class="truncate">{{ $team->email }}</span>
                                </div>
                            @endif
                            @if($team->phone)
                                <div class="flex items-center gap-2 text-sm text-gray-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>{{ $team->phone }}</span>
                                </div>
                            @endif
                        </div>

                        <!-- Social Media Links -->
                        <div class="flex items-center justify-between text-xs text-gray-400">
                            <div class="flex items-center gap-3">
                                @if($team->linkedin)
                                    <a href="{{ $team->linkedin }}" target="_blank" class="hover:text-blue-500 transition-colors">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                @endif
                                @if($team->github)
                                    <a href="{{ $team->github }}" target="_blank" class="hover:text-gray-900 dark:hover:text-white transition-colors">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                @endif
                                @if($team->twitter)
                                    <a href="{{ $team->twitter }}" target="_blank" class="hover:text-blue-400 transition-colors">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                            <div class="flex items-center gap-1">
                                <div class="w-2 h-2 {{ $team->is_active ? 'bg-green-500' : 'bg-red-500' }} rounded-full animate-pulse"></div>
                                <span>{{ $team->is_active ? 'Active' : 'Inactive' }}</span>
                            </div>
                        </div>

                        <!-- Projects Count -->
                        @if(method_exists($team, 'projects') && $team->projects->count() > 0)
                            <div class="mt-3 pt-3 border-t border-gray-200 dark:border-gray-700">
                                <div class="text-xs text-gray-500">
                                    Working on {{ $team->projects->count() }} {{ Str::plural('project', $team->projects->count()) }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <!-- Page Info -->
                <div class="text-sm text-gray-400">
                    Showing <span class="font-semibold text-neon-green">{{ $teams->firstItem() ?? 0 }}</span> to <span
                        class="font-semibold text-neon-green">{{ $teams->lastItem() ?? 0 }}</span> of <span
                        class="font-semibold text-neon-green">{{ $teams->total() }}</span> results
                </div>

                <!-- Pagination Controls -->
                <div class="flex items-center gap-2">
                    {{ $teams->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@push('css')
<style>
    .team-card {
        transition: all 0.3s ease;
    }
    
    .team-card:hover {
        transform: translateY(-4px);
    }
    
    .gradient-text-animated {
        background: linear-gradient(45deg, #22c55e, #3b82f6, #8b5cf6);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: gradient 3s ease infinite;
    }
    
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .hover-lift:hover {
        transform: translateY(-2px);
    }
    
    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endpush