<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ChangeimgController;
use App\Http\Controllers\AvoHomeController;
use App\Http\Controllers\ImageCVController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FaktureController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;


Route::get('/download', [DownloadController::class, 'download'])
->name('download');

Route::get('/', [AvoHomeController::class, 'homepage'])
->name('welcome');

Route::get('/chng_adm_img', [DemoController::class, 'copyImage'])
->name('copyImage')
->middleware(['auth', 'verified'])->name('copyImage');

Route::get('/email', function () {
    Illuminate\Support\Facades\Mail::send(new \App\Mail\OrderEmail());
    return redirect('/');
});


Route::redirect('/dashboard', '/superadmin')
->name('dashboard');

Route::get('/fakture', [FaktureController::class, 'Fakture'])
->middleware(['auth', 'verified'])
->name('fakture');

Route::get('/superadmin', [SuperadminController::class, 'Superadmin'])
->middleware(['auth', 'verified'])
->name('superadmin');

    Route::middleware(['auth', 'verified'])->group(function () {
        // Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
        // Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
        // Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
        // Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
        // Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        // Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        // Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
        
            Route::resource('portfolio', PortfolioController::class);
            });

    Route::middleware(['auth', 'verified'])->group(function () {
        // Route::get('/txtwelcome', [ImageCVController::class, 'index'])->name('txtwelcome.index');
        // Route::get('/txtwelcome/create', [ImageCVController::class, 'create'])->name('txtwelcome.create');
        // Route::post('/txtwelcome', [ImageCVController::class, 'store'])->name('txtwelcome.store');
        // Route::get('/txtwelcome/{id}', [ImageCVController::class, 'show'])->name('txtwelcome.show');
        // Route::get('/txtwelcome/{id}/edit', [ImageCVController::class, 'edit'])->name('txtwelcome.edit');
        // Route::put('/txtwelcome/{id}', [ImageCVController::class, 'update'])->name('txtwelcome.update');
        // Route::delete('/txtwelcome/{id}', [ImageCVController::class, 'destroy'])->name('txtwelcome.destroy');

            Route::resource('txtwelcome', ImageCVController::class);
            });

    Route::middleware(['auth', 'verified'])->group(function () {
        // Route::get('/changeimg', [ChangeimgController::class, 'index'])->name('changeimg.index');
        // Route::get('/changeimg/create', [ChangeimgController::class, 'create'])->name('changeimg.create');
        // Route::post('/changeimg', [ChangeimgController::class, 'store'])->name('changeimg.store');
        // Route::get('/changeimg/{id}', [ChangeimgController::class, 'show'])->name('changeimg.show');
        // Route::get('/changeimg/{id}/edit', [ChangeimgController::class, 'edit'])->name('changeimg.edit');
        // Route::put('/changeimg/{id}', [ChangeimgController::class, 'update'])->name('changeimg.update');
        // Route::delete('/changeimg/{id}', [ChangeimgController::class, 'destroy'])->name('changeimg.destroy');

            Route::resource('changeimg', ChangeimgController::class);
            });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
