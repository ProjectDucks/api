<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::prefix('api')->group(base_path('routes/api.php'));
            Route::prefix('website')->group(base_path('routes/website-api.php'));

            Route::name('fallback')
                ->where(['a' => '.*'])
                ->any('{a}', function () {
                    return 'Not Found!';
                });
        });
    }
}
