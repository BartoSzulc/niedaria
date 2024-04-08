@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="hero__template  text-white bg-black80 relative pt-40 py-full overflow-hidden wysiwyg">
    <div class="container">
        <div class="bg-black80 p-half-mobile lg:p-half max-lg:w-[calc(100%+40px)] max-lg:-left-5 relative rounded wysiwyg">
          @includeFirst(['partials.content-page', 'partials.content'])
        </div>
    </div>
  </section>
  
  @endwhile
@endsection
