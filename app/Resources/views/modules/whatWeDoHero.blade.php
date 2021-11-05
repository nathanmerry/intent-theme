<section class="relative border-t border-gray-200">
  <div class="container py-6 lg:py-24">
    <div class="grid grid-cols-12 lg:gap-10">
      <div class="col-span-12 lg:col-span-6">
        <div>
          <div class="mb-4 header-sm text-primary">{{ $post['title'] }}</div>
          <h1 class="header-lg header-bold">{{ $module['title'] }}</h1>
          <div class="lg:text-lg">{!! $module['text'] !!}</div>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-6 lg:p-5">
        <div class="relative w-full h-full">
          <div class="top-0 left-0 z-30 w-12/12 lg:w-8/12 lg:absolute">
            <img class="rounded-lg shadow-xl" src="{{ $module['image_1'] }}" loading="eager" alt="" />
          </div>
          <div class="bottom-0 right-0 z-20 hidden w-8/12 lg:block lg:absolute">
            <img class="rounded-lg shadow-xl" src="{{ $module['image_2'] }}" loading="eager" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute hidden w-64 lg:block -z-1 top-12 right-24">
    @include('svgs.dots', ['class' => 'zw-full'])
  </div>
</section>
