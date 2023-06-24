<?php

namespace App\Infrastructure;

use App\Domain\Dns;
use App\Domain\DnsInterface;
use Illuminate\Support\ServiceProvider;

class DnsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(DnsInterface::class, function ($app) {
            return new Dns();
        });
    }
}