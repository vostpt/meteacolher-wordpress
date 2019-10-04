<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>


<section class="footer-wall">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() . "/img/vostlogo.svg"; ?>" alt="VOST Portugal">
    </div>
    <div class="license">
        <p>#METEACOLHER - 2019 VOSTPT - Voluntários Digitais em Situações de Emergências para Portugal.<br>
            Este site e seus materiais encontram-se sob uma licença Creative Commons CC BY-NC-SA: Atribuição-NãoComercial-CompartilhaIgual.</p>
    </div>
</section>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

