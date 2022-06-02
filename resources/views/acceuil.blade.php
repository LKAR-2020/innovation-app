<x-app-layout>
  <div class="">

<div id="myCarousel" class="carousel slide pt-7" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    @foreach ($slides as $slide)
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$slide->id}}" aria-label="Slide {{$slide->id+1}}"></button>
   @endforeach
    {{-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button> --}}
  </div>
  <div class="carousel-inner">
    {{-- @foreach ($slides as $slide) --}}
    <div class="carousel-item active">
      <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
      <img src="{{asset('storage/sliders/'.$sliders->image)}}" alt="">

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>{{$sliders->name}}.</h1>
          <p>{{$sliders->content}}.</p>
          <p><a class="btn btn-lg btn-primary" href="#">voirs plus</a></p>
        </div>
      </div>
    </div>

    {{-- <div class="carousel-item">
        <!-- place de lancienne -->
      <img src="{{asset('slides/slide2.jpg')}}" alt="">

      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>--}}
    @foreach ($slides as $slide)
    <div class="carousel-item">
      <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
      <img src="{{asset('storage/sliders/'.$slide->image)}}" alt="">
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>{{$slide->name}}.</h1>
          <p>{{$slide->content}}.</p>
          <p><a class="btn btn-lg btn-primary" href="{{$slide->url}}">Browse gallery</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      {{-- les trois poster --}}
    <div class=" container my-4 md:my-40 ">
        <div class=" grid md:inline-flex grid-flow-row grid-cols-1 lg:grid-cols-3 gap-2 md:gap-10 rounded-lg">
          @foreach ($banners  as $banner)
          <div class=" relative shadow-lg rounded-lg" >
            <div class=" aspect-h-4 aspect-w-4 sm:aspect-none ">
              <img class=" rounded-lg" src="{{asset('storage/banners/'.$banner->image)}}" alt="">
            </div>
              <div class=" absolute top-2 right-2 py-2 px-4 bg-white  rounded-full h-24 w-24 flex items-center justify-center">
                <span class="text-md"> </span>
             </div>
             <div class="  absolute inset-x-1 text-white bottom-0 h-16 font-bold uppercase text-center text-2xl ">
              {{$banner->content}}
           </div>
          </div>
          @endforeach
          {{-- <div class=" relative shadow-lg rounded-lg" >
            <img class=" rounded-lg" src="{{asset('images/cat-2.jpg')}}" alt="">
            <div class=" absolute top-2 right-2 py-2 px-4 bg-white  rounded-full h-24 w-24 flex items-center justify-center">
              <span class="text-md"> Lorem, ipsum</span>
           </div>
           <div class="  absolute inset-x-1 text-white bottom-0 h-16 font-bold uppercase text-center text-2xl">
            Lorem, ipsumo
         </div>
        </div> --}}
        {{-- <div class=" relative shadow-lg rounded-lg" >
          <img class=" rounded-lg" src="{{asset('images/cat-3.jpg')}}" alt="">
          <div class=" absolute top-2 right-2 py-2 px-4 bg-white  rounded-full h-24 w-24 flex items-center justify-center">
            <span class="text-md"> Lorem, ipsum</span>
         </div>
         <div class=" absolute inset-x-1 text-white bottom-0 h-16 font-bold uppercase text-center text-2xl ">
          Lorem, ipsumo
       </div>
      </div> --}}

        </div>
    </div>

    <div class="container">
      <x-catlabel :value="__('Nouveau Profile')"/>
      <div class="owl-carousel owl_theme items-stretch">
     @foreach ($newprofiles as $newprofile)
     {{-- nouveau profile new design --}}
     <div class=" item">
      <div class="container ">
      <div class=" ">
        <div class=" py-2 my-auto relative rounded-sm">
        <div class=" rounded-t-xl bg-gradient-to-r from-yellow-600 to-pink-500 pt-2 h-full">
          <div class=" ">
            <video autoplay muted loop src="{{asset('storage/videos/'.$newprofile->video)}}" class=" rounded-t-xl"></video>
          </div>
        </div>

          <!-- texte -->
          <div class="rounded-b-xl px-2 text-center bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
            <a href="{{url('album/'.$newprofile->id)}}">
              <h1 class="text-lg uppercase font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-br from-gray-100  to-gray-400">{{$newprofile->name}}</h1>
            </a>
          </div>
          <div class="absolute top-24 left-2 uppercase px-0.5 bg-gradient-to-r from-yellow-600 to-pink-500 rounded-sm">
            <span class="text-sm text-white font-semibold">Nouveau</span>
          </div>
        </div>
      </div>
    </div>
  </div>
    {{-- nouveau profile ancien design --}}
      {{-- <div class=" item">
        <div class="container ">
        <div class="w-48 py-0.5">
          <div class="rounded-t-xl bg-gradient-to-r from-yellow-600 to-pink-500 pt-2 h-full rounded-b-xl">
            <video autoplay muted loop src="{{asset('storage/videos/'.$newprofile->video)}}" class=" rounded-t-xl"></video>

            <img src="{{asset('storage/photos/'.$newprofile->video)}}" alt="" srcset="">

            texte
            <div class=" rounded-b-xl px-2 text-center bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
              <h1 class="text-lg uppercase font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-br from-gray-100  to-gray-400">{{$newprofile->name}}</h1>
            </div>
            <div class="absolute top-24 left-2 uppercase px-0.5 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-sm">
              <span class="text-sm">Nouveau</span>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    @endforeach


      </div>


    </div>

      {{-- video --}}
    <video class=" w-screen mx-auto " autoplay muted loop src="{{asset('video/f w 13 hd stock video.mkv')}}"></video>

   {{-- mieux vote --}}
    <div class="container">
      <x-catlabel :value="__('mieux votés')"/>
      <div class="owl-carousel owl_theme items-stretch ">
     @foreach ($albums as $album)
      <div class=" item">
        <div class="container ">
        <div class=" ">
          <div class=" py-2 my-auto relative rounded-sm">
          <div class=" rounded-t-xl bg-gradient-to-r from-yellow-600 to-pink-500 pt-2 h-full">
            <div class=" aspect-w-9 aspect-h-16">
              <img
              data-src="{{asset('storage/photos/'.$album->image)}}"
              {{-- src=""  --}}
              alt=""
              srcset=""
              class="owl-lazy rounded-t-xl  "
              >
            </div>
          </div>

            <!-- texte -->
            <div class="rounded-b-xl px-2 text-center bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
              <a href="{{url('album/'.$album->id)}}">
                <h1 class="text-lg uppercase font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-br from-gray-100  to-gray-400">{{$album->prenom}}</h1>
              </a>
            </div>
            <div class="absolute top-24 left-2 uppercase px-0.5 bg-gradient-to-r from-yellow-600 to-pink-500 rounded-sm">
              <span class="text-sm text-white font-semibold">{{$album->likes->count()}} votes</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach


      </div>

    </div>
    {{-- <div class=" pt-16  relative"> --}}

      <div class=" relative block -ml-7 -mr-7 px-7 py-5 box-border md:h-screen  bg-no-repeat bg-top bg-cover shadow-sm mx-auto  " style="background-image: url('{{asset('images/box-2.jpg')}}');">
          {{-- <div class=" absolute text-center  py-14 px-14 ">
            <h4 class="lg:text-9xl md:text-7xl text-4xl text-white font-bold pr-10 uppercase"> sauve ton style</h4>
        <div class=" pr-48 md:pr-80 " >
          <h4 class="lg:text-8xl md:text-6xl sm:text-4xl text-3xl text-white font-medium uppercase" >avec catpub .</h4>
        </div>
        <p class=" sm:h-4 md:h-7 xl:h-10 py-4"><a class="btn btn-lg btn-success h-14" href="#">Browse gallery</a></p>
          </div> --}}
          <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <div class="leading-7 text-2xl font-bold mb-2 pb-10 md:pt-10 uppercase sm:text-3xl sm:leading-8 md:text-6xl md:leading-10 text-white">sauve ton style</div>
        <div class="leading-7 text-2xl font-normal mb-2 uppercase sm:text-3xl sm:leading-8 md:text-6xl md:leading-10 text-white">avec catpub</div>
        <div class="w-11 h-10"></div>
                </div>
              </div>
          </div>

      </div>
   {{-- </div> --}}
   <div class="container">
    {{-- <x-catlabel :value="__('annonce')"/>  --}}
    {{-- <div class="owl-carousel owl_theme">
      <div class="item"><h4><div class=" container">
        <div class="sm:w-52 lg:w-80 px-8 py-0.5">
          <div class=" uppercase py-2 px-3">
            <p class="  text-black xl:text-xl">titre</p>
          </div>
          <div class="bg-white relative rounded-sm">
            <img src="https://picsum.photos/600/400/?random=3" alt="">
            <!-- texte -->
            <div class=" pt-6 pb-2 px-2 rounded-lg bg-white">
              <!-- <h1 class="text-gray-700 font-bold text-sm mb-3 hover:text-gray-900 hover:cursor-pointer"> style</h1> -->
              <p class=" font-light text-sm  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae aliquid quas at error doloremque perspiciatis sed vero unde! Assumenda voluptas blanditiis sunt, optio iusto et unde architecto dolore quasi quidem.</p>
              <div class="flex py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-month-fill" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm.104 7.305L4.9 10.18H3.284l.8-2.375h.02zm9.074 2.297c0-.832-.414-1.36-1.062-1.36-.692 0-1.098.492-1.098 1.36v.253c0 .852.406 1.364 1.098 1.364.671 0 1.062-.516 1.062-1.364v-.253z"/>
                  <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM2.56 12.332h-.71L3.748 7h.696l1.898 5.332h-.719l-.539-1.602H3.1l-.54 1.602zm7.29-4.105v4.105h-.668v-.539h-.027c-.145.324-.532.605-1.188.605-.847 0-1.453-.484-1.453-1.425V8.227h.676v2.554c0 .766.441 1.012.98 1.012.59 0 1.004-.371 1.004-1.023V8.227h.676zm1.273 4.41c.075.332.422.636.985.636.648 0 1.07-.378 1.07-1.023v-.605h-.02c-.163.355-.613.648-1.171.648-.957 0-1.64-.672-1.64-1.902v-.34c0-1.207.675-1.887 1.64-1.887.558 0 1.004.293 1.195.64h.02v-.577h.648v4.03c0 1.052-.816 1.579-1.746 1.579-1.043 0-1.574-.516-1.668-1.2h.687z"/>
                </svg>
                <p class="px-5 font-extralight text-sm">date, 2021 heure</p>
              </div>

              <a class=" text-purple-500 hover:text-pink-400 hover:underline" href="annonce.html">Read more</a>
            </div>
            <div class="absolute top-24 left-2 uppercase px-0.5 bg-red-600 rounded-sm">
              <span class="text-sm">new</span>
            </div>
          </div>
        </div>
      </div></h4></div>

    </div>  --}}
    <div class="my-5 md:my-10">
      <div class="border-b-8  text-blue-900 font-bold uppercase relative">
        annonces
      </div>
      <div class="pt-14 grid lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 gap-2">
        @foreach ($annonces as $annonce)

        <figure class=" bg-gray-100 rounded-xl p-4 md:p-2">
          <div class="aspect-w-16 aspect-h-9">
            <img class="object-cover md:rounded-none bg-yellow-600" src="{{asset('storage/annonces/'.$annonce->image)}}" alt="" />
          </div>

          <div class="pt-4 md:p-2">
            <blockquote>
              <div class="pb-4 text-left md:text-xl font-semibold uppercase lg:text-lg inline-block text-transparent bg-clip-text bg-gradient-to-br from-pink-500  to-blue-400">{{$annonce->name}}</div>
              <p class="text-sm capitalize md:text-left" x-data="{ isCollapsed: false, maxLength: 70, originalContent: '', content: '' }" x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)">
                <span x-text="isCollapsed ? originalContent : content "> {{$annonce->content}}... </span>
              </p>
            </blockquote>
            <figcaption class="font-medium">
              <div class="text-black text-sm text-left "> {{$annonce->created_at}} </div>
            </figcaption>
          </div>
          <a href="{{url('annonce/'.$annonce->id)}}" class=" pt-4 no-underline capitalize md:px-2 font-semibold inline-block text-transparent bg-clip-text bg-gradient-to-r from-pink-500   to-blue-500">
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


  </div>
  <div class="container">
  <div class="my-5 md:my-10">
    <div class="border-b-8 text-blue-900 font-bold uppercase relative">
        contacte nous
        <!-- <div class="absolute left-full flex justify-end">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
          </svg>
        </div> -->
    </div>
</div>
  </div>
<div class=" py-2 shadow-lg ">
 <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2210895488593!2d-3.976121285908749!3d5.383230636861681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1934cf31c56f7%3A0x560c42d99cf53f5f!2sImmeuble%20CGK%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1628610172055!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  {{-- <div class=" py-7 flex justify-between ">
    <div class=" w-3/4 ">
        <div class=" uppercase font-serif py-2 border-b-2">
            contact information
        </div>
        <form action="">

        </form>
    </div>
    <div class=" px-1 h-full">

    </div>
    <div class="w-1/4">
        <div class="uppercase font-serif py-2 border-b-2">

        </div>
        <div >

        </div>
    </div>
</div> --}}
</div>
  </div>
  <x-slot name="scripts">
    $('.owl-carousel').owlCarousel({
      autoplay : true,
      lazyLoad:true,
      autoplayTimeout: 9000,
      loop:true,
      margin:1,
      nav:true,
      navText: [
      prevIcon,
      nextIcon

      ],
      dots: false,
      responsive:{
          0:{
              items:2
          },
          600:{

              items:3,
              nav:true
          },
          1000:{
              items:5
          }
      }
      });

  </x-slot >


</x-app-layout>