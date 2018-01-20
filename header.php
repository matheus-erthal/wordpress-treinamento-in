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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?> /style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


	<?php wp_head(); ?>
	</head>

	
	
<body>

	<header class="menu">
		<div class="menu-container">
			<a class="menu-logo" href="#"><img src="img/logo-branca-in.png" alt="logo branca da In Junior"></a>	
			<nav class="menu-nav">
				<ul>
					<li><a href="#">Quem somos</a></li>
					<li><a href="#">Nossos projetos</a></li>
					<li><a href="#">Nosso propósito</a></li>
					<li><a href="#">Contato</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</nav>
		</div>
	</header>

