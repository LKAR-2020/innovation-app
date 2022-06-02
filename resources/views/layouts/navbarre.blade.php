<!-- entete -->
<div class="md:hidden block border-b-2 z-50 h-12 w-full sm:text-3xl fixed bg-gray-800 ">
    <div class=" float-left border-r h-12 px-7 py-2 relative ">
        <button class=" flex show_hide" >
            <svg class="show w-6 h-6 transform transition-all duration-500 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            <svg class="hide w-6 h-6 absolute transform transition-all duration-1000 opacity-0 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    <div class=" float-right border-l h-12 px-7 py-2 relative">
        <div>
            <svg class=" rot w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
    </div>
</div>
<!-- barre de recherche -->
<div class=" hidden fixed z-50 px-80 py-12 " >
  <div class="flex relative justify-end items-center rounded-md shadow ml-auto mr-12">
    <input type="search" name="" id="" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md " placeholder="recherche">
  <a href="#" class="absolute flex items-center  px-3 py-2.5 mr-2.5 text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>  
  </a>
</div>
</div>
<!-- barre vertical -->
<div class=" barre transform -translate-x-full transition-all duration-1000 bg-gray-900  z-30 fixed rounded-sm w-1/2 py-12" id="vertical">
  <div class=" text-white uppercase font-bold text-lg flex-col ">
      <a href="{{URL::to('acceuil')}}" class=" no-underline hover:text-yellow-400">
        <div class=" flex border-b-2 px-4 py-3 "><svg class="w-6 h-6 mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>accueil</div>
      </a>
      <a href="{{URL::to('Nous')}}" class=" no-underline hover:text-yellow-400">
        <div class=" flex border-b-2 px-4 py-3 ">nous</div>
      </a>
      <a href="{{URL::to('cat')}}" class=" no-underline hover:text-yellow-400">
        <div class=" flex border-b-2 px-4 py-3 ">catalogue</div>
      </a>
      <a href="{{URL::to('annonce')}}" class=" no-underline hover:text-yellow-400">
        <div class="  border-b-2 px-4 py-3 ">annonce</div>
      </a>
      <a href="{{URL::to('magazine')}}" class=" no-underline hover:text-yellow-400">
        <div class="  border-b-2 px-4 py-3 ">magazine</div>
      </a>
      @if (Route::has('login'))
          @auth
          
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a class=" px-6 my-7 no-underline hover:text-yellow-400" href="route('logout')"
              onclick="event.preventDefault();
                          this.closest('form').submit();">logout</a>
              
          </form>
          
          
            @else
            <a href="{{ route('login') }}" class=" no-underline hover:text-yellow-400">
              <div class=" flex border-b-2 px-4 py-3 "><svg class="w-6 h-6 mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>Connexion</div>
            </a>
          
             @if (Route::has('register'))
             <a href="#" class=" no-underline hover:text-yellow-400">
              <div class="  border-b-2 px-4 py-3 ">Inscription</div>
            </a>
             @endif 
          @endauth
      @endif
     
     
      
  </div>
</div>
  <div class="border md:bg-gray-100 shadow md:shadow-lg">
      <div class=" ">
        {{-- partir logo --}}
          {{-- <div class=" h-full md:h-auto px-8 flex">
              <div class="md:py-0 py-16 items-center flex-1"><img src="{{('logo/logo.gif')}}" alt="logo"></div>
              <div class="hidden md:block w-24 h-24 bg-white-100"></div>
          </div> --}}
              
          <div class="hidden md:block mr-20 text-sm  ">
            @if (Route::has('login'))
            <ul class="flex md:space-x-4 md:justify-end  ">
              @auth
                  
              <li class="text-bold  text-green-600">Bienvenue M. <span class=" uppercase" >{{Auth::user()->name}}</span> , sur notre site</li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <a class="btn btn-danger" href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">logout</a>
                  
              </form>
              {{-- <a href="{{ url('/dashboard') }}" class="text-xl text-gray-700 ">Profile</a> --}}
              @else
              <a href="{{ route('login') }}" class=" no-underline hover:bg-yellow-200 rounded-md px-3 ">
                  <li>Connexion</li>
              </a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class=" no-underline hover:bg-yellow-200 rounded-md px-3 ">
                  <li>Inscription</li>
              </a>
                  
              @endif
              
           </ul>
          @endauth  
          @endif
    </div>
                  {{-- la barre de recherche  --}}
          {{-- <div class="hidden mt-8 md:flex lg:mt-0 lg:flex-shrink-0 mr-20">
  
              <div class="flex relative justify-end items-center rounded-md shadow ml-auto mr-12">
                  <input type="search" name="" id="" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md " placeholder="recherche">
                <a href="#" class="absolute flex items-center  px-3 py-2.5 mr-2.5 text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>  
                </a>
              </div>
              
          </div> --}}
      </div>
  </div>


<div class="hidden bg-white lg:w-full h-20 justify-end md:flex flex-row  border-b-8 fixe_dropdown">
  <div class=" bg-yellow-500 w-4 ">

  </div>
<div class=" py-3 px-2 bg-red-600 ">
      <div class="dropdown inline-block relative">
          <button class=" border-r-2 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1"><a class=" uppercase no-underline  hover:text-yellow-600 " href="acceuil">accueil</a></span>
          </button>
          

      </div>
      <div class="dropdown inline-block relative">
          <button class=" border-r-2 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1"><a class=" no-underline hover:text-yellow-600 uppercase" href="Nous">nous</a></span>
          <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg> -->
          </button>
          
          
      </div>
      <div x-data="{ isOpen: false}" class="dropdown inline-block relative">
          <button 
          @click="isOpen = !isOpen" 
          @keydown.escape="isOpen = false" 
                            
          class=" border-r-2 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
          
          >
          <span class="mr-1"><a class=" no-underline uppercase hover:text-yellow-600" href="cat">catalogue</a></span>
          {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg> --}}
          </button>
          {{-- <ul  --}}
          {{-- x-show="isOpen"
          @click.away="isOpen = false"
          class=" absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20 "> 
            <div class=" flex">
              <div class="container">
                          <li><a href='#'>femme</a></li>
                          <li><a href='#'>femme</a></li>
                          <li><a href='#'>femme</a></li>
                          <li><a href='#'>femme</a></li>
                          <li><a href='#'>femme</a></li>
              </div> --}}
              {{-- <div class="container">
                <h3>Heading 1</h3>
                          <li><a href='#'>Category One Sublink</a></li>
                          <li><a href='#'>Category One Sublink</a></li>
                          <li><a href='#'>Category One Sublink</a></li>
                          <li><a href='#'>Category One Sublink</a></li>
                          <li><a href='#'>Category One Sublink</a></li>
              </div> --}}
              {{-- <div class="container">
                <h3>Heading 1</h3>
            <li><a href='#'>Category One Sublink</a></li>
            <li><a href='#'>Category One Sublink</a></li>
            <li><a href='#'>Category One Sublink</a></li>
            <li><a href='#'>Category One Sublink</a></li>
            <li><a href='#'>Category One Sublink</a></li>
              </div> --}}
            {{-- </div> --}}
          {{-- </ul> --}}
          
          
      </div>
      <div class="dropdown inline-block relative">
          <button class=" border-r-2 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1"><a class=" no-underline uppercase hover:text-yellow-600" href="annonce">annonce</a></span>
          <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg> -->
          </button>
          
      </div>
      <div class="dropdown inline-block relative">
          <button class=" border-r-2 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1"><a class=" no-underline uppercase hover:text-yellow-600" href="magazine">magazine</a></span>
          </button>
         
      </div>

  
</div>
<div class=" flex justify-between items-center bg-black px-3"> 
  <div class=" my-auto mx-auto rounded-full w-10 h-10 bg-gray-50 ">
    <svg xmlns="http://www.w3.org/2000/svg" class=" rounded-full bg-red-300 h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
    </svg>
  </div>
  <div class=" py-2 flex rounded-full">
    @if (Route::has('login'))
    <ul class="flex items-stretch  ">
      @auth
          
      <li class="text-bold  py-2 text-green-600">salut {{Auth::user()->name}}</li>
      <form method="POST" action="{{ route('logout') }}">
          @csrf

          <a class="btn btn-danger" href="route('logout')"
          onclick="event.preventDefault();
                      this.closest('form').submit();">logout</a>
          
      </form>
      {{-- <a href="{{ url('/dashboard') }}" class="text-xl text-gray-700 ">Profile</a> --}}
      @else
      <a href="{{ route('login') }}" class=" no-underline hover:bg-yellow-200 rounded-md px-3 ">
          <li>Connexion</li>
      </a>
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class=" no-underline hover:bg-yellow-200 rounded-md px-3 ">
          <li>Inscription</li>
      </a>
          
      @endif
      
   </ul>
  @endauth  
  @endif
  </div>
</div>
</div>