<?php
/**
 * @package WordPress
 * @subpackage Fruitful theme
 * @since Fruitful theme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog_post'); ?>>
	<?php $day 		 = get_the_date('d'); 
		  $month_abr = get_the_date('M');
	?>
	<div class="date_of_post">
		<span class="day_post"><?php print $day; ?></span>
		<span class="month_post"><?php print $month_abr; ?></span>
	</div>
	<div class="post-content">	
	<header class="post-header">
		<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'fruitful' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( (is_search()) || (!is_single()) ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Read More <span class="meta-nav">&rarr;</span>', 'fruitful' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'fruitful' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'fruitful' ), __( '1 Comment', 'fruitful' ), __( '% Comments', 'fruitful' ) ); ?></span>
		<?php } ?>
		
		<?php fruitful_entry_meta(); ?>
	</footer><!-- .entry-meta -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
