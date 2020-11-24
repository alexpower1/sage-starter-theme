@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('components.general.spacer')
    @include('partials.content-page')
  @endwhile
@endsection
