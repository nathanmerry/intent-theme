<section class="relative bg-primary py-12 lg:py-24 text-white">
  <div class="container">
    <div class="header-sm mb-4 opacity-50">{{ $module['title_small'] }}</div>
    <div class="w-full lg:w-7/12 mb-4 lg:mb-8 ">
      <h2 class="header-lg font-bold">{{ $module['title_large'] }}</h2>
    </div>
    <div class="w-full lg:w-7/12 pb-8 text-lg lg:text-xl">{!! $module['text'] !!}</div>
    <div class="grid lg:grid-cols-3 gap-10 lg:gap-5">
      @foreach ($module['values'] as $key => $value)
        <div
          data-transition="animate__animated animate__fadeInUp animate__delay-{{ $key }}00" 
          class="p-6 lg:p-10 text-center rounded-lg border-4 border-white border-opacity-20 {{ !$key ? 'bg-white bg-opacity-10' : ''}}"
        >
          <img class="mx-auto mb-7" src="{{ $value['icon'] }}" loading="lazy" alt="">
          <div class="mb-2 text-2xl font-bold">{{ $value['header'] }}</div>
          <div class="text-lg">{{ $value['text'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="absolute top-32 right-12 w-1/4 opacity-20">
    @include('svgs.uk-dots')
  </div>
</section>