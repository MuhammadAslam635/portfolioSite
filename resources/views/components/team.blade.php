<!-- Team Section -->
<section id="team" class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
            data-aos="fade-up">Our Team</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            @foreach($teams as $team)
            <div class="team-card glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300 group"
                data-aos="fade-up" data-aos-delay="100">
                <div
                    class="w-24 h-24 bg-gradient-to-br from-neon-green to-dark-green rounded-full mx-auto mb-4 flex items-center justify-center text-black font-bold text-2xl animate-pulse">
                    {{ $team->name[0] }}
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ $team->name }}</h3>
                <p class="text-neon-green text-sm mb-3">{{ $team->designation }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>
