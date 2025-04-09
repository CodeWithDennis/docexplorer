<?php

declare(strict_types=1);

use App\Enums\Framework;
use App\Livewire\DiscoverDocumentation;
use App\Livewire\SwitchFramework;
use App\Models\DocumentationLink;

use function Pest\Livewire\livewire;

it('displays Laravel as the default framework title', function (): void {
    livewire(SwitchFramework::class, ['selectedFramework' => Framework::Laravel])
        ->assertSee('Laravel');
});

it('updates the title when switching frameworks', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => Framework::Laravel])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->label());

    livewire(DiscoverDocumentation::class)
        ->assertSee($framework->label());
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('updates the description when switching frameworks', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => Framework::Laravel])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->label());

    livewire(DiscoverDocumentation::class)
        ->assertSee('Level up your '.$framework->label().' knowledge with random documentation discoveries!');
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('can discover documentation', function (Framework $framework): void {
    $link = DocumentationLink::factory()->create([
        'framework' => $framework,
    ]);

    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->label());

    livewire(DiscoverDocumentation::class)
        ->call('getRandomLink')
        ->assertSee($link->title)
        ->assertSee($link->url);
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('increments the discoveries count when a link is viewed', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->label());

    $link = DocumentationLink::factory()->create([
        'framework' => $framework,
    ]);

    livewire(DiscoverDocumentation::class)
        ->call('getRandomLink')
        ->assertSee($link->title)
        ->assertSee($link->url);

    expect($link->refresh()->discoveries_count)
        ->toBe(1);
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('can not discover documentation links from other frameworks', function (Framework $framework): void {
    $link = DocumentationLink::factory()->create([
        'framework' => collect(Framework::cases())->where('value', '!=', $framework->value)->random(),
    ]);

    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->label());

    livewire(DiscoverDocumentation::class)
        ->call('getRandomLink')
        ->assertDontSee($link->title)
        ->assertDontSee($link->url);
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('increases the streak when a link is discovered', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->call('switchFramework', $framework->value)
        ->assertSee($framework->label());

    livewire(DiscoverDocumentation::class)
        ->call('getRandomLink')
        ->assertSee('1')
        ->call('getRandomLink')
        ->assertSee('2')
        ->call('getRandomLink')
        ->assertSee('3');
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);

it('increases the high score only when streak exceeds it', function (Framework $framework): void {
    livewire(SwitchFramework::class, ['selectedFramework' => $framework])
        ->call('switchFramework', $framework->value);

    // Initial high score of 2
    livewire(DiscoverDocumentation::class)
        ->call('getRandomLink')
        ->assertSee('1')
        ->assertSee('1')
        ->call('getRandomLink')
        ->assertSee('2')
        ->assertSee('2')
        // Reset streak but keep high score
        ->set('streak', 0)
        ->assertSee('0')
        ->assertSee('2')
        // High score should stay until streak exceeds it
        ->call('getRandomLink')
        ->assertSee('1')
        ->assertSee('2')
        ->call('getRandomLink')
        ->assertSee('2')
        ->assertSee('2')
        ->call('getRandomLink')
        ->assertSee('3')
        ->assertSee('3');
})->with([
    'Laravel' => Framework::Laravel,
    'FilamentPHP' => Framework::Filament,
    'Livewire' => Framework::Livewire,
]);
