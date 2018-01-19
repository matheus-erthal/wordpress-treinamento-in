<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php //The Query 
$nossa_query = new WP_Query( array('posts_type' => notas) );
?>
<<<<<<< HEAD

<h1>Blog Grupo 4</h1>

<?php if ($nossa_query -> have_posts()): ?>
    
    <?php while($nossa_query -> have_posts()): ?>
    
        <?php $nossa_query -> the_post(); ?>
	
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2> </a>
	
	<p><?php the_content(); ?></p>
    
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
=======
<<<<<<< HEAD

<h1>Blog Grupo 4</h1>

<?php if ($nossa_query -> have_posts()): ?>
    <?php while($nossa_query -> have_posts()): ?>
        <?php $nossa_query -> the_post(); ?>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2> </a>
	<p><?php the_content(); ?></p>
=======
>>>>>>> 911a476a95990a31d8f1323bde020afb45454c14

<h1>Grupo 4</h1>

<?php if ($nossa_query -> have_posts()): ?>
    <?php while($nossa_query -> have_posts()): ?>
        <?php $nossa_query -> the_post(); ?>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
>>>>>>> ea5faa6481d66c7cdd4cfc9b46f721138cd3d7c8
    <?php endwhile; ?>
<?php endif; ?>

<<<<<<< HEAD
=======
<?php get_footer();

>>>>>>> 911a476a95990a31d8f1323bde020afb45454c14
