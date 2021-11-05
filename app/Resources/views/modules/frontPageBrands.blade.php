<section 
  x-data="brandsSlide({{ count($module['brands'] ?: []) }})"
  class="relative bg-gray-100"
>
  <div class="relative px-2 py-16 mx-auto max-w-container-sm lg:px-0 lg:py-32">
    <div class="grid grid-cols-12 ourBrands">
      <div class="relative col-span-12 lg:col-span-5">
        <div data-transition="animate__animated animate__fadeInLeft" class="absolute inset-0 z-10 rounded-lg bg-primary"></div>
        <div data-transition="animate__animated animate__fadeInLeft" class="relative z-30 p-4 text-white lg:p-8">
          <div class="mb-3 font-bold header-lg lg:mb-5">{{ $module['main_title'] }}</div>
          <div class="mb-4 lg:mb-8 lg:text-lg">{{ $module['text'] }}</div>
          <div class="flex">
            <button x-on:click="slide(-1)" class="p-3 duration-300 transform rotate-180 border-t-2 border-b-2 border-l border-r-2 border-white outline-none hover:bg-white hover:text-primary transiton">
              @include('svgs.cheveron-right', ['class' => 'w-4 lg:w-8 h-4 lg:h-8'])
            </button>
            <button x-on:click="slide(1)" class="p-3 duration-300 border-t-2 border-b-2 border-l border-r-2 border-white outline-none hover:bg-white hover:text-primary transiton">
              @include('svgs.cheveron-right', ['class' => 'w-4 lg:w-8 h-4 lg:h-8'])
            </button>
          </div>
        </div>
      </div>
      <div data-transition="animate__animated animate__fadeInRight" class="flex items-center col-span-12 lg:col-span-7">
        @foreach($module['brands'] as $key => $brand)
          <template x-if="index === {{$key}}">
            <div 
              class="px-4 py-8 my-4 lg:px-16 lg:my-10"
              x-transition:enter="transition-all ease-out duration-300"
              x-transition:enter-start="opacity-0 transform scale-75"
              x-transition:enter-end="opacity-100 transform scale-100"
            >
              <div class="mb-3 ourBrands__brand-logo lg:mb-5">
                <img class="max-w-full" src="{{ $brand['brand_logo'] }}" alt="">
              </div>
              <div class="lg:text-lg">{{ $brand['brand_description'] }}</div>
            </div>
          </template>
        @endforeach
      </div>
    </div>
  </div>
  <div class="container relative">
    @include('svgs.hand', ['class' => 'hidden lg:block absolute z-20 w-1/2 lg:w-1/4 bottom-0 left-48'])
  </div>
  <div class="absolute lg:block top-16 left-24">
    @include('svgs.dots', ['class' => 'w-56'])
  </div>
</section>
