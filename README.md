# Actions to Run Laravel Scout from Filamment Panels
[![Latest Version on Packagist](https://img.shields.io/packagist/v/refbytes/filament-laravel-scout.svg?style=flat-square)](https://packagist.org/packages/refbytes/filament-laravel-scout)
[![Total Downloads](https://img.shields.io/packagist/dt/refbytes/filament-laravel-scout.svg?style=flat-square)](https://packagist.org/packages/refbytes/filament-laravel-scout)
[![License](https://img.shields.io/packagist/l/refbytes/filament-laravel-scout)](https://packagist.org/packages/refbytes/filament-laravel-scout)
<hr>

## Installation

Install the package with composer.

```bash
composer composer require refbytes/filament-laravel-scout
```

To add a bulk import action button to a Filament Resource, open the Resource's ListRecords class and add `\Refbytes\FilamentLaravelScout\Actions\ScoutImportResourceAction::make(),` to the `getHeaderActions()` method.
```php
class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            \Refbytes\FilamentLaravelScout\Actions\ScoutImportResourceAction::make(),
        ];
    }
}
```

To add a Filament Bulk Action to only import selected records Filament Table, open the Resource class and add `\Refbytes\FilamentLaravelScout\Actions\ScoutAddResourceAction::make(),` to the `bulkActions()` method on the Resource $table.

```php
public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    \Refbytes\FilamentLaravelScout\Actions\ScoutAddResourceAction::make(),
                ]),
            ]);
    }
```

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any
contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also
simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
