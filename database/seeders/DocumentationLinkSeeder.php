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
}
