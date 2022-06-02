<div class=" pb-14">
<nav x-data="{ open:false }" class= "bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 fixed z-20 w-full">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div 
        {{-- x-data="{ open: false }" x-on:click.outside="open = false" --}}

        class="absolute inset-y-0 left-0 flex items-center md:hidden">
          <!-- Mobile menu button-->
          <button 
          {{-- x-on:click="open = !open" --}}
          type="button" class="inline-flex show_hide items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="show w-6 h-6 transform transition-all duration-500 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.
  
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hide w-6 h-6 absolute transform transition-all duration-1000 opacity-0 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center md:items-stretch md:justify-start">
          <div class="flex-shrink-0 flex items-center">
            {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow" /> --}}
            <x-application-logo class="w-auto h-10 "/>
            {{-- <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow" /> --}}
          </div>
          <div class="hidden md:block md:ml-2 justify-between">
            <ul class=" h-16 my-auto flex justify-between flex-row">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <li class="group relative mx-2 flex flex-row cursor-pointer uppercase items-center ">
                <a href="{{URL::to('acceuil')}}" class="tracking-wide text-black font-light group-hover:font-black group-hover:text-black no-underline" >accueil</a>
                <x-newnav-link :active="request()->routeIs('acceuil.index')" ></x-newnav-link>
              </li>

              <li class="group relative mx-2 flex flex-row cursor-pointer uppercase items-center ">
                <a href="{{URL::to('Nous')}}" class=" tracking-wide text-black font-light group-hover:font-black group-hover:text-black no-underline " >nous</a>
                <x-newnav-link :active="request()->routeIs('Nous.index')" ></x-newnav-link>
              </li>

              <li class=" group relative mx-2 flex flex-row cursor-pointer uppercase items-center ">
                <a href="{{URL::to('cat')}}" class=" tracking-wide text-black font-light group-hover:font-black group-hover:text-black   no-underline ">Catalogue</a>
                <x-newnav-link :active="request()->routeIs('cat.index')" ></x-newnav-link>
              </li>

              <li class="group relative mx-2 flex flex-row cursor-pointer uppercase items-center ">
                <a href="{{URL::to('annonce')}}" class="tracking-wide text-black font-light group-hover:font-black group-hover:text-black   no-underline">blog</a>
                <x-newnav-link :active="request()->routeIs('annonce.index')" ></x-newnav-link>
              </li>

              <li class="group relative mx-2 flex flex-row cursor-pointer uppercase items-center ">
                <a href="{{URL::to('magazine')}}" class="tracking-wide text-black font-light group-hover:font-black group-hover:text-black   no-underline">Magazine</a>
                <x-newnav-link :active="request()->routeIs('magazine.index')" ></x-newnav-link>
              </li>

              <li class="group relative mx-2 flex flex-row cursor-pointer uppercase items-center ">
                <a href="{{URL::to('contact')}}" class="tracking-wide text-black font-light group-hover:font-black group-hover:text-black   no-underline">Contact</a>
                <x-newnav-link :active="request()->routeIs('contact')"></x-newnav-link>
              </li>

            </ul>
          </div>
        </div>
        
        <div class="absolute  inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          @if (request()->routeIs('album'))
         
          <div class=" relative " x-data="{ isOpen: false}">
            {{-- icone de recherche  --}}
          {{-- <button  
            @click="isOpen = !isOpen" 
            @keydown.escape="isOpen = false" 
            type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                {{-- <span class="sr-only">View notifications</span> --}}
                <!-- Heroicon name: outline/bell -->
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
           </button> --}}
          {{-- <div  
            x-show="isOpen"
            @click.away="isOpen = false"
            class=" overflow-hidden origin-top-right absolute right-0 mt-2 w-48 rounded-xl shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none" >
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <input type="search" placeholder="recherche" name="search" id="search">
              {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a> --}}
            {{-- </div> --}}
        </div>
          @endif
          
  
          <!-- Profile dropdown -->
          <div class="dropdown relative ">
            <button class=" text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
              </svg>
            </button>
            <ul class="dropdown-content absolute hidden text-gray-700 pt-1 right-1 ">
              @if (Route::has('login'))
              @auth
              
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
              <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="route('logout')" onclick="event.preventDefault();
                this.closest('form').submit();">Deconnexion</a></li>
                </form>
          
          
                @else
              <li><a class="rounded-t bg-gray-200 no-underline hover:bg-gray-400 py-4 px-4 block whitespace-no-wrap" href="{{ route('login') }}">Connexion</a></li>
              @if (Route::has('register'))
              <li><a class="rounded-b no-underline bg-gray-200 hover:bg-gray-400 py-4 px-4 block whitespace-no-wrap" href="{{ route('register') }}">Inscription</a></li>
              @endif 
              @endauth
              @endif
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </nav>
</div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div
  {{-- x-show="open"  --}}
  class="barre transform -translate-x-full transition-all duration-1000 bg-black h-full z-20 fixed top-16 w-full md:hidden" id="mobile-menu">
    <div class="capitalize text-center pt-2 pb-3 mx-auto space-y-5">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <x-responsivenav-link :href="route('acceuil.index')" :active="request()->routeIs('acceuil.index')" >
        {{ __('acceuil') }}
      </x-responsivenav-link>
      <x-responsivenav-link :href="route('Nous.index')" :active="request()->routeIs('Nous.index')" >
        {{ __('Nous') }}
      </x-responsivenav-link>
      <x-responsivenav-link :href="route('cat.index')" :active="request()->routeIs('cat.index')" >
        {{ __('cat') }}
      </x-responsivenav-link>
      <x-responsivenav-link :href="route('annonce.index')" :active="request()->routeIs('annonce.index')" >
        {{ __('annonce') }}
      </x-responsivenav-link>
      <x-responsivenav-link :href="route('magazine.index')" :active="request()->routeIs('magazine.index')" >
        {{ __('magazine') }}
      </x-responsivenav-link>
      <x-responsivenav-link :href="route('contact')" :active="request()->routeIs('contact')" >
        {{ __('contact') }}
      </x-responsivenav-link>

    </div>
  </div>
  