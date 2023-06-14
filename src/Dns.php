<?php

namespace App\LaravelDns;

class Dns
{
    public function getRecords($domain)
    {
        return dns_get_record($domain);
    }
}