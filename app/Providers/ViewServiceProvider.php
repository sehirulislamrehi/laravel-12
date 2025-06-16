<?php

namespace App\Providers;

use App\Models\UserModule\Module;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('backend.includes.left_sidebar', function ($view) {
            $cacheKey = "sidebarModules";
            $modules = cache()->rememberForever($cacheKey, function () {
                return Module::where('left_menu_visibility', true)
                    ->with("subModule")
                    ->orderBy('position', 'asc')
                    ->get();
            });

            $view->with('sidebarModules', $modules);

        });

    }
}
