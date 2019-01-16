<?php
/**
 * Show a newsletter subscribe form.
 *
 * @package WPEmergeTheme
 */

?>
<section class="section-subscribe">
	<div class="shell">
		<div class="subscribe">
			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://wpemerge.us19.list-manage.com/subscribe/post?u=ca380826c1fa3261bcc731e40&amp;id=fc278d772b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<label for="mail" class="subscribe__label"><?php esc_html_e( 'Sign Up for Updates', 'app' ); ?></label>

						<div class="subscribe__controls">
							<input type="email" id="mce-EMAIL" name="EMAIL" value="" placeholder="Email" class="email subscribe__field" required aria-label="<?php esc_attr_e( 'Email', 'app' ); ?>">
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ca380826c1fa3261bcc731e40_fc278d772b" tabindex="-1" value=""></div>

							<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="subscribe__btn">
								<i class="ico-send">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
										<path fill="#000000" d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
									</svg>
								</i>

								<span><?php esc_html_e( 'Subscribe', 'app' ); ?></span>
							</button>
						</div><!-- /.subscribe__controls -->
					</div>
				</form>
			</div>
			<!--End mc_embed_signup-->

			<p><?php esc_html_e( 'We don’t spam. That’s a promise.', 'app' ); ?></p>
		</div><!-- /.subscribe -->
	</div><!-- /.shell -->
</section><!-- /.section-subscribe -->
