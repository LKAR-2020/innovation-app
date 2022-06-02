<x-app-layout>

    <div class=" container">
        <!-- google maps  -->
      <div class=" pt-4 ">
          <div class="border-b-8 text-blue-900 font-bold uppercase relative">
              A propos de Cat Pub
              <!-- <div class="absolute left-full flex justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                </svg>
              </div> -->
          </div>
      </div>
    </div>
    <div class=" container pt-7 pb-2  flex justify-between ">
      <div class=" w-1/2  bg-gray-300 shadow-lg ">
          <div class=" uppercase font-serif font-medium py-2  border-b-0">
            
          </div>
          <p class="pt-4 px-4 text-left"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae adipisci, autem molestias, ad assumenda voluptatibus deleniti quidem perspiciatis suscipit quo doloribus odio fugit minima obcaecati, illo corrupti! Recusandae, vitae!</p>
      </div>
      <div class=" px-1 h-full">

      </div>
      <div class="w-1/2 bg-gray-300 shadow-lg ">
          <div class="uppercase font-serif font-medium py-2  border-b-0">
             
          </div>
          <div class="pt-4 px-4 text-right">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione deserunt neque autem doloribus provident tempora eveniet vero tempore rerum. Ipsa, laudantium. Totam blanditiis harum, quidem soluta itaque explicabo quaerat iusto.
          </div>
      </div>
  </div>
  <div class="container">
    <x-catlabel :value="__('situation geographique ')"/> 
  </div>
      <div class=" aspect-none md:aspect-w-16 md:aspect-h-9  shadow-lg ">
       <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2210895488593!2d-3.976121285908749!3d5.383230636861681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1934cf31c56f7%3A0x560c42d99cf53f5f!2sImmeuble%20CGK%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1628610172055!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
       
    
    
    <x-slot name="scripts">

    </x-slot>
</x-app-layout>