# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton-data-table.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-data-table)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-data-table.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-data-table)
![GitHub Actions](https://github.com/processton-io/processton-data-table/actions/workflows/main.yml/badge.svg)

Generate Schema of DataTable for Processton Client

## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-data-table
```

## Usage

```php
ProcesstonDataTable::generateDataTable(
    'Title',
    [
        ProcesstonDataTable::generateDataTableColumn(
            'label',
            'map',
            'text'
        )
    ]
)
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
