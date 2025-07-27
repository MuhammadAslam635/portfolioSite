<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <div class="bg-green-50 dark:glass-effect rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">Edit {{ $name }} Blog</h1>
                    <p class="text-gray-400">Discover amazing content from our community</p>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mb-8 bg-green-50 dark:bg-accent-500 rounded-lg p-4">
            <form wire:submit.prevent="updateBlog" enctype="multipart/form-data">
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2">
                    <flux:input type="text" label="Blog Title*" wire:model.live="name" wire:keydown="genSlug" />
                    <flux:input type="text" label="Blog Slug(Auto)" wire:model="slug" />
                </div>
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-2">
                    <flux:input type="number" label="Blog Reading Time*" wire:model="reading_time"  />
                    <flux:select wire:model="category_id" label="Select Category*" placeholder="Choose Category...">
                        @foreach ($cats as $cat)
                            <flux:select.option value="{{ $cat->id }}">{{ $cat->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                    <flux:select wire:model="is_featured" label="Featured*" placeholder="Choose Featured...">
                        <flux:select.option value="1">{{ 'Featured' }}</flux:select.option>
                        <flux:select.option value="0">{{ 'Non Featured' }}</flux:select.option>

                    </flux:select>
                </div>
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2 mt-4">
                    <flux:input type="file" label="Blog Main Image" wire:model.live="newImage" />
                    @if ($newImage)
                        <div class="flex gap-1 justify-end rounded-lg border-green-400">
                            <img src="{{ $newImage->temporaryUrl() }}"
                                class="object-fit w-[50%] h-[50%] border-green-500 rounded-lg" />
                        </div>
                    @else
                        <div class="flex gap-1 justify-end rounded-lg border-green-400">
                            <img src="{{ asset('assets/'.$image) }}"
                                class="object-fit w-[50%] h-[50%] border-green-500 rounded-lg" />
                        </div>
                    @endif
                </div>
                <div class="flex justify-end my-2">
                    <flux:button type="submit" variant="primary">Update Blog</flux:button>
                </div>
            </form>
        </div>
    </div>
</div>
