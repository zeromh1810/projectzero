<?php get_header() ?>

<?php if (have_posts()) { ?>
	<?php while (have_posts()) { ?>
		<?php the_post(); ?>

		<?php the_post_thumbnail() ?>
		<?php the_title() ?>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>


		<?php
				$images = trabajos_array_generator();
				$images_lenght = count($images);
				$count = 1;
				?>
		<?php if ($images) { ?>

			<?php for ($i = 1; $i <= $images_lenght; $i++) { ?>

				<?php if ($images_lenght <= 2) {  ?>
					<div class="container-body">
						<img src="<?php echo $images[$i - 1]["sizes"]["large"] ?>" />
					</div>
				<?php } else { ?>
					<?php if ($count == 1) { ?>
						<div class="wrapper__flex-around-start">
							<img src="<?php echo $images[$i - 1]?>" />
						</div>
					<?php } else { ?>
						<div class="wrapper__flex-around-start">
							<img src="<?php echo $images[$i - 1]?>" />
						</div>
					<?php } ?>
				<?php } ?>

				<?php $count++; ?>
			<?php }  ?>
		<?php } ?>
		</ul>
	<?php } ?>
<?php }
wp_reset_query(); ?>