<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

	<?php if(is_home()){ ?>
	<h1>
		<a href="<?php echo get_home_url() ?>">
			<!-- HEADER BRANDING LIMPO -->
		</a>
	</h1>
	<?php }else{ ?>
		<a href="<?php echo get_home_url() ?>">
			<!-- HEADER BRANDING LIMPO -->
		<a href="<?php echo get_home_url() ?>">
	<?php } ?>
</a>