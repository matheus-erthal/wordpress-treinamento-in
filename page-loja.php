<?php
/* Template Name: Loja Template*/
get_header();

?>
    <style>
        #map {
         height: 400px;
         width: 100%;
        }
     </style>

    <div id="map">
        <h2 id="loja">Clique no Pin para saber a Loja</h2>
        <h3 id="bairro"> para saber o bairro</h3>
        <h4 id="telefone"> e para saber o telefone</h4> 
    </div>  

<script>
//aqui eu crio o objeto de arrays onde contém as lojas marcadas no mapa 
    var marcador = [
        {
            loja:"Loja de Niteroi", 
            bairro:"Ingá",
            telefone:"4002-8922",
            position:{
                lat:-22.903099214487955,
                lng:-43.11653137207031
            }
        },
        {
            loja:"Loja de Icarai", 
            bairro:"Icarai",
            telefone:"4002-8922",
            position:{
                lat:-22.98719737613684,
                lng:-43.20030212402344
            }
            
        },
        {
            loja:"Loja do Centro", 
            bairro:"Centro",
            telefone:"4002-8922",
            position:{
                lat:-22.912586583080667,
                lng:-43.25042724609375 
            }
        },
        {
            loja:"Loja de Ipanema", 
            bairro:"Ipanema",
            telefone:"4002-8922",
            position:{
                lat:-22.997942996353917,
                lng:-43.298492431640625
            }
        }
 ];
// função que inicia o mapa, dada pela mãe google
function initMap() {
    var uluru = {lat: -22.997942996353917, lng: -43};
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: uluru
    });
    var mk = [];
     window.onload = preenche;
 //função que preenche o mapa com marcadores 
function preenche(){
    var mk = [];
    // o forEach é para percorrer cada elemento do array de objetos chamado marcador e ir associando a um marcador no mapa
    marcador.forEach(element => {
    mk.push(new google.maps.Marker({
     position:element.position,
     map:map,
     //aqui ele passa informações a mais, alem das informações de posição, essas informações vão ser recuperadas quando for clicado
     info:{
         loja:element.loja,
         bairro:element.bairro,
         telefone:element.telefone
         }
    }));
});
    //chama a função que seta as funções
    seta(mk);
}
//função que seta as funções de click nos marcadores
function seta(arMarker){
    //ele percorre o array de marcadores do mapa pelo for each 
    arMarker.forEach(element=>{
        //e cada elemento tem uma função própria de mouseEvent ( o evento de clicar )
        element.addListener('click',function(mouseEvent){
            //aqui ele pega o elemento do html e altera seu conteúdo para o conteúdo setado antes dos marcadores na função preenche()
             document.getElementById("loja").innerHTML = element.info.loja;
             document.getElementById("bairro").innerHTML = element.info.bairro;
             document.getElementById("telefone").innerHTML= element.info.telefone;
            })
        })
    }
}     
</script>

<script async defer
    src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyCKZgMgyrEl_jHlwNGRTxqkLmPa1kACPb4&callback=initMap">
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
