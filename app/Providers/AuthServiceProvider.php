<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // your policies
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        Passport::loadKeysFrom(storage_path('oauth'));
    }
}
