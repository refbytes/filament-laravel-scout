<?php

namespace Refbytes\FilamentLaravelScout\Actions;

use Filament\Tables\Actions\BulkAction;
use Illuminate\Support\Collection;

class ScoutAddResourceAction extends BulkAction
{
    public static function getDefaultName(): ?string
    {
        return 'add-records-to-scout';
    }

    public function getLabel(): ?string
    {
        return 'Add Records to Scout';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->requiresConfirmation()
            ->icon('heroicon-m-circle-stack')
            ->action(function (Collection $records): void {
                $this->success();
                $records->searchable();

                $this->success();
            });
    }
}
