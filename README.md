# Laravel PDF Password Protect

[![Latest Version on Packagist](https://img.shields.io/packagist/v/owenoj/pdf-password-protect.svg?style=flat-square)](https://packagist.org/packages/owenoj/pdf-password-protect)
[![Total Downloads](https://img.shields.io/packagist/dt/owenoj/pdf-password-protect.svg?style=flat-square)](https://packagist.org/packages/owenoj/pdf-password-protect)

Simple wrapper package around MPDF's `setProtection` method that allows you to set password on PDF files.

## Installation

You can install the package via composer:

```bash
composer require owenoj/pdf-password-protect
```

## Usage

You can use via Facade like so:

```php
PDFPasswordProtect::encrypt(storage_path('pdf/document.pdf'),storage_path('pdf/'.'encrypted-documented.pdf'),'janedoe');
```
Encrypt method in detail
* $inputFile and $outputFile has to be a path like `storage_path("pdf/document.pdf")`
```
PDFPasswordProtect::encrypt($inputFile,outputFile,$password)
```

The final file will be located in `storage/pdf` as `encrypted-document.pdf`

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email owen.j@terktrendz.com instead of using the issue tracker.

## Credits

- [Owen Jubilant](https://github.com/owen-oj)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
