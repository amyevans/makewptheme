<?php get_header()?>
<?php get_sidebar()?>

<div id="left">
	<?php while(have_posts()): the_post()?>
		<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
		<p>
			<a href="<?php echo get_the_author_link();?>">By <?php the_author()?></a>
		</p>
		<?php the_content(__('Continue reading'));?>
	<?php endwhile;?>

	<?php comments_template('', true);?>
</div>

<?php get_footer()?>