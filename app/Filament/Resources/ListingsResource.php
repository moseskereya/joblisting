<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListingsResource\Pages;
use App\Filament\Resources\ListingsResource\RelationManagers;
use App\Models\Listings;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table as TablesTable;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ListingsResource extends Resource
{
    protected static ?string $model = Listings::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Jobs';
    protected int | string | array $columnSpan = 'full';

    public static function form(Form $form): Form
    {
        return $form
        
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                  Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                  Forms\Components\TextInput::make('location')
                        ->required()
                        ->reactive(),
                    ]),
                    Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make()
                        ->schema([       
                            Forms\Components\TextInput::make('company')
                            ->required()
                            ->reactive(),
                     Forms\Components\Select::make('tags')
                     ->options([
                        'PHP'=> 'PHP',
                        'Laravel' => 'Laravel',
                         'Backend' => 'Backend',
                         'Frontend' => 'Frontend', 
                        'JavaScript' => 'JavaScript', 
                         'CSS' =>' CSS', 
                         'HTML'=> 'HTML' ,
                         'Design' => 'Design',
                         'UX/UI' => 'UI/UX', 
                         'Python' => 'Python', 
                         'Ruby' => 'Ruby', 
                         'Mobile' => 'Mobile'
                     ])
                    ->required()
                    ->searchable()
                    ->preload(),
                    Forms\Components\TextInput::make('email')
                    ->required()
                    ->reactive(),
                    Forms\Components\TextInput::make('website')
                    ->required()
                    ->reactive(),
                    Forms\Components\RichEditor::make('description')
                    ->required()
                    ->reactive()
                    ->maxLength(3000),
                        ]), 
                    ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('title')
               ->searchable()
               ->sortable(),
               TextColumn::make('tags'),
               TextColumn::make('company'),
               TextColumn::make('location'),
               TextColumn::make('email'),
               TextColumn::make('website'),
               TextColumn::make('description')
            ])
            ->filters([       
                Tables\Filters\SelectFilter::make('tags')
                ->options([
                    'PHP'=> 'PHP',
                    'Laravel' => 'Laravel',
                     'Backend' => 'Backend',
                     'Frontend' => 'Frontend', 
                    'JavaScript' => 'JavaScript', 
                     'CSS' =>' CSS', 
                     'HTML'=> 'HTML' ,
                     'Design' => 'Design',
                     'UX/UI' => 'UI/UX', 
                     'Python' => 'Python', 
                     'Ruby' => 'Ruby', 
                     'Mobile' => 'Mobile'
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListListings::route('/'),
            'create' => Pages\CreateListings::route('/create'),
            'edit' => Pages\EditListings::route('/{record}/edit'),
        ];
    }    
}
