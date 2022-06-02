<x-app-layout>
  <!--  <div class="container rounded-md my-7 bg-white grid gap-1">
        {{-- contenu --}}
        
        <div class=" font-bold text-xl mx-auto px-6 my-10 rounded-md bg-green-300 ">magazine</div>
        <div class="container py-6 px-6 mx-auto grid">
            <div class="grid gap-1">
              {{-- <!-- Card --> --}}
              <div
                class="flex items-center p-4 bg-gray-700 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div class="mx-auto text-white">
                 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, alias. Magnam atque ducimus nam vero nihil rerum quia praesentium, hic quisquam deleniti maxime deserunt ab distinctio veritatis libero iusto consequuntur.
                </div>
              </div>
              
            </div>
          </div>
    </div> -->

    <div class=" my-7 ml-2 container-fuid relative">
      <h3 class="font-black text-gray-800 md:text-3xl capitalize text-xl my-auto">Magazine du jours </h3>
    </div>
  
    {{-- <div class=" container py-11"> --}}
      <!--  le recents  -->
        {{-- <div class="grid grid-cols-1 grid-rows-2 gap-2 sm:grid-cols-1 sm:grid-rows-2 sm:gap-2 md:grid-cols-3 md:grid-rows-1 md:gap-2 ">
          <div class="relative row-start-1 mx-auto ">
            <img class=" w-48 h-96" src="{{asset('storage/magazines/'.$magazine_last->image)}}" alt="">
            <span class="text-xl font-serif font-bold md:absolute md:top-5 md:left-2 absolute top-5 text-black left-2">N°{{$magazine_last->id}}</span>
          </div>
          <div class=" mx-auto  " >
             <h1 class=" text-xl font-serif font-bold uppercase ">{{$magazine_last->name}}</h1>
             <span>{{$magazine_last->content}}</span>
             <p class=" py-2 flex"> <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg> 0</p>
          </div>
        </div> --}}
        
    {{-- </div> --}}

    <div class="flex flex-col justify-center my-2 md:my-10">
      <div
        class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
        <div class="w-full md:w-1/3 bg-white grid place-items-center">
          <img src="{{asset('storage/magazines/'.$magazine_last->image)}}" alt="tailwind logo" class="rounded-xl" />
        </div>
          <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
            <div class="flex justify-between item-center ">
              <p class="text-gray-500 font-medium my-auto ">Magazine N°{{$magazine_last->id}} </p>
             
              <div class="  my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                  fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              <div class="bg-gray-200 px-3 py-3 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                Superhost</div>
            </div>
            <h3 class="font-black text-gray-800 md:text-3xl capitalize text-xl my-auto">{{$magazine_last->name}}</h3>
            <p class="md:text-lg text-gray-500 text-base my-auto">{{$magazine_last->content}}</p>
            {{-- <p class="text-xl font-black text-gray-800">
              $110
              <span class="font-normal text-gray-600 text-base">/night</span>
            </p> --}}
            <div class="flex items-center my-auto "
            x-data="{ count{{$magazine_last->id}}e: $persist(0) }"
            >
              <form action="{{Route('telechargement.store')}}" method="post">
                @csrf
                <a href="{{asset('storage/files/'.$magazine_last->file)}}">
              <svg 
              x-on:click="count{{$magazine_last->id}}e++"
              xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="50" height="20" viewBox="0 0 24 24" fill="none" stroke="#391515" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"> <circle cx="12" cy="12" r="10"/><path d="M16 12l-4 4-4-4M12 8v7"/></svg>
                </a>
              </form>
              <p 
              x-text="count{{$magazine_last->id}}e"
              class="text-gray-600 font-bold text-sm ml-2 my-auto">
              </p>
              <span 
                
                class="text-gray-500 font-normal my-auto capitalize pl-2"> telechargement</span>
              </p>
            </div>
          </div>
        </div>
      </div>
     <!-- les anciens -->
          <!-- mobiles -->
          <div class=" my-10 ml-2  " >
            <h3 class="font-black text-gray-800 md:text-3xl capitalize text-xl my-auto">Nos magazines  </h3>
          </div >
          <!-- tablette et pc  -->
          @foreach ($magazine as $magazines)
          <div class="flex flex-col justify-center my-4">
            <div
              class="relative flex flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-2 max-w-lg  md:max-w-3xl mx-auto border border-white bg-white">
              <div class="w-1/3 md:w-1/3 bg-white grid place-items-center">
                <img src="{{asset('storage/magazines/'.$magazines->image)}}" alt="tailwind logo" class="rounded-xl" />
              </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col px-4 space-y-2 md:p-3">
                  <div class="flex justify-between item-center ">
                    <p class="text-gray-500 font-medium my-auto ">Magazine N°{{$magazines->id}} </p>
                   
                    <div class="  my-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="bg-gray-200 px-3 py-3 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                      Superhost</div>
                  </div>
                  <h3 class="font-black text-gray-800 md:text-3xl capitalize text-xl my-auto">{{$magazines->name}}</h3>
                  <p class="md:text-lg text-gray-500 text-base my-auto">{{$magazines->content}}</p>
                  {{-- <p class="text-xl font-black text-gray-800">
                    $110
                    <span class="font-normal text-gray-600 text-base">/night</span>
                  </p> --}}
                  <div class="flex items-center my-auto " 
                  x-data="{ count{{$magazines->id}}e: $persist(0) }"
                  >
                  {{-- <button x-on:click="count{{$magazines->id}}e++">Increment</button> --}}
                  {{-- <img 
                  x-on:click="count{{$magazines->id}}e++"
                  class=" w-5 h-5 cursor-pointer"
                  src="{{asset('logo/logoorange.png')}}" alt="" srcset=""> --}}
                    
                  {{-- <svg 
                    x-on:click="count{{$magazines->id}}e++"
                    class="w-6 h-6 " fill="blue" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>  --}}
                    <form action="{{Route('telechargement.store')}}" method="post">
                      @csrf
                      <a href="{{asset('storage/files/'.$magazines->file)}}">
                    <svg 
                    x-on:click="count{{$magazines->id}}e++"
                    xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="50" height="20" viewBox="0 0 24 24" fill="none" stroke="#391515" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"> <circle cx="12" cy="12" r="10"/><path d="M16 12l-4 4-4-4M12 8v7"/></svg>
                      </a>
                    </form>
                    <p 
                    x-text="count{{$magazines->id}}e"
                    class="text-gray-600 font-bold text-sm ml-2 my-auto">
                    </p>
                    <span 
                      
                      class="text-gray-500 font-normal my-auto capitalize pl-2"> telechargement</span>
                  </div>
                </div>
              </div>
            </div>
    @endforeach
    
          {{-- <div class=" grid grid-cols-2 md:grid-cols-3 grid-rows-{n} gap-3 ">
            @foreach ($magazine as $magazines)
                
           
              <div class="relative col-start-1 mx-auto ">
                <img class=" w-48 h-48" src="{{asset('storage/magazines/'.$magazines->image)}}" alt="">
                <span class="text-xl font-serif font-bold md:absolute md:top-5 md:left-2 absolute top-5 text-black left-2">N°{{$magazines->id}}</span>
              </div>
              <div class=" mx-auto  " >
                <h1 class=" text-xl font-serif font-bold uppercase ">{{$magazines->name}}</h1>
                <span>{{$magazines->content}}</span>
                <p class=" py-2 flex"> --}}
                  {{-- <form action="{{Route('telechargement.store')}}" method="post"> --}}
                    {{-- @csrf --}}
                    {{-- <a href="{{asset('storage/files/'.$magazines->file)}}">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg> 
                    </a> 
                    <select class=" hidden" name="id_tele" id="id_tele">
                      <option value="{{$magazines->id}}">{{$magazines->id}}</option>
                    </select> --}}
                  {{-- </form> --}}
                {{-- 0</p>           
              </div>
            @endforeach
          </div> --}}
    <x-slot name='scripts'>
        {{-- insertion du code javascript --}}
    </x-slot>
</x-app-layout>