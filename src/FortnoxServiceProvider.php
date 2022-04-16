<?php

namespace BernskioldMedia\Fortnox;

use BernskioldMedia\Fortnox\Exceptions\InvalidConfiguration;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FortnoxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-fortnox')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind(FortnoxClient::class, function () {
            return FortnoxClient::fromConfig(config('fortnox'));
        });

        $this->app->bind(Fortnox::class, function () {
            $this->protectAgainstInvalidConfiguration(config('fortnox'));
            $client = app(FortnoxClient::class);

            return new Fortnox($client);
        });

        $this->app->alias(Fortnox::class, 'laravel-fortnox');
    }

    protected function protectAgainstInvalidConfiguration(array $config): void
    {
        if (empty($config['access_token'])) {
            throw InvalidConfiguration::missingAccessToken();
        }

        if (empty($config['client_secret'])) {
            throw InvalidConfiguration::missingClientSecret();
        }

        if (empty($config['base_url'])) {
            throw InvalidConfiguration::missingBaseUrl();
        }
    }
}
