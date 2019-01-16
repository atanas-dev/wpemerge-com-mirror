<?php
/**
 * App Layout: layouts/app.php
 *
 * Single post template file.
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

					<?php Theme::partial( 'post-meta', [ 'single' => true ] ); ?>

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

				<?php
				carbon_pagination(
					'post',
					[
						'wrapper_before' => '<div class="article-single__actions">',
						'wrapper_after'  => '</div>',
						'prev_html'      => '<a href="{URL}" class="link-prev"><i class="fas fa-chevron-left"></i><span>' . esc_html__( 'previous article', 'app' ) . '</span></a>',
						'next_html'      => '<a href="{URL}" class="link-next"><span>' . esc_html__( 'next article', 'app' ) . '</span><i class="fas fa-chevron-right"></i></a>',
					]
				);
				?>
			</div><!-- /.article-single -->

			<?php comments_template(); ?>

		</div><!-- /.shell shell-/-small -->
	</section><!-- /.section-article-single -->
<?php endwhile; ?>
