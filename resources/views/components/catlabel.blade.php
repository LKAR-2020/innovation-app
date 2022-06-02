@props(['value'])

<div class="my-5 md:my-10">
    <div class="border-b-8 text-blue-900 font-bold uppercase relative">
        {{$value ?? $slot}}
    </div>
</div>
