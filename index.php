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
	
	<style>

		body{
			background: linear-gradient(#1D0C20, #46154f);
			background-size: cover;
			background-repeat: no-repeat;
			height: 1300px;
			overflow: hidden;
		}

		.welcome-box{
			width: 500px;
			padding: 30px;
			
			background: white;
			
		}

		.welcome-title{
			font-weight: lighter;
		}

		.welcome-title,
		.welcome-resume{
			color: #000;
			letter-spacing: 2px;
		}

	</style>
	<div class="welcome-box u-alignCenterBox u-marginTop u-alignCenter u-displayFlex u-flexAlignItemsCenter u-flexDirectionColumn u-maxSize--container u-borderRadius10 u-boxShadow animate-this">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/space-ship.png" alt="Astronauta">
		<h1 class="welcome-title u-marginTop--inter">Bem-vindo ao <strong>I9MEPRESS</strong>!</h1>
		<p class="welcome-resume">O ponto de partida para sua solução digital.</p>
		<a href="https://github.com/I9ME/i9mepress" target="_blank" class="Button Button--greetings Button--border is-animating Button--mediumSize u-marginTop--inter">Documentação</a>
	</div>
	<script>
	
	var body = document.getElementsByTagName("body")[0];
	console.log(body);
	
	body.className += " animate-this";
	
	</script>

</main><!-- #main -->



<?php get_footer();
