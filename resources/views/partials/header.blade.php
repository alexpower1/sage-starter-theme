@php
$logo = get_field('primary_logo', 'options');
$menu = wp_get_nav_menu_items(2);
@endphp


<header class="border-b-2 border-solid border-gray-100">
    <nav class="container flex items-center justify-between py-4">
        <div>
            <a href="<?= get_home_url(); ?>">
                <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
            </a>
        </div>

        <div class="hidden lg:block">
            <ul class="flex">
                <?php foreach ($menu as $post) : ?>
                @include('components.general.nav-item', [
                'url' => $post->url,
                'content' => $post->title
                ])
                <?php endforeach; ?>

                @include('components.general.nav-cta', [
                'url' => get_field('phone_number', 'options'),
                'content' => 'Call <i class="fas fa-phone ml-2"></i>'
                ])
            </ul>
        </div>

        <div class="block lg:hidden">
            <button type="button"
                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                id="open-menu" aria-haspopup="true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-8 w-8 text-ffa-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden opacity-0 duration-200"
                id="menu">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <a href="<?= get_home_url(); ?>">
                                <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                id="close-menu">
                                <span class="sr-only">Close main menu</span>
                                <svg class="text-ffa-blue h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                        <div role="none">
                            <ul>
                                <?php foreach ($menu as $post) : ?>
                                @include('components.general.nav-item-mobile', [
                                'url' => $post->url,
                                'content' => $post->title
                                ])
                                <?php endforeach; ?>

                                @include('components.general.nav-cta-mobile', [
                                'url' => get_field('phone_number', 'options'),
                                'content' => 'Call <i class="fas fa-phone ml-2"></i>'
                                ])
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
@include('components.general.spacer')
