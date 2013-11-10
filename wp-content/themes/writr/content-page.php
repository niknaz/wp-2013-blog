<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Writr
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<span class="entry-format-badge genericon genericon-document"><span class="screen-reader-text"><?php _e( 'Page', 'writr' ); ?></span></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'writr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'writr' ), '<footer class="entry-meta"><ul class="clear"><li class="edit-link"><div class="genericon genericon-edit"></div> ', '</li></ul></footer>' ); ?>
</article><!-- #post-## -->
