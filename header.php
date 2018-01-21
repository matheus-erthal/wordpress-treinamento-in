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
<meta name="viewport" content="width=device-width, initial-scale=1>
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/home.js"></script>
<?php wp_head(); ?>
</head>

<body>
  <header class="menu">
    <div class="menu-container">
      <div class="titulo-menu">
        <a href="#">Minerva</a>
          <a href="#">McGonagall</a>
      </div>

      <nav class="menu-nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Turmas</a></li>
          <li><a href="http://localhost/wordpress/calculadora/">Calculadora</a></li>
          <li><a href="http://localhost/wordpress/sobre/">Sobre</a></li>
        </ul>
      </nav>
  </div>
</header>
