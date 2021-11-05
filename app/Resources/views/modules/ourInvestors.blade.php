<section class="relative py-12 lg:py-28">
  <div class="relative container z-20">
    <div class="grid grid-cols-12 mb-10 lg:mb-16">
      <div class="col-span-12 lg:col-span-3">
        <div class="header-lg text-primary font-bold">{{ $module['title'] }}</div>
      </div>
      <div class="col-span-12 lg:col-span-9 lg:pl-24 text-lg lg:text-2xl -my-3 text-dark">{!! $module['text'] !!}</div>
    </div>
    <div>
      @foreach ($module['investors'] as $key => $investor)
        <div 
          data-transition="animate__animated {{ ($key % 2) ? 'animate__fadeInLeft' : 'animate__fadeInRight' }}" 
          class="grid grid-cols-12 lg:gap-12 mb-8 py-3 lg:py-5 px-3 lg:px-5 border border-gray-300 rounded-xl"
        >
          <div class="col-span-12 lg:col-span-9 my-4 lg:my-7 lg:ml-6">
            <div class="text-4xl font-bold mb-4">{{ $investor['investor_name'] }}</div>
            <div class="text-lg">{{ $investor['investor_description'] }}</div>
          </div>
          <div class="col-span-12 lg:col-span-3 flex items-center justify-center h-28 lg:h-auto bg-gray-100 rounded-lg">
            <img class="m-auto" src="{{ $investor['investor_logo'] }}" loading="lazy" alt="">
          </div>
        </div>
      @endforeach
    </div>
  </div>
  @include('svgs.hand', ['class' => 'absolute top-0 right-32 transform rotate-180 w-1/4 z-10', 'fill' => '#F9F9F9'])
</section>