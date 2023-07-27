<?php

namespace App\Livewire;

use App\Models\Candidate;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public function mount(): void
    {
    }

    public function placeholder(): string
    {
        return <<<'HTML'
            <div class="p-5 font-bold text-center text-white bg-pink-500 rounded">
                Carregando...
            </div>
        HTML;
    }

    public function render(): View
    {
        return view('livewire.sorteio');
    }

    #[On('candidate::created')]
    public function run(): void
    {

        $candidates = Candidate::query()->inRandomOrder()->get();

        foreach ($candidates as $candidate) {
            $this->stream('winner', $candidate->name, true);
            usleep(15000);
        }

        $winner = Candidate::query()->inRandomOrder()->first();
        $this->winner = $winner->name;

        $this->js('confetti');
    }
}
