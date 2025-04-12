<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Enums\Framework;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

final class ResetHighscore extends Component
{
    public Framework $selectedFramework;

    public function mount(Framework $selectedFramework): void
    {
        $this->selectedFramework = $selectedFramework;
    }

    public function resetHighscore(): void
    {
        $frameworkKey = $this->selectedFramework->value;
        Session::put("high_score_{$frameworkKey}", 0);
        Session::put("streak_{$frameworkKey}", 0);

        $this->dispatch('highscore-reset');
    }

    public function render()
    {
        return view('livewire.reset-highscore');
    }
}
