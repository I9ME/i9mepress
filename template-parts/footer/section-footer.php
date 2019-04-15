<?php

$sitename = get_bloginfo("name");

// ENDEREÇOS
$args = array(
	"post_type" => "enderecos",
	"posts_per_page" => 3
);

$address = new WP_Query($args);

//CONTATOS
$args = array(
	"post_type" => "contatos",
	"posts_per_page" => 4
);

$contatos = new WP_Query($args);

//QUANTAS SEÇÕES DO FOOTER ESTÃO ATIVAS? - Sabendo dessa informação, posso adaptar a estilização do footer.
function counter_section_footer ($address, $contatos) {
    $counter = 0;
    if ($address->have_posts()) {
        $counter += 1;
    }
    if ($contatos->have_posts()) {
        $counter += 1;
    }
    // if ($social->have_posts()) {
    //     $counter += 1;
    // }
    return $counter;
}

?>

<section class="Section Section--style2 Section--footer u-paddingHorizontal">
    <div class="u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-flexJustifyContentSpaceBetween u-paddingVertical">
        <div class="Section-content u-size6of24 Section-content--branding u-paddingBottom--inter">
            <a class="<?php echo (is_home() || is_front_page()) ? "u-isScrollDown" : "" ; ?>" href="<?php echo (is_home() || is_front_page()) ? "#page" : get_home_url() ; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salupp-logo-white.png" alt="<?php echo get_bloginfo("name"); ?>" class="Site-header-branding u-displayBlock u-objectFitCover">
            </a>
        </div>
        <?php if ($address->have_posts()): ?>
            <div class="Section-content u-size6of24 u-paddingBottom--inter">
                <header class="Section-header u-paddingBottom--inter--half">
                    <h3 class="Section-header-title">Onde Estamos</h3>
                </header>
                <?php while ($address->have_posts()):$address->the_post(); ?>
                    <div class="Section-content u-marginBottom--inter--half u-displayFlex">
                        <svg class="u-icon iconLocation u-marginRight"><use xlink:href="#iconLocation"></use></svg>
                        <p class="Section-content-resume"><?php echo get_the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if ($contatos->have_posts()): ?>
        <div class="Section-content u-size6of24 u-paddingBottom--inter">
            <header class="Section-header u-paddingBottom--inter--half">
                <h3 class="Section-header-title">Contato</h3>
            </header>
            
            <ul class="Section-items">
                <?php while ($contatos->have_posts()):$contatos->the_post();
                    $tipo_contato = get_post_meta($post->ID, '_tipo_contato_meta_key', true);
                ?>
                    <li class="Section-items-item u-marginBottom--inter--half u-displayFlex u-flexAlignItemsCenter">
                        <?php echo define_svg($tipo_contato); ?>
                        <h4 class="Section-items-item-title"><?php echo get_the_content(); ?></h4>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="Section-content u-size6of24">
            <header class="Section-header u-paddingBottom--inter--half">
                <h3 class="Section-header-title">Siga-nos</h3>
            </header>
            <ul class="Section-items Section-items--redesSociais u-displayFlex">
                <li class="Section-items-item u-marginRight--inter--px">
                    <a class="Section-items-item-link u-borderRadius100 u-displayFlex u-flexAlignItemsCenter is-animating" href="#">
                        <svg class="u-icon iconFacebook is-animating"><use xlink:href="#iconFacebook"></use></svg>
                    </a>
                </li>
                <li class="Section-items-item">
                    <a class="Section-items-item-link u-borderRadius100 u-displayFlex u-flexAlignItemsCenter is-animating" href="#">
                        <svg class="u-icon iconInstagram is-animating"><use xlink:href="#iconInstagram"></use></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>