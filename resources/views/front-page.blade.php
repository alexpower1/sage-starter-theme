@php $image = get_field('primary_image'); @endphp

@extends('layouts.app')

@section('content')
<section class="container flex flex-col">
    @include('components.typography.primary-heading', [ 'text' => 'Welcome to ' . get_bloginfo() ])

    @include('components.general.spacer')

    <div>
        @include('components.general.notification', [
        'text' => 'Need urgent assistance?',
        'btnLink' => 'tel:' . get_field('phone_number', 'options'),
        'btnLabel' => 'Call Now'
        ])
    </div>

    @include('components.general.spacer')

    <div>
        <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
    </div>
</section>

@include('components.general.spacer')

<section class="container">
    @include('partials.grid', [
    'post_1' => get_field('post_1'),
    'post_2' => get_field('post_2'),
    'post_3' => get_field('post_3'),
    'post_4' => get_field('post_4'),
    'post_5' => get_field('post_5'),
    'post_6' => get_field('post_6'),
    ])
</section>
@endsection
