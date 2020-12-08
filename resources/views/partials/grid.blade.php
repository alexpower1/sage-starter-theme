<div class="flex flex-col lg:flex-row -mx-3">
    <div class="flex flex-wrap w-full lg:w-1/2">
        <div class="w-full h-64 lg:h-96 px-3 pb-5">
            <a href="<?= get_permalink($post_1->ID) ?>" class="bg-ffa-blue h-full w-full flex flex-col p-5">
                <span class="mt-auto text-white font-inter font-bold text-4xl"><?= $post_1->post_title ?></span>
            </a>
        </div>
        <div class="w-full lg:w-1/2 h-64 px-3 pb-5 lg:pb-0">
            <a href="<?= get_permalink($post_2->ID) ?>" class="bg-ffa-dark h-full w-full flex flex-col p-5">
                <span class="mt-auto text-white font-inter font-bold text-4xl"><?= $post_2->post_title ?></span>
            </a>
        </div>
        <div class="w-full lg:w-1/2 h-64 px-3 pb-5 lg:pb-0">
            <a href="<?= get_permalink($post_3->ID) ?>" class="bg-ffa-blue h-full w-full flex flex-col p-5">
                <span class="mt-auto text-white font-inter font-bold text-4xl"><?= $post_3->post_title ?></span>
            </a>
        </div>
    </div>
    <div class="flex flex-wrap-reverse lg:flex-wrap w-full lg:w-1/2">
        <div class="w-full lg:w-1/2 h-64 px-3 pb-0 lg:pb-5">
            <a href="<?= get_permalink($post_4->ID) ?>" class="bg-ffa-dark h-full w-full flex flex-col p-5">
                <span class="mt-auto text-white font-inter font-bold text-4xl"><?= $post_4->post_title ?></span>
            </a>
        </div>
        <div class="w-full lg:w-1/2 h-64 px-3 pb-5">
            <a href="<?= get_permalink($post_5->ID) ?>" class="bg-ffa-blue h-full w-full flex flex-col p-5">
                <span class="mt-auto text-white font-inter font-bold text-4xl"><?= $post_5->post_title ?></span>
            </a>
        </div>
        <div class="w-full h-64 lg:h-96 px-3 pb-5 lg:pb-0">
            <a href="<?= get_permalink($post_6->ID) ?>" class="bg-ffa-dark h-full w-full flex flex-col p-5">
                <span class="mt-auto text-white font-inter font-bold text-4xl"><?= $post_6->post_title ?></span>
            </a>
        </div>
    </div>
</div>
