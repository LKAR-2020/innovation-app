<x-adminadmin>
    <div class="container px-6 mx-auto grid">
        <h2
          class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
          edit une banniere
        </h2>
        <form action="{{url('admin/admin/addbanner/'.$editbanners->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')

          <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
            <div class=" mx-10 lg:mx-44 px-4 py-10 bg-gray-200 rounded-md">
                <label for="content" class="block text-sm">
                    <span class="text-gray-700 text-sm  dark:text-gray-400">contenue de la Bannière</span>
                    <input
                    id="content"
                    type="text"
                    name="content"
                    class="block w-full mt-4 px-4  rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                    placeholder="mise a jour du titre de banner"
                    value="{{$editbanners->content}}"
                    />
                  </label>
                
                {{-- <label for="content" class="block mt-4 text-sm">
                    
                    <span class="text-gray-700 dark:text-gray-400">Message</span>
                    <textarea
                    value="" 
                    name="content"
                    id="content"
                      class="block w-full rounded-md mt-1 text-sm form-textarea focus:border-purple-400 focus:shadow-md focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      rows="3"
                      placeholder="{{$editbanners->content}}"
                    >{{$editbanners->content}}</textarea>
                  </label> --}}
                  <label for="image" class="block mt-6 mb-6 text-sm">
                      <span class="text-gray-700 text-sm  dark:text-gray-400">images de l'banner</span>
                      <img class=" border-2 border-double shadow-md mx-auto rounded-md w-28 h-28 " src="{{asset('storage/banners/'.$editbanners->image)}}" alt="mise a jour de l'image">
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
        

      </div>
</x-adminadmin>