<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Blog Header Section -->
        <div class="bg-green-100/70 dark:bg-gray-800/70  rounded-3xl p-8 mb-8 hover-lift animate-fade-in">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                <div class="flex-1">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-xl">
                            B
                        </div>
                        <div>
                            <h1 class="text-4xl font-bold gradient-text-animated mb-2">{{ $gallery->caption }}</h1>
                            <p class="text-gray-600 dark:text-gray-300">Discover amazing content from our community</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="bg-green-100/70 dark:bg-gray-800/70 rounded-3xl p-8 mb-8 hover-lift animate-fade-in">
            <form wire:submit.prevent="updateGallery" class="space-y-6">
                <div class="grid grid-cols-1 gap-2">
                    <flux:input type="text" label="Caption*" wire:model="caption" />
                    <section
                        class="border border-gray-200 dark:border-gray-700 p-4 rounded bg-zinc-50 dark:bg-gray-900 space-y-4">

                        @error('content')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                        {{-- Trix Editor with proper Livewire integration --}}
                        <div wire:ignore>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Content</label>
                            <input id="content" type="hidden" wire:model.live="content">
                            <trix-editor input="content"
                                class="w-full trix-content min-h-[16rem] border rounded shadow-sm"
                                placeholder="Enter your contact page content here..." x-data="{
                                    content: @entangle('content').live
                                }"
                                x-init="$el.addEventListener('trix-change', function(e) {
                                    content = e.target.value;
                                });
                                $el.editor.loadHTML(content);"></trix-editor>
                        </div>
                    </section>
                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-5">
                        <flux:input type="file" label="Image*" wire:model="newImage" />
                        <div class="flex justify-center items-center">
                            @if ($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" alt="Image Preview"
                                    class="w-full h-64 object-cover rounded-lg shadow-md">
                            @else
                                <img src="{{ asset('assets/'.$image) }}" alt="Default Image"
                                    class="w-full h-64 object-cover rounded-lg shadow-md">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <flux:button type="submit" variant="primary" color="green">
                        Update Blog Gallery
                    </flux:button>
                </div>
            </form>
        </div>
    </div>
</div>
