<?php

namespace App\Providers;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
 use App\Actions\Fortify\LoginResponse;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
            $this->app->singleton(LoginResponseContract::class, LoginResponse::class);

    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
