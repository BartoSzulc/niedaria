@extends('layouts.app')

@section('content')

<header class="section_header">
    <div class="header_component">
       <div class="header_content-wrapper">
          <div class="header_content">
             <div class="padding-global">
                <div class="container-small">
                   <div class="padding-section-large spacer-xsmall">
                      <div class="text-align-center">
                         <div class="margin-bottom text-h2">
                            <h1 class="text-primary100 hero_text text-center font-bold font-secondary">
                                Treściwie dla biznesu <br/>i eventów
                            </h1>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="header_background-images">
             <div class="image-overlay-layer"></div>
             <div class="header_images-layout">
                
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_1.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_2.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_3.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_4.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image-main.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_5.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_6.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_7.png')}}" class="header_image" alt="">
                </div>
                <div class="header_image-wrapper hide-mobile-landscape">
                    <img src="{{asset('images/hero_image_9.png')}}" class="header_image" alt="">
                </div>
                
             </div>
          </div>
       </div>
       <div data-w-id="a8b857c8-a52b-4a0c-6977-5aa98b87c627" class="header_ix-trigger"></div>
    </div>
 </header>

<section class="home__intro pt-[150px] pb-[72px]">
   <div class="container">
      <div class="w-full text-center">
         <div class="text-h2 font-secondary font-bold mb-11 text-primary100">
            <h2>Łączę marketingowe kropki w skuteczną całość</h2>
         </div>
         <div class="flex flex-col text-center gap-5">
            <div class="text-B24 font-bold text-black10">
               <p>Cześć, jestem Diana! Nie dam Ci magicznych sposobów na obserwujących i miliony
                  serduszek, skupiam się na “starym dobrym marketingu” <br/>
                  i strategii, która pozwoli Ci pozyskać
                  Klientów.
               </p>
            </div>
            <div class="text-white text-B24 font-bold py-8">
               <ul class="ul-custom ul-custom--center flex flex-col gap-6 text-center">
                  <li>Wykształcenie dziennikarskie</li>
                  <li>Profesjonalny sprzęt oraz programy do fotografii i wideo</li>
                  <li>Doświadczenie w marketingu</li>
                  <li>Autorskie szablony i projekty od profesjonalnych grafików</li>
               </ul>
            </div>
            <div class="text-B24 font-bold text-black10">
               <p><span class="text-primary100">Piszę zawodowo od blisko 10 lat</span>, brakuje mi już miejsca na książki o marketingu, tworzę
                  zdjęcia i wideo, które zwiększają zaangażowanie
                  w social mediach, a po Meta Ads
                  poruszam się z zamkniętymi oczami.
                  </p>
            </div>
         </div>

         
      </div>
   </div>
</section>

<section class="home__click relative">
   <div class="container">
      <div class="layout_component">
         <div class="layout_content w-full text-center flex items-center justify-center flex-col">
            <div class="text-B24 text-black10 font-bold mb-4">
               <p>Klikasz w to?</p>
            </div>
            <div class="layout_heading-list">
               <div class="layout_heading heading-1">
                  <div class="text-h2 font-secondary font-bold text-primary100">
                     <p>Dla mnie marketing</p>
                  </div>
               </div>
               <div class="layout_heading heading-2">
                  <div class="text-h2 font-secondary font-bold text-primary100">
                     <p>to nie kłamliwa reklama</p>
                  </div>
               </div>
               <div class="layout_heading heading-3">
                  <div class="text-h2 font-secondary font-bold text-primary100">
                     <p>a odpowiadanie na potrzeby klientów, </p>
                  </div>
               </div>
               <div class="layout_heading heading-4">
                  <div class="text-h2 font-secondary font-bold text-primary100">
                     <p>przemyślane komunikowanie </p>
                  </div>
               </div>
               <div class="layout_heading heading-5">
                  <div class="text-h2 font-secondary font-bold text-primary100">
                     <p>i  budowanie wartościowych relacji</p>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
      
   </div>
</section>
<section class="home__helping py-11">
   <div class="container flex flex-col gap-8 items-center text-center justify-center">
      
      <div class="text-h3 font-secondary text-primary100">
         <h2>Pomagam szeroko: <span class="text-primary60">od contentu, przez komunikację, po reklamę.</span></h2>
      </div>
      <div class="text-B24 text-black10">
         <p>Jeśli nie masz czasu na
         social media, brakuje Ci materiałów, chcesz dbać o profesjonalny wizerunek lub
         potrzebujesz <br/>
         wypromować nowy projekt lub firmę - mam w tym doświadczenie.</p>
      </div>
      <div class="text-B24 text-primary100">
         <p>Każda oferta jest szyta na miarę, ale poniżej możesz sprawdzić najczęściej wybierane usługi.</p>
      </div>
   </div>
</section>
<section class="home__click ">
   <div class="container">
      <div class="wrapper light">
         <div class="cards ">
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Social Media</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                        wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                     </div>
                     <div class="text-B24 font-light text-black10">
                        <p>Najczęściej moi Klienci szukają osoby odpowiedzialnej za abonamentową obsługę social mediów: kilku różnych kanałów jednocześnie z przeznaczeniem określonej kwoty miesięcznie na reklamę w Meta Ads. Jeśli jest to produkt lub lokalna marka, często moim zadaniem jest także tworzenie regularnie dedykowanych zdjęć i wideo (np. rolek na Instagram lub TikTok).
                        </p>
                     </div>
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/socialmedia.png') }}" class="rounded-2xl" alt="">
                  </div>
               </div>
               
            </div>
           </div>
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Promocja Eventów</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Obsługa od A do Z. Wypromuję Twoje wydarzenie w social
                           mediach, zaplanuję komunikację, stworzę wideo i foto relację w dniu eventu.</p>
                     </div>
                     
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/promocjaeventow.png') }}" class="rounded-2xl aspect-[456/560] h-[560px] object-cover" alt="">
                  </div>
               </div>
               
            </div>
           </div>
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Fotografia</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Gdy biznes potrzebuje wysokiej jakości zdjęć: na stronę internetową, na profilowe, do CV, do oferty, do reklamy. Zajmuję się fotografią biznesową, produktową oraz eventową (w tym reportażową). </p>
                     </div>
                     
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/fotografia.png') }}" class="rounded-2xl aspect-[456/560] h-[560px] object-cover" alt="">
                  </div>
               </div>
               
            </div>
           </div>
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Wideo</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Stworzę profesjonalne wideo reklamowe w wysokiej jakości sprzętem z dedykowanym dla
                        Twojej firmy scenariuszem i wsparciem w przygotowaniu najlepszych treści wypowiedzi.</p>
                     </div>
                     
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/wideo.png') }}" class="rounded-2xl aspect-[456/560] h-[560px] object-cover" alt="">
                  </div>
               </div>
               
            </div>
           </div>
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Reklama</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Pracuję przede wszystkim w narzędziu Meta Ads, dzięki któremu konfiguruję reklamy na
                           Twoim Facebooku i Instagramie, kierujące ruch na www lub zwiększające sprzedaż.</p>
                     </div>
                     <div class="mt-4 lg:mt-6">
                        <div class="text-h4 text-primary60 font-secondary">
                           <h3>Możemy:</h3>
                        </div>
                        <ul class="ul-custom text-black10 text-B20 font-bold">
                           <li>zwiększać ilość osób, która zobaczy Twoje treści</li>
                           <li>zwiększać ilość osób, która zobaczy Twoje treści</li>
                           <li>zwiększać ilość osób, która zobaczy Twoje treści</li>
                           <li>zwiększać ilość osób, która zobaczy Twoje treści</li>
                           <li>zwiększać ilość osób, która zobaczy Twoje treści</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/reklama.png') }}" class="rounded-2xl aspect-[456/560] h-[560px] object-cover" alt="">
                  </div>
               </div>
               
            </div>
           </div>
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Inne</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mam doświadczenie w marketingu, a dzięki moim Partnerom biznesowym, mogę pomóc Ci zrobić logo, stronę www czy materiały graficzne i drukowane.</p>
                     </div>
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/inne.png') }}" class="rounded-2xl aspect-[456/560] h-[560px] object-cover" alt="">
                  </div>
               </div>
               
            </div>
           </div>
         </div>
      </div>
   </div>
</section>
<section class="home__trustedme py-half lg:py-full overflow-hidden">
   <div class="container">
      <div class="w-full text-center text-h2 font-secondary text-primary100">
         <h2>Zaufali mi</h2>
      </div>
   </div>
   <div class="px-6 cards-container gap-6 logo:items-center logo:justify-center max-logo:w-fit grid grid-cols-logo mt-[86px]">
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
      <div class="card w-full h-[264px] bg-primary100"></div>
   </div>
</section>
<section class="home__case-study">
   <div class="container">
      <div class="text-h2 font-secondary text-primary100 mb-[70px]">
         <h2>Case Study</h2>
      </div>
   </div>
</section>
<section class="home__realizacje">
   <div class="container">
      <div class="text-h2 font-secondary text-primary100 mb-9">
         <h2>Realizacje</h2>
      </div>
   </div>
<div class="marquee-image__wrapper flex flex-col gap-6 overflow-hidden">
   <div class="marquee-image__inner toleft">
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part ">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part ">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
   </div>
   <div class="marquee-image__inner toright ">
      <div class="marquee-image__part" >
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part" >
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
      <div class="marquee-image__part">
         <img class="aspect-[360/202] object-cover rounded-2xl" src="{{ asset('images/realizacja1.png') }}" alt="">
      </div>
   </div>
</div>
</section>

<section class="marquee">
   <div class="marquee__inner" aria-hidden="true" ref="inner">
     <div class="marquee__part">
      <span>Kto pyta, nie…płaci! Nie wahaj się skorzystać z darmowej konsultacji</span>
     </div>
     <div class="marquee__part">
      <span>Kto pyta, nie…płaci! Nie wahaj się skorzystać z darmowej konsultacji</span>
     </div>
     <div class="marquee__part">
      <span>Kto pyta, nie…płaci! Nie wahaj się skorzystać z darmowej konsultacji</span>
     </div>
     <div class="marquee__part">
      <span>Kto pyta, nie…płaci! Nie wahaj się skorzystać z darmowej konsultacji</span>
     </div>
     <div class="marquee__part">
      <span>Kto pyta, nie…płaci! Nie wahaj się skorzystać z darmowej konsultacji</span>
     </div>
     <div class="marquee__part">
      <span>Kto pyta, nie…płaci! Nie wahaj się skorzystać z darmowej konsultacji</span>
     </div>
   </div>
</section>


@endsection