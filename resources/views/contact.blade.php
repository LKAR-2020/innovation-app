<x-app-layout>
    {{-- <div class="container">

      <x-catlabel :value="__('contacter CatPub ')"/> 
    </div> --}}
    {{-- <div class="container"  >
       <div class="px-4 py-4 shadow-xl bg-gray-300 md:mx-24 lg:mx-56  ">
        <p class=" uppercase text-3xl text-blue-700 "> contacter l'equipe de CatPub pour </p> 
        <ul>
            <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                <p class="ml-2">
                  une demande d'avis a nos Expert
                  <code class="text-sm font-bold text-gray-900">@CatPub</code>
                </p>
              </li> 
              <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                <p class="ml-2">
                  une recommendation a nos Expert
                </p>
              </li>
              <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                <p class="ml-2">
                  une suggestion a nos Expert
                </p>
              </li>
        </ul>
        <span class=" font-black shadow-sm text-lg">Faites part de votre demande sur le formulaire ci-dessous, et nous vous reviendrons dès que possible. </span>
       </div>
    </div> --}}
    {{-- <div class="container">
      <x-catlabel :value="__('formulaire CatPub ')"/> 
    </div> --}}
    {{-- <div class="container">
      <div class="px-4 py-4 shadow-xl bg-gray-300 md:mx-24 lg:mx-56 ">
        <form action="" method="post">  
          <div class="  pb-10 ">
            <x-label for="name" :value="__('Nom')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div class="  pb-10">
          <x-label for="email" :value="__('Email')" />

          <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
      </div >
      <div class="   pb-10">
        <x-label for="messege" :value="__('Message')" />

        <textarea id="message" name="message" class=" rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block pt-2 pb-36 h-full w-full">Ecrivez nous ici</textarea>
    </div> --}}
    {{-- <div class="text-right">
      <x-button class="ml-4">
      {{ __('envoyer') }}
     </x-button>
  </div> --}}
        {{-- </form>
      </div>
    </div> --}}
    {{-- <div class="container">
    <x-catlabel :value="__('situation geographique ')"/> 
  </div>
      <div class=" relative aspect-none md:aspect-w-16 md:aspect-h-9  shadow-lg ">
       <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2210895488593!2d-3.976121285908749!3d5.383230636861681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1934cf31c56f7%3A0x560c42d99cf53f5f!2sImmeuble%20CGK%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1628610172055!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       <div class="absolute ">

       </div>
      </div> --}}
      <div id="navigation" class=" pt-8 " >
        <div id="contact-page" class=" relative  page-content">
        <div class="static text-sm md:absolute top-1/2 md:translate-y-14 left-2 md:py-4 md:mx-4 md:my-14 bg-white p-10 leading-6 md:z-0 md:font-normal md:text-base ">
            <p class=" mb-4">
                <span class="font-bold">Téléphone:</span><br/>
                Tel: +225 07 08 03 67 99<br />
                tel: +225 07 47 47 07 70<br />
            </p>
            <p class="mb-4 capitalize">
                <span class="font-bold">Adresse:</span><br/>
                CatPub<br />
                Agence de publicité – mannequins<br/>
                angre 9 eme tranche immeuble CKG<br />
                abidjan - cote d'ivoire<br />
            </p>
            <p>
                Email : <a class="email" href="mailto:profil@catpub.com">profil@catpub.com</a>
            </p>
        </div>

      </div> 
      <div class=" py-2 shadow-lg ">
        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2210895488593!2d-3.976121285908749!3d5.383230636861681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1934cf31c56f7%3A0x560c42d99cf53f5f!2sImmeuble%20CGK%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1628610172055!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>


    </div>
    
    <x-slot name="scripts">

    </x-slot>
</x-app-layout>
