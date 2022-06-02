<x-adminadmin>
  <div class="container px-6 mx-auto grid">
              <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Dashboard
              </h2>
              
          
              <!-- Cards -->
              <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card -->
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
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
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      utilisateurs 
                    </p>
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                     
                    {{$users->count()}}
                    </p>
                  </div>
                </div>
                <!-- Card -->
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <div
                    class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                  >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      topmodel
                    </p>
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                      {{$topmodel->count()}}
                    </p>
                  </div>
                </div>
                <!-- Card -->
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <div
                    class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                  >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                      ></path>
                    </svg>
                  </div>
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      annonces
                    </p>
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                      {{$annonces->count()}}
                    </p>
                  </div>
                </div>
                <!-- Card -->
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <div
                    class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                  >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
                  <div>
                    <p
                      class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                    >
                      magazine
                    </p>
                    <p
                      class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                    >
                    {{$magazine->count()}}
                    </p>
                  </div>
                </div>
              </div>
              {{-- add new topmodel --}}
              <h4
                class="mb-4 text-lg uppercase font-semibold text-gray-600 dark:text-gray-300"
              >
                liste des profiles
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
                      <th class="px-4 py-3">topmodel</th>
                      <th class="px-4 py-3">nombre de vote</th>
                      <th class="px-4 py-3">genre</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">action</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach ($models as $model)
                    <tr class="text-gray-700 text-lg uppercase dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="{{asset('storage/photos/'.$model->image)}}"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{$model->name}} {{$model->prenom}}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              {{$model->style}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$model->likes->count()}} j'aimes
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          {{$model->sexe}}
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$model->created_at}}
                      </td>
                    
                      <td>
                        <div class="flex items-center space-x-4 text-sm">
                         {{-- <a href="{{URL::to('admin/admin/addannonce/'.$annonce->id.'/edit ')}}"> --}}
                          <button
                          onclick="return confirm('voulez-vous faire une mise à jour? ')"
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
                         <Form method="POST" 
                         action="{{Route('admin.adduser.destroy',$model->id)}}"
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
                         </Form>
                        </div>
    
                      </td>
                    
                    </tr>
                  @endforeach
                    
                  </tbody>
                </table>
              </div>
              {{$models->links('tailwind')}}
            </div>
  
            <h4
            class="mb-4 text-lg uppercase font-semibold text-gray-600 dark:text-gray-300"
          >
           liste des annonces
          </h4>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">id</th>
                    <th class="px-4 py-3">annonce</th>
                    <th class="px-4 py-3">date</th>
                    {{-- <th class="px-4 py-3">Status</th> --}}
                    <th class="px-4 py-3">contenu</th>
                    <th class="px-4 py-3">action</th>
                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
               
                @foreach ($annonces as $annonce)
                  <tr class="text-gray-700 text-lg uppercase dark:text-gray-400">
                    <td class="px-4 py-3">
                      {{$annonce->id}}
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="{{asset('storage/annonces/'.$annonce->image)}}"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">{{$annonce->name}}</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            {{$annonce->name}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      <span>
                        {{$annonce->created_at}}
                      </span>
                    </td>
                    {{--<td class="px-4 py-3 text-xs">
                       <span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span> 
                    </td> --}}
                    <td class="px-4 py-3 text-sm">
                      {{$annonce->content}}
                    </td>
                  
                    <td>
                      <div class="flex items-center space-x-4 text-sm">
                       <a href="{{URL::to('admin/admin/addannonce/'.$annonce->id.'/edit ')}}">
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
                       <Form method="POST" action="{{Route('admin.addannonce.destroy',$annonce->id)}}">
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
                      </div>
  
                    </td>
                  
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
            </div>
            {{$annonces->links('tailwind')}}
          </div>
          
          <h4
            class="mb-4 text-lg uppercase font-semibold text-gray-600 dark:text-gray-300"
          >
           album photo des top model
          </h4>
          
  
  
  
              <!-- New Table -->
               <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                  <table class="w-full whitespace-no-wrap">
                    <thead>
                      <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                      >
                        <th class="px-4 py-3">nom et prenom</th>
                        <th class="px-4 py-3">photo</th>
                       {{-- <th class="px-4 py-3">Status</th> --}}
                        <th class="px-4 py-3">action</th>
                      </tr>
                    </thead>
                    <tbody
                      class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @foreach ($topmodel as $mode)
                        
                      <tr class="text-gray-700 text-lg uppercase dark:text-gray-400">
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div
                              class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                            >
                              <img
                              class="object-cover w-full h-full rounded-full"
                              src="{{asset('storage/photos/'.$mode->image)}}"
                              alt=""
                              loading="lazy"
                            />
                              <div
                                class="absolute inset-0 rounded-full shadow-inner"
                                aria-hidden="true"
                              ></div>
                            </div>
                            <div>
                              <p class="font-semibold">{{$mode->nom}}</p>
                              <p class="text-xs text-gray-600 dark:text-gray-400">
                                {{$mode->prenom}}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          {{-- <img class="m-4 ring-4 ring-red-300"  src="{{asset('storage/images/'.$albummodel)}}"> --}}
                          <a href="{{URL::TO('admin/admin/addalbum/'.$mode->id.'/edit')}}">
                            <button class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              editer l'album
                            </button>
                          </a>
                        </td>
                        {{-- <td class="px-4 py-3 text-xs">
                          <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                          >
                            Approved
                          </span>
                        </td> --}}
                        <td class="px-4 py-3 text-sm">
                          {{$mode->created_at}}
                        </td>
                      </tr> 
                    @endforeach
                     
                    </tbody>
                  </table>
                </div>
                {{-- <div
                  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                  <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                  </span>
                  <span class="col-span-2"></span>
                  <!-- Pagination -->
                  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                      <ul class="inline-flex items-center">
                        <li>
                          <button
                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Previous"
                          >
                            <svg
                              aria-hidden="true"
                              class="w-4 h-4 fill-current"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            1
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            2
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            3
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            4
                          </button>
                        </li>
                        <li>
                          <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            8
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                          >
                            9
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Next"
                          >
                            <svg
                              class="w-4 h-4 fill-current"
                              aria-hidden="true"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </li>
                      </ul>
                    </nav>
                  </span>
                </div> --}}
              </div> 
  
              <!-- Charts -->
              <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Magazine
              </h2>
              {{-- <div class="grid gap-6 mb-8 md:grid-cols-2">
                <div
                  class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Revenue
                  </h4>
                  <canvas id="pie"></canvas>
                  <div
                    class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                  >
                    <!-- Chart legend -->
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"
                      ></span>
                      <span>Shirts</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                      ></span>
                      <span>Shoes</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                      ></span>
                      <span>Bags</span>
                    </div>
                  </div>
                </div>
                <div
                  class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Traffic
                  </h4>
                  <canvas id="line"></canvas>
                  <div
                    class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                  >
                    <!-- Chart legend -->
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                      ></span>
                      <span>Organic</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                      ></span>
                      <span>Paid</span>
                    </div>
                  </div>
                </div>
              </div> --}}


              {{-- magazine --}}
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Titre et contenu</th>
                      <th class="px-4 py-3">action</th>
                      {{-- <th class="px-4 py-3">Status</th> --}}
                      <th class="px-4 py-3">date</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach ($magazine as $mag)
                      
                    <tr class="text-gray-700 text-lg uppercase dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                            class="object-cover w-full h-full rounded-full"
                            src="{{asset('storage/magazines/'.$mag->image)}}"
                            alt=""
                            loading="lazy"
                          />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{$mag->name}}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              {{$mag->content}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{-- <img class="m-4 ring-4 ring-red-300"  src="{{asset('storage/images/'.$albummagl)}}"> --}}
                        <div class="flex items-center space-x-4 text-sm">
                          <a href="{{URL::to('admin/admin/addmagazine/'.$mag->id.'/edit ')}}">
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
                          <Form method="POST" action="{{Route('admin.addmagazine.destroy',$mag->id)}}">
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
                         </div>
                      </td>
                     {{-- <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Approved
                        </span>
                      </td> --}}
                      <td class="px-4 py-3 text-sm">
                        {{$mag->created_at}}
                      </td>
                    </tr> 
                  @endforeach
                   
                  </tbody>
                </table>
              </div>
              
            </div>
          
          </x-adminadmin>