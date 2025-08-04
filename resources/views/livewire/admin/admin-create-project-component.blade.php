<div class="min-h-screen p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="bg-green-50 dark:glass-effect rounded-2xl p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold gradient-text-animated mb-2">Create New Project</h1>
                    <p class="text-gray-400">Showcase your amazing projects to the community</p>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="grid grid-cols-1 gap-6 mb-8 bg-green-50 dark:bg-accent-500 rounded-lg p-6">
            <form wire:submit.prevent="createProject" enctype="multipart/form-data">
                
                <!-- Basic Information Row -->
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2 mb-4">
                    <flux:input 
                        type="text" 
                        label="Project Name*" 
                        wire:model.live="name" 
                        wire:keydown="genSlug"
                        placeholder="Enter your project name..."
                    />
                    <flux:input 
                        type="text" 
                        label="Project Slug (Auto Generated)" 
                        wire:model="slug"
                        placeholder="auto-generated-slug"
                        readonly
                    />
                </div>

                <!-- Category and Settings Row -->
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-2 mb-4">
                    <flux:select wire:model="category_id" label="Select Category*" placeholder="Choose Category...">
                        @foreach ($cats as $cat)
                            <flux:select.option value="{{ $cat->id }}">{{ $cat->name }}</flux:select.option>
                        @endforeach
                    </flux:select>

                    <flux:input 
                        type="number" 
                        label="Reading Time (minutes)*" 
                        wire:model="reading_time"
                        placeholder="5"
                        min="1"
                    />

                    <flux:select wire:model="is_featured" label="Featured Status*" placeholder="Choose Status...">
                        <flux:select.option value="1">Featured</flux:select.option>
                        <flux:select.option value="0">Non Featured</flux:select.option>
                    </flux:select>

                    <flux:select wire:model="is_active" label="Publication Status*" placeholder="Choose Status...">
                        <flux:select.option value="1">Published</flux:select.option>
                        <flux:select.option value="0">Draft</flux:select.option>
                    </flux:select>
                </div>

                <!-- Links Row -->
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2 mb-4">
                    <flux:input 
                        type="url" 
                        label="Loom Demo Link" 
                        wire:model="loom_link"
                        placeholder="https://www.loom.com/share/..."
                    />
                    <flux:input 
                        type="url" 
                        label="Project Live Link" 
                        wire:model="link"
                        placeholder="https://your-project.com"
                    />
                </div>

                <!-- Publication Date Row -->
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-2 mb-4">
                    <flux:input 
                        type="date" 
                        label="Publication Date" 
                        wire:model="published_at"
                    />
                    <div class="flex items-end">
                        <flux:input 
                            type="file" 
                            label="Project Featured Image*" 
                            wire:model.live="image"
                            accept="image/*"
                        />
                    </div>
                </div>

                <!-- Image Preview Section -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Project Image Preview
                    </label>
                    <div class="bg-white dark:bg-gray-800 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 p-4">
                        @if ($image)
                            <div class="flex justify-center">
                                <div class="relative">
                                    <img src="{{ $image->temporaryUrl() }}"
                                        class="object-cover w-full max-w-md h-48 border-2 border-green-500 rounded-lg shadow-lg" 
                                        alt="Project preview" />
                                    <div class="absolute top-2 right-2 bg-green-500 text-white px-2 py-1 rounded text-xs">
                                        New Upload
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex justify-center">
                                <div class="relative">
                                    <img src="{{ asset('assets/projects/default-project.jpg') }}"
                                        class="object-cover w-full max-w-md h-48 border-2 border-gray-300 rounded-lg opacity-50" 
                                        alt="Default preview" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p class="text-gray-500 text-sm mt-2">Upload a project image to see preview</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

               

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row gap-3 justify-end pt-4 border-t border-gray-200 dark:border-gray-700">
                    <flux:button 
                        type="button" 
                        variant="primary"
                        color="blue"
                        wire:click="resetForm"
                    >
                        Reset Form
                    </flux:button>
                    <flux:button 
                        type="submit" 
                        variant="primary"
                        color="green"
                        icon="plus"
                    >
                      
                        Create New Project
                    </flux:button>
                </div>

            </form>
        </div>

       
    </div>
</div>