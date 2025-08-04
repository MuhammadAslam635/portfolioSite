<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Web\AboutComponent;
use App\Livewire\Web\TeamComponent;
use App\Livewire\Web\TeamDetailComponent;
use App\Livewire\Web\TeamProjectsComponent;
use App\Livewire\Web\Blogs\BlogComponent;
use App\Livewire\Web\Blogs\BlogDetailComponent;
use App\Livewire\Web\Projects\ProjectComponent;
use App\Livewire\Web\ProjectDetailComponent;
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
use App\Livewire\Admin\AdminCreateTeamComponent;
use App\Livewire\Admin\AdminEditTagComponent;
use App\Livewire\Admin\AdminEditTeamComponent;
use App\Livewire\Admin\AllTeamsComponent;
use App\Livewire\Admin\AdminEditSkillComponent;
use App\Livewire\Admin\AdminCreateSkillComponent;
use App\Livewire\Admin\AllSkillsComponent;
use App\Livewire\Admin\AdminEditProjectComponent;
use App\Livewire\Admin\AdminCreateProjectComponent;
use App\Livewire\Admin\AllProjectsComponent;
use App\Livewire\Admin\AdminViewProjectDetailComponent;
use App\Livewire\Admin\AdminEditProjectGalleryComponent;



Route::get('/', function () {
    // dd(\App\Models\Blog::all());
    $blogs = \App\Models\Blog::latest()->take(6)->get();
    $backends = \App\Models\Skill::where('sType', 1)->get();
    $frontends = \App\Models\Skill::where('sType', 0)->get();
    $databases = \App\Models\Skill::where('sType', 2)->get();
    $ais = \App\Models\Skill::where('sType', 3)->get();
    $teams = \App\Models\Team::all();
    // $featuredProjects = \App\Models\Project::where('is_featured', 1)->inRandomOrder()->first();
    $projects = \App\Models\Project::latest()->take(6)->get();

    return view('welcome', compact('blogs', 'backends', 'frontends', 'databases', 'ais', 'teams', 'projects'));
})->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/team', TeamComponent::class)->name('team');
Route::get('/team/{slug}', TeamDetailComponent::class)->name('team.detail');
Route::get('/team/projects/{slug}', TeamProjectsComponent::class)->name('team.projects');
Route::get('/blogs', BlogComponent::class)->name('blogs');
Route::get('/blog-detail/{slug}', BlogDetailComponent::class)->name('blogDetail');
Route::get('/projects', ProjectComponent::class)->name('projects');
Route::get('/project/{slug}', ProjectDetailComponent::class)->name('projectDetail');

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
        Route::get('/all', AllCategoriesComponent::class)->name('categories');
        Route::get('/create', AdminCreateCategoryComponent::class)->name('categories.create');
        Route::get('/edit/{slug}', AdminEditCategoryComponent::class)->name('categories.edit');
    });
    Route::prefix('tags')->group(function () {
        Route::get('/all', AllTagComponent::class)->name('tags');
        Route::get('/create', AdminCreateTagComponent::class)->name('tags.create');
        Route::get('/edit/{slug}', AdminEditTagComponent::class)->name('tags.edit');
    });
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::prefix('teams')->group(function () {
        Route::get('/', AllTeamsComponent::class)->name('team.index');
        Route::get('/create', AdminCreateTeamComponent::class)->name('team.create');
        Route::get('/edit/{slug}', AdminEditTeamComponent::class)->name('team.edit');
    });
    Route::prefix('skills')->group(function () {
        Route::get('/', AllSkillsComponent::class)->name('skills.index');
        Route::get('/create', AdminCreateSkillComponent::class)->name('skills.create');
        Route::get('/edit/{slug}', AdminEditSkillComponent::class)->name('skills.edit');
    });
    Route::prefix('projects')->group(function () {
        Route::get('/all', AllProjectsComponent::class)->name('projects');
        Route::get('/create', AdminCreateProjectComponent::class)->name('projects.create');
        Route::get('/edit/{slug}', AdminEditProjectComponent::class)->name('projects.edit');
        Route::get('/detail/{slug}', AdminViewProjectDetailComponent::class)->name('projects.detail');
        Route::get('/edit/{id}/gallery', AdminEditProjectGalleryComponent::class)->name('projects.gallery.edit');

    });
});


require __DIR__ . '/auth.php';
