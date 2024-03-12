<div class="flex flex-row items-center sm:gap-5 gap-3 md:gap-30 lg:gap-60 h-full">
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary hidden lg:block text-color1 h-full" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav font-secondary text-menu flex items-center xl:space-x-60 lg:space-x-30 md:space-x-5', 'echo' => false]) !!}
      </nav>
    @endif
    <div class="grow-[0] lg:hidden w-full flex justify-end">
        <button id="menuButton" class="text-color1  w-5 h-5 relative focus:outline-none  js-button">
            <span class="sr-only">Open main menu</span>
            <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <span aria-hidden="true" class="menu-line block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out -translate-y-1.5 rounded-full"></span>
                <span aria-hidden="true" class="menu-line block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out rounded-full"></span>
                <span aria-hidden="true" class="menu-line block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out translate-y-1.5 rounded-full"></span>
            </div>
        </button>
    </div>  
</div>