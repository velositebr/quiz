<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-users', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('edit-user-profile', function($user){
            return $user->hasAnyRoles(['admin', 'author', 'user']);
        });

        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });

        Gate::define('create-contacts', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-contacts', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('edit-contacts', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('create-settings', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-settings', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('edit-settings', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('create-contacts', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-contacts', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('edit-contacts', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-results', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('edit-results', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('delete-results', function($user){
            return $user->hasAnyRoles(['admin']);
        });

    }
}
