<x-app-layout>
    {{-- <x-slot name="headers">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class=" container">
       <x-catlabel :value="__('Nouveau test')" />
      
      <!--  other slide -->
      <div class="owl-carousel owl-theme">
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/>
      <x-cardsvideo/> 
      </div>
      <x-catlabel :value="__('alexis')" />
          <div class="owl-carousel owl-theme">
                <x-cardsvideo/>
                <x-cardsvideo/>
                <x-cardsvideo/>
                <x-cardsvideo/>
                <x-cardsvideo/>
                <x-cardsvideo/>
                <x-cardsvideo/>
                <x-cardsvideo/>
          </div>
      
    </div>
    <x-slot name="scripts">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout: 2000,
            items:1,
            dots: false})
      </x-slot>
</x-app-layout>
