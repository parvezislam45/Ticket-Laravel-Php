<div>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-white dark:text-white">
                <thead class="text-md text-white uppercase bg-gray-800 dark:bg-gray-800 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Customer Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Journey Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Submission Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $ticket->user->name }}
                            </th>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->category }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->address }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->phone }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->status }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->journey_date }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->created_at }}
                            </td>
                            <td class="flex items-center px-6 py-4 gap-5">
                            <button wire:click="acceptTicket({{ $ticket->id }})" class="btn btn-circle btn-outline">
                                <svg  xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check w-8 h-8" viewBox="0 0 16 16" data-darkreader-inline-color=""> <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" fill="white"></path> </svg>
                                </button>
                                <button wire:click="rejectTicket({{ $ticket->id }})"  class="btn btn-circle btn-outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M6 18L18 6M6 6l12 12" /></svg>
                                </button>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>