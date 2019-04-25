<?php

//=====================
// CUSTOMIZER WORDPRESS
//=====================

//Cores da seção
$item_color_texts = get_theme_mod("diferenciais_texts_color");
$section_background = get_theme_mod("diferenciais_background");

//Layout da seção
$section_layout_get = get_theme_mod("diferenciais_layout");
if ($section_layout_get == "light"){

    $section_layout_items = "Section-items-item--light";
    
    //Layouts simples não precisam de background
    $item_background = "";

}else if ($section_layout_get == "shadow"){
    
    $section_layout_items = "Section-items-item--shadow u-boxShadow u-paddingHorizontal--inter u-paddingVertical--inter--px";
    
    // Background diferencial
    $item_background = get_theme_mod("diferenciais_item_background");

}else{

    $section_layout_items = false;
    $item_background = false;
}


//=====================
// END OF CUSTOMIZER
//=====================

$args = array(
    'post_type'   => 'diferenciais',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);

$query = new WP_Query( $args );

?>
    <section class="Section Section--style1 Section--diferenciais u-paddingHorizontal" style="background: <?php echo $section_background; ?> ;">
        <div class="u-maxSize--container u-alignCenterBox u-paddingVertical">
            <?php if( $query->have_posts() ): ?>
                <ul class="Section-items u-size10of24">
                <?php while( $query->have_posts() ): $query->the_post();
                    // CAPTURANDO URL DA THUMBNAIL
                    $image_id = has_post_thumbnail() ? get_post_thumbnail_id() : "";
                    $thumbnail = $image_id ? wp_get_attachment_image_src($image_id)[0] : "";
                ?>
                    <li class="Section-items-item u-displayFlex u-flexAlignItemsCenter u-flexDirectionColumn u-flexSwitchRow u-marginBottom <?php echo $section_layout_items; ?>" style="background:<?php echo $item_background; ?>;">
                        <div class="Image">
                            <img src="<?php echo $image_id ? $thumbnail : get_template_directory_uri() . "/assets/images/featuretemplate.png" ; ?>" alt="<?php echo get_the_title(); ?>">
                        </div>
                        <div class="Content u-alignCenter">
                            <h2 class="Section-items-item-title u-paddingBottom--inter--half" style="color: <?php echo $item_color_texts; ?>;"><?php echo get_the_title(); ?></h2>
                            <p class="Section-items-item-resume" style="color: <?php echo $item_color_texts . "95"; ?>;"><?php echo get_the_content(); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>