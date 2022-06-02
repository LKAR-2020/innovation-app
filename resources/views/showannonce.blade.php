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
                
               <div class="container">
                 <x-catlabel :value="__('detail Profil')"/> 
               </div>
                {{-- <section class=" bg-white shadow-xl" x-data="{image: 'image0' }"> --}}
                 
                  <figure class=" container bg-white rounded-xl p-4 md:p-2">
                    <div class="aspect-w-16 aspect-h-9">
                      <img class="object-cover md:rounded-none bg-yellow-600" src="{{asset('storage/annonces/'.$annonces->image)}}" alt="" />
                    </div>
                
                    <div class="pt-4 md:p-2">
                      <blockquote>
                        <div class="pb-4 text-left md:text-xl font-semibold uppercase lg:text-lg inline-block text-transparent bg-clip-text bg-gradient-to-br from-pink-500  to-blue-400">{{$annonces->name}}</div>
                        <p class="text-sm capitalize md:text-left" 
                        {{-- x-data="{ isCollapsed: false, maxLength: 70, originalContent: '', content: '' }" x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)" --}}
                        >
                          <span 
                          {{-- x-text="isCollapsed ? originalContent : content " --}}
                          > {{$annonces->content}} </span>
                        </p>
                      </blockquote>
                      <figcaption class="font-medium">
                        <div class="text-black text-sm text-left "> {{$annonces->created_at}} </div>
                      </figcaption>
                    </div>
                    
                  </figure>
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



