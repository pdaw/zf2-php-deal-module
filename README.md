Zend Framework 2 module for [php-deal library](https://github.com/lisachenko/php-deal).

[![Total Downloads](https://poser.pugx.org/pdaw/zf2-php-deal-module/downloads)](https://packagist.org/packages/pdaw/zf2-php-deal-module)

Installation
------------

Composer

```
composer require pdaw/zf2-php-deal-module
```

Load module in zend application config

```
'PhpDealModule'
```

Feel free to change default configuration

```
'php-deal-module' => [
    'debug'    => true,
    'appDir'   => $basicDirectory . '/module/',
    'cacheDir' => $basicDirectory . '/data/php-deal-cache/'
],
```

where $basicDirectory is [APPLICATION_PATH](https://github.com/pdaw/zf2-php-deal-module/blob/master/config/module.config.php#L3) 

[Usage](https://github.com/lisachenko/php-deal/blob/master/README.md)
-----
