<?php

namespace Refbytes\FilamentLaravelScout\Console;

use Laravel\Scout\Console\FlushCommand;

class FilamentScoutFlushCommand extends FlushCommand
{
    protected $signature = 'scout:filament-flush 
            {model : Class name of model to bulk import}
            {--c|chunk= : The number of records to import at a time (Defaults to configuration value: `scout.chunk.searchable`)}';
}
