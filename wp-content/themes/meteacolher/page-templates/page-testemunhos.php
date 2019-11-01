<?php
/**
 * Template Name: Testemunhos
 */

$testimonials = new WP_Query([
	'post_type' => 'testimonial',
	'posts_per_page' => -1,
]);

get_header(); ?>

	<div class="wrapper" id="index-wrapper">

		<div class="container" id="content" tabindex="-1">

			<h2>Testemunhos na primeira pessoa</h2>
			<p>Queremos dar visibilidade dos vários tipos de ituações onde e como a violência doméstica se manifesta na
				nossa sociedade,
				para a podermos travar. Queremos dar visibilidade a quem saiu e sobreviveu e floresceu depois do
				trauma.</p>
			<p>A informação que partilhares connosco será tratada sobre anonimato.</p>

			<div class="row">
				<div class="col-12">
					<?php while ($testimonials->have_posts()): $testimonials->the_post(); ?>
					<article class="testimonial">
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="content">
							<?php the_content(); ?>
						</div>
						<div class="signature">
							- <?php the_field('denouncer'); ?>, <?php the_field('locality'); ?> <?php the_date('Y'); ?>
						</div>
					</article>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();
