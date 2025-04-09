<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\DocumentationLink;
use Illuminate\Database\Seeder;

final class DocumentationLinkSeeder extends Seeder
{
    public function laravel(): void
    {
        $laravelDocs = json_decode(file_get_contents(database_path('seeders/data/laravel-docs.json')), true);

        foreach ($laravelDocs as $doc) {
            DocumentationLink::create($doc);
        }
    }

    public function run(): void
    {
        $this->laravel();
    }
}
