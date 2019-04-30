<?php

//=====================
//CUSTOMIZER WORDPRESS
//=====================

//CORES DE FUNDO
$primary_color = get_theme_mod("videos_primary_color");
$secondary_color = get_theme_mod("videos_secondary_color");

//CORES DOS ITENS
$click_primary_color = get_theme_mod("videos_click_primary_color");
$click_secondary_color = get_theme_mod("videos_click_secondary_color");

//=====================
// END OF CUSTOMIZER
//=====================

$args = array(
    "post_type" => "videos",
    "post_status" => "publish",
    "posts_per_page" => 6
);

$query = new WP_Query($args);

if ($query->have_posts()):  
?>

<?php 
    // PLAYER DE VÍDEO
    if ($primary_color && $secondary_color) { ?>
    <style>
        .Section--videos .Section-items-item-link .u-icon {
            border: 3px solid <?php echo $click_primary_color; ?>;
            fill: <?php echo $click_primary_color; ?>;
        }
        .Section--videos .Section-items-item-link .u-icon:hover{
            background: <?php echo $click_primary_color; ?>;
            fill: <?php echo $click_secondary_color; ?>;
        }
    </style>
<?php 
    }

    // OWL DOTS
    if ($click_primary_color && $click_secondary_color){
?>
    <style>
        .Section--videos .owl-dots .owl-dot.active{
            background: <?php echo $click_primary_color; ?> !important;
            border: 2px solid <?php echo $click_secondary_color; ?> !important;
        }
        .Section--videos .owl-dots .owl-dot{
            background: <?php echo $click_primary_color; ?>50 !important;
            border: 2px solid <?php echo $click_secondary_color; ?>80 !important;
        }
    </style>

<?php
    }
?>

<section class="Section Section--style2 Section--videos u-positionRelative u-paddingBottom">
    <ul id="videos-carousel" class="Section-items u-sizeFull u-heightFull u-positionAbsolute u-zIndex0 owl-carousel">
    <?php while ($query->have_posts()): $query->the_post(); 
            
            // CAPTURANDO URL DA THUMBNAIL
            $image_id = has_post_thumbnail() ? get_post_thumbnail_id() : "";
            $thumbnail = $image_id ? wp_get_attachment_image_src($image_id)[0] : "";

            // CAPTURANDO O IFRAME DO YOUTUBE
            $videoCode = preg_split("/=/", get_the_content());
            $linkEmbed = "https://www.youtube.com/embed/$videoCode[1]?autoplay=1";
            $iFrame = "\"<iframe width='560' height='315' src='$linkEmbed' frameborder='0' allowfullscreen allow='autoplay'></iframe>\"";
            $hasBackground = $image_id ? "90" : "";
            
            // CHECA SE EXISTE URL CADASTRADA, SE NÃO TIVER, O VÍDEO É OCULTADO DO LOOP
            if (!(empty($videoCode[1]))):
    ?>
                <li class="Section-items-item u-sizeFull u-heightFull u-positionRelative">
                    <?php echo $image_id ? '<img class="Section-background u-sizeFull u-heightFull u-positionAbsolute u-objectFitCover u-zIndex0" src="'. $thumbnail .'" alt="Background vídeo">' : ""; ?>
                    <div class="Section-content <?php echo $image_id ? "Section-content--hasThumbnail" : ""; ?> u-positionRelative u-sizeFull u-heightFull u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-flexAlignItemsCenter u-paddingVertical zIndex10" style="background: <?php echo "linear-gradient(to right, $primary_color". $hasBackground .", $secondary_color". $hasBackground .")"; ?>;">
                        <a class="Section-items-item-link u-marginBottom--inter--half" href="javascript:LightboxCall(<?php echo esc_html( $iFrame )?>, 'video');">
                            <svg class="u-icon iconPlay u-borderRadius100 is-animating u-displayFlex u-flexJustifyContentCenter u-flexAlignItemsCenter"><use xlink:href="#iconPlay"></use></svg>
                        </a>
                        <h2 class="Section-header-title u-alignCenter" style="color:<?php echo $click_primary_color; ?>;"><?php echo get_the_title(); ?></h2>  
                    </div>
                </li>
            <?php endif; ?> <!-- empty videocode -->
        
    <?php endwhile; ?> <!-- while query have posts -->
    </ul>
    
</section>
<?php endif; ?> <!-- if query have posts -->