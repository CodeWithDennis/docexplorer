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
        $laravelDocs = json_decode(file_get_contents(database_path('seeders/data/laravel-docs.json')), true);

        foreach ($laravelDocs as $doc) {
            DocumentationLink::create($doc);
        }
    }
}
