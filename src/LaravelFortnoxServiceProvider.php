<?php

namespace BernskioldMedia\LaravelFortnox;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BernskioldMedia\LaravelFortnox\Commands\LaravelFortnoxCommand;

class LaravelFortnoxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-fortnox')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-fortnox_table')
            ->hasCommand(LaravelFortnoxCommand::class);
    }
}
