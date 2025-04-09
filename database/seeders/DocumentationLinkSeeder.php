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
        $frameworks = Framework::cases();

        foreach ($frameworks as $framework) {
            if (! file_exists(database_path('seeders/data/' . $framework->value . '-docs.json'))) {
                continue;
            }

            $laravelDocs = json_decode(file_get_contents(database_path('seeders/data/' . $framework->value . '-docs.json')), true);

            foreach ($laravelDocs as $doc) {
                DocumentationLink::create($doc);
            }
        }
    }
}
