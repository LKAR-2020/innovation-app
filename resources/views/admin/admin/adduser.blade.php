<x-adminadmin>
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              ajouter un utilisateur
            </h2>
            <form action="{{route('admin.adduser.store')}}" enctype="multipart/form-data" method="post">
              @csrf

            <div class="px-4 py-3 mb-8  bg-white rounded-lg shadow-md dark:bg-gray-800">
              
              <div class=" mx-10 px-4 py-10 bg-gray-200 rounded-md">
                
                <label for="name" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase dark:text-gray-400">Name</span>
                  <input
                  id="name"
                  type="text"
                  name="name"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="prenom" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">prenom</span>
                  <input
                  id="prenom"
                  type="text"
                  name="prenom"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase dark:text-gray-400">email</span>
                  <!-- focus-within sets the color for the icon when input is focused -->
                  <div
                    class="relative text-gray-500 focus:text-purple-600"
                  >
                    <input
                    id="email"
                    type="email"
                    name="email"  
                    class="block w-full pl-10 mt-4 px-4 py-5 rounded-md text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray "
                      placeholder="Jane Doe"
                    />
                    <div
                      class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </label>
                <label for="contact" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">contact</span>
                  <input
                  id="contact"
                  name="contact"
                  type="tel"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="date" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">date de naissance</span>
                  <input
                  id="date"
                  type="date"
                  name="date"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="sexe" class="block mt-4  text-sm">
                  <span class="text-gray-700 text-lg uppercase dark:text-gray-400">
                    sexe
                  </span>
                  <select
                  id="sexe"
                  type="text"
                  name="sexe"  
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-md dark:focus:shadow-outline-gray"
                  >
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                    
                  </select>
                </label>
                <label for="style" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">style</span>
                  <input
                  id="style"
                  type="text"
                  name="style"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="taille" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">taille</span>
                  <input
                  id="taille"
                  type="number"
                  name="taille"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="facebook" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">facebook</span>
                  <input
                  id="facebook"
                  type="text"
                  name="facebook"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="commune" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">commune</span>
                  <input
                  id="commune"
                  type="text"
                  name="commune"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="classe" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">profession</span>
                  <input
                  id="classe"
                  type="text"
                  name="classe"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="nationnalite" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">nationnalite</span>
                  <input
                  id="nationnalite"
                  type="text"
                  name="nationnalite"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="teint" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">teint</span>
                  <input
                  id="teint"
                  type="text"
                  name="teint"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="poids" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">poids</span>
                  <input
                  id="poids"
                  type="text"
                  name="poids"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="created_at" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">created_at</span>
                  <input
                  id="created_at"
                  type="date"
                  name="created_at"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="video" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">video</span>
                  <input
                  id="video"
                  type="file"
                  name="video"
                  accept="'image/gif"
                  class="block w-full mt-4 px-4 py-5 rounded-md mb-4 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-md dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="nom du top model"
                  />
                </label>
                <label for="image" class="block text-sm">
                  <span class="text-gray-700 text-lg uppercase  dark:text-gray-400">image</span>
                  <input
                  id="image"
                  type="file"
                  name="image"
                  required
                  accept="'image/*"
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