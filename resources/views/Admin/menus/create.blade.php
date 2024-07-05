<x-admin-layout>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2 ">
              <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Index Menu</a>
            </div>
            <div class="bg-slate-100 m-2 p-2 rounded md:w-3/4 ">
                <form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data" class="p-2 border-none border border-gray-500">
                    @csrf
                  <div class="mb-4">
                      <span class="text-gray-700">Name</span>
                      <input type="text" name="name" class="p-2 border-none w-full focus:outline-none">
                      @error('name')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                     @enderror
                  </div>
                  <div class="mb-4">
                    <span class="text-gray-700">Image</span>
                    <input type="file" name="image" class="p-2 border-none w-full bg-white focus:outline-none">
                    @error('image')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                   </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Price</span>
                    <input type="number" name="price" min="0.01" max="1000" class="p-2 border-none w-full focus:outline-none">
                    @error('price')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                   </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Description</span>
                    <textarea name="description" class="p-2 border-none w-full focus:outline-none">
                    </textarea>
                    @error('description')
                     <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                   </div>
                   <div class="mb-4">
                    <span class="text-gray-700">Categories</span>
                    <select name="categories[]" multiple class="p-2 border-none w-full focus:outline-none">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                   </div>
                   <div class="mt-5 p-4">
                    <button type="submit" class="px-4 text-white py-2 rounded-md bg-indigo-500 hover:bg-indigo-700">Store</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
