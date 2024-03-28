@extends('layouts.app')

@section('content')

@include('sections.home-partials.hero', ['data' => $data = get_field('hero'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.intro', ['data' => $data = get_field('intro'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.changingHeadings', ['data' => $data = get_field('changingHeadings'),  'id' => $data['id'] ?? null])
@include('sections.home-partials.helping', ['data' => $data = get_field('helping'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.offer', ['data' => $data = get_field('offer'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.trustedme', ['data' => $data = get_field('trustedme'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.case-study', ['data' => $data = get_field('case-study'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.realizacje', ['data' => $data = get_field('realizations'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.testimonials', ['data' => $data = get_field('testimonials'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.marqueeText', ['data' => $data = get_field('marquee_text'), 'id' => $data['id'] ?? null])
@include('sections.home-partials.contact', ['data' => $data = get_field('contact'), 'id' => $data['id'] ?? null])

@endsection