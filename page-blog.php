<?php get_header() ?>
<?php the_post() ?>


<section class="blog-container">
    <h1 class="section-title"><?php the_title() ?></h1>
    <h4 class="center"><?php the_content() ?></h4>
    <?php
    $arg = array(
        'post_type'         => 'post',
        'category_name'     => 'blog',
        'posts_per_page' => 4,
        'offset'		 => 0,
		'paged'			 => $paged
    );

    $get_arg = new WP_Query($arg);

    while ($get_arg->have_posts()) {
        $get_arg->the_post();
        ?>
        <div class="wrapper__blog wow fadeInUp">
            <div class="blog-thumbnail">
                <?php the_post_thumbnail('blog'); ?>
            </div>
            <div class="blog-content">
                <h5 class="blog-title"><?php the_title() ?></h5>
                <p><?php the_excerpt() ?><a class="view-more wow fadeInUp" href="<?php the_permalink() ?>">Quiero ver más ></a></p>
                
            </div>
        </div>


    <?php }
    wp_reset_postdata();
    ?>

    <?php the_pagination($get_arg) ?>

</section>










<?php get_footer() ?>