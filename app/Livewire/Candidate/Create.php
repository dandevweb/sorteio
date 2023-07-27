<?php

namespace App\Livewire\Candidate;

use App\Livewire\Forms\CandidateCreateForm;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public CandidateCreateForm $form;

    public function render(): View
    {
        return view('livewire.candidate.create');
    }

    public function save(): void
    {
        $this->form->validate();

        $this->form->save();

        $this->dispatch('candidate::created');
    }
}
