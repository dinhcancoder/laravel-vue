<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\AuthService;
use App\Services\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthService::class, function ($app) {
            return new AuthService($app->make(UserRepositoryInterface::class));
        });
        $this->app->bind(UserService::class, function ($app) {
            return new UserService($app->make(UserRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
