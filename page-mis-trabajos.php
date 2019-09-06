<?php get_header() ?>
<section class="container-body margin-body">
    <h1 class="section-title">Portafolio</h1>
    <h4 class="center">Descubre algunos de mis trabajos favoritos :)</h4>
    <div class="content-center">


        <?php
        $arg = array(
            'post_type'         => 'trabajo',
            'posts_per_page' => 9,
        );

        $get_arg = new WP_Query($arg);

        while ($get_arg->have_posts()) {
            $get_arg->the_post();
            ?>
            <div class="work wow fadeInUp">
                <div class="work-wrapper">
                    <a style="margin:0;" href="<?php the_permalink() ?>" target="_self">
                        <div class="content-overlay"></div>
                        <?php the_post_thumbnail('works', array('class' => 'content-image')); ?>
                        <div class="content-details fadeIn-top">
                            <h3><?php the_title() ?></h3>
                            <p class="latest-work__excerpt"><?php the_excerpt() ?></p>
                        </div>
                    </a>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>


    </div>
</section>
<!-- SCRIPT MAPA -->

<script type="text/javascript">
    $('.map-container')
        .click(function() {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function() {
            $(this).find('iframe').removeClass('clicked')
        });
</script>





<?php get_footer() ?>