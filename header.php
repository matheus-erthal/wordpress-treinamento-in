<?php
/**
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="InBurguer, nosso sabor é a propaganda."/>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="restaurante, burguer, InBurguer, bom restaurante, lanche, hamburguer, restaurante de qualidade,costela de porco, cebola empanada, filé mignon, receita,"/>
    <script type="text/javascript" src = "<?= get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src = "<?= get_template_directory_uri(); ?>/js/inburger.js"></script>
  </head>
  
  <body>
    <header class="menu">
        <div class="menu-container">
          <a class="menu-logo" href="http://localhost/wordpress/"><img src="<?= get_template_directory_uri(); ?>/img/logooficial.png" alt="InBurguer"></a>
          <nav class="menu-nav">
            <ul>
              <li><a href="http://localhost/wordpress/?page_id=39">Sobre</a></li>
              <li><a href="http://localhost/wordpress/?page_id=10">Receitas</a></li>
              <li><a href="http://localhost/wordpress/?page_id=32 ">Onde Estamos</a></li>
              <li><a href="http://localhost/wordpress/?page_id=44">Contato</a></li>
            </ul>
          </nav>
        </div>
    </header>

<?php wp_head(); ?>

<body>
<html>
