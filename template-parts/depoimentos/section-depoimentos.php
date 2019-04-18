<?php

    //=====================
    //CUSTOMIZER WORDPRESS
    //=====================

    //Título da seção
    $section_title_get = get_theme_mod("depoimentos_title");
    $section_color_title_get = get_theme_mod("depoimentos_color_title");
    $section_title = $section_title_get ? $section_title_get : "Depoimentos";
    $section_color_title = $section_color_title_get ? $section_color_title_get : "";

    // Background seção
    $section_background_get = get_theme_mod("depoimentos_background");
    $section_background = $section_background_get ? $section_background_get : "";

    // Background depoimentos
    $item_background_get = get_theme_mod("depoimentos_item_background");
    $item_background = $item_background_get ? $item_background_get : "";

    //Título do item
    $item_color_title_get = get_theme_mod("depoimentos_item_color_title");
    $item_color_title = $item_color_title_get ? $item_color_title_get : "";

    //Título do cargo
    $item_color_cargo_get = get_theme_mod("depoimentos_item_color_cargo");
    $item_color_cargo = $item_color_cargo_get ? $item_color_cargo_get : "";

    //Parágrafo do item
    $item_color_resume_get = get_theme_mod("depoimentos_item_color_resume");
    $item_color_resume = $item_color_resume_get ? $item_color_resume_get : "";

    $args = array(
        'post_type'   => 'depoimentos',
        'post_status' => 'publish',
        'posts_per_page' => 5,
    );
    
    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
?>
<section class="Section Section--style1 Section--depoimentos u-paddingHorizontal" style="background:<?php echo $section_background; ?>;">
    <div class="u-maxSize--container u-alignCenterBox u-paddingVertical">
        <div id="depoimentos" class="Section-header">
            <h2 class="Section-header-title u-alignCenter" style="color:<?php echo $section_color_title; ?>;"><strong><?php echo $section_title; ?></strong></h2>
        </div>
        <ul id="depoimentos-carousel" class="Section-items owl-carousel u-paddingVertical u-alignCenter">
            <?php
                while( $query->have_posts() ) :
                    $query->the_post();
                    $metabox = get_post_meta( $post->ID, '_urlswitch', true );
                    ?>
                    <li class="Section-items-item u-displayFlex u-flexDirectionColumn u-paddingVertical u-flexJustifyContentCenter u-flexAlignItemsCenter u-alignCenter u-boxShadow u-marginHorizontal--inter u-marginVertical u-paddingHorizontal--inter" style="background:<?php echo $item_background; ?>;">
                        <figure class="Section-items-item-figure u-borderRadius100">
                            <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
                        </figure>
                        <h3 class="Section-items-item-title u-paddingTop--inter--half" style="color:<?php echo $item_color_title; ?>;"><?php echo get_the_title(); ?></h3>
                        <h4 class="Section-items-item-subtitle u-paddingBottom--inter--half" style="color:<?php echo $item_color_cargo; ?>;"><?php echo $metabox;?></h4>
                        <p class="Section-items-item-resume" style="color:<?php echo $item_color_resume; ?>;">"<?php echo get_the_content(); ?>"</p>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>
<?php endif; ?>