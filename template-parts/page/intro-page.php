<?php 

//=====================
//CUSTOMIZER WORDPRESS
//=====================

//Título da seção
$section_title = get_theme_mod("section_title");
$section_color_title = get_theme_mod("section_color_title");
// Background da seção
$section_background = get_theme_mod("section_background", "none");

//=====================
// END OF CUSTOMIZER
//=====================


if(is_home()){
 ?>
 <section class="Section Section--style2 Section--intro u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-flexAlignItemsCenter u-paddingHorizontal backgroundImage" style="background-color:<?php echo $section_background; ?>;">
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-flexJustifyContentSpaceBetween u-flexAlignItemsCenter u-sizeFull">
		<header class="Captions u-alignCenter u-size13of24">
			<h1 class="Captions-title" style="color:<?php echo $section_color_title; ?>;"><?php echo $section_title; ?></h1>	
		</header>

		<?php get_template_part('template-parts/forms/form','intro-page'); ?>
	
	</div>
</section>

<?php }else{ ?>
	<section class="Section Section--style1 Section--introSingle"></section>
<?php } ?>

