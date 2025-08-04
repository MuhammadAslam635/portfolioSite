@push('css')
    <style>
        .gradient-text-animated {
            background: linear-gradient(-45deg, #00ff88, #00cc6a, #00aa55, #008844);
            background-size: 400% 400%;
            animation: gradient 4s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .blog-card {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 255, 136, 0.5);
            box-shadow: 0 20px 40px rgba(0, 255, 136, 0.1);
        }

        .team-card {
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.1) 0%, rgba(0, 170, 85, 0.1) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 255, 136, 0.2);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.02);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.8) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .tag-pill {
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.2) 0%, rgba(0, 170, 85, 0.2) 100%);
            border: 1px solid rgba(0, 255, 136, 0.3);
            transition: all 0.3s ease;
        }

        .tag-pill:hover {
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.3) 0%, rgba(0, 170, 85, 0.3) 100%);
            transform: translateY(-2px);
        }

        .stats-card {
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.1) 0%, rgba(0, 170, 85, 0.1) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 136, 0.2);
        }

        .animate-bounce-slow {
            animation: bounce 3s infinite;
        }

        .animate-glow {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(0, 255, 136, 0.5); }
            to { box-shadow: 0 0 30px rgba(0, 255, 136, 0.8); }
        }

        .masonry-grid {
            column-count: 1;
            column-gap: 1.5rem;
        }

        @media (min-width: 640px) { .masonry-grid { column-count: 2; } }
        @media (min-width: 1024px) { .masonry-grid { column-count: 3; } }
        @media (min-width: 1280px) { .masonry-grid { column-count: 4; } }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }
    </style>
@endpush

<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900">
    <!-- Project Header -->
    <section class="pt-32 pb-16 bg-gradient-to-br from-black via-gray-900 to-black relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2300ff88" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12" data-aos="fade-up">
                <!-- Category Badge -->
                <div class="flex items-center justify-center mb-6">
                    <span class="px-6 py-3 bg-gradient-to-r from-green-400/20 to-emerald-400/20 text-green-400 text-sm font-semibold rounded-full border border-green-400/30 backdrop-blur-sm">
                        {{ $project->category->name ?? 'Project' }}
                    </span>
                </div>

                <!-- Project Title -->
                <h1 class="text-5xl md:text-7xl font-bold mb-8 gradient-text-animated font-mono tracking-tight">
                    {{ $project->name }}
                </h1>

                <!-- Project Meta Info -->
                <div class="flex flex-wrap items-center justify-center gap-6 text-gray-400 mb-8 text-lg">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ $project->published_at ? \Carbon\Carbon::parse($project->published_at)->isoFormat('MMM Do YYYY') : 'Draft' }}</span>
                    </div>
                    <span class="text-green-400">•</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ $project->reading_time ?? 5 }} min read</span>
                    </div>
                    <span class="text-green-400">•</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <span>{{ $project->views ?? 0 }} views</span>
                    </div>
                </div>

                <!-- Project Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto mb-10">
                    <div class="stats-card rounded-xl p-4 text-center">
                        <div class="text-2xl font-bold text-green-400">{{ $project->likes ?? 0 }}</div>
                        <div class="text-sm text-gray-400">Likes</div>
                    </div>
                    <div class="stats-card rounded-xl p-4 text-center">
                        <div class="text-2xl font-bold text-blue-400">{{ $project->comments_count ?? 0 }}</div>
                        <div class="text-sm text-gray-400">Comments</div>
                    </div>
                    <div class="stats-card rounded-xl p-4 text-center">
                        <div class="text-2xl font-bold text-purple-400">{{ $project->projectGalleries->count() ?? 0 }}</div>
                        <div class="text-sm text-gray-400">Images</div>
                    </div>
                    <div class="stats-card rounded-xl p-4 text-center">
                        <div class="text-2xl font-bold text-orange-400">{{ $project->projectTeams->count() ?? 0 }}</div>
                        <div class="text-sm text-gray-400">Team</div>
                    </div>
                </div>

                <!-- Project Tags -->
                @if($project->tags && $project->tags->count() > 0)
                    <div class="flex flex-wrap items-center justify-center gap-3 mb-8">
                        @foreach($project->tags as $tag)
                            <span class="tag-pill px-4 py-2 text-green-400 text-sm font-semibold rounded-full backdrop-blur-sm">
                                #{{ $tag->tag->name }}
                            </span>
                        @endforeach
                    </div>
                @endif

                <!-- Project Links -->
                <div class="flex flex-wrap items-center justify-center gap-4">
                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" 
                           class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-500 text-black font-semibold rounded-full hover:from-green-400 hover:to-emerald-400 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            View Live Project
                        </a>
                    @endif
                    @if($project->loom_link)
                        <a href="{{ $project->loom_link }}" target="_blank" 
                           class="inline-flex items-center gap-2 px-6 py-3 glass-effect text-green-400 font-semibold rounded-full hover:bg-green-400/10 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M12 5.5v.01m4.5 2.5a9 9 0 11-9 0"></path>
                            </svg>
                            Watch Demo
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Main Project Image -->
    @if($project->image)
        <section class="py-16 bg-black">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="glass-effect p-8 rounded-2xl" data-aos="fade-up">
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="{{ asset('assets/projects/' . $project->image) }}" 
                             alt="{{ $project->name }}"
                             class="w-full h-auto object-cover animate-bounce-slow">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Team Section -->
    @if($project->projectTeams && $project->projectTeams->count() > 0)
        <section class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text-animated font-mono">
                        Project Team
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Meet the talented individuals who brought this project to life
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($project->projectTeams as $teamMember)
                        <div class="team-card rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="relative mb-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center text-black font-bold text-2xl mx-auto animate-glow">
                                    {{ strtoupper(substr($teamMember->team->name, 0, 2)) }}
                                </div>
                                <div class="absolute -bottom-2 -right-2 bg-green-400 text-black text-xs px-2 py-1 rounded-full font-semibold">
                                    {{ $teamMember->role }}
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">{{ $teamMember->team->name }}</h3>
                            <p class="text-green-400 font-semibold mb-3">{{ $teamMember->team->designation }}</p>
                            {{-- @if($teamMember->team->content)
                                <p class="text-gray-400 text-sm">{!! Str::limit($teamMember->team->content,250) !!}</p>
                            @endif --}}
                            
                            <!-- Social Links -->
                            <div class="flex justify-center space-x-3 mt-4">
                                @if($teamMember->team->github)
                                    <a href="{{ $teamMember->team->github }}" target="_blank" class="text-gray-400 hover:text-green-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                    </a>
                                @endif
                                @if($teamMember->team->linkedin)
                                    <a href="{{ $teamMember->team->linkedin }}" target="_blank" class="text-gray-400 hover:text-green-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                @endif
                                @if($teamMember->team->twitter)
                                    <a href="{{ $teamMember->team->twitter }}" target="_blank" class="text-gray-400 hover:text-green-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Gallery Section -->
    @if($project->projectGalleries && $project->projectGalleries->count() > 0)
        <section class="py-20 bg-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text-animated font-mono">
                        Project Gallery
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Explore the visual journey and key features of this project
                    </p>
                </div>

                <div class="masonry-grid">
                    @foreach($project->projectGalleries->sortBy('order') as $gallery)
                        <div class="masonry-item" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="glass-effect rounded-2xl overflow-hidden mb-6">
                                <!-- Image -->
                                <div class="gallery-item">
                                    <img src="{{ asset('assets/' . $gallery->image) }}" 
                                         alt="{{ $gallery->caption }}"
                                         class="w-full h-auto object-cover">
                                    <div class="gallery-overlay">
                                        <div class="absolute bottom-4 left-4 right-4">
                                            @if($gallery->is_featured)
                                                <span class="inline-block px-3 py-1 bg-yellow-400 text-black text-xs font-bold rounded-full mb-2">
                                                    ⭐ Featured
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Content -->
                                @if($gallery->caption || $gallery->rendered_content)
                                    <div class="p-6">
                                        @if($gallery->caption)
                                            <h3 class="text-2xl font-bold mb-4 text-green-400">{{ $gallery->caption }}</h3>
                                        @endif
                                        @if($gallery->rendered_content)
                                            <div class="prose prose-invert max-w-none text-gray-300">
                                                {!! $gallery->rendered_content !!}
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Technology Stack -->
    @if($project->tags && $project->tags->count() > 0)
        <section class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text-animated font-mono">
                        Technology Stack
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        The tools and technologies that powered this project
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($project->tags as $tag)
                        <div class="tag-pill rounded-xl p-6 text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="text-3xl mb-3">
                                @php
                                    $icons = [
                                        'php' => '🐘', 'laravel' => '🔥', 'javascript' => '⚡', 'vue' => '💚',
                                        'react' => '⚛️', 'node' => '🟢', 'python' => '🐍', 'django' => '🎯',
                                        'mysql' => '🐬', 'postgresql' => '🐘', 'mongodb' => '🍃', 'redis' => '📦',
                                        'docker' => '🐳', 'aws' => '☁️', 'git' => '📚', 'api' => '🔌',
                                        'api development' => '🔌', 'graphql' => '📊', 'html' => '🌐', 'css' => '🎨',
                                        'bootstrap' => '🧢', 'tailwind' => '🌊',
                                        'flutter' => '🦋', 'kotlin' => '📱',
                                        'swift' => '🍏', 'android' => '🤖', 'ios',
                                        'database' => '📊', 'cloud' => '☁️', 'devops' => '⚙️',
                                        'multi vendor' => '🛒', 'ecommerce' => '🛍️', 'web development' => '🌐',
                                    ];
                                    $tagLower = strtolower($tag->tag->name);
                                    echo $icons[$tagLower] ?? '🔧';
                                @endphp
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">{{ $tag->tag->name }}</h3>
                            @if($tag->description)
                                <p class="text-sm text-gray-400">{{ $tag->description }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Related Projects -->
    @if(isset($relatedProjects) && $relatedProjects->count() > 0)
        <section class="py-20 bg-black">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text-animated font-mono" data-aos="fade-up">
                    Related Projects
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $relatedProject)
                        <article class="blog-card rounded-2xl overflow-hidden cursor-pointer" 
                                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}"
                                 onclick="window.location.href='{{ route('projectDetail', $relatedProject->slug) }}'">
                            <!-- Project Image -->
                            <div class="h-48 bg-gradient-to-br from-green-600 to-emerald-600 relative overflow-hidden">
                                @if($relatedProject->image)
                                    <img src="{{ asset('assets/' . $relatedProject->image) }}" 
                                         alt="{{ $relatedProject->name }}"
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="flex items-center justify-center h-full">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                
                                <!-- Project Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-green-400 text-black text-xs font-bold rounded-full">
                                        {{ $relatedProject->category->name ?? 'Project' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Project Content -->
                            <div class="p-6">
                                <div class="flex items-center mb-3 text-sm">
                                    <span class="text-green-400">{{ $relatedProject->published_at ? \Carbon\Carbon::parse($relatedProject->published_at)->format('M d, Y') : 'Draft' }}</span>
                                    <span class="mx-2 text-gray-500">•</span>
                                    <span class="text-gray-400">{{ $relatedProject->reading_time ?? 5 }} min read</span>
                                </div>
                                
                                <h3 class="text-xl font-bold mb-3 text-white hover:text-green-400 transition-colors">
                                    {{ $relatedProject->name }}
                                </h3>
                                
                                @if($relatedProject->description)
                                    <p class="text-gray-300 mb-4 line-clamp-3">{{ $relatedProject->description }}</p>
                                @endif

                                <!-- Project Tags -->
                                @if($relatedProject->tags && $relatedProject->tags->count() > 0)
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach($relatedProject->tags->take(3) as $tag)
                                            <span class="px-2 py-1 bg-green-400/20 text-green-400 text-xs rounded-full">
                                                {{ $tag->name }}
                                            </span>
                                        @endforeach
                                        @if($relatedProject->tags->count() > 3)
                                            <span class="px-2 py-1 bg-gray-600 text-gray-300 text-xs rounded-full">
                                                +{{ $relatedProject->tags->count() - 3 }} more
                                            </span>
                                        @endif
                                    </div>
                                @endif

                                <!-- Project Stats -->
                                <div class="flex items-center justify-between text-sm text-gray-400">
                                    <div class="flex items-center gap-4">
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            {{ $relatedProject->views ?? 0 }}
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                            </svg>
                                            {{ $relatedProject->likes ?? 0 }}
                                        </span>
                                    </div>
                                    @if($relatedProject->is_featured)
                                        <span class="text-yellow-400 text-xs font-semibold">⭐ Featured</span>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- View All Projects Button -->
                <div class="text-center mt-12" data-aos="fade-up">
                    <a href="{{ route('projects') }}" 
                       class="inline-flex items-center gap-2 px-8 py-4 glass-effect text-green-400 font-semibold rounded-full hover:bg-green-400/10 transition-all duration-300 transform hover:scale-105">
                        <span>View All Projects</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    @endif

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-br from-green-900/20 via-black to-emerald-900/20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text-animated font-mono">
                    Interested in This Project?
                </h2>
                <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                    Get in touch to discuss similar projects, collaborations, or to learn more about our development process.
                </p>
                
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="https://wa.me/+923106473564" target="_blank"
                       class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-green-500 to-emerald-500 text-black font-semibold rounded-full hover:from-green-400 hover:to-emerald-400 transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Get In Touch
                    </a>
                    
                    <a href="{{ route('projects') }}" wire:navigate
                       class="inline-flex items-center gap-2 px-8 py-4 glass-effect text-green-400 font-semibold rounded-full hover:bg-green-400/10 transition-all duration-300 transform hover:scale-105">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        View More Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Navigation -->
    {{-- @if(isset($prevProject) || isset($nextProject))
        <section class="py-16 bg-black border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                    <!-- Previous Project -->
                    @if(isset($prevProject))
                        <a href="{{ route('project.show', $prevProject->slug) }}" 
                           class="group flex items-center gap-4 glass-effect rounded-xl p-6 hover:bg-green-400/10 transition-all duration-300 flex-1 max-w-md">
                            <div class="flex-shrink-0">
                                <svg class="w-8 h-8 text-green-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </div>
                            <div class="text-left">
                                <div class="text-sm text-gray-400 mb-1">Previous Project</div>
                                <div class="text-white font-semibold group-hover:text-green-400 transition-colors">{{ $prevProject->name }}</div>
                            </div>
                        </a>
                    @else
                        <div class="flex-1 max-w-md"></div>
                    @endif

                    <!-- Back to Projects -->
                    <a href="{{ route('projects') }}" 
                       class="inline-flex items-center gap-2 px-6 py-3 glass-effect text-green-400 font-semibold rounded-full hover:bg-green-400/10 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        All Projects
                    </a>

                    <!-- Next Project -->
                    @if(isset($nextProject))
                        <a href="{{ route('project.show', $nextProject->slug) }}" 
                           class="group flex items-center gap-4 glass-effect rounded-xl p-6 hover:bg-green-400/10 transition-all duration-300 flex-1 max-w-md">
                            <div class="text-right">
                                <div class="text-sm text-gray-400 mb-1">Next Project</div>
                                <div class="text-white font-semibold group-hover:text-green-400 transition-colors">{{ $nextProject->name }}</div>
                            </div>
                            <div class="flex-shrink-0">
                                <svg class="w-8 h-8 text-green-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    @else
                        <div class="flex-1 max-w-md"></div>
                    @endif
                </div>
            </div>
        </section>
    @endif --}}
</div>

@push('js')
    <script>
        

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Image lazy loading with intersection observer
        const images = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('opacity-0');
                    img.classList.add('opacity-100');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            img.classList.add('opacity-0', 'transition-opacity', 'duration-300');
            imageObserver.observe(img);
        });
    </script>
@endpush