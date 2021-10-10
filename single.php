<?php get_header(); ?>




	<div class="content_main_area">
		<div class="content_left_area">
			
			<!-- Page Loop Area start  -->
			<?php  while(have_posts()):the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<div class="images_blog_area">
					<?php the_post_thumbnail(); ?>
				</div>
				<p><?php the_author(); ?></p>
				<p>Date: <?php the_time('j F Y - g:i A'); ?></p>
				<p><?php comments_popup_link('Zero Comment','One comment','% Comments','comment_className','Disable comment'); ?></p>

			<?php endwhile; ?>
		</div>
	</div>



<?php get_footer(); ?>