<?php
/**
 * App Layout: layouts/app.php
 *
 * This is the template that is used for displaying all pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPEmergeTheme
 */

?>
<?php Theme::partial( 'category-bar' ); ?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<section class="section-article-single">
		<div class="shell shell--small">
			<div class="article-single">
				<div class="article-single__head">
					<h1><?php the_title(); ?></h1>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="article-single__image">
							<figure>
								<?php the_post_thumbnail( 'article' ); ?>
							</figure>
						</div><!-- /.article-single__image -->
					<?php endif; ?>
				</div><!-- /.article-single__head -->

				<div class="article-single__body">
					<?php the_content(); ?>
				</div><!-- /.article-single__body -->
			</div><!-- /.article-single -->

		</div><!-- /.shell shell-/-small -->
	</section><!-- /.section-article-single -->
<?php endwhile; ?>
