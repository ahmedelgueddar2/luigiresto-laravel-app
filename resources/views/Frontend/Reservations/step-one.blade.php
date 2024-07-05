<x-web-layout>
    <section class="menus py-10">
        <div class="container py-5 px-10">
            <div class="w-full md:w-2/3 mx-auto">
                 <div class="flex flex-col md:flex-row flex-wrap shadow-xl items-stretch">
                    <div class="md:w-1/2 md:min-w-[300px] md:rounded-l-md rounded-t-md w-full dark:bg-gray-800 flex items-center">
                        <div class="content p-2">
                            <img src="{{ asset('images/web/chef.png') }}" class="w-full">
                            <h1 class="text-7xl text-center mb-6 text-white font-bold"><span class="text-7xl text-orange-600">Luigi</span>Resto</h1>
                        </div>
                     </div>
                     <div class="md:w-1/2 md:min-w-[300px] w-full">
                        <div class="content px-2 md:px-5">
                            <form action="{{ route('reservations.store.step.one') }}" method="POST">
                                @csrf
                                <fieldset class="border px-3 md:px-5 rounded-md border-slate-300 mb-2">
                                    <legend><h3 class="text-3xl font-bold mb-5 mt-5">Make Reservation</h3></legend>
                                    <div class="mb-5">
                                        <div class="font-bold text-slate-700 text-lg mb-1">First Name</div>
                                        <input type="text" class="p-2 border-slate-300 rounded-md w-full border" name="first_name"  value="{{ $reservation->first_name ?? "" }}">
                                        @error('first_name')
                                         <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <div class="font-bold text-slate-700 text-lg mb-1">Last Name</div>
                                        <input type="text" name="last_name" class="p-2 border border-slate-300 rounded-md w-full" value="{{ $reservation->last_name ?? "" }}">
                                        @error('last_name')
                                         <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <div class="font-bold text-slate-700 text-lg mb-1">Email</div>
                                        <input type="text" name="email" class="p-2 border border-slate-300 rounded-md w-full" value="{{ $reservation->email ?? ""}}">
                                        @error('email')
                                         <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <div class="font-bold text-slate-700 text-lg mb-1">Phone</div>
                                        <input type="text" name="tel_number" class="p-2 border border-slate-300 rounded-md w-full" value="{{ $reservation->tel_number ?? "" }}">
                                        @error('tel_number')
                                         <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <div class="font-bold text-slate-700 text-lg mb-1">Reservation Date</div>
                                        <input type="datetime-local" name="res_date" class="p-2 border border-slate-300 rounded-md w-full"
                                        value="{{ $reservation ? $reservation->res_date : '' }}"
                                        max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                        min="{{ $min_date->format('Y-m-d\TH:i:s') }}">
                                        @error('res_date')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <div class="font-bold text-slate-700 text-lg mb-1">Guest Number</div>
                                        <input type="number" name="guest_number" class="p-2 border border-slate-300 rounded-md w-full" value="{{ $reservation->guest_number ?? "" }}">
                                        @error('guest_number')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="flex justify-end">
                                        <button class="bg-orange-600 mb-2 font-bold font-xl rounded-md text-white px-4 py-2">Next</button>
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
