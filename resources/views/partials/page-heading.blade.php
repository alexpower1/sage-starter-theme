<div class="container">
  @if(get_the_post_thumbnail_url())
  <div class="flex justify-center align-center">
    <img src="<?= get_the_post_thumbnail_url() ?>" alt="About">
  </div>

  @include('components.general.spacer')
  @endif


  @if(get_field('show_heading_section'))

  <div class="lg:flex">
    <div class="w-full lg:w-1/3 mb-3 lg:mb-0">
      @include('components.typography.primary-heading', [
      'text' => App::title()
      ])
    </div>

    <div class="w-full lg:w-2/3">
      @include('components.typography.secondary-heading', [
      'text' => get_field('secondary_heading')
      ])

      @include('components.general.spacer')

      @include('components.typography.tertiary-heading', [
      'text' => get_field('sub_heading_text')
      ])
    </div>
  </div>
  @else
  @include('components.typography.primary-heading', [
  'text' => App::title()
  ])
  @endif
</div>
