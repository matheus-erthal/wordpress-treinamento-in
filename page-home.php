<?php 
/* Template Name: Home Template*/
//determinou o nome do template//

get_header(); //chama o header//

?>

<section> 
          <div class="intro slide">
             <div class = "img-container">
                   <img src= "<?= get_template_directory_uri(); ?>/img/slide/hamburguer.jpg" alt="hamburguer">
             </div>
             <div class = "img-container">
                <img src= "<?= get_template_directory_uri(); ?>/img/slide/costelinha.jpg" alt="costelinha">
             </div>
             <div class = "img-container">
                <img src= "<?= get_template_directory_uri(); ?>/img/slide/cebola.jpg" alt="cebola">
             </div>
             <div class = "img-container">
                <img src=" <?= get_template_directory_uri(); ?>/img/slide/carne.jpg" alt="carne">
             </div>
             <div class = "img-container">
                <img src= "<?= get_template_directory_uri(); ?>/img/slide/batata.jpg" alt="batata">
            </div>
            <div class = "img-container">
                <img src= "<?= get_template_directory_uri(); ?>/img/slide/salada.jpg" alt="salada">
               </div>
          </div>
        </section>

        <section class = "indice">
          <div class = "indice-container">
            <div class = "indice-img">
                <img src = "<?= get_template_directory_uri(); ?>/img/indice1.png" alt = "Sobre Nós">
                <a href = "#">Saiba Mais</a>
            </div>
          </div>

          <div class = "indice-container">
            <div class = "indice-img">   
                <img src = "<?= get_template_directory_uri(); ?>/img/indice2.png" alt = "Onde Estamos">
                <a href = "#">Saiba Mais</a>
              </div>  
          </div>
        </section>


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


<?php get_footer(); ?>
