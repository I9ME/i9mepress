<?php global $i9mepress; ?>
<div class="Site-footer-content Site-footer-content--secondary">
    <div class="Section-content u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexJustifyContentSpaceBetween u-paddingHorizontal--inter--half u-paddingVertical u-alignCenter u-flexAlignItemsCenter">

        <span class="Copyrights u-paddingBottom--inter">© 2019 I9ME Web & Design. Todos os direitos reservados.</span>

        <a href="https://www.i9me.com.br/?utm_source=siteCliente&utm_medium=logoI9ME&utm_campaign=<?=$i9mepress->slugify(get_bloginfo("name"))?>" class="i9me u-displayFlex u-flexJustifyContentCenter u-flexAlignItemsCenter is-animating" target="_blank">

            <div class="i9me-box u-overflowHidden u-onlyDesktop u-positionRelative">
                <p class="i9me-lettering u-positionAbsolute is-animating">feito com <svg class="u-icon icon-heart1"><use xlink:href="#icon-heart1"></use></svg> pela</p>
            </div>
            
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/i9me-logo.png" alt="I9ME Web & Design" />

        </a>
    </div>

</div>