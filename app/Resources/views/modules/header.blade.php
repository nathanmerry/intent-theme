<header class="w-full font-header">
  <div class="container flex items-center py-6">
    <div class="flex flex-col w-full lg:flex-row lg:items-center lg:h-full">
      <div class="z-50 flex justify-between w-full lg:w-auto">
        <a href="/" class="flex mr-8">
          <img src="{{ $theme['logo'] }}" alt="" class="max-w-logo logo" rel="preload">
        </a>
        <div id="hamburger" class="lg:hidden hamburger">
          <div id="hamburger--line" class="hamburger--line"></div>
        </div>          
      </div>
      <nav id="nav-primary" class="flex items-center lg:h-full">
        @include('modules.menu', ['nav' => $menu['primary']])
      </nav>
    </div>
  </div>
</header>
