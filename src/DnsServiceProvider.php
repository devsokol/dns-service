<?php

namespace App\LaravelDns;

use Illuminate\Support\ServiceProvider;

class DnsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Dns::class, function ($app) {
            return new Dns();
        });
    }
}
