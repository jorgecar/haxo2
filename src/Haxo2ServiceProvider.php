<?php

namespace Jorgecar\Haxo2;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jorgecar\Haxo2\Commands\Haxo2Command;

class Haxo2ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('haxo2')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_haxo2_table')
            ->hasCommand(Haxo2Command::class);
    }
}
