@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="hero__template  text-white bg-black80 relative pt-40 py-full overflow-hidden wysiwyg">
    <div class="container">
        <div class="bg-black80 p-half-mobile lg:p-half max-lg:w-[calc(100%+40px)] max-lg:-left-5 relative rounded">
         <div class="flex flex-wrap gap-5 items-center justify-center w-full flex-col" >
          @includeFirst(['partials.content-page', 'partials.content'])
         </div>
        </div>
    </div>
  </section>
  
  @endwhile
@endsection
