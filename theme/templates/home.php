<?php
/**
 * Template Name: Home
 * App Layout: layouts/app.php
 *
 * @package WPEmergeTheme
 */

?>
<div class="intro">
	<div class="intro__bg" style="background-image: url(<?php echo Theme::uri(); ?>/dist/images/intro-bg.png);"></div><!-- /.intro__bg -->

	<div class="intro__inner">
		<div class="intro__content">
			<h1><?php bloginfo( 'name' ); ?></h1>

			<p><?php bloginfo( 'description' ); ?></p>

			<div class="list-buttons">
				<ul>
					<li>
						<a href="https://docs.wpemerge.com/" target="_blank" rel="noopener">
							<i class="ico-folder">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
									<path d="M20,18H4V8H20M20,6H12L10,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V8C22,6.89 21.1,6 20,6Z" />
								</svg>
							</i>

							<span><?php esc_html_e( 'Documentation', 'app' ); ?></span>
						</a>
					</li>

					<li>
						<a href="https://api.wpemerge.com/" target="_blank" rel="noopener">
							<i class="ico-gear">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
									<path d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" />
								</svg>
							</i>

							<span><?php esc_html_e( 'API Reference', 'app' ); ?></span>
						</a>
					</li>

					<li>
						<a href="https://github.com/htmlburger/wpemerge" target="_blank" rel="noopener">
							<i class="ico-git">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
									<path d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z" />
								</svg>
							</i>

							<span><?php esc_html_e( 'GitHub', 'app' ); ?></span>
						</a>
					</li>
				</ul>
			</div><!-- /.list-buttons -->
		</div><!-- /.intro__content -->

		<div class="intro__image">
			<?php echo wp_get_attachment_image( 32, 'intro' ); ?>
			<div class="hero__code">
				<pre class="code language-php">
					<code>
						Router::get( '/', function () {
							return app_view( 'hello-world.php' );
						} );

						Router::group( '/about', function( $group ) {
							$group->get( '/', 'AboutController@index' );
							$group->get( '/{team}', 'AboutController@team' );
						} );
					</code>
				</pre>
			</div>
		</div><!-- /.intro__image -->
	</div><!-- /.intro__inner -->
</div><!-- /.intro -->


<section class="section section--features">
	<div class="shell shell--medium">
		<header class="section__head">
			<h2><?php esc_html_e( 'Features', 'app' ); ?></h2>
		</header><!-- /.section__head -->

		<div class="section__body">
			<h6 class="features-category">Framework</h6>
			<div class="features">
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-compass fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Routing
						</h4>
						<p>… with controllers, middleware, PSR-7 responses and view composers.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-file-code fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Use any view engine
						</h4>
						<p>Use good ol’ PHP, Blade, Twig or a mix. Implementing any other view engine is also supported.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-wrench fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Service container
						</h4>
						<p>All dependencies are instantiated using an IoC container and can be replaced with custom compatible ones at will.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-sliders-h fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Extensible
						</h4>
						<p>Service providers, view engines, dynamic route conditions, error handling – all customizable and extensible.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-exclamation-circle fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Advanced error reporting
						</h4>
						<p>Beautiful and interactive stack trace presentation with data dumps and source file highlighting.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fab fa-wordpress fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Full support for "The Loop"
						</h4>
						<p>WP Emerge does not mess with or override "The Loop" - it complements it.</p>
					</div>
				</div>
			</div>
			<p class="features-footnote"><a href="https://docs.wpemerge.com/#/framework/overview" target="_blank" rel="noopener">Read More</a></p>

			<h6 class="features-category">Starter Theme</h6>
			<div class="features">
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-edit fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Gutenberg
						</h4>
						<p>Block font sizes and color palette are available and customizable through simple variable changes.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<span class="fa-stack">
							<i class="fas fa-square fa-stack-2x fa-fw"></i>
							<i class="fas fa-terminal fa-stack-1x fa-inverse fa-fw"></i>
						</span>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							CLI Helper
						</h4>
						<p>Install CSS frameworks, run boilerplate-generating commands and more.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-cube fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							PHP unit test scaffolding
						</h4>
						<p>You are one command away from having a fully integrated unit test environment for your code.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-atom fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							ES6 + SASS everywhere
						</h4>
						<p>Separate bundles for the frontend, administration, login and Gutenberg in<br /><strong>one build step</strong>.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-toolbox fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Asset tools
						</h4>
						<p>Automatic sprite generation, fool-proof asset cache breaker, dynamic thumbnail generation and more.</p>
					</div>
				</div>
				<div class="features__feature">
					<div class="features__feature-icon">
						<i class="fas fa-broom fa-fw"></i>
					</div>
					<div class="features__feature-description">
						<h4 class="features__feature-title">
							Lint Everything
						</h4>
						<p>ESLint, StyleLint and the official WordPress PHPCS configuration are available out of the box.</p>
					</div>
				</div>
			</div>
			<p class="features-footnote"><a href="https://docs.wpemerge.com/#/starter-theme/overview" target="_blank" rel="noopener">Read More</a></p>
		</div><!-- /.section__body -->
	</div><!-- /.shell shell-/-medium -->
</section><!-- /.section section-/-testimonials -->

<section class="section section--faq">
	<div class="shell shell--medium">
		<header class="section__head">
			<h2><?php esc_html_e( 'F.A.Q.', 'app' ); ?></h2>
		</header><!-- /.section__head -->

		<div class="section__body">
			<div class="accordion">
				<div class="accordion__section">
					<div class="accordion__head">
						<h3>Is WP Emerge a plugin?</h3>
					</div><!-- /.accordion__head -->

					<div class="accordion__body">
						<p>
							No, WP Emerge is a framework that you can include in your theme. While not officially supported, it shouldn't be too hard to include it in a plugin as well.
						</p>
					</div><!-- /.accordion__body -->
				</div><!-- /.accordion__section -->

				<div class="accordion__section">
					<div class="accordion__head">
						<h3>Does WP Emerge include Laravel?</h3>
					</div><!-- /.accordion__head -->

					<div class="accordion__body">
						<p>
							Nope. While heavily inspired by Laravel, WP Emerge is lean and tuned for WordPress and does not include any <code>illuminate/*</code> packages.
						</p>
					</div><!-- /.accordion__body -->
				</div><!-- /.accordion__section -->

				<div class="accordion__section">
					<div class="accordion__head">
						<h3>Can I use WP Emerge in a legacy project?</h3>
					</div><!-- /.accordion__head -->

					<div class="accordion__body">
						<p>
							Yes! One of the great benefits of WP Emerge is that its integration is incremental - you can use it in a legacy project without having to rewrite your site's logic or templates. For example, you can use the <code>NameProxyViewEngine</code> to render new templates using Blade while still using plain PHP for old ones.
						</p>
					</div><!-- /.accordion__body -->
				</div><!-- /.accordion__section -->

				<div class="accordion__section">
					<div class="accordion__head">
						<h3>Is WP Emerge free?</h3>
					</div><!-- /.accordion__head -->

					<div class="accordion__body">
						<p>
							Yes - WP Emerge is free, open source and licensed under GPL 2.0. Feel free to submit issues, suggestions and pull requests over at <a href="https://github.com/htmlburger/wpemerge" target="_blank" rel="noopener">GitHub</a>.
						</p>
					</div><!-- /.accordion__body -->
				</div><!-- /.accordion__section -->

				<div class="accordion__section">
					<div class="accordion__head">
						<h3>What theme works best with WP Emerge?</h3>
					</div><!-- /.accordion__head -->

					<div class="accordion__body">
						<p>
							While WP Emerge works with any theme, we suggest you check out the official <a href="https://docs.wpemerge.com/#/starter-theme/overview" target="_blank" rel="noopener">Starter Theme for WP Emerge</a>.
						</p>
					</div><!-- /.accordion__body -->
				</div><!-- /.accordion__section -->

				<div class="accordion__section">
					<div class="accordion__head">
						<h3>Where can I get help with WP Emerge?</h3>
					</div><!-- /.accordion__head -->

					<div class="accordion__body">
						<ol>
							<li>Check out the <a href="https://docs.wpemerge.com/" target="_blank" rel="noopener">official documentation</a>.</li>
							<li>Ask questions in the <a href="https://gitter.im/wpemerge/Lobby" target="_blank" rel="noopener">Gitter Lobby</a>.</li>
							<li>Submit issues, feature requests and pull requests on <a href="http://github.com/htmlburger/wpemerge" target="_blank" rel="noopener">GitHub</a>.</li>
						</ol>
					</div><!-- /.accordion__body -->
				</div><!-- /.accordion__section -->
			</div><!-- /.accordion -->
		</div><!-- /.section__body -->
	</div><!-- /.shell shell-/-medium -->
</section><!-- /.section section-/-faq -->

<section class="section section--testimonials">
	<div class="shell shell--medium">
		<div class="section__bg" style="background-image: url(<?php echo Theme::uri(); ?>/dist/images/testimonials-bg.png);"></div><!-- /.section__bg -->

		<header class="section__head">
			<h2><?php esc_html_e( 'Testimonials', 'app' ); ?></h2>
		</header><!-- /.section__head -->

		<div class="section__body">
			<div class="slider slider--testimonials">
				<div class="slider__clip swiper-container">
					<div class="slider__slides swiper-wrapper">
						<div class="slider__slide swiper-slide">
							<div class="testimonial">
								<blockquote>
									WP Emerge is fantastic!
									It’s a great introduction to MVC for WordPress developers, and a great bridge to WordPress for those already familiar with frameworks like Laravel or Yii.
									Awesome job, Atanas!
								</blockquote>

								<div class="testimonial__author">
									<div class="testimonial__author-avatar">
										<?php echo wp_get_attachment_image( 51, 'avatar' ); ?>
									</div><!-- /.testimonial__author-avatar -->

									<div class="testimonial__author-content">
										<h5>Galen Gidman</h5>

										<h6>Front-end / WordPress developer</h6>
									</div><!-- /.testimonial__author-content -->
								</div><!-- /.testimonial__author -->
							</div><!-- /.testimonial -->
						</div><!-- /.slider__slide swiper-slide -->

						<div class="slider__slide swiper-slide">
							<div class="testimonial">
								<blockquote>
									I have been using WP Emerge on a number of projects, it has made my work easier, using MVC in WordPress is wonderful and my learning curve was as minimal as possible. It is well documented and organized.
								</blockquote>

								<div class="testimonial__author">
									<div class="testimonial__author-avatar">
										<?php echo wp_get_attachment_image( 29, 'avatar' ); ?>
									</div><!-- /.testimonial__author-avatar -->

									<div class="testimonial__author-content">
										<h5>Elvis Henrique</h5>

										<h6>System Analyst, Apiki</h6>
									</div><!-- /.testimonial__author-content -->
								</div><!-- /.testimonial__author -->
							</div><!-- /.testimonial -->
						</div><!-- /.slider__slide swiper-slide -->

						<div class="slider__slide swiper-slide">
							<div class="testimonial">
								<blockquote>
									Finding WP Emerge was a blessing. It brings in a well structured WordPress project layout and provides modern tooling. First class documentation and help from the creator is only speeding things up. Take your projects to a new level with WP Emerge!
								</blockquote>

								<div class="testimonial__author">
									<div class="testimonial__author-avatar">
										<?php echo wp_get_attachment_image( 39, 'avatar' ); ?>
									</div><!-- /.testimonial__author-avatar -->

									<div class="testimonial__author-content">
										<h5>Kristjan Koppel</h5>

										<h6>ProPXLS</h6>
									</div><!-- /.testimonial__author-content -->
								</div><!-- /.testimonial__author -->
							</div><!-- /.testimonial -->
						</div><!-- /.slider__slide swiper-slide -->
					</div><!-- /.slider__slides swiper-wrapper-->
				</div><!-- /.slider__clip swiper-container -->

				<div class="slider__actions">
					<div class="swiper-button-prev"></div>

					<div class="swiper-button-next"></div>
				</div><!-- /.slider__actions -->
			</div><!-- /.slider slider-/-testimonials -->
		</div><!-- /.section__body -->
	</div><!-- /.shell shell-/-medium -->
</section><!-- /.section section-/-testimonials -->
