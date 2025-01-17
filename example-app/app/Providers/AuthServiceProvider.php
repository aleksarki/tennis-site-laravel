<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Models\User;
use App\Models\Racket;

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

        if ($this->app->routesAreCached()) {
            Passport::routes();
        }

        Gate::define('edit-racket', function (User $user, Racket $racket) {
            return $user->id == $racket->user_id || $user->is_admin;
        });

        Gate::define('soft-delete-racket', function (User $user, Racket $racket) {
            return $user->id == $racket->user_id || $user->is_admin;
        });

        Gate::define('restore-racket', function (User $user) {
            return $user->is_admin;
        });

        Gate::define('force-delete-racket', function (User $user) {
            return $user->is_admin;
        });
    }
}
