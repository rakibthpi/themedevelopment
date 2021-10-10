<?php get_header(); ?>


	<div class="page_content_main_area">
		<?php while(have_posts()): the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?> 
			<?php the_post_thumbnail(); ?> 

		<?php endwhile; ?>
	</div>



<?php get_footer(); ?>