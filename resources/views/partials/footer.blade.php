@include('components.general.spacer')

<footer class="bg-ffa-dark mt-auto py-8">
  <div class="container flex flex-wrap">
      <div class="w-full lg:w-1/4">
          <a href="<?= get_site_url() ?>">
              <h3 class="font-inter text-2xl text-white font-bold">
                  <?= get_bloginfo(); ?>
              </h3>
          </a>
      </div>
      <div class="w-full lg:w-1/4">
          <p class="text-white">Phone</p>
      </div>
      <div class="w-full lg:w-1/4">
          <p class="text-white">Address</p>
      </div>
      <div class="w-full lg:w-1/4">
          <p class="text-white">Social / Sign up</p>
      </div>
  </div>
</footer>
</div>
</body>

</html>
