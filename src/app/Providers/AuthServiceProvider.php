<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


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
        $this->registerPostPolicies();

        //
    }
    public function registerPostPolicies(){
        Gate::define('permit',function($user,$permi){
            $user=Auth::user();
            // dd($permi); 
            foreach($user->permissions as $permission){
                if ($permission->name == $permi) {
                    return true;
                }
            }
            foreach($user->groups as $group){
                foreach($group->permissions as $permission){
                    if ($permission->name == $permi) {
                        return true;
                    }
                }
            }
            return false;
        });
    }
}
