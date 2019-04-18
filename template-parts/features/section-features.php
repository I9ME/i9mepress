<?php

    //=====================
    //CUSTOMIZER WORDPRESS
    //=====================

    //Título da seção
    $section_title_get = get_theme_mod("servicos_title");
    $section_color_title_get = get_theme_mod("servicos_color_title");
    $section_title = $section_title_get ? $section_title_get : "Serviços";
    $section_color_title = $section_color_title_get ? $section_color_title_get : "none";
    
    //Layout da seção
    $section_layout_get = get_theme_mod("servicos_layout");
    if ($section_layout_get == "light"){
        $section_layout_title = "Section-header--light u-paddingBottom";
        $section_layout_items = "Section-content-items--light u-paddingVertical--inter--half--px u-marginBottom--inter";
        
        //Layouts simples não precisam de background
        $item_background = "none";

    }else if ($section_layout_get == "shadow"){
        
        $section_layout_title = "Section-header--shadow";
        $section_layout_items = "Section-content-items--shadow u-boxShadow u-paddingHorizontal--inter u-paddingVertical--inter--px u-marginHorizontal--inter u-marginVertical--inter";
        
        // Background item
        $item_background_get = get_theme_mod("item_background");
        $item_background = $item_background_get ? $item_background_get : "none";
    
    }else{
        $section_layout_title = false;
        $section_layout_items = false;
        $item_background = false;
    }

    // Background seção
    $section_background_get = get_theme_mod("servicos_background");
    $section_background = $section_background_get ? $section_background_get : "none";

    //Título do item
    $item_color_title_get = get_theme_mod("item_color_title");
    $item_color_title = $item_color_title_get ? $item_color_title_get : "none";

    //Parágrafo do item
    $item_color_resume_get = get_theme_mod("item_color_resume");
    $item_color_resume = $item_color_resume_get ? $item_color_resume_get : "none";



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
<section class="Section Section--style1 Section--features u-paddingHorizontal u-paddingVertical" style="background:<?php echo $section_background; ?>;">
    <div class="u-maxSize--container u-alignCenterBox">
        <header class="Section-header u-alignCenter <?php echo $section_layout_title; ?>">
            <h2 class="Section-header-title" style="color:<?php echo $section_color_title; ?>;"><?php echo $section_title; ?></h2>
        </header>
        <ul class="Section-item u-sizeFull u-displayFlex u-flexJustifyContentCenter u-flexWrapWrap">
            <?php while ($query->have_posts()):$query->the_post(); 
                    // CAPTURANDO URL DA THUMBNAIL
                    $image_id = has_post_thumbnail() ? get_post_thumbnail_id() : "";
                    $thumbnail = $image_id ? wp_get_attachment_image_src($image_id)[0] : "";
            ?>
                <li class="Section-items-item <?php echo $sizeFeature; ?> u-displayFlex u-alignCenter u-flexDirectionColumn u-flexAlignItemsCenter  <?php echo $section_layout_items; ?>" style="background:<?php echo $item_background; ?>">
                    <div class="Image">
                        <img src="<?php echo $image_id ? $thumbnail : get_template_directory_uri() . "/assets/images/featuretemplate.png" ; ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <h3 class="Section-items-item-title u-paddingBottom--inter--half" style="color:<?php echo $item_color_title; ?>;"><?php echo get_the_title(); ?></h3>
                    <p class="Section-items-item-resume"style="color:<?php echo $item_color_resume; ?>;"><?php echo get_the_content(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php endif; ?>