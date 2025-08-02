<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <div class="bg-green-50 dark:glass-effect rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">Add Skill</h1>
                    <p class="text-gray-400">Discover amazing content from our community</p>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mb-8">
            <form wire:submit.prevent="createSkill" enctype="multipart/form-data">
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-4 sm:gap-2">
                <flux:input type="text" label="Skill Name*" wire:model.live="name" wire:keydown="genSlug" />
                <flux:input type="text" label="Skill Slug(Auto)" wire:model="slug" />
                <flux:input type="number" label="Skill Score" wire:model="score" />
                <flux:select wire:model="sType" label="Type*" placeholder="Choose Stack...">
                        <flux:select.option value="0">Frontend & API's</flux:select.option>
                        <flux:select.option value="1">Backend</flux:select.option>
                        <flux:select.option value="2">Database Cloud</flux:select.option>
                        <flux:select.option value="3">AI Frameworks</flux:select.option>
                    </flux:select>
            </div>
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2 mt-3">
                <flux:input type="file" label="Skill Image" wire:model.live="image" />
                @if($image)
                <div class="flex gap-1 rounded-lg border-green-400">
                    <img src="{{ $image->temporaryUrl() }}" class="object-fit w-full border-green-500 rounded-lg" />
                </div>
                @else
                <div class="flex gap-1 rounded-lg border-green-400">
                    <img src="{{ asset('assets/blogs/ai-chatbots.avif') }}" class="object-fit w-full border-green-500 rounded-lg" />
                </div>
                @endif
            </div>
            <div class="flex justify-end my-2">
                <flux:button type="submit" variant="primary" color="green">Add Skill</flux:button>
            </div>
            </form>

        </div>
    </div>
</div>
