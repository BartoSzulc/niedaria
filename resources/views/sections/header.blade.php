@php

// $data = get_field('header', 'option');

@endphp

<header class="banner lg:py-9 z-[99] fixed top w-full">
  <div class="container">
    <div class="flex items-center justify-between relative">
      <a class="brand flex w-[160px]" href="{{ home_url() }}">
        @svg('images.logo_client')
      </a>
      @include('partials.header.menu')
    </div>
  </div>
  @include('partials.header.mobile-menu')
</header>


