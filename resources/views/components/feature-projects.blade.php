<section  class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono"
            data-aos="fade-up">Featured Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            @foreach($projects as $project)
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group"
                data-aos="fade-up" data-aos-delay="100">
                <div
                    class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <img class="object-cover animate-bounce-slow w-full" src="{{asset('assets/projects')}}/{{ $project->image }}" />
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">
                        <a href="{{ route('projectDetail',['slug'=>$project->slug]) }}" wire:navigate>
                        {{ $project->name }}
                        </a>
                    </h3>
                    {{-- <p class="text-gray-300 mb-4">{{ $project-> }}</p> --}}
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->tags as $tag)
                        <span
                            class="px-3 py-1 bg-neon-green text-black text-sm rounded-full animate-pulse">{{$tag->name}}</span>
                            @endforeach
                       
                    </div>
                    <div class="flex space-x-4">
                        @if($project->link)
                        <a href="{{$project->link}}" target="_blank" class="text-neon-green hover:underline magnetic-button">Live Demo</a>
                        @endif
                        @if($project->loom_link)
                        <a href="{{ $project->loom_link }}" class="text-neon-green hover:underline magnetic-button">Loom</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>