<?php
/*
 Template Name: Full Width
 *
 * This template is for displaying full width pages
 * within the WordPress Theme "Arcade Basic"
 */
get_header();
?>

	<div class="container">
		<div class="row">
			<div id="primary" class="col-md-12">
				<?php
				while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); ?></h1>

					    <div class="entry-content description clearfix">
						    <?php the_content( __( 'Read more', 'arcade') ); ?>
					    </div><!-- .entry-content -->

					    <?php get_template_part( 'content', 'footer' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->

					<?php
					comments_template( '', true );
				endwhile;
				?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
