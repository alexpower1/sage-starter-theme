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
            'link_1' => get_field('link_1'),
            'link_2' => get_field('link_2'),
            'link_3' => get_field('link_3'),
            'link_4' => get_field('link_4'),
            'link_5' => get_field('link_5'),
            'link_6' => get_field('link_6'),
        ])
    </section>
@endsection

