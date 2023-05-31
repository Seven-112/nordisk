<div class="calculator bg-[#202020] text-white ">
  <div class="w-[1440px] m-auto pt-10 px-16 pb-24 flex flex-col items-center">
    <div class="font-semibold text-[40px]">Prøv vores investeringsbudget beregner</div>
    <div class="text-xl text-gray-300 mt-4">
      Vi har gjort det let for dig, at komme i gang med at investere i guld
    </div>
    <div class="w-[920px] p-10 bg-white text-black-sec mt-10">
      <div class="text-2xl font-semibold">Vælg et metal og dit budget</div>
      <div class="text-sm mt-4">Indtast dit budget</div>
      <!-- begin::language selector -->
      <div class="flex gap-2 mt-3 hover:cursor-pointer">
        <input class="grow nor-input" placeholder="5,000" />
        <div class="dropdown w-56">
          <div class="select">
            <span><img src="<?= get_theme_file_uri("assets/images/flag.png") ?>" alt="flag">Kr.</span>
            <i class="fa-solid fa-chevron-down fa-2xs"></i>
          </div>
          <input type="hidden" name="gender">
          <ul class="dropdown-menu">
            <li><img src="<?= get_theme_file_uri("assets/images/flag.png") ?>" alt="flag">Kr.</li>
          </ul>
        </div>
      </div>
      <!-- end::language selector -->
      <div class="flex gap-4 w-full mt-6">
        <div class="nor-radio w-1/2 flex px-6 py-7 justify-between">
          <div class="text-sm font-medium">GULD</div>
          <input name="metal" type="radio" />
        </div>
        <div class="nor-radio w-1/2 flex px-6 py-7 justify-between">
          <div class="text-sm font-medium">Sølv</div>
          <input name="metal" type="radio" checked />
        </div>
      </div>
      <div class="strategies">
        <div class="mt-12 font-semibold text-2xl">3 investeringsstrategier</div>
        <div class="mt-6 flex gap-4">
          <div class="strategy flex flex-col items-center w-[270px]">
            <div class="flex flex-col items-center nor-border w-full">
              <div class="font-medium text-sm mt-7">
                Fleksibelt Valg
              </div>
              <img class="mt-3 mb-6" src="<?= get_icon_uri("choice") ?>" alt="choice">
            </div>
            <div class="mt-3 text-xs text-center">
              En langsigtet investering, der lader dig sælge noget af dit guld til kontanter ved lejlighed.
            </div>
          </div>

          <div class="strategy flex flex-col items-center w-[270px]">
            <div class="flex flex-col items-center nor-border w-full">
              <div class="font-medium text-sm mt-7">
                Bedste Værdi
              </div>
              <img class="mt-3 mb-6" src="<?= get_icon_uri("best-value") ?>" alt="best-value">
            </div>
            <div class="mt-3 text-xs text-center">
              Dette udvalg fokuserer hovedsageligt på større guldprodukter med de laveste gebyrer, der vil tilbyde den
              bedste pris pr. ounce guld.
            </div>
          </div>

          <div class="strategy flex flex-col items-center w-[270px]">
            <div class="flex flex-col items-center nor-border w-full">
              <div class="font-medium text-sm mt-7">
                Møntfokus
              </div>
              <img class="mt-3 mb-6" src="<?= get_icon_uri("coin") ?>" alt="choice">
            </div>
            <div class="mt-3 text-xs text-center">
              Mønter har værdi som et ædelmetal, en form for valuta og et samleobjekt.
            </div>
          </div>

        </div>
      </div>

      <div class="mt-10 flex justify-center">
        <div class="nor-gold-btn show_result" showing="false">
          <span>Vis resultater</span>
          <i class="ml-3 fa-solid fa-arrow-right-long"></i>
        </div>
      </div>
      <div class="results mt-8 hidden">
        <div class="result border-gray-top py-8">
          <div class="text-3xl font-semibold text-black-pri">Vi har 3 strategier til dig:</div>
          <div class="mt-8 flex nor-shadow p-1">
            <div class="w-60 bg-gray-sec flex flex-col items-center pt-7 pb-6 gap-3">
              <div class="font-medium">Fleksibelt Valg</div>
              <img src="<?= get_icon_uri("choice") ?>" alt="choice">
            </div>
            <div class="px-6 py-5 w-[350px]">
              <div class="font-medium">Du leder efter fleksibilitet</div>
              <div class="mt-2 text-black-thi text-xs">
                En langsigtet investering, der lader dig sælge noget af dit guld til kontanter ved lejlighed. Dette
                udvalg blander større produkter med lave gebyrer for at give dig den bedste pris pr. ounce guld til din
                langsigtede investering og mindre produkter med gennemsnitlige gebyrer, der er nemmere at sælge på kort
                sigt.
              </div>
            </div>
            <div class="grow flex flex-col items-end p-6">
              <div class="text-2xl font-semibold">4,971.90‍ kr.</div>
              <div class="text-xs text-[#383C42] mt-1">Gebyrer: 3,42 %</div>
            </div>
          </div>
          <div class="mt-8 table w-full">
            <div class="row">
              <div class="col th">
                PRODUKTER I PAKKEN
              </div>
              <div class="col th">
                ANTAL
              </div>
              <div class="col th">
                <div>PRIS PER STK</div>
                <div>TOTAL PRIS</div>
              </div>
            </div>
            <div class="row">
              <div class="col td">
                <img width="58" height="40" src="<?= get_theme_file_uri("assets/images/products/1.png") ?>">
                <div class="desc">
                  50 gram Fine Gold Bar<br />
                  999,9 - PAMP Suisse
                </div>
              </div>
              <div class="col td">
                <div class="flex gap-5 items-center num-controller">
                  <div class="nor-outline-btn py-3 minus"><i class="fa-solid fa-minus"></i></div>
                  <div class="num w-3 text-center">1</div>
                  <div class="nor-outline-btn py-3 plus"><i class="fa-solid fa-plus"></i></div>
                </div>
              </div>
              <div class="col td">
                <div>3,056.77 kr.</div>
                <div>3,056.77 kr.</div>
              </div>
            </div>

            <div class="row">
              <div class="col td">
                <img width="58" height="40" src="<?= get_theme_file_uri("assets/images/products/3.png") ?>">
                <div class="desc">
                  50 gram Fine Gold Bar<br />
                  999,9 - PAMP Suisse
                </div>
              </div>
              <div class="col td">
                <div class="flex gap-5 items-center num-controller">
                  <div class="nor-outline-btn py-3 minus"><i class="fa-solid fa-minus"></i></div>
                  <div class="num w-3 text-center">1</div>
                  <div class="nor-outline-btn py-3 plus"><i class="fa-solid fa-plus"></i></div>
                </div>
              </div>
              <div class="col td">
                <div>1,915.13 kr.</div>
                <div>1,915.13 kr.</div>
              </div>
            </div>

          </div>
          <div class="py-4 flex justify-between items-center font-medium">
            <div>Samlet pris (2)</div>
            <div class="text-xl">4,971.90 kr.</div>
          </div>
          <div class="mt-2 flex justify-center">
            <div class="nor-gold-btn-bright flex">
              <img class="mr-3" src="<?= get_icon_uri("cart") ?>" alt="cart">
              Tilføj til kurv
            </div>
          </div>
        </div>

        <div class="result border-gray-top py-8">
          <div class="flex nor-shadow p-1">
            <div class="w-60 bg-gray-sec flex flex-col items-center pt-7 pb-6 gap-3">
              <div class="font-medium">Bedste Værdi</div>
              <img src="<?= get_icon_uri("best-value") ?>" alt="best-value">
            </div>
            <div class="px-6 py-5 w-[350px]">
              <div class="font-medium">Du leder efter fleksibilitet</div>
              <div class="mt-2 text-black-thi text-xs">
                Dette udvalg fokuserer hovedsageligt på større guldprodukter med de laveste gebyrer, der vil tilbyde den
                bedste pris pr. ounce guld.
              </div>
            </div>
            <div class="grow flex flex-col items-end p-6">
              <div class="text-2xl font-semibold">4,971.90‍ kr.</div>
              <div class="text-xs text-[#383C42] mt-1">Gebyrer: 3,42 %</div>
            </div>
          </div>
          <div class="mt-8 table w-full">
            <div class="row">
              <div class="col th">
                PRODUKTER I PAKKEN
              </div>
              <div class="col th">
                ANTAL
              </div>
              <div class="col th">
                <div>PRIS PER STK</div>
                <div>TOTAL PRIS</div>
              </div>
            </div>
            <div class="row">
              <div class="col td">
                <img width="58" height="40" src="<?= get_theme_file_uri("assets/images/products/1.png") ?>">
                <div class="desc">
                  50 gram Fine Gold Bar<br />
                  999,9 - PAMP Suisse
                </div>
              </div>
              <div class="col td">
                <div class="flex gap-5 items-center num-controller">
                  <div class="nor-outline-btn py-3 minus"><i class="fa-solid fa-minus"></i></div>
                  <div class="num w-3 text-center">1</div>
                  <div class="nor-outline-btn py-3 plus"><i class="fa-solid fa-plus"></i></div>
                </div>
              </div>
              <div class="col td">
                <div>3,056.77 kr.</div>
                <div>3,056.77 kr.</div>
              </div>
            </div>
          </div>
          <div class="py-4 flex justify-between items-center font-medium">
            <div>Samlet pris (2)</div>
            <div class="text-xl">4,971.90 kr.</div>
          </div>
          <div class="mt-2 flex justify-center">
            <div class="nor-gold-btn-bright flex">
              <img class="mr-3" src="<?= get_icon_uri("cart") ?>" alt="cart">
              Tilføj til kurv
            </div>
          </div>
        </div>

        <div class="result border-gray-top pt-8">
          <div class="flex nor-shadow p-1">
            <div class="w-60 bg-gray-sec flex flex-col items-center pt-7 pb-6 gap-3">
              <div class="font-medium">Møntfokus</div>
              <img src="<?= get_icon_uri("coin") ?>" alt="coin">
            </div>
            <div class="px-6 py-5 w-[350px]">
              <div class="font-medium">Du leder efter fleksibilitet</div>
              <div class="mt-2 text-black-thi text-xs">
                Mønter har værdi som både et ædelmetal og en form for valuta. Nogle investorer ser disse lovlige
                betalingsmidler som en endnu mere pålidelig måde at bytte guld til kontanter på end andre guldprodukter.
                Hvis gebyrer på mønter kan være højere, delvist på grund af deres produktionsomkostninger, har deres
                ønskelighed en tendens til at øge deres værdi over tid.
              </div>
            </div>
            <div class="grow flex flex-col items-end p-6">
              <div class="text-2xl font-semibold">4,971.90‍ kr.</div>
              <div class="text-xs text-[#383C42] mt-1">Gebyrer: 3,42 %</div>
            </div>
          </div>
          <div class="mt-8 table w-full">
            <div class="row">
              <div class="col th">
                PRODUKTER I PAKKEN
              </div>
              <div class="col th">
                ANTAL
              </div>
              <div class="col th">
                <div>PRIS PER STK</div>
                <div>TOTAL PRIS</div>
              </div>
            </div>
            <div class="row">
              <div class="col td">
                <img width="58" height="40" src="<?= get_theme_file_uri("assets/images/products/1.png") ?>">
                <div class="desc">
                  50 gram Fine Gold Bar<br />
                  999,9 - PAMP Suisse
                </div>
              </div>
              <div class="col td">
                <div class="flex gap-5 items-center num-controller">
                  <div class="nor-outline-btn py-3 minus"><i class="fa-solid fa-minus"></i></div>
                  <div class="num w-3 text-center">1</div>
                  <div class="nor-outline-btn py-3 plus"><i class="fa-solid fa-plus"></i></div>
                </div>
              </div>
              <div class="col td">
                <div>3,056.77 kr.</div>
                <div>3,056.77 kr.</div>
              </div>
            </div>

            <div class="row">
              <div class="col td">
                <img width="58" height="40" src="<?= get_theme_file_uri("assets/images/products/3.png") ?>">
                <div class="desc">
                  50 gram Fine Gold Bar<br />
                  999,9 - PAMP Suisse
                </div>
              </div>
              <div class="col td">
                <div class="flex gap-5 items-center num-controller">
                  <div class="nor-outline-btn py-3 minus"><i class="fa-solid fa-minus"></i></div>
                  <div class="num w-3 text-center">1</div>
                  <div class="nor-outline-btn py-3 plus"><i class="fa-solid fa-plus"></i></div>
                </div>
              </div>
              <div class="col td">
                <div>1,915.13 kr.</div>
                <div>1,915.13 kr.</div>
              </div>
            </div>

          </div>
          <div class="py-4 flex justify-between items-center font-medium">
            <div>Samlet pris (2)</div>
            <div class="text-xl">4,971.90 kr.</div>
          </div>
          <div class="mt-2 flex justify-center">
            <div class="nor-gold-btn-bright flex">
              <img class="mr-3" src="<?= get_icon_uri("cart") ?>" alt="cart">
              Tilføj til kurv
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>