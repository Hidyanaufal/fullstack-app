<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Name'),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->label('Email'),
                TextInput::make('password')
                    ->required()
                    ->password()
                    ->label('Password'),
            ]);
    }
}
