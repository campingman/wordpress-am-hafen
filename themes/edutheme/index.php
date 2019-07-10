<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage EduTheme
 * @since EduTheme 0.0.0
 */

get_header();
?>

	<div id="primary" class="content-area">

			<!-- <aside></aside>
			<article>
				<h1 class="entry-title">Willkommen</h1>	</header>
				<div class="entry-content">
					<p>Herzlich willkommen auf der Homepage unserer Stadtteilschule am Hafen!</p>
				</div>
			</article> -->

		<main id="main" class="site-main" role="main">
			<aside></aside>
			<div class="archive">
		<?php if ( have_posts() ) : ?>
			<header class="entry-header">
				<div class="bg" style="background-image: url('http://schule-am-hafen.eu/wp-content/uploads/2019/01/DSC02466.jpeg')">
					<h1 class="entry-title">Neuigkeiten aus dem Schulalltag</h1>
				</div>
				<small><?php echo $caption ?></small>
			</header><!-- .entry-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-search', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
