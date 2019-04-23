<?php

//=====================
//CUSTOMIZER WORDPRESS
//=====================

//Título do formulário
$form_title_get = get_theme_mod("form_title");
$form_color_title_get = get_theme_mod("form_color_title");
$form_title = $form_title_get ? $form_title_get : "Cadastre-se, é de graça.";
$form_color_title = $form_color_title_get ? $form_color_title_get : "none";


?>

<div class="Form Form--style1 Form--intro-page u-boxShadow u-borderRadius5 u-paddingHorizontal u-paddingVertical--inter--px u-marginTop--inter u-displayFlex u-flexJustifyContentCenter u-flexDirectionColumn u-size10of24">
	<div class="Form-line u-sizeFull">
		<h2 class="Section-header-subtitle u-alignCenter u-paddingBottom--inter" style="color: <?php echo $form_color_title; ?>;"><?php echo $form_title; ?></h2>
	</div>
	<?php echo do_shortcode('[contact-form-7 id="187" title="Formulário Captação de Leads"]'); ?>
</div>