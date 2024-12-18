<?php

declare(strict_types=1);

use App\Http\Controllers\v1\Credentials;
use Illuminate\Support\Facades\Route;

Route::get('/', Credentials\IndexController::class)->name('index');
Route::post('/', Credentials\StoreController::class)->name('store');
Route::get('/{credential}', Credentials\ShowController::class)->name('show');
Route::patch('/{credential}', Credentials\UpdateController::class)->name('update');
Route::delete('/{credential}', Credentials\DeleteController::class)->name('delete');
// Route::prefix('credentials')->as('credentials:')->group(static function (): void {});
