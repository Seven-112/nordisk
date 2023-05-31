<?php get_header(); ?>
<?php
$sections = ['intro', 'method', 'advantage', 'calculator', 'trend', 'partners', 'reviews', 'video_reviews', 'shipping', 'products', 'contact'];
foreach ($sections as $section) {
  get_template_part('template-parts/sections/' . $section);
}
?>
<?php get_footer(); ?>