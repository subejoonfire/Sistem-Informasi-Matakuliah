<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms\Form;
use Filament\Pages\Page;

use Filament\Forms\Components\Card;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class Settings extends Page
{
    use InteractsWithForms;

    public ?array $data = [
        'code',
    ];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static bool $shouldRegisterNavigation = false;
    public static string $view = 'filament.pages.settings';
    public User $settings;

    public function mount(): void
    {
        $this->settings = Auth::user();
        $this->form->fill();
    }
    public function create(): void {}
    public function form(Form $form): Form
    {
        return $form->schema([
            Card::make('Pengaturan User')
                ->schema([
                    TextInput::make('name')
                        ->default(Auth::user()->name)
                        ->label('Nama')
                        ->required(),
                    TextInput::make('email')
                        ->default(Auth::user()->email)
                        ->label('Email')
                        ->required(),
                    TextInput::make('password')
                        ->label('Password')
                ])->statePath('data'),
        ]);
    }
    public function save(): void
    {
        $data = $this->form->getState();

        $user = Auth::user();

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        try {
            $user->save($data);
            Notification::make()
                ->title('Settings saved successfully.')
                ->success()
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->title('Failed to save settings.')
                ->danger()
                ->send();
        }
    }
}
