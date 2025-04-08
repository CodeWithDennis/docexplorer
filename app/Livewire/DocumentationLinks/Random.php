<?php

declare(strict_types=1);

namespace App\Livewire\DocumentationLinks;

use App\Enums\Framework;
use App\Models\DocumentationLink;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

final class Random extends Component
{
    public ?DocumentationLink $link = null;

    public int $streak = 0;

    public int $highScore = 0;

    public ?Framework $selectedFramework = null;

    public array $frameworks = [];

    public function mount(): void
    {
        $this->frameworks = Framework::cases();
        $this->streak = Session::get('streak', 0);
        $this->highScore = Session::get('high_score', 0);

        // Retrieve the selected framework from session
        $frameworkValue = Session::get('selected_framework');
        if ($frameworkValue) {
            $this->selectedFramework = Framework::from($frameworkValue);
        }
    }

    public function getRandomLink(): void
    {
        $query = DocumentationLink::query();

        if ($this->selectedFramework instanceof Framework) {
            $query->where('framework', $this->selectedFramework);
        }

        $this->link = $query->inRandomOrder()->first();

        if ($this->link instanceof DocumentationLink) {
            $this->link->increment('discoveries_count');
            $this->streak++;

            if ($this->streak > $this->highScore) {
                $this->highScore = $this->streak;
                Session::put('high_score', $this->highScore);
            }
        }

        Session::put('streak', $this->streak);
    }

    public function resetHighScore(): void
    {
        $this->streak = 0;
        $this->highScore = 0;
        Session::forget(['streak', 'high_score']);
    }

    public function setFramework(?string $frameworkValue): void
    {
        if ($frameworkValue === null) {
            $this->selectedFramework = null;
            Session::forget('selected_framework');
        } else {
            $this->selectedFramework = Framework::from($frameworkValue);
            Session::put('selected_framework', $frameworkValue);
        }
    }

    public function render()
    {
        return view('livewire.documentation-links.random', [
            'frameworks' => Framework::cases(),
        ]);
    }
}
