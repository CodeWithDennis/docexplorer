<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Enums\Framework;
use App\Models\DocumentationLink;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

final class DiscoverDocumentation extends Component
{
    public Framework $selectedFramework = Framework::Laravel;

    public ?DocumentationLink $link = null;

    public int $streak = 0;

    public int $highScore = 0;

    protected $listeners = [
        'framework-switched' => 'handleFrameworkSwitch'
    ];

    public function mount(): void
    {
        $this->selectedFramework = Framework::from(Session::get('selected_framework', $this->selectedFramework->value));

        $this->loadFrameworkStats();
    }

    public function getRandomLink(): void
    {
        $this->link = DocumentationLink::query()
            ->where('framework', $this->selectedFramework)
            ->inRandomOrder()
            ->first();

        if ($this->link instanceof DocumentationLink) {
            $this->link->increment('discoveries_count');
            $this->streak++;

            if ($this->streak > $this->highScore) {
                $this->highScore = $this->streak;
                $this->saveFrameworkStats();
            }
        }

        $this->saveFrameworkStats();
    }

    public function handleFrameworkSwitch(string $framework): void
    {
        $this->selectedFramework = Framework::from($framework);
        $this->loadFrameworkStats();
    }

    public function render()
    {
        return view('livewire.discover-documentation');
    }

    private function loadFrameworkStats(): void
    {
        $frameworkKey = $this->selectedFramework->value;

        $this->link = null;
        $this->streak = Session::get("streak_{$frameworkKey}", 0);
        $this->highScore = Session::get("high_score_{$frameworkKey}", 0);
    }

    private function saveFrameworkStats(): void
    {
        $frameworkKey = $this->selectedFramework->value;

        Session::put("streak_{$frameworkKey}", $this->streak);
        Session::put("high_score_{$frameworkKey}", $this->highScore);
    }
}
