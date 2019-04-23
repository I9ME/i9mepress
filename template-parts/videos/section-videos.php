<?php

//=====================
//CUSTOMIZER WORDPRESS
//=====================

//OVERLAY DO VÍDEO
$video_mask = get_theme_mod("videos_mask");

//GRADIENTE SEM IMAGEM DE FUNDO
$primary_gradient = get_theme_mod("videos_primary_gradient");
$secondary_gradient = get_theme_mod("videos_secondary_gradient");

//PLAYER DE VÍDEO
$player_primary_color = get_theme_mod("player_primary_color");
$player_secondary_color = get_theme_mod("player_secondary_color");

//TÍTULO DO VÍDEO
$videos_color_title = get_theme_mod("videos_color_title");

//OWL DOTS
$owl_dot_p_color = get_theme_mod("videos_primary_color_dots");
$owl_dot_s_color = get_theme_mod("videos_secondary_color_dots");

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
    if ($player_primary_color && $player_secondary_color) { ?>
    <style>
        .Section--videos .Section-items-item-link .u-icon {
            border: 3px solid <?php echo $player_primary_color; ?>;
            fill: <?php echo $player_primary_color; ?>;
        }
        .Section--videos .Section-items-item-link .u-icon:hover{
            background: <?php echo $player_primary_color; ?>;
            fill: <?php echo $player_secondary_color; ?>;
        }
    </style>
<?php 
    }

    // OWL DOTS
    if ($owl_dot_p_color && $owl_dot_s_color){
?>
    <style>
        .Section--videos .owl-dots .owl-dot.active{
            background: <?php echo $owl_dot_p_color; ?> !important;
            border: 2px solid <?php echo $owl_dot_s_color; ?> !important;
        }
        .Section--videos .owl-dots .owl-dot{
            background: <?php echo $owl_dot_p_color; ?>50 !important;
            border: 2px solid <?php echo $owl_dot_s_color; ?>80 !important;
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
            
            // CHECA SE EXISTE URL CADASTRADA, SE NÃO TIVER, O VÍDEO É OCULTADO DO LOOP
            if (!(empty($videoCode[1]))):
    ?>
                <li class="Section-items-item u-sizeFull u-heightFull u-positionRelative">
                    <?php echo $image_id ? '<img class="Section-background u-sizeFull u-heightFull u-positionAbsolute u-objectFitCover u-zIndex0" src="'. $thumbnail .'" alt="Background vídeo">' : ""; ?>
                    <div class="Section-content <?php echo $image_id ? "Section-content--hasThumbnail" : ""; ?> u-positionRelative u-sizeFull u-heightFull u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-flexAlignItemsCenter u-paddingVertical zIndex10" style="background: <?php echo $image_id ? $video_mask . "50" : "linear-gradient(to right, $primary_gradient, $secondary_gradient);"; ?>;">
                        <a class="Section-items-item-link u-marginBottom--inter--half" href="javascript:LightboxCall(<?php echo esc_html( $iFrame )?>, 'video');">
                            <svg class="u-icon iconPlay u-borderRadius100 is-animating u-displayFlex u-flexJustifyContentCenter u-flexAlignItemsCenter"><use xlink:href="#iconPlay"></use></svg>
                        </a>
                        <h2 class="Section-header-title u-alignCenter" style="color:<?php echo $videos_color_title; ?>;"><?php echo get_the_title(); ?></h2>  
                    </div>
                </li>
            <?php endif; ?> <!-- empty videocode -->
        
    <?php endwhile; ?> <!-- while query have posts -->
    </ul>
    
</section>
<?php endif; ?> <!-- if query have posts -->