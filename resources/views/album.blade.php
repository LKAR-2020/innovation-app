<x-app-layout>
    <form action="{{route('search')}}" method="GET">
    <div class="container pt-4 flex justify-center flex-1 lg:mr-32">
        <div
          class="relative w-full max-w-xl  focus-within:text-purple-500"
        >
          <div class="absolute inset-y-0 flex items-center pl-2">
            <svg
              class="w-4 h-4"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </div>
          <input
            name="search"
            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
            type="text"
            placeholder="Rechercher un profil"
            aria-label="Search"
          />
        </div>
      </div>
    </form>
      <hr class="container">
    <div class=" container py-3 ">
        <div class=" grid sm:grid-cols-2 sm:gap-1 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4">
            @foreach ($albums as $album)

            <div class="relative   ">
                {{-- @foreach ($photo as $phot) --}}
               <div class="aspect-w-9 aspect-h-16">
                   <img class=" rounded" src="{{asset('storage/photos/'.$album->image)}}" alt="" id="{{$album->id}}">
               </div>
                {{-- @endforeach --}}
                <div id="name" class="top-3/4 text-center py-2 uppercase text-white m-auto w-full bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 ">
                    {{$album->prenom}}
                </div>
                <div class="flex z-40 pb-4 justify-between  ">
                    <div class=" flex justify-between" x-data="{ isOpen: false}">
                        <!-- <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg> -->

                        @auth
                        <form action="{{route('album.like')}}" id="form-js" >

                            <input type="hidden" id="album-id-js" value="{{$album->id}}">
                            <button
                            @click="isOpen = !isOpen"
                            class="absolute bottom-6 h-10 w-8 bg-white left-0 rounded-r-full" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" mx-auto my-auto h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <title>votés</title>
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </button>

                            <div class="absolute text-center top-1 right-1 rounded-full h-10 w-20 bg-gradient-to-b from-blue-400 via-red-500 to-pink-500">
                                <div class="h-full w-full py-2 text-center  my-auto" id="count-js"> {{$album->likes->count()}} j'aimes </div>
                            </div>
                          <form action="{{ route('panier.add', $album) }}" method="post">
                            @csrf
                            <div class="absolute text-center top-1 left-1 rounded-full h-10 w-10 bg-gradient-to-b from-blue-400 via-red-500 to-pink-500">
                              <button class="h-full w-full py-2 text-center my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                </svg>
                              </button>
                            </div>
                          </form>
                            {{-- chute de paillette --}}
                            <template x-if="isOpen"
                            {{-- x-show="isOpen" --}}
                            @click.away="isOpen = false"
                            class="  z-10 absolute top-0 left-0 right-0 h-full  "
                             {{-- class=" absolute a z-10 left-0 right-0 top-0 h-auto text-center transform translate-y-60 duration-1000 ease-linear transition-all" --}}
                             >
                             <div class=" slow absolute  mx-auto inset-0 mb-12 " >

                             </div>

                            {{-- <img src="{{asset('logo/photobg.png')}}" alt="" srcset=""> --}}

                            </template>
                            <template x-if="isOpen"
                            {{-- x-show="isOpen" --}}
                            @click.away="isOpen = false"
                            class="  z-10 absolute top-0 left-0 right-0 h-full  "
                             {{-- class=" absolute a z-10 left-0 right-0 top-0 h-auto text-center transform translate-y-60 duration-1000 ease-linear transition-all" --}}
                             >
                             <div class=" animate-bounce absolute z-10 top-1/2 left-0 right-0 mx-11 sm:mx-10 rounded backdrop-blur-sm bg-white/30 text-center " >
                               <img class=" mx-auto mt-4 h-20 w-20 " src="{{asset('logo/logoorange.png')}}" alt="" srcset="">
                                <h2>{{Auth::user()->name}} orange vous remercie pour vos votes</h2>
                              </div>

                            {{-- <img src="{{asset('logo/photobg.png')}}" alt="" srcset=""> --}}

                            </template>
                            {{-- <div
                            x-show="isOpen"
                            @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-1000"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-1000"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90"
                            class=" animate-bounce absolute z-10 top-1/2 left-0 right-0 mx-11 sm:mx-10 rounded backdrop-blur-sm bg-white/30 text-center" id="{{$album->id}}">
                           <div class=" mx-auto mt-4 h-20 w-20 bg-yellow-500 opacity-100">

                           </div>
                            <span class="mx-auto px-2 opacity-100">
                              {{Auth::user()->name}} orange vous remercie pour vos votes
                           </span>
                           </div> --}}
                        </form>

                        @else
                        <button
                        class="absolute bottom-6 h-10 w-8 bg-white left-0 rounded-r-full "
                        type="button"
                        onclick="toggleModal('modal-example-small')"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class=" mx-auto my-auto h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <title>connecter vous</title>
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                            </svg>
                        </button>
                        <div class="absolute text-center top-1 right-1 rounded-full h-10 w-20 bg-gradient-to-b from-blue-400 via-red-500 to-pink-500">
                          <div class="h-full w-full py-2 text-center  my-auto" id="count-js"> {{$album->likes->count()}} j'aimes </div>
                        </div>
                        <div
                        class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-example-small">
                        <div class="relative w-auto my-6 mx-auto max-w-sm">
                          <!--content-->
                          <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                            <!--header-->
                            <div class="flex justify-center p-2 border-b border-solid border-gray-200 rounded-t">
                                <x-application-logo class=" w-12 fill-current text-gray-500" onclick="toggleModal('modal-example-small')" />
                              <button
                                class="p-1 ml-auto bg-transparent border-0 text-red-700 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                onclick="toggleModal('modal-example-small')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                              </button>
                            </div>

                            <!--body-->
                            <div class="relative p-6 flex-auto">
                              <p class="my-4 text-gray-500 text-lg leading-relaxed">
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Mots de passe')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Rester active') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié?') }}
                                            </a>
                                        @endif

                                        <x-button class="ml-3">
                                            {{ __('connexion') }}
                                        </x-button>
                                    </div>
                                </form>
                              </p>
                            </div>
                            <!--footer-->
                            <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
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
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>

                        @endauth

                    </div>
                    {{-- oiel --}}
                    <div class=" absolute bottom-6 h-10 w-8 bg-white right-0 rounded-l-full">
                        <a href="{{url('album/'.$album->id)}}" method="GET">
                            <svg class=" text-black  mx-auto my-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>voir profil</title><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </a>
                    </div>
                </div>

            </div>

            @endforeach

        </div>
    </div>

    <x-slot name="scripts">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
          }

    </x-slot>
</x-app-layout>
