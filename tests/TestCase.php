<?php

declare(strict_types=1);

namespace Iceqi\LaravelFlysystem\Obs\Tests;

use Illuminate\Support\Facades\Config;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Iceqi\LaravelFlysystem\Obs\ObsServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * @param mixed $app
     *
     * @return array<class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [ObsServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app): void
    {
        Config::set('filesystems.disks.obs', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
        ]);
        Config::set('filesystems.disks.obs-url', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'url' => 'https://test-url',
        ]);
        Config::set('filesystems.disks.obs-temporary-url', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'temporary_url' => 'https://test-temporary-url',
        ]);
        Config::set('filesystems.disks.obs-bucket-endpoint', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'bucket_endpoint' => true,
        ]);
        Config::set('filesystems.disks.obs-is-cname', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'is_cname' => true,
        ]);
        Config::set('filesystems.disks.obs-read-only', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'read-only' => true,
        ]);
        Config::set('filesystems.disks.obs-prefix-url', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'root' => 'root',
            'prefix' => 'prefix',
        ]);
        Config::set('filesystems.disks.obs-read-only-and-prefix-url', [
            'driver' => 'obs',
            'key' => '',
            'secret' => '',
            'bucket' => 'your-bucket',
            'endpoint' => 'your-endpoint',
            'root' => 'root',
            'prefix' => 'prefix',
            'read-only' => true,
        ]);
    }
}
