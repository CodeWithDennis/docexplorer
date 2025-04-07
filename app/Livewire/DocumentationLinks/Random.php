<?php

declare(strict_types=1);

namespace App\Livewire\DocumentationLinks;

use App\Models\DocumentationLink;
use Livewire\Component;

final class Random extends Component
{
    public ?DocumentationLink $link = null;

    public function getRandomLink(): void
    {
        $this->link = DocumentationLink::query()->inRandomOrder()->first();
    }

    public function render()
    {
        return view('livewire.documentation-links.random');
    }
}
