<?php

$sitename = get_bloginfo("name");

?>

<section class="Section Section--style2 Section--footer u-paddingHorizontal">
    <div class="u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexWrapWrap u-paddingVertical">
        <div class="Section-content Section-content--branding u-paddingBottom--inter">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salupp-logo-white.png" alt="<?php echo get_bloginfo("name"); ?>" class="Site-header-branding u-displayBlock u-objectFitCover">
        </div>
        <div class="Section-content u-paddingBottom--inter">
            <header class="Section-header u-paddingBottom--inter--half">
                <h3 class="Section-header-title">Onde estamos?</h3>
            </header>
            <div class="Section-content">
                <p class="Section-content-resume">Av. Lorem Ipsum, 6483</p>
                <p class="Section-content-resume">Bairro das Flores</p>
                <p class="Section-content-resume">Cidade (ES)</p>
            </div>
        </div>
        <div class="Section-content u-paddingBottom--inter">
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
                    <h4 class="Section-items-item-title">contato@template.com.br</h4>
                </li>
            </ul>
        </div>
        <div class="Section-content">
            <header class="Section-header u-paddingBottom--inter--half">
                <h3 class="Section-header-title">Redes Sociais</h3>
            </header>
            <ul class="Section-items Section-items--redesSociais u-displayFlex">
                <li class="Section-items-item u-marginRight--inter--px">
                    <a href="#">
                        <svg class="u-icon u-borderRadius100 iconFacebook is-animating"><use xlink:href="#iconFacebook"></use></svg>
                    </a>
                </li>
                <li class="Section-items-item">
                    <a href="#">
                        <svg class="u-icon u-borderRadius100 iconInstagram is-animating"><use xlink:href="#iconInstagram"></use></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>