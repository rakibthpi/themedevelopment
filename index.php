<?php get_header(); ?>

	<?php 

		echo get_template_directory_uri()."/assets/css/responsive.css"."<br>"; 
		echo get_stylesheet_uri();

	?>




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

				<a href="<?php the_permalink(); ?>">Read more...</a>


			<?php endwhile; ?>
			<!-- Page Loop Area start  -->
		</div>
		<div class="content_right_area">
			<h1>Side bar area</h1>
			<?php dynamic_sidebar('right_sidebar1'); ?>
		</div>
	</div>



<?php get_footer(); ?>