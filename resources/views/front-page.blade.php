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
               <ul class="ul-custom flex flex-col gap-6">
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
{{-- <section class="home__slider-first">
   <div class="container">
      <div class="wrapper">
         <div class="work">
            <div class="work_grid">
               <div class="work_card grid grid-cols-12 gap-6 ">
                  <div class="col-span-6 flex flex-col gap-4">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Social Media</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                        wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                     </div>
                     <div class="text-B24 font-regular text-black10">
                        <p>Najczęściej moi Klienci szukają osoby odpowiedzialnej za abonamentową obsługę social mediów: kilku różnych kanałów jednocześnie z przeznaczeniem określonej kwoty miesięcznie na reklamę w Meta Ads. Jeśli jest to produkt lub lokalna marka, często moim zadaniem jest także tworzenie regularnie dedykowanych zdjęć i wideo (np. rolek na Instagram lub TikTok).
                        </p>
                     </div>
                  </div>
                  <div class="col-start-8 col-span-5">
                     <img src="{{ asset('images/socialmedia.png') }}" class="rounded" alt="">
                  </div>
               </div>
               <div class="work_card grid grid-cols-12 gap-6">
               <div class="col-span-6 flex flex-col gap-4">
                  <div class="text-h3 text-primary100 font-secondary">
                     <h2>Social Media</h2>
                  </div>
                  <div class="text-B24 text-black10 font-bold">
                     <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                     wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                  </div>
                  <div class="text-B24 font-regular text-black10">
                     <p>Najczęściej moi Klienci szukają osoby odpowiedzialnej za abonamentową obsługę social mediów: kilku różnych kanałów jednocześnie z przeznaczeniem określonej kwoty miesięcznie na reklamę w Meta Ads. Jeśli jest to produkt lub lokalna marka, często moim zadaniem jest także tworzenie regularnie dedykowanych zdjęć i wideo (np. rolek na Instagram lub TikTok).
                     </p>
                  </div>
               </div>
               <div class="col-start-8 col-span-5">
                  <img src="{{ asset('images/socialmedia.png') }}" class="rounded" alt="">
               </div>
            </div>
            <div class="work_card grid grid-cols-12 gap-6">
               <div class="col-span-6 flex flex-col gap-4">
                  <div class="text-h3 text-primary100 font-secondary">
                     <h2>Social Media</h2>
                  </div>
                  <div class="text-B24 text-black10 font-bold">
                     <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                     wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                  </div>
                  <div class="text-B24 font-regular text-black10">
                     <p>Najczęściej moi Klienci szukają osoby odpowiedzialnej za abonamentową obsługę social mediów: kilku różnych kanałów jednocześnie z przeznaczeniem określonej kwoty miesięcznie na reklamę w Meta Ads. Jeśli jest to produkt lub lokalna marka, często moim zadaniem jest także tworzenie regularnie dedykowanych zdjęć i wideo (np. rolek na Instagram lub TikTok).
                     </p>
                  </div>
               </div>
               <div class="col-start-8 col-span-5">
                  <img src="{{ asset('images/socialmedia.png') }}" class="rounded" alt="">
               </div>
            </div>
            </div>
         </div>
         
            
         
      </div>
   </div>
      
   </div>
</section> --}}
<section class="home__click ">
   <div class="container px-0">
      <div class="wrapper light">
         <div class="cards ">
           <div class="card-wrapper">
            <div class="card work_card ">
               <div class="grid grid-cols-12 gap-6  px-5">
                  <div class="col-span-6 flex flex-col gap-4">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Social Media1</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                        wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                     </div>
                     <div class="text-B24 font-regular text-black10">
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
               <div class="grid grid-cols-12 gap-6 px-5">
                  <div class="col-span-6 flex flex-col gap-4">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Social Media2</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                        wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                     </div>
                     <div class="text-B24 font-regular text-black10">
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
               <div class="grid grid-cols-12 gap-6  px-5">
                  <div class="col-span-6 flex flex-col gap-4">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Social Media3</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                        wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                     </div>
                     <div class="text-B24 font-regular text-black10">
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
               <div class="grid grid-cols-12 gap-6  px-5">
                  <div class="col-span-6 flex flex-col gap-4">
                     <div class="text-h3 text-primary100 font-secondary">
                        <h2>Social Media4</h2>
                     </div>
                     <div class="text-B24 text-black10 font-bold">
                        <p>Mogę prowadzić dla Ciebie strategiczną komunikację abonamentowo lub wesprzeć w
                        wybranym przez Ciebie etapie rozwoju biznesu czy sprzedaży.</p>
                     </div>
                     <div class="text-B24 font-regular text-black10">
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
@endsection