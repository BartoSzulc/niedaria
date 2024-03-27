<section class="home__contact" @if ($id) id="{{ $id }}" @endif>

    <div class="container">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-6 grid-cols-6">
            <div class="lg:col-span-5 col-span-full">
                <div class="text-separate text-h2 font-secondary text-primary20 mb-8">
                    <h2>Zadzwoń Napisz Zaczep w socialach</h2>
                </div>
                <div class="contact-information text-B24 font-bold text-white flex flex-col gap-4">
                    <div class="item flex items-center gap-4">
                        <div class="icon">
                            @svg('images.handheart')
                        </div>
                        <p>Diana Marczewska</p>
                    </div>
                    <div class="item flex items-center gap-4">
                        <div class="icon">
                            @svg('images.handheart')
                        </div>
                        <p>Diana Marczewska</p>
                    </div>
                    <div class="item flex items-center gap-4">
                        <div class="icon">
                            @svg('images.handheart')
                        </div>
                        <p>Diana Marczewska</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7 col-span-full">
                {!! do_shortcode('[contact-form-7 id="87626d9" title="Formularz 1"]') !!}
            </div>
        </div>
    </div>
</section>