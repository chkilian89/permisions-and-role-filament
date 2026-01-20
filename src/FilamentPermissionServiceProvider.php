<?php

namespace FilamentPermission;

use Illuminate\Support\ServiceProvider;

class FilamentPermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Registre os Resources do Filament
        \Filament\Panel::configure(function ($panel) {
            $panel->resources([
                \FilamentPermission\Filament\Resources\UserResource::class,
                \FilamentPermission\Filament\Resources\RoleResource::class,
                \FilamentPermission\Filament\Resources\PermissionResource::class,
            ]);
        });
    }

    public function register()
    {
        // Registre bindings, singletons, etc.
    }
}
