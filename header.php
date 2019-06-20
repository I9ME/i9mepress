<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

 get_template_part('template-parts/header/header','tags');
 
?>

<body <?php body_class(); ?>>


	
<div id="page" class="Site">
	<header id="masthead" class="Site-header u-sizeFull is-animating u-zIndex20 u-paddingHorizontal--inter">
		<?php get_template_part('template-parts/header/header','contacts');?>
		<div class="Site-header-content u-maxSize--container u-alignCenterBox u-paddingVertical">
			<div class="u-displayFlex u-sizeFull u-flexJustifyContentCenter">
				<!-- Logo do site -->
				<?php get_template_part('template-parts/header/header','branding');?>
			</div>
		</div><!-- .u-maxSize--container -->


	</header><!-- #masthead -->

	

	<div class="Site-container">
		<div id="content" class="Site-container-content u-overflowHidden">
