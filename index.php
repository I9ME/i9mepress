<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- teste -->
<main id="main" class="SiteMain Site-main" role="main">
	<?php //  get_template_part('template-parts/plugins/plugin','lightbox'); ?>
	<?php get_template_part('template-parts/page/intro','page'); ?>
	<?php get_template_part('template-parts/newservice/section','service'); ?>
	<?php get_template_part('template-parts/comercio-exterior/section','comercio-exterior'); ?>
	<?php get_template_part('template-parts/cotacao/section','cotacao'); ?>
	<?php get_template_part('template-parts/noticias/section','noticias'); ?>
	<?php get_template_part('template-parts/sobre-nos/section','sobre-nos'); ?>
	<?php get_template_part('template-parts/atendimento/section','atendimento'); ?>
</main><!-- #main -->



<?php get_footer();
