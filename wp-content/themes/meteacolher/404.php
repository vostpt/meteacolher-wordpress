<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

	<div class="wrapper bg-primary-light" id="error-404-wrapper">

		<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<div class="text-center text-primary min-height-50vh p-t-50">
						<h1 class="text-primary font-weight-bold" style="font-size: 65px;">404</h1>

						<p class="text-primary">A ligação que tentou aceder não foi encontrada.<br>Poderá ter sido
							movida, removida alterada, ou até nem existir.</p>

						<a href="/" class="btn btn-outline-primary">Início</a>

					</div>
				</div><!-- #primary -->

			</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #error-404-wrapper -->

<?php get_footer();
