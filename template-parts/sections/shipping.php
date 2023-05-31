<div class="text-white shipping">
  <div class="max-w-[900px] m-auto py-36 flex flex-col items-center">
    <div class="font-semibold text-5xl text-center leading-[130%]">Sikker forsendelse i<br /> guldbreveller med
      pakkelable</div>
    <div class="mt-6 nor-outline-btn see-video">
      <i class="mr-3 fa-solid fa-play"></i>
      Se video
    </div>
    <div class="w-full px-10 py-8 mt-20 text-center bg-white text-black-sec">
      <div class="text-3xl font-medium">Bestil Gratis Guldbrev</div>
      <div class="mt-4 text-black-pri">
        Bor du langt væk fra vores butikker, men ønsker stadig vores gode guld og sølvpriser. Så bestil
        et Guldbrev, vi sender det direkte hjem til dig. Du kan trygt ligge dit guld i pakken og sende det gratis retur
        til os. Forsikret op til 50.000 kroner
      </div>
      <div class="flex gap-4 mt-10">
        <input type="text" class="w-1/2 nor-input" placeholder="Fulde Navn">
        <input name="postnum" type="number" max="9999" class="w-1/2 nor-input" placeholder="Postnummer">
      </div>
      <input name="address" disabled type="text" class="w-full mt-6 nor-input" placeholder="Adresse">
      <div class="flex gap-4 mt-6">
        <input type="text" class="w-1/2 nor-input" placeholder="Telefonnummer">
        <input type="text" class="w-1/2 nor-input" placeholder="E-mail">
      </div>
      <div class="flex items-center justify-between mt-10">
        <label class="checkbox-container">
          Jeg har loest og accepteret vilkärene
          <input type="checkbox" checked>
          <span class="checkmark"></span>
        </label>
        <div class="nor-gold-btn">Fä tilsendt guldbrev nu</div>
      </div>
    </div>

    <div class="flex w-full mt-20">
      <div class="w-1/2">
        <div class="flex gap-8 pb-10">
          <div class="text-5xl font-semibold opacity-20">01.</div>
          <div>
            <div class="text-3xl font-semibold">Bestil dit guldbrev </div>
            <div class="mt-3 text-gray-thi">her inden kl. 16.30 sd sender vi guldbrevet direkte hiem til dig samme dag
            </div>
          </div>
        </div>
        <div class="flex gap-8 py-10 border-[#4A4A4A] border-y-[1px]">
          <div class="text-5xl font-semibold opacity-20">02.</div>
          <div>
            <div class="text-3xl font-semibold">Returner brevet </div>
            <div class="mt-3 text-gray-thi">med dit guld og aflever brevet i ncermeste Postnord pakkeshop</div>
          </div>
        </div>
        <div class="flex gap-8 pt-10">
          <div class="text-5xl font-semibold opacity-20">03.</div>
          <div>
            <div class="text-3xl font-semibold">Vi kontakter dig med en vurdering. </div>
            <div class="mt-3 text-gray-thi">Accepterer du har du benaene samme dag. Hvis ikke sender vi omg&ende retur
            </div>
          </div>
        </div>
      </div>
      <div class="relative w-1/2 pt-8 pl-14">
        <div class="counter-wrapper">
          <div class="mt-10">Vi sender</div>
          <div class="w-32 mt-1 text-3xl font-semibold text-white counter">&nbsp;</div>
          <div class="mt-1">idag inden</div>
        </div>
        <img src="<?= get_theme_file_uri("assets/images/envelope.png") ?>" alt="envelope">
        <div class="flex flex-col items-center gap-4 mt-12">
          <img src="<?= get_icon_uri("full-star") ?>" alt="full-star">
          <div class="text-xl font-medium text-gray-thi">Se os pa Trustpilot her</div>
        </div>
      </div>
    </div>
  </div>
</div>