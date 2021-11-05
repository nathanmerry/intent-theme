<section class="getstarted bg-img-bg relative">  
  <div class="absolute z-10 w-full h-full opacity-20" style="background-image: url({{ getimg('get-started.png') }})"></div>
  <div class="relative z-20 max-w-container-sm mx-auto px-4 text-center text-white py-16 lg:py-24">
    <h2 class="header-xl mb-6 lg:mb-10 text-white">{!! $module['title'] !!}</h2>
    <div class="mb-6 lg:mb-10 text-lg lg:text-2xl">{{ $module['text'] }}</div>
    <a 
      href="{{ $module['call_to_action']['url'] }}" 
      class="inline-block px-6 py-4 text-lg lg:text-2xl border-2 border-white rounded text-white font-header hover:bg-white hover:text-tertiary hover:text-semibold transition duration-100 ease-in-out"
    >
      {{ $module['call_to_action']['title'] }}
    </a>
  </div>
</section>