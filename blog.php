<?php

/* Template Name: Blog */

?>

<!--<?php $nossa_query = new WP_Query( array('posts_type' => news) );
?>-->

<!DOCTYPE html>
<html>
<head>
	<title>IN Junior | Blog</title>
	<meta name="description" content="Deseja criar um site para expor sua marca online e atrair mais clientes, um sistema para impulsionar o seu negócio, quem sabe um aplicativo para sua Startup, a IN Junior é o lugar certo."/>
	<meta name="robots" content="index,follow"/>
	<meta name="keywords" content="in junior, empresa junior, TI, site, website, sistemas"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 	
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/style.css">

<section class="blog-header">
		<a class="top-logo" href="#"><img src="<?= get_template_directory_uri(); ?>/img/LogoINOriginal.png" alt="IN Junior"></a>
		<nav class="mnav">
			<ul>
				<li><a href="principal">Quem somos</a></li>
				<li><a href="projetos">Projetos</a></li>
				<li><a href="proposito">Nosso propósito</a></li>
				<li><a href="contato">Contato</a></li>
				<li><a href="top">Blog</a></li>
			</ul>
		</nav>
</section>


<section class="posts">
<?php if ($nossa_query -> have_posts()): ?>
    <?php while($nossa_query -> have_posts()): ?>
        <?php $nossa_query -> the_post(); ?>
		<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2> </a>
		<p> <?php the_date() ?>, <?php the_time();?> </p>
		<p><?php the_content(); ?></p>
    <?php endwhile; ?>
<?php endif; ?>
</section>

<section class="blog-footer">
	<div class="foot-container">
		<div class="media">
			<a href="https://www.facebook.com/injunioruff"><i class="fa fa-facebook-square"></i></a>
			<a href="https://www.instagram.com/injunioruff/"><i class="fa fa-instagram"></i></a>
			<a href="https://www.linkedin.com/company/in-junior"><i class="fa fa-linkedin-square"></i></a>
		</div>	
		<p> Copyright © 2017 | Feito com <3 | IN Junior </p>
	</div>
</section>