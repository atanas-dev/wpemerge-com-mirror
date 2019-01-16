<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEmergeTheme
 */

?>
				</div><!-- /.main -->

				<?php Theme::partial( 'subscribe-form' ); ?>

				<footer class="footer">
					<div class="shell">
						<div class="credits">
							<p>Copyright &copy; <?php echo esc_html( date( 'Y' ) ); ?>. All Rights Reserved. <a href="<?php the_permalink( 3 ); ?>">Privacy Policy</a>. Brought to you by <a href="https://atanasangelovdev.com/" target="_blank" rel="noopener">Atanas Angelov</a> and the lovely folks at <a href="https://htmlburger.com/" target="_blank" rel="noopener">htmlBurger</a>.</p>
						</div><!-- /.credits -->
					</div><!-- /.shell -->
				</footer><!-- /.footer -->
			</div><!-- /.wrapper -->
		</div><!-- /.wrapper-holder -->

		<?php wp_footer(); ?>
	</body>
</html>
