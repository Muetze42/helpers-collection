# Composer Class

By default, this package using the project path.

<div class="child-columns-3xs max-w-4xl">

[Composer::getComposerJsonData()](#composer-get-composer-json-data)
[Composer::getLockDependencies()](#composer-get-lock-dependencies)
[Composer::getLockDevDependencies()](#composer-get-lock-dev-dependencies)
[Composer::require()](#composer-require)
[Composer::requireDev()](#composer-require-dev)
[Composer::remove()](#composer-remove)
[Composer::removeDev()](#composer-remove-dev)
[Composer::getComposerLockData()](#composer-get-composer-lock-data)
[Composer::isRequire()](#composer-is-require)
[Composer::isRequireDev()](#composer-is-require-dev)
[Composer::getName()](#composer-get-name)
[Composer::getDescription()](#composer-get-description)
[Composer::getLicense()](#composer-get-license)
[Composer::getHomepage()](#composer-get-homepage)
[Composer::getRequirements()](#composer-get-requirements)
[Composer::getDevRequirements()](#composer-get-dev-requirements)
[Composer::getStability()](#composer-stability)
[Composer::getAutoload()](#composer-autoload)
[Composer::getAutoloadPSR4()](#composer-get-autoload-p-s-r4)
[Composer::getAutoloadFiles()](#composer-get-autoload-files)
[Composer::getDevAutoload()](#composer-dev-autoload)
[Composer::getDevAutoloadPSR4()](#composer-get-dev-autoload-p-s-r4)
[Composer::getDevAutoloadFiles()](#composer-get-dev-autoload-files)
[Composer::getKeywords()](#composer-get-leywords)
[Composer::getConfig()](#composer-get-config)
[Composer::getExtras()](#composer-get-extras)
[Composer::getScripts()](#composer-get-scripts)
[Composer::getRepositories()](#composer-get-repositories)
[Composer::getAuthors()](#composer-get-authors)
[Composer::getVendor()](#composer-get-vendor)
[Composer::getPackage()](#composer-get-package)
[Composer::getLockedVersion()](#composer-get-locked-version)
[Composer::setProjectPath()](#composer-set-project-path)
</div>

## `Composer::getComposerJsonData()`

Get composer.json content as array:

```php
use NormanHuth\Helpers\Composer;

return Composer::getComposerJsonData();

/*
{
  "name": "norman-huth/helpers-collection-php",
  "license": "MIT",
  "authors": [
    {
      "name": "Norman Huth",
      "homepage": "https://huth.it"
    }
  ],
  "autoload": {
    "psr-4": {
      "NormanHuth\\Helpers\\": "src/"
    },
    "files": [
      "functions/helpers.php"
    ]
  },
  "require": {
    "php": "^8.0",
    "illuminate/support": "^8.0|^9.0|^10.0",
    "league/commonmark": "^2.2",
    "ext-mbstring": "*",
    "ext-zip": "*"
  },
  "minimum-stability": "dev"
}
*/
```

## `Composer::getLockDependencies()`

Get locks dependencies:

```php
use NormanHuth\Helpers\Composer;

return Composer::getLockDependencies();

/*
{
  "dflydev/dot-access-data": "dev-main",
  "doctrine/inflector": "2.1.x-dev",
  "illuminate/collections": "10.x-dev",
  "illuminate/conditionable": "10.x-dev",
  "illuminate/contracts": "10.x-dev",
  "illuminate/macroable": "10.x-dev",
  "illuminate/support": "10.x-dev",
  "league/commonmark": "dev-main",
  "league/config": "dev-main",
  "nesbot/carbon": "dev-master",
  "nette/schema": "v1.2.x-dev",
  "nette/utils": "dev-master",
  "psr/container": "dev-master",
  "psr/event-dispatcher": "dev-master",
  "psr/simple-cache": "dev-master",
  "symfony/deprecation-contracts": "dev-main",
  "symfony/polyfill-mbstring": "dev-main",
  "symfony/polyfill-php80": "dev-main",
  "symfony/translation": "6.3.x-dev",
  "symfony/translation-contracts": "dev-main",
  "voku/portable-ascii": "2.0.1"
}
*/
```

## `Composer::getLockDevDependencies()`

Get locks development dependencies:

```php
use NormanHuth\Helpers\Composer;

return Composer::getLockDevDependencies();

/*
{
    "phpunit/phpunit": "^10.0"
}
*/
```

## `Composer::require()`

Add or update a package requirement to composer.json:

```php
use NormanHuth\Helpers\Composer;

Composer::require('vendor/package', '^1.0.0');
```

## `Composer::requireDev()`

Add or update a package development requirement to composer.json:

```php
use NormanHuth\Helpers\Composer;

Composer::require('vendor/package', '^1.0.0');
```

## `Composer::remove()`

Remove a package requirement from composer.json:

```php
use NormanHuth\Helpers\Composer;

Composer::remove('vendor/package');
```

## `Composer::removeDev()`

Remove a package development requirement from composer.json:

```php
use NormanHuth\Helpers\Composer;

Composer::removeDev('vendor/package');
```

## `Composer::getComposerLockData()`

Get composer.lock content as array:

```php
use NormanHuth\Helpers\Composer;

Composer::getComposerLockData();
```

## `Composer::isRequire()`

Check if package is in requirements:

```php
use NormanHuth\Helpers\Composer;

return Composer::isRequire('vendor/package');

// false
// ^1.0.0
```

## `Composer::isRequireDev()`

Check if package is in development requirements:

```php
use NormanHuth\Helpers\Composer;

return Composer::isRequireDev('vendor/package');

// false
// ^1.0.0
```

## `Composer::getName()`

Get the name of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getName();

// norman-huth/helpers-collection-php
```

## `Composer::getDescription()`

Get the name of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getDescription();

// Lorem Ipsum
```

## `Composer::getLicense()`

Get the license of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getLicense();

// MIT
```

## `Composer::getHomepage()`

Get the homepage of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getHomepage();

// https://huth.it
```

## `Composer::getRequirements()`

Get the requirements of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getRequirements();

/*
{
  "php": "^8.0",
  "illuminate/support": "^8.0|^9.0|^10.0",
  "league/commonmark": "^2.2",
  "ext-mbstring": "*",
  "ext-zip": "*"
}
*/
```

## `Composer::getDevRequirements()`

Get the development requirements of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getDevRequirements();

/*
{
    "phpunit/phpunit": "^10.0"
}
*/
```

## `Composer::getStability()`

Get the minimum stability of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getStability();

// "stable"
```

## `Composer::getAutoload()`

Get autoload mappings:

```php
use NormanHuth\Helpers\Composer;

return Composer::getAutoload();

/*
{
  "psr-4": {
    "NormanHuth\\Helpers\\": "src/"
  },
  "files": [
    "functions/helpers.php"
  ]
}
*/
```

## `Composer::getAutoloadPSR4()`

Get PSR-4 autoload mappings:

```php
use NormanHuth\Helpers\Composer;

return Composer::getAutoloadPSR4();

/*
{
  "NormanHuth\\Helpers\\": "src/"
}
*/
```

## `Composer::getAutoloadFiles()`

Get autoloaded files:

```php
use NormanHuth\Helpers\Composer;

return Composer::getAutoloadFiles();

/*
{
  "functions/helpers.php"
}
*/
```

## `Composer::getDevAutoload()`

Get development autoload mappings:

```php
use NormanHuth\Helpers\Composer;

return Composer::getDevAutoload();

/*
{
  "psr-4": {
    "NormanHuth\\Helpers\\": "src/"
  },
  "files": [
    "functions/helpers.php"
  ]
}
*/
```

## `Composer::getDevAutoloadPSR4()`

Get PSR-4 development autoload mappings:

```php
use NormanHuth\Helpers\Composer;

return Composer::getDevAutoloadPSR4();

/*
{
  "NormanHuth\\Helpers\\": "src/"
}
*/
```

## `Composer::getDevAutoloadFiles()`

Get autoloaded development files:

```php
use NormanHuth\Helpers\Composer;

return Composer::getDevAutoloadFiles();

/*
{
  "functions/helpers.php"
}
*/
```

## `Composer::getKeywords()`

Get the keywords of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getKeywords();

/*
{
  "php",
  "laravel"
}
*/
```

## `Composer::getConfig()`

Get the configuration of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getKeywords();
```

## `Composer::getExtras()`

Get the configuration of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getExtras();
```

## `Composer::getScripts()`

Get the scripts of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getScripts();
```

## `Composer::getRepositories()`

Get the repositories of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getRepositories();
```

## `Composer::getAuthors()`

Get the authors of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getAuthors();
```

## `Composer::getVendor()`

Get the vendor name of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getVendor();
```

## `Composer::getPackage()`

Get the package name of the package:

```php
use NormanHuth\Helpers\Composer;

return Composer::getPackage();
```

## `Composer::getLockedVersion()`

Return installed version composer package version via lock file:

```php
use NormanHuth\Helpers\Composer;

return Composer::getLockedVersion();

// "1.0.14"
// null
```

## `Composer::setProjectPath()`

Set different composer package path:

```php
use NormanHuth\Helpers\Composer;

Composer::setProjectPath(base_path('vendor/package'));
```
