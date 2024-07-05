<x-admin-layout>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2 ">
              <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Index Reservation</a>
            </div>
            <div class="bg-slate-100 m-2 p-2 rounded md:w-3/4 ">
                <form action="{{ route('admin.reservations.store') }}" method="POST" enctype="multipart/form-data" class="p-2 border-none border border-gray-500">
                    @csrf
                  <div class="mb-4">
                      <span class="text-gray-700">First Name</span>
                      <input type="text" name="first_name" class="p-2 border-none w-full focus:outline-none">
                      @error('first_name')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                    <span class="text-gray-700">Last Name</span>
                    <input type="text" name="last_name" class="p-2 border-none w-full focus:outline-none">
                    @error('last_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-4">
                    <span class="text-gray-700">Email</span>
                    <input type="email" name="email" class="p-2 border-none w-full focus:outline-none">
                    @error('email')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-4">
                    <span class="text-gray-700">Phone Number</span>
                    <input type="text" name="tel_number" class="p-2 border-none w-full focus:outline-none">
                    @error('tel_number')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-4">
                    <span class="text-gray-700">Reservation Date</span>
                    <input type="datetime-local" name="res_date" class="p-2 border-none w-full focus:outline-none">
                    @error('res_date')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Guest Number</span>
                    <input type="number" name="guest_number" class="p-2 border-none w-full focus:outline-none">
                    @error('guest_number')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                   </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Table</span>
                    <select name="table_id" class="p-2 border-none w-full focus:outline-none">
                        @foreach ($tables as $table)
                          <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                        @endforeach
                    </select>
                    @error('table_id')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                   <div class="mt-5 p-4">
                    <button type="submit" class="px-4 text-white py-2 rounded-md bg-indigo-500 hover:bg-indigo-700">Store</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
