<?php
/**
 * App Layout: layouts/app.php
 *
 * The main template file.
 *
 * This is the template that is used for displaying:
 * - posts
 * - single posts
 * - archive pages
 * - search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

?>
<?php Theme::partial( 'category-bar' ); ?>

<section class="section-title">
	<div class="shell shell--medium">
		<h3><?php app_the_title(); ?></h3>
	</div><!-- /.shell shell-/-medium -->
</section><!-- /.section-title -->

<section class="section section--articles">
	<div class="shell shell--medium">
		<?php Theme::partial( 'loop' ); ?>
	</div><!-- /.shell shell-/-medium -->
</section><!-- /.section section-/-articles -->
