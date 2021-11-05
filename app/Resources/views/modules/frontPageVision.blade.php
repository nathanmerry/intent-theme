<section class="py-10 lg:py-20 frontPageVision">
  <div class="relative">
    <div class="relative z-30 px-2 mx-auto max-w-container-sm lg:px-0">
      <div class="mb-8 text-center header-sm">{{ $module['title_small'] }}</div>
      <h2 class="mx-auto mb-10 font-bold text-center header-lg lg:w-8/12">{{ $module['title_large'] }}</h2>
      <div class="pb-12 text-lg leading-relaxed lg:text-center">{!! $module['text'] !!}</div>
      @if ($module['image'])
        <img src="{{ $module['image'] }}" alt="{{ $module['title_small'] }}" class="z-10 w-1/2 mx-auto">
      @endif
    </div>
    @if ($module['image_secondary'])
      <div class="absolute bottom-0 transform translate-x-1/2 right-1/2">
        <img src="{{ $module['image_secondary'] }}" class="w-64">
      </div>
    @endif
  </div>
</section>
