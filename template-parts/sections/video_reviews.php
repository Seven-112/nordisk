<div class="video-reviews flex">
  <div class="hidden lg:block lg:w-1/2">
    <div class="w-full 2xl:w-[720px] float-right bg-black-pri py-36 px-12 flex flex-col items-center">
      <div class="relative nor-video w-[405px]">
        <img src="<?= get_theme_file_uri("assets/images/reviews/review1.png") ?>" alt="review">
        <div class="nor-video-bottom">
          <div class="flex gap-3 controls items-center px-4 pt-20">
            <img class="cursor-pointer" src="<?= get_icon_uri("pause") ?>" alt="pause">
            <progress id='progress-bar' min='0' max='100' value='20'>0% played</progress>
            <img class="cursor-pointer" src="<?= get_icon_uri("volume-high") ?>" alt="volumn">
          </div>
        </div>
      </div>
      <div class="mt-9 flex flex-col items-center gap-1 text-white">
        <div class="text-3xl font-semibold">Hektor Hellerich</div>
        <div class="mt-1 opacity-70">Client since oct, 2020</div>
      </div>
    </div>
  </div>
  <div class="w-full lg:w-1/2 bg-white ">
    <div class="w-full 2xl:w-[720px] text-black-sec px-10 2xl:pl-20 pt-0 lg:pt-36 pb-36">
      <div class="text-black-sec text-3xl xl:text-5xl text-center font-semibold">Se, hvad kunderne siger om NordiskGuld
      </div>
      <div class="mt-20 flex gap-8 flex-wrap justify-center">
        <div class="border-black-pri p-3 relative w-[175px] nor-video-preview playing">
          <img src="<?= get_theme_file_uri("assets/images/reviews/1.png") ?>" alt="">
          <img class="nor-center video-pause" src="<?= get_icon_uri("video-pause") ?>">
        </div>
        <?php
        for ($i = 2; $i <= 6; $i++) {
          ?>
        <div class="relative w-[175px] nor-video-preview paused">
          <img src="<?= get_theme_file_uri("assets/images/reviews/" . $i . ".png") ?>">
          <img class="nor-center video-play" src="<?= get_icon_uri("video-play") ?>">
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>