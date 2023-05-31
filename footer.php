<?php wp_footer(); ?>
<div class="footer bg-black-pri text-white ">
  <div class="w-[1440px] m-auto pt-28 px-16">
    <img src="<?= get_theme_file_uri("assets/images/logo_bottom.png") ?>" alt="logo">
    <div class="mt-6 opacity-70">
      NordiskGuld.dk tilbyder at købe smykker, guld og sølv til markedets bedste priser. Din partner til en<br /> sikker
      og
      god handel. NordiskGuld ejes og drives af nofipa ApS (CVR-nr. 39812460).
    </div>
    <div class="mt-20 flex items-center bg-white py-8 px-12 gap-24">
      <div class="w-1/2">
        <div class="text-3xl text-black-sec font-medium">Nyheder, tilbud & konkurrencer</div>
        <div class="text-black-pri mt-3">
          Tilmeld dig vores nyhedsbrev og modtag værdifuld markedsindsigt,
          interessante blogindlæg og tilbud.
        </div>
      </div>
      <div class="w-1/2">
        <div class="nor-border p-1 flex justify-between">
          <div class="flex gap-3 items-center ml-4">
            <img class="invert-[0.7]" src="<?= get_icon_uri("contact") ?>" alt="envelope" width="24">
            <input class="text-black focus:outline-none" placeholder="Din email" />
          </div>
          <div class="nor-gold-btn py-3">Sende</div>
        </div>
      </div>
    </div>
    <div class="mt-16 flex">
      <div class="w-1/4">
        <div class="flex gap-5 items-start">
          <img src="<?= get_icon_uri("location-pin") ?>" alt="location">
          <div>
            <div class="text-lg font-bold">København</div>
            <div class="mt-2 opacity-70">H.C. Andersens Boulevard 38 st tv, 1553 København V</div>
          </div>
        </div>
        <div class="flex gap-5 mt-6 items-start">
          <img src="<?= get_icon_uri("clock") ?>" alt="clock">
          <div class="leading-loose opacity-70">
            Mandag - Onsdag 10:00-17:00
            <br />
            Torsdag 10:00-19:00
            <br />
            Fredag 10:00-17:00
            <br />
            Lørdag 11:00-16:00
          </div>
        </div>
      </div>
      <div class="w-1/4 px-7 border-gray-left">
        <div class="flex gap-5 items-start">
          <img src="<?= get_icon_uri("location-pin") ?>" alt="location">
          <div>
            <div class="text-lg font-bold">Aarhus</div>
            <div class="mt-2 opacity-70">Østergade 33 st th, 8000 Aarhus C</div>
          </div>
        </div>
        <div class="flex gap-5 mt-6 items-start">
          <img src="<?= get_icon_uri("clock") ?>" alt="clock">
          <div class="leading-loose opacity-70">
            Mandag - Fredag 10:00-17:00
          </div>
        </div>
      </div>
      <div class="w-1/4 px-8 border-gray-left">
        <div class="flex gap-5 items-start">
          <img class="invert" width="24" src="<?= get_icon_uri("phone-call") ?>" alt="phone">
          <div>
            <div class="text-lg font-bold">Ring til os</div>
            <div class="mt-2 opacity-70">71 74 30 65</div>
          </div>
        </div>
      </div>
      <div class="w-1/4 px-8 border-gray-left">
        <div class="flex gap-5 items-start">
          <img width="24" src="<?= get_icon_uri("envelope") ?>" alt="envelope">
          <div>
            <div class="text-lg font-bold">Email os</div>
            <div class="mt-2 opacity-70">info@nordiskguld.dk</div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-20 flex justify-between">
      <div class="footer-btn">Sælg Guld</div>
      <div class="footer-btn">Få tilsendt gratis guldbrev</div>
      <div class="footer-btn">Få et gratis pakkelabel</div>
      <div class="footer-btn">Bestil Guldbrev</div>
      <div class="footer-btn">Guldpriser</div>
      <div class="footer-btn">Sølvpriser</div>
      <div class="footer-btn">Investering i guld</div>
      <div class="footer-btn">Køb guld</div>
      <div class="footer-btn">Butikker</div>
      <div class="footer-btn">Webshop - Guldsmykker</div>
    </div>
    <div class="mt-5 flex justify-center py-5 border-dark-gray-top opacity-75">
      © 2021, Nofipa ApS (CVR-nr. 39812460). Alle rettigheder forbeholdes.
    </div>
  </div>
</div>
</body>

</html>