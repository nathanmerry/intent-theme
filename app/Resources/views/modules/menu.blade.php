<div 
  id="menu"
  x-on:click.away="open = false"
  class="menu absolute lg:relative top-0 left-0 z-40 w-full lg:w-auto overflow-hidden shadow lg:shadow-none lg:h-full transition-all duration-300 ease-in-out"
>
  <div class="h-24 bg-white lg:hidden"></div>
  <ul class="flex flex-col lg:flex-row lg:items-center w-full lg:w-auto bg-white lg:bg-transparent lg:mt-10 lg:mt-auto lg:h-full">
    @foreach($menu['primary'] as $item)
      <li class="flex flex-col mx-4 lg:mx-10 mb-5 lg:mb-0 text-lg">
        <a href="{{ $item['url'] }}" class="relative font-semibold hover:text-secondary {{ implode(' ', $item['classes']) }}">
          {{ $item['title'] }}
        </a>
      </li>
    @endforeach
  </ul>
</div>

