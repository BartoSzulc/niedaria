@php

@endphp
@include('sections.modal')
<footer class="pt-30 pb-10 relative">
<div class="container">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-2 flex items-center">
            <div class="footer__logo">
                @svg('images.logo_client')
            </div>
        </div>
        <div class="col-span-3 flex items-center">
            <div class="social-icons flex gap-6 items-center">
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
        </div>
        <div class="col-span-7">
            @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary flex items-center justify-end h-full" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu([
                'theme_location' => 'primary_navigation', 
                'menu_class' => 'nav font-light text-B20 flex items-center gap-5 ', 
                'add_li_class' => 'text-black10 transition-all duration-500 ease-in-out hover:text-primary60',
                'echo' => false
                ])!!}
            </nav>
            @endif
        </div>

    </div>
    <div class="w-full flex items-center justify-end text-B20 font-light text-primary60">
        <p>© 2024 Niedaria.pl. All rights reserved.</p>
    </div>
</div>
    

</footer>


