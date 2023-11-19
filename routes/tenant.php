<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Login;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyBySubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/xablau', fn () => 'xablau');
    // Route::middleware(['guest', 'universal'])->group(function () {
    //     Route::get('/login', Login::class)
    //         ->name('login');
    // });
    // Route::middleware('auth')->group(function () {
    //     Route::get('/', Dashboard::class)->name('dashboard');
    //     Route::view('profile', 'profile')->name('profile');
    // });
});
