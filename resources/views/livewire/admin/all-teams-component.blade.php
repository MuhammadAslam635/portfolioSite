<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">All Team Members</h1>
                    <p class="text-gray-600 dark:text-gray-400">Manage your talented team members and their information</p>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <div class="bg-gray-900 dark:bg-green-600 px-4 py-2 rounded-lg border border-green-700">
                        <span class="text-sm text-gray-300">
                            Total: <span class="text-green-500 dark:text-green-400 font-semibold">{{ $totalTeams }}</span>
                            members
                        </span>
                    </div>
                    <flux:button variant="primary" :href="route('team.create')" wire:navigate>
                        Add New Member
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-900 rounded-xl p-4 text-center border border-green-700/20">
                    <div class="text-2xl font-bold text-green-500 mb-1">{{ $totalTeams }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Total Members</div>
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-xl p-4 text-center border border-green-700/20">
                    <div class="text-2xl font-bold text-green-500 mb-1">{{ $activeTeams }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Active</div>
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-xl p-4 text-center border border-green-700/20">
                    <div class="text-2xl font-bold text-red-500 mb-1">{{ $inactiveTeams }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Inactive</div>
                </div>
            </div>
        </div>

        <!-- Search and Filters Section -->
        <div class="bg-green-50 dark:bg-black rounded-2xl p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Search Input -->
                <div class="md:col-span-2">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Search team members..."
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

                <!-- Status Filter -->
                <div>
                    <select
                        wire:model.live="status"
                        class="w-full bg-white dark:bg-gray-950 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all duration-300 outline-none"
                    >
                        <option value="all">All Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <!-- Sort Filter -->
                <div>
                    <select
                        wire:model.live="latest"
                        class="w-full bg-white dark:bg-gray-950 border border-green-700 rounded-lg px-4 py-3 text-gray-950 dark:text-white focus:border-green-500 focus:ring-1 focus:ring-green-500 transition-all duration-300 outline-none"
                    >
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                        <option value="name">Name A-Z</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Team Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @forelse ($teams as $team)
                <div class="team-card group relative rounded-2xl overflow-hidden bg-white dark:bg-gray-900 border border-green-700 hover:border-green-500 transition-all duration-500 hover:shadow-2xl hover:shadow-green-500/20">

                    <!-- Status and Action Badges -->
                    <div class="absolute top-4 left-4 z-10">
                        <div class="flex flex-col gap-2">
                            <flux:badge
                                color="{{ $team->is_active ? 'lime' : 'red' }}"
                                class="text-xs font-semibold shadow-md"
                            >
                                {{ $team->is_active ? '✓ Active' : '✗ Inactive' }}
                            </flux:badge>
                            <flux:badge
                                color="pink"
                                class="cursor-pointer text-xs font-semibold shadow-md hover:opacity-80 transition-opacity"
                                wire:click="openModal({{ $team->id }})"
                            >
                                Add Project/Skill
                            </flux:badge>
                        </div>
                    </div>

                    <!-- Team Member Image -->
                    <div class="relative h-48 overflow-hidden">
                        @if($team->image_url)
                            <img
                                src="{{ $team->image_url }}"
                                alt="{{ $team->name }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                loading="lazy"
                            >
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                                <span class="text-white text-4xl font-bold">{{ substr($team->name, 0, 1) }}</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                        <!-- Action Buttons -->
                        <div class="absolute bottom-4 left-4">
                            <flux:button
                                variant="primary"
                                color="indigo"
                                size="sm"
                                icon="pencil"
                                class="backdrop-blur-sm shadow-lg hover:shadow-xl transition-shadow"
                                :href="route('team.edit', ['slug' => $team->slug])"
                                wire:navigate
                            >
                                Edit
                            </flux:button>
                        </div>
                    </div>

                    <!-- Team Member Content -->
                    <div class="p-6">
                        <!-- Designation -->
                        <div class="flex items-center justify-between mb-3">
                            <flux:badge color="indigo">
                                {{ $team->designation ?? 'Team Member' }}
                            </flux:badge>
                        </div>

                        <!-- Name -->
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3 line-clamp-2 group-hover:text-green-500 transition-colors duration-300">
                            {{ $team->name }}
                        </h3>

                        <!-- Projects Count -->
                        @if (method_exists($team, 'projects') && $team->projects && $team->projects->count() > 0)
                            <div class="mt-3 pt-3 border-t border-gray-200 dark:border-gray-700">
                                <div class="text-xs text-gray-600 dark:text-gray-400">
                                    Working on {{ $team->projects->count() }}
                                    {{ Str::plural('project', $team->projects->count()) }}
                                </div>
                            </div>
                        @endif

                        <!-- Status Indicator -->
                        <div class="flex items-center justify-end mt-3">
                            <div class="flex items-center gap-1 text-xs text-gray-600 dark:text-gray-400">
                                <div class="w-2 h-2 {{ $team->is_active ? 'bg-green-500' : 'bg-red-500' }} rounded-full"></div>
                                <span>{{ $team->is_active ? 'Active' : 'Inactive' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-span-full flex flex-col items-center justify-center py-12">
                    <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">No team members found</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-center mb-4">
                        @if(request()->has('search') || request()->has('status'))
                            Try adjusting your filters or search terms.
                        @else
                            Get started by adding your first team member.
                        @endif
                    </p>
                    <flux:button variant="primary" :href="route('team.create')" wire:navigate>
                        Add First Member
                    </flux:button>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($teams->hasPages())
            <div class="bg-green-50 dark:bg-black rounded-2xl p-6">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <!-- Page Info -->
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        Showing
                        <span class="font-semibold text-green-500">{{ $teams->firstItem() ?? 0 }}</span>
                        to
                        <span class="font-semibold text-green-500">{{ $teams->lastItem() ?? 0 }}</span>
                        of
                        <span class="font-semibold text-green-500">{{ $teams->total() }}</span>
                        results
                    </div>

                    <!-- Pagination Controls -->
                    <div class="flex items-center gap-2">
                        {{ $teams->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Modal for Adding Skills/Projects -->
    <flux:modal wire:model.self="showConfirmModal" variant="flyout">
        <div class="space-y-8">
            <!-- Add Skill Section -->
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Skill</flux:heading>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Assign a skill to this team member</p>
                </div>

                <div class="bg-green-50 dark:bg-gray-800 rounded-md p-4">
                    <form wire:submit.prevent="addSkill" class="space-y-4">
                        <flux:select wire:model="teamSkill" placeholder="Choose Skill..." label="Select Skill">
                            @foreach ($skills as $skill)
                                <flux:select.option value="{{ $skill->id }}">{{ $skill->name }}</flux:select.option>
                            @endforeach
                        </flux:select>

                        <flux:input
                            label="Skill Score"
                            type="number"
                            wire:model="teamSkillScore"
                            placeholder="Enter score (1-100)"
                            min="1"
                            max="100"
                        />

                        <div class="flex justify-end">
                            <flux:button type="submit" variant="primary" color="green">
                                Save Skill
                            </flux:button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-200 dark:border-gray-700"></div>

            <!-- Add Project Section -->
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Project</flux:heading>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Assign a project to this team member</p>
                </div>

                <div class="bg-green-50 dark:bg-gray-800 rounded-md p-4">
                    <form wire:submit.prevent="addProject" class="space-y-4">
                        <flux:select wire:model="projectId" placeholder="Choose Project..." label="Select Project">
                            @foreach ($projects as $project)
                                <flux:select.option value="{{ $project->id }}">{{ $project->name }}</flux:select.option>
                            @endforeach
                        </flux:select>

                        <flux:select wire:model="role" placeholder="Choose Role..." label="Select Role">
                            <flux:select.option value="0">Frontend Developer</flux:select.option>
                            <flux:select.option value="1">Backend Developer</flux:select.option>
                            <flux:select.option value="2">Full Stack Developer</flux:select.option>
                            <flux:select.option value="3">Project Manager</flux:select.option>
                            <flux:select.option value="4">Team Leader</flux:select.option>
                        </flux:select>

                        <div class="flex justify-end">
                            <flux:button type="submit" variant="primary" color="green">
                                Save Project
                            </flux:button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </flux:modal>
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
        background-clip: text;
        animation: gradient 3s ease infinite;
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

    .hover-lift:hover {
        transform: translateY(-2px);
    }

    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out;
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

    /* Line clamp utility */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
