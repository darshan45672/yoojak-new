<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutInstitutionResource\Pages;
use App\Filament\Resources\AboutInstitutionResource\RelationManagers;
use App\Models\AboutInstitution;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutInstitutionResource extends Resource
{
    protected static ?string $model = AboutInstitution::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('content')->required()->placeholder('Write about our institution')->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
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
                ]),
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
            'index' => Pages\ListAboutInstitutions::route('/'),
            'create' => Pages\CreateAboutInstitution::route('/create'),
            'edit' => Pages\EditAboutInstitution::route('/{record}/edit'),
        ];
    }
}
