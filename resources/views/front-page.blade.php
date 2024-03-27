@extends('layouts.app')

@section('content')

@include('sections.home-partials.hero', ['data' => get_field('hero'), 'id' => null])
@include('sections.home-partials.intro', ['data' => get_field('intro'), 'id' => 'o_mnie'])
@include('sections.home-partials.changingHeadings', ['data' => get_field('changingHeadings'), 'id' => 'changingHeadings'])
@include('sections.home-partials.helping', ['data' => get_field('helping'), 'id' => 'helping'])
@include('sections.home-partials.offer', ['data' => get_field('offer'), 'id' => 'oferta'])
@include('sections.home-partials.trustedme', ['data' => get_field('trustedme'), 'id' => 'zaufali'])
@include('sections.home-partials.case-study', ['data' => get_field('case-study'), 'id' => 'case_study'])
@include('sections.home-partials.realizacje', ['data' => get_field('realizacje'), 'id' => 'realizacje'])
@include('sections.home-partials.testimonials', ['data' => get_field('testimonials'), 'id' => 'opinie'])
@include('sections.home-partials.marqueeText', ['data' => get_field('marqueeText'), 'id' => 'marqueeText'])
@include('sections.home-partials.contact', ['data' => get_field('contact'), 'id' => 'kontakt'])

@endsection