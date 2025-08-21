<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// ROUTES PUBLIQUES 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
Route::get('services', [ServiceController::class, 'index'])->name('services.index');
Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('contact', [ContactController::class, 'index'])->name('contacts.index');
// ROUTES ADMIN 
Route::prefix('admin')->group(function () {

    // ABOUT
    Route::get('about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('about/{id}', [AboutController::class, 'update'])->name('about.update');

    // AVATAR
    Route::get('avatar/{id}/edit', [AvatarController::class, 'edit'])->name('avatar.edit');
    Route::put('avatar/{id}', [AvatarController::class, 'update'])->name('avatar.update');

    // SKILLS CRUD
    Route::get('skills/create', [SkillController::class, 'create'])->name('skills.create');
    Route::post('skills', [SkillController::class, 'store'])->name('skills.store');
    Route::get('skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
    Route::put('skills/{id}', [SkillController::class, 'update'])->name('skills.update');
    Route::delete('skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');

    // PORTFOLIO CRUD
    Route::get('portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::post('portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('portfolios/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
    Route::put('portfolios/{id}', [PortfolioController::class, 'update'])->name('portfolios.update');
    Route::delete('portfolios/{id}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');

    // SERVICES CRUD
    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // TESTIMONIALS CRUD
    Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

    // CONTACT
    Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

    // MESSAGES
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::delete('messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
});