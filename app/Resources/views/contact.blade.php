@extends('layout')

@section('header')
  @include('modules.header')
@endsection

@section('body')
  <main class="flex-1">
    <div class="relative contact">
      <div class="absolute hidden w-full lg:block contact-hero bg-img-bg -z-1">
        <div style="background-image: url({{ getimg('contact-background.png') }})" class="w-full h-full bg-cover opacity-20"></div>
      </div>
      <div class="container text-white lg:pb-12">
        <div class="flex flex-wrap">
          <div class="relative w-full lg:w-5/12 lg:pr-4 font-header">
            <div class="absolute block w-full h-full transform scale-x-125 lg:hidden bg-img-bg -z-1">
              <div style="background-image: url({{ getimg('contact-background.png') }})" class="w-full h-full bg-cover opacity-20"></div>
            </div>
            <div class="contact-hero" >
              <div class="h-full py-12 md:py-16 lg:pt-24">
                <h1 class="mb-4 text-white text-opacity-50 header-sm">{{ $post['title'] }}</h1>
                <div class="header-lg header-bold">{!! $contact['hero_text'] !!}</div>
              </div>
            </div>
            <div class="hidden py-16 text-black lg:block font-body">
              @if ($theme['company']['address'])
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-16 mr-5 rounded h-15 bg-primary">
                    <img id="test" loading="lazy" src="{{ getimg('pin.png') }}" alt="">
                  </div>
                  <div>
                    <div class="text-2xl font-bold">Visit Us</div>
                    <div class="text-xl">{{ $theme['company']['address'] }}</div>
                  </div>
                </div>
              @endif
              @if ($theme['company']['phoneNumber'])
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-16 mr-5 rounded h-15 bg-primary">
                    <img loading="lazy" src="{{ getimg('phone.png') }}" alt="">
                  </div>
                  <div>
                    <div class="text-2xl font-bold">Call Us</div>
                    <div class="text-xl">{{ $theme['company']['phoneNumber'] }}</div>
                  </div>
                </div>
              @endif
              @if ($theme['company']['email'])
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-16 mr-5 rounded h-15 bg-primary">
                    <img loading="lazy" src="{{ getimg('letter.png') }}" alt="">
                  </div>
                  <div>
                    <div class="text-2xl font-bold">Email Us</div>
                    <div class="text-xl">{{ $theme['company']['email'] }}</div>
                  </div>
                </div>
              @endif
            </div>
          </div>
          <div class="w-full pt-10 lg:w-7/12 lg:pt-16 lg:pl-6">
            <div class="relative">
              @include('components.contactForm', ['title' => $contact['form_title'], 'description' => $contact['form_description']])
            </div>
            <div class="py-12 text-black lg:hidden font-body">
              @if ($theme['company']['address'])
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-12 h-12 p-3 mr-5 rounded lg:w-16 lg:h-16 lg:p-0 bg-primary">
                    <img src="{{ getimg('pin.png') }}" alt="" loading="lazy" >
                  </div>
                  <div class="flex-1">
                    <div class="text-xl font-bold lg:text-2xl">Visit Us</div>
                    <div class="text-lg lg:text-xl">{{ $theme['company']['address'] }}</div>
                  </div>
                </div>
              @endif
              @if ($theme['company']['phoneNumber'])
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-12 h-12 p-2 p-3 mr-5 rounded lg:w-16 lg:h-16 lg:p-0 bg-primary">
                    <img src="{{ getimg('phone.png') }}" alt="" loading="lazy" >
                  </div>
                  <div class="flex-1">
                    <div class="text-xl font-bold lg:text-2xl">Call Us</div>
                    <div class="text-lg lg:text-xl">{{ $theme['company']['phoneNumber'] }}</div>
                  </div>
                </div>
              @endif
              @if ($theme['company']['email'])
                <div class="flex mb-12">
                  <div class="flex items-center justify-center w-12 h-12 p-3 mr-5 rounded lg:w-16 lg:h-16 lg:p-0 bg-primary">
                    <img src="{{ getimg('letter.png') }}" alt="" loading="lazy">
                  </div>
                  <div class="flex-1">
                    <div class="text-xl font-bold lg:text-2xl">Email Us</div>
                    <div class="text-lg lg:text-xl">{{ $theme['company']['email'] }}</div>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('footer')
    @include('modules.footer')
@endsection
