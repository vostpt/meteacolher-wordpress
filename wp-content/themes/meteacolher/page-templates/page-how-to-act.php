<?php
/**
 * Template Name: Como Actuar?
 */
get_header(); ?>
	<section class="act-header">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('information'); ?></p>
		</div>
	</section>
	<section class="situations">
		<div class="container">
			<?php if (have_rows('situations')): ?>
				<div class="row">
					<?php while (have_rows('situations')): the_row(); ?>
					<div class="col-4 situation-block">
						<?php the_sub_field('title'); ?>
					</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>

	</section>
	<section class="denuncia">
		<div class="container">
			<h2><?php the_field('report_title'); ?></h2>
			<?php the_field('report_information'); ?>
		</div>
	</section>

	<section class="visibility-wall">
		<div class="row">
			<div class="col-12 col-sm-4 text-center">
				<p class="text-logo">
					<span class="text-primary">#METE</span><span class="text-secondary">ACOLHER</span>
				</p>
			</div>
			<div class="col-12 col-sm-4">
                <span>Porque só com visibilidade é que todos juntos conseguimos travar esta violência, partilha
                    nas redes com a hashtag #METEACOLHER.</span>
			</div>
			<div class="col-12 col-sm-4 text-center">
				<a href="#" class="btn btn-outline-primary btn-download-kit">
					Descarregar kit redes sociais #METEACOLHER
				</a>
			</div>
		</div>
	</section>
<?php
get_footer();
