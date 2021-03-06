<?php
/**
 *
 * @package 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php  ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
