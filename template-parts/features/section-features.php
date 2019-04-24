<?php

    //=====================
    //CUSTOMIZER WORDPRESS
    //=====================

    //Título da seção
    $section_title = get_theme_mod("servicos_title");
    
    //CORES DA SEÇÃO
    $primary_color = get_theme_mod("servicos_primary_color");
    $secondary_color = get_theme_mod("servicos_secondary_color");
    
    //CHECKBOX
    $servicos_background = get_theme_mod("servicos_background");

    //Layout da seção
    $section_layout = get_theme_mod("servicos_layout");
    
    $background_item_color = $servicos_background ? $secondary_color : $primary_color;
    $item_color = $servicos_background ? $primary_color : $secondary_color;

    if ($section_layout == "light"){
        $section_layout_title = "Section-header--light u-paddingBottom";
        $section_layout_items = "Section-content-items--light u-paddingVertical--inter--half--px u-marginBottom--inter";    
    }else if ($section_layout == "shadow"){    
        $section_layout_title = "Section-header--shadow";
        $section_layout_items = "Section-content-items--shadow u-boxShadow u-paddingHorizontal--inter u-paddingVertical--inter--px u-marginHorizontal--inter u-marginVertical--inter"; 
    }else{
        echo false;
    }

    //=====================
    // END OF CUSTOMIZER
    //=====================

    $args = array(
    'post_type'   => 'servicos',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    );
    
    $query = new WP_Query( $args );
    
    // FUNCIONALIDADE QUE ALTERA O TAMANHO DAS LI MEDIANTE QUANTIDADE DE CONTEÚDO
    $posts_array = $query->posts;
    if (sizeof($posts_array) == 1 || sizeof($posts_array) == 2){
        $sizeFeature = "u-size9of24";
    }else{
        $sizeFeature = "u-size6of24";
    }

    if( $query->have_posts() ) :
?>
<section class="Section Section--style1 Section--features u-paddingHorizontal u-paddingVertical" style="background:<?php echo $primary_color; ?>;">
    <div class="u-maxSize--container u-alignCenterBox">
        <header class="Section-header u-alignCenter <?php echo $section_layout_title; ?>">
            <h2 class="Section-header-title" style="color:<?php echo $secondary_color; ?>;"><?php echo $section_title; ?></h2>
        </header>
        <ul class="Section-item u-sizeFull u-displayFlex u-flexJustifyContentCenter u-flexWrapWrap">
            <?php while ($query->have_posts()):$query->the_post(); 
                    // // CAPTURANDO URL DA THUMBNAIL
                    $image_id = has_post_thumbnail() ? get_post_thumbnail_id() : "";
                    $thumbnail = $image_id ? wp_get_attachment_image_src($image_id)[0] : "";
            ?>
                <li class="Section-items-item <?php echo $sizeFeature; ?> u-displayFlex u-alignCenter u-flexDirectionColumn u-flexAlignItemsCenter  <?php echo $section_layout_items; ?>" style="background:<?php echo $background_item_color; ?>;">
                    <div class="Image">
                        <img src="<?php echo $image_id ? $thumbnail : get_template_directory_uri() . "/assets/images/featuretemplate.png" ; ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <h3 class="Section-items-item-title u-paddingBottom--inter--half" style="color:<?php echo $item_color; ?> !important;"><?php echo get_the_title(); ?></h3>
                    <p class="Section-items-item-resume" style="color:<?php echo $item_color . "95"; ?>;"><?php echo get_the_content(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php endif; ?>