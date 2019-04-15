<?php
    $args = array(
    'post_type'   => 'features',
    'post_status' => 'publish',
    'posts_per_page' => 5,
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
<section class="Section Section--style1 Section--features u-paddingHorizontal u-paddingVertical">
    <div class="u-maxSize--container u-alignCenterBox">
        <header class="Section-header u-alignCenter u-paddingBottom">
            <h2 class="Section-header-title">Features</h2>
        </header>
        <ul class="Section-item u-sizeFull u-displayFlex u-flexJustifyContentCenter u-flexWrapWrap">
            <?php while ($query->have_posts()):$query->the_post(); 
                    // CAPTURANDO URL DA THUMBNAIL
                    $image_id = has_post_thumbnail() ? get_post_thumbnail_id() : "";
                    $thumbnail = $image_id ? wp_get_attachment_image_src($image_id)[0] : "";
            ?>
                <li class="Section-items-item <?php echo $sizeFeature; ?> u-displayFlex u-alignCenter u-flexDirectionColumn u-flexAlignItemsCenter u-paddingVertical--inter--half--px u-marginBottom--inter">
                    <div class="Image">
                        <img src="<?php echo $image_id ? $thumbnail : get_template_directory_uri() . "/assets/images/featuretemplate.png" ; ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <h3 class="Section-items-item-title u-paddingBottom--inter--half"><?php echo get_the_title(); ?></h3>
                    <p class="Section-items-item-resume"><?php echo get_the_content(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php endif; ?>