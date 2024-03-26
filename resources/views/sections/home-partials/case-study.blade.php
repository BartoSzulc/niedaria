<section class="home__case-study pb-[70px]">
    <div class="container">
       <div class="text-h2 font-secondary text-primary100 mb-[70px]">
          <h2>Case Study</h2>
       </div>
       <div class="swiperCaseStudy swiper">
         <div class="right-0 top-11 flex items-end gap-8 caseSwiper__nav absolute z-10">

            <div class="caseSwiper__nav--prev">
               @include('partials.swiper-button')
            </div>
            <div class="caseSwiper__nav--next">
               @include('partials.swiper-button', ['class' => 'rotate-180'])
            </div>
            
         </div>
         <div class="swiper-wrapper relative ">
            
            <div class="swiper-slide">
               <div class="w-full title grid grid-cols-12 gap-6 pb-8 relative">
                  <div class="col-span-9 grid grid-cols-9 gap-6 title-inside -z-10">
                     <div class="col-span-1 flex items-center justify-center">
                        <img src="{{asset('images/case_one.png')}}" class="rounded-2xl w-[72px] h-[72px] object-contain object-center shadow-cien-1" alt="">
                     </div>
                     <div class="col-span-8 flex flex-col gap-2">
                        <div class="text-h5 font-secondary text-white">
                           <h3>Klient</h3>
                        </div>
                        <div class="text-h5 font-secondary text-black10">
                           <h4>Organizator konferencji naukowej w Szczecinie </h4>
                        </div>
                     </div>
                  </div>
                  <div class="absolute h-0.5 bg-black60 w-full bottom-0 -left-0 -z-10"></div>
               </div>
           
               <div class="flex items-center justify-between calculateHeight px-8 relative z-10 bg-black80 mt-4">
                  <div class="absolute h-0.5 bg-black60 w-full -translate-y-1/2 -left-0 -z-10"></div>
           
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute -left-8 -translate-y-[calc(100%+44px)] text-black10 text-case-study lg:w-[300px] xl:w-[344px] text-left">
                        <p>Nagranie i zmontowanie  wideo zapowiedzi i 3 wideo zaproszeń Partnerów na wydarzenie (nagrania wysokiej jakości 4K zostały także wykorzystane w dniu wydarzenia na ekranach głównych przed rozpoczęciem konferencji)</p>
                     </div>
                     @svg('images.icon-camera')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 top-[calc(100%+34px)] text-black10 text-case-study lg:w-[250px] xl:w-[300px] text-center">
                        <p>Konfiguracja reklamy Meta Ads
                        Cel: rozpowszechnienie wydarzenia, zachęcenie do rejestracji,  kierowanie ruchu na www ze szczegółowymi informacjami oraz rozpowszechnienie poszczególnych postów</p>
                     </div>
                     @svg('images.icon-conf')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 -translate-y-[calc(100%+44px)] text-black10 text-case-study lg:w-[300px] xl:w-[344px] text-center">
                        <p>Utworzenie wydarzenia <br/>na portalu Facebook</p>
                     </div>
                     @svg('images.icon-notification')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 top-[calc(100%+34px)] text-black10 text-case-study lg:w-[250px] xl:w-[300px] text-center">
                        <p>Zaplanowanie komunikacji, stworzenie harmonogramów oraz publikacja wpisów na portalach: Facebook i Linkedin</p>
                     </div>
                     @svg('images.icon-check')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 -translate-y-[calc(100%+44px)] text-black10 text-case-study lg:w-[230px] xl:w-[262px] text-center">
                        <p>Praca na podstawie dostarczonych przez Klienta PSD z identyfikacją wydarzenia</p>
                     </div>
                     @svg('images.icon-file')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute -right-8 top-[calc(100%+34px)] text-black10 text-case-study lg:w-[220px] xl:w-[225px] text-right">
                        <p>W dniu wydarzenia przygotowanie fotorelacji wysokiej jakości sprzętem i z autorską, nowoczesną postprodukcją </p>
                     </div>
                     @svg('images.icon-end')
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="w-full title grid grid-cols-12 gap-6 pb-8 relative">
                  <div class="col-span-9 grid grid-cols-9 gap-6 title-inside -z-10">
                     <div class="col-span-1 flex items-center justify-center">
                        <img src="{{asset('images/case_one.png')}}" class="rounded-2xl w-[72px] h-[72px] object-contain object-center shadow-cien-1" alt="">
                     </div>
                     <div class="col-span-8 flex flex-col gap-2">
                        <div class="text-h5 font-secondary text-white">
                           <h3>Klient</h3>
                        </div>
                        <div class="text-h5 font-secondary text-black10">
                           <h4>Organizator konferencji naukowej w Szczecinie </h4>
                        </div>
                     </div>
                  </div>
                  <div class="absolute h-0.5 bg-black60 w-full bottom-0 -left-0 -z-10"></div>
               </div>
           
               <div class="flex items-center justify-between calculateHeight px-8 relative z-10 bg-black80 mt-4">
                  <div class="absolute h-0.5 bg-black60 w-full -translate-y-1/2 -left-0 -z-10"></div>
           
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute -left-8 -translate-y-[calc(100%+44px)] text-black10 text-case-study lg:w-[300px] xl:w-[344px] text-left">
                        <p>Nagranie i zmontowanie  wideo zapowiedzi i 3 wideo zaproszeń Partnerów na wydarzenie (nagrania wysokiej jakości 4K zostały także wykorzystane w dniu wydarzenia na ekranach głównych przed rozpoczęciem konferencji)</p>
                     </div>
                     @svg('images.icon-camera')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 top-[calc(100%+34px)] text-black10 text-case-study lg:w-[250px] xl:w-[300px] text-center">
                        <p>Konfiguracja reklamy Meta Ads
                        Cel: rozpowszechnienie wydarzenia, zachęcenie do rejestracji,  kierowanie ruchu na www ze szczegółowymi informacjami oraz rozpowszechnienie poszczególnych postów</p>
                     </div>
                     @svg('images.icon-conf')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 -translate-y-[calc(100%+44px)] text-black10 text-case-study lg:w-[300px] xl:w-[344px] text-center">
                        <p>Utworzenie wydarzenia <br/>na portalu Facebook</p>
                     </div>
                     @svg('images.icon-notification')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 top-[calc(100%+34px)] text-black10 text-case-study lg:w-[250px] xl:w-[300px] text-center">
                        <p>Zaplanowanie komunikacji, stworzenie harmonogramów oraz publikacja wpisów na portalach: Facebook i Linkedin</p>
                     </div>
                     @svg('images.icon-check')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute left-1/2 -translate-x-1/2 -translate-y-[calc(100%+44px)] text-black10 text-case-study lg:w-[230px] xl:w-[262px] text-center">
                        <p>Praca na podstawie dostarczonych przez Klienta PSD z identyfikacją wydarzenia</p>
                     </div>
                     @svg('images.icon-file')
                  </div>
                  <div class="icon relative z-10">
                     <div class="text z-10 absolute -right-8 top-[calc(100%+34px)] text-black10 text-case-study lg:w-[220px] xl:w-[225px] text-right">
                        <p>W dniu wydarzenia przygotowanie fotorelacji wysokiej jakości sprzętem i z autorską, nowoczesną postprodukcją </p>
                    
                     </div>
                     @svg('images.icon-end')
                  </div>
               </div>
            </div>
            @include('partials.swiper-slide-case-study')
            
          
         </div>
       </div>
    </div>
 </section>


 