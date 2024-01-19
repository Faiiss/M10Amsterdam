<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\OpdrachtenController;
use App\Http\Controllers\ProjectDetailsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/opdrachten', [OpdrachtenController::class, 'index'])->name('opdrachten');
Route::get('/project/{id}', [ProjectDetailsController::class, 'show'])->name('project.details');