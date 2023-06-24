<?php

namespace App\Domain;

class Dns implements DnsInterface
{
    public function getRecords($domain)
    {
        return dns_get_record($domain);
    }
}
