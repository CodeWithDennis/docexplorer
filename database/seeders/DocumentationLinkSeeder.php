<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Framework;
use App\Models\DocumentationLink;
use Illuminate\Database\Seeder;

final class DocumentationLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'title' => 'Laravel Documentation',
                'url' => 'https://laravel.com/docs',
                'framework' => Framework::Laravel,
            ],
            [
                'title' => 'Filament Documentation',
                'url' => 'https://filamentphp.com/docs',
                'framework' => Framework::Filament,
            ],
            [
                'title' => 'Livewire Documentation',
                'url' => 'https://livewire.laravel.com/docs',
                'framework' => Framework::Livewire,
            ],
        ];

        foreach ($links as $link) {
            DocumentationLink::create($link);
        }
    }
}
