<!-- hero section -->
<?php
$home_sections = [
    'banner',
    'services',
];
?>
<!-- include header -->
<?php
require_once 'layout/header.php';
?>
<!-- site content -->
<main class="site-content">
    <?php
    foreach ($home_sections as $section) {
        require_once "sections/{$section}.php";
    }
    ?>
</main>
<!-- include footer -->
<?php
require_once 'layout/footer.php';
?>