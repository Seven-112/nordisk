<div class="partners bg-black-pri">
  <div class="max-w-[1440px] m-auto py-36 px-16 flex gap-16 flex-col items-center">
    <div class="text-5xl font-semibold">Vores samarbejdspartnere</div>
    <div class="flex gap-[30px]">
      <?php
      for ($i = 1; $i <= 5; $i++) {
        ?>
      <img src="<?= get_theme_file_uri("assets/images/partners/logo " . $i . ".png") ?>" alt="logo">
      <?php
      }
      ?>
    </div>
  </div>