<x-app-layout>
    <div class="owl-carousel owl-theme bg-gray-900">
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">acteur </p></div>
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">mannequin</p></div>
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">casting</p></div>
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">chantre</p></div>
       
    </div>
      
    
    <div class=" container py-6">
        <div class="grid gap-4 grid-cols-2 ">
            <div class="  relative">
                <a href="{{Route('femme_enfant')}}"><img class="block object-cover object-center w-full h-full rounded-sm" src="{{asset('images/enfant.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute top-2/4 sm:top-2/3 lg:top-3/4 right-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> enfant </span>
                </div>
            </div>
            <div class="  relative">
                <a href="{{Route('femme_ado')}}"><img class="block object-cover object-center w-full h-full rounded-sm" src="{{asset('images/233bdddf7a4d225798e58d4faffbb355.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute top-2/4 sm:top-2/3 lg:top-3/4 left-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> ado </span>
                </div></div>
            <div class="  relative">
                <a href="{{Route('femme_jeune')}}"><img class="block object-cover object-center w-full h-full rounded-sm" src="{{asset('images/ali-nejatian-D3KYmPveqsw-unsplash.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute  bottom-2/4 sm:bottom-2/3 lg:bottom-3/4 right-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> jeune</span>
                </div></div>
            <div class="  relative">
                <a href="{{Route('femme_mature')}}"><img class="block object-cover object-center w-full h-full rounded-sm" src="{{asset('images/old enfant.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute bottom-2/4 sm:bottom-2/3 lg:bottom-3/4 left-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> mature</span>
                </div></div>
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
            dots: false
                
        });
        $('img').lazyload({
            effet:"fadeIn"
        });
    </x-slot>
</x-app-layout>