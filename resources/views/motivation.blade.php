<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Motivation') }}
        </h2>
    </x-slot>

    <h1 class="text-4xl mx-72 mt-20">
        {{ $quote['quote'] }}
        <span style="z-index:50;font-size:0.9em; font-weight: bold;" class="flex mt-2 mb-16">
            <img src="https://theysaidso.com/branding/theysaidso.png" height="20" width="20" alt="theysaidso.com"/>
            <a class="text-base" href="https://theysaidso.com" title="Powered by quotes from theysaidso.com" style="color: #ccc; margin-left: 4px; vertical-align: middle;">
              They Said So®
            </a>
        </span>

        <div class="flex justify-center">
            <iframe width="860" height="515" src="https://www.youtube.com/embed/videoseries?list=PLMt3qpqADbXOikX61NzRIu9D724dPh-XR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </h1>

</x-app-layout>
