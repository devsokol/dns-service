# Laravel DNS

This project is a Laravel package that provides a simple way to get DNS records for a domain.

## Installation

Clone this repository and install the dependencies:

```bash
git clone https://github.com/your-repo/laravel-dns.git
cd laravel-dns
composer install
```

### Usage

```bash
use App\Domain\Dns;

$dns = new Dns();
$records = $dns->getRecords('example.com');
```

### Running Tests

```bash
vendor/bin/phpunit tests/Domain/DnsTest.php
```