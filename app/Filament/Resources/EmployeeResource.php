<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Employee;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EmployeeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EmployeeResource\RelationManagers;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'RH Management';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('matricule')
                    ->required()
                    ->maxLength(255),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('lastname')
                    ->required()
                    ->maxLength(255),
                TextInput::make('firstname')
                    ->required()
                    ->maxLength(255),
                TextInput::make('father')
                    ->maxLength(255),
                TextInput::make('mother')
                    ->maxLength(255),
                TextInput::make('family_position'),
                DatePicker::make('birth_date')
                    ->required(),
                Select::make('country_id')
                    ->relationship('country','name')
                    ->searchable()
                    ->required(),
                Select::make('state_id')
                    ->relationship('state','name')
                    ->searchable()
                    ->required(),
                Select::make('city_id')
                    ->relationship('city','name')
                    ->searchable()
                    ->required(),
                TextInput::make('territory')
                    ->maxLength(255),
                TextInput::make('sector')
                    ->maxLength(255),
                Select::make('identity_document')
                    ->required()
                    ->options([
                        'Permis de conduire' => 'Permis de conduire',
                        'Passport' => 'Passport',
                        'Carte electeur' => 'Carte electeur',
                    ]),
                TextInput::make('identity_document_number')
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Select::make('marital_status')
                    ->required()
                    ->options([
                        'Célibataire' => 'Célibataire',
                        'Marié(e)' => 'Marié(e)',
                        'Divorcé(e)' => 'Divorcé(e)',
                        'Veuf(ve)' => 'Veuf(ve)',
                    ]),
                Select::make('educationlevel_id')
                    ->relationship('educationlevel','name')
                    ->required(),
                TextInput::make('cnss_number')
                    ->maxLength(255),
                Select::make('category_id')
                    ->relationship('category','name')
                    ->required(),
                Select::make('fonction_id')
                    ->relationship('fonction','name')
                    ->required(),
                Select::make('team_id')
                    ->relationship('team','name')
                    ->required(),
                Select::make('section_id')
                    ->relationship('section','name')
                    ->required(),
                Select::make('service_id')
                    ->relationship('service','name')
                    ->required(),
                Select::make('department_id')
                    ->relationship('department','name')
                    ->required(),
                Select::make('site_id')
                    ->relationship('site','name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('matricule')->sortable()->searchable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('lastname')->sortable()->searchable(),
                TextColumn::make('firstname')->sortable()->searchable(),
                TextColumn::make('fonction.name'),
                TextColumn::make('service.name'),
                TextColumn::make('department.name'),
                TextColumn::make('site.name'),

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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }    
}
