<?php get_header() ?>
<?php the_post() ?>

<?php the_title() ?>
<section class="container-body">
	<!-- <h2 class="section-title">Un poco de mi :D</h2> -->
	<div class="contact-container">
		<form id="contact" action="" method="post">
			<div class="section-title">
			<h1 class="section-title">Contacto</h1>
			<h4 class="center">¿Tienes una genial idea? Contáctame y conversemos :)</h4>
			</div>
			<div class="contact wow fadeInUp">
			<?php echo do_shortcode('[contact-form-7 id="83" title="Contacto"]'); ?>
			</div>
		</form>
	</div>
</section>
<div class="map-container">
	<iframe width="300" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.8745820874087!2d-70.59916008524681!3d-33.42651400366946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf12a725c6b7%3A0xe0c8e5561c2444b4!2sAv.%20El%20Bosque%20757%2C%20Providencia%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1567265679813!5m2!1ses!2scl"></iframe>
</div>

<?php get_footer() ?>

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

