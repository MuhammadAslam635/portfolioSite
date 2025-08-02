<div>
<!-- Team Hero Section -->
<section class="min-h-screen flex items-center justify-center relative bg-deep-black pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl font-bold mb-6 font-mono">
                <span class="gradient-text-animated">OUR</span>
                <br>
                <span class="text-white">TEAM</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                Meet the talented individuals who bring ideas to life through code, design, and innovation
            </p>
        </div>
    </div>
</section>

<!-- Team Lead Section -->
<section class="py-20 bg-charcoal">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 gradient-text-animated font-mono">Team Leadership</h2>
        </div>
        @if($leader)
        <div class="glass-effect p-12 rounded-2xl border-neon-green border-2" data-aos="zoom-in">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-shrink-0">
                    <div class="w-48 h-48 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-black font-bold text-6xl animate-glow">
                        {{ substr($leader->name, 0, 1) }}
                    </div>
                </div>
                <div class="flex-1 text-center lg:text-left">
                    <h3 class="text-3xl font-bold text-white mb-4">{{ $leader->name }}</h3>
                    <p class="text-xl text-neon-green mb-6">{{ $leader->designation }}</p>
                    <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                        {!! \Illuminate\Support\Str::markdown(Str::limit($leader->content,200,' ....')) !!}
                    </p>
    
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                        @foreach($leader->skills as $skill)
                        <span class="px-4 py-2 bg-neon-green text-black rounded-full text-sm font-semibold">{{ $skill->name }}</span>
                        @endforeach
                                        <flux:button variant="primary" color="green" :href="route('team.detail',['slug'=>$leader->slug])" wire:navigate>Read More</flux:button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Core Team Section -->
<section class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Core Team Members
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($teams as $team)
            <div class="team-card glass-effect p-8 rounded-xl text-center hover:border-neon-green transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-32 h-32 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto mb-6 flex items-center justify-center text-black font-bold text-3xl animate-pulse">
                    {{$team->name[0]}}
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">{{ $team->name }}</h3>
           <p class="text-neon-green text-lg mb-4">{!! $team->designation !!}</p>
                <p class="text-gray-400 mb-6">
                    {!! \Illuminate\Support\Str::markdown(Str::limit($team->content,150,'...')) !!}
                </p>
                <div class="flex flex-wrap gap-2 justify-center mb-6">
                    @foreach($team->skills as $skill)
                    <span class="px-3 py-1 bg-neon-green bg-opacity-20 text-black text-xs rounded-full">{{ $skill->name }}</span>
                    @endforeach
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('team.detail',['slug'=>$team->slug]) }}" class="text-neon-green hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="{{ route('team.projects',['slug'=>$team->slug]) }}" class="text-neon-green hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Culture Section -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Our Culture & Values
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Culture 1 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-5xl mb-6 animate-bounce-slow">🚀</div>
                    <h3 class="text-xl font-bold text-neon-green mb-4">Innovation First</h3>
                    <p class="text-gray-300">
                        We embrace new technologies and creative solutions to push boundaries and deliver exceptional results.
                    </p>
                </div>
            </div>

            <!-- Culture 2 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-5xl mb-6 animate-wiggle">🤝</div>
                    <h3 class="text-xl font-bold text-neon-green mb-4">Collaboration</h3>
                    <p class="text-gray-300">
                        We believe in the power of teamwork and open communication to achieve our shared goals.
                    </p>
                </div>
            </div>

            <!-- Culture 3 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-5xl mb-6 animate-pulse">📚</div>
                    <h3 class="text-xl font-bold text-neon-green mb-4">Continuous Learning</h3>
                    <p class="text-gray-300">
                        We invest in our growth through learning, skill development, and knowledge sharing.
                    </p>
                </div>
            </div>

            <!-- Culture 4 -->
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300">
                    <div class="text-5xl mb-6 animate-spin-slow">⚡</div>
                    <h3 class="text-xl font-bold text-neon-green mb-4">Excellence</h3>
                    <p class="text-gray-300">
                        We strive for excellence in everything we do, from code quality to client satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
