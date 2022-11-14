# Add a page to your Filament panel to search for plugins.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-plugin-search.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-plugin-search)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-plugin-search/run-tests?label=tests)](https://github.com/ryangjchandler/filament-plugin-search/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-plugin-search/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/filament-plugin-search/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-plugin-search.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-plugin-search)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ryangjchandler/filament-plugin-search
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-plugin-search-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-plugin-search-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-plugin-search-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-plugin-search = new RyanChandler\PluginSearch();
echo $filament-plugin-search->echoPhrase('Hello, RyanChandler!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
