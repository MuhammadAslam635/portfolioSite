<!-- Skills Section -->
<section id="skills" class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
            data-aos="fade-up">Tech Stack</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Backend -->

            <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">Backend</h3>
                <div class="space-y-4">
                    @foreach($backends as $backend)
                    <div class="flex justify-between items-center skill-item">
                        <span>{{ $backend->name }}</span>
                        <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                            <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="{{ $backend->score }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- AI Frameworks -->
            <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">Frontend & APIs</h3>
                <div class="space-y-4">
                    @foreach($frontends as $frontend)
                    <div class="flex justify-between items-center skill-item">
                        <span>{{ $frontend->name }}</span>
                        <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                            <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="{{ $frontend->score }}"></div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <!-- Database & Cloud -->
            <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">Database & Cloud</h3>
                <div class="space-y-4">
                    @foreach($databases as $database)
                    <div class="flex justify-between items-center skill-item">
                        <span>{{ $database->name }}</span>
                        <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                            <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="{{ $database->score }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Frontend & APIs -->
            <div class="glass-effect p-8 rounded-xl hover:border-neon-green transition-all duration-300"
                data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-2xl font-bold mb-6 text-neon-green font-mono">AI Frameworks</h3>
                <div class="space-y-4">
                    @foreach($ais as $ai)
                    <div class="flex justify-between items-center skill-item">
                        <span>{{ $ai->name }}</span>
                        <div class="w-24 bg-gray-700 rounded-full h-2 skill-bar">
                            <div class="bg-neon-green h-2 rounded-full skill-progress" data-width="{{ $ai->score }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
