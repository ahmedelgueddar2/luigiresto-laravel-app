<x-web-layout>
    <section class="menus py-10">
        <div class="container py-5 px-10">
           <h3 class="font-bold text-orange-700 text-xl text-center">Our Menus</h3>
           <h3 class="font-bold text-black  mt-2 text-5xl text-center">Available Dishes</h3>
            <div class="flex flex-wrap flex-col md:flex-row justify-between mt-16">
                @foreach ($menus as $menu)
                <div class="md:min-w-[250px] md:basis-[22%] w-full mb-8">
                    <div class="menu shadow-2xl">
                         <div class="img">
                             <img src="{{ asset('images/menus/'.$menu->image) }}" class="w-full rounded-md">
                         </div>
                         <div class="texts px-2 pb-6 mt-4">
                            <div class="px-2 title uppercase text-orange-700 font-bold underline">
                                {{ $menu->name }}
                            </div>
                            <div class="px-2 decription text-slate-700 max-w-[370px]">
                                {{ $menu->description }}
                            </div>
                            <span class="px-2 price block text-3xl font-bold text-orange-700 mt-2">
                                ${{ $menu->price }}
                            </span>
                         </div>
                    </div>
                 </div>
                @endforeach
            </div>
        </div>
     </section>
</x-web-layout>