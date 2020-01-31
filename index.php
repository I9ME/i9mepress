<?php
/**
 * The main template file
 * 
 * I9MEPRESS Main Template File
 * PARA COMEÇAR A EDITAR SEU TEMA, EXCLUA TUDO QUE ESTÁ DENTRO DA TAG <main>
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
			background: #00375d;
			background-size: cover;
			background-repeat: no-repeat;
			height: 1300px;
			overflow: hidden;
		}

		.welcome-box{
			width: 100%;
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
		#rocket{
			position: absolute;
			left: 0;
			bottom: -100%;
		}

		.rocket-content{
			position: relative;
			width: 64px;
			height: 64px;
			overflow: hidden;
		}

		#greetings{
			opacity: 0;
		}

		#rocket,
		#greetings{
			transition: all .6s;
		}
		.Site-footer{
			bottom: 0;
			position: absolute;
			width: 100%;
		}

		@media screen and (min-width: 768px){
			.welcome-box{
				width: 500px;
			}
		}
		@media screen and (min-width: 960px){
			body{
				height: 1300px;
			}
		}

	</style>
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical">
		<div class="welcome-box u-alignCenterBox u-marginTop--inter u-alignCenter u-displayFlex u-flexAlignItemsCenter u-flexDirectionColumn u-borderRadius10 u-boxShadow animate-this">
			<div class="rocket-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/space-ship.png" class="rocket" id="rocket" alt="Astronauta">
			</div>
			<div id="greetings">
				<h1 class="welcome-title u-marginTop--inter">Bem-vindo ao <strong>I9MEPRESS</strong>!</h1>
				<p class="welcome-resume">Próxima parada: <?=get_bloginfo("name")?>.</p>
			</div>
			<a href="https://github.com/I9ME/i9mepress" target="_blank" class="Button Button--greetings Button--border is-animating Button--mediumSize u-marginTop--inter">Documentação</a>
			
		</div>
	</div>
	<script>

	var rocket_launch = function () {
		
		var rocket = document.getElementById("rocket");
		var content = document.getElementById("greetings");

		rocket.style.bottom = 0;
		content.style.opacity = 1;		
	}
		
	window.onload = rocket_launch;
	
	</script>

</main><!-- #main -->



<?php get_footer();
