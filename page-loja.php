<?php
/* Template Name: Loja Template*/
get_header();

?>
<div class="tudo">
    <div id="map"></div>
            <h2 id="loja">Clique no Pin para saber a Loja</h2>
            <h3 id="bairro"> para saber o bairro</h3>
            <h4 id="telefone"> e para saber o telefone</h4>    
    <script>

var marcador = [
        {
            loja:"loja de niteroi", 
            bairro:"Ingá",
            telefone:"4002-8922",
            position:{
                lat:-22.903099214487955,
                lng:-43.11653137207031
            }
        },
        {
            loja:"loja de icarai", 
            bairro:"icarai",
            telefone:"4002-8922",
            position:{
                lat:-22.98719737613684,
                lng:-43.20030212402344
            }
            
        },
        {
            loja:"loja do centro", 
            bairro:"Centro",
            telefone:"4002-8922",
            position:{
                lat:-22.912586583080667,
                lng:-43.25042724609375 
            }
        },
        {
            loja:"loja de ipanema", 
            bairro:"ipanema",
            telefone:"4002-8922",
            position:{
                lat:-22.997942996353917,
                lng:-43.298492431640625
            }
        }
    ];

  function initMap() {
    var uluru = {lat: -22.997942996353917, lng: -43};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: uluru
    });
    var mk = [];
    window.onload = preenche;
   function preenche(){
       var mk = [];
       marcador.forEach(element => {
       mk.push(new google.maps.Marker({
        position:element.position,
        map:map,
        info:{
            loja:element.loja,
            bairro:element.bairro,
            telefone:element.telefone
        }
       }));
       });
       seta(mk);
   }
   
   function seta(arMarker){
       
       arMarker.forEach(element=>{
           element.addListener('click',function(mouseEvent){
                document.getElementById("loja").innerHTML = element.info.loja;
                document.getElementById("bairro").innerHTML = element.info.bairro;
                document.getElementById("telefone").innerHTML= element.info.telefone;
        })
       })
   }
}     
</script>
<script async defer
    src= "<?= get_template_directory_uri(); ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyBPks5bAlJ0r7RnC8XMDJHr3B1_Dq3f6Hc&callback=initMap">
</script>

<section class="links">
<div class="links-container"> 
  <div class="links-nav">
      <ul>
        <li><a href="contato.html">Contate-nos</a></li>
        <li><a href="loja.html">Onde Estamos</a></li>
        <li><a href="receita.html">Receitas</a></li>
      </ul>
  </div>
</div>
</section>
</div>

<?php
$nova_loja = new WP_Query (array("post_type"  => lojas));
?>

<?php if($nova_loja->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_loja->have_posts()): ?>
        <?php $nova_loja->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>"> <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
