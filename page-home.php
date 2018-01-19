<?php 
/* Template Name: Home Template*/
//determinou o nome do template//

get_header(); //chama o header//

?>

<section> 
          <div class="intro slide">
             <div class = "img-container">
                   <img src="img/slide/hamburguer.jpg" alt="hamburguer">
             </div>
             <div class = "img-container">
                <img src="img/slide/costelinha.jpg" alt="costelinha">
             </div>
             <div class = "img-container">
                <img src="img/slide/cebola.jpg" alt="cebola">
             </div>
             <div class = "img-container">
                <img src="img/slide/carne.jpg" alt="carne">
             </div>
             <div class = "img-container">
                <img src="img/slide/batata.jpg" alt="batata">
            </div>
            <div class = "img-container">
                <img src="img/slide/salada.jpg" alt="salada">
                 <h1>Saladas</h1>
                  <p>Cheiro de comer bem</p>
           </div>
          </div>
        </section>

        <section>
          <div class = "indice">
              <img src = "img/indice1.png" alt = "Sobre Nós">
              <h2>Sobre Nós</h2>
              <a href = "#">Saiba Mais</a>
          </div>

          <div class = "indice">
              <img src = "img/indice2.png" alt = "Onde Estamos">
              <h2>Onde Estamos</h2>
              <a href = "#">Saiba Mais</a>
          </div>
        </section>


       <section>
          <div class="links">
            <div class="links-container">
                <ul>
                  <li><a href="contato.html">Contate-nos</a></li>
                  <li><a href="receitas.html">Receitas</a></li>
                  <li><a href="blog.html">Nosso Blog</a></li>
                </ul>
            </div>
          </div>
     </section>


<?php get_footer(); ?>