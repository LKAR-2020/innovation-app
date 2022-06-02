<x-adminadmin>
            <div class="container px-6 mx-auto grid">
                <h2
                  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                  ajouter album profile
                </h2>
                <form action="{{route('admin.addalbum.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
          
                  <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
                    
                    <div class=" mx-10 px-4 py-10 bg-gray-200 rounded-md">
                      
                        <label class="block mt-4 mb-10 text-lg" for="idtopmodel">
                            <span class="text-gray-700 dark:text-gray-400">
                                Nom Profile
                              </span>
                            <select class="block w-full rounded-xl hover:shadow-2xl mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="idtopmodel" 
                            id="idtopmodel"
                            >  @foreach ($topmodels as $topmodel)
                                
                            <option value="{{$topmodel->id}}"> {{$topmodel->name}} {{$topmodel->prenom}}</option>
                            @endforeach
                            </select>
                        </label>
                      
                      <label for="multimage" class="block text-sm">
                        <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">multimage</span>
                        <input
                        id="multimage"
                        type="file"
                        name="multimage[]"
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
