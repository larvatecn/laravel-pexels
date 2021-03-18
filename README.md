# laravel-pexels

This is a baidu cloud expansion for the laravel

[![PHP Composer](https://github.com/larvatecn/laravel-pexels/actions/workflows/php.yml/badge.svg)](https://github.com/larvatecn/laravel-pexels/actions/workflows/php.yml)
[![License](https://poser.pugx.org/larva/laravel-pexels/license.svg)](https://packagist.org/packages/larva/laravel-pexels)
[![Latest Stable Version](https://poser.pugx.org/larva/laravel-pexels/v/stable.png)](https://packagist.org/packages/larva/laravel-pexels)
[![Total Downloads](https://poser.pugx.org/larva/laravel-pexels/downloads.png)](https://packagist.org/packages/larva/laravel-pexels)


## 环境需求

- PHP >= 7.2

## Installation

```bash
composer require larva/laravel-pexels -vv
```

## config
添加设置到 `services.php`

```php
    'pexels'=>[
        'api_key'=>'abcd'
    ]
```

## Use

```php
try {
	$results = \Larva\Pexels\Pexels::image()->search('abcd');
	print_r($results);
} catch (\Exception $e) {
	print_r($e->getMessage());
}

try {
	$results = \Larva\Pexels\Pexels::video()->search('abcd');
	print_r($results);
} catch (\Exception $e) {
	print_r($e->getMessage());
}

try {
	$results = \Larva\Pexels\Pexels::get('/v1/abcd');
	print_r($results);
} catch (\Exception $e) {
	print_r($e->getMessage());
}
```
