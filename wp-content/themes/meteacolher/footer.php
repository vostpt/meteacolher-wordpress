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
    <div class="social-icons">
        <div class="fa-3x">
            <span class="fa-layers fa-fw">
                <i class="fas fa-circle text-white"></i>
                <i class="far fa-laptop text-primary" data-fa-transform="shrink-8"></i>
            </span>
            <span class="fa-layers fa-fw">
                <i class="fas fa-circle text-white"></i>
                <i class="fab fa-twitter text-primary" data-fa-transform="shrink-8"></i>
            </span>
            <span class="fa-layers fa-fw">
                <i class="fas fa-circle text-white"></i>
                <i class="fab fa-facebook-f text-primary" data-fa-transform="shrink-8"></i>
            </span>
            <span class="fa-layers fa-fw">
                <i class="fas fa-circle text-white"></i>
                <i class="fab fa-instagram text-primary" data-fa-transform="shrink-8"></i>
            </span>
            <span class="fa-layers fa-fw">
                <i class="fas fa-circle text-white"></i>
                <i class="fab fa-linkedin text-primary" data-fa-transform="shrink-8"></i>
            </span>
        </div>
    </div>
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() . "/img/vostlogo.svg"; ?>" alt="VOST Portugal">
    </div>
    <div class="license">
        <img class="license-img" src="<?php echo get_template_directory_uri() . "/img/cc.svg"; ?>" alt="Creative Commons CC BY-NC-SA: Atribuição-NãoComercial-CompartilhaIgual.">
        <p>#METEACOLHER - 2019 VOSTPT - Voluntários Digitais em Situações de Emergências para Portugal.<br>
            Este site e seus materiais encontram-se sob uma licença Creative Commons CC BY-NC-SA: Atribuição-NãoComercial-CompartilhaIgual.</p>
    </div>
</section>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

