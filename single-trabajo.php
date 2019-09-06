<?php get_header() ?>

<?php if (have_posts()) { ?>
	<?php while (have_posts()) { ?>
		<?php the_post(); ?>

		<section class="container-body margin-body">
			<!-- <h2 class="section-title">Un poco de mi :D</h2> -->
			<div class="container-between-start">
				<div class="excerpt-title wow fadeInLeft" data-wow-duration="1s">
					<h2><?php the_title() ?></h2>
				</div>
				<div class="img-title wow fadeInRight">
					<?php the_post_thumbnail('profile', array('class' => 'content__bio__img')); ?>
				</div>
				<div class="content__text">
					<p class="content__resume"><?php the_content() ?></p>
				</div>
			</div>
			<section class="single-gallery wow fadeInUp">
				<div class="main">
					<img src="<?php the_field('imagen01') ?>" alt="">
				</div>
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