<?php

$sitename = get_bloginfo("name");

//=====================
//CUSTOMIZER WORDPRESS
//=====================

// Background seção
$section_background_get = get_theme_mod("footer_background");
$section_background = $section_background_get ? $section_background_get : "";

//Mostrar logotipo no rodapé
$show_branding = get_theme_mod("footer_branding_show");

// LOCATION
$argsAddress = array(
	"post_type" => "enderecos",
	"posts_per_page" => 3
);

$address = new WP_Query($argsAddress);

$location_title_get = get_theme_mod("footer_location_title");
$location_color_title_get = get_theme_mod("footer_color_title");
$location_color_resume_get = get_theme_mod("footer_location_color_resume");

//Título de location
$location_title = $location_title_get ? $location_title_get : "Onde estamos";
//Cor de título location
$location_color_title = $location_color_title_get ? $location_color_title_get : "";
//Cor das localizações
$location_color_resume = $location_color_resume_get ? $location_color_resume_get : "";

//CONTATOS
$argsContatos = array(
	"post_type" => "contatos",
	"posts_per_page" => 4
);

$contatos = new WP_Query($argsContatos);

$contatos_title_get = get_theme_mod("footer_contatos_title");
$contatos_color_title_get = get_theme_mod("footer_contatos_color_title");
$contatos_color_icon_get = get_theme_mod("footer_contatos_color_icon");
$contatos_color_resume_get = get_theme_mod("footer_contatos_color_resume");

//Título de contatos
$contatos_title = $contatos_title_get ? $contatos_title_get : "Fale conosco";
//Cor de título contatos
$contatos_color_title = $contatos_color_title_get ? $contatos_color_title_get : "";
//Cor de ícone
$contatos_color_icon = $contatos_color_icon_get ? $contatos_color_icon_get : "";
//Cor das localizações
$contatos_color_resume = $contatos_color_resume_get ? $contatos_color_resume_get : "";


//REDES SOCIAIS
$argsNetwork = array(
	"post_type" => "redes_sociais",
	"posts_per_page" => 6
);

$network = new WP_Query($argsNetwork);

$redes_title_get = get_theme_mod("footer_redes_title");
$redes_color_title_get = get_theme_mod("footer_redes_color_title");

//Título de redes
$redes_title = $redes_title_get ? $redes_title_get : "Fale conosco";
//Cor de título redes
$redes_color_title = $redes_color_title_get ? $redes_color_title_get : "";


//QUANTAS SEÇÕES DO FOOTER ESTÃO ATIVAS? - Sabendo dessa informação, posso adaptar a estilização do footer.
// function counter_section_footer ($address, $contatos, $social) {
//     $counter = 0;
//     if ($address->have_posts()) {
//         $counter += 1;
//     }
//     if ($contatos->have_posts()) {
//         $counter += 1;
//     }
//     if ($social->have_posts()) {
//         $counter += 1;
//     }
//     return $counter;
// }

?>

<section class="Section Section--style2 Section--footer u-paddingHorizontal" style="background:<?php echo $section_background; ?>;">
    <div class="u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-flexJustifyContentSpaceBetween u-paddingVertical">
        <?php if ($show_branding == true): ?>
            <div class="Section-content u-size6of24 Section-content--branding u-paddingBottom--inter">
                <a class="<?php echo (is_home() || is_front_page()) ? "u-isScrollDown" : "" ; ?>" href="<?php echo (is_home() || is_front_page()) ? "#page" : get_home_url() ; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salupp-logo-white.png" alt="<?php echo get_bloginfo("name"); ?>" class="Site-header-branding u-displayBlock u-objectFitCover">
                </a>
            </div>
        <?php endif; ?>
        <?php if ($address->have_posts()): ?>
            <div class="Section-content u-size6of24 u-paddingBottom--inter">
                <header class="Section-header u-paddingBottom--inter--half">
                    <h3 class="Section-header-title" style="color:<?php echo $location_color_title; ?>;"><?php echo $location_title; ?></h3>
                </header>
                <?php while ($address->have_posts()):$address->the_post(); ?>
                    <div class="Section-content u-marginBottom--inter--half u-displayFlex u-flexAlignItemsCenter">
                        <svg class="u-icon iconLocation u-marginRight" style="fill:<?php echo $location_color_icon; ?>;"><use xlink:href="#iconLocation"></use></svg>
                        <p class="Section-content-resume" style="color:<?php echo $location_color_resume; ?>;"><?php echo get_the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if ($contatos->have_posts()): ?>
            <div class="Section-content u-size6of24 u-paddingBottom--inter">
                <header class="Section-header u-paddingBottom--inter--half">
                    <h3 class="Section-header-title" style="color:<?php echo $contatos_color_title; ?>;"><?php echo $contatos_title; ?></h3>
                </header>
                
                <ul class="Section-items">
                    <?php while ($contatos->have_posts()):$contatos->the_post();
                        $tipo_contato = get_post_meta($post->ID, '_tipo_contato_meta_key', true);
                    ?>
                        <li class="Section-items-item u-marginBottom--inter--half u-displayFlex u-flexAlignItemsCenter">
                            <?php echo define_svg($tipo_contato, $contatos_color_icon); ?>
                            <h4 class="Section-items-item-title" style="color:<?php echo $contatos_color_resume; ?>;"><?php echo get_the_content(); ?></h4>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if ($network->have_posts()): ?>
            <div class="Section-content u-size6of24">
                <header class="Section-header u-paddingBottom--inter--half">
                    <h3 class="Section-header-title">Siga-nos</h3>
                </header>
                <ul class="Section-items Section-items--redesSociais u-displayFlex u-flexWrapWrap u-sizeFull">
                    <?php while ($network->have_posts()):$network->the_post();
                        $tipo_rede_social = get_post_meta($post->ID, '_tipo_rede_social_meta_key', true); ?>
                        <li class="Section-items-item u-marginRight--inter--half--px u-marginBottom--inter--half">
                            <a class="Section-items-item-link u-borderRadius100 u-displayFlex u-flexAlignItemsCenter is-animating" href="<?php echo get_the_content(); ?>" target="_blank">
                                <?php echo define_svg($tipo_rede_social); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>