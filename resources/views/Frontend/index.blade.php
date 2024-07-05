<x-web-layout>
    <main>
        <section class="hero">
            <div class="background">
                <div class="container mx-auto p-5">
                    <div class="content min-h-[70vh] flex items-center">
                        <div class="texts">
                            <h1 class="text-7xl text-white"> <span class="text-7xl text-orange-600">Luigi</span>Resto</h1>
                            <p class="text-slate-400 max-w-[350px]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et recusandae, non voluptatem voluptates alias fuga?</p>
                            <a href="{{ route('reservations.step.one') }}" class="bg-transparent text-white py-3 px-5 mt-5 border border-white rounded-full inline-block hover:bg-orange-700 hover:border-orange-700 transition-all duration-200 ease-out">Make Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-story my-20">
          <div class="container p-5">
              <div class="flex md:flex-row flex-col flex-wrap justify-between">
                  <div class="md:basis-[47%]  md:min-w[300px] w-full md:text-right">
                    <div class="texts">
                       <small class="text-sm font-bold block">Welcome</small>
                       <h1 class="text-5xl font-bold">To Luigi Resto</h1>
                       <h4 class="mt-10 text-xl text-orange-700 font-bold">Our Story</h4>
                       <p class="max-w-[500px] text-slate-800 text-lg md:ml-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam nostrum quibusdam quis totam autem minima aliquid atque sequi consequatur voluptatibus?</p>
                       <p class="mt-2 max-w-[500px] text-slate-800  text-lg md:ml-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quidem nihil voluptate possimus eveniet sint, illo obcaecati aliquid consequuntur illum maxime facilis numquam nisi iusto. Quibusdam, incidunt dolor, facere consequatur nihil officiis unde iusto similique minima doloremque molestias, fugit aperiam!</p>
                    </div>
                    <div>
                        <a href="" class="bg-orange-700 text-white py-3 px-5 mt-5 border border-orange-700 rounded-full inline-block hover:bg-transparent hover:border-black hover:text-black transition-all duration-200 ease-out shadow-2xl">Make Reservation</a>
                    </div>
                  </div>
                  <div class="md:basis-[47%]  md:min-w[300px] w-full">
                    <div class="p-4 border border-black rounded-md bg-orange-400 rotate-3 mt-4 md:mt-0 shadow-2xl">
                        <img src="{{ asset('images/web/img1.jpeg') }}" class="w-full rounded-md">
                    </div>
                  </div>
              </div>
          </div>
        </section>

        <section class="about-us dark:bg-gray-800 py-10">
            <div class="container py-5 px-10 mx-auto">
                <div class="flex md:flex-row flex-col flex-wrap justify-between items-center">
                    <div class="md:basis-[45%]  md:min-w[300px] w-full">
                       <div class="texts">
                           <p class="text-xl text-white">About us</p>
                           <h1 class="text-5xl text-white mt-1 font-bold">Why choose Us ?</h1>
                           <p class="text-white opacity-60 max-w-[500px] mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nobis accusamus perferendis beatae officia labore quia ullam assumenda optio quos.</p>
                           <div class="mt-5">
                               <div class="flex items-center text-xl mt-5 text-white opacity-80">
                                   <i class="fas fa-credit-card"></i>
                                    <p class="font-bold ml-3">Easy payment</p>
                               </div>
                               <div class="flex items-center text-xl mt-5 text-white opacity-80">
                                <i class="fas fa-user-shield"></i>
                                 <p class="font-bold ml-3">100% Protection</p>
                            </div>
                            <div class="flex items-center text-xl mt-5 text-white opacity-80">
                                <i class="fas fa-paper-plane"></i>
                                 <p class="font-bold ml-3">Quick Delivery</p>
                            </div>
                           </div>
                       </div>
                    </div>
                    <div class="md:basis-[55%]  md:min-w[300px] w-full">
                        <div><img src="{{ asset('images/web/chef.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </section>

       <section class="menus py-10">
          <div class="container py-5 px-10">
             <h3 class="font-bold text-orange-700 text-xl text-center">Our Menu</h3>
             <h3 class="font-bold text-black  mt-2 text-5xl text-center">Today's Speciality</h3>
              <div class="flex flex-wrap flex-col md:flex-row justify-between mt-16">
                  @foreach ($specials->menu as $menu)
                  <div class="md:min-width-[250px] md:basis-[22%] w-full mb-8">
                    <div class="menu shadow-2xl">
                         <div class="img">
                             <img src="{{ asset('images/menus/'.$menu->image) }}" class="w-full rounded-md">
                         </div>
                         <div class="texts px-2 pb-6 mt-3">
                            <div class="px-2 title uppercase text-orange-700 font-bold underline">
                                {{$menu->name}}
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
    </main>
</x-web-layout>
