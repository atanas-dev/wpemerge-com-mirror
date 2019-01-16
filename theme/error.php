<?php
/**
 * App Layout: layouts/app.php
 *
 * Generic error fallback view.
 * Used if no view is found for the current error status code.
 *
 * @package WPEmergeTheme
 */

?>
<?php Theme::partial( 'category-bar' ); ?>

<section class="section-article-single">
	<div class="shell shell--small">
		<div class="article-single">
			<div class="article-single__head">
				<h1><?php app_the_title(); ?></h1>
			</div><!-- /.article-single__head -->

			<div class="article-single__body">
				<p>
					<?php
					printf(
						/* translators: generic error page content; placeholders represents homepage opening and closing anchor tags */
						esc_html__( 'Please check the URL for proper spelling and capitalization. If you\'re having trouble locating a destination, try visiting the %1$shome page%2$s.', 'app' ),
						'<a href="' . esc_url( home_url( '/' ) ) . '">',
						'</a>'
					);
					?>
				</p>
			</div><!-- /.article-single__body -->
		</div><!-- /.article-single -->

	</div><!-- /.shell shell-/-small -->
</section><!-- /.section-article-single -->
