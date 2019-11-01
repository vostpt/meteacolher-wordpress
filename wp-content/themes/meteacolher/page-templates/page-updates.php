<?php
/**
 * Template name: Updates page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$posts = get_posts([
	'post_type' => 'post',
	'posts_per-page' => 10,
]);
?>

	<div class="wrapper" id="index-wrapper">

		<div class="container" id="content" tabindex="-1">

			<h2>Atualizações que fazemos a esta iniciativa</h2>
			<p>Na VOST Portugal não esquecemos. Na VOST Portugal não queremos que esqueças. <br>
				A violência doméstica é um problema que nos tem que preocupar a todos. Sempre. Até não ser necessário
			</p>
			<div class="row">

				<main class="col-12" id="main">

					<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>

							<article <?php post_class('card'); ?> id="post-<?php the_ID(); ?>">

								<header class="entry-header card-header">
									<div class="row">
										<div class="col article-title">
											<h2 class="entry-title"><?php the_title(); ?></h2>
										</div>
										<div class="col-auto article-date">
											<?php
											the_date('d M Y')
											?>
										</div>
									</div>


								</header><!-- .entry-header -->

								<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

								<div class="entry-content card-body article-content">

									<?php the_content(); ?>

								</div><!-- .entry-content -->

							</article><!-- #post-## -->


						<?php endwhile; ?>

					<?php else : ?>

					<?php endif; ?>

				</main><!-- #main -->

				<!-- The pagination component -->
				<?php understrap_pagination(); ?>

			</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #index-wrapper -->

<?php get_footer();
