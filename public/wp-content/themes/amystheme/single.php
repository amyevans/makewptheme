<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<?php the_content(''); ?>
				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; wp_reset_query(); ?>
		</div>
		<div class="col-sm-3">
			<div class="list-group">
				<?php 
					query_posts('posts_per_page=5'); 
					while( have_posts()) : the_post(); 
				?>
					<a href="<?php the_permalink(); ?>" class="list-group-item">
						<h4 class="list-group-heading"><?php the_title(); ?></h4>
						<p class="list-group-text"><?php echo substr(get_the_excerpt(), 0, 50); ?>...</p>
					</a>
				<?php endwhile; wp_reset_query(); ?>
			</div><!-- /.list-group -->
		</div>
		
	</div><!-- /.row -->	
</div><!-- /.container -->

<?php get_footer(); ?>