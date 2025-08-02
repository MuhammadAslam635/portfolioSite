<div>
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative bg-deep-black pt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
                <!-- Profile Image & Basic Info -->
                <div class="text-center lg:text-left">
                    <div
                        class="w-64 h-64 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto lg:mx-0 mb-8 flex items-center justify-center text-black font-bold text-8xl animate-glow">
                        {{ $team->name[0] }}
                    </div>
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start mb-8">
                        <a href="#"
                            class="p-3 glass-effect rounded-full hover:border-neon-green transition-all duration-300">
                            <svg class="w-6 h-6 text-neon-green" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="p-3 glass-effect rounded-full hover:border-neon-green transition-all duration-300">
                            <svg class="w-6 h-6 text-neon-green" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="p-3 glass-effect rounded-full hover:border-neon-green transition-all duration-300">
                            <svg class="w-6 h-6 text-neon-green" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Profile Details -->
                <div>
                    <h1 class="text-5xl md:text-7xl font-bold mb-4 font-mono gradient-text-animated">
                        {{ $team->name }}
                    </h1>
                    <p class="text-2xl text-neon-green mb-6">{{ $team->designation }}</p>
                    <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                        {!! \Illuminate\Support\Str::markdown(Str::limit($team->content, 324, '...')) !!}
                    </p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="glass-effect p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold text-neon-green">7+</div>
                            <div class="text-sm text-gray-400">Years Experience</div>
                        </div>
                        <div class="glass-effect p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold text-neon-green">{{ $team->projects->count() }}+</div>
                            <div class="text-sm text-gray-400">Projects Completed</div>
                        </div>
                    </div>

                    {{-- <button
                        class="bg-gradient-to-r from-neon-green to-dark-green text-black px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:shadow-neon-green/50 transition-all duration-300">
                        Download Resume
                    </button> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Skills Section -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono">
                Technical Skills
            </h2>

            <!-- Skill Categories -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Frontend Skills -->
                @foreach ($team->skills as $skill)
                    <div class="glass-effect p-8 rounded-xl">
                        <h3 class="text-2xl font-bold text-neon-green mb-6 flex items-center">
                            {{ $skill->name }}
                        </h3>
                        <div class="space-y-4">
                            <div class="skill-item">
                                <div class="w-full bg-gray-700 rounded-full h-2 skill-bar">
                                    <div class="bg-neon-green h-2 rounded-full skill-progress"
                                        data-width="{{ $skill->score }}"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>
    <!-- Skills Section -->
    <section class="py-20 bg-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono">
                Projects
            </h2>

            <!-- Skill Categories -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Frontend Skills -->
                @foreach ($team->projects as $project)
                    <div class="glass-effect p-8 rounded-xl">
                        <h3 class="text-2xl font-bold text-neon-green mb-6 flex items-center">
                            {{ $skill->name }}
                        </h3>
                        <div class="space-y-4">
                            <div class="skill-item">
                                <div class="flex justify-between mb-2">
                                    {{-- <span class="text-sm text-gray-400">{{ $skill->score }} out-of 100</span> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Contact & Collaboration Section -->
    <section class="py-20 bg-deep-black">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 gradient-text-animated font-mono">
                Let's Collaborate
            </h2>
            <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                Ready to bring your next project to life? I'm always excited to work on innovative solutions
                and challenging problems. Let's discuss how we can create something amazing together.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Email -->
                <div class="glass-effect p-6 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-3xl mb-4">📧</div>
                    <h4 class="text-lg font-bold text-white mb-2">Email</h4>
                    <p class="text-neon-green">{{ $team->email }}</p>
                </div>

                <!-- Phone -->
                <div class="glass-effect p-6 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-3xl mb-4">📱</div>
                    <h4 class="text-lg font-bold text-white mb-2">Phone</h4>
                    <p class="text-neon-green">{{ $team->phone }}</p>
                </div>

                <!-- Location -->
                <div class="glass-effect p-6 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-3xl mb-4">📍</div>
                    <h4 class="text-lg font-bold text-white mb-2">Location</h4>
                    <p class="text-neon-green">{{ $team->Address }}</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/{{ $team->phone }}?text=Hello%20there!" target="_blank"
                    class="bg-gradient-to-r from-neon-green to-dark-green text-black px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:shadow-neon-green/50 transition-all duration-300">
                    Start a Project
                </a>
            </div>
        </div>
    </section>
</div>
