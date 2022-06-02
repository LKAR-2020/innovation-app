<x-app-layout>

  <div class="owl-carousel owl-theme bg-gray-900">
    <div class="item "><p class="w-full text-center py-4 text-white bg m-auto text-2xl uppercase italic font-mono">acteur </p></div>
    <div class="item "><p class="w-full text-center py-4 text-white bg m-auto text-2xl uppercase italic font-mono">mannequin</p></div>
    <div class="item "><p class="w-full text-center py-4 text-white bg m-auto text-2xl uppercase italic font-mono">casting</p></div>
    <div class="item "><p class="w-full text-center py-4 text-white bg m-auto text-2xl uppercase italic font-mono">chantre</p></div>

</div>

    <div class=" container py-4 ">
      <div class="pt-14 grid lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 gap-2">
        @foreach ($annonces as $annonce)

        <figure class="bg-red-100 rounded-xl p-8 md:p-0">
          <div class="aspect-w-16 aspect-h-9">
            <img class="object-cover md:rounded-none bg-yellow-600" src="{{asset('storage/annonces/'.$annonce->image)}}" alt="" />
          </div>

          <div class="pt-6 md:p-8 md:text-right">
            <blockquote>
              <div class="pb-4 text-center md:text-xl font-extrabold uppercase lg:text-lg text-cyan-600">{{$annonce->name}}</div>
              <p class="text-sm capitalize md:text-left font-semibold" x-data="{ isCollapsed: false, maxLength: 70, originalContent: '', content: '' }" x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)">
                <span x-text="isCollapsed ? originalContent : content "> {{$annonce->content}}... </span>
              </p>
            </blockquote>
            <figcaption class="font-medium">
              <div class="text-gray-500 text-sm text-left "> {{$annonce->created_at}} </div>
            </figcaption>
          </div>
          <a href="{{url('annonce/'.$annonce->id)}}" class=" p-4 no-underline capitalize md:px-2 font-semibold inline-block text-transparent bg-clip-text bg-gradient-to-r from-pink-500   to-blue-500">
            voir plus >
          </a>
        </figure>
        {{-- <div class="">
            <div class="w-full h-1/2 bg-center  bg-no-repeat mx-auto object-cover object-center" style="background-image: url({{asset('storage/annonces/'.$annonce->image)}})" >

            </div>

            <div class="text-center">
              <h5 class="text-xl font-semibold mb-2">{{$annonce->name}}</h5>

              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sequi tenetur, voluptatibus harum consequuntur alias quaerat excepturi temporibus nisi commodi, ex, ratione quae soluta! Saepe alias dolores dolorem assumenda totam?</p>

              <button class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Button</button>
            </div>
          </div> --}}
        @endforeach
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