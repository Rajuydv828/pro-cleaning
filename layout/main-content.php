<!-- Home sections -->
<?php
$home_sections = [
  'banner',
  'services',
  'solutions',
];
?>
<!-- site content -->
<main class="site-content">
  <?php
  foreach ($home_sections as $section) {
    require_once "./home-parts/{$section}.php";
  }
  ?>
</main>