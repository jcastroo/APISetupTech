<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrecosResource\Pages;
use App\Models\Precos;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components;

class PrecosResource extends Resource
{
    protected static ?string $model = Precos::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected $controller;


    public static function make($controller)
    {
        return new self($controller);
    }

    public function __construct($controller)
    {
        $this->controller = $controller;

        parent::__construct();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\TextInput::make('My Var')
                ->value(fn () => $this->getMyVar())
                ->required()
                ->onChange(fn ($value) => $this->handleMyVarChange($value)),
            ]);
    }

    public function handleMyVarChange($value)
    {
        $this->controller->myVar = $value;
    }

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
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrecos::route('/'),
            'create' => Pages\CreatePrecos::route('/create'),
            'edit' => Pages\EditPrecos::route('/{record}/edit'),
        ];
    }

}
