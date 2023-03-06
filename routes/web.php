<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToolController;
use App\Models\Tool;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// tools index route
Route::get('/tools', [ToolController::class, 'index'])->name('tools.index');
// route per creazione (1 step)
Route::get('/tools/create', [ToolController::class, 'create'])->name('tools.create');
// route per creazione (2 step)
Route::post('/tools', [ToolController::class, 'store'])->name('tools.store');
Route::get('/tools/{tool}', [ToolController::class, 'show'])->name('tools.show');
Route::delete("/tools/{tool}", [ToolController::class, "destroy"])->name("tools.destroy");
Route::get('/tools/{tool}/edit', [ToolController::class, 'edit'])->name('tools.edit');
Route::put('/tools/{tool}', [ToolController::class, 'update'])->name('tools.update');
