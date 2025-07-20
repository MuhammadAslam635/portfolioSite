<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Web\AboutComponent;
use App\Livewire\Web\TeamComponent;
use App\Livewire\Web\Blogs\BlogComponent;
use App\Livewire\Web\Blogs\BlogDetailComponent;
use App\Livewire\Web\Projects\ProjectComponent;

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
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
