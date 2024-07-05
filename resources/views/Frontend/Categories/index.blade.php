<x-web-layout>
    <section class="menus py-10">
        <div class="container py-5 px-10">
           <h3 class="font-bold text-orange-700 text-xl text-center">Our Categories</h3>
           <h3 class="font-bold text-black  mt-2 text-5xl text-center">Category Specials</h3>
            <div class="flex flex-wrap flex-col md:flex-row justify-between mt-16">
                @foreach ($categories as $category)
                    <div class="md:min-width-[250px] md:basis-[22%] w-full mb-8">
                    <div class="menu shadow-2xl">
                            <div class="img">
                                <img src="{{ asset('images/categories/'.$category->image) }}" class="w-full rounded-md">
                            </div>
                            <a href="{{ route('categories.show', $category->id) }}" class="texts px-2 pb-6">
                                 <div class="flex max-w-[100px] my-2 p-2 text-xs justify-around">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                 </div>
                                <div class="px-2 title uppercase text-orange-700 font-bold underline">
                                    {{ $category->name }}
                                </div>
                                <div class="px-2 decription text-slate-700 max-w-[370px]">
                                    {{ $category->description }}
                                </div>
                            </a>
                    </div>
                    </div> 
                @endforeach
            </div>
        </div>
     </section>
</x-web-layout>