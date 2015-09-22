<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<?php the_content(''); ?>
			<?php endwhile; endif; wp_reset_query(); ?>
		</div>
	</div><!-- /.row -->	
</div><!-- /.container -->

<?php get_footer(); ?>