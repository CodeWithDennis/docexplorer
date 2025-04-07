<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Framework;
use App\Models\DocumentationLink;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DocumentationLink>
 */
final class DocumentationLinkFactory extends Factory
{
    protected $model = DocumentationLink::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'url' => fake()->url(),
            'framework' => Framework::Laravel,
            'description' => fake()->paragraph(),
        ];
    }
}
