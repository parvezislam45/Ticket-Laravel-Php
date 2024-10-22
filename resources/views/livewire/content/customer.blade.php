<div>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">User Dashboard</h1>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-white dark:text-white">
                <thead class="text-md text-white uppercase bg-gray-800 dark:bg-gray-800 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                             Name
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
                            Journey Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Submission Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($tickets as $ticket)
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
                                {{ $ticket->journey_date }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->created_at }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                {{ $ticket->status }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                    <td colspan="3">No tickets submitted yet.</td>
                </tr>
            @endforelse
                </tbody>
            </table>
        </div>


</div>
