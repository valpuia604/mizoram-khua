# Lists of district & villages in Mizoram State

[![Latest Version on Packagist](https://img.shields.io/packagist/v/valpuia/mizoram-khua.svg?style=flat-square)](https://packagist.org/packages/valpuia/mizoram-khua)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/valpuia/mizoram-khua/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/valpuia/mizoram-khua/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/valpuia/mizoram-khua.svg?style=flat-square)](https://packagist.org/packages/valpuia/mizoram-khua)

Hei hi Mizoram a mi ten kan district leh villages (khua) te awlsam tak a kan neih theih nan, manual entry ngailo in.


## Installation

You can install the package via composer:

```bash
composer require valpuia/mizoram-khua

php artisan mizoram-khua:install
```
Install hian migrations file a published nghal a chuan `migrate` run nghal turin a rawn zawt ang che.

A hnuai a command hmang hian engtik lai pawhin migration file i publish thei ang:

```bash
php artisan vendor:publish --tag="mizoram-khua-migrations"
php artisan migrate
```

## Running seeder
A hnuai a command hmang hian district leh village te database-ah a in dahlut ang.

```bash
php artisan mizoram-khua:seed
```

## Usage

Models atan `MizoramDistrict` leh `MizoramVillage` hman ani, a hnuaiah detail in
```php
// \App\Models\MizoramDistrict.php
class MizoramDistrict extends Model
{
    protected $guarded = [];

    public function mizoramVillages(): HasMany
    {
        return $this->hasMany(MizoramVillage::class);
    }
}

// \App\Models\MizoramVillage.php
class MizoramVillage extends Model
{
    protected $guarded = [];

    public function mizoramDistrict(): BelongsTo
    {
        return $this->belongsTo(MizoramDistrict::class);
    }
}
```

Awlsam takin a hnuai a mi ang hian i hmang thei nghal ang
```php
use Valpuia\MizoramKhua\Models\MizoramDistrict;
use Valpuia\MizoramKhua\Models\MizoramVillage;

MizoramVillage::with('mizoramDistrict')
    // ->where('mizoram_district_id', 1)
    // ->where('name', 'Aibawk')
    ->get();

MizoramDistrict::with('mizoramVillages')
    ->where('name', 'Aizawl')
    ->get();
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lalhmangaihenga](https://github.com/valpuia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
