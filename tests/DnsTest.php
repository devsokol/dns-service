<?php

namespace App\LaravelDns\Tests;

use App\LaravelDns\Dns;
use PHPUnit\Framework\TestCase;

class DnsTest extends TestCase
{
    public function testGetAllRecords()
    {
        $dns = new Dns();
        $records = $dns->getRecords('google.com');

        $this->assertIsArray($records);
        // Here you can add more assertions based on what you expect 
        // the getAllRecords method to return. For example:
        // $this->assertArrayHasKey('A', $records);
        // $this->assertArrayHasKey('MX'ч, $records);
    }
}