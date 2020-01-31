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

<a class="Site-header-branding" href="<?php echo get_home_url() ?>">
    <div class="Site-header-branding-content u-positionRelative u-heightFull">
    
        <span class="Branding"><?=get_bloginfo("name")?></span>
    
    </div>
</a>