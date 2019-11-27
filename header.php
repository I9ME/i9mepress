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


global $i9mepress;

get_template_part('template-parts/header/header','tags');

?>

<body <?php body_class("u-isCollapsed"); ?>>


	
<div id="page" class="Site">
	<div class="BlackMask"></div>

	<?php if ($i9mepress->has_header) : ?>

		<header id="masthead" class="Site-header u-sizeFull u-positionRelative is-animating u-zIndex20 u-paddingVertical">
			<div class="u-maxSize--container u-alignCenterBox u-positionRelative u-displayFlex u-heightFull">
				
				<?=get_template_part("template-parts/header/header", "navigation"); ?>
			
			</div>
		</header><!-- #masthead -->
	
	<?php endif; ?>

	<div class="Site-container">
		<div id="content" class="Site-container-content u-overflowHidden">
