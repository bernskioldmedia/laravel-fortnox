# Laravel Fortnox

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bernskioldmedia/laravel-fortnox.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-fortnox)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bernskioldmedia/laravel-fortnox/run-tests?label=tests)](https://github.com/bernskioldmedia/laravel-fortnox/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bernskioldmedia/laravel-fortnox/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bernskioldmedia/laravel-fortnox/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bernskioldmedia/laravel-fortnox.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-fortnox)

A Laravel package to consume the Fortnox API.

## Installation

You can install the package via composer:

```bash
composer require bernskioldmedia/laravel-fortnox
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="fortnox-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravelFortnox = new BernskioldMedia\Fortnox();
echo $laravelFortnox->echoPhrase('Hello, BernskioldMedia!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Bernskiold Media](https://github.com/bernskioldmedia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
