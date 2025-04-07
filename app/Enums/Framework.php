<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * Enum representing different PHP frameworks used in the application.
 */
enum Framework: string
{
    case Laravel = 'laravel';
    case Filament = 'filament';
    case Livewire = 'livewire';

    public function label(): string
    {
        return match ($this) {
            self::Laravel => 'Laravel',
            self::Filament => 'FilamentPHP',
            self::Livewire => 'Livewire',
        };
    }
}
