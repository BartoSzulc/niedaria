@extends('layouts.app')

@section('content')
<section class="hero__template  bg-color4 relative py-half lg:py-full overflow-hidden wysiwyg">
  <div class="container">
      <div class="w-full mb-half-mobile lg:mb-half">
          <div class="text-h3 lg:text-h2 font-bold font-secondary text-center" data-aos="fade-up">
            <h1>404</h1>
          </div>
      </div>
      <div class="bg-white p-half-mobile lg:p-half max-lg:w-[calc(100%+40px)] max-lg:-left-5 relative rounded">
       <div class="flex flex-wrap gap-5 items-center justify-center w-full flex-col" data-aos="fade-up">
        <div class="text-h3 lg:text-h3" >
          <h2>{{ pll__('Strona nie istnieje') }}</h2>
        </div>
        <a href="/" class="btn btn--primary w-[244px]" ><span>{{ pll__('Powrót') }}</span></a>
       </div>
      </div>
     
  </div>
</section>
@endsection
