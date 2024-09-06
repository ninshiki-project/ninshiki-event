<?php

namespace MarJose123\NinshikiEvent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MarJose123\NinshikiEvent\Commands\NinshikiEventCommand;

class NinshikiEventServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ninshiki-event')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ninshiki_event_table')
            ->hasCommand(NinshikiEventCommand::class);
    }
}
