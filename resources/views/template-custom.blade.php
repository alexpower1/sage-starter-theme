{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-heading')
@include('partials.content-page')
@endwhile
@endsection
