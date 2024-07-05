<x-admin-layout>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2 ">
              <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Index Table</a>
            </div>
            <div class="bg-slate-100 m-2 p-2 rounded md:w-3/4 ">
                <form action="{{ route('admin.tables.store') }}" method="POST" enctype="multipart/form-data" class="p-2 border-none border border-gray-500">
                    @csrf
                  <div class="mb-4">
                      <span class="text-gray-700">Name</span>
                      <input type="text" name="name" class="p-2 border-none w-full focus:outline-none">
                      @error('name')
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
                    <span class="text-gray-700">Status</span>
                    <select name="status" class="p-2 border-none w-full focus:outline-none">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                          <option value="{{ $status->value }}">{{ $status->name }}</option>                                                      
                        @endforeach
                    </select>
                    @error('status')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                   </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Location</span>
                    <select name="location" class="p-2 border-none w-full focus:outline-none">
                        @foreach (App\Enums\TableLocation::cases() as $location)
                          <option value="{{ $location->value }}">{{ $location->name }}</option>                           
                        @endforeach
                    </select>
                    @error('location')
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
