<?php
/**
 * "The Loop" partial.
 *
 * @package WPEmergeTheme
 */

?>
<div class="section__body">
	<div class="articles">
		<?php if ( have_posts() ) : ?>
			<ul>
				<?php $i = 0; ?>
				<?php while ( have_posts() ) : ?>
					<?php
					the_post();
					?>
					<li>
						<div class="article <?php echo 0 === $i ? 'article--large' : ''; ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="article__image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'article' ); ?>
									</a>
								</div><!-- /.article__image -->
							<?php endif; ?>

							<div class="article__content">
								<?php if ( 0 === $i ) : ?>
									<h2>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
								<?php else : ?>
									<h3>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
								<?php endif; ?>

								<?php Theme::partial( 'post-meta' ); ?>

								<?php the_excerpt(); ?>

								<a href="<?php the_permalink(); ?>" class="btn btn--blue <?php echo $i > 0 ? 'btn--small' : ''; ?>">
									<?php esc_html_e( 'Read More', 'app' ); ?>
								</a>
							</div><!-- /.article__content -->
						</div><!-- /.article -->
					</li>
					<?php $i++; ?>
				<?php endwhile; ?>
			</ul>
		<?php else : ?>
			<ul>
				<li>
					<div class="article article--large">
						<div class="article__content article__content--center">
							<p><?php echo esc_html( app_get_index_404_message() ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- /.article__entry -->
					</div><!-- /.article__body -->
				</li><!-- /.article -->
			</ul>
		<?php endif; ?>
	</div><!-- /.articles -->
</div><!-- /.section__body -->

<?php if ( have_posts() ) : ?>
	<div class="section__actions">
		<?php
		carbon_pagination(
			'posts',
			[
				'prev_html'      => '<a href="{URL}" class="paging-prev"><i class="fas fa-chevron-left"></i></a>',
				'next_html'      => '<a href="{URL}" class="paging-next"><i class="fas fa-chevron-right"></i></a>',
				'first_html'     => '<a href="{URL}" class="paging-first"></a>',
				'last_html'      => '<a href="{URL}" class="paging-last"></a>',
				'limiter_html'   => '<li class="paging__spacer">...</li>',
				'enable_numbers' => true,
			]
		);
		?>
	</div><!-- /.section__actions -->
<?php endif; ?>
