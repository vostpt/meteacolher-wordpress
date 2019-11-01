<?php

$victims = new WP_Query([
	'post_type' => 'victim',
	'posts_per_page' => -1,
	'orderby' => 'meta_value',
	'meta_key' => 'date_of_death',
]);

get_header(); ?>

	<div class="wrapper" id="index-wrapper">

		<div class="container" id="content" tabindex="-1">

			<h2>Atualizações que fazemos a esta iniciativa</h2>
			<p>Na VOST Portugal não esquecemos. Na VOST Portugal não queremos que esqueças. <br>
				A violência doméstica é um problema que nos tem que preocupar a todos. Sempre. Até não ser necessário
			</p>
			<div class="row">
				<div class="col-10">
					<?php while ($victims->have_posts()): $victims->the_post(); ?>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<p>Vítima <?php the_field('gender', $post->id); ?><br>
											<?php the_field('locality'); ?></p>
										<p><?php the_field('description'); ?></p>
									</div>
									<div class="col-auto">
										<?php the_field('date_of_death'); ?>
									</div>
								</div>


							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();
