<x-adminadmin>
    <div class="container px-6 mx-auto grid">
        <h4
              class="mb-4 text-lg uppercase font-semibold text-gray-600 dark:text-gray-300"
            >
              liste des slides
            </h4>
             {{-- formuaire multiple upload --}}
             {{-- <a href="admin/admin/create" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> valide </a> --}}
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">photo</th>
                    <th class="px-4 py-3">id</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">action</th>
                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                @foreach ($slides as $slide)
                  <tr class="text-gray-700 text-lg uppercase dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="{{asset('storage/sliders/'.$slide->image)}}"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          {{-- <p class="font-semibold">{{$model->name}} {{$model->prenom}}</p> --}}
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            {{$slide->name}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{$slide->id}}
                    </td>
                    {{-- <td class="px-4 py-3 text-xs">
                      <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td> --}}
                    <td class="px-4 py-3 text-sm">
                      {{$slide->created_at}}
                    </td>
                  {{-- <form action=""> --}}
                    <td>
                        <div class="flex items-center space-x-4 text-sm">
                         <a href="{{URL::to('admin/admin/addslide/'.$slide->id.'/edit ')}}">
                          <button
                          onclick="return confirm(' voulez-vous faire une mise à jour? ')"
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Edit"
                        >
                          <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                            ></path>
                          </svg>
                        </button>
                         </a>
                         {{-- {{ Form::open( array('url' => 'admin/admin/addannonce/'.$annonce->id, 'class'=>'pull-right' )) }}
                         {{ Form::hidden('_method', 'DELETE') }}
                         {{ Form::submit('voulez-vous le supprimer', array('class' =>'btn btn-warning' )) }}
                         {{ Form::close() }} --}}
                         
                          
                        </div>
    
                      </td>
                  {{-- </form> --}}
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        <h2
          class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
          ajouter un slide
        </h2>
        <form action="{{route('admin.addslide.store')}}" method="post" enctype="multipart/form-data">
            @csrf
  
          <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
            <div class=" mx-10 px-4 py-10 bg-gray-200 rounded-md">
              
                <label class="block mt-4 mb-10 text-lg" for="slide">
                    <span class="text-gray-700 dark:text-gray-400">
                        Nom des slides
                      </span>
                      <input
                id="slide"
                type="text"
                name="slide"
                required
                class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                placeholder="nom du slide"
                />
                    {{-- <select class="block w-full rounded-xl hover:shadow-2xl mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="idtopmodel" 
                    id="idtopmodel"
                    >  @foreach ($topmodels as $topmodel)
                        
                    <option value="{{$topmodel->id}}"> {{$topmodel->name}} {{$topmodel->prenom}}</option>
                    @endforeach
                    </select> --}}
                </label>
                <label class="block mt-4 mb-10 text-lg" for="slide">
                  <span class="text-gray-700 dark:text-gray-400">
                      liens de la pub
                    </span>
                    <input
                    id="link"
                    type="text"
                    name="link"
                    required
                    class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                    placeholder="inserer le liens"
                    />
                  {{-- <select class="block w-full rounded-xl hover:shadow-2xl mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="idtopmodel" 
                  id="idtopmodel"
                  >  @foreach ($topmodels as $topmodel)
                      
                  <option value="{{$topmodel->id}}"> {{$topmodel->name}} {{$topmodel->prenom}}</option>
                  @endforeach
                  </select> --}}
              </label>
              
              <label for="images_slide" class="block text-sm">
                <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">images slides</span>
                <input
                id="images_slide"
                type="file"
                name="images_slide[]"
                required
                multiple
                accept="'images/*"
                class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                {{-- placeholder="nom du top model" --}}
                />
              </label>
            </div>
            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit"> valide </button>
          </div>
        </form >
  
      </div>
      <div class="container px-6 mx-auto grid">
        <h4
        class="mb-4 text-lg uppercase font-semibold text-gray-600 dark:text-gray-300"
      >
        liste des banners
      </h4>
       {{-- formuaire multiple upload --}}
       {{-- <a href="admin/admin/create" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> valide </a> --}}
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
              <th class="px-4 py-3">photo</th>
              <th class="px-4 py-3">id</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">action</th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
          >
          @foreach ($banners as $banner)
            <tr class="text-gray-700 text-lg uppercase dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div
                    class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                  >
                    <img
                      class="object-cover w-full h-full rounded-full"
                      src="{{asset('storage/banners/'.$banner->image)}}"
                      alt=""
                      loading="lazy"
                    />
                    <div
                      class="absolute inset-0 rounded-full shadow-inner"
                      aria-hidden="true"
                    ></div>
                  </div>
                  <div>
                    {{-- <p class="font-semibold">{{$banner->name}} {{$model->prenom}}</p> --}}
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      {{-- {{$model->style}} --}}banner
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                {{$banner->id}}
              </td>
              {{-- <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                >
                  Approved
                </span>
              </td> --}}
              <td class="px-4 py-3 text-sm">
                {{$banner->created_at}}
              </td>
            {{-- <form action=""> --}}
                <td>
                    <div class="flex items-center space-x-4 text-sm">
                     <a href="{{URL::to('admin/admin/addbanner/'.$banner->id.'/edit ')}}">
                      <button
                      onclick="return confirm(' voulez-vous faire une mise à jour? ')"
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                        ></path>
                      </svg>
                    </button>
                     </a>
                     {{-- {{ Form::open( array('url' => 'admin/admin/addannonce/'.$annonce->id, 'class'=>'pull-right' )) }}
                     {{ Form::hidden('_method', 'DELETE') }}
                     {{ Form::submit('voulez-vous le supprimer', array('class' =>'btn btn-warning' )) }}
                     {{ Form::close() }} --}}
                     {{-- <Form method="POST" 
                     action="{{Route('admin.addbanner.destroy',$annonce->id)}}"
                     >
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
                     </Form> --}}
                    </div>

                  </td>
            {{-- </form> --}}
            </tr>
          @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
        <h2
          class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
          ajouter une bannière
        </h2>
        <form action="{{route('admin.addbanner.store')}}" method="post" enctype="multipart/form-data">
            @csrf
  
          <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
            <div class=" mx-10 px-4 py-10 bg-gray-200 rounded-md">
              
                <label class="block mt-4 mb-10 text-lg" for="banner">
                    <span class="text-gray-700 dark:text-gray-400">
                        Nom des Bannières
                      </span>
                      <input
                id="banner"
                type="text"
                name="banner"
                required
               
                class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                placeholder="nom de la bannière"
                />
                    {{-- <select class="block w-full rounded-xl hover:shadow-2xl mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="idtopmodel" 
                    id="idtopmodel"
                    >  @foreach ($topmodels as $topmodel)
                        
                    <option value="{{$topmodel->id}}"> {{$topmodel->name}} {{$topmodel->prenom}}</option>
                    @endforeach
                    </select> --}}
                </label>
              
              <label for="images_banner" class="block text-sm">
                <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">images Bannière</span>
                <input
                id="images_banner"
                type="file"
                name="images_banner[]"
                required
                multiple
                accept="'images/*"
                class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                placeholder="nom du top model"
                />
              </label>
            </div>
            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit"> valide </button>
          </div>
        </form >
  
      </div>
</x-adminadmin>