<?php

declare(strict_types=1);

use App\Enums\Framework;
use App\Livewire\DiscoverDocumentation;
use App\Livewire\SwitchFramework;

use function Pest\Livewire\livewire;

it('can view data-pan attributes for discover buttons', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->name);

    livewire(DiscoverDocumentation::class)
        ->assertSee('data-pan="discover-'.$framework->value.'-btn"', false);
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('can view data-pan attributes for switch buttons', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->assertSee('data-pan="switch-'.$framework->value.'-btn"', false);
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);
