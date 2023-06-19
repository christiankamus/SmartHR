<?php

namespace App\Providers;

use App\Models\User;
use App\Filament\Resources\PermissionResource;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\RoleResource;
use App\Filament\Resources\UserResource;

class FilamentServiceProvider extends ServiceProvider
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
        Filament::serving(function(){
            if(auth()->user()){
                if(auth()->user()->is_admin==1){
                    Filament::registerUserMenuItems([
                        UserMenuItem::make()
                            ->label('Manage users')
                            ->url(UserResource::getUrl())
                            ->icon('heroicon-o-users'),
                        UserMenuItem::make()
                            ->label('Manage roles')
                            ->url(RoleResource::getUrl())
                            ->icon('heroicon-o-cog'),
                        UserMenuItem::make()
                            ->label('Manage permissions')
                            ->url(PermissionResource::getUrl())
                            ->icon('heroicon-o-key')
                    ]);
                }
            }
        });
    }
}
