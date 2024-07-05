<x-web-layout>
    <section class="menus py-10">
        <div class="container py-5 px-10">
            <div class="w-full md:w-2/3 mx-auto">
                 <div class="flex flex-col md:flex-row flex-wrap shadow-xl items-center">
                     <div class="md:w-1/2 md:min-w-[300px] md:rounded-l-md rounded-t-md w-full dark:bg-gray-800 flex items-center">
                        <div class="content p-2">
                            <img src="{{ asset('images/web/chef.png') }}" class="w-full">
                            <h1 class="text-6xl text-center mb-7 text-white font-bold"><span class="text-7xl text-orange-600">Luigi</span>Resto</h1>
                        </div>
                     </div>
                     <div class="md:w-1/2 md:min-w-[300px] w-full">
                        <div class="content px-2 md:px-5">
                            <form action="{{ route('reservations.store.step.two') }}" method="POST">
                                @csrf
                                <fieldset class="border px-3 md:px-5 rounded-md border-slate-300 mb-2">
                                    <legend><h3 class="text-3xl font-bold mb-5 mt-5">Make Reservation</h3></legend>
                                    <div class="mb-5">
                                        <span class="font-bold text-slate-700 text-lg mb-1">Table</span>
                                        <select name="table_id" class="p-2 border border-slate-300 rounded-md w-full">
                                            @foreach ($tables as $table)
                                              <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                                            @endforeach
                                        </select>
                                        @error('table_id')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <span class="font-bold text-slate-700 text-lg mb-1">Menu</span>
                                        <select name="menu_id" class="p-2 border border-slate-300 rounded-md w-full">
                                            @foreach ($menus as $menu)
                                              <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('menu_id')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <span class="font-bold text-slate-700 text-lg mb-1">Comment</span>
                                        <input type="text" name="comment" class="p-2 border-slate-300 rounded-md w-full">
                                        @error('comment')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="flex justify-between">
                                        <a href="{{ route('reservations.store.step.one') }}" class="bg-orange-600 mb-2 font-bold font-xl rounded-md text-white px-4 py-2">Previous</a>
                                        <button class="bg-orange-600 mb-2 font-bold font-xl rounded-md text-white px-4 py-2">Make Reservation</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
     </section>
</x-web-layout>
