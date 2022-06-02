<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>catpub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/modification.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <!-- FontAwesome 5.15.3 CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- (Optional) Use CSS or JS implementation -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <style>
           back
          .dropdown:hover .dropdown-menu{
                display: block;
                min-width: 50rem;
                background-color:none;
              }
        </style>
    </head>
    <body class="antialiased bg-no-repeat bg-cover bg-center" style=" background-image: url({{asset('images/wepik-2021724-102445.jpg')}})">

 <!-- entete -->
 <div class=" container-fluid relative h-screen ">
   <div class=" absolute z-20  md:button-1/2  left-1/2 transform w-full -translate-x-1/2 ">
     <x-application-logo class=" hidden sm:block mx-auto w-60 md:w-auto md:h-20 lg:w-auto lg:h-24  fill-current text-gray-500" />
   </div>
    <div class="absolute shadow-sm top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/3 md:w-5/6 lg:w-3/4 duration-300 px-8 py-8">
        <div class="flex -ml-4 -mr-4 flex-wrap  ">
          <div class="bg-green-50 px-8 py-10 md:py-24 text-center col-md-6 col-sm-6 col-12">
              <x-application-logo class=" sm:hidden fill-current text-gray-500" />

              <h3 class=" sm:block font-serif mb-2 text-black uppercase">connectez-vous sur cat pub</h3>
              <p class=" hidden sm:block mb-1 text-black">connectez-vous pour pouvoir voter votre candidat preferer, avoir des informations Juteuses !</p>
              @auth
              <a href="acceuil" class=" no-underline">
                <x-button class="ml-3">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 100 100"
                        class="mr-3"
                        style=" fill:#000000;"><path fill="#f1bc19" d="M77 12A1 1 0 1 0 77 14A1 1 0 1 0 77 12Z"></path><path fill="#c0e5e4" d="M50 13A37 37 0 1 0 50 87A37 37 0 1 0 50 13Z"></path><path fill="#f1bc19" d="M83 11A4 4 0 1 0 83 19A4 4 0 1 0 83 11Z"></path><path fill="#00a5a5" d="M87 22A2 2 0 1 0 87 26A2 2 0 1 0 87 22Z"></path><path fill="#fbcd59" d="M81 74A2 2 0 1 0 81 78 2 2 0 1 0 81 74zM15 59A4 4 0 1 0 15 67 4 4 0 1 0 15 59z"></path><path fill="#00a5a5" d="M25 85A2 2 0 1 0 25 89A2 2 0 1 0 25 85Z"></path><path fill="#fff" d="M18.5 49A2.5 2.5 0 1 0 18.5 54 2.5 2.5 0 1 0 18.5 49zM79.5 32A1.5 1.5 0 1 0 79.5 35 1.5 1.5 0 1 0 79.5 32z"></path><g><path fill="#fdfcee" d="M25 44.6L25 67 52 67 52 68 75 68 75 44.6z"></path><path fill="#b2b1c2" d="M30.375,67c0,0,0-9.446,0-12s2.071-4.625,4.625-4.625s4.625,2.071,4.625,4.625c0,1.364,0,12,0,12 H30.375z"></path><path fill="#cdcbbd" d="M25 44.6L25 46 52 46 52 47 75 47 75 44.6z"></path><path fill="#ee3e54" d="M73.353 30.9L27.586 30.9 22.982 44.1 77.035 44.1z"></path><path fill="#472b29" d="M25.4,44H24v23.5c0,0.276,0.224,0.5,0.5,0.5H52v-1.4H25.4V44z"></path><path fill="#472b29" d="M74.6,44v23.6H52.4V44H51v24.5c0,0.276,0.224,0.5,0.5,0.5h24c0.276,0,0.5-0.224,0.5-0.5V44H74.6z"></path><path fill="#472b29" d="M72.973,31.4l3.404,12.2H23.686l4.255-12.2L72.973,31.4 M73.498,30H27.451 c-0.301,0-0.569,0.189-0.668,0.471l-4.744,13.6C21.881,44.526,22.221,45,22.707,45h54.586c0.467,0,0.805-0.441,0.681-0.887 l-3.795-13.6C74.094,30.21,73.816,30,73.498,30L73.498,30z"></path><path fill="#472b29" d="M63.625 34h-34.25C29.168 34 29 33.832 29 33.625s.168-.375.375-.375h34.25c.207 0 .375.168.375.375S63.832 34 63.625 34zM62.625 36h-33.75c-.207 0-.375-.168-.375-.375s.168-.375.375-.375h33.75c.207 0 .375.168.375.375S62.832 36 62.625 36zM61.625 38h-33.25C28.168 38 28 37.832 28 37.625s.168-.375.375-.375h33.25c.207 0 .375.168.375.375S61.832 38 61.625 38z"></path><path fill="#fbb97f" d="M71,27.25c-0.349,0-4.649,0-5,0c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75 c0.351,0,4.651,0,5,0c0.414,0,0.75-0.336,0.75-0.75S71.414,27.25,71,27.25z"></path><path fill="#472b29" d="M71,29h-5c-0.551,0-1-0.449-1-1s0.449-1,1-1h5c0.551,0,1,0.449,1,1S71.551,29,71,29z M66,27.5 c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h5c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5H66z"></path><path fill="#fdd4b2" d="M70.75 37.75L66.25 37.75 66.25 28.75 70.875 28.75z"></path><path fill="#472b29" d="M70.75 38h-4.5C66.112 38 66 37.888 66 37.75v-9c0-.138.112-.25.25-.25h4.625c.067 0 .131.027.178.074.047.048.073.112.072.179l-.125 9C70.998 37.89 70.887 38 70.75 38zM66.5 37.5h4.003l.118-8.5H66.5V37.5zM74.875 47.5H57.25c-.138 0-.25-.112-.25-.25S57.112 47 57.25 47h17.625c.138 0 .25.112.25.25S75.013 47.5 74.875 47.5zM55.75 47.5h-1.5c-.138 0-.25-.112-.25-.25S54.112 47 54.25 47h1.5c.138 0 .25.112.25.25S55.888 47.5 55.75 47.5zM43.75 46.5H25.125c-.138 0-.25-.112-.25-.25S24.987 46 25.125 46H43.75c.138 0 .25.112.25.25S43.888 46.5 43.75 46.5zM47.75 46.5h-1.5c-.138 0-.25-.112-.25-.25S46.112 46 46.25 46h1.5c.138 0 .25.112.25.25S47.888 46.5 47.75 46.5z"></path><path fill="#c0e5e4" d="M68.625 54.375L68.625 62.625 58.375 62.625 58.375 51.375 66.625 51.375z"></path><path fill="#472b29" d="M68.625,63h-10.25C58.168,63,58,62.832,58,62.625v-11.25C58,51.168,58.168,51,58.375,51h8.25 C66.832,51,67,51.168,67,51.375s-0.168,0.375-0.375,0.375H58.75v10.5h9.5v-7.875c0-0.207,0.168-0.375,0.375-0.375 S69,54.168,69,54.375v8.25C69,62.832,68.832,63,68.625,63z"></path><path fill="#472b29" d="M63.5,63c-0.207,0-0.375-0.168-0.375-0.375v-11.25c0-0.207,0.168-0.375,0.375-0.375 s0.375,0.168,0.375,0.375v11.25C63.875,62.832,63.707,63,63.5,63z"></path><path fill="#c0e5e4" d="M48.625 56.625L48.628 51.375 42.378 51.375 42.375 58.625 47.625 58.625z"></path><path fill="#472b29" d="M47.625,59h-5.25c-0.1,0-0.195-0.04-0.265-0.11S42,58.724,42,58.625l0.003-7.25 c0-0.207,0.168-0.375,0.375-0.375h6.25c0.1,0,0.195,0.04,0.265,0.11s0.11,0.166,0.11,0.265L49,56.625 C49,56.832,48.832,57,48.625,57l0,0c-0.208,0-0.375-0.168-0.375-0.375l0.003-4.875h-5.5l-0.003,6.5h4.875 c0.207,0,0.375,0.168,0.375,0.375S47.832,59,47.625,59z"></path><path fill="#472b29" d="M45.503 58.987c-.207 0-.375-.168-.375-.375v-7.237c0-.207.168-.375.375-.375s.375.168.375.375v7.237C45.878 58.819 45.71 58.987 45.503 58.987zM39.625 67.375c-.207 0-.375-.168-.375-.375V55c0-2.343-1.907-4.25-4.25-4.25s-4.25 1.907-4.25 4.25v12c0 .207-.168.375-.375.375S30 67.207 30 67V55c0-2.757 2.243-5 5-5s5 2.243 5 5v12C40 67.207 39.832 67.375 39.625 67.375z"></path><path fill="#c0e5e4" d="M37.75,56c0,0.547,0,1.75,0,1.75h-5.5c0,0,0-0.231,0-1.75s1.231-2.75,2.75-2.75 S37.75,54.481,37.75,56z"></path><path fill="#472b29" d="M37.75 58h-5.5C32.112 58 32 57.888 32 57.75V56c0-1.654 1.346-3 3-3s3 1.346 3 3v1.75C38 57.888 37.888 58 37.75 58zM32.5 57.5h5V56c0-1.378-1.122-2.5-2.5-2.5s-2.5 1.122-2.5 2.5V57.5zM37.75 61h-.5C37.112 61 37 60.888 37 60.75s.112-.25.25-.25h.5c.138 0 .25.112.25.25S37.888 61 37.75 61z"></path></g></svg>
                {{ __('Visite') }}
               </x-button> </a>
                  @else
                  <div class=" my-auto items-center text-white justify-end">
                    <a href="acceuil" class=" no-underline ">
                      <x-button class="my-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 100 100"
                        class="mr-3"
                        style=" fill:#000000;"><path fill="#f1bc19" d="M77 12A1 1 0 1 0 77 14A1 1 0 1 0 77 12Z"></path><path fill="#c0e5e4" d="M50 13A37 37 0 1 0 50 87A37 37 0 1 0 50 13Z"></path><path fill="#f1bc19" d="M83 11A4 4 0 1 0 83 19A4 4 0 1 0 83 11Z"></path><path fill="#00a5a5" d="M87 22A2 2 0 1 0 87 26A2 2 0 1 0 87 22Z"></path><path fill="#fbcd59" d="M81 74A2 2 0 1 0 81 78 2 2 0 1 0 81 74zM15 59A4 4 0 1 0 15 67 4 4 0 1 0 15 59z"></path><path fill="#00a5a5" d="M25 85A2 2 0 1 0 25 89A2 2 0 1 0 25 85Z"></path><path fill="#fff" d="M18.5 49A2.5 2.5 0 1 0 18.5 54 2.5 2.5 0 1 0 18.5 49zM79.5 32A1.5 1.5 0 1 0 79.5 35 1.5 1.5 0 1 0 79.5 32z"></path><g><path fill="#fdfcee" d="M25 44.6L25 67 52 67 52 68 75 68 75 44.6z"></path><path fill="#b2b1c2" d="M30.375,67c0,0,0-9.446,0-12s2.071-4.625,4.625-4.625s4.625,2.071,4.625,4.625c0,1.364,0,12,0,12 H30.375z"></path><path fill="#cdcbbd" d="M25 44.6L25 46 52 46 52 47 75 47 75 44.6z"></path><path fill="#ee3e54" d="M73.353 30.9L27.586 30.9 22.982 44.1 77.035 44.1z"></path><path fill="#472b29" d="M25.4,44H24v23.5c0,0.276,0.224,0.5,0.5,0.5H52v-1.4H25.4V44z"></path><path fill="#472b29" d="M74.6,44v23.6H52.4V44H51v24.5c0,0.276,0.224,0.5,0.5,0.5h24c0.276,0,0.5-0.224,0.5-0.5V44H74.6z"></path><path fill="#472b29" d="M72.973,31.4l3.404,12.2H23.686l4.255-12.2L72.973,31.4 M73.498,30H27.451 c-0.301,0-0.569,0.189-0.668,0.471l-4.744,13.6C21.881,44.526,22.221,45,22.707,45h54.586c0.467,0,0.805-0.441,0.681-0.887 l-3.795-13.6C74.094,30.21,73.816,30,73.498,30L73.498,30z"></path><path fill="#472b29" d="M63.625 34h-34.25C29.168 34 29 33.832 29 33.625s.168-.375.375-.375h34.25c.207 0 .375.168.375.375S63.832 34 63.625 34zM62.625 36h-33.75c-.207 0-.375-.168-.375-.375s.168-.375.375-.375h33.75c.207 0 .375.168.375.375S62.832 36 62.625 36zM61.625 38h-33.25C28.168 38 28 37.832 28 37.625s.168-.375.375-.375h33.25c.207 0 .375.168.375.375S61.832 38 61.625 38z"></path><path fill="#fbb97f" d="M71,27.25c-0.349,0-4.649,0-5,0c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75 c0.351,0,4.651,0,5,0c0.414,0,0.75-0.336,0.75-0.75S71.414,27.25,71,27.25z"></path><path fill="#472b29" d="M71,29h-5c-0.551,0-1-0.449-1-1s0.449-1,1-1h5c0.551,0,1,0.449,1,1S71.551,29,71,29z M66,27.5 c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h5c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5H66z"></path><path fill="#fdd4b2" d="M70.75 37.75L66.25 37.75 66.25 28.75 70.875 28.75z"></path><path fill="#472b29" d="M70.75 38h-4.5C66.112 38 66 37.888 66 37.75v-9c0-.138.112-.25.25-.25h4.625c.067 0 .131.027.178.074.047.048.073.112.072.179l-.125 9C70.998 37.89 70.887 38 70.75 38zM66.5 37.5h4.003l.118-8.5H66.5V37.5zM74.875 47.5H57.25c-.138 0-.25-.112-.25-.25S57.112 47 57.25 47h17.625c.138 0 .25.112.25.25S75.013 47.5 74.875 47.5zM55.75 47.5h-1.5c-.138 0-.25-.112-.25-.25S54.112 47 54.25 47h1.5c.138 0 .25.112.25.25S55.888 47.5 55.75 47.5zM43.75 46.5H25.125c-.138 0-.25-.112-.25-.25S24.987 46 25.125 46H43.75c.138 0 .25.112.25.25S43.888 46.5 43.75 46.5zM47.75 46.5h-1.5c-.138 0-.25-.112-.25-.25S46.112 46 46.25 46h1.5c.138 0 .25.112.25.25S47.888 46.5 47.75 46.5z"></path><path fill="#c0e5e4" d="M68.625 54.375L68.625 62.625 58.375 62.625 58.375 51.375 66.625 51.375z"></path><path fill="#472b29" d="M68.625,63h-10.25C58.168,63,58,62.832,58,62.625v-11.25C58,51.168,58.168,51,58.375,51h8.25 C66.832,51,67,51.168,67,51.375s-0.168,0.375-0.375,0.375H58.75v10.5h9.5v-7.875c0-0.207,0.168-0.375,0.375-0.375 S69,54.168,69,54.375v8.25C69,62.832,68.832,63,68.625,63z"></path><path fill="#472b29" d="M63.5,63c-0.207,0-0.375-0.168-0.375-0.375v-11.25c0-0.207,0.168-0.375,0.375-0.375 s0.375,0.168,0.375,0.375v11.25C63.875,62.832,63.707,63,63.5,63z"></path><path fill="#c0e5e4" d="M48.625 56.625L48.628 51.375 42.378 51.375 42.375 58.625 47.625 58.625z"></path><path fill="#472b29" d="M47.625,59h-5.25c-0.1,0-0.195-0.04-0.265-0.11S42,58.724,42,58.625l0.003-7.25 c0-0.207,0.168-0.375,0.375-0.375h6.25c0.1,0,0.195,0.04,0.265,0.11s0.11,0.166,0.11,0.265L49,56.625 C49,56.832,48.832,57,48.625,57l0,0c-0.208,0-0.375-0.168-0.375-0.375l0.003-4.875h-5.5l-0.003,6.5h4.875 c0.207,0,0.375,0.168,0.375,0.375S47.832,59,47.625,59z"></path><path fill="#472b29" d="M45.503 58.987c-.207 0-.375-.168-.375-.375v-7.237c0-.207.168-.375.375-.375s.375.168.375.375v7.237C45.878 58.819 45.71 58.987 45.503 58.987zM39.625 67.375c-.207 0-.375-.168-.375-.375V55c0-2.343-1.907-4.25-4.25-4.25s-4.25 1.907-4.25 4.25v12c0 .207-.168.375-.375.375S30 67.207 30 67V55c0-2.757 2.243-5 5-5s5 2.243 5 5v12C40 67.207 39.832 67.375 39.625 67.375z"></path><path fill="#c0e5e4" d="M37.75,56c0,0.547,0,1.75,0,1.75h-5.5c0,0,0-0.231,0-1.75s1.231-2.75,2.75-2.75 S37.75,54.481,37.75,56z"></path><path fill="#472b29" d="M37.75 58h-5.5C32.112 58 32 57.888 32 57.75V56c0-1.654 1.346-3 3-3s3 1.346 3 3v1.75C38 57.888 37.888 58 37.75 58zM32.5 57.5h5V56c0-1.378-1.122-2.5-2.5-2.5s-2.5 1.122-2.5 2.5V57.5zM37.75 61h-.5C37.112 61 37 60.888 37 60.75s.112-.25.25-.25h.5c.138 0 .25.112.25.25S37.888 61 37.75 61z"></path></g></svg>
                      {{ __('Visite') }}
                  </x-button> </a>
                    {{-- <a href="register" class=" px-3 hover:border-indigo-800 hover:shadow-xl bg-blue-400 hover:bg-blue-700 rounded-md py-2 no-underline text-white  my-3  ">Inscription </a> --}}
                    <br>
                    <h3 class=" sm:block font-serif mb-2 text-black uppercase"> Inscription </h3>

                <a href="{{ route('socialite.redirect', 'facebook') }}" class=" no-underline">
                    <x-button class=" bg-blue-900 ">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="30" height="30"
                      viewBox="0 0 100 100"
                      class="mr-3"
                      style=" fill:#000000;"><path fill="#ee3e54" d="M13 27A2 2 0 1 0 13 31A2 2 0 1 0 13 27Z"></path><path fill="#f1bc19" d="M77 12A1 1 0 1 0 77 14A1 1 0 1 0 77 12Z"></path><path fill="#fce0a2" d="M50 13A37 37 0 1 0 50 87A37 37 0 1 0 50 13Z"></path><path fill="#f1bc19" d="M83 11A4 4 0 1 0 83 19A4 4 0 1 0 83 11Z"></path><path fill="#ee3e54" d="M87 22A2 2 0 1 0 87 26A2 2 0 1 0 87 22Z"></path><path fill="#fbcd59" d="M81 74A2 2 0 1 0 81 78 2 2 0 1 0 81 74zM15 59A4 4 0 1 0 15 67 4 4 0 1 0 15 59z"></path><path fill="#ee3e54" d="M25 85A2 2 0 1 0 25 89A2 2 0 1 0 25 85Z"></path><path fill="#fff" d="M18.5 51A2.5 2.5 0 1 0 18.5 56A2.5 2.5 0 1 0 18.5 51Z"></path><path fill="#f1bc19" d="M21 66A1 1 0 1 0 21 68A1 1 0 1 0 21 66Z"></path><path fill="#fff" d="M80 33A1 1 0 1 0 80 35A1 1 0 1 0 80 33Z"></path><path fill="#4985c1" d="M35,72.3c-4,0-7.3-3.3-7.3-7.3V35c0-4,3.3-7.3,7.3-7.3h30c4,0,7.3,3.3,7.3,7.3v30c0,4-3.3,7.3-7.3,7.3H35z"></path><path fill="#472b29" d="M65,28.4c3.6,0,6.6,3,6.6,6.6v30c0,3.6-3,6.6-6.6,6.6H35c-3.6,0-6.6-3-6.6-6.6V35c0-3.6,3-6.6,6.6-6.6H65 M65,27H35c-4.4,0-8,3.6-8,8v30c0,4.4,3.6,8,8,8h30c4.4,0,8-3.6,8-8V35C73,30.6,69.4,27,65,27L65,27z"></path><path fill="#fdfcee" d="M68.5,47.9v1.8V64c0,2.5-2,4.5-4.5,4.5H36c-2.5,0-4.5-2-4.5-4.5V36c0-2.5,2-4.5,4.5-4.5h25.4H64 c2.5,0,4.5,2,4.5,4.5v3.4v2v1v1.1v2.9V47.9"></path><path fill="#472b29" d="M68.5 47.4c-.3 0-.5-.2-.5-.5V43c0-.3.2-.5.5-.5S69 42.7 69 43v3.9C69 47.2 68.8 47.4 68.5 47.4zM68.5 40.5c-.3 0-.5-.2-.5-.5v-2c0-.3.2-.5.5-.5S69 37.7 69 38v2C69 40.3 68.8 40.5 68.5 40.5z"></path><path fill="#472b29" d="M64,69H36c-2.8,0-5-2.2-5-5V36c0-2.8,2.2-5,5-5h25.4c0.3,0,0.5,0.2,0.5,0.5S61.7,32,61.4,32H36 c-2.2,0-4,1.8-4,4v28c0,2.2,1.8,4,4,4h28c2.2,0,4-1.8,4-4V49.6c0-0.3,0.2-0.5,0.5-0.5s0.5,0.2,0.5,0.5V64C69,66.8,66.8,69,64,69z"></path><path fill="#4985c1" d="M46.5,43.4c0,0.6,0,3.1,0,3.1h-2.1v3.6h2.1v11.4h5V50.1h2.9c0,0,0.3-1.7,0.4-3.6c-0.4,0-4.1,0-4.1,0 s0-2.2,0-2.6c0-0.4,0.5-0.9,1-0.9s2.2,0,3.3,0c0-0.6,0-2.5,0-4.3c-1.4,0-2.9,0-3.6,0C46.4,38.6,46.5,42.8,46.5,43.4z"></path><path fill="#472b29" d="M51.5,62h-5c-0.3,0-0.5-0.2-0.5-0.5V50.6h-1.6c-0.3,0-0.5-0.2-0.5-0.5v-3.6c0-0.3,0.2-0.5,0.5-0.5H46v-2.6h0.5 l-0.5,0c0-1.6,0.5-2.9,1.4-3.8c0.9-1,2.3-1.4,4.1-1.4h3.6c0.3,0,0.5,0.2,0.5,0.5v4.3c0,0.3-0.2,0.5-0.5,0.5h-3.3 c-0.2,0-0.5,0.3-0.5,0.4V46h3.6c0.1,0,0.3,0.1,0.4,0.2c0.1,0.1,0.1,0.2,0.1,0.4c-0.1,1.9-0.4,3.5-0.4,3.6c0,0.2-0.2,0.4-0.5,0.4H52 v10.9C52,61.8,51.8,62,51.5,62z M47,61h4V50.1c0-0.3,0.2-0.5,0.5-0.5H54c0.1-0.5,0.2-1.5,0.3-2.6h-3.5c-0.3,0-0.5-0.2-0.5-0.5v-2.6 c0-0.7,0.8-1.4,1.5-1.4h2.8v-3.3h-3.1c-1.5,0-2.7,0.4-3.4,1.1C47.4,41,47,42,47,43.3c0,0,0,0,0,0v3.1c0,0.3-0.2,0.5-0.5,0.5h-1.6 v2.6h1.6c0.3,0,0.5,0.2,0.5,0.5V61z"></path></svg>
                      {{ __(' facebook') }}
                  </x-button>
                </a>
                <a href="{{ route('socialite.redirect', 'google') }}" class=" no-underline">
                  <x-button class=" bg-red-700 my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="30" height="30"
                    viewBox="0 0 100 100"
                    class=" mr-3 "
                    style=" fill:#000000;"><path fill="#78a0cf" d="M13 27A2 2 0 1 0 13 31A2 2 0 1 0 13 27Z"></path><path fill="#f1bc19" d="M77 12A1 1 0 1 0 77 14A1 1 0 1 0 77 12Z"></path><path fill="#cee1f4" d="M50 13A37 37 0 1 0 50 87A37 37 0 1 0 50 13Z"></path><path fill="#f1bc19" d="M83 11A4 4 0 1 0 83 19A4 4 0 1 0 83 11Z"></path><path fill="#78a0cf" d="M87 22A2 2 0 1 0 87 26A2 2 0 1 0 87 22Z"></path><path fill="#fbcd59" d="M81 74A2 2 0 1 0 81 78 2 2 0 1 0 81 74zM15 59A4 4 0 1 0 15 67 4 4 0 1 0 15 59z"></path><path fill="#78a0cf" d="M25 85A2 2 0 1 0 25 89A2 2 0 1 0 25 85Z"></path><path fill="#fff" d="M18.5 51A2.5 2.5 0 1 0 18.5 56A2.5 2.5 0 1 0 18.5 51Z"></path><path fill="#f1bc19" d="M21 66A1 1 0 1 0 21 68A1 1 0 1 0 21 66Z"></path><path fill="#fff" d="M80 33A1 1 0 1 0 80 35A1 1 0 1 0 80 33Z"></path><g><path fill="#ea5167" d="M35.233,47.447C36.447,40.381,42.588,35,50,35c3.367,0,6.464,1.123,8.968,2.996l6.393-6.885 C61.178,27.684,55.83,25.625,50,25.625c-11.942,0-21.861,8.635-23.871,20.001L35.233,47.447z"></path><path fill="#00a698" d="M58.905,62.068C56.414,63.909,53.335,65,50,65c-7.842,0-14.268-6.02-14.934-13.689l-8.909,2.97 C28.23,65.569,38.113,74.125,50,74.125c6.261,0,11.968-2.374,16.27-6.27L58.905,62.068z"></path><path fill="#48bed8" d="M68.5,45.5h-4.189H50.5v9h13.811c-1.073,3.414-3.333,6.301-6.296,8.179l7.245,6.038 c5.483-4.446,8.99-11.233,8.99-18.842c0-1.495-0.142-2.955-0.401-4.375H68.5z"></path><path fill="#fde751" d="M35,50c0-2.183,0.477-4.252,1.316-6.123l-7.818-5.212c-1.752,3.353-2.748,7.164-2.748,11.21 c0,3.784,0.868,7.365,2.413,10.556L36,55C35.634,53.702,35,51.415,35,50z"></path></g><g><path fill="#472b29" d="M50,74.825c-13.757,0-24.95-11.192-24.95-24.95S36.243,24.925,50,24.925 c5.75,0,11.362,2.005,15.804,5.646l0.576,0.472l-7.327,7.892l-0.504-0.377C56.051,36.688,53.095,35.7,50,35.7 c-7.885,0-14.3,6.415-14.3,14.3S42.115,64.3,50,64.3c5.956,0,11.195-3.618,13.324-9.1L50,55.208l-0.008-10.184l24.433-0.008 l0.104,0.574c0.274,1.503,0.421,2.801,0.421,4.285C74.95,63.633,63.758,74.825,50,74.825z M50,26.325 c-12.985,0-23.55,10.564-23.55,23.55S37.015,73.425,50,73.425s23.55-10.564,23.55-23.55c0-1.211-0.105-2.228-0.3-3.458H51.192 L51.2,53.8h14.065l-0.286,0.91C62.914,61.283,56.894,65.7,50,65.7c-8.657,0-15.7-7.043-15.7-15.7S41.343,34.3,50,34.3 c3.19,0,6.245,0.955,8.875,2.768l5.458-5.878C60.238,28.048,55.178,26.325,50,26.325z"></path></g></svg>
                    {{ __('google') }}
                </x-button>
                </a>
                <a href="{{ route('register')  }}" class=" no-underline" >
                  <x-button class=" bg-gray-900 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>
                    {{ __(' Inscription') }}
                </x-button>
                </a>

                  </div>
              @endauth

                {{-- <div class="my-4" >
                  <a href="login" class="px-3 py-2 hover:shadow-md no-underline text-white bg-gray-800 hover:bg-gray-600 rounded-md my-3 md:hidden ">Connexion </a>
                </div> --}}
            </div>
            <div class="bg-blue-900  md:block  px-8  py-3  md:py-24 text-center col-md-6 col-sm-6 col-12">


                {{-- @if (Route::has('login')) --}}
                  @auth
                  <div class=" my-20">

                    <h3 class=" font-serif mb-4 text-white">salut <span class=" text-white uppercase" >{{Auth::user()->name}}</span></h3>
                    <p class="mb-4 text-white">cliquer sur le acceuil voter votre candidat preferé, avoir des informations Juteuses !</p>
                  </div>
                    @else
                    <h3 class=" font-serif mb-4 text-white">connecter</h3>
                {{-- <p class="mb-4 text-white">connectez-vous pour pouvoir voter votre candidat preferé, avoir des informations Juteuses !</p> --}}
                    {{-- <a href="login" class="btn btn-light">Connexion </a> --}}
                    {{-- @if (Route::has('register')) --}}
                    {{-- <a href="register" class="btn btn-light">Inscription </a> --}}
                    <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <!-- Email Address -->
                      <div>
                          <x-label for="email" class="text-white" :value="__('Email')" />

                          <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                      </div>

                      <!-- Password -->
                      <div class="mt-4">
                          <x-label for="password" class="text-white" :value="__('Mots de passe')" />

                          <x-input id="password" class="block mt-1 w-full"
                                          type="password"
                                          name="password"
                                          required autocomplete="current-password" />
                      </div>

                      <!-- Remember Me -->
                      <div class="block mt-4">
                          <label for="remember_me" class="inline-flex items-center text-white">
                              <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                              <span class="ml-2 text-sm text-gray-600">{{ __('Rester active') }}</span>
                          </label>
                      </div>

                      <div class="items-center text-white justify-end my-2">
                          @if (Route::has('password.request'))
                              <a class="underline text-sm text-gray-100  hover:text-gray-900" href="{{ route('password.request') }}">
                                  {{ __('Mot de passe oublié ?') }}
                              </a>
                          @endif

                          <x-button class="ml-3">
                              {{ __('connexion') }}
                          </x-button>
                      </div>
                  </form>
                    {{-- @endif --}}

                  @endauth
                {{-- @endif --}}
             </div>


        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('js/hide_menu.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
      <script>
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
      </script>
      <script>
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
    </script>
  </body>
</html>
