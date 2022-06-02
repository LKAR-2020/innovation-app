<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>catpub</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/modification.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.6/dist/css/splide.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
          .slide::-webkit-scrollbar{
              display: none;
          }
        </style>
    
        
        <!-- Scripts -->
        
    </head>
    <body class="font-sans  bg-gray-100 antialiased">
        {{-- <div class=" relative bg-gray-100"> --}}
            @include('layouts.newnavbarre')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $headers }}
                </div>
            </header> --}}

            <!-- Page Content -->
            {{-- appeler les donner avec $albums sans la balise foreach  --}}
            {{-- <div class="bg-green-900 relative h-full w-full py-16    "> --}}
                <!-- image -->
                  {{-- <div class=" absolute bg-black inset-7"> --}}
                    <!-- album image   -->
                   {{-- <div class="flex bg-yellow-500 h-auto md md:py-3 md:mx-auto md:float-left md:block overscroll-none overflow-x-auto w-96  md:overflow-y-auto mx-auto  ">
                       @foreach ($albummodels as $albummodel)
                       <img class=" opacity-60  hover:opacity-100 w-20 sm:w-24 mb-4 mr-4 " src="{{asset('storage/images/'.$albummodel)}}">
                       @endforeach
                   </div> --}}
                   {{-- <div class=" md:flex float-right md:py-3 md:float-left md:mx-auto "> --}}
                    {{-- <div class=" aspect-w-2 aspect-h-3"> --}}
                        {{-- <img class=" " width="342"  src="{{asset('storage/photos/'.$albums->image)}}"> --}}
                    {{-- </div>  --}}
                      {{-- <div class="ml-4 font-bold">
                        <div class=" bg-yellow-50 font-extrabold text-lg hover:border-b-4 capitalize sm:text-lg sm:w-auto lg:w-80 my-4">information profil</div>
                        <ul class="">
                        <li class="">{{$albums->name}} </li>
                        <li class="">{{$albums->prenom}} </li>
                        <li class="">{{$albums->date}} </li>
                        <li class="">{{$albums->sexe}} </li>
                        <li class="">{{$albums->style}} </li>
                        <li class="">{{$albums->taille}} </li>
                        <li class="">{{$albums->nationnalite}} </li>
                        <li class="">{{$albums->teint}} </li>
                        <li class="flex items-start">
                            <span class="h-6 flex items-center sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                              </svg>
                            </span>
                            <p class="ml-2">
                              une demande d'avis a nos Expert
                              <code class="text-sm font-bold text-gray-900">@CatPub</code>
                            </p>
                          </li> 
                        </ul>
                </div>
                </div> --}}
                  
                  {{-- </div>
                </div> --}}
                
               <div class="container">
                 <x-catlabel :value="__('detail Profil')"/> 
               </div>
                {{-- <section class=" bg-white shadow-xl" x-data="{image: 'image0' }"> --}}
                  <div class=" bg-white shadow-xl max-w-5xl mx-auto md:flex md:justify-center md:items-center" x-data="{image: 'image0' }">
                    <div class="md:grid md:grid-cols-2">
                       {{-- card left --}}
                      <div class="md:flex md:flex-col md:justify-center" >
                        <div class=" overflow-hidden">
                          <div class="flex max-w-sm mx-auto transition-all ease-in-out duration-500">
                            <img class="m-4 ring-4 ring-red-300"   src="{{asset('storage/photos/'.$albums->image)}}" x-show= "image == 'image0'"> 
                            @foreach ($albummodels as $key => $albummodel)
                            <img class="m-4 ring-4 ring-red-300"  src="{{asset('storage/images/'.$albummodel)}}" x-show= "image == 'image{{($key+1)}}'" >
                            @endforeach
                          </div>
                        </div>
                        {{-- selection des images --}}
                        <div class=" flex items-center ">
                          <div class="m-2 ">
                            <img class="hover:ring-4 hover:ring-red-300 opacity-60  hover:opacity-100 w-20 sm:w-24 mb-4 mr-4 " x-on:click = "image = 'image0'"  src="{{asset('storage/photos/'.$albums->image)}}"> 
                          </div>
                          @foreach ($albummodels as $key => $albummodel)
                          <div class=" m-2 ">
                            <img class=" hover:ring-4 hover:ring-red-300 opacity-60  hover:opacity-100 w-20 sm:w-24 mb-4 mr-4 " x-on:click = "image = 'image{{$key+1}}'" src="{{asset('storage/images/'.$albummodel)}}" >
                          </div>
                          @endforeach
                        </div>
                      </div>
                        {{-- cards right --}}
                      <div class=" m-4">
                        <h2 class=" capitalize ">information du Profil</h2>
                        <ul class="">
                         
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->name}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->prenom}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->date}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->sexe}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->style}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->taille}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->nationnalite}}</p>
                            </span>
                             </li>
                          <li class=" flex items-start ">
                            <span class=" flex items-start h-6 sm:h-7">
                              <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <p class=" ml-2">{{$albums->teint}}</p>
                            </span>
                             </li>
                          <li class="flex items-start">
                              <span class="h-6 flex items-center sm:h-7">
                                <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                              </span>
                              <p class="ml-2">
                                une demande d'avis a nos Expert
                                <code class="text-sm font-bold text-gray-900">@CatPub</code>
                              </p>
                            </li> 
                          </ul>
                      </div>

                    </div>

                  </div>
                {{-- </section> --}}
           
            {{-- </div> --}}
            {{-- @include('layouts.footer') --}}
        </body>

        {{-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.6/dist/js/splide.cjs.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/hide_menu.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        const nextIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16"><path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/></svg>'
        const prevIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16"><path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/></svg>'
        
    </script>
    {{-- <script>
        const nextIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16"><path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/></svg>'
        const prevIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16"><path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/></svg>'
$('.test').owlCarousel({
autoplay : true,
autoplayTimeout: 9000,
loop:true,
margin:1,
nav:true,
responsiveClass: true,
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
        items:4
    }
}
})
</script> --}}
{{-- <script>
  $('.owl-carousel').owlCarousel({
autoplay : true,
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
})
    </script> --}}
</html>



