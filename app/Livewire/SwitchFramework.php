<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Enums\Framework;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

final class SwitchFramework extends Component
{
    public Framework $selectedFramework = Framework::Laravel;

    public array $frameworks = [];

    public function mount(Framework $selectedFramework): void
    {
        $this->selectedFramework = $selectedFramework;

        $this->frameworks = Framework::cases();
    }

    public function switchFramework(string $framework): void
    {
        $this->selectedFramework = Framework::tryFrom($framework) ?? Framework::Laravel;

        Session::put('selected_framework', $this->selectedFramework->value);

        $this->dispatch('framework-switched', framework: $this->selectedFramework->value);
    }

    public function render()
    {
        return view('livewire.switch-framework');
    }
}
