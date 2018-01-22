<?php
/**
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */
 get_header(); ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pratos típicos Brasileiros de qualidade e saborosos só no Sabor Brasil</title>
	<meta name="description" content="Visite nosso site e soboreiam pratos maravilhosos da culinária Brasileira, descubram o Sabor do Brasil e desfrutam de nossa tradição, qualidade e requinte! Além do Cardápio do dia, participem do nosso blog.| Pratos: Feijoada, Rabada, Bobó de Camarão, Angu à Bahiana e dentre outros."/>
	<meta name="robots" content="index, follow"/>
	<meta name="keywords" content="restaurante, sabor, brasil, sabor brasil, sabor-brasil, niterói, culinária, comida, chef, brasileira, diferencial, diferenciados, qualidade, gostoso, saboroso, especial, excelente, valor, refrigerante, bebidas, sobremesas, tradição, maravilhoso, pratos, típicos, apetite, fome, delicioso"/>
  <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>style.css">
  <link href="https://www.restaurantesaborbrasil.com.br">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="<?= wp_enqueue_script( 'jquery-3.2.1.min', get_template_directory_uri(). '/jquery-3.2.1.min.js');?>/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?= wp_enqueue_script( 'javascript', get_template_directory_uri().'/javascript.js');?>/javascript.js"></script>
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
</header>
</body>
 <?php get_header(); ?>
