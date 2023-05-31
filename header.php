<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body>
  <div class="header bg-[#272727] text-white">
    <div class="flex relative max-w-[1680px] m-auto px-10 py-3 justify-between items-center">
      <div class="lg:hidden py-4">
        <img src="<?= get_icon_uri("search") ?>" alt="search">
      </div>
      <div class="lg:hidden py-4 relative">
        <img src="<?= get_icon_uri("shopping-cart") ?>" alt="cart">
        <div class="badge-cart">3</div>
      </div>
      <div class="hidden lg:flex items-end gap-3">
        <div class="font-semibold">
          Guld
          <br />
          Sølv
        </div>
        <div class="border-x-[1px] border-[#4A4A4A] px-3 ">
          <div class="text-sm text-gray-300">t oz</div>
          1 821,71 DKK
          <br />
          20,26 DKK
        </div>
        <div>
          <div class="text-sm text-gray-300">gram</div>
          51,68 DKK
          <br />
          0,65 DKK
        </div>
      </div>
      <div class="absolute" style="width: calc(100% - 2.5rem)">
        <img class="m-auto w-[150px] sm:w-[250px]" src="<?= get_theme_file_uri("assets/images/logo.png") ?>" width="200"
          alt="logo">
      </div>
      <div class="hidden lg:block text-sm">
        <div class="flex float-right gap-3">
          <span>4.9 / 5 Fremragende</span>
          <img src="<?= get_icon_uri("full-star") ?>" alt="full-star">
        </div>
        <br />
        <div class="flex float-right gap-5 mt-2">
          <div class="hidden xl:flex gap-2">
            <img src="<?= get_icon_uri("phone") ?>" />
            <span>71 74 30 65</span>
          </div>
          <div class="flex gap-2">
            <img src="<?= get_icon_uri("envelope") ?>" />
            <span>Info@nordiskguld.dk</span>
          </div>
          <div class="flex gap-2">
            <img src="<?= get_icon_uri("store") ?>" />
            <span>Kbh & Århus</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/sections/navbar') ?>