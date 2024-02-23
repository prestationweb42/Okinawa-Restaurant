<?php

/**
 * The template for displaying the 404 template in the Child Theme.
 *
 * @package WordPress
 */

get_header();
?>

<main id="site-content">

	<section class="section_error404_content container min-vh-100 pt-4">

		<h1 class="entry-title text-center">Page introuvable</h1>
		<p class="text-center fs-2">La page que vous recherchez est introuvable
		</p>
		<p class="text-center fs-3">Elle pourrait avoir été supprimée, renommée, ou pourrait
			n’avoir jamais existé
		</p>
		<div class="w-50 mx-auto">
			<img src="<?php echo get_template_directory_uri() . '/assets/img/error404.webp' ?>" alt="" class="img-fluid">
		</div>


	</section><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
