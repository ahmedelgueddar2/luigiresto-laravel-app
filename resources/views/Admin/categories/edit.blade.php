<x-admin-layout>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2 ">
              <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Index Category</a>
            </div>
            <div class="bg-slate-100 m-2 p-2 rounded md:w-3/4 ">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="p-2 border-none border border-gray-500">
                    @csrf
                    @method('PUT')
                  <div class="mb-4">
                      <span class="text-gray-700">Name</span>
                      <input type="name" name="name" value="{{ $category->name }}" class="p-2 border w-full focus:outline-none">
                      @error('name')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                    <span class="text-gray-700">Image</span>
                      <div>
                      <img src="{{ asset('images/categories/'.$category->image)}}" class="w-28 inline-block">
                      @error('image')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                      @enderror
                      </div>
                    <input type="file" name="image" class="p-2 border w-full bg-white focus:outline-none">
                   </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Description</span>
                    <textarea name="description"  class="p-2 border-none w-full focus:outline-none">
                        {{ $category->description }}
                    </textarea>
                    @error('description')
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
