<?php

namespace Refbytes\FilamentLaravelScout\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Artisan;

class ScoutImportResourceAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'import-to-scout';
    }

    public function getLabel(): ?string
    {
        return 'Batch Import to Scout';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->form([
                TextInput::make('chunk_size')
                    ->numeric()
                    ->placeholder('500')
                    ->default(500),
                Toggle::make('flush')
                    ->label('Flush Records First?')
                    ->default(false),
            ])
            ->icon('heroicon-m-circle-stack')
            ->action(function (array $data): void {

                $model = $this->getLivewire()->getModel();

                if ($data['flush'] ?? false) {
                    Artisan::call('scout:filament-flush', [
                        'model' => $model,
                    ]);
                }

                Artisan::call('scout:filament-import', [
                    'model' => $model,
                    '--chunk' => $data['chunk_size'] ?? 500,
                ]);

                $this->success();
            });
    }
}
