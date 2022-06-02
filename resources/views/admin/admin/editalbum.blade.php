<x-adminadmin>
          
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
        edit une album
      </h2>
      {{-- <form action="{{url('admin/admin/addalbum/'.$editalbums)}}" enctype="multipart/form-data" method="post"> --}}
          @csrf
          @method('PUT')

        <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
          
          <div class=" mx-10 lg:mx-44 px-4 py-10 bg-gray-200 rounded-md">
             
              
              <div class="text-lg capitalize" > vous êtes sur le point de modifier les photos de
                <span class=" leading-3 text-blue-500 uppercase " >{{$albums->name}}  </span>
                <img class=" border-2 border-double shadow-md mx-auto rounded-md w-28 h-28 " src="{{asset('storage/photos/'.$albums->image)}}" alt="mise a jour de l'image">
              </div>
                <label for="image" class="block mt-6 mb-6 text-sm">
                    <span class="text-gray-700 text-sm  mx-auto dark:text-gray-400">images de l'album</span>
                    @if ($editalbums === [])
                       <div class="mx-auto">ce profile n'a pas d'albums</div>
                    @else
                    <div class="flex ">

                      @foreach ($editalbums as $images)
                      <div class="relative ">
                        <form action="POST" action="{{Route('admin.addalbum.destroy', $images)}}">
                       <img class=" border-2 border-double shadow-md rounded-md w-28 h-28 " src="{{asset('storage/images/'.$images)}}" alt="mise a jour de l'image">
                       
                         @csrf
                         @method('DELETE')
                        <button 
                        onclick="return confirm(' voulez-vous le supprimer ')"
                        title="supprimer" type="button" class="absolute text-red-900 text-2xl z-40 top-1 left-1">X</button>
                       </form>
                      </div> 
                      @endforeach 
                    </div>
                    @endif
                    <label for="multimage" class=" mt-4 block text-sm">
                      <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">ajouter albums</span>
                      <input
                      id="multimage"
                      type="file"
                      name="multimage[]"
                      required
                      multiple
                      accept=".jpg, .jpeg, .png"
                      class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                      placeholder="nom du top model"
                      />
                    </label>
                  
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit"> valide </button>
          </div>
        </div>
      {{-- </form> --}}
      

    </div>
  </x-adminadmin>
