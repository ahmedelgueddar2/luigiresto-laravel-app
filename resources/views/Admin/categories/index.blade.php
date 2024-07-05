<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
              <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">New Category</a>
            </div>
            <table class="w-full text-left border rounded">
                <thead>
                  <tr class="border-y-2">
                    <th class="p-5 text-sm font-medium text-gray-500  text:dark-white">Name</th>
                    <th class="p-5 text-sm font-medium text-gray-500  text:dark-white">Image</th>
                    <th class="p-5 text-sm font-medium text-gray-500  text:dark-white">Description</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                  <tr class="border-y-2">
                    <td class="p-5 text-sm font-medium text-gray-500  text:dark-white">{{ $category->name }}</ class="py-2"></td>
                    <td class="p-5">
                      <img src="{{ asset('images/categories/'.$category->image)}}" class="w-40 inline-block">
                    </td>
                    <td class="p-5 text-sm font-medium text-gray-500 text:dark-white max-w-[400px]">{{ $category->description }}</td>
                    <td class="p-5">
                      <div class=" flex space-x-4">
                        <a href="{{ route('admin.categories.edit',$category->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md text-white">Edit</a>
                      <form action="{{ route('admin.categories.destroy',$category->id) }}"
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
