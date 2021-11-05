<footer class="py-9">
  <div class="container">
    <div class="flex flex-col justify-between lg:flex-row lg:items-center">
      <div class="flex flex-col mb-3 lg:flex-row lg:items-center lg:mb-0">
        <div class="flex h-5 mb-3 lg:items-center lg:mr-6 lg:mb-0">
          <img src="{{ $theme['logo'] }}" class="max-h-full" loading="lazy">
        </div>
        <div class="mb-3 lg:mb-0">{{ $theme['disclaimer'] }}</div>
      </div>
      <div class="flex flex-col lg:flex-row lg:items-center">
        <nav class="mb-3 mr-4 lg:mb-0">
          <ul class="flex flex-col lg:flex-row">
            @foreach($menu['footer'] as $item)
              <li class="mb-3 text-lg font-semibold lg:mx-5 lg:mb-0">
                <a href="{{ $item['url'] }}" class="">{{ $item['title'] }}</a>
              </li>
            @endforeach
          </ul>
        </nav>
        <div class="flex flex-col lg:flex-row lg:items-center">
          @foreach($theme['social'] as $key => $social)
            @if ($social)
              <a href="{{ $social }}" target="_blank" class="flex items-center mb-3 lg:mb-0">
                <div class="flex items-center justify-center rounded-full w-9 h-9 lg:mx-2 bg-social">
                  @include("svgs." . $key, ['class' => 'w-4 h-f', 'fill' => 'white'])
                </div>
                <div class="ml-2 font-semibold capitalize lg:hidden">{{ $key }}</div>
              </a>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>
