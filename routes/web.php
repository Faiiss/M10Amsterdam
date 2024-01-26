<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OveronsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectDetailsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/over-ons', [OveronsController::class, 'index'])->name('over-ons');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/project/{id}', [ProjectDetailsController::class, 'show'])->name('project.details');