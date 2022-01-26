<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
// use Laravel\Passport\passport;
use Laravel\passport\passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin',function($user){
            return $user->type === 'admin';
        });

        Gate::define('isAuthor',function($user){
            return $user->type === 'author';
        });

        Gate::define('isUser',function($user){
            return $user->type === 'user';
        });

        Passport::routes();
        //
    }
}