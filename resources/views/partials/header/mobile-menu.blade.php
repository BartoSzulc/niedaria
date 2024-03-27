<aside class="z-10 absolute -translate-x-full mobile-menu flex flex-col px-5 py-6 ">
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary grow" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'flex h-full w-full', 'menu_class' => 'mobile-menu-class w-full mt-[96px]  font-secondary text-white flex flex-col justify-center text-center items-center', 'echo' => false]) !!}
    </nav>
  @endif
  <div class="social-icons flex xl:gap-6 lg:gap-4 gap-8 items-center justify-center">
    <div class="icon">
        @svg('images.envelope_icon')
    </div>
    <div class="icon">
        @svg('images.envelope_icon')
    </div>
    <div class="icon">
        @svg('images.envelope_icon')
    </div>
    <div class="icon">
        @svg('images.envelope_icon')
    </div>
  </div>
  <div class="w-full flex items-center justify-end text-B20 font-light text-primary60 max-lg:mt-6 max-lg:text-center max-lg:justify-center">
    <p>© 2024 Niedaria.pl. All rights reserved.</p>
  </div>
</aside>
