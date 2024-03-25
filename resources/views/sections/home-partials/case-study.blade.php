<section class="home__case-study">
    <div class="container">
       <div class="text-h2 font-secondary text-primary100 mb-[70px]">
          <h2>Case Study</h2>
       </div>
       <div class="swiperCaseStudy swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="w-full title grid grid-cols-12 gap-6 pb-8">
                  <div class="col-span-9 grid grid-cols-9 gap-6">
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
                  <div class="col-span-2 col-start-10 flex items-end gap-8">
                     @include('partials.swiper-button')
                     @include('partials.swiper-button', ['class' => 'rotate-180'])
                  </div>
               </div>

               <div class="flex items-center justify-between relative">
                  <div class="absolute h-0.5 bg-black60 w-full top-1/2 -translate-y-1/2 -left-0"></div>
          
                  <div class="icon">
                     @svg('images.icon-camera')
                  </div>
                  <div class="icon">
                     @svg('images.icon-conf')
                  </div>
                  <div class="icon">
                     @svg('images.icon-notification')
                  </div>
                  <div class="icon">
                     @svg('images.icon-check')
                  </div>
                  <div class="icon">
                     @svg('images.icon-file')
                  </div>
                  <div class="icon">
                     @svg('images.icon-end')
                  </div>
               </div>
            </div>
         </div>
       </div>
    </div>
 </section>