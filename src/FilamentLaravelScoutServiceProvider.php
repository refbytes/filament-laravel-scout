<?php

namespace Refbytes\FilamentLaravelScout;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLaravelScoutServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-laravel-scout')
            ->hasViews()
            ->hasCommands([
                \Refbytes\FilamentLaravelScout\Console\FilamentScoutImportCommand::class,
                \Refbytes\FilamentLaravelScout\Console\FilamentScoutFlushCommand::class,
            ]);
    }
}
