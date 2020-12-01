@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-heading')
@include('components.general.spacer')
@include('partials.content-page')

@php
$children = get_children(array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'title',
'order' => 'ASC',
));
@endphp

@if($children)
@include('components.general.spacer')
<div class="container">
    <div class="-mx-2 flex flex-wrap flex-col lg:flex-row">
        @foreach($children as $child)
        <div class="h-full w-full lg:w-1/2 px-1 mb-3">
            <a href="<?= get_permalink($child->ID) ?>"
                class="block px-5 xl:px-8 py-20 bg-ffa-dark text-white font-inter font-bold text-xl lg:text-2xl xl:text-3xl"><?= $child->post_title ?></a>
        </div>
        @endforeach
    </div>
</div>
@endif
@endwhile
@endsection
