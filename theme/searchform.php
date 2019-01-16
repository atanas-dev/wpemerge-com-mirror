<?php
/**
 * Search form partial.
 *
 * @link https://codex.wordpress.org/Styling_Theme_Forms#The_Search_Form
 *
 * @package WPEmergeTheme
 */

?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form" method="get" role="search">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'app' ); ?></span>

		<input type="text" title="<?php esc_attr_e( 'Search for:', 'app' ); ?>" name="s" value="<?php echo esc_attr( get_query_var( 's' ) ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'app' ); ?>" class="search__field" />
	</label>

	<input type="submit" value="<?php esc_attr_e( 'Search', 'app' ); ?>" class="search__submit screen-reader-text" />
</form>
