<?php

namespace App\Domain;

interface DnsInterface
{
    public function getRecords($domain);
}