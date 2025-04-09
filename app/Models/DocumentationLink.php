<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Framework;
use Database\Factories\DocumentationLinkFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class DocumentationLink extends Model
{
    /** @use HasFactory<DocumentationLinkFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'framework' => Framework::class,
        ];
    }
}
