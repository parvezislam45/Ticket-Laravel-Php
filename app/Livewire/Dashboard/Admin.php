<?php

namespace App\Livewire\Dashboard;

use App\Models\Ticket;
use Livewire\Component;

class Admin extends Component
{
    public function render()
    {
        $tickets = Ticket::all();
        return view('livewire.admin.dashboard', compact('tickets'));
    }

    public function acceptTicket($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = 'accepted';
        $ticket->save();
    }

    public function rejectTicket($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = 'rejected';
        $ticket->save();
    }
}
