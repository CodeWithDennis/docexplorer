<?php

declare(strict_types=1);

use App\Enums\Framework;
use App\Livewire\SwitchFramework;

use function Pest\Livewire\livewire;

it('initializes with the correct framework', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->assertSee($framework->name);
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('can switch between frameworks', function (Framework $from, Framework $to): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $from])
        ->assertSee($from->name)
        ->call('switchFramework', $to->value)
        ->assertSee($to->name);
})->with([
    'Laravel to FilamentPHP' => [Framework::Laravel, Framework::Filament],
    'FilamentPHP to Livewire' => [Framework::Filament, Framework::Livewire],
    'Livewire to Laravel' => [Framework::Livewire, Framework::Laravel],
]);
