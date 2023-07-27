<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Candidate;
use Livewire\Attributes\Rule;

class CandidateCreateForm extends Form
{
    #[Rule(['required', 'string', 'max:255', 'min:3'])]
    public ?string $name;

    #[Rule(['required', 'email', 'max:255', 'min:3'])]
    public ?string $email;

    #[Rule(['required', 'max:255', 'min:3'])]
    public ?string $github;

    public function save(): void
    {
        Candidate::create($this->all());
    }
}
