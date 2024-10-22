<?php

namespace App\Livewire\User;

use App\Models\Ticket;
use Livewire\Component;

class SubmitTicket extends Component
{
    public $title, $description;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ];

    public function submitTicket()
    {
        $this->validate();

        Ticket::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Ticket submitted successfully.');
    }
    public function render()

    {
        return view('livewire.user.submit-ticket');
    }
}
