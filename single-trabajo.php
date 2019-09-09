<?php get_header() ?>

<?php if (have_posts()) { ?>
	<?php while (have_posts()) { ?>
		<?php the_post(); ?>

		<section class="blog-container margin-body">
			<!-- <h2 class="section-title">Un poco de mi :D</h2> -->
				<div class="section-title center wow fadeInLeft" data-wow-duration="1s">
					<h2 class=""><?php the_title() ?></h2>
				</div>
				<div class="content__text">
					<?php the_content() ?>
				</div>
				<div class="main">
					<img src="<?php the_field('imagen01') ?>" alt="">
				</div>

			<section class="single-gallery wow fadeInUp">
				<div class="thumbnails wow fadeInUp" data-wow-delay="0.2s">
					<div class="thumbnails__img">
						<img src="<?php the_field('imagen02') ?>" alt="">
					</div>
					<div class="thumbnails__img">
						<img src="<?php the_field('imagen03') ?>" alt="">
					</div>
				</div>
				<div class="main">
					<img src="<?php the_field('imagen04') ?>" alt="">
				</div>
			</section>
		</section>






	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php }
wp_reset_query(); ?>
<?php get_footer() ?>