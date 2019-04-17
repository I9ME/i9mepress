<?php 

// TÍTULO DINÂMICO

$args = array(
	"post_type" => "titulo_site",
	"posts_per_page" => 1
);
$color = get_theme_mod("section_background", "none");
$query = new WP_Query($args);
// echo "<pre>";
// print_r($query);die;

if(is_home()){
 ?>
 <section class="Section Section--style2 Section--intro u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-flexAlignItemsCenter u-paddingHorizontal backgroundImage" style="background-color:<?php echo $color; ?>;">
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-flexJustifyContentSpaceBetween u-flexAlignItemsCenter u-sizeFull">
		<header class="Captions u-alignCenter u-size13of24">
		<?php 
			if ($query->have_posts()){
				while ($query->have_posts()):$query->the_post(); 
		?> 
					<h1 class="Captions-title"><?php echo get_the_title(); ?></h1>
		<?php 
				endwhile; 
		?>
		<?php 
			}else{ 
		?>
				<h1 class="Captions-title">Bem-vindo a nossa landing page.</h1>		
		<?php
			} 
		?>
		</header>

		<?php get_template_part('template-parts/forms/form','intro-page'); ?>
	
	</div>
</section>

<?php }else{ ?>
	<section class="Section Section--style1 Section--introSingle"></section>
<?php } ?>

