<?php

declare(strict_types=1);

namespace App\Livewire\DocumentationLinks;

use App\Models\DocumentationLink;
use Livewire\Component;

final class Random extends Component
{
    public ?DocumentationLink $link = null;

    public int $streak = 0;

    public int $highScore = 0;

    public function mount(): void
    {
        $this->highScore = session('high_score', 0);
    }

    public function getRandomLink(): void
    {
        $this->link = DocumentationLink::query()->inRandomOrder()->first();

        if ($this->link->exists()) {
            $this->link->increment('discoveries_count');
            $this->streak++;

            if ($this->streak > $this->highScore) {
                $this->highScore = $this->streak;

                session(['high_score' => $this->highScore]);
            }
        }
    }

    public function render()
    {
        return view('livewire.documentation-links.random');
    }
}
