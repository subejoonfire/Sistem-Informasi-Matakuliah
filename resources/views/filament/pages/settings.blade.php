<x-filament-panels::page>
    @livewireStyles
    <form wire:submit.prevent="save" class="space-y-6">
        {{ $this->form }}

        <x-filament::button type="submit">
            Save Settings
        </x-filament::button>
    </form>
    @livewireScripts
</x-filament-panels::page>
