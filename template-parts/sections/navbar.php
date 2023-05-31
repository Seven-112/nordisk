<div class="navbar bg-[#272727] border-y-[1px] border-[#4A4A4A] ">
  <div class="max-w-[1680px] m-auto flex px-5 sm:px-10 text-white py-2 justify-between items-center relative">
    <?php
    $menus = [
      [
        'name' => 'Køb',
        'submenu' => true,
        'alwaysTop' => true
      ],
      [
        'name' => 'Sælg',
        'submenu' => true,
        'alwaysTop' => true
      ],
      [
        'name' => 'Gulddepot',
        'submenu' => false,
        'alwaysTop' => false
      ],
      [
        'name' => 'Bestil Guldbrev',
        'submenu' => false,
        'alwaysTop' => false
      ],
      [
        'name' => 'Guldpriser',
        'submenu' => false,
        'alwaysTop' => false
      ],
      [
        'name' => 'Investering',
        'submenu' => true,
        'alwaysTop' => false
      ],
      [
        'name' => 'Grafer',
        'submenu' => false,
        'alwaysTop' => true
      ],
      [
        'name' => 'NordiskGuld',
        'submenu' => true,
        'alwaysTop' => false
      ]
    ];
    ?>
    <div class="flex gap-8 py-2">
      <img class="menu-trigger 2xl:hidden cursor-pointer" src="<?= get_icon_uri("menu") ?>" alt="menu">
      <?php
      foreach ($menus as $menu) {
        ?>
      <div class="navitem <?php if (!$menu['alwaysTop'])
          echo "hidden 2xl:block" ?>">
        <?= $menu['name'] ?>
        <?php if ($menu['submenu']) { ?>
        <i class=" ml-1 fa-solid fa-chevron-down fa-2xs"></i>
        <?php } ?>
      </div>
      <?php
      }
      ?>
    </div>
    <div class="hidden md:flex gap-2 font-semibold">
      <div
        class="nor-outline-btn border-[0.5px] w-[150px] btn-sm border-white text-white text-base hover:text-gray-300 hover:border-gray-300">
        Login
      </div>
      <div class="nor-gold-btn btn-sm text-base">
        Book Vurdering
      </div>
    </div>
    <div
      class="burger-menu hidden top-[65px] left-0 bg-[#272727] absolute w-full sm:w-96 text-lg font-medium py-3 pl-7 pr-7 sm:pr-0 shadow-md">
      <div class="navitem flex justify-between items-center py-3 px-4">
        Login
      </div>
      <?php
      foreach ($menus as $menu) {
        ?>
      <div class="navitem flex justify-between items-center py-3 px-4">
        <?= $menu['name'] ?>
        <?php if ($menu['submenu']) { ?>
        <i class="fa-solid fa-chevron-right fa-2xs"></i>
        <?php } ?>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>