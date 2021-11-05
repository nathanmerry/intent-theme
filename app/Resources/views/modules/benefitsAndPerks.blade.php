<section class="pb-16 lg:pb-28">
  <div class="container pb-12 lg:pb-24">
    <hr>
  </div>
  <div class="container">
    <h2 class="header-sm mb-10 text-primary">{{ $module['title'] }}</h2>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-7">
      @foreach ($module['benefits_and_perks'] as $key => $bap)
        <div 
          data-transition="animate__animated animate__fadeInUp animate__delay-{{ $key }}00"           
          class="grid grid-cols-12 gap-3 lg:block items-start"
          >
          <div class="flex justify-center lg:justify-start items-baseline col-span-2 lg:mr-0 lg:mb-5">
            <img class="max-w-full max-h-full" src="{{ $bap['icon'] }}" loading="lazy" alt="">
          </div>
          <div class="col-span-10 text-lg">{{ $bap['text'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>