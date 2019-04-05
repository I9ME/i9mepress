<?php 

if(is_home()){

 ?>
 <section class="Section Section--style2 Section--intro u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-flexAlignItemsCenter u-paddingHorizontal backgroundImage">
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-flexJustifyContentSpaceBetween u-flexAlignItemsCenter u-sizeFull">
		<header class="Captions u-alignCenter u-size13of24">
			<h1 class="Captions-title">The spectable before us was indeed sublime.</h1>
		</header>

		<?php get_template_part('template-parts/forms/form','intro-page'); ?>
	
	</div>
</section>

<?php }else{ ?>
	<section class="Section Section--style1 Section--introSingle"></section>
<?php } ?>

