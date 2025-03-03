# bitly-php

[![packagist](https://img.shields.io/packagist/v/bitly-api/sdk)](https://packagist.org/packages/bitly-api/sdk)
[![build](https://github.com/bitly-community/bitly-php/actions/workflows/build.yml/badge.svg)](https://github.com/bitly-community/bitly-php/actions/workflows/build.yml)
[![test](https://github.com/bitly-community/bitly-php/actions/workflows/test.yml/badge.svg)](https://github.com/bitly-community/bitly-php/actions/workflows/test.yml)

PHP library for [Bitly](https://bitly.com/). Code is generated using the [OpenAPI spec](https://dev.bitly.com/docs/sdks/openapi-30/). See the [API reference](https://dev.bitly.com/api-reference).

## Requirements

### Version

PHP >=8.0

### API Key

Generate an [access token](https://app.bitly.com/settings/api/).

## Install

Install the package with [Composer](https://getcomposer.org/):

```sh
composer require bitly-api/sdk
```

If you're missing a package providing `psr/http-client-implementation`:

```sh
composer require php-http/guzzle7-adapter
```

Add [autoloading](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```

## Usage

Instantiate the SDK:

```php
use Bitly\Bitly;

$bitly = new Bitly('YOUR_API_KEY');

$client = $bitly->client;
```

Convert a long URL to a Bitlink:

```php
use Bitly\Bitly;
use Bitly\Model\Shorten;

$bitly = new Bitly('YOUR_API_KEY');

$shorten = new Shorten();
$shorten->setLongUrl('https://example.com/my-long-url');
$response = $bitly->client->createBitLink($shorten);
```

Handle an API error:

```php
use Bitly\Bitly;

$bitly = new Bitly('YOUR_API_KEY');

try {
    $bitly->client->getBitlink('http://bit.ly/2OUJim0');
} catch (Throwable $exception) {
    echo $exception->getMessage();
    echo $exception->getCode();
}
```

## Scripts

### `composer build`

Generate the code:

```sh
composer build
```

### `composer clean`

Delete the `lib/` directory:

```sh
composer clean
```

### `composer test`

Run the tests:

```sh
composer test
```

## About This Package

This package is automatically generated by [Jane](https://github.com/janephp/janephp).
