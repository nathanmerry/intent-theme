<section class="pt-16 overflow-hidden onVisible homePageHero lg:pt-28 lg:-mb-16"">
  <div class="container">
    <div class="relative z-20 w-full lg:w-5/12">
      <h1 class="w-full header-xl md:w-10/12 lg:w-full mb-7 title">{!! $module['title'] !!}</h1>
      <div class="text-lg leading-relaxed mb-7 text-dark lg:text-xl">{!! $module['text'] !!}</div>
      <div class="inline-block font-bold">
        <a
          class="flex items-center px-4 py-2 text-lg transition duration-100 ease-in-out border-2 rounded text-primary lg:text-xl border-primary hover:bg-primary hover:text-white" 
          href="{{ $module['call_to_action']['url'] }}"
        >
          <span class="mr-5">{{ $module['call_to_action']['title'] }}</span>
          @include('svgs.cheveron-right', ['class' => 'h-4'])
        </a>
      </div>
    </div>
    <div class="absolute top-0 hidden w-6/12 lg:block -right-20 lg:right-0 lg:w-7/12 lg:pl-10">
      <div class="relative flex justify-end w-full">
        <img 
          id="test"
          class="homePageHero homePageHero__background" 
          style="-webkit-mask-image: url({{ $module['mask_image'] }})"
          src="{{ $module['background_image'] }}" alt=""
          loading="eager"
          rel="preload"
        >
      </div>
    </div>
  </div>
  @include('svgs.dots', ['class' => 'absolute top-32 left-1/4 w-60 z-10']) 
</section>

