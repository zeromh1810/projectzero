<?php get_header() ?>
<?php the_post() ?>

<section class="container-body">
    <h1 class="section-title">Sobre mi</h1>
    <div class="content__space-between">
        <div class="content__biography wow fadeInLeft" data-wow-duration="1s">
            <?php the_content() ?>
        </div>
        <div class="content__bio wow fadeInRight">
            <?php the_post_thumbnail('profile', array('class' => 'content__bio__img')); ?>
        </div>
    </div>
</section>
<section class="curriclum margin-body">
    <h2 class="section-title">Han confiado en mi</h2>

    <?php
    $arg = array(
        'post_type'         => 'curriculum',
        'category_name'     => '',
        'posts_per_page' => 6
    );

    $get_arg = new WP_Query($arg);

    while ($get_arg->have_posts()) {
        $get_arg->the_post();
        ?>

        <div class="wrapper__flex-around-start wow fadeInUp">
            <div class="cv-title">
                <h4 class="cv-title__place"><?php the_field('lugar') ?></h4>
                <p><?php the_field('fecha') ?></p>
            </div>
            <div class="cv-content">
                <h4 class="cv-content__charge"><?php the_field('cargo') ?></h4>
                <p><?php the_field('descripcion') ?></p>
            </div>
        </div>

    <?php }
    wp_reset_postdata();
    ?>
</section>
<?php get_footer() ?>