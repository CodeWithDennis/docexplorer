<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Framework;
use App\Models\DocumentationLink;
use Illuminate\Database\Seeder;

final class DocumentationLinkSeeder extends Seeder
{
    public function run(): void
    {

        foreach ($this->getLaravelLinks() as $link) {
            DocumentationLink::create([
                'title' => $link['title'],
                'url' => $link['url'],
                'framework' => Framework::Laravel,
                'category' => $link['category'],
            ]);
        }

        foreach ($this->getFilamentPHPLinks() as $link) {
            DocumentationLink::create([
                'title' => $link['title'],
                'url' => $link['url'],
                'framework' => Framework::Filament,
                'category' => $link['category'],
            ]);
        }

        foreach ($this->getLivewireLinks() as $link) {
            DocumentationLink::create([
                'title' => $link['title'],
                'url' => $link['url'],
                'framework' => Framework::Livewire,
                'category' => $link['category'],
            ]);
        }
    }

    /**
     * Get Laravel documentation links.
     *
     * @return array<int, array<string, string>>
     */
    private function getLaravelLinks(): array
    {
        return [
            [
                'url' => 'https://laravel.com/docs/12.x/installation',
                'title' => 'Example A',
                'category' => 'Examples',
            ],
            [
                'url' => 'https://laravel.com/docs/12.x/installation',
                'title' => 'Example B',
                'category' => 'Examples',
            ],
            [
                'url' => 'https://laravel.com/docs/12.x/installation',
                'title' => 'Example C',
                'category' => 'Examples',
            ],
        ];
    }

    /**
     * Get FilamentPHP documentation links.
     *
     * @return array<int, array<string, string>>
     */
    private function getFilamentPHPLinks(): array
    {
        return [
            [
                'url' => 'https://filamentphp.com/docs/1.x/installation',
                'title' => 'Example A',
                'category' => 'Examples',
            ],
            [
                'url' => 'https://filamentphp.com/docs/1.x/installation',
                'title' => 'Example B',
                'category' => 'Examples',
            ],
            [
                'url' => 'https://filamentphp.com/docs/1.x/installation',
                'title' => 'Example C',
                'category' => 'Examples',
            ],
        ];
    }

    /**
     * Get Livewire documentation links.
     *
     * @return array<int, array<string, string>>
     */
    private function getLivewireLinks(): array
    {
        return [
            [
                'url' => 'https://laravel.com/docs/12.x/installation',
                'title' => 'Example A',
                'category' => 'Examples',
            ],
            [
                'url' => 'https://laravel.com/docs/12.x/installation',
                'title' => 'Example B',
                'category' => 'Examples',
            ],
            [
                'url' => 'https://laravel.com/docs/12.x/installation',
                'title' => 'Example C',
                'category' => 'Examples',
            ],
        ];
    }
}
