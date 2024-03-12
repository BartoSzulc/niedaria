@php

// $data = get_field('header', 'option');

@endphp

<header class="banner lg:py-9 z-[99] relative">
  <div class="container">
    <div class="flex items-center justify-between relative">
      <a class="max-sm:self-start brand flex w-20 sm:w-[120px] lg:w-auto" href="{{ home_url() }}">
        @svg('images.Logo')
      </a>
      @include('partials.header.menu')
    </div>
  </div>
  @include('partials.header.mobile-menu')
</header>

<div class="banner py-2.5 main-header--sticky fixed top-0 transform -translate-y-full transition-all duration-500 ease-in-out z-[99] opacity-0 bg-white w-full border-b border-b-colorObramowanie ">
  <div class="container">
    <div class="flex items-center justify-between relative ">
      <a class="max-sm:self-start brand flex w-20 sm:w-[120px] lg:w-32" href="{{ home_url() }}">
        @svg('images.Logo')
      </a>
      @include('partials.header.menu')
    </div>
  </div>
  @include('partials.header.mobile-menu')
</div>


