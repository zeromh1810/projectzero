<?php if (has_nav_menu('footer-menu')) { ?>
    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-menu')); ?>
<?php } ?>

<?php wp_footer() ?>
<footer class="footer">
    <div class="container-body social-wrapper">
        <div class="social">
            <a class="social__icon" href="https://www.facebook.com/profile.php?id=1082137193" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
        </div>
        <div class="social">
            <a class="social__icon" href="https://twitter.com/carlos_zero86" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
        </div>
        <div class="social">
            <a class="social__icon" href="https://www.instagram.com/carlos_zero86/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js"></script>
<!-- FIN JAVASCRIPT -->

<!-- JAVASCRIPT NAVBAR -->
<script type="text/javascript" src="<?php echo get_bloginfo('template_url')?>/assets/scripts/main.bundle.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url')?>/assets/js/script.js"></script>
<script src="<?php echo get_bloginfo('template_url')?>/assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>


</body>

</html>