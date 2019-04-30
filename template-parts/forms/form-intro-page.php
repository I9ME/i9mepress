<?php

//=====================
//CUSTOMIZER WORDPRESS
//=====================

//Título do formulário
$form_title = get_theme_mod("form_title");
$form_color_title = get_theme_mod("form_color_title");

//background
$form_background = get_theme_mod("form_background");

//Cor primária do botão
$p_color = get_theme_mod("button_primary_color");

//Cor secundária do botão
$s_color = get_theme_mod("button_secondary_color");

//=====================
// END OF CUSTOMIZER
//=====================

if ($p_color && $s_color){
	?>
	<style>
		.Section--style2 .Button--background{
			background: <?php echo $p_color; ?> !important;
		}
		.Section--style2 .Button--background:hover{
			background: transparent !important;
		}
		.Section--style2 .Button--background.Button--border{
			border-color: <?php echo $p_color; ?>!important;
			color: <?php echo $s_color; ?>!important;
		}
		.Section--style2 .Button--background.Button--border:hover{
			color: <?php echo $p_color; ?>!important;
		}

	</style>

<?php } ?>

<div class="Form Form--style1 Form--intro-page u-boxShadow u-borderRadius5 u-paddingHorizontal u-paddingVertical--inter--px u-marginTop--inter u-displayFlex u-flexJustifyContentCenter u-flexDirectionColumn u-size10of24" style="background:<?php echo $form_background; ?>;">
	<div class="Form-line u-sizeFull">
		<h2 class="Section-header-subtitle u-alignCenter u-paddingBottom--inter" style="color: <?php echo $form_color_title; ?>;"><?php echo $form_title; ?></h2>
	</div>
	<?php echo do_shortcode('[contact-form-7 id="187" title="Formulário Captação de Leads"]'); ?>
</div>