<?php

namespace App\Livewire\Content;

use App\Models\Ticket;
use Livewire\Component;

class Customer extends Component
{
    public $title;
    public $issue;
    public $tickets = [];

    public function mount()
    {
        $this->tickets = Ticket::where('user_id', auth()->id())->get();
    }

    public function submitTicket()
    {
        $this->validate([
            'title' => 'required',
            'issue' => 'required', 
        ]);

        Ticket::create([
            'user_id' => auth()->id(),
            'title' => $this->title,  
            'description' => $this->issue,  
        ]);

  
        $this->tickets = Ticket::where('user_id', auth()->id())->get();

        session()->flash('message', 'Ticket Submitted Successfully');
    }

    public function render()
    {
        return view('livewire.content.customer', [
            'tickets' => $this->tickets
        ]);
    }
}
