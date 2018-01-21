<?php
/**
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">




	<title>Pratos típicos Brasileiros de qualidade e saborosos só no Sabor Brasil</title>
	<meta name="description" content="Visite nosso site e soboreiam pratos maravilhosos da culinária Brasileira, descubram o Sabor do Brasil e desfrutam de nossa tradição, qualidade e requinte! Além do Cardápio do dia, participem do nosso blog.| Pratos: Feijoada, Rabada, Bobó de Camarão, Angu à Bahiana e dentre outros."/>
	<meta name="robots" content="index, follow"/>
	<meta name="keywords" content="restaurante, sabor, brasil, sabor brasil, sabor-brasil, niterói, culinária, comida, chef, brasileira, diferencial, diferenciados, qualidade, gostoso, saboroso, especial, excelente, valor, refrigerante, bebidas, sobremesas, tradição, maravilhoso, pratos, típicos, apetite, fome, delicioso"/>
  <link href="https://www.restaurantesaborbrasil.com.br">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="<?= wp_enqueue_script( 'jquery-3.2.1.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');?>js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?= wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js');?>js/javascript.js"></script>


</head>

<body>
<header>

<div class="cabecalho">
    <div class="cabecalho-container">
        <div class="cabecalho-item">
            <h2><a href="<?= get_site_url(); ?>/index.php/quem-somos">Quem Somos</a></h2>
        </div>
    <div class="cabecalho-item">
        <a href="<?= get_site_url(); ?>/index.php "><img src="<?= get_template_directory_uri(); ?>/assets/img/logo-restaurante.png"></a>
    </div>
         <div class="cabecalho-item">
            <h2><a href="<?= get_site_url(); ?>/index.php/blog">Nosso Blog</a></h2>


        </div>
    </div>

</div>

<h2 class="w3-center">Manual Slideshow</h2>

<div class="w3-content w3-display-container" id="id">
  <img class="mySlides" src="<?= get_template_directory_uri(); ?>/assets/img/ambiente.jpg" style="width:100%">
  <img class="mySlides" src="<?= get_template_directory_uri(); ?>/assets/img/slide.jpg" style="width:100%">
  <img class="mySlides" src="<?= get_template_directory_uri(); ?>/assets/img/vista.jpg" style="width:100%">
  <button class="w3-button w3-black w3-display-left left">&#10094;</button>
  <button class="w3-button w3-black w3-display-right right">&#10095;</button>
</div>


</header>

</body>
</html>


<?php wp_head(); ?>
