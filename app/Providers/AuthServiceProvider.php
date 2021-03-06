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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('realUser', function($online, $user) {
            return $online->id === $user->id;
        });
        Gate::define('admin', function($online) {
            return $online->role_id == 1;
        });
        Gate::define('adminWebMaster', function($online) {
            return $online->role_id == 1 || $online->role_id == 3;
        });
    }
}
