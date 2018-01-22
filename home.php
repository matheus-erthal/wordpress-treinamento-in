<?php
/* TEMPLATE NAME: Home Template */

get_header();

?>
<section class="intro">
		<p> <?php the_field("texto_intro") ?></p>
</section>

	<section class="principal">
		<div class="quem-somos">
			<h2> Quem Somos </h2>
			<div class="wolf">
			<img src="<?= get_template_directory_uri(); ?>/img/lobo.png" alt="Lobo">
			</div>
			<p> <?php the_field('texto_who'); ?> </p>
		</div>
	</section>

	<section class="projetos">
		<div class="projects">
			<h2> Projetos </h2>
		</div>
		<div class = "carousel">
			<?php echo do_shortcode("[carousel_slide id='84']") ?>
		</div>
	</section>

	<section class="proposito">
		<div class= "pergaminho">
		<h2> Nosso Propósito </h2>
			<p> <?php the_field('texto_proposito'); ?></p>
		</div>
	</section>

	<section class="contato">
		<div id="googlemaps"></div>
		<div class="fale-conosco">
			<h2> Fale conosco </h2>
			<form>
				<input type="text" placeholder="Digite seu nome"> <br>
				<input type="text" placeholder="Digite seu e-mail"> <br>
				<textarea rows="11" cols="39" placeholder="Escreva..."></textarea> <br>
				<button type="submit"><a href="#">Enviar</a></button>
			</form>
			<br><br>
			<p> Rua Passo da Pátria, 156 - Instituto de Computação - Sala 115-B. Niterói - RJ <br>
			<i class="fa fa-envelope"></i> contato@injunior.com.br</p>
			<!-- Include the Google Maps API library - required for embedding maps -->
			<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

			<script type="text/javascript">

			// The latitude and longitude of your business / place
			var position = [-22.9063556, -43.1333917];

			function showGoogleMaps() {

	    var latLng = new google.maps.LatLng(position[0], position[1]);

	    var mapOptions = {
	        zoom: 16, // initialize zoom level - the max value is 21
	        streetViewControl: false, // hide the yellow Street View pegman
	        scaleControl: true, // allow users to zoom the Google Map
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        center: latLng
	    };

	    map = new google.maps.Map(document.getElementById('googlemaps'),
	        mapOptions);

	    // Show the default red marker at the location
	    marker = new google.maps.Marker({
	        position: latLng,
	        map: map,
	        draggable: false,
	        animation: google.maps.Animation.DROP
	    });
	}

	google.maps.event.addDomListener(window, 'load', showGoogleMaps);
	</script>
		</div>
		</div>
	</section>



<?php get_footer();
