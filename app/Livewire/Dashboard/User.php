<?php

namespace App\Livewire\Dashboard;

use App\Models\Ticket;
use Livewire\Component;

class User extends Component
{

    public $issue;

    public function submitTicket()
    {
        $this->validate(['issue' => 'required']);
        Ticket::create([
            'user_id' => auth()->id(),
            'issue' => $this->issue,
            'status' => 'pending',
        ]);
        session()->flash('message', 'Ticket Submitted Successfully');
    }
    public function render()
    {
        return view('livewire.dashboard.user');
    }
}
