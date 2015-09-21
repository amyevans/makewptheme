<?php get_header(); ?>

<div class="container">
	<div class="row">
	<?php 
		query_posts('posts_per_page=3');
			while(have_posts()) : the_post(); ?>

		<div class="col-sm-4">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
		</div><!-- /.col-lg-3 -->

	<?php endwhile; wp_reset_query(); ?>	
	</div><!-- /.row -->	
</div><!-- /.container -->

<?php get_footer(); ?>