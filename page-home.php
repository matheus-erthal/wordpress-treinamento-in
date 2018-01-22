<?php
/* Template Name: Home Template */
get_header(); ?>

<section class="ph">
    <div class="ph-container">
    <div class="ph-container-texto">
      <p>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="ph-container-blue">
        <img class ="ph-container-imagens" src="<?php the_field('foto_da_receita'); ?>">
        <p><?php the_content() ?></p>
      </p>
    </div>
  </diV>
</section>



    <div class="ph-container">
    <div class="ph-container-texto">
      <p>
        <h1>Feijoada</h1>
        <h2>Ingredientes:</h2>
        <ul>
            <li>1/2 kg de feijão preto de boa qualidade</li>
            <li>1/2 kg de carne seca de boa qualidade (com pouca gordura e muita carne)</li>
            <li>1/2 kg de lombo salgado</li>
            <li>1/2 kg de costela salgada</li>
            <li>1/2 kg de bacon de boa qualidade (com pouca gordura e muita carne )</li>
            <li>4 linguiças calabresas defumadas (Sadia ou Perdigão)</li>
            <li>4 cebolas grandes picadas bem pequenas</li>
            <li>6 cabeças de alho trituradas ou socadas bem pequenas</li>
          </ul>

          <h2>Couve:</h2>
          <ul>
            <li>2 moles de couve cortada bem fininha</li>
            <li>2 cabeças de alho</li>
          </ul>

          <h2>Molho vinagrete:</h2>
          <ul>
            <li>2 cebolas grandes cortadas bem pequenas</li>
            <li>2 tomates grandes cortados pequenos</li>
            <li>2 pimentões</li>
            <li>2 moles de salsinha cortado pequeno</li>
            <li>250 ml de suco de limão (1 copo de requeijão)</li>
            <li>250 ml de azeite de oliva</li>
            <li>100 ml de vinagre</li>
            <li>Sal a gosto</li>
          </ul>

            <h2>Modo de preparo:</h2>
            <ul>
              <li>Escolha e lave o feijão, coloque de molho por no mínimo 1 hora antes de cozinhar</li>
              <li>Cozinhe com a mesma água em uma panela de pressão, com água até a marca da panela, por 20 minutos</li>
              <li>Escalde bem os salgados até retirar o excesso de sal</li>
              <li>Abra a panela, coloque os salgados e deixe cozinhar por mais 20 minutos</li>
              <li>Apague o fogo e reserve</li>
              <li>Refogue no azeite o alho e a cebola, tempere o feijão com sal a gosto</li>
            </ul>

            <h2>Farofa:</h2>
            <ul>
                <li>Frite a linguiça em óleo de soja</li>
                <li>Coloque os 2 envelopes de sazón e a farinha</li>
                <li>Misture bem e apague o fogo (não coloque sal pois o sazón já tem)</li>
            </ul>
            <h2>Couve:</h2>
            <ul>
              <li>Frite o alho no azeite, quando estiver bem douradinho jogue a couve, refogue com sal a gosto e apague o fogo</li>
            </ul>

            <h2>Molho vinagrete:</h2>
            <ul>
              <li>Misture a cebola, o tomate, o pimentão, a salsinha, o suco de limão, o azeite, o vinagre e sal a gosto</li>
              <li>Sirva com arroz branco, laranjas e uma caipirinha</li>
            </ul>
            <h1>R$ 35,90</h1>
      </p>
    </div>
  </div>



    <div class="ph-container">
    <div class="ph-container-texto">
      <p>
        <h1>Rabada</h1>
        <h2>Ingredientes:</h2>
        <ul>
          <li> 2 kg de rabada, em pedaços</li>
          <li>1/2 kg de batatas</li>
          <li>2 cebolas picadas</li>
          <li>1 molho de cheiro verde</li>
          <li>3 colheres (sopa) de óleo</li>
          <li>3 pingos de pimenta malagueta</li>
          <li>tempero mineiro a gosto</li>
          <li>4 tomates pelados</li>
        </ul>

        <h2>Modo de preparo:</h2>
        <ul>
          <li>Lavar os pedaços de rabada, removendo as gorduras e a pele. Colocar o temperar e a pimenta.</li>
          <li>Levar ao fogo uma panela com o óleo, aquecer.</li>
          <li>Adicionar os pedaços de rabada deixando-os cozer até corar. Tirar o excesso de gordura e adicionar água, tomates, cebola e pimenta.</li>
          <li>Quando estiver quase cozida, juntar as batatas partidas ao meio e descascadas, deixando cozinhar bem com a panela tampada.</li>
          <li>Juntar o cheiro verde na hora de servir.</li>
        </ul>
        <h1>R$ 29,50</h1>
      </p>
    </div>
  </diV>

</section>

<?php get_footer(); ?>
