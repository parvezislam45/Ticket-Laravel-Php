<div>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">User Dashboard Link</h1>
    <form wire:submit.prevent="submitTicket">
        <textarea wire:model="issue" placeholder="Describe your issue" class="textarea textarea-bordered w-full"></textarea>
        <button type="submit" class="btn btn-primary mt-2">Submit Ticket</button>
    </form>
    <h2 class="mt-6 text-xl font-bold">Your Tickets</h2>
    <table class="table w-full">
        <thead>
            <tr>
                <th>Issue</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->issue }}</td>
                <td>{{ $ticket->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
