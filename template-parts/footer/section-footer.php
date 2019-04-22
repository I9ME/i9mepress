<?php

$sitename = get_bloginfo("name");


//=====================
//CUSTOMIZER WORDPRESS
//=====================

//=====BACKGROUND SEÇÃO=====//
$section_background = get_theme_mod("footer_background");

//=====COR DOS ÍCONES=====//
$footer_color_icon = get_theme_mod("footer_color_icon");

//=====MOSTRAR LOGOTIPO NO RODAPÉ=====//
$show_branding = get_theme_mod("footer_branding_show");

//=====LOCALIZAÇÃO=====//
$location_title = get_theme_mod("footer_location_title");
$location_color_title = get_theme_mod("footer_location_color_title");
$location_color_resume = get_theme_mod("footer_location_color_resume");


//=====CONTATOS=====//
$contatos_title = get_theme_mod("footer_contatos_title");
$contatos_color_title = get_theme_mod("footer_contatos_color_title");
$contatos_color_resume = get_theme_mod("footer_contatos_color_resume");


//=====REDES SOCIAIS=====//
$redes_title = get_theme_mod("footer_redes_title");
$redes_color_title = get_theme_mod("footer_redes_color_title");


//Ícones de redes sociais
$primary_color = get_theme_mod("footer_redes_primary_color");
$secondary_color = get_theme_mod("footer_redes_secondary_color");

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

if ($primary_color && $secondary_color){ ?>
    <style>

        /* APLICAÇÃO CUSTOMIZER PARA ÍCONE DE REDES SOCIAIS, SOLUÇÃO PROVISÓRIA */

        .Site-footer .Section-items-item-link{
            background: <?php echo $primary_color; ?> !important;
            border: 2px solid <?php echo $primary_color; ?> !important;
        }
        .Site-footer .Section-items-item-link .u-icon{
            fill: <?php echo $secondary_color; ?> !important; 
        }
        .Site-footer .Section-items-item-link:hover{
            background: <?php echo $secondary_color; ?> !important;
        }
        .Site-footer .Section-items-item-link:hover .u-icon{
            fill: <?php echo $primary_color; ?> !important; 
        }

    </style>
<?php }

//=====================
// END OF CUSTOMIZER
//=====================

//=====================
// CUSTOM POST TYPES
//=====================

// LOCATION
$argsAddress = array(
	"post_type" => "enderecos",
	"posts_per_page" => 3
);

$address = new WP_Query($argsAddress);

//CONTATOS
$argsContatos = array(
	"post_type" => "contatos",
	"posts_per_page" => 4
);

$contatos = new WP_Query($argsContatos);

//REDES SOCIAIS
$argsNetwork = array(
	"post_type" => "redes_sociais",
	"posts_per_page" => 6
);

$network = new WP_Query($argsNetwork);

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
                        <?php echo define_svg("location", $footer_color_icon); ?>
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
                            <?php echo define_svg($tipo_contato, $footer_color_icon); ?>
                            <h4 class="Section-items-item-title" style="color:<?php echo $contatos_color_resume; ?>;"><?php echo get_the_content(); ?></h4>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if ($network->have_posts()): ?>
            <div class="Section-content u-size6of24">
                <header class="Section-header u-paddingBottom--inter--half">
                    <h3 class="Section-header-title" style="color:<?php echo $redes_color_title; ?>;"><?php echo $redes_title; ?></h3>
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