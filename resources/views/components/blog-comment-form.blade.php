<div class="glass-effect p-8 rounded-xl mb-8" data-aos="fade-up">
    <form class="space-y-6" wire:submit.prevent="submitComment">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-neon-green mb-2">Name</label>
                <input type="text" wire:model="name"
                    class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                    placeholder="Your name">
                @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror

            </div>
            <div>
                <label class="block text-sm font-medium text-neon-green mb-2">Email</label>
                <input type="email" wire:model="email"
                    class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                    placeholder="your@email.com">
                @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-neon-green mb-2">Comment</label>
            <textarea rows="4" wire:model="comment"
                class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 resize-vertical transition-all duration-300"
                placeholder="Share your thoughts..."></textarea>
            @error('comment')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
        </div>
        <button type="submit"
            class="magnetic-button bg-neon-green text-black px-8 py-3 rounded-lg font-semibold hover:bg-dark-green transition-all duration-300 justify-center w-full">
            Post Comment
        </button>
    </form>
</div>
