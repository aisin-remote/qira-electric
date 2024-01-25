<?php

use App\Http\Controllers\CostumerProblemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PicaController;
use App\Http\Controllers\HenkatenController;
use App\Http\Controllers\ProblemController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    // Dahsboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/filter', [DashboardController::class, 'index'])->name('dashboard.filter');

    // Henkaten
    Route::post('/simpan-henkaten', [HenkatenController::class, 'index'])->name('simpan.henkaten');

    // PICA
    // Route::get('/pica-form', [PicaController::class, 'index'])->name('pica.form');
    // Route::get('/pica/{id}/edit', [PicaController::class, 'edit'])->name('pica.editData');
    // Route::put('/pica/{id}', [PicaController::class, 'update'])->name('pica.updateData');
    // Route::get('/pica/delete/{id}', [PicaController::class, 'delete'])->name('pica.delete');
    // Route::resource('pica', PicaController::class);

    //problem
    Route::get('/problem-form', [ProblemController::class, 'index'])->name('problem.form');
    Route::get('/problem/{id}/edit', [ProblemController::class, 'edit'])->name('problem.editData');
    Route::put('/problem/{id}', [ProblemController::class, 'update'])->name('problem.updateData');
    Route::get('/problem/delete/{id}', [ProblemController::class, 'delete'])->name('problem.delete');
    Route::resource('problem', ProblemController::class);

    // Costumer Problem
    Route::get('/costumer-problem', [CostumerProblemController::class, 'index'])->name('costumer');
    Route::post('/costumer-problem/store', [CostumerProblemController::class, 'store'])->name('costumer.store');
    Route::get('/costumer-problem/delete/{id}', [CostumerProblemController::class, 'delete'])->name('costumer.delete');
    Route::get('/costumer-problem/edit/{id}', [CostumerProblemController::class, 'edit'])->name('costumer.edit');
    Route::put('/costumer-problem/update/{id}', [CostumerProblemController::class, 'update'])->name('costumer.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
