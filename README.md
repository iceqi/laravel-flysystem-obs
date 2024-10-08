# Laravel Flysystem OBS

fix: 修复 temporaryUploadUrl 方法中的 headers 处理逻辑

问题描述:
在原有的 `temporaryUploadUrl` 方法中，当 `$options` 包含 `headers` 时，这些头部信息会被错误地包含在 `QueryParams` 中，而不是在 `Headers` 中传递给 `createSignedUrl` 方法。



OBS storage filesystem for Laravel based on [zing/flysystem-obs](https://github.com/zingimmick/flysystem-obs)

[![Build Status](https://github.com/zingimmick/laravel-flysystem-obs/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/zingimmick/laravel-flysystem-obs/actions)
[![Code Coverage](https://codecov.io/gh/zingimmick/laravel-flysystem-obs/branch/master/graph/badge.svg)](https://codecov.io/gh/zingimmick/laravel-flysystem-obs)
[![Latest Stable Version](https://poser.pugx.org/zing/laravel-flysystem-obs/v/stable.svg)](https://packagist.org/packages/zing/laravel-flysystem-obs)
[![Total Downloads](https://poser.pugx.org/zing/laravel-flysystem-obs/downloads)](https://packagist.org/packages/zing/laravel-flysystem-obs)
[![Latest Unstable Version](https://poser.pugx.org/zing/laravel-flysystem-obs/v/unstable.svg)](https://packagist.org/packages/zing/laravel-flysystem-obs)
[![License](https://poser.pugx.org/zing/laravel-flysystem-obs/license)](https://packagist.org/packages/zing/laravel-flysystem-obs)

> **Requires**
> - **[PHP 8.0+](https://php.net/releases/)**
> - **[Laravel 9.0+](https://laravel.com/docs/releases)**

## Version Information

| Version | Illuminate | PHP Version | Status                  |
|:--------|:-----------|:------------|:------------------------|
| 2.x     | 9.x        | >= 8.0      | Active support :rocket: |
| 1.x     | 6.x - 8.x  | >= 7.2      | Active support          |

Require Laravel Flysystem OBS using [Composer](https://getcomposer.org):

```bash
composer require zing/laravel-flysystem-obs
```

## Configuration

```php
return [
    // ...
    'disks' => [
        // ...
        'obs' => [
            'driver' => 'obs',
            'root' => '',
            'key' => env('OBS_KEY'),
            'secret' => env('OBS_SECRET'),
            'bucket' => env('OBS_BUCKET'),
            'endpoint' => env('OBS_ENDPOINT'),
            'is_cname' => env('OBS_IS_CNAME', false),
            'security_token' => env('OBS_SECURITY_TOKEN'),
        ],
    ]
];
```

## Environment

```dotenv
OBS_KEY=
OBS_SECRET=
OBS_BUCKET=
OBS_ENDPOINT=
OBS_IS_CNAME=false
OBS_SECURITY_TOKEN=
```

## License

Laravel Flysystem OBS is an open-sourced software licensed under the [MIT license](LICENSE).
