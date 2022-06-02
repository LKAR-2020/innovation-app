<x-app-layout>
    <div class=" ">
        <div class="owl-carousel owl-theme bg-gray-900">
            <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">acteur </p></div>
            <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">mannequin</p></div>
            <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">casting</p></div>
            <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">chantre</p></div>
        </div>
      </div>
      <div class="flex h-auto bg-red-600 justify-between">
        <div class="my-auto">
            <a href="femme">
                <div class=" relative ">
                    <img src="{{asset('images/wepik-2021724-102445.jpg')}}" alt="" class=" transform hover:scale-95 duration-500">
                    <div class=" absolute top-2/4 sm:top-2/3 lg:top-3/4 right-8">
                        <span class=" text-white sm:text-sm px-2 py-2 sm:px-4 sm:py-4 lg:px-11 lg:py-7 font-serif lg:text-xl bg-gray-900 uppercase "> femme</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="my-auto">

            <a href="homme">
                <div class=" relative ">
                    <img src="{{asset('images/wepik-2021724-10292.png')}}" alt="" class="py-0.5 transform hover:scale-95 duration-500">
                    <div class=" absolute top-2/4 sm:top-2/3 lg:top-3/4 left-8">
                        <span class=" text-white sm:text-sm px-2 py-2 sm:px-4 sm:py-4 lg:px-11 lg:py-7 font-serif lg:text-xl bg-gray-900 uppercase "> homme</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
      <x-slot name="scripts">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout: 2000,
            items:1,
            dots: false})
      </x-slot>

</x-app-layout>