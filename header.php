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
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

	<header class="menu">
		<div class="menu-container">
			<a class="menu-logo" href="#"><img src="<?= get_template_directory_uri(); ?>/img/logo-branca-in.png" alt="logo branca da In Junior"></a>	
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
	
<body>

