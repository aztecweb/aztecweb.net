<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Aztec
 * @since 0.1.0
 * @version 0.1.0
 */

get_header(); ?>

<div class="tmp-site">
	<img class="tmp-site--logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ) ?>" alt="<?php echo esc_attr( 'Aztec Logo' ) ?>" />
	
	<div class="tmp-site--message">
		Estamos construindo nosso site. Em breve teremos novidades.
	</div>
</div>

<?php get_footer(); ?>
