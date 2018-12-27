[![Latest Stable Version](https://poser.pugx.org/juanmicl/jsonstore-php/v/stable)](https://packagist.org/packages/juanmicl/jsonstore-php)[![Total Downloads](https://poser.pugx.org/juanmicl/jsonstore-php/downloads)](https://packagist.org/packages/juanmicl/jsonstore-php)[![Latest Unstable Version](https://poser.pugx.org/juanmicl/jsonstore-php/v/unstable)](https://packagist.org/packages/juanmicl/jsonstore-php)![compatible](https://img.shields.io/badge/PHP%207-Compatible-brightgreen.svg)
# JsonStore-PHP
PHP Wrapper for jsonstore.io
## Installation
### Using Composer
```sh
composer require juanmicl/jsonstore-php
```
```php
require __DIR__.'/../vendor/autoload.php';
$jsonstore = new \juanmicl\jsonstorePHP\JsonStore();
```
If you want to test new and possibly unstable code that is in the master branch, and which hasn't yet been released, then you can use master instead (at your own risk):
```sh
composer require juanmicl/jsonstore-php dev-master
```
### I don't have Composer
You can download it [here](https://getcomposer.org/download/).
#### _Warning about moving data to a different server_
_Composer checks your system's capabilities and selects libraries based on your **current** machine (where you are running the `composer` command). So if you run Composer on machine `A` to install this library, it will check machine `A`'s capabilities and will install libraries appropriate for that machine (such as installing the PHP 7+ versions of various libraries). If you then move your whole installation to machine `B` instead, it **will not work** unless machine `B` has the **exact** same capabilities (same or higher PHP version and PHP extensions)! Therefore, you should **always** run the Composer-command on your intended target machine instead of your local machine._
## Examples
All examples can be found [here](https://github.com/juanmicl/jsonstore-php/tree/master/examples).
You can just copy this folder inside your project and test the scripts.
