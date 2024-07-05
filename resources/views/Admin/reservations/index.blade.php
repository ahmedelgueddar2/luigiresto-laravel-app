<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">New Reservations</a>
            </div>
            <table class="w-full text-left border rounded">
                <thead>
                    <tr class="border-y-2">
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Name</th>
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Email</th>
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Date</th>
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Table</th>
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Guest Number</th>
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Menu</th>
                    <th class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                    <tr class="border-y-2">
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">{{ $reservation->email }}</td>
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">{{ $reservation->res_date }}</td>
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">{{ $reservation->table->name }}</td>
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">{{ $reservation->guest_number }}</td>
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">HHHHHH</td>
                        <td class="p-5 text-sm font-medium text-gray-500 whitespace-nowrap text:dark-white">HHHHH</td>
                        <td class="p-5 text-sm font-bold text-gray-500 whitespace-nowrap text:dark-white">
                            <div class=" flex space-x-4">
                                <a href="{{ route('admin.reservations.edit',$reservation->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md text-white">Edit</a>
                                <form action="{{ route('admin.reservations.destroy',$reservation->id) }}"
                                    method="POST" onsubmit="return confirm('Are you sure?'); ">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-md text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
