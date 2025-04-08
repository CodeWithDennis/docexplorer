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

    public Framework $selectedFramework;

    public array $frameworks = [];

    public function mount(): void
    {
        $this->frameworks = Framework::cases();

        // Set Laravel as the default framework
        $this->selectedFramework = Framework::Laravel;

        // Retrieve the selected framework from session if it exists
        $frameworkValue = Session::get('selected_framework');
        if ($frameworkValue) {
            $this->selectedFramework = Framework::from($frameworkValue);
        } else {
            // If no framework is selected in session, set Laravel as default
            Session::put('selected_framework', Framework::Laravel->value);
        }

        // Load framework-specific streak and high score
        $this->loadFrameworkStats();
    }

    public function getRandomLink(): void
    {
        $query = DocumentationLink::query();
        $query->where('framework', $this->selectedFramework);

        $this->link = $query->inRandomOrder()->first();

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

    public function resetHighScore(): void
    {
        $this->streak = 0;
        $this->highScore = 0;
        $this->saveFrameworkStats();
    }

    public function setFramework(string $frameworkValue): void
    {
        $this->selectedFramework = Framework::from($frameworkValue);
        Session::put('selected_framework', $frameworkValue);

        // Reset the discovered link when switching frameworks
        $this->link = null;

        // Load the stats for the newly selected framework
        $this->loadFrameworkStats();
    }

    public function render()
    {
        return view('livewire.documentation-links.random', [
            'frameworks' => Framework::cases(),
        ]);
    }

    private function loadFrameworkStats(): void
    {
        $frameworkKey = $this->selectedFramework->value;
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
