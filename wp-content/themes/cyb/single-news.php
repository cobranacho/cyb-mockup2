

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-news' ); ?>

			<?php endwhile; endif; ?>
	
			<footer class="footer">
				<?php get_template_part( 'nav', 'below-single' ); ?>
			</footer>
		</section>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div>
<?php get_footer(); ?>