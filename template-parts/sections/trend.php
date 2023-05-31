<div class="bg-white trend text-black-pri">
  <div class="max-w-[1440px] m-auto py-36 px-16 flex gap-20">
    <div class="w-1/2">
      <div class="flex justify-between py-4 border-gray-bottom">
        <div class="text-2xl font-semibold">Dagens Guldpriser</div>
        <div class="flex gap-2">
          <div class="nor-outline-round-btn">Guld</div>
          <div class="nor-gray-btn">Sølv</div>
          <div class="nor-gray-btn">Begge</div>
        </div>
      </div>
      <?php
      $trends = [
        [
          'unit' => '8 karat',
          'purity' => '333',
          'price' => '133,30'
        ],
        [
          'unit' => '9 karat',
          'purity' => '375',
          'price' => '173,21'
        ],
        [
          'unit' => '14 karat',
          'purity' => '585',
          'price' => '139,20'
        ],
        [
          'unit' => '18 karat',
          'purity' => '750',
          'price' => '296,00'
        ],
        [
          'unit' => '21 karat',
          'purity' => '875',
          'price' => '338,40'
        ],
        [
          'unit' => '21,6 karat',
          'purity' => '900',
          'price' => '349,90'
        ],
        [
          'unit' => '22 karat',
          'purity' => '916',
          'price' => '356,40'
        ],
        [
          'unit' => '24 karat',
          'purity' => '999',
          'price' => '408,50'
        ],
        [
          'unit' => 'Guldbar',
          'purity' => '9999',
          'price' => '425,81'
        ],
      ];
      ?>
      <div class="py-4 nor-table border-gray-bottom">
        <?php
        foreach ($trends as $trend) {
          ?>
          <div class="flex justify-between px-4 py-3 nor-tr">
            <div class="w-24">
              <div class="text-lg font-medium text-black-sec">
                <?= $trend['unit'] ?>
              </div>
              <div>
                <?= $trend['purity'] ?> ‰
              </div>
            </div>
            <input class="nor-input py-2 px-3 w-[200px]" placeholder="1,0" />
            <div class="text-right text-gray-pri">
              <div class="text-xl font-medium">
                <?= $trend['price'] ?> kr.
              </div>
              <div class="text-sm">+2 kroner højere</div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
      <div class="flex items-center justify-between py-5 font-medium text-black-sec border-gray-bottom">
        <div class="text-2xl">Total Pris</div>
        <div class="text-3xl">312,41 kr.</div>
      </div>
      <div class="flex gap-4 mt-8">
        <div class="w-1/2 nor-outline-btn">Modtag kuvert</div>
        <div class="w-1/2 nor-gold-btn">Book Vurdering</div>
      </div>
    </div>
    <div class="flex flex-col w-1/2">
      <div class="flex justify-between py-4 border-gray-bottom">
        <div class="text-2xl font-semibold">Prisdiagram</div>
        <div class="flex gap-2">
          <div class="nor-outline-round-btn">
            Guld
            <i class="ml-2 fa-solid fa-chevron-down fa-2xs"></i>
          </div>
          <div class="nor-gray-btn">
            Per Gram
            <i class="ml-2 fa-solid fa-chevron-down fa-2xs"></i>
          </div>
          <div class="nor-gray-btn">
            DKK
            <i class="ml-2 fa-solid fa-chevron-down fa-2xs"></i>
          </div>
        </div>
      </div>
      <div class="mt-6 text-5xl font-semibold text-black-sec">1 821,71 DKK</div>
      <div class="flex gap-4 mt-5">
        <div>Guldprisvariation for sidste år</div>
        <div class="flex items-center gap-2 font-semibold text-green-pri">
          <i class="pt-1 mr-1 fa-solid fa-caret-up"></i>
          <div>12,38 DKK (+0,5%)</div>
        </div>
      </div>
      <div class="bg-[#f8f8f881] h-8 w-full"></div>
      <?php echo do_shortcode('[progressive_chart height=543]'); ?>
      <div class="flex gap-3 w-[650px] mt-8">
        <div class="px-3 nor-gray-btn">1 dag</div>
        <div class="px-3 nor-gray-btn">1 uge</div>
        <div class="px-3 nor-gray-btn">3 måneder</div>
        <div class="px-3 nor-gray-btn">6 måneder</div>
        <div class="px-3 nor-outline-round-btn">1 år</div>
        <div class="px-3 nor-gray-btn">5 år</div>
        <div class="px-3 nor-gray-btn">10 år</div>
        <div class="px-3 nor-gray-btn">alle</div>
      </div>
      <div class="flex justify-center gap-3 mt-8 nor-outline-btn">
        <img src="<?= get_icon_uri("bell") ?>" alt="bell">
        Price Alert
      </div>
    </div>
  </div>
</div>