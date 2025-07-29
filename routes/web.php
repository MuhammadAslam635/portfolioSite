<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Web\AboutComponent;
use App\Livewire\Web\TeamComponent;
use App\Livewire\Web\Blogs\BlogComponent;
use App\Livewire\Web\Blogs\BlogDetailComponent;
use App\Livewire\Web\Projects\ProjectComponent;
use App\Livewire\Admin\AdminCreateBlogComponent;
use App\Livewire\Admin\AdmineditBlogComponent;
use App\Livewire\Admin\AllBlogsComponent;
use App\Livewire\Admin\AdminViewBlogDetailComponent;
use App\Livewire\Admin\AdminEditBlogGalleryComponent;
use App\Livewire\Admin\AllCategoriesComponent;
use App\Livewire\Admin\AdminCreateCategoryComponent;
use App\Livewire\Admin\AdminEditCategoryComponent;
use App\Livewire\Admin\AllTagComponent;
use App\Livewire\Admin\AdminCreateTagComponent;
use App\Livewire\Admin\AdminEditTagComponent;


Route::get('/', function () {
    // dd(\App\Models\Blog::all());
    $blogs = \App\Models\Blog::latest()->take(6)->get();
    return view('welcome', compact('blogs'));
})->name('home');
Route::get('/about',AboutComponent::class)->name('about');
Route::get('/team',TeamComponent::class)->name('team');
Route::get('/blogs',BlogComponent::class)->name('blogs');
Route::get('/blog-detail/{slug}',BlogDetailComponent::class)->name('blogDetail');
Route::get('/projects',ProjectComponent::class)->name('projects');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::prefix('blogs')->group(function () {
        Route::get('/create', AdminCreateBlogComponent::class)->name('blogs.create');
        Route::get('/edit/{slug}', AdmineditBlogComponent::class)->name('blogs.edit');
        Route::get('/all', AllBlogsComponent::class)->name('blogs');
        Route::get('/detail/{slug}', AdminViewBlogDetailComponent::class)->name('blogs.detail');
        Route::get('/edit/{id}/gallery', AdminEditBlogGalleryComponent::class)->name('blogs.gallery.edit');
    });
    Route::prefix('categories')->group(function () {
        Route::get('/all',AllCategoriesComponent::class)->name('categories');
        Route::get('/create',AdminCreateCategoryComponent::class)->name('categories.create');
        Route::get('/edit/{slug}',AdminEditCategoryComponent::class)->name('categories.edit');
    });
    Route::prefix('tags')->group(function () {
        Route::get('/all',AllTagComponent::class)->name('tags');
        Route::get('/create',AdminCreateTagComponent::class)->name('tags.create');
        Route::get('/edit/{slug}',AdminEditTagComponent::class)->name('tags.edit');
    });
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
