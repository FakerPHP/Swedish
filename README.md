# Faker - Swedish extensions

[![Packagist Downloads](https://img.shields.io/packagist/dm/FakerPHP/Swedish)](https://packagist.org/packages/fakerphp/swedish)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/FakerPHP/Swedish/Continuous%20Integration/main)](https://github.com/FakerPHP/Swedish/actions)

Swedish specific extensions for Faker

## Getting Started

### Installation

```shell
composer require fakerphp/swedish
```

### Documentation

Full documentation can be found over on [fakerphp.github.io](https://fakerphp.github.io).

### Basic Usage

Use `Faker\Swedish\Factory::sweden()` to create and initialize a faker generator with Swedish extensions.

```php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Swedish\Factory::sweden();

echo $faker->name();
// 'Åke Svensson';
```

## License

Faker is released under the MIT License. See [`LICENSE`](LICENSE) for details.
