<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Framework;
use Illuminate\Database\Eloquent\Model;

final class DocumentationLink extends Model
{
    protected function casts(): array
    {
        return [
            'framework' => Framework::class,
        ];
    }
}
