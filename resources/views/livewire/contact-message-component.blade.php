<!-- Contact Form -->
<div id="contact" class="glass-effect p-8 rounded-xl mb-12" data-aos="fade-up" data-aos-delay="300">
    <form class="space-y-6" wire:submit.prevent="submitForm">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-neon-green mb-2">Name
                    *</label>
                <input type="text" id="name" name="name" wire:model="name"
                    class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                    placeholder="Your full name">
                @error('name')
                    <span class="text-neon-green">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-neon-green mb-2">Email
                    *</label>
                <input type="email" id="email" name="email" wire:model="email"
                    class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                    placeholder="your.email@example.com">
                @error('email')
                    <span class="text-neon-green">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="phone" class="block text-sm font-medium text-neon-green mb-2">Phone</label>
                <input type="tel" id="phone" name="phone" wire:model="phone"
                    class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                    placeholder="+1 (555) 123-4567">
                @error('phone')
                    <span class="text-neon-green">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="subject" class="block text-sm font-medium text-neon-green mb-2">Subject
                    *</label>
                <input type="text" id="subject" name="subject" wire:model="subject"
                    class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 transition-all duration-300"
                    placeholder="Project discussion">
                @error('subject')
                    <span class="text-neon-green">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-neon-green mb-2">Message *</label>
            <textarea id="message" name="message" rows="6" wire:model="message"
                class="w-full px-4 py-3 bg-charcoal border border-gray-600 rounded-lg focus:border-neon-green focus:outline-none text-white placeholder-gray-400 resize-vertical transition-all duration-300"
                placeholder="Tell me about your project requirements, timeline, and any specific technologies you'd like to use..."></textarea>
            @error('message')
                <span class="text-neon-green">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center stagger-animation">
            <flux:button type="submit" 
                class="magnetic-button bg-neon-green text-neon-green px-12 py-4 rounded-lg font-semibold text-lg hover:bg-dark-green transition-all duration-300 animate-glow">
                Send Message
            </flux:button>
        </div>
    </form>
</div>
