<x-app-layout>
    <div class="owl-carousel owl-theme bg-gray-900">
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">acteur </p></div>
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">mannequin</p></div>
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">casting</p></div>
        <div class="item "><p class="w-full text-center py-3 text-white bg m-auto text-2xl uppercase italic font-mono">chantre</p></div>
       
    </div>
      
    
    <div class=" container py-6">
        <div class="grid gap-4 grid-cols-2 ">
            <div class=" relative">
                <a href="{{Route('homme_enfant')}}"><img class=" mx-auto w-full h-full rounded-sm" src="{{asset('images/4d68a0be5eeea9ccef80b23a8695a967.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute top-2/4 sm:top-2/3 lg:top-3/4 right-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> enfant </span>
                </div></div>
            <div class=" relative">
                <a href="{{Route('homme_ado')}}"><img class=" mx-auto w-full h-full rounded-sm" src="{{asset('images/375-600x600.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute top-2/4 sm:top-2/3 lg:top-3/4 left-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> ado </span>
                </div></div>
            <div class=" relative">
                <a href="{{Route('homme_jeune')}}"><img class=" mx-auto w-full h-full rounded-sm" src="{{asset('images/526b1cf955e23c3af93124df9972262c.jpg')}}" alt=""></a>
                <div class="absoulte">
                    <span class=" absolute  bottom-2/4 sm:bottom-2/3 lg:bottom-3/4 right-8 bg-gray-900 text-white px-2 py-1 sm:px-4 sm:py-2 md:px-9 md:py-6 lg:px-10 lg:py-8 font-serif lg:text-xl items-center uppercase "> jeune</span>
                </div></div>
            <div class=" relative">
                <a href="{{Route('homme_mature')}}"><img class=" mx-auto w-full h-full rounded-sm" src="{{asset('images/old people.jpg')}}" alt=""></a>
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
                
        })
    </x-slot>
</x-app-layout>