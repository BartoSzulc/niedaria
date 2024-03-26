<section class="home__testimonials pt-[62px] pb-7 overflow-hidden">
    <div class="container">
        <div class="w-full">
            <div class="text-h2 font-secondary text-primary100 mb-8">
                <h2>Opinie</h2>
            </div>
            <div class="flex items-center h-fit gap-8 testimonialsSwiper__nav mb-8">
                <div class="testimonialsSwiper__nav--prev">
                    @include('partials.swiper-button')
                </div>
                <div class="testimonialsSwiper__nav--next">
                    @include('partials.swiper-button', ['class' => 'rotate-180'])
                </div>
            </div>
        </div>
        <div class="swiper swiperTestimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid grid-cols-12 gap-6 ">
                    <div class="col-span-9 bg-white rounded-2xl p-8 h-fit">
                        <div class="flex flex-col gap-6">
                            <div class="text-h4 font-secondary text-black80">
                                <h3>NailsZone</h3>
                            </div>
                            <div class="text-B20 font-light text-black60">
                                <p>Współpraca z Dianą to sama przyjemność! Ma mnóstwo pomysłów i do tego ogromną
                                wiedzę, a to wszystko przekłada się na efekt końcowy naszej współpracy. Korzystałam z jej
                                usług z zakresu fotografii oraz marketingu i w obu zakresach Diana dała z siebie wszystko. Zdjęcia z sesji wyszły piękne. W trakcie sesji podpowiada co będzie wyglądać dobrze i jak
                                się ustawić, by było atrakcyjnie. A jeśli chodzi o obsługę marketingową to wiem, że mogę jej
                                ufać, bo zna się na swoim fachu.
                                Poza tym zawsze służy pomocą jeśli są jakieś niejasności i mam pytania🙂polecam
                                współpracę z Dianą, bo podejście do klienta w jej przypadku jest profesjonalne i rzetelne, a
                                do tego otrzymujesz pomoc i wsparcie na każdym etapie współpracy👌
                                </p>
                            </div>
                            <div class="text-BQuote text-black80">
                                <p>Kamila Kaliszewska, NailsZone</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 relative -top-[170px] -left-[calc((90/264)*100%)]  z-10">
                        <img src="{{asset('images/purezone.png')}}" class="shadow-cien-1 aspect-[1/1] w-[264px] object-contain object-center rounded-2xl" alt="">
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-12 gap-6 ">
                    <div class="col-span-9 bg-white rounded-2xl p-8 h-fit">
                        <div class="flex flex-col gap-6">
                            <div class="text-h4 font-secondary text-black80">
                                <h3>Namaste</h3>
                            </div>
                            <div class="text-B20 font-light text-black60">
                                <p>Współpraca z Dianą to istne złoto. Jest to Kobieta wielu talentów, zadbała w pełni o mój
                                    brand.
                                    Pomogła zwiększyć przychód w mojej firmie kilkukrotnie. Zadbała nie tylko o marketing, ale i
                                    wizerunek. Jej wskazówki okazały się niezwykle cenne. Rzetelna, fachowa i zawsze na czas. Sesje fotograficzne będę wspominać do tej pory. Diana ma świetne oko i potrafi uchwycić
                                    emocje. Polecam z całego serca jeśli szukasz profesjonalistki, która kocha to co robi i dlatego odnosi
                                    tak spektakularne efekty.
                                    Dziękuję za nasz wspólny rok,
                                </p>
                            </div>
                            <div class="text-BQuote text-black80">
                                <p>Gosia Piotrowska, Namaste</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 relative -top-[170px] -left-[calc((90/264)*100%)]  z-10">
                        <img src="{{asset('images/namaste.png')}}" class="shadow-cien-1 aspect-[1/1] w-[264px] object-contain object-center rounded-2xl" alt="">
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-12 gap-6 ">
                    <div class="col-span-9 bg-white rounded-2xl p-8 h-fit">
                        <div class="flex flex-col gap-6">
                            <div class="text-h4 font-secondary text-black80">
                                <h3>Czerwone Ciepło</h3>
                            </div>
                            <div class="text-B20 font-light text-black60">
                                <p>Pełen profesjonalizm, leady wyskoczyły jak szalone!, świetnie prowadzony fanpage, uwielbiam.
                                </p>
                            </div>
                            <div class="text-BQuote text-black80">
                                <p>Kamila Kaliszewska, NailsZone</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 relative -top-[170px] -left-[calc((90/264)*100%)]  z-10">
                        <img src="{{asset('images/czerwonecieplo.png')}}" class="shadow-cien-1 aspect-[1/1] w-[264px] object-contain object-center rounded-2xl" alt="">
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
       </div>
    </div>
 </section>