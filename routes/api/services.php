<?php

declare(strict_types=1);

use App\Http\Controllers\Services;
use Illuminate\Support\Facades\Route;

// Route group for managing services
Route::prefix('services')->as('services:')->group(static function (): void {
    Route::get('/', Services\IndexController::class)->name('index');
    Route::post('/', Services\StoreController::class)->name('store');
    Route::get('/{service}', Services\ShowController::class)->name('show');
    Route::patch('/{service}', Services\UpdateController::class)->name('update');
    Route::delete('/{service}', Services\DeleteController::class)->name('delete');
});

