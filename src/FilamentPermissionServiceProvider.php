<?php

namespace chkilian89\FilamentPermission;

use Illuminate\Support\ServiceProvider;

class FilamentPermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Carrega as migrations do pacote
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        // Registre bindings, singletons, etc.
    }
}
