<?php
/*Template name: Blog Template*/

?>


<section class="posts">
	<div class="posts-container">
		<?php if ($nossa_query -> have_posts()); ?>
	    
		    <?php while($nossa_query -> have_posts()); ?>
		    	<a href="<?php the_permalink(); ?>"></a>
		    	<h2><?php the_title(); ?></h2>
				<p><?php $nossa_query -> the_post(); ?></p>
				
				<p><?php  the_date(); ?></p>
				<p><?php the_time(); ?></p>
				
				<p><?php the_content(); ?></p>

	    	<?php endwhile: ?>
		<?php endif: ?>	
	



</section>