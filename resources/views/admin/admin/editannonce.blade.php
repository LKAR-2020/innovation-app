<x-adminadmin>
          
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              edit une annonce
            </h2>
            <form action="{{url('admin/admin/addannonce/'.$editannonces->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
  
              <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                <div class=" mx-10 lg:mx-44 px-4 py-10 bg-gray-200 rounded-md">
                    <label for="titre" class="block text-sm">
                        <span class="text-gray-700 text-sm  dark:text-gray-400">Titre de l'annonce</span>
                        <input
                        id="titre"
                        type="text"
                        name="titre"
                        class="block w-full mt-4 px-4  rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                        placeholder="mise a jour du titre de l'annonce"
                        value="{{$editannonces->name}}"
                        />
                      </label>
                    
                    <label for="content" class="block mt-4 text-sm">
                        
                        <span class="text-gray-700 dark:text-gray-400">Message</span>
                        <textarea
                        {{-- value="" --}}
                        name="content"
                        id="content"
                          class="block w-full rounded-md mt-1 text-sm form-textarea focus:border-purple-400 focus:shadow-md focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                          rows="3"
                          placeholder="{{$editannonces->content}}"
                        >{{$editannonces->content}}</textarea>
                      </label>
                      <label for="image" class="block mt-6 mb-6 text-sm">
                          <span class="text-gray-700 text-sm  dark:text-gray-400">images de l'annonce</span>
                          <img class=" border-2 border-double shadow-md mx-auto rounded-md w-28 h-28 " src="{{asset('storage/annonces/'.$editannonces->image)}}" alt="mise a jour de l'image">
                        <input
                        id="image"
                        type="file"
                        name="image"
                        class="block w-full mt-4 px-4  rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                        placeholder="nom du top model"
                        />
                      </label>
                      <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit"> valide </button>
                    </div>
                  </div>
                </form>
                <Form method="POST" action="{{Route('admin.addannonce.destroy',$editannonces->id)}}">
                  @csrf
                  @method('DELETE')
                  <button
                    onclick="return confirm(' voulez-vous le supprimer ')"
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Delete"
                  >
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                 </Form>
                {{-- <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit"> supprimer </button> --}}
            

          </div>
        </x-adminadmin>
