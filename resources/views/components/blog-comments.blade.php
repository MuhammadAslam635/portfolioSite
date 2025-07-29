<div class="space-y-6">
    <h2 class="text-3xl font-bold text-neon-green mb-6">Comments</h2>
    <div class="space-y-4">
        @foreach($comments as $comment)
    <div class="glass-effect p-6 rounded-xl" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-start space-x-4">
            <div
                class="w-12 h-12 bg-gradient-to-br from-neon-green to-dark-green rounded-full flex items-center justify-center text-black font-bold">
                {{ substr($comment->name, 0, 1) }}
            </div>
            <div class="flex-1">
                <div class="flex items-center space-x-2 mb-2">
                    <h4 class="font-semibold text-white">{{ $comment->name }}</h4>
                    <span class="text-gray-400 text-sm">{{ \Carbon\Carbon::parse($comment->created_at)->isoFormat('MM Do Y') }}</span>
                </div>
                <p class="text-gray-300">
                    {{$comment->comment}}
                </p>
            </div>
        </div>
    </div>
        @endforeach
    </div>

</div>
