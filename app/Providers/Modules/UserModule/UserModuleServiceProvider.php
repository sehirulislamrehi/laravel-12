<?php

namespace App\Providers\Modules\UserModule;

use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use App\Repositories\Modules\UserModule\User\ReadUserRepository;
use Illuminate\Support\ServiceProvider;

class UserModuleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(
               ReadUserInterface::class,
               ReadUserRepository::class
        );
    }
}
