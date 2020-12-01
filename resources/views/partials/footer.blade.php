@include('components.general.spacer')

<footer class="bg-ffa-dark mt-auto py-8">
    <div class="container flex flex-wrap">
        <div class="w-full lg:w-1/4 mb-5 lg:mb-0">
            <a href="<?= get_site_url() ?>">
                <h3 class="font-inter text-2xl text-white font-bold">
                    <?= get_bloginfo(); ?>
                </h3>
            </a>
        </div>
        <div class="w-full lg:w-1/4">
            <!-- <p class="font-inter text-white">Social / Sign up</p> -->
        </div>
        <div class="w-full lg:w-1/4 mb-5 lg:mb-0">
            <p class="font-inter font-bold text-white mb-2">Phone</p>

            @if(get_field('phone_number', 'options'))
            <p class="font-inter text-white"><?= get_field('phone_number', 'options') ?></p>
            @endif
        </div>
        <div class="w-full lg:w-1/4 mb-5 lg:mb-0">
            <p class="font-inter font-bold text-white">Address</p>

            @if(get_field('address_line_1', 'options'))
            <p class="font-inter text-white"><?= get_field('address_line_1', 'options') ?></p>
            @endif

            @if(get_field('address_line_2', 'options'))
            <p class="font-inter text-white"><?= get_field('address_line_2', 'options') ?></p>
            @endif

            @if(get_field('address_line_3', 'options'))
            <p class="font-inter text-white"><?= get_field('address_line_3', 'options') ?></p>
            @endif

            @if(get_field('address_line_4', 'options'))
            <p class="font-inter text-white"><?= get_field('address_line_4', 'options') ?></p>
            @endif

            @if(get_field('address_line_5', 'options'))
            <p class="font-inter text-white"><?= get_field('address_line_5', 'options') ?></p>
            @endif
        </div>
    </div>
</footer>

@php wp_footer() @endphp
