<?php get_header() ?>

<?php if (have_posts()) { ?>
	<?php while (have_posts()) { ?>
		<?php the_post(); ?>

		<section class="container-body margin-body">
			<!-- <h2 class="section-title">Un poco de mi :D</h2> -->
			<div class="center section-title wow fadeInLeft" data-wow-duration="1s">
				<h2 class=""><?php the_title() ?></h2>
			</div>
			<div class="main">
				 <?php the_post_thumbnail('header', array('class' => 'h-auto')); ?>
			</div>
			<div class="content__text">
				<?php the_content() ?>
			</div>
		</section>


	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php }
wp_reset_query(); ?>
<?php get_footer() ?>