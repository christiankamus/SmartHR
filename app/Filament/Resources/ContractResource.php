<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contract;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContractResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContractResource\RelationManagers;
use Filament\Forms\Components\Select;

class ContractResource extends Resource
{
    protected static ?string $model = Contract::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'RH Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('contract_type_id')
                            ->relationship('contract_type','name')
                            ->required(),
                        Select::make('employee_id')
                            ->relationship('employee','matricule')
                            ->required(),
                        Select::make('entry_type')
                            ->required()
                            ->options([
                                'Embauche' => 'Embauche',
                                'Transfert' => 'Transfert',
                            ]),
                        DatePicker::make('start_date')
                            ->required(),
                        DatePicker::make('end_date'),
                        Select::make('termination_reason')
                            ->options([
                                'Démission' => 'Démission',
                                'Desertion' => 'Desertion',
                                'Licenciement avec préavis' => 'Licenciement avec préavis',
                                'Licenciement sans préavis' => 'Licenciement sans préavis',
                                'Retraite' => 'Retraite',
                            ]),

                        TextInput::make('comments')
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contract_type.name'),
                Tables\Columns\TextColumn::make('employee.name'),
                Tables\Columns\TextColumn::make('entry_type'),
                Tables\Columns\TextColumn::make('start_date')
                    ->date(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date(),
                Tables\Columns\TextColumn::make('termination_reason'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => Pages\ListContracts::route('/'),
            'create' => Pages\CreateContract::route('/create'),
            'edit' => Pages\EditContract::route('/{record}/edit'),
        ];
    }    
}
