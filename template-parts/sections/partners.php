<div class="partners bg-black-pri">
  <div class="max-w-[1440px] m-auto py-16 md:py-36 px-12 flex gap-8 md:gap-16 flex-col items-center">
    <div class="text-[32px] md:text-5xl font-semibold text-center">Vores samarbejdspartnere</div>
    <div class="flex gap-[30px] w-[1340px]">
      <?php
      for ($i = 1; $i <= 5; $i++) {
        ?>
      <img src="<?= get_theme_file_uri("assets/images/partners/logo " . $i . ".png") ?>" alt="logo">
      <?php
      }
      ?>
    </div>
  </div>
</div>