<?php

namespace Refbytes\FilamentLaravelScout;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentScout implements Plugin
{
    public static function make(): FilamentScout
    {
        return new self();
    }

    public function getId(): string
    {
        return 'filament-laravel-scout';
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {

    }
}
