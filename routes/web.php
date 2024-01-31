<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OveronsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectDetailsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/over-ons', [OveronsController::class, 'index'])->name('over-ons');

// For /contacts routes
Route::prefix('contacts')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

// For /contact route
Route::get('/contact', [ContactController::class, 'contactView'])->name('contact');


Route::get('/project/{id}', [ProjectDetailsController::class, 'show'])->name('project.details');
