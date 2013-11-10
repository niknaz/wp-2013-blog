<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Fruitful theme
 * @since Fruitful theme 1.0
 */
?>
		</div>
			<div class="sixteen columns">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<?php fruitful_get_footer_text(); ?>
				</div><!-- .site-info -->
				<div id="back-top">
					<a href="#top" title="Back to top">&uarr;</a>
				</div>
				<div class="social-icon">
					<?php fruitful_get_footer_socials_icon(); ?>
				</div>
			</footer><!-- #colophon .site-footer -->
		</div>
		</div><!-- #main .site-main -->
		</div><!-- #page .hfeed .site -->
<?php wp_footer(); ?>
</body>
</html>