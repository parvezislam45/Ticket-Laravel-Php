<?php

namespace App\Livewire\Content;

use App\Models\Ticket;
use Livewire\Component;

class BuyTicket extends Component
{ public $name;
    public $address;
    public $state;
    public $city;
    public $country;
    public $journey_date;
    public $phone;
    public $category;
    public $issue;
    public $tickets = [];

    public function mount()
    {
        $this->tickets = Ticket::where('user_id', auth()->id())->get();
    }

    public function submitTicket()
    {
        

        Ticket::create([
        'user_id' => auth()->id(),
        'name' => $this->name, 
        'address' => $this->address, 
        'state' => $this->state, 
        'city' => $this->city,  
        'country' => $this->country, 
        'journey_date' => $this->journey_date, 
        'phone' => $this->phone,  
        'category' => $this->category, 
        'status' => 'pending',
        ]);

      
        $this->tickets = Ticket::where('user_id', auth()->id())->get();

        session()->flash('message', 'Ticket Submitted Successfully');

        return redirect()->route('customer');
    }
    public function render()
    {
        return view('livewire.content.buy-ticket');
    }
}
