<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Team Header Section -->
        <div class="bg-green-50 dark:bg-black rounded-3xl p-8 mb-8 hover-lift animate-fade-in">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-blue-500 to-green-500 flex items-center justify-center text-white font-bold text-xl">
                            {{ substr($name, 0, 1) }}
                        </div>
                        <div>
                            <h1 class="text-4xl font-bold gradient-text-animated mb-2">{{ $name }}</h1>
                            <p class="text-gray-600 dark:text-gray-300">Edit team member information and details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3xl p-8 mb-8 hover-lift animate-fade-in">
            <form wire:submit.prevent="updateTeam" class="space-y-6">
                <!-- Basic Information -->
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2">
                    <flux:input type="text" label="Full Name*" wire:model.live="name" wire:keydown="genSlug" />
                    <flux:input type="text" label="Slug (Auto)*" wire:model="slug" />
                </div>

                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2">
                    <flux:input type="text" label="Designation*" wire:model="designation" placeholder="e.g., Senior Developer, Project Manager" />
                    <flux:select wire:model="is_active" label="Status*" placeholder="Choose Status...">
                        <flux:select.option value="1">Active</flux:select.option>
                        <flux:select.option value="0">Inactive</flux:select.option>
                    </flux:select>
                </div>

                <!-- Contact Information -->
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2">
                    <flux:input type="email" label="Email Address" wire:model="email" />
                    <flux:input type="text" label="Phone Number" wire:model="phone" />
                </div>

                <!-- Social Media Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-700 dark:text-gray-300">Social Media Links</h3>
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-2">
                        <flux:input type="url" label="Facebook" wire:model="facebook" placeholder="https://facebook.com/username" />
                        <flux:input type="url" label="Twitter" wire:model="twitter" placeholder="https://twitter.com/username" />
                        <flux:input type="url" label="LinkedIn" wire:model="linkedin" placeholder="https://linkedin.com/in/username" />
                    </div>
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-2 mt-4">
                        <flux:input type="url" label="Instagram" wire:model="instagram" placeholder="https://instagram.com/username" />
                        <flux:input type="url" label="YouTube" wire:model="youtube" placeholder="https://youtube.com/channel/..." />
                        <flux:input type="url" label="GitHub" wire:model="github" placeholder="https://github.com/username" />
                    </div>
                    <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4 sm:gap-2 mt-4">
                        <flux:input type="text" label="WhatsApp" wire:model="whatsapp" placeholder="WhatsApp number or link" />
                    </div>
                </div>

                <!-- Content Section -->
                <section class="border border-gray-200 dark:border-gray-700 p-4 rounded bg-zinc-50 dark:bg-gray-900 space-y-4">
                    @error('content')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    {{-- Trix Editor with proper Livewire integration --}}
                    <div wire:ignore>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">About / Bio</label>
                        <input id="content" type="hidden" wire:model.live="content">
                        <trix-editor input="content"
                            class="w-full trix-content min-h-[16rem] border rounded shadow-sm"
                            placeholder="Enter team member bio and description here..."
                            x-data="{ content: @entangle('content').live }"
                            x-init="$el.addEventListener('trix-change', function(e) {
                                content = e.target.value;
                            });
                            $el.editor.loadHTML(content);">
                        </trix-editor>
                    </div>
                </section>

                <!-- Image Upload -->
                <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-5">
                    <flux:input type="file" label="Profile Image" wire:model="newImage" />
                    <div class="flex justify-center items-center">
                        @if ($newImage)
                            <img src="{{ $newImage->temporaryUrl() }}" alt="Image Preview"
                                class="w-full h-64 object-cover rounded-lg shadow-md">
                        @else
                            <img src="{{ asset('assets/teams/'.$image) }}" alt="Current Image"
                                class="w-full h-64 object-cover rounded-lg shadow-md">
                        @endif
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <flux:button type="submit" variant="primary" color="green">
                        Update Team Member
                    </flux:button>
                </div>
            </form>
        </div>
    </div>
</div>
