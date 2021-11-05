<section class="relative careerHero">
  <div class="container careerHero__size">
    <div class="grid grid-cols-12">
      <div class="col-span-12 text-white lg:col-span-8">
        <div class="relative z-30 pt-6 pb-10 lg:pr-4 lg:pr-20 lg:pt-24 lg:pb-0">
          <h1 class="mb-4 text-white text-opacity-50 header-sm">{{ $post['title'] }}</h1>
          <div>
            <div class="header-lg header-bold">{!! $module['title'] !!}</div>
            <div class="text-2xl">{!! $module['text'] !!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute top-0 hidden w-full h-full grid-cols-12 lg:grid">
    <div class="relative z-10 col-span-12 lg:col-span-8"></div>
    <div class="relative z-20 max-h-full col-span-12 bg-right bg-cover lg:col-span-4 careerHero__size" style="background-image: url('{{ $module['background_image'] }}')"></div>
  </div>
</section>
