<div>
<!-- Projects Hero Section -->
<section class="min-h-screen flex items-center justify-center relative bg-deep-black pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl font-bold mb-6 font-mono">
                <span class="gradient-text-animated">{{ config('app.name') }}</span>
                <br>
                <span class="text-white">PROJECTS</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                A showcase of innovative solutions, scalable architectures, and cutting-edge technologies
            </p>
        </div>
    </div>
</section>

<!-- Featured Project -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Featured Project
        </h2>
        @foreach($featuredProjects as $project)
        <div class="glass-effect rounded-2xl overflow-hidden hover:border-neon-green transition-all duration-300" data-aos="zoom-in">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto bg-gradient-to-br from-neon-green via-dark-green to-matrix-green opacity-80 flex items-center justify-center relative overflow-hidden">
                    <img class="text-8xl animate-bounce-slow object-fill" src="{{asset('assets/projects')}}/{{ $project->image }}" />
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transform -skew-x-12 transition-all duration-700"></div>
                </div>
                <div class="p-12">
                    <div class="flex items-center mb-4">
                        <span class="px-4 py-2 bg-neon-green text-black text-sm rounded-full font-semibold">FEATURED</span>
                        <span class="ml-4 text-gray-400 text-sm">{{ $project->category->name }}</span>
                    </div>
                    <h3 class="text-3xl font-bold mb-6 text-white">{{ $project->name }}</h3>
                    {{-- <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                        A comprehensive microservices platform built with NestJS, handling 10M+ requests daily. 
                        Features include real-time analytics, automated scaling, and advanced monitoring capabilities.
                    </p> --}}
                    <div class="flex flex-wrap gap-3 mb-8">
                        @foreach($project->tags as $tag)
                        <span class="px-4 py-2 bg-neon-green bg-opacity-20 text-black text-sm rounded-full">{{ $tag->tag->name }}</span>
                        @endforeach
                    </div>
                    <div class="flex space-x-4">
                        @if($project->link)
                        <a href="{{ $project->link }}" class="magnetic-button bg-neon-green text-black px-6 py-3 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300" target="_blank">
                            View Live Demo
                        </a>
                        @endif
                        @if($project->loom_link)
                        <a href="{{ $project->loom_link }}" target="_blank" class="magnetic-button border-2 border-neon-green text-neon-green px-6 py-3 rounded-lg font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300">
                            Watch Loom
                        </a>
                        @endif
                        <flux:button variant="primary" color="green"  :href="route('projectDetail',['slug'=>$project->slug])" wire:navigate>Read More</flux:button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Project Categories -->
<section class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Project Categories
        </h2>
        
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            
            <button wire:model="category" wire:click="$set('category','all')" class="category-btn active px-6 py-3 bg-neon-green text-black rounded-full font-semibold hover:bg-dark-green transition-all duration-300" data-category="all">
                All Projects
            </button>
            @foreach($cats as $cat)
            <button wire:model="category" wire:click="$set('category',{{ $cat->id }})" class="category-btn px-6 py-3 glass-effect text-neo-green rounded-full font-semibold hover:bg-neon-green hover:text-neon-green transition-all duration-300" data-category="backend">
                {{ $cat->name }}
            </button>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">
            <!-- Project 1 -->
            @foreach($projects as $project)
            <div class="project-card glass-effect rounded-xl overflow-hidden hover:border-neon-green transition-all duration-300 group" data-category="backend" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gradient-to-br from-neon-green to-dark-green opacity-80 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                        <img class="text-4xl animate-bounce-slow object-center" src="{{ asset('assets/projects') }}/{{ $project->image }}" />
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-black bg-opacity-50 text-white text-xs rounded-full">{{ $project->category->name }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-neon-green">{{ $project->name }}</h3>
                    <p class="text-gray-300 mb-4">Scalable API gateway built with NestJS handling 10M+ requests daily with JWT authentication and rate limiting.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->tags as $tag)
                        <span class="px-3 py-1 bg-neon-green text-black text-sm rounded-full">{{ $tag->tag->name }}</span>
                        @endforeach
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="text-neon-green hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                            @endif
                            @if($project->loom_link)
                            <a href="{{$project->loom_link}}" target="_blank" class="text-neon-green hover:text-white transition-colors">
                                <flux:icon name="square-play" class="w-5 h-5" />
                            </a>
                            @endif
                        </div>
                        <span class="text-gray-400 text-sm">{{ \Carbon\Carbon::parse($project->created_at)->format('Y') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            {{ $projects->links() }}
        </div>
    </div>
</section>

<!-- Project Stats -->
<section class="py-20 bg-deep-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Project Statistics
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-4xl font-bold text-neon-green mb-2 counter" data-target="50">0</div>
                <div class="text-gray-400">Projects Completed</div>
            </div>
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-4xl font-bold text-neon-green mb-2 counter" data-target="25">0</div>
                <div class="text-gray-400">Happy Clients</div>
            </div>
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-4xl font-bold text-neon-green mb-2">10M+</div>
                <div class="text-gray-400">API Requests Handled</div>
            </div>
            <div class="glass-effect p-8 rounded-xl" data-aos="zoom-in" data-aos-delay="400">
                <div class="text-4xl font-bold text-neon-green mb-2">99.9%</div>
                <div class="text-gray-400">Uptime Achieved</div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Used -->
<section class="py-20 bg-charcoal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
            Technologies & Tools
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Technology Icons -->
            @foreach($skills as $skill)
            <div class="glass-effect p-6 rounded-xl text-center hover:border-neon-green transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <img class="text-4xl mb-3 animate-bounce-slow object-fit" src="{{ asset('assets/skills') }}/{{ $skill->image }}" />
                <p class="text-sm text-gray-300">{{ $skill->name }}</p>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
</div>
@push('js')
<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Initialize GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Project card hover animations
    gsap.utils.toArray('.project-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: -10,
                rotateX: 5,
                duration: 0.4,
                ease: "power2.out"
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                rotateX: 0,
                duration: 0.4,
                ease: "power2.out"
            });
        });
    });

    // Category filtering
    const categoryBtns = document.querySelectorAll('.category-btn');
    const projectCards = document.querySelectorAll('.project-card');

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');
            
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active', 'bg-neon-green', 'text-neon-green'));
            categoryBtns.forEach(b => b.classList.add('glass-effect', 'text-neon-green'));
            btn.classList.add('active', 'bg-neon-green', 'text-neon-green');
            btn.classList.remove('glass-effect', 'text-neon-green');
            
            // Filter project cards
            projectCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    gsap.to(card, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.5,
                        ease: "power2.out"
                    });
                    card.style.display = 'block';
                } else {
                    gsap.to(card, {
                        opacity: 0,
                        scale: 0.8,
                        duration: 0.3,
                        ease: "power2.in",
                        onComplete: () => {
                            card.style.display = 'none';
                        }
                    });
                }
            });
        });
    });

    // Counter animations
    gsap.utils.toArray('.counter').forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        
        ScrollTrigger.create({
            trigger: counter,
            start: "top 80%",
            onEnter: () => {
                gsap.to(counter, {
                    innerHTML: target,
                    duration: 2,
                    ease: "power2.out",
                    snap: { innerHTML: 1 }
                });
            }
        });
    });

    // Magnetic button effects
    gsap.utils.toArray('.magnetic-button').forEach(button => {
        button.addEventListener('mouseenter', () => {
            gsap.to(button, {
                scale: 1.05,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        button.addEventListener('mouseleave', () => {
            gsap.to(button, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });
</script>
@endpush
