<?php
/**
 * List categories and show a search form.
 *
 * @package WPEmergeTheme
 */

?>
<div class="bar">
	<div class="shell">
		<div class="bar__inner">
			<nav class="nav-secondary">
				<ul>
					<?php foreach ( $terms as $term ) : ?>
						<li>
							<a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav><!-- /.nav-secondary -->

			<div class="search-form">
				<?php get_search_form(); ?>
			</div><!-- /.search-form -->
		</div><!-- /.bar__inner -->
	</div><!-- /.shell -->
</div><!-- /.bar -->
