<?php

namespace V1\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/user_routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations/');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views/', 'User');
    }
}
