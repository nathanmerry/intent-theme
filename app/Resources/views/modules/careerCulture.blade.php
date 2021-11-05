<section x-data="cultureSlide({{ count($module['cultures']) }})" class="py-12 lg:py-24">
  <div class="container">
    <div class="hidden lg:flex items-center mb-14 ">
      @foreach ($module['cultures'] as $index => $culture)
        <button 
          data-transition="animate__animated animate__fadeInRight"  
          x-on:click="slide(false, {{ $index }})" 
          class="inline-block mr-5 px-5 py-2 font-header font-semibold rounded-3xl outline-none""
          :class="{
            'text-white bg-primary': index === {{ $index }}
          }"
          >{{ $culture['header_button_text'] }}</button>
      @endforeach
    </div>
    <div class="flex lg:hidden items-center justify-around mb-10 lg:mb-14 outline-none">
      <button x-on:click="slide(-1)" class="outline-none">
        @include('svgs.caret-right', ['class' => 'w-2 transform rotate-180'])
      </button>
      @foreach ($module['cultures'] as $index => $culture)
        <button 
          x-cloak 
          class="inline-block flex-shrink-0 w-52 px-5 py-2 text-white bg-primary font-header font-semibold rounded-3xl outline-none"
          x-show="index === {{ $index }}"
        >{{ $culture['header_button_text'] }}</button>
      @endforeach
      <button x-on:click="slide(1)" class="outline-none">
        @include('svgs.caret-right', ['class' => 'w-2'])
      </button>
    </div>
    @foreach ($module['cultures'] as $index => $culture)
      <div 
        class="grid grid grid-cols-12 gap-4"
      >
        <div 
          data-transition="animate__animated animate__fadeInLeft animate__faster"  
          x-show="index === {{ $index }}" 
          class="col-span-12 lg:col-span-5 text-dark"
        >
          <div class="header-lg mb-8 font-bold">{{ $culture['title'] }}</div>
          <div class="text-xl lg:text-2xl mb-6">{{ $culture['sub_title'] }}</div>
          <div class="lg:text-lg">{!! $culture['text'] !!}</div>
        </div>
        <div
          data-transition="animate__animated animate__fadeInRight animate__faster"           
          x-show="index === {{ $index }}" 
          class="col-span-12 lg:col-span-7"
        >
          <div class="w-full">
            <img class="cultureImage w-full object-cover max-w-full shadow-xl rounded-lg" src="{{ $culture['image'] }}" loading="lazy" alt="">
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>