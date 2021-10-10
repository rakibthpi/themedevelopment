<?php get_header();
/*
	Template Name:template service0.

*/

?>

	<?php $serv = new WP_Query(array(
		'post_type'	=>	'services'
	));?>
	<div class="page_content_main_area">
		<?php while($serv->have_posts()): $serv->the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?> </p>

				<?php $terms = get_the_terms(get_the_id(),'service_type'); ?>
				<?php foreach($terms as $term):
					$link = get_term_link($term);
				 ?>
					<li style="color:tomato;"><a href="<?php echo $link ?>"><?php echo $term->name; ?></a></li>
				<?php endforeach; ?>

			<?php the_post_thumbnail(); ?> 

			<a href="<?php the_permalink(); ?>">Services Details</a>
		<?php endwhile; ?>
	</div>



<?php get_footer(); ?>