<?php

namespace Refbytes\FilamentLaravelScout\Console;

use Laravel\Scout\Console\ImportCommand;

class FilamentScoutImportCommand extends ImportCommand
{
    protected $signature = 'scout:filament-import 
            {model : Class name of model to bulk import}
            {--c|chunk= : The number of records to import at a time (Defaults to configuration value: `scout.chunk.searchable`)}';
}
