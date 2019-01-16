<?php
/**
 * Displays the post date/time, author, tags, categories and comments link.
 *
 * Should be called only within The Loop.
 *
 * It will be displayed only for post type "post".
 *
 * @package WPEmergeTheme
 */

if ( get_post_type() !== 'post' ) {
	return;
}

$single = isset( $single ) ? $single : false;
?>
<div class="article<?php echo $single ? '-single' : ''; ?>__meta">
	<div class="article<?php echo $single ? '-single' : ''; ?>__date">
		<p>
			<?php
			/* translators: post author attribution */
			echo sprintf( __( 'by %s', 'app' ), get_the_author_link() );
			?>
			<span>|</span>
			<?php the_time( 'M jS, Y' ); ?>
			<span>|</span>
			<?php the_category( ', ' ); ?>
		</p>
	</div><!-- /.article__author -->
</div><!-- /.article__meta -->
