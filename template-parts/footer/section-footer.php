<?php

$sitename = get_bloginfo("name");

// ENDEREÇOS
$args = array(
	"post_type" => "enderecos",
	"posts_per_page" => 3
);

$address = new WP_Query($args);

?>

<section class="Section Section--style2 Section--footer u-paddingHorizontal">
    <div class="u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-flexJustifyContentSpaceBetween u-paddingVertical">
        <div class="Section-content u-size6of24 Section-content--branding u-paddingBottom--inter">
            <a class="<?php echo (is_home() || is_front_page()) ? "u-isScrollDown" : "" ; ?>" href="<?php echo (is_home() || is_front_page()) ? "#page" : get_home_url() ; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salupp-logo-white.png" alt="<?php echo get_bloginfo("name"); ?>" class="Site-header-branding u-displayBlock u-objectFitCover">
            </a>
        </div>
            <div class="Section-content u-size6of24 u-paddingBottom--inter">
                <header class="Section-header u-paddingBottom--inter--half">
                    <h3 class="Section-header-title">Onde Estamos</h3>
                </header>
                <?php if ($address->have_posts()): ?>
                    <?php while ($address->have_posts()):$address->the_post(); ?>
                        <div class="Section-content u-marginBottom--inter--half u-displayFlex">
                            <svg class="u-icon iconLocation u-marginRight"><use xlink:href="#iconLocation"></use></svg>
                            <p class="Section-content-resume"><?php echo get_the_content(); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <div class="Section-content u-size6of24 u-paddingBottom--inter">
            <header class="Section-header u-paddingBottom--inter--half">
                <h3 class="Section-header-title">Contato</h3>
            </header>
            <ul class="Section-items">
                <li class="Section-items-item u-displayFlex u-paddingBottom--inter--half">
                    <svg class="u-icon iconPhone u-marginRight"><use xlink:href="#iconPhone"></use></svg>
                    <h4 class="Section-items-item-title">(85) 9 9876 5432</h4>
                </li>
                <li class="Section-items-item u-displayFlex">
                    <svg class="u-icon u-icon--mail iconEnvelope u-marginRight"><use xlink:href="#iconEnvelope"></use></svg>
                    <h4 class="Section-items-item-title">contato@salupp.com.br</h4>
                </li>
            </ul>
        </div>
        <div class="Section-content u-size6of24">
            <header class="Section-header u-paddingBottom--inter--half">
                <h3 class="Section-header-title">Redes Sociais</h3>
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