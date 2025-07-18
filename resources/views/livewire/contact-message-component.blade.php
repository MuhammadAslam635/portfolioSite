<div class="bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700">
    <h3 class="text-2xl font-bold mb-6 text-green-400">Send Message</h3>
    <form class="space-y-6" wire:submit.prevent="submitForm">
        <div>
            <flux:input type="text"
                placeholder="Your Name*" wire:model="name" />
        </div>
        <div>
            <flux:input type="email" 
                placeholder="your@email.com" wire:model="email" />
            <flux:error name="email" />
        </div>
        <div>
            <flux:input type="tel" 
                placeholder="Phone/WhatsApp" wire:model="phone" />
        </div>
        <div>
            <flux:input type="text"
                placeholder="Project Discussion" wire:model="subject" />
            <flux:error name="subject" />
        </div>
        <div>
            <flux:textarea rows="5"
                placeholder="Tell me about your project..." wire:model="message"></flux:textarea>
            <flux:error name="message" />
        </div>
        <flux:button type="submit" variant="primary"
            class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition-colors transform hover:scale-105">
            Send Message
        </flux:button>
    </form>
</div>
